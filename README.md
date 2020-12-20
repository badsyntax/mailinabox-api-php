# MailInABoxAPI

[![Build & Publish](https://github.com/badsyntax/mailinabox-api/workflows/Build%20&%20Publish/badge.svg)](https://github.com/badsyntax/mailinabox-api/actions?query=workflow%3A%22Build+%26+Publish%22)

PHP client SDK for the Mail-in-a-Box API.

- API version: 0.51.0
- Package version: 0.51.1

https://packagist.org/packages/mailinabox/mailinabox-api

**NOTE:** This package is [auto-generated](https://github.com/badsyntax/mailinabox-api) from the Mail-In-A-Box OpenAPI spec.

## Requirements

PHP 5.5 and later

## Installation & Usage

### Composer

To install the bindings via [Composer](http://getcomposer.org/), add the following to `composer.json`:

```json
{
  "require": {
    "mailinabox/mailinabox-api": "0.51.1"
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

## Documentation for API Endpoints

All URIs are relative to *https://box.example.com/admin*

Class | Method | HTTP request | Description
------------ | ------------- | ------------- | -------------
*DNSApi* | [**addDnsCustomARecord**](docs/Api/DNSApi.md#adddnscustomarecord) | **POST** /dns/custom/{qname} | Add DNS custom A record
*DNSApi* | [**addDnsCustomRecord**](docs/Api/DNSApi.md#adddnscustomrecord) | **POST** /dns/custom/{qname}/{rtype} | Add DNS custom record
*DNSApi* | [**addDnsSecondaryNameserver**](docs/Api/DNSApi.md#adddnssecondarynameserver) | **POST** /dns/secondary-nameserver | Add DNS secondary nameserver
*DNSApi* | [**getDnsCustomARecordsForQName**](docs/Api/DNSApi.md#getdnscustomarecordsforqname) | **GET** /dns/custom/{qname} | Get DNS custom A records
*DNSApi* | [**getDnsCustomRecords**](docs/Api/DNSApi.md#getdnscustomrecords) | **GET** /dns/custom | Get DNS custom records
*DNSApi* | [**getDnsCustomRecordsForQNameAndType**](docs/Api/DNSApi.md#getdnscustomrecordsforqnameandtype) | **GET** /dns/custom/{qname}/{rtype} | Get DNS custom records
*DNSApi* | [**getDnsDump**](docs/Api/DNSApi.md#getdnsdump) | **GET** /dns/dump | Get DNS dump
*DNSApi* | [**getDnsSecondaryNameserver**](docs/Api/DNSApi.md#getdnssecondarynameserver) | **GET** /dns/secondary-nameserver | Get DNS secondary nameserver
*DNSApi* | [**getDnsZonefile**](docs/Api/DNSApi.md#getdnszonefile) | **GET** /dns/zonefile/{zone} | Get DNS zonefile
*DNSApi* | [**getDnsZones**](docs/Api/DNSApi.md#getdnszones) | **GET** /dns/zones | Get DNS zones
*DNSApi* | [**removeDnsCustomARecord**](docs/Api/DNSApi.md#removednscustomarecord) | **DELETE** /dns/custom/{qname} | Remove DNS custom A record
*DNSApi* | [**removeDnsCustomRecord**](docs/Api/DNSApi.md#removednscustomrecord) | **DELETE** /dns/custom/{qname}/{rtype} | Remove DNS custom record
*DNSApi* | [**updateDns**](docs/Api/DNSApi.md#updatedns) | **POST** /dns/update | Update DNS
*DNSApi* | [**updateDnsCustomARecord**](docs/Api/DNSApi.md#updatednscustomarecord) | **PUT** /dns/custom/{qname} | Update DNS custom A record
*DNSApi* | [**updateDnsCustomRecord**](docs/Api/DNSApi.md#updatednscustomrecord) | **PUT** /dns/custom/{qname}/{rtype} | Update DNS custom record
*MFAApi* | [**mfaStatus**](docs/Api/MFAApi.md#mfastatus) | **POST** /mfa/status | Retrieve MFA status for you or another user
*MFAApi* | [**mfaTotpDisable**](docs/Api/MFAApi.md#mfatotpdisable) | **POST** /mfa/disable | Disable multi-factor authentication for you or another user
*MFAApi* | [**mfaTotpEnable**](docs/Api/MFAApi.md#mfatotpenable) | **POST** /mfa/totp/enable | Enable TOTP authentication
*MailApi* | [**addMailUser**](docs/Api/MailApi.md#addmailuser) | **POST** /mail/users/add | Add mail user
*MailApi* | [**addMailUserPrivilege**](docs/Api/MailApi.md#addmailuserprivilege) | **POST** /mail/users/privileges/add | Add mail user privilege
*MailApi* | [**getMailAliases**](docs/Api/MailApi.md#getmailaliases) | **GET** /mail/aliases | Get mail aliases
*MailApi* | [**getMailDomains**](docs/Api/MailApi.md#getmaildomains) | **GET** /mail/domains | Get mail domains
*MailApi* | [**getMailUserPrivileges**](docs/Api/MailApi.md#getmailuserprivileges) | **GET** /mail/users/privileges | Get mail user privileges
*MailApi* | [**getMailUsers**](docs/Api/MailApi.md#getmailusers) | **GET** /mail/users | Get mail users
*MailApi* | [**removeMailAlias**](docs/Api/MailApi.md#removemailalias) | **POST** /mail/aliases/remove | Remove mail alias
*MailApi* | [**removeMailUser**](docs/Api/MailApi.md#removemailuser) | **POST** /mail/users/remove | Remove mail user
*MailApi* | [**removeMailUserPrivilege**](docs/Api/MailApi.md#removemailuserprivilege) | **POST** /mail/users/privileges/remove | Remove mail user privilege
*MailApi* | [**setMailUserPassword**](docs/Api/MailApi.md#setmailuserpassword) | **POST** /mail/users/password | Set mail user password
*MailApi* | [**upsertMailAlias**](docs/Api/MailApi.md#upsertmailalias) | **POST** /mail/aliases/add | Upsert mail alias
*SSLApi* | [**generateSSLCSR**](docs/Api/SSLApi.md#generatesslcsr) | **POST** /ssl/csr/{domain} | Generate SSL CSR
*SSLApi* | [**getSSLStatus**](docs/Api/SSLApi.md#getsslstatus) | **GET** /ssl/status | Get SSL status
*SSLApi* | [**installSSLCertificate**](docs/Api/SSLApi.md#installsslcertificate) | **POST** /ssl/install | Install SSL certificate
*SSLApi* | [**provisionSSLCertificates**](docs/Api/SSLApi.md#provisionsslcertificates) | **POST** /ssl/provision | Provision SSL certificates
*SystemApi* | [**getSystemBackupConfig**](docs/Api/SystemApi.md#getsystembackupconfig) | **GET** /system/backup/config | Get system backup config
*SystemApi* | [**getSystemBackupStatus**](docs/Api/SystemApi.md#getsystembackupstatus) | **GET** /system/backup/status | Get system backup status
*SystemApi* | [**getSystemPrivacyStatus**](docs/Api/SystemApi.md#getsystemprivacystatus) | **GET** /system/privacy | Get system privacy status
*SystemApi* | [**getSystemRebootStatus**](docs/Api/SystemApi.md#getsystemrebootstatus) | **GET** /system/reboot | Get system reboot status
*SystemApi* | [**getSystemStatus**](docs/Api/SystemApi.md#getsystemstatus) | **POST** /system/status | Get system status
*SystemApi* | [**getSystemUpdates**](docs/Api/SystemApi.md#getsystemupdates) | **GET** /system/updates | Get system updates
*SystemApi* | [**getSystemUpstreamVersion**](docs/Api/SystemApi.md#getsystemupstreamversion) | **POST** /system/latest-upstream-version | Get system upstream version
*SystemApi* | [**getSystemVersion**](docs/Api/SystemApi.md#getsystemversion) | **GET** /system/version | Get system version
*SystemApi* | [**rebootSystem**](docs/Api/SystemApi.md#rebootsystem) | **POST** /system/reboot | Reboot system
*SystemApi* | [**updateSystemBackupConfig**](docs/Api/SystemApi.md#updatesystembackupconfig) | **POST** /system/backup/config | Update system backup config
*SystemApi* | [**updateSystemPackages**](docs/Api/SystemApi.md#updatesystempackages) | **POST** /system/update-packages | Update system packages
*SystemApi* | [**updateSystemPrivacy**](docs/Api/SystemApi.md#updatesystemprivacy) | **POST** /system/privacy | Update system privacy
*UserApi* | [**getMe**](docs/Api/UserApi.md#getme) | **GET** /me | Get user information
*WebApi* | [**getWebDomains**](docs/Api/WebApi.md#getwebdomains) | **GET** /web/domains | Get web domains
*WebApi* | [**updateWeb**](docs/Api/WebApi.md#updateweb) | **POST** /web/update | Update web


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
 - [MfaDisableRequest](docs/Model/MfaDisableRequest.md)
 - [MfaEnableRequest](docs/Model/MfaEnableRequest.md)
 - [MfaStatusResponse](docs/Model/MfaStatusResponse.md)
 - [MfaStatusResponseEnabledMfa](docs/Model/MfaStatusResponseEnabledMfa.md)
 - [MfaStatusResponseNewMfa](docs/Model/MfaStatusResponseNewMfa.md)
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
