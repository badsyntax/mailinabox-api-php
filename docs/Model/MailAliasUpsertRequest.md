# # MailAliasUpsertRequest

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**updateIfExists** | **int** | Set to &#x60;1&#x60; when updating an alias. | 
**address** | **string** | Email format. | 
**forwardsTo** | **string** | If adding a regular or catch-all alias, the format needs to be &#x60;email1@example.com&#x60;. Multiple address can be separated by newlines or commas.  If adding a domain alias, the format needs to be &#x60;@example.com&#x60;. | 
**permittedSenders** | **string** | Mail users that can send mail claiming to be from any address on the alias domain. Multiple address can be separated by newlines or commas.  Leave empty to allow any mail user listed in &#x60;forwards_to&#x60; to send mail claiming to be from any address on the alias domain. | 

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)


