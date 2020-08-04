# MailInABoxAPI\Client\DNSApi

All URIs are relative to *https://box.example.com/admin*

Method | HTTP request | Description
------------- | ------------- | -------------
[**addDnsCustomRecord**](DNSApi.md#addDnsCustomRecord) | **POST** /dns/custom/{domain}/{type} | 
[**addDnsCustomRecordForTypeA**](DNSApi.md#addDnsCustomRecordForTypeA) | **POST** /dns/custom/{domain} | 
[**addDnsSecondaryNameserver**](DNSApi.md#addDnsSecondaryNameserver) | **POST** /dns/secondary-nameserver | 
[**getDnsCustomRecords**](DNSApi.md#getDnsCustomRecords) | **GET** /dns/custom | 
[**getDnsCustomRecordsForDomainAndType**](DNSApi.md#getDnsCustomRecordsForDomainAndType) | **GET** /dns/custom/{domain}/{type} | 
[**getDnsCustomRecordsForDomainAndTypeA**](DNSApi.md#getDnsCustomRecordsForDomainAndTypeA) | **GET** /dns/custom/{domain} | 
[**getDnsDump**](DNSApi.md#getDnsDump) | **GET** /dns/dump | 
[**getDnsSecondaryNameserver**](DNSApi.md#getDnsSecondaryNameserver) | **GET** /dns/secondary-nameserver | 
[**getDnsZones**](DNSApi.md#getDnsZones) | **GET** /dns/zones | 
[**removeDnsCustomRecord**](DNSApi.md#removeDnsCustomRecord) | **DELETE** /dns/custom/{domain}/{type} | 
[**removeDnsCustomRecordForTypeA**](DNSApi.md#removeDnsCustomRecordForTypeA) | **DELETE** /dns/custom/{domain} | 
[**updateDns**](DNSApi.md#updateDns) | **POST** /dns/update | 
[**updateDnsCustomRecord**](DNSApi.md#updateDnsCustomRecord) | **PUT** /dns/custom/{domain}/{type} | 
[**updateDnsCustomRecordForTypeA**](DNSApi.md#updateDnsCustomRecordForTypeA) | **PUT** /dns/custom/{domain} | 



## addDnsCustomRecord

> string addDnsCustomRecord($domain, $type, $body)



Add a custom DNS record.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: basicAuth
$config = MailInABoxAPI\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new MailInABoxAPI\Client\Api\DNSApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$domain = 'domain_example'; // string | DNS record domain
$type = new \MailInABoxAPI\Client\Model\\MailInABoxAPI\Client\Model\DNSRecordType(); // \MailInABoxAPI\Client\Model\DNSRecordType | Record type
$body = 'body_example'; // string | The value of the DNS record

try {
    $result = $apiInstance->addDnsCustomRecord($domain, $type, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DNSApi->addDnsCustomRecord: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **domain** | **string**| DNS record domain |
 **type** | [**\MailInABoxAPI\Client\Model\DNSRecordType**](../Model/.md)| Record type |
 **body** | **string**| The value of the DNS record |

### Return type

**string**

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

- **Content-Type**: text/plain
- **Accept**: text/html

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## addDnsCustomRecordForTypeA

> string addDnsCustomRecordForTypeA($domain, $body)



Add a custom DNS A record.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: basicAuth
$config = MailInABoxAPI\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new MailInABoxAPI\Client\Api\DNSApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$domain = 'domain_example'; // string | DNS record domain
$body = 'body_example'; // string | The value of the DNS record

try {
    $result = $apiInstance->addDnsCustomRecordForTypeA($domain, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DNSApi->addDnsCustomRecordForTypeA: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **domain** | **string**| DNS record domain |
 **body** | **string**| The value of the DNS record |

### Return type

**string**

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

- **Content-Type**: text/plain
- **Accept**: text/html

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## addDnsSecondaryNameserver

> string addDnsSecondaryNameserver($hostnames)



Add secondary nameservers.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: basicAuth
$config = MailInABoxAPI\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new MailInABoxAPI\Client\Api\DNSApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$hostnames = 'hostnames_example'; // string | Hostnames separated with commas or spaces

try {
    $result = $apiInstance->addDnsSecondaryNameserver($hostnames);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DNSApi->addDnsSecondaryNameserver: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **hostnames** | **string**| Hostnames separated with commas or spaces |

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


## getDnsCustomRecords

> \MailInABoxAPI\Client\Model\DNSCustomRecordsResponse getDnsCustomRecords()



Retrieve all custom DNS records.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: basicAuth
$config = MailInABoxAPI\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new MailInABoxAPI\Client\Api\DNSApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->getDnsCustomRecords();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DNSApi->getDnsCustomRecords: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

This endpoint does not need any parameter.

### Return type

[**\MailInABoxAPI\Client\Model\DNSCustomRecordsResponse**](../Model/DNSCustomRecordsResponse.md)

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: application/json, text/html

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## getDnsCustomRecordsForDomainAndType

> \MailInABoxAPI\Client\Model\DNSCustomRecordsResponse getDnsCustomRecordsForDomainAndType($domain, $type)



Get DNS records for domain and type

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: basicAuth
$config = MailInABoxAPI\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new MailInABoxAPI\Client\Api\DNSApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$domain = 'domain_example'; // string | DNS record domain
$type = new \MailInABoxAPI\Client\Model\\MailInABoxAPI\Client\Model\DNSRecordType(); // \MailInABoxAPI\Client\Model\DNSRecordType | Record type

try {
    $result = $apiInstance->getDnsCustomRecordsForDomainAndType($domain, $type);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DNSApi->getDnsCustomRecordsForDomainAndType: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **domain** | **string**| DNS record domain |
 **type** | [**\MailInABoxAPI\Client\Model\DNSRecordType**](../Model/.md)| Record type |

### Return type

[**\MailInABoxAPI\Client\Model\DNSCustomRecordsResponse**](../Model/DNSCustomRecordsResponse.md)

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: application/json, text/html

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## getDnsCustomRecordsForDomainAndTypeA

> \MailInABoxAPI\Client\Model\DNSCustomRecordsResponse getDnsCustomRecordsForDomainAndTypeA($domain)



Get DNS A records for domain

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: basicAuth
$config = MailInABoxAPI\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new MailInABoxAPI\Client\Api\DNSApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$domain = 'domain_example'; // string | DNS record domain

try {
    $result = $apiInstance->getDnsCustomRecordsForDomainAndTypeA($domain);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DNSApi->getDnsCustomRecordsForDomainAndTypeA: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **domain** | **string**| DNS record domain |

### Return type

[**\MailInABoxAPI\Client\Model\DNSCustomRecordsResponse**](../Model/DNSCustomRecordsResponse.md)

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: application/json, text/html

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## getDnsDump

> \MailInABoxAPI\Client\Model\DNSDumpResponse getDnsDump()



Retrieve all DNS records.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: basicAuth
$config = MailInABoxAPI\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new MailInABoxAPI\Client\Api\DNSApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->getDnsDump();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DNSApi->getDnsDump: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

This endpoint does not need any parameter.

### Return type

[**\MailInABoxAPI\Client\Model\DNSDumpResponse**](../Model/DNSDumpResponse.md)

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: application/json, text/html

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## getDnsSecondaryNameserver

> \MailInABoxAPI\Client\Model\DNSSecondaryNameserverResponse getDnsSecondaryNameserver()



Retrieve secondary nameservers.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: basicAuth
$config = MailInABoxAPI\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new MailInABoxAPI\Client\Api\DNSApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->getDnsSecondaryNameserver();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DNSApi->getDnsSecondaryNameserver: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

This endpoint does not need any parameter.

### Return type

[**\MailInABoxAPI\Client\Model\DNSSecondaryNameserverResponse**](../Model/DNSSecondaryNameserverResponse.md)

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: application/json, text/html

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## getDnsZones

> \MailInABoxAPI\Client\Model\DNSZonesResponse getDnsZones()



Retrieve DNS zones.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: basicAuth
$config = MailInABoxAPI\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new MailInABoxAPI\Client\Api\DNSApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->getDnsZones();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DNSApi->getDnsZones: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

This endpoint does not need any parameter.

### Return type

[**\MailInABoxAPI\Client\Model\DNSZonesResponse**](../Model/DNSZonesResponse.md)

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: application/json, text/html

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## removeDnsCustomRecord

> string removeDnsCustomRecord($domain, $type, $body)



Remove a custom DNS record.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: basicAuth
$config = MailInABoxAPI\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new MailInABoxAPI\Client\Api\DNSApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$domain = 'domain_example'; // string | DNS record domain
$type = new \MailInABoxAPI\Client\Model\\MailInABoxAPI\Client\Model\DNSRecordType(); // \MailInABoxAPI\Client\Model\DNSRecordType | Record type
$body = 'body_example'; // string | The value of the DNS record

try {
    $result = $apiInstance->removeDnsCustomRecord($domain, $type, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DNSApi->removeDnsCustomRecord: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **domain** | **string**| DNS record domain |
 **type** | [**\MailInABoxAPI\Client\Model\DNSRecordType**](../Model/.md)| Record type |
 **body** | **string**| The value of the DNS record |

### Return type

**string**

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

- **Content-Type**: text/plain
- **Accept**: text/html

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## removeDnsCustomRecordForTypeA

> string removeDnsCustomRecordForTypeA($domain, $body)



Remove a custom DNS A record.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: basicAuth
$config = MailInABoxAPI\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new MailInABoxAPI\Client\Api\DNSApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$domain = 'domain_example'; // string | DNS record domain
$body = 'body_example'; // string | The value of the DNS record

try {
    $result = $apiInstance->removeDnsCustomRecordForTypeA($domain, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DNSApi->removeDnsCustomRecordForTypeA: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **domain** | **string**| DNS record domain |
 **body** | **string**| The value of the DNS record |

### Return type

**string**

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

- **Content-Type**: text/plain
- **Accept**: text/html

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## updateDns

> string updateDns($force)



Update DNS, which involves creating zone files and restarting `nsd`.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: basicAuth
$config = MailInABoxAPI\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new MailInABoxAPI\Client\Api\DNSApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$force = 56; // int | Force an update even if mailinabox detects no changes are required.

try {
    $result = $apiInstance->updateDns($force);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DNSApi->updateDns: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **force** | **int**| Force an update even if mailinabox detects no changes are required. |

### Return type

**string**

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

- **Content-Type**: application/x-www-form-urlencoded
- **Accept**: application/json, text/html

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## updateDnsCustomRecord

> string updateDnsCustomRecord($domain, $type, $body)



Update a custom DNS record.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: basicAuth
$config = MailInABoxAPI\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new MailInABoxAPI\Client\Api\DNSApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$domain = 'domain_example'; // string | DNS record domain
$type = new \MailInABoxAPI\Client\Model\\MailInABoxAPI\Client\Model\DNSRecordType(); // \MailInABoxAPI\Client\Model\DNSRecordType | Record type
$body = 'body_example'; // string | The value of the DNS record

try {
    $result = $apiInstance->updateDnsCustomRecord($domain, $type, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DNSApi->updateDnsCustomRecord: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **domain** | **string**| DNS record domain |
 **type** | [**\MailInABoxAPI\Client\Model\DNSRecordType**](../Model/.md)| Record type |
 **body** | **string**| The value of the DNS record |

### Return type

**string**

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

- **Content-Type**: text/plain
- **Accept**: text/html

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## updateDnsCustomRecordForTypeA

> string updateDnsCustomRecordForTypeA($domain, $body)



Update a custom DNS A record.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: basicAuth
$config = MailInABoxAPI\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new MailInABoxAPI\Client\Api\DNSApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$domain = 'domain_example'; // string | DNS record domain
$body = 'body_example'; // string | The value of the DNS record

try {
    $result = $apiInstance->updateDnsCustomRecordForTypeA($domain, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DNSApi->updateDnsCustomRecordForTypeA: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **domain** | **string**| DNS record domain |
 **body** | **string**| The value of the DNS record |

### Return type

**string**

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

- **Content-Type**: text/plain
- **Accept**: text/html

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)

