# MailInABoxAPI

[![Build & Publish](https://github.com/badsyntax/mailinabox-api/workflows/Build%20&%20Publish/badge.svg)](https://github.com/badsyntax/mailinabox-api/actions?query=workflow%3A%22Build+%26+Publish%22)

PHP client SDK for the Mail-in-a-Box API.

- API version: 0.46.0
- Package version: 0.0.0-SNAPSHOT.3

**NOTE:** This package is [auto-generated](https://github.com/badsyntax/mailinabox-api) from the Mail-In-A-Box OpenAPI spec.

## Requirements

PHP 5.5 and later

## Installation & Usage

### Composer

To install the bindings via [Composer](http://getcomposer.org/), add the following to `composer.json`:

```json
{
  "require": {
    "mailinabox/mailinabox-api": "0.0.0-SNAPSHOT.3"
  }
}
```

Then run `composer install`

### Manual Installation

Download the files and include `autoload.php`:

```php
    require_once('/path/to/mailinabox-api-php/vendor/autoload.php');
```

## Tests

To run the unit tests:

```bash
composer install
./vendor/bin/phpunit
```

## Getting Started

Please follow the [installation procedure](#installation--usage) and then run the following:

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
$body = 'body_example'; // string | The value of the DNS record.

try {
    $result = $apiInstance->addDnsCustomRecord($domain, $type, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DNSApi->addDnsCustomRecord: ', $e->getMessage(), PHP_EOL;
}

?>
```

## Documentation for API Endpoints

All URIs are relative to *https://box.example.com/admin*

Class | Method | HTTP request | Description
------------ | ------------- | ------------- | -------------
*DNSApi* | [**addDnsCustomRecord**](docs/Api/DNSApi.md#adddnscustomrecord) | **POST** /dns/custom/{domain}/{type} | 
*DNSApi* | [**addDnsCustomRecordForTypeA**](docs/Api/DNSApi.md#adddnscustomrecordfortypea) | **POST** /dns/custom/{domain} | 
*DNSApi* | [**addDnsSecondaryNameserver**](docs/Api/DNSApi.md#adddnssecondarynameserver) | **POST** /dns/secondary-nameserver | 
*DNSApi* | [**getDnsCustomRecords**](docs/Api/DNSApi.md#getdnscustomrecords) | **GET** /dns/custom | 
*DNSApi* | [**getDnsCustomRecordsForDomainAndType**](docs/Api/DNSApi.md#getdnscustomrecordsfordomainandtype) | **GET** /dns/custom/{domain}/{type} | 
*DNSApi* | [**getDnsCustomRecordsForDomainAndTypeA**](docs/Api/DNSApi.md#getdnscustomrecordsfordomainandtypea) | **GET** /dns/custom/{domain} | 
*DNSApi* | [**getDnsDump**](docs/Api/DNSApi.md#getdnsdump) | **GET** /dns/dump | 
*DNSApi* | [**getDnsSecondaryNameserver**](docs/Api/DNSApi.md#getdnssecondarynameserver) | **GET** /dns/secondary-nameserver | 
*DNSApi* | [**getDnsZones**](docs/Api/DNSApi.md#getdnszones) | **GET** /dns/zones | 
*DNSApi* | [**removeDnsCustomRecord**](docs/Api/DNSApi.md#removednscustomrecord) | **DELETE** /dns/custom/{domain}/{type} | 
*DNSApi* | [**removeDnsCustomRecordForTypeA**](docs/Api/DNSApi.md#removednscustomrecordfortypea) | **DELETE** /dns/custom/{domain} | 
*DNSApi* | [**updateDns**](docs/Api/DNSApi.md#updatedns) | **POST** /dns/update | 
*DNSApi* | [**updateDnsCustomRecord**](docs/Api/DNSApi.md#updatednscustomrecord) | **PUT** /dns/custom/{domain}/{type} | 
*DNSApi* | [**updateDnsCustomRecordForTypeA**](docs/Api/DNSApi.md#updatednscustomrecordfortypea) | **PUT** /dns/custom/{domain} | 
*MailApi* | [**addMailUser**](docs/Api/MailApi.md#addmailuser) | **POST** /mail/users/add | 
*MailApi* | [**addMailUserPrivilege**](docs/Api/MailApi.md#addmailuserprivilege) | **POST** /mail/users/privileges/add | 
*MailApi* | [**getMailAliases**](docs/Api/MailApi.md#getmailaliases) | **GET** /mail/aliases | 
*MailApi* | [**getMailDomains**](docs/Api/MailApi.md#getmaildomains) | **GET** /mail/domains | 
*MailApi* | [**getMailUserPrivileges**](docs/Api/MailApi.md#getmailuserprivileges) | **GET** /mail/users/privileges | 
*MailApi* | [**getMailUsers**](docs/Api/MailApi.md#getmailusers) | **GET** /mail/users | 
*MailApi* | [**removeMailAlias**](docs/Api/MailApi.md#removemailalias) | **POST** /mail/aliases/remove | 
*MailApi* | [**removeMailUser**](docs/Api/MailApi.md#removemailuser) | **POST** /mail/users/remove | 
*MailApi* | [**removeMailUserPrivilege**](docs/Api/MailApi.md#removemailuserprivilege) | **POST** /mail/users/privileges/remove | 
*MailApi* | [**setMailUserPassword**](docs/Api/MailApi.md#setmailuserpassword) | **POST** /mail/users/password | 
*MailApi* | [**upsertMailAlias**](docs/Api/MailApi.md#upsertmailalias) | **POST** /mail/aliases/add | 
*SSLApi* | [**generateSSLCSR**](docs/Api/SSLApi.md#generatesslcsr) | **POST** /ssl/csr/{domain} | 
*SSLApi* | [**getSSLStatus**](docs/Api/SSLApi.md#getsslstatus) | **GET** /ssl/status | 
*SSLApi* | [**installSSLCertificate**](docs/Api/SSLApi.md#installsslcertificate) | **POST** /ssl/install | 
*SSLApi* | [**provisionSSLCertificates**](docs/Api/SSLApi.md#provisionsslcertificates) | **POST** /ssl/provision | 
*SystemApi* | [**getSystemBackupConfig**](docs/Api/SystemApi.md#getsystembackupconfig) | **GET** /system/backup/config | 
*SystemApi* | [**getSystemBackupStatus**](docs/Api/SystemApi.md#getsystembackupstatus) | **GET** /system/backup/status | 
*SystemApi* | [**getSystemPrivacyStatus**](docs/Api/SystemApi.md#getsystemprivacystatus) | **GET** /system/privacy | 
*SystemApi* | [**getSystemRebootStatus**](docs/Api/SystemApi.md#getsystemrebootstatus) | **GET** /system/reboot | 
*SystemApi* | [**getSystemStatus**](docs/Api/SystemApi.md#getsystemstatus) | **POST** /system/status | 
*SystemApi* | [**getSystemUpdates**](docs/Api/SystemApi.md#getsystemupdates) | **GET** /system/updates | 
*SystemApi* | [**getSystemUpstreamVersion**](docs/Api/SystemApi.md#getsystemupstreamversion) | **POST** /system/latest-upstream-version | 
*SystemApi* | [**getSystemVersion**](docs/Api/SystemApi.md#getsystemversion) | **GET** /system/version | 
*SystemApi* | [**rebootSystem**](docs/Api/SystemApi.md#rebootsystem) | **POST** /system/reboot | 
*SystemApi* | [**updateSystemBackupConfig**](docs/Api/SystemApi.md#updatesystembackupconfig) | **POST** /system/backup/config | 
*SystemApi* | [**updateSystemPackages**](docs/Api/SystemApi.md#updatesystempackages) | **POST** /system/update-packages | 
*SystemApi* | [**updateSystemPrivacy**](docs/Api/SystemApi.md#updatesystemprivacy) | **POST** /system/privacy | 
*UserApi* | [**getMe**](docs/Api/UserApi.md#getme) | **GET** /me | 
*WebApi* | [**getWebDomains**](docs/Api/WebApi.md#getwebdomains) | **GET** /web/domains | 
*WebApi* | [**updateWeb**](docs/Api/WebApi.md#updateweb) | **POST** /web/update | 


## Documentation For Models

 - [DNSCustomRecord](docs/Model/DNSCustomRecord.md)
 - [DNSCustomRecordsResponse](docs/Model/DNSCustomRecordsResponse.md)
 - [DNSDumpDomainRecord](docs/Model/DNSDumpDomainRecord.md)
 - [DNSDumpDomainRecords](docs/Model/DNSDumpDomainRecords.md)
 - [DNSDumpDomains](docs/Model/DNSDumpDomains.md)
 - [DNSDumpResponse](docs/Model/DNSDumpResponse.md)
 - [DNSRecordType](docs/Model/DNSRecordType.md)
 - [DNSSecondaryNameserverAddRequest](docs/Model/DNSSecondaryNameserverAddRequest.md)
 - [DNSSecondaryNameserverResponse](docs/Model/DNSSecondaryNameserverResponse.md)
 - [DNSUpdateRequest](docs/Model/DNSUpdateRequest.md)
 - [DNSZonesResponse](docs/Model/DNSZonesResponse.md)
 - [MailAlias](docs/Model/MailAlias.md)
 - [MailAliasByDomain](docs/Model/MailAliasByDomain.md)
 - [MailAliasRemoveRequest](docs/Model/MailAliasRemoveRequest.md)
 - [MailAliasUpsertRequest](docs/Model/MailAliasUpsertRequest.md)
 - [MailAliasesResponseFormat](docs/Model/MailAliasesResponseFormat.md)
 - [MailUser](docs/Model/MailUser.md)
 - [MailUserAddPrivilegeRequest](docs/Model/MailUserAddPrivilegeRequest.md)
 - [MailUserAddRequest](docs/Model/MailUserAddRequest.md)
 - [MailUserByDomain](docs/Model/MailUserByDomain.md)
 - [MailUserPrivilege](docs/Model/MailUserPrivilege.md)
 - [MailUserRemovePrivilegeRequest](docs/Model/MailUserRemovePrivilegeRequest.md)
 - [MailUserRemoveRequest](docs/Model/MailUserRemoveRequest.md)
 - [MailUserSetPasswordRequest](docs/Model/MailUserSetPasswordRequest.md)
 - [MailUserStatus](docs/Model/MailUserStatus.md)
 - [MailUsersResponse](docs/Model/MailUsersResponse.md)
 - [MailUsersResponseFormat](docs/Model/MailUsersResponseFormat.md)
 - [MeAuthStatus](docs/Model/MeAuthStatus.md)
 - [MeResponse](docs/Model/MeResponse.md)
 - [SSLCSRGenerateRequest](docs/Model/SSLCSRGenerateRequest.md)
 - [SSLCertificateInstallRequest](docs/Model/SSLCertificateInstallRequest.md)
 - [SSLCertificatesProvisionResponse](docs/Model/SSLCertificatesProvisionResponse.md)
 - [SSLCertificatesProvisionResponseRequests](docs/Model/SSLCertificatesProvisionResponseRequests.md)
 - [SSLStatus](docs/Model/SSLStatus.md)
 - [SSLStatusResponse](docs/Model/SSLStatusResponse.md)
 - [SSLStatusType](docs/Model/SSLStatusType.md)
 - [StatusEntry](docs/Model/StatusEntry.md)
 - [StatusEntryExtra](docs/Model/StatusEntryExtra.md)
 - [StatusEntryType](docs/Model/StatusEntryType.md)
 - [SystemBackupConfigResponse](docs/Model/SystemBackupConfigResponse.md)
 - [SystemBackupConfigUpdateRequest](docs/Model/SystemBackupConfigUpdateRequest.md)
 - [SystemBackupStatus](docs/Model/SystemBackupStatus.md)
 - [SystemBackupStatusResponse](docs/Model/SystemBackupStatusResponse.md)
 - [SystemPrivacyStatus](docs/Model/SystemPrivacyStatus.md)
 - [SystemPrivacyUpdateRequest](docs/Model/SystemPrivacyUpdateRequest.md)
 - [SystemStatusResponse](docs/Model/SystemStatusResponse.md)
 - [WebDomain](docs/Model/WebDomain.md)


## Documentation For Authorization



## basicAuth


- **Type**: HTTP basic authentication


## License

MIT License

Copyright (c) 2020 Richard Willis
