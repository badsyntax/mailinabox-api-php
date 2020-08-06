# MailInABoxAPI\Client\MailApi

All URIs are relative to *https://box.example.com/admin*

Method | HTTP request | Description
------------- | ------------- | -------------
[**addMailUser**](MailApi.md#addMailUser) | **POST** /mail/users/add | Add mail user
[**addMailUserPrivilege**](MailApi.md#addMailUserPrivilege) | **POST** /mail/users/privileges/add | Add mail user privilege
[**getMailAliases**](MailApi.md#getMailAliases) | **GET** /mail/aliases | Get mail aliases
[**getMailDomains**](MailApi.md#getMailDomains) | **GET** /mail/domains | Get mail domains
[**getMailUserPrivileges**](MailApi.md#getMailUserPrivileges) | **GET** /mail/users/privileges | Get mail user privileges
[**getMailUsers**](MailApi.md#getMailUsers) | **GET** /mail/users | Get mail users
[**removeMailAlias**](MailApi.md#removeMailAlias) | **POST** /mail/aliases/remove | Remove mail alias
[**removeMailUser**](MailApi.md#removeMailUser) | **POST** /mail/users/remove | Remove mail user
[**removeMailUserPrivilege**](MailApi.md#removeMailUserPrivilege) | **POST** /mail/users/privileges/remove | Remove mail user privilege
[**setMailUserPassword**](MailApi.md#setMailUserPassword) | **POST** /mail/users/password | Set mail user password
[**upsertMailAlias**](MailApi.md#upsertMailAlias) | **POST** /mail/aliases/add | Upsert mail alias



## addMailUser

> string addMailUser($email, $password, $privileges)

Add mail user

Adds a new mail user.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: basicAuth
$config = MailInABoxAPI\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new MailInABoxAPI\Client\Api\MailApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$email = 'email_example'; // string | Email format.
$password = 'password_example'; // string | 
$privileges = new \MailInABoxAPI\Client\Model\MailUserPrivilege(); // \MailInABoxAPI\Client\Model\MailUserPrivilege | 

try {
    $result = $apiInstance->addMailUser($email, $password, $privileges);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MailApi->addMailUser: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **email** | [**string**](../Model/string.md)| Email format. |
 **password** | **string**|  |
 **privileges** | [**\MailInABoxAPI\Client\Model\MailUserPrivilege**](../Model/MailUserPrivilege.md)|  |

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


## addMailUserPrivilege

> string addMailUserPrivilege($email, $privilege)

Add mail user privilege

Adds a privilege to an existing mail user.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: basicAuth
$config = MailInABoxAPI\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new MailInABoxAPI\Client\Api\MailApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$email = 'email_example'; // string | Email format.
$privilege = new \MailInABoxAPI\Client\Model\MailUserPrivilege(); // \MailInABoxAPI\Client\Model\MailUserPrivilege | 

try {
    $result = $apiInstance->addMailUserPrivilege($email, $privilege);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MailApi->addMailUserPrivilege: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **email** | [**string**](../Model/string.md)| Email format. |
 **privilege** | [**\MailInABoxAPI\Client\Model\MailUserPrivilege**](../Model/MailUserPrivilege.md)|  |

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


## getMailAliases

> \MailInABoxAPI\Client\Model\MailAliasByDomain[] getMailAliases($format)

Get mail aliases

Returns all mail aliases.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: basicAuth
$config = MailInABoxAPI\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new MailInABoxAPI\Client\Api\MailApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$format = new \MailInABoxAPI\Client\Model\\MailInABoxAPI\Client\Model\MailAliasesResponseFormat(); // \MailInABoxAPI\Client\Model\MailAliasesResponseFormat | The format of the response.

try {
    $result = $apiInstance->getMailAliases($format);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MailApi->getMailAliases: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **format** | [**\MailInABoxAPI\Client\Model\MailAliasesResponseFormat**](../Model/.md)| The format of the response. | [optional]

### Return type

[**\MailInABoxAPI\Client\Model\MailAliasByDomain[]**](../Model/MailAliasByDomain.md)

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: application/json, text/html

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## getMailDomains

> string getMailDomains()

Get mail domains

Returns all mail domains.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: basicAuth
$config = MailInABoxAPI\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new MailInABoxAPI\Client\Api\MailApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->getMailDomains();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MailApi->getMailDomains: ', $e->getMessage(), PHP_EOL;
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


## getMailUserPrivileges

> \MailInABoxAPI\Client\Model\MailUserPrivilege getMailUserPrivileges($email)

Get mail user privileges

Returns all privileges for an existing mail user.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: basicAuth
$config = MailInABoxAPI\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new MailInABoxAPI\Client\Api\MailApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$email = 'email_example'; // string | The email you want to get privileges for.

try {
    $result = $apiInstance->getMailUserPrivileges($email);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MailApi->getMailUserPrivileges: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **email** | [**string**](../Model/.md)| The email you want to get privileges for. | [optional]

### Return type

[**\MailInABoxAPI\Client\Model\MailUserPrivilege**](../Model/MailUserPrivilege.md)

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: text/html

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## getMailUsers

> \MailInABoxAPI\Client\Model\MailUsersResponse getMailUsers($format)

Get mail users

Returns all mail users.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: basicAuth
$config = MailInABoxAPI\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new MailInABoxAPI\Client\Api\MailApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$format = new \MailInABoxAPI\Client\Model\\MailInABoxAPI\Client\Model\MailUsersResponseFormat(); // \MailInABoxAPI\Client\Model\MailUsersResponseFormat | The format of the response.

try {
    $result = $apiInstance->getMailUsers($format);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MailApi->getMailUsers: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **format** | [**\MailInABoxAPI\Client\Model\MailUsersResponseFormat**](../Model/.md)| The format of the response. | [optional]

### Return type

[**\MailInABoxAPI\Client\Model\MailUsersResponse**](../Model/MailUsersResponse.md)

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: application/json, text/html

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## removeMailAlias

> string removeMailAlias($address)

Remove mail alias

Removes a mail alias.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: basicAuth
$config = MailInABoxAPI\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new MailInABoxAPI\Client\Api\MailApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$address = 'address_example'; // string | Email format.

try {
    $result = $apiInstance->removeMailAlias($address);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MailApi->removeMailAlias: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **address** | [**string**](../Model/string.md)| Email format. |

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


## removeMailUser

> string removeMailUser($email)

Remove mail user

Removes an existing mail user.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: basicAuth
$config = MailInABoxAPI\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new MailInABoxAPI\Client\Api\MailApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$email = 'email_example'; // string | Email format.

try {
    $result = $apiInstance->removeMailUser($email);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MailApi->removeMailUser: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **email** | [**string**](../Model/string.md)| Email format. |

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


## removeMailUserPrivilege

> string removeMailUserPrivilege($email, $privilege)

Remove mail user privilege

Removes a privilege from an existing mail user.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: basicAuth
$config = MailInABoxAPI\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new MailInABoxAPI\Client\Api\MailApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$email = 'email_example'; // string | Email format.
$privilege = new \MailInABoxAPI\Client\Model\MailUserPrivilege(); // \MailInABoxAPI\Client\Model\MailUserPrivilege | 

try {
    $result = $apiInstance->removeMailUserPrivilege($email, $privilege);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MailApi->removeMailUserPrivilege: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **email** | [**string**](../Model/string.md)| Email format. |
 **privilege** | [**\MailInABoxAPI\Client\Model\MailUserPrivilege**](../Model/MailUserPrivilege.md)|  |

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


## setMailUserPassword

> string setMailUserPassword($email, $password)

Set mail user password

Sets a password for an existing mail user.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: basicAuth
$config = MailInABoxAPI\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new MailInABoxAPI\Client\Api\MailApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$email = 'email_example'; // string | Email format.
$password = 'password_example'; // string | 

try {
    $result = $apiInstance->setMailUserPassword($email, $password);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MailApi->setMailUserPassword: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **email** | [**string**](../Model/string.md)| Email format. |
 **password** | **string**|  |

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


## upsertMailAlias

> string upsertMailAlias($updateIfExists, $address, $forwardsTo, $permittedSenders)

Upsert mail alias

Adds or updates a mail alias. If updating, you need to set `update_if_exists: 1`.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: basicAuth
$config = MailInABoxAPI\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new MailInABoxAPI\Client\Api\MailApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$updateIfExists = 56; // int | Set to `1` when updating an alias.
$address = 'address_example'; // string | Email format.
$forwardsTo = 'forwardsTo_example'; // string | If adding a regular or catch-all alias, the format needs to be `email1@example.com`. Multiple address can be separated by newlines or commas.  If adding a domain alias, the format needs to be `@example.com`.
$permittedSenders = 'permittedSenders_example'; // string | Mail users that can send mail claiming to be from any address on the alias domain. Multiple address can be separated by newlines or commas.  Leave empty to allow any mail user listed in `forwards_to` to send mail claiming to be from any address on the alias domain.

try {
    $result = $apiInstance->upsertMailAlias($updateIfExists, $address, $forwardsTo, $permittedSenders);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MailApi->upsertMailAlias: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **updateIfExists** | **int**| Set to &#x60;1&#x60; when updating an alias. |
 **address** | [**string**](../Model/string.md)| Email format. |
 **forwardsTo** | **string**| If adding a regular or catch-all alias, the format needs to be &#x60;email1@example.com&#x60;. Multiple address can be separated by newlines or commas.  If adding a domain alias, the format needs to be &#x60;@example.com&#x60;. |
 **permittedSenders** | **string**| Mail users that can send mail claiming to be from any address on the alias domain. Multiple address can be separated by newlines or commas.  Leave empty to allow any mail user listed in &#x60;forwards_to&#x60; to send mail claiming to be from any address on the alias domain. |

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

