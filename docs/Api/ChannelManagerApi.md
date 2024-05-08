# GeminiCommerce\ChannelManager\ChannelManagerApi

All URIs are relative to https://channel.api.gogemini.io, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**channelManagerCreateAssociation()**](ChannelManagerApi.md#channelManagerCreateAssociation) | **POST** /channelmanager.ChannelManager/CreateAssociation | CreateAssociation |
| [**channelManagerCreateChannel()**](ChannelManagerApi.md#channelManagerCreateChannel) | **POST** /channelmanager.ChannelManager/CreateChannel | CreateChannel |
| [**channelManagerCreateMarket()**](ChannelManagerApi.md#channelManagerCreateMarket) | **POST** /channelmanager.ChannelManager/CreateMarket | CreateMarket |
| [**channelManagerDeleteAssociation()**](ChannelManagerApi.md#channelManagerDeleteAssociation) | **POST** /channelmanager.ChannelManager/DeleteAssociation | DeleteAssociation |
| [**channelManagerDeleteChannel()**](ChannelManagerApi.md#channelManagerDeleteChannel) | **POST** /channelmanager.ChannelManager/DeleteChannel | DeleteChannel |
| [**channelManagerDeleteMarket()**](ChannelManagerApi.md#channelManagerDeleteMarket) | **POST** /channelmanager.ChannelManager/DeleteMarket | DeleteMarket |
| [**channelManagerGetChannel()**](ChannelManagerApi.md#channelManagerGetChannel) | **POST** /channelmanager.ChannelManager/GetChannel | GetChannel |
| [**channelManagerGetChannelWithAssociations()**](ChannelManagerApi.md#channelManagerGetChannelWithAssociations) | **POST** /channelmanager.ChannelManager/GetChannelWithAssociations | GetChannelWithAssociations |
| [**channelManagerGetMarket()**](ChannelManagerApi.md#channelManagerGetMarket) | **POST** /channelmanager.ChannelManager/GetMarket | GetMarket |
| [**channelManagerGetMarketWithAssociations()**](ChannelManagerApi.md#channelManagerGetMarketWithAssociations) | **POST** /channelmanager.ChannelManager/GetMarketWithAssociations | GetMarketWithAssociations |
| [**channelManagerListChannels()**](ChannelManagerApi.md#channelManagerListChannels) | **POST** /channelmanager.ChannelManager/ListChannels | ListChannels |
| [**channelManagerListChannelsWithAssociations()**](ChannelManagerApi.md#channelManagerListChannelsWithAssociations) | **POST** /channelmanager.ChannelManager/ListChannelsWithAssociations | ListChannelsWithAssociations |
| [**channelManagerListMarkets()**](ChannelManagerApi.md#channelManagerListMarkets) | **POST** /channelmanager.ChannelManager/ListMarkets | ListMarkets |
| [**channelManagerListMarketsWithAssociations()**](ChannelManagerApi.md#channelManagerListMarketsWithAssociations) | **POST** /channelmanager.ChannelManager/ListMarketsWithAssociations | ListMarketsWithAssociations |
| [**channelManagerUpdateChannel()**](ChannelManagerApi.md#channelManagerUpdateChannel) | **POST** /channelmanager.ChannelManager/UpdateChannel | UpdateChannel |
| [**channelManagerUpdateMarket()**](ChannelManagerApi.md#channelManagerUpdateMarket) | **POST** /channelmanager.ChannelManager/UpdateMarket | UpdateMarket |


## `channelManagerCreateAssociation()`

```php
channelManagerCreateAssociation($body): \GeminiCommerce\ChannelManager\Model\ChannelmanagerAssociationResponse
```

CreateAssociation

Create a new association between a channel and a market or entities

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: standardAuthorization
$config = GeminiCommerce\ChannelManager\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = GeminiCommerce\ChannelManager\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new GeminiCommerce\ChannelManager\Api\ChannelManagerApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \GeminiCommerce\ChannelManager\Model\ChannelmanagerCreateAssociationRequest(); // \GeminiCommerce\ChannelManager\Model\ChannelmanagerCreateAssociationRequest

try {
    $result = $apiInstance->channelManagerCreateAssociation($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ChannelManagerApi->channelManagerCreateAssociation: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **body** | [**\GeminiCommerce\ChannelManager\Model\ChannelmanagerCreateAssociationRequest**](../Model/ChannelmanagerCreateAssociationRequest.md)|  | |

### Return type

[**\GeminiCommerce\ChannelManager\Model\ChannelmanagerAssociationResponse**](../Model/ChannelmanagerAssociationResponse.md)

### Authorization

[standardAuthorization](../../README.md#standardAuthorization)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `channelManagerCreateChannel()`

```php
channelManagerCreateChannel($body): \GeminiCommerce\ChannelManager\Model\ChannelmanagerChannelResponse
```

CreateChannel

Create a new channel

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: standardAuthorization
$config = GeminiCommerce\ChannelManager\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = GeminiCommerce\ChannelManager\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new GeminiCommerce\ChannelManager\Api\ChannelManagerApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \GeminiCommerce\ChannelManager\Model\ChannelmanagerCreateChannelRequest(); // \GeminiCommerce\ChannelManager\Model\ChannelmanagerCreateChannelRequest

try {
    $result = $apiInstance->channelManagerCreateChannel($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ChannelManagerApi->channelManagerCreateChannel: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **body** | [**\GeminiCommerce\ChannelManager\Model\ChannelmanagerCreateChannelRequest**](../Model/ChannelmanagerCreateChannelRequest.md)|  | |

### Return type

[**\GeminiCommerce\ChannelManager\Model\ChannelmanagerChannelResponse**](../Model/ChannelmanagerChannelResponse.md)

### Authorization

[standardAuthorization](../../README.md#standardAuthorization)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `channelManagerCreateMarket()`

```php
channelManagerCreateMarket($body): \GeminiCommerce\ChannelManager\Model\ChannelmanagerMarketResponse
```

CreateMarket

Create a new market

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: standardAuthorization
$config = GeminiCommerce\ChannelManager\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = GeminiCommerce\ChannelManager\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new GeminiCommerce\ChannelManager\Api\ChannelManagerApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \GeminiCommerce\ChannelManager\Model\ChannelmanagerCreateMarketRequest(); // \GeminiCommerce\ChannelManager\Model\ChannelmanagerCreateMarketRequest

try {
    $result = $apiInstance->channelManagerCreateMarket($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ChannelManagerApi->channelManagerCreateMarket: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **body** | [**\GeminiCommerce\ChannelManager\Model\ChannelmanagerCreateMarketRequest**](../Model/ChannelmanagerCreateMarketRequest.md)|  | |

### Return type

[**\GeminiCommerce\ChannelManager\Model\ChannelmanagerMarketResponse**](../Model/ChannelmanagerMarketResponse.md)

### Authorization

[standardAuthorization](../../README.md#standardAuthorization)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `channelManagerDeleteAssociation()`

```php
channelManagerDeleteAssociation($body): object
```

DeleteAssociation

Delete an existing association between a channel and a market or entities

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: standardAuthorization
$config = GeminiCommerce\ChannelManager\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = GeminiCommerce\ChannelManager\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new GeminiCommerce\ChannelManager\Api\ChannelManagerApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \GeminiCommerce\ChannelManager\Model\ChannelmanagerDeleteAssociationRequest(); // \GeminiCommerce\ChannelManager\Model\ChannelmanagerDeleteAssociationRequest

try {
    $result = $apiInstance->channelManagerDeleteAssociation($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ChannelManagerApi->channelManagerDeleteAssociation: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **body** | [**\GeminiCommerce\ChannelManager\Model\ChannelmanagerDeleteAssociationRequest**](../Model/ChannelmanagerDeleteAssociationRequest.md)|  | |

### Return type

**object**

### Authorization

[standardAuthorization](../../README.md#standardAuthorization)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `channelManagerDeleteChannel()`

```php
channelManagerDeleteChannel($body): object
```

DeleteChannel

Soft delete an existing channel

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: standardAuthorization
$config = GeminiCommerce\ChannelManager\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = GeminiCommerce\ChannelManager\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new GeminiCommerce\ChannelManager\Api\ChannelManagerApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \GeminiCommerce\ChannelManager\Model\ChannelmanagerDeleteChannelRequest(); // \GeminiCommerce\ChannelManager\Model\ChannelmanagerDeleteChannelRequest

try {
    $result = $apiInstance->channelManagerDeleteChannel($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ChannelManagerApi->channelManagerDeleteChannel: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **body** | [**\GeminiCommerce\ChannelManager\Model\ChannelmanagerDeleteChannelRequest**](../Model/ChannelmanagerDeleteChannelRequest.md)|  | |

### Return type

**object**

### Authorization

[standardAuthorization](../../README.md#standardAuthorization)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `channelManagerDeleteMarket()`

```php
channelManagerDeleteMarket($body): object
```

DeleteMarket

Soft delete an existing market

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: standardAuthorization
$config = GeminiCommerce\ChannelManager\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = GeminiCommerce\ChannelManager\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new GeminiCommerce\ChannelManager\Api\ChannelManagerApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \GeminiCommerce\ChannelManager\Model\ChannelmanagerDeleteMarketRequest(); // \GeminiCommerce\ChannelManager\Model\ChannelmanagerDeleteMarketRequest

try {
    $result = $apiInstance->channelManagerDeleteMarket($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ChannelManagerApi->channelManagerDeleteMarket: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **body** | [**\GeminiCommerce\ChannelManager\Model\ChannelmanagerDeleteMarketRequest**](../Model/ChannelmanagerDeleteMarketRequest.md)|  | |

### Return type

**object**

### Authorization

[standardAuthorization](../../README.md#standardAuthorization)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `channelManagerGetChannel()`

```php
channelManagerGetChannel($body): \GeminiCommerce\ChannelManager\Model\ChannelmanagerChannelResponse
```

GetChannel

Get an existing channel

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: standardAuthorization
$config = GeminiCommerce\ChannelManager\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = GeminiCommerce\ChannelManager\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new GeminiCommerce\ChannelManager\Api\ChannelManagerApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \GeminiCommerce\ChannelManager\Model\ChannelmanagerGetChannelRequest(); // \GeminiCommerce\ChannelManager\Model\ChannelmanagerGetChannelRequest

try {
    $result = $apiInstance->channelManagerGetChannel($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ChannelManagerApi->channelManagerGetChannel: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **body** | [**\GeminiCommerce\ChannelManager\Model\ChannelmanagerGetChannelRequest**](../Model/ChannelmanagerGetChannelRequest.md)|  | |

### Return type

[**\GeminiCommerce\ChannelManager\Model\ChannelmanagerChannelResponse**](../Model/ChannelmanagerChannelResponse.md)

### Authorization

[standardAuthorization](../../README.md#standardAuthorization)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `channelManagerGetChannelWithAssociations()`

```php
channelManagerGetChannelWithAssociations($body): \GeminiCommerce\ChannelManager\Model\ChannelmanagerChannelResponseWithAssociations
```

GetChannelWithAssociations

Get an existing channel with associations

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: standardAuthorization
$config = GeminiCommerce\ChannelManager\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = GeminiCommerce\ChannelManager\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new GeminiCommerce\ChannelManager\Api\ChannelManagerApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \GeminiCommerce\ChannelManager\Model\ChannelmanagerGetChannelWithAssociationsRequest(); // \GeminiCommerce\ChannelManager\Model\ChannelmanagerGetChannelWithAssociationsRequest

try {
    $result = $apiInstance->channelManagerGetChannelWithAssociations($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ChannelManagerApi->channelManagerGetChannelWithAssociations: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **body** | [**\GeminiCommerce\ChannelManager\Model\ChannelmanagerGetChannelWithAssociationsRequest**](../Model/ChannelmanagerGetChannelWithAssociationsRequest.md)|  | |

### Return type

[**\GeminiCommerce\ChannelManager\Model\ChannelmanagerChannelResponseWithAssociations**](../Model/ChannelmanagerChannelResponseWithAssociations.md)

### Authorization

[standardAuthorization](../../README.md#standardAuthorization)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `channelManagerGetMarket()`

```php
channelManagerGetMarket($body): \GeminiCommerce\ChannelManager\Model\ChannelmanagerMarketResponse
```

GetMarket

Get an existing market

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: standardAuthorization
$config = GeminiCommerce\ChannelManager\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = GeminiCommerce\ChannelManager\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new GeminiCommerce\ChannelManager\Api\ChannelManagerApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \GeminiCommerce\ChannelManager\Model\ChannelmanagerGetMarketRequest(); // \GeminiCommerce\ChannelManager\Model\ChannelmanagerGetMarketRequest

try {
    $result = $apiInstance->channelManagerGetMarket($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ChannelManagerApi->channelManagerGetMarket: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **body** | [**\GeminiCommerce\ChannelManager\Model\ChannelmanagerGetMarketRequest**](../Model/ChannelmanagerGetMarketRequest.md)|  | |

### Return type

[**\GeminiCommerce\ChannelManager\Model\ChannelmanagerMarketResponse**](../Model/ChannelmanagerMarketResponse.md)

### Authorization

[standardAuthorization](../../README.md#standardAuthorization)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `channelManagerGetMarketWithAssociations()`

```php
channelManagerGetMarketWithAssociations($body): \GeminiCommerce\ChannelManager\Model\ChannelmanagerMarketResponseWithAssociations
```

GetMarketWithAssociations

Get an existing market with associations

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: standardAuthorization
$config = GeminiCommerce\ChannelManager\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = GeminiCommerce\ChannelManager\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new GeminiCommerce\ChannelManager\Api\ChannelManagerApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \GeminiCommerce\ChannelManager\Model\ChannelmanagerGetMarketWithAssociationsRequest(); // \GeminiCommerce\ChannelManager\Model\ChannelmanagerGetMarketWithAssociationsRequest

try {
    $result = $apiInstance->channelManagerGetMarketWithAssociations($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ChannelManagerApi->channelManagerGetMarketWithAssociations: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **body** | [**\GeminiCommerce\ChannelManager\Model\ChannelmanagerGetMarketWithAssociationsRequest**](../Model/ChannelmanagerGetMarketWithAssociationsRequest.md)|  | |

### Return type

[**\GeminiCommerce\ChannelManager\Model\ChannelmanagerMarketResponseWithAssociations**](../Model/ChannelmanagerMarketResponseWithAssociations.md)

### Authorization

[standardAuthorization](../../README.md#standardAuthorization)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `channelManagerListChannels()`

```php
channelManagerListChannels($body): \GeminiCommerce\ChannelManager\Model\ChannelmanagerListChannelsResponse
```

ListChannels

List all channels

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: standardAuthorization
$config = GeminiCommerce\ChannelManager\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = GeminiCommerce\ChannelManager\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new GeminiCommerce\ChannelManager\Api\ChannelManagerApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \GeminiCommerce\ChannelManager\Model\ChannelmanagerListChannelsRequest(); // \GeminiCommerce\ChannelManager\Model\ChannelmanagerListChannelsRequest

try {
    $result = $apiInstance->channelManagerListChannels($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ChannelManagerApi->channelManagerListChannels: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **body** | [**\GeminiCommerce\ChannelManager\Model\ChannelmanagerListChannelsRequest**](../Model/ChannelmanagerListChannelsRequest.md)|  | |

### Return type

[**\GeminiCommerce\ChannelManager\Model\ChannelmanagerListChannelsResponse**](../Model/ChannelmanagerListChannelsResponse.md)

### Authorization

[standardAuthorization](../../README.md#standardAuthorization)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `channelManagerListChannelsWithAssociations()`

```php
channelManagerListChannelsWithAssociations($body): \GeminiCommerce\ChannelManager\Model\ChannelmanagerListChannelsWithAssociationsResponse
```

ListChannelsWithAssociations

List all channels with associations

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: standardAuthorization
$config = GeminiCommerce\ChannelManager\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = GeminiCommerce\ChannelManager\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new GeminiCommerce\ChannelManager\Api\ChannelManagerApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \GeminiCommerce\ChannelManager\Model\ChannelmanagerListChannelsWithAssociationsRequest(); // \GeminiCommerce\ChannelManager\Model\ChannelmanagerListChannelsWithAssociationsRequest

try {
    $result = $apiInstance->channelManagerListChannelsWithAssociations($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ChannelManagerApi->channelManagerListChannelsWithAssociations: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **body** | [**\GeminiCommerce\ChannelManager\Model\ChannelmanagerListChannelsWithAssociationsRequest**](../Model/ChannelmanagerListChannelsWithAssociationsRequest.md)|  | |

### Return type

[**\GeminiCommerce\ChannelManager\Model\ChannelmanagerListChannelsWithAssociationsResponse**](../Model/ChannelmanagerListChannelsWithAssociationsResponse.md)

### Authorization

[standardAuthorization](../../README.md#standardAuthorization)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `channelManagerListMarkets()`

```php
channelManagerListMarkets($body): \GeminiCommerce\ChannelManager\Model\ChannelmanagerListMarketsResponse
```

ListMarkets

List all markets

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: standardAuthorization
$config = GeminiCommerce\ChannelManager\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = GeminiCommerce\ChannelManager\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new GeminiCommerce\ChannelManager\Api\ChannelManagerApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \GeminiCommerce\ChannelManager\Model\ChannelmanagerListMarketsRequest(); // \GeminiCommerce\ChannelManager\Model\ChannelmanagerListMarketsRequest

try {
    $result = $apiInstance->channelManagerListMarkets($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ChannelManagerApi->channelManagerListMarkets: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **body** | [**\GeminiCommerce\ChannelManager\Model\ChannelmanagerListMarketsRequest**](../Model/ChannelmanagerListMarketsRequest.md)|  | |

### Return type

[**\GeminiCommerce\ChannelManager\Model\ChannelmanagerListMarketsResponse**](../Model/ChannelmanagerListMarketsResponse.md)

### Authorization

[standardAuthorization](../../README.md#standardAuthorization)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `channelManagerListMarketsWithAssociations()`

```php
channelManagerListMarketsWithAssociations($body): \GeminiCommerce\ChannelManager\Model\ChannelmanagerListMarketsWithAssociationsResponse
```

ListMarketsWithAssociations

List all markets with associations

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: standardAuthorization
$config = GeminiCommerce\ChannelManager\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = GeminiCommerce\ChannelManager\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new GeminiCommerce\ChannelManager\Api\ChannelManagerApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \GeminiCommerce\ChannelManager\Model\ChannelmanagerListMarketsWithAssociationsRequest(); // \GeminiCommerce\ChannelManager\Model\ChannelmanagerListMarketsWithAssociationsRequest

try {
    $result = $apiInstance->channelManagerListMarketsWithAssociations($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ChannelManagerApi->channelManagerListMarketsWithAssociations: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **body** | [**\GeminiCommerce\ChannelManager\Model\ChannelmanagerListMarketsWithAssociationsRequest**](../Model/ChannelmanagerListMarketsWithAssociationsRequest.md)|  | |

### Return type

[**\GeminiCommerce\ChannelManager\Model\ChannelmanagerListMarketsWithAssociationsResponse**](../Model/ChannelmanagerListMarketsWithAssociationsResponse.md)

### Authorization

[standardAuthorization](../../README.md#standardAuthorization)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `channelManagerUpdateChannel()`

```php
channelManagerUpdateChannel($body): \GeminiCommerce\ChannelManager\Model\ChannelmanagerChannelResponse
```

UpdateChannel

Update an existing channel

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: standardAuthorization
$config = GeminiCommerce\ChannelManager\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = GeminiCommerce\ChannelManager\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new GeminiCommerce\ChannelManager\Api\ChannelManagerApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \GeminiCommerce\ChannelManager\Model\ChannelmanagerUpdateChannelRequest(); // \GeminiCommerce\ChannelManager\Model\ChannelmanagerUpdateChannelRequest

try {
    $result = $apiInstance->channelManagerUpdateChannel($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ChannelManagerApi->channelManagerUpdateChannel: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **body** | [**\GeminiCommerce\ChannelManager\Model\ChannelmanagerUpdateChannelRequest**](../Model/ChannelmanagerUpdateChannelRequest.md)|  | |

### Return type

[**\GeminiCommerce\ChannelManager\Model\ChannelmanagerChannelResponse**](../Model/ChannelmanagerChannelResponse.md)

### Authorization

[standardAuthorization](../../README.md#standardAuthorization)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `channelManagerUpdateMarket()`

```php
channelManagerUpdateMarket($body): \GeminiCommerce\ChannelManager\Model\ChannelmanagerMarketResponse
```

UpdateMarket

Update an existing market

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: standardAuthorization
$config = GeminiCommerce\ChannelManager\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = GeminiCommerce\ChannelManager\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new GeminiCommerce\ChannelManager\Api\ChannelManagerApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \GeminiCommerce\ChannelManager\Model\ChannelmanagerUpdateMarketRequest(); // \GeminiCommerce\ChannelManager\Model\ChannelmanagerUpdateMarketRequest

try {
    $result = $apiInstance->channelManagerUpdateMarket($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ChannelManagerApi->channelManagerUpdateMarket: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **body** | [**\GeminiCommerce\ChannelManager\Model\ChannelmanagerUpdateMarketRequest**](../Model/ChannelmanagerUpdateMarketRequest.md)|  | |

### Return type

[**\GeminiCommerce\ChannelManager\Model\ChannelmanagerMarketResponse**](../Model/ChannelmanagerMarketResponse.md)

### Authorization

[standardAuthorization](../../README.md#standardAuthorization)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
