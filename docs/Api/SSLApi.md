# MailInABoxAPI\Client\SSLApi

All URIs are relative to *https://box.example.com/admin*

Method | HTTP request | Description
------------- | ------------- | -------------
[**generateSSLCSR**](SSLApi.md#generateSSLCSR) | **POST** /ssl/csr/{domain} | Generate SSL CSR
[**getSSLStatus**](SSLApi.md#getSSLStatus) | **GET** /ssl/status | Get SSL status
[**installSSLCertificate**](SSLApi.md#installSSLCertificate) | **POST** /ssl/install | Install SSL certificate
[**provisionSSLCertificates**](SSLApi.md#provisionSSLCertificates) | **POST** /ssl/provision | Provision SSL certificates



## generateSSLCSR

> string generateSSLCSR($domain, $countrycode)

Generate SSL CSR

Generates a Certificate Signing Request (CSR) for a domain & country code.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: basicAuth
$config = MailInABoxAPI\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new MailInABoxAPI\Client\Api\SSLApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$domain = 'domain_example'; // string | Domain to generate CSR for.
$countrycode = 'countrycode_example'; // string | 

try {
    $result = $apiInstance->generateSSLCSR($domain, $countrycode);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SSLApi->generateSSLCSR: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **domain** | **string**| Domain to generate CSR for. |
 **countrycode** | **string**|  |

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


## getSSLStatus

> \MailInABoxAPI\Client\Model\SSLStatusResponse getSSLStatus()

Get SSL status

Returns the SSL status for all domains.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: basicAuth
$config = MailInABoxAPI\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new MailInABoxAPI\Client\Api\SSLApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->getSSLStatus();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SSLApi->getSSLStatus: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

This endpoint does not need any parameter.

### Return type

[**\MailInABoxAPI\Client\Model\SSLStatusResponse**](../Model/SSLStatusResponse.md)

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: application/json, text/html

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## installSSLCertificate

> string installSSLCertificate($domain, $cert, $chain)

Install SSL certificate

Installs a custom certificate. The chain certificate is optional.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: basicAuth
$config = MailInABoxAPI\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new MailInABoxAPI\Client\Api\SSLApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$domain = 'domain_example'; // string | Hostname format.
$cert = 'cert_example'; // string | TLS/SSL certificate.
$chain = 'chain_example'; // string | TLS/SSL intermediate chain (if provided, else empty string).

try {
    $result = $apiInstance->installSSLCertificate($domain, $cert, $chain);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SSLApi->installSSLCertificate: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **domain** | **string**| Hostname format. |
 **cert** | **string**| TLS/SSL certificate. |
 **chain** | **string**| TLS/SSL intermediate chain (if provided, else empty string). |

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


## provisionSSLCertificates

> \MailInABoxAPI\Client\Model\SSLCertificatesProvisionResponse provisionSSLCertificates()

Provision SSL certificates

Provisions certificates for all domains.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: basicAuth
$config = MailInABoxAPI\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new MailInABoxAPI\Client\Api\SSLApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->provisionSSLCertificates();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SSLApi->provisionSSLCertificates: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

This endpoint does not need any parameter.

### Return type

[**\MailInABoxAPI\Client\Model\SSLCertificatesProvisionResponse**](../Model/SSLCertificatesProvisionResponse.md)

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: application/json, text/html

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)

