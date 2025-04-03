<?php

// Check if necessary extensions are enabled
if (!function_exists('curl_init')) {
    throw new Exception('TalentLMS API needs the CURL PHP extension.');
}

if (!function_exists('json_decode')) {
    throw new Exception('TalentLMS API needs the JSON PHP extension.');
}

// Simple .env file parser
function parseDotEnv($filePath) {
    if (!file_exists($filePath)) {
        throw new Exception('.env file not found');
    }

    $lines = file($filePath, FILE_IGNORE_NEW_LINES | FILE_SKIP_EMPTY_LINES);
    $env = [];

    foreach ($lines as $line) {
        // Skip comments
        if (strpos(trim($line), '#') === 0) {
            continue;
        }

        // Split name and value
        list($name, $value) = explode('=', $line, 2);
        $name = trim($name);
        $value = trim($value);

        // Remove quotes if present
        if (preg_match('/^"(.*)"$/', $value, $matches)) {
            $value = $matches[1];
        } elseif (preg_match('/^\'(.*)\'$/', $value, $matches)) {
            $value = $matches[1];
        }

        $env[$name] = $value;
    }

    return $env;
}

// Load environment variables
try {
    $env = parseDotEnv(__DIR__ . '/.env');
    
    // Validate required variables
    $required = ['TALENTLMS_API_KEY', 'TALENTLMS_DOMAIN'];
    foreach ($required as $var) {
        if (!isset($env[$var])) {
            throw new Exception("Missing required environment variable: $var");
        }
    }
} catch (Exception $e) {
    die('Configuration error: ' . $e->getMessage());
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

// Set API Key and Domain from .env
DerejaAcademy::setApiKey($env['TALENTLMS_API_KEY']);
DerejaAcademy::setDomain($env['TALENTLMS_DOMAIN']);



// Making API Requests (example)
// Making API Requests with dynamic endpoints
function makeApiRequest($endpoint, $method = 'GET', $data = []) {
    $url = DerejaAcademy::getApiBase() . $endpoint;

    $ch = curl_init($url);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

    if ($method == 'POST') {
        curl_setopt($ch, CURLOPT_POST, true);
        curl_setopt($ch, CURLOPT_POSTFIELDS, json_encode($data));
    }

    curl_setopt($ch, CURLOPT_USERPWD, DerejaAcademy::getApiKey() . ":");
    curl_setopt($ch, CURLOPT_HTTPHEADER, ['Content-Type: application/json']);

    $response = curl_exec($ch);
    
    if (curl_errno($ch)) {
        throw new Exception('Curl error: ' . curl_error($ch));
    }

    $httpCode = curl_getinfo($ch, CURLINFO_HTTP_CODE);
    curl_close($ch);

    $decodedResponse = json_decode($response, true);

    if ($httpCode >= 400) {
        $errorMessage = $decodedResponse['error']['message'] ?? 'Unknown error occurred';
        throw new Exception("API Error ($httpCode): $errorMessage");
    }

    return $decodedResponse;
}

// Get the endpoint from request parameters
$requestedEndpoint = $_GET['endpoint'] ?? 'courses';
$getAll = isset($_GET['all']) && strtolower($_GET['all']) === 'true'; // New parameter to get all items
$ids = isset($_GET['id']) ? explode(',', $_GET['id']) : [];

// Validate endpoint
$validEndpoints = ['courses', 'users', 'categories', 'branches', 'groups', 'units', 'siteinfo'];
$endpoint = strtolower($requestedEndpoint);

if (!in_array($endpoint, $validEndpoints)) {
    header('Content-Type: application/json', true, 400);
    echo json_encode([
        'error' => true,
        'message' => 'Invalid endpoint. Valid endpoints are: ' . implode(', ', $validEndpoints),
        'available_endpoints' => $validEndpoints
    ], JSON_PRETTY_PRINT);
    exit;
}


try {
    if ($getAll) {
        // First fetch all IDs if only_ids is true
        $allItems = makeApiRequest('/' . $endpoint, 'GET');
        
        if (isset($_GET['only_ids']) && strtolower($_GET['only_ids']) === 'true') {
            // Extract just the IDs
            $idsOnly = array_map(function($item) {
                return $item['id'] ?? null;
            }, $allItems);
            
            $idsOnly = array_values(array_filter($idsOnly)); // Remove nulls and reindex
            
            // If auto_fetch_details is set, use the IDs to fetch full details
            if (isset($_GET['auto_fetch_details']) && strtolower($_GET['auto_fetch_details']) === 'true') {
                $response = [];
                foreach ($idsOnly as $id) {
                    $item = makeApiRequest('/' . $endpoint . '/id:' . $id, 'GET');
                    if ($item) {
                        $response[] = $item;
                    }
                }
            } else {
                // Just return the IDs
                $response = $idsOnly;
            }
        } else {
            // Regular all=true request (return all items with full details)
            $response = $allItems;
        }
    } elseif (!empty($ids)) {
        // Existing multiple IDs logic
        $response = [];
        foreach ($ids as $id) {
            $item = makeApiRequest('/' . $endpoint . '/id:' . $id, 'GET');
            if ($item) {
                $response[] = $item;
            }
        }
    } else {
        // Default behavior (all items or specific item if ID was provided)
        $response = makeApiRequest('/' . $endpoint, 'GET');
    }

    header('Content-Type: application/json');
    echo json_encode($response, JSON_PRETTY_PRINT | JSON_UNESCAPED_SLASHES);

} catch (Exception $e) {
    header('Content-Type: application/json', true, 500);
    echo json_encode([
        'error' => true,
        'message' => $e->getMessage(),
        'code' => $e->getCode()
    ], JSON_PRETTY_PRINT);
}

// Request Endpoints
// ?endpoint=courses
// ?endpoint=courses&id=309

// ?endpoint=courses&all=true
// ?endpoint=courses&all=true&only_ids=true
// ?endpoint=courses&id=309,310

// ?endpoint=courses&all=true&only_ids=true&auto_fetch_details=true


// ?endpoint=users
// ?endpoint=users&id=123



?>