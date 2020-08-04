# MailInABoxAPI\Client\UserApi

All URIs are relative to *https://box.example.com/admin*

Method | HTTP request | Description
------------- | ------------- | -------------
[**getMe**](UserApi.md#getMe) | **GET** /me | 



## getMe

> \MailInABoxAPI\Client\Model\MeResponse getMe()



Get user information, used for user authentication.  Authenticate a user by supplying the auth token as a base64 encoded string in format `email:password` using basic authentication headers.  If successful, a long-lived `api_key` is returned which can be used for subsequent requests to the API.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: basicAuth
$config = MailInABoxAPI\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new MailInABoxAPI\Client\Api\UserApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->getMe();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UserApi->getMe: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

This endpoint does not need any parameter.

### Return type

[**\MailInABoxAPI\Client\Model\MeResponse**](../Model/MeResponse.md)

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)

