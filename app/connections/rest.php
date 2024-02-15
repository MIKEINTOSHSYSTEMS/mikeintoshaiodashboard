<?php

class RestConnection {
	var $connId;
	var $url;
	var $authType;

	var $username;
	var $password;

	var $apiKey;
	var $keyLocation;
	var $keyParameter;

	var $authUrl;
	var $tokenUrl;
	var $clientId;
	var $clientSecret;
	var $scope;

	protected $error = "";
	protected $responseCode = "";
	protected $response;

	function __construct( $params ) {
		$this->connId = $params["connId"];
		$this->url = $params["url"];
		$this->authType = $params["authType"];
	
		$this->username = $params["username"];
		$this->password = $params["password"];
	
		$this->apiKey = $params["apiKey"];
		$this->keyLocation = $params["keyLocation"];
		$this->keyParameter = $params["keyParameter"];
	
		$this->authUrl = $params["authUrl"];
		$this->tokenUrl = $params["tokenUrl"];
		$this->clientId = $params["clientId"];
		$this->clientSecret = $params["clientSecret"];
		$this->scope = $params["scope"];
	}

	/**
	 * Returns JSON oject or false in case of error
	 * "content" => response body
	 * "error" => error message if any
	 */
	function requestJson( $urlRequest, $method, $payload = array(), $headers = null, $urlParams = null ) {
		$paramStrings = array();
		if( $urlParams ) {
			foreach( $urlParams as $ukey => $uval ) {
				$paramStrings[] = rawurlencode( $ukey ) . "=" . rawurlencode( $uval );
			}
			$urlRequest.= ( strpos( $urlRequest, "?") === false ? "?" : "&" ) . implode("&", $paramStrings );
		}
		if( !$payload ) {
			$payload = array();
		}
		$res = &$this->requestWithAuth( $this->url . $urlRequest, $method, $payload, $headers );
		if( $res === false ) {
			return false;
		}
		$obj = my_json_decode( $res );
		if( is_array($obj) && count( $obj ) == 0 ) {
			//	unable to parse?
			$this->error = "Unable to parse JSON result\n\n" . $res;
			return false;
		}
		return $obj;
	}

	function  getOauthToken() {
		$sessionKey = "oauthToken_" . $this->connId;
//		$tokenData = checkRefreshOauthToken( $_SESSION[ $sessionKey ], $this );
		$tokenData = $this->checkRefreshOauthToken( $_SESSION[ $sessionKey ], $this );
		$_SESSION[ $sessionKey ] = $tokenData[ "token" ];
		return $tokenData[ "bearer" ];
	}

	function setOauthToken( $token ) {
		$sessionKey = "oauthToken_" . $this->connId;
		$_SESSION[ $sessionKey ] = $token;
	}

	/**
	 * @return String or false
	 */
	function & requestWithAuth( $url, $method, $payload, $headers ) {

		if( $headers ) {
			$headers = array();
		}
		
		global $restResultCache;

		if( !$payload && !$headers && isset( $restResultCache[ $url ] ) ) {
			return $restResultCache[ $url ];
		}

		if( $this->authType === "oauth" ) {
			$token = $this->getOauthToken();
			$headers["Authorization"] = "Bearer ". $token;
		}
		if( $this->authType === "basic" ) { // Basic HTTP
			$headers["Authorization"] = "Basic " . base64_encode( $this->username . ':' .$this->password );
		}
		if( $this->authType === "api" ) { //	API key
			if( $this->keyLocation == 1 ) {
				$headers[ $this->keyParameter ] = $this->apiKey;
			}
			else if( $this->keyLocation == 0 ){
				$url = prepareUrl( $url, array( $this->keyParameter => $this->apiKey ) );
			}
			else {
				$payload[ $this->keyParameter ] = $this->apiKey;
			}
		}
		$ret = runner_http_request( $url, $payload, $method, $headers );
		
		if( $ret["error"] ) {
			$this->error = $ret["error"];
			return false;
		}
		
		if( $this->authType === "basic" ) { // Basic HTTP
			if( $ret["responseCode"] < 200 || $ret["responseCode"] >= 300 ) {
				$this->error = $ret["header"] . $ret["content"];
				return false;
			}
		}
		if( !$payload )
			$restResultCache[ $url ] = &$ret["content"];
		return $ret["content"];
	}

	/**
	 * @return String
	 */
	public function lastError()
	{
		return $this->error;
	}

	public function oauthNeedLogin() {
		if( $this->authType != "oauth" )
			return false;
		$sessionKey = "oauthToken_" . $this->connId;
		return !$_SESSION[ $sessionKey ];
	}

	/**
	 * @return Array( "url" => redirect url, "state" => state to save )
	 */
	public function getAuthRequest() {
		$state = generatePassword(30);
		$params =  array(
			'response_type'   => 'code',
			'approval_prompt' => 'auto',
			'redirect_uri' => projectURL() . GetTableLink("oauthcallback"),
			'client_id' => $this->clientId,
			'state' => $state
		);
		if( $this->scope ) {
			$params["scope"] = $this->scope;
		}

		return array( 
			"url" => prepareUrl( $this->authUrl, $params ),
			"state" => $state
		);
	}

	protected function getAccessToken( $params ) {
		$params[ "client_id" ] = $this->clientId;
		$params[ "client_secret" ] = $this->clientSecret;
		$params[ "redirect_uri" ] = projectURL() . GetTableLink("oauthcallback");
		$headers = array();
		$headers["Authorization"] = "Basic " . base64_encode( $this->clientId . ':' .$this->clientSecret );
		$headers["Content-Type"] = 'application/x-www-form-urlencoded';

		$response = runner_http_request( $this->tokenUrl, $params, "POST", $headers );

		$result = $this->parseAuthResponse( $response );
		$accessToken = array(
			"access_token" => $result["access_token"],
			"refresh_token" => $result["refresh_token"]
		);
		if( $result["expires_in"]) {
			$accessToken["expires"] = time() + $result["expires_in"];
		} else if( $result["expires"] ) {
			$accessToken["expires"] = 0 + $result["expires"];

			$oauth2InceptionDate = 1349067600; // 2012-10-01
			if ( $accessToken["expires"] <= $oauth2InceptionDate ) {
				$accessToken["expires"] += time();
			}
		}
		return $accessToken;
	}
	
	public function validateToken( $code ) {
		
		if( !$code ) {
			$this->error = "Provider returned no authorization code";
			return false;
		}
		$params = array(
			'grant_type'	=> 'authorization_code',
			'code'			=> $code,
		);
		$accessToken = $this->getAccessToken( $params );
		return my_json_encode( $accessToken );
	}

	protected function parseAuthResponse( $response ) {
		$headers = explode( "\r\n", $response["header"] );
		$urlencoded = false;
		foreach( $headers as $h ) {
			if( stripos( $h, "Content-Type:" ) === 0 && stripos( $h, "urlencoded") !== false ) {
				$urlencoded = true;
				break;
			}
		}
		if( $urlencoded ) {
			$result = array();
			$result = parseQueryString( $response["content"] );
			return $result;
		}
		return my_json_decode( $response["content"] );
	}

	protected function checkRefreshOauthToken( $token ) 
	{
		$accessToken = my_json_decode( $token );
		$timeAllowance = 2;
		if( $accessToken["expires"] && $accessToken["expires"] < time() - $timeAllowance ) {
			$params = array(
				'grant_type'	=> 'refresh_token',
				'refresh_token'	=> $accessToken['refresh_token']
			);
			$accessToken = $this->getAccessToken( $params );
			$token = my_json_encode( $accessToken );
		}
		return array( 
			"bearer" => $accessToken["access_token"],
			"token" => $token
		);
	}
	
	

}
?>