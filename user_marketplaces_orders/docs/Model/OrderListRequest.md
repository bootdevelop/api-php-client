# OrderListRequest

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**marketplace_technical_codes** | [**\Swagger\Client\Model\BeezUPCommonMarketplaceTechnicalCode[]**](BeezUPCommonMarketplaceTechnicalCode.md) |  | [optional] 
**marketplace_business_codes** | [**\Swagger\Client\Model\BeezUPCommonMarketplaceBusinessCode[]**](BeezUPCommonMarketplaceBusinessCode.md) |  | [optional] 
**account_ids** | [**\Swagger\Client\Model\AccountId[]**](AccountId.md) | Account id list | [optional] 
**beez_up_order_statuses** | [**\Swagger\Client\Model\BeezUPOrderStatus[]**](BeezUPOrderStatus.md) |  | [optional] 
**date_search_type** | [**\Swagger\Client\Model\DateSearchType**](DateSearchType.md) |  | 
**begin_period_utc_date** | [**\DateTime**](\DateTime.md) | The begin period you want to make the search. \\ The period MUST not be greater than 30 days. The begin period MUST be lower than the end period. | 
**end_period_utc_date** | [**\DateTime**](\DateTime.md) | The end period of you search. \\ The period MUST not be greater than 30 days. \\ The end period MUST be greater than the begin period.  The end period MUST be lower to the current date. | 
**order_buyer_name** | [**\Swagger\Client\Model\OrderBuyerName**](OrderBuyerName.md) |  | [optional] 
**marketplace_order_ids** | [**\Swagger\Client\Model\MarketplaceOrderId[]**](MarketplaceOrderId.md) |  | [optional] 
**order_merchant_order_ids** | [**\Swagger\Client\Model\OrderMerchantOrderId[]**](OrderMerchantOrderId.md) | Merchant order id list | [optional] 
**page_size** | [**\Swagger\Client\Model\PageSize**](PageSize.md) |  | 
**page_number** | [**\Swagger\Client\Model\PageNumber**](PageNumber.md) |  | 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


