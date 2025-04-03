<?php

// Check if necessary extensions are enabled
if (!function_exists('curl_init')) {
    throw new Exception('TalentLMS API needs the CURL PHP extension.');
}

if (!function_exists('json_decode')) {
    throw new Exception('TalentLMS API needs the JSON PHP extension.');
}

// Main class to handle API interactions for Dereja Academy
abstract class DerejaAcademy {

    // API configuration
    public static $apiKey;
    public static $domain;
    public static $apiBase;
    public static $apiProtocol = 'https';

    const VERSION = '1.0';

    // Getters and setters for the API Key and Domain
    public static function getApiKey() {
        return self::$apiKey;
    }

    public static function setApiKey($apiKey) {
        self::$apiKey = $apiKey;
    }

    public static function getDomain() {
        return self::$domain;
    }

    public static function setDomain($domain) {
        $domain = str_replace('http://', '', $domain);
        $domain = str_replace('https://', '', $domain);
        $domain = str_replace('/', '', $domain);

        self::$domain = $domain;
        self::$apiBase = self::$apiProtocol . '://' . $domain . '/api/v1'; // Set API base URL
    }

    public static function getApiBase() {
        return self::$apiBase;
    }

    public static function setApiBase($apiBase) {
        if (parse_url($apiBase, PHP_URL_SCHEME) != 'https') {
            throw new Exception('Dereja Academy API accepts only HTTPS connection.');
        }
        self::$apiBase = $apiBase;
    }
}

// Errors handling
require(dirname(__FILE__) . '/LMS/ApiError.php');

// Internal helpers for making requests and processing responses
require(dirname(__FILE__) . '/LMS/ApiRequestor.php');
require(dirname(__FILE__) . '/LMS/ApiResource.php');

// Resources for working with Users, Courses, Categories, etc.
require(dirname(__FILE__) . '/LMS/User.php');
require(dirname(__FILE__) . '/LMS/Course.php');
require(dirname(__FILE__) . '/LMS/Category.php');
require(dirname(__FILE__) . '/LMS/Branch.php');
require(dirname(__FILE__) . '/LMS/Group.php');
require(dirname(__FILE__) . '/LMS/Unit.php');
require(dirname(__FILE__) . '/LMS/SiteInfo.php');

// Example of setting the API Key and Domain
DerejaAcademy::setApiKey('3T6udv5l2bq7XSRd9iraZMJQSvrxAN');
DerejaAcademy::setDomain('academy.dereja.com');

// Making API Requests (example)
function makeApiRequest($endpoint, $method = 'GET', $data = []) {
    $url = DerejaAcademy::getApiBase() . $endpoint;

    $ch = curl_init($url);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

    // Set the request method (GET or POST)
    if ($method == 'POST') {
        curl_setopt($ch, CURLOPT_POST, true);
        curl_setopt($ch, CURLOPT_POSTFIELDS, json_encode($data));
    }

    // Add API Key for HTTP Basic Authentication
    curl_setopt($ch, CURLOPT_USERPWD, DerejaAcademy::getApiKey() . ":"); // API key as the username, empty password

    // Set content type as application/json
    curl_setopt($ch, CURLOPT_HTTPHEADER, [
        'Content-Type: application/json',
    ]);

    // Execute the cURL request and get the response
    $response = curl_exec($ch);

    // Check for errors
    if (curl_errno($ch)) {
        throw new Exception('Curl error: ' . curl_error($ch));
    }

    // Close the cURL session
    curl_close($ch);

    // Decode and return the response
    return json_decode($response, true);
}

// Example of making a GET request to fetch course data
$response = makeApiRequest('/courses', 'GET');

// Set proper Content-Type header for JSON output
header('Content-Type: application/json');

// Output raw pretty-printed JSON
echo json_encode($response, JSON_PRETTY_PRINT | JSON_UNESCAPED_SLASHES);

?>