# MailInABoxAPI\Client\DNSApi

All URIs are relative to *https://box.example.com/admin*

Method | HTTP request | Description
------------- | ------------- | -------------
[**addDnsCustomARecord**](DNSApi.md#addDnsCustomARecord) | **POST** /dns/custom/{qname} | Add DNS custom A record
[**addDnsCustomRecord**](DNSApi.md#addDnsCustomRecord) | **POST** /dns/custom/{qname}/{rtype} | Add DNS custom record
[**addDnsSecondaryNameserver**](DNSApi.md#addDnsSecondaryNameserver) | **POST** /dns/secondary-nameserver | Add DNS secondary nameserver
[**getDnsCustomARecordsForQName**](DNSApi.md#getDnsCustomARecordsForQName) | **GET** /dns/custom/{qname} | Get DNS custom A records
[**getDnsCustomRecords**](DNSApi.md#getDnsCustomRecords) | **GET** /dns/custom | Get DNS custom records
[**getDnsCustomRecordsForQNameAndType**](DNSApi.md#getDnsCustomRecordsForQNameAndType) | **GET** /dns/custom/{qname}/{rtype} | Get DNS custom records
[**getDnsDump**](DNSApi.md#getDnsDump) | **GET** /dns/dump | Get DNS dump
[**getDnsSecondaryNameserver**](DNSApi.md#getDnsSecondaryNameserver) | **GET** /dns/secondary-nameserver | Get DNS secondary nameserver
[**getDnsZonefile**](DNSApi.md#getDnsZonefile) | **GET** /dns/zonefile/{zone} | Get DNS zonefile
[**getDnsZones**](DNSApi.md#getDnsZones) | **GET** /dns/zones | Get DNS zones
[**removeDnsCustomARecord**](DNSApi.md#removeDnsCustomARecord) | **DELETE** /dns/custom/{qname} | Remove DNS custom A record
[**removeDnsCustomRecord**](DNSApi.md#removeDnsCustomRecord) | **DELETE** /dns/custom/{qname}/{rtype} | Remove DNS custom record
[**updateDns**](DNSApi.md#updateDns) | **POST** /dns/update | Update DNS
[**updateDnsCustomARecord**](DNSApi.md#updateDnsCustomARecord) | **PUT** /dns/custom/{qname} | Update DNS custom A record
[**updateDnsCustomRecord**](DNSApi.md#updateDnsCustomRecord) | **PUT** /dns/custom/{qname}/{rtype} | Update DNS custom record



## addDnsCustomARecord

> string addDnsCustomARecord($qname, $body)

Add DNS custom A record

Adds a custom DNS A record for the specified query name.

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
$qname = 'qname_example'; // string | DNS query name.
$body = 1.2.3.4; // string | 

try {
    $result = $apiInstance->addDnsCustomARecord($qname, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DNSApi->addDnsCustomARecord: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **qname** | **string**| DNS query name. |
 **body** | **string**|  |

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


## addDnsCustomRecord

> string addDnsCustomRecord($qname, $rtype, $body)

Add DNS custom record

Adds a custom DNS record for the specified query name and type.

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
$qname = 'qname_example'; // string | DNS record query name
$rtype = new \MailInABoxAPI\Client\Model\\MailInABoxAPI\Client\Model\DNSRecordType(); // \MailInABoxAPI\Client\Model\DNSRecordType | Record type
$body = 1.2.3.4; // string | 

try {
    $result = $apiInstance->addDnsCustomRecord($qname, $rtype, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DNSApi->addDnsCustomRecord: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **qname** | **string**| DNS record query name |
 **rtype** | [**\MailInABoxAPI\Client\Model\DNSRecordType**](../Model/.md)| Record type |
 **body** | **string**|  |

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

Add DNS secondary nameserver

Adds one or more secondary nameservers.

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
$hostnames = 'hostnames_example'; // string | Hostnames separated with commas or spaces.

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
 **hostnames** | **string**| Hostnames separated with commas or spaces. |

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


## getDnsCustomARecordsForQName

> \MailInABoxAPI\Client\Model\DNSCustomRecordsResponse getDnsCustomARecordsForQName($qname)

Get DNS custom A records

Returns all custom A records for the specified query name.

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
$qname = 'qname_example'; // string | DNS query name.

try {
    $result = $apiInstance->getDnsCustomARecordsForQName($qname);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DNSApi->getDnsCustomARecordsForQName: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **qname** | **string**| DNS query name. |

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


## getDnsCustomRecords

> \MailInABoxAPI\Client\Model\DNSCustomRecordsResponse getDnsCustomRecords()

Get DNS custom records

Returns all custom DNS records.

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


## getDnsCustomRecordsForQNameAndType

> \MailInABoxAPI\Client\Model\DNSCustomRecordsResponse getDnsCustomRecordsForQNameAndType($qname, $rtype)

Get DNS custom records

Returns all custom records for the specified query name and type.

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
$qname = 'qname_example'; // string | DNS record query name
$rtype = new \MailInABoxAPI\Client\Model\\MailInABoxAPI\Client\Model\DNSRecordType(); // \MailInABoxAPI\Client\Model\DNSRecordType | Record type

try {
    $result = $apiInstance->getDnsCustomRecordsForQNameAndType($qname, $rtype);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DNSApi->getDnsCustomRecordsForQNameAndType: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **qname** | **string**| DNS record query name |
 **rtype** | [**\MailInABoxAPI\Client\Model\DNSRecordType**](../Model/.md)| Record type |

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

Get DNS dump

Returns all DNS records.

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

Get DNS secondary nameserver

Returns a list of nameserver hostnames.

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


## getDnsZonefile

> string getDnsZonefile($zone)

Get DNS zonefile

Returns a DNS zone file for a hostname.

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
$zone = 'zone_example'; // string | Hostname

try {
    $result = $apiInstance->getDnsZonefile($zone);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DNSApi->getDnsZonefile: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **zone** | **string**| Hostname |

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


## getDnsZones

> \MailInABoxAPI\Client\Model\DNSZonesResponse getDnsZones()

Get DNS zones

Returns an array of all managed top-level domains.

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


## removeDnsCustomARecord

> string removeDnsCustomARecord($qname, $body)

Remove DNS custom A record

Removes a DNS custom A record for the specified domain & value.

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
$qname = 'qname_example'; // string | DNS query name.
$body = 1.2.3.4; // string | 

try {
    $result = $apiInstance->removeDnsCustomARecord($qname, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DNSApi->removeDnsCustomARecord: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **qname** | **string**| DNS query name. |
 **body** | **string**|  |

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


## removeDnsCustomRecord

> string removeDnsCustomRecord($qname, $rtype, $body)

Remove DNS custom record

Removes a DNS custom record for the specified domain, type & value.

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
$qname = 'qname_example'; // string | DNS record query name
$rtype = new \MailInABoxAPI\Client\Model\\MailInABoxAPI\Client\Model\DNSRecordType(); // \MailInABoxAPI\Client\Model\DNSRecordType | Record type
$body = 1.2.3.4; // string | 

try {
    $result = $apiInstance->removeDnsCustomRecord($qname, $rtype, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DNSApi->removeDnsCustomRecord: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **qname** | **string**| DNS record query name |
 **rtype** | [**\MailInABoxAPI\Client\Model\DNSRecordType**](../Model/.md)| Record type |
 **body** | **string**|  |

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

Update DNS

Updates the DNS. Involves creating zone files and restarting `nsd`.

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


## updateDnsCustomARecord

> string updateDnsCustomARecord($qname, $body)

Update DNS custom A record

Updates an existing DNS custom A record value for the specified qname.

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
$qname = 'qname_example'; // string | DNS query name.
$body = 1.2.3.4; // string | 

try {
    $result = $apiInstance->updateDnsCustomARecord($qname, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DNSApi->updateDnsCustomARecord: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **qname** | **string**| DNS query name. |
 **body** | **string**|  |

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


## updateDnsCustomRecord

> string updateDnsCustomRecord($qname, $rtype, $body)

Update DNS custom record

Updates an existing DNS custom record value for the specified qname and type.

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
$qname = 'qname_example'; // string | DNS record query name
$rtype = new \MailInABoxAPI\Client\Model\\MailInABoxAPI\Client\Model\DNSRecordType(); // \MailInABoxAPI\Client\Model\DNSRecordType | Record type
$body = 1.2.3.4; // string | 

try {
    $result = $apiInstance->updateDnsCustomRecord($qname, $rtype, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DNSApi->updateDnsCustomRecord: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **qname** | **string**| DNS record query name |
 **rtype** | [**\MailInABoxAPI\Client\Model\DNSRecordType**](../Model/.md)| Record type |
 **body** | **string**|  |

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

