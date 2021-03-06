# Promotion

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **string** |  | [optional] 
**name** | **string** |  | 
**active** | **bool** |  | 
**valid_from** | [**\DateTime**](\DateTime.md) |  | [optional] 
**valid_until** | [**\DateTime**](\DateTime.md) |  | [optional] 
**max_redemptions_global** | **int** |  | [optional] 
**max_redemptions_per_customer** | **int** |  | [optional] 
**exclusive** | **bool** |  | 
**code** | **string** |  | [optional] 
**use_codes** | **bool** |  | 
**use_individual_codes** | **bool** |  | 
**individual_code_pattern** | **string** |  | [optional] 
**use_set_groups** | **bool** |  | 
**customer_restriction** | **bool** |  | [optional] 
**order_count** | **int** |  | [optional] 
**orders_per_customer_count** | **object** |  | [optional] 
**exclusion_ids** | **string[]** |  | [optional] 
**custom_fields** | **object** |  | [optional] 
**created_at** | [**\DateTime**](\DateTime.md) |  | 
**updated_at** | [**\DateTime**](\DateTime.md) |  | [optional] 
**translated** | **object** |  | [optional] 
**setgroups** | [**\Swagger\Client\Model\PromotionSetgroup**](PromotionSetgroup.md) |  | [optional] 
**sales_channels** | [**\Swagger\Client\Model\PromotionSalesChannel**](PromotionSalesChannel.md) |  | [optional] 
**discounts** | [**\Swagger\Client\Model\PromotionDiscount**](PromotionDiscount.md) |  | [optional] 
**individual_codes** | [**\Swagger\Client\Model\PromotionIndividualCode**](PromotionIndividualCode.md) |  | [optional] 
**persona_rules** | [**\Swagger\Client\Model\Rule**](Rule.md) |  | [optional] 
**persona_customers** | [**\Swagger\Client\Model\Customer**](Customer.md) |  | [optional] 
**order_rules** | [**\Swagger\Client\Model\Rule**](Rule.md) |  | [optional] 
**cart_rules** | [**\Swagger\Client\Model\Rule**](Rule.md) |  | [optional] 

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)

