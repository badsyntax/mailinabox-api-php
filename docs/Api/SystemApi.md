# MailInABoxAPI\Client\SystemApi

All URIs are relative to *https://box.example.com/admin*

Method | HTTP request | Description
------------- | ------------- | -------------
[**getSystemBackupConfig**](SystemApi.md#getSystemBackupConfig) | **GET** /system/backup/config | 
[**getSystemBackupStatus**](SystemApi.md#getSystemBackupStatus) | **GET** /system/backup/status | 
[**getSystemPrivacyStatus**](SystemApi.md#getSystemPrivacyStatus) | **GET** /system/privacy | 
[**getSystemRebootStatus**](SystemApi.md#getSystemRebootStatus) | **GET** /system/reboot | 
[**getSystemStatus**](SystemApi.md#getSystemStatus) | **POST** /system/status | 
[**getSystemUpdates**](SystemApi.md#getSystemUpdates) | **GET** /system/updates | 
[**getSystemUpstreamVersion**](SystemApi.md#getSystemUpstreamVersion) | **POST** /system/latest-upstream-version | 
[**getSystemVersion**](SystemApi.md#getSystemVersion) | **GET** /system/version | 
[**rebootSystem**](SystemApi.md#rebootSystem) | **POST** /system/reboot | 
[**updateSystemBackupConfig**](SystemApi.md#updateSystemBackupConfig) | **POST** /system/backup/config | 
[**updateSystemPackages**](SystemApi.md#updateSystemPackages) | **POST** /system/update-packages | 
[**updateSystemPrivacy**](SystemApi.md#updateSystemPrivacy) | **POST** /system/privacy | 



## getSystemBackupConfig

> \MailInABoxAPI\Client\Model\SystemBackupConfigResponse getSystemBackupConfig()



Retrieve backup config.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: basicAuth
$config = MailInABoxAPI\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new MailInABoxAPI\Client\Api\SystemApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->getSystemBackupConfig();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SystemApi->getSystemBackupConfig: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

This endpoint does not need any parameter.

### Return type

[**\MailInABoxAPI\Client\Model\SystemBackupConfigResponse**](../Model/SystemBackupConfigResponse.md)

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: application/json, text/html

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## getSystemBackupStatus

> \MailInABoxAPI\Client\Model\SystemBackupStatusResponse getSystemBackupStatus()



Retrieve backup status.  If the list of backups is empty, this implies no backups have been made yet.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: basicAuth
$config = MailInABoxAPI\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new MailInABoxAPI\Client\Api\SystemApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->getSystemBackupStatus();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SystemApi->getSystemBackupStatus: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

This endpoint does not need any parameter.

### Return type

[**\MailInABoxAPI\Client\Model\SystemBackupStatusResponse**](../Model/SystemBackupStatusResponse.md)

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: application/json, text/html

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## getSystemPrivacyStatus

> bool getSystemPrivacyStatus()



Retrieve new-version check status.  Response:    - `true`: Private, new-version checks will not be performed   - `false`: Not private, new-version checks will be performed

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: basicAuth
$config = MailInABoxAPI\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new MailInABoxAPI\Client\Api\SystemApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->getSystemPrivacyStatus();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SystemApi->getSystemPrivacyStatus: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

This endpoint does not need any parameter.

### Return type

**bool**

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: application/json, text/html

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## getSystemRebootStatus

> bool getSystemRebootStatus()



Retrieve reboot status.  Response:    - `true`: A reboot is required   - `false`: A reboot is not required

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: basicAuth
$config = MailInABoxAPI\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new MailInABoxAPI\Client\Api\SystemApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->getSystemRebootStatus();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SystemApi->getSystemRebootStatus: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

This endpoint does not need any parameter.

### Return type

**bool**

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: application/json, text/html

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## getSystemStatus

> \MailInABoxAPI\Client\Model\SystemStatusResponse getSystemStatus()



Retrieve system status. Returns an array of statuses which can include headings.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: basicAuth
$config = MailInABoxAPI\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new MailInABoxAPI\Client\Api\SystemApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->getSystemStatus();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SystemApi->getSystemStatus: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

This endpoint does not need any parameter.

### Return type

[**\MailInABoxAPI\Client\Model\SystemStatusResponse**](../Model/SystemStatusResponse.md)

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: application/json, text/html

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## getSystemUpdates

> string getSystemUpdates()



Retrieve system updates.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: basicAuth
$config = MailInABoxAPI\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new MailInABoxAPI\Client\Api\SystemApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->getSystemUpdates();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SystemApi->getSystemUpdates: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

This endpoint does not need any parameter.

### Return type

**string**

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: text/html

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## getSystemUpstreamVersion

> string getSystemUpstreamVersion()



Retrieve Mail-in-a-Box upstream version.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: basicAuth
$config = MailInABoxAPI\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new MailInABoxAPI\Client\Api\SystemApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->getSystemUpstreamVersion();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SystemApi->getSystemUpstreamVersion: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

This endpoint does not need any parameter.

### Return type

**string**

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: text/html

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## getSystemVersion

> string getSystemVersion()



Retrieve installed Mail-in-a-Box version.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: basicAuth
$config = MailInABoxAPI\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new MailInABoxAPI\Client\Api\SystemApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->getSystemVersion();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SystemApi->getSystemVersion: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

This endpoint does not need any parameter.

### Return type

**string**

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: text/html

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## rebootSystem

> string rebootSystem()



Reboot system.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: basicAuth
$config = MailInABoxAPI\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new MailInABoxAPI\Client\Api\SystemApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->rebootSystem();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SystemApi->rebootSystem: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

This endpoint does not need any parameter.

### Return type

**string**

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: application/json, text/html

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## updateSystemBackupConfig

> string updateSystemBackupConfig($target, $targetUser, $targetPass, $minAge)



Update backup config.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: basicAuth
$config = MailInABoxAPI\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new MailInABoxAPI\Client\Api\SystemApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$target = 'target_example'; // string | 
$targetUser = 'targetUser_example'; // string | 
$targetPass = 'targetPass_example'; // string | 
$minAge = 56; // int | 

try {
    $result = $apiInstance->updateSystemBackupConfig($target, $targetUser, $targetPass, $minAge);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SystemApi->updateSystemBackupConfig: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **target** | **string**|  |
 **targetUser** | **string**|  |
 **targetPass** | **string**|  |
 **minAge** | **int**|  |

### Return type

**string**

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

- **Content-Type**: application/x-www-form-urlencoded
- **Accept**: text/html

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## updateSystemPackages

> string updateSystemPackages()



Update system packages.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: basicAuth
$config = MailInABoxAPI\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new MailInABoxAPI\Client\Api\SystemApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->updateSystemPackages();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SystemApi->updateSystemPackages: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

This endpoint does not need any parameter.

### Return type

**string**

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: text/html

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## updateSystemPrivacy

> string updateSystemPrivacy($value)



Update new-version check status.  Request:    - `value: private`: Disable new version checks   - `value: off`: Enable new version checks

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: basicAuth
$config = MailInABoxAPI\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new MailInABoxAPI\Client\Api\SystemApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$value = new \MailInABoxAPI\Client\Model\SystemPrivacyStatus(); // \MailInABoxAPI\Client\Model\SystemPrivacyStatus | 

try {
    $result = $apiInstance->updateSystemPrivacy($value);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SystemApi->updateSystemPrivacy: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **value** | [**\MailInABoxAPI\Client\Model\SystemPrivacyStatus**](../Model/SystemPrivacyStatus.md)|  |

### Return type

**string**

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

- **Content-Type**: application/x-www-form-urlencoded
- **Accept**: text/html

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)

