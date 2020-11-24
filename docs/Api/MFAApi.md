# MailInABoxAPI\Client\MFAApi

All URIs are relative to *https://box.example.com/admin*

Method | HTTP request | Description
------------- | ------------- | -------------
[**mfaStatus**](MFAApi.md#mfaStatus) | **POST** /mfa/status | Retrieve MFA status for you or another user
[**mfaTotpDisable**](MFAApi.md#mfaTotpDisable) | **POST** /mfa/disable | Disable multi-factor authentication for you or another user
[**mfaTotpEnable**](MFAApi.md#mfaTotpEnable) | **POST** /mfa/totp/enable | Enable TOTP authentication



## mfaStatus

> \MailInABoxAPI\Client\Model\MfaStatusResponse mfaStatus()

Retrieve MFA status for you or another user

Retrieves which type of MFA is used and configuration

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: basicAuth
$config = MailInABoxAPI\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new MailInABoxAPI\Client\Api\MFAApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->mfaStatus();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MFAApi->mfaStatus: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

This endpoint does not need any parameter.

### Return type

[**\MailInABoxAPI\Client\Model\MfaStatusResponse**](../Model/MfaStatusResponse.md)

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: application/json, text/html

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## mfaTotpDisable

> string mfaTotpDisable($mfaId)

Disable multi-factor authentication for you or another user

Disables multi-factor authentication for the currently logged-in admin user or another user if a 'user' parameter is submitted. Either disables all multi-factor authentication methods or the method corresponding to the optional property `mfa_id`.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: basicAuth
$config = MailInABoxAPI\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new MailInABoxAPI\Client\Api\MFAApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$mfaId = 'mfaId_example'; // string | 

try {
    $result = $apiInstance->mfaTotpDisable($mfaId);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MFAApi->mfaTotpDisable: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **mfaId** | **string**|  | [optional]

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


## mfaTotpEnable

> string mfaTotpEnable($secret, $code, $label)

Enable TOTP authentication

Enables TOTP authentication for the currently logged-in admin user

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: basicAuth
$config = MailInABoxAPI\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new MailInABoxAPI\Client\Api\MFAApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$secret = 'secret_example'; // string | 
$code = 'code_example'; // string | 
$label = 'label_example'; // string | 

try {
    $result = $apiInstance->mfaTotpEnable($secret, $code, $label);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MFAApi->mfaTotpEnable: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **secret** | **string**|  |
 **code** | **string**|  |
 **label** | **string**|  | [optional]

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

