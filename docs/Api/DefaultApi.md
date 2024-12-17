# NumenoPersona\DefaultApi

All URIs are relative to https://api.numeno.ai/persona, except if the operation defines another base path.

| Method                                               | HTTP request                 | Description                  |
| ---------------------------------------------------- | ---------------------------- | ---------------------------- |
| [**createPersona()**](DefaultApi.md#createPersona)   | **POST** /v1/personas        | Create a new Persona         |
| [**deletePersona()**](DefaultApi.md#deletePersona)   | **DELETE** /v1/personas/{id} | Delete a Persona by ID       |
| [**getPersonaById()**](DefaultApi.md#getPersonaById) | **GET** /v1/personas/{id}    | Get a specific Persona by ID |
| [**getPersonas()**](DefaultApi.md#getPersonas)       | **GET** /v1/personas         | Get a list of all Personas   |
| [**getScopes()**](DefaultApi.md#getScopes)           | **GET** /v1/scopes           | Get the Scopes for this API  |
| [**healthCheck()**](DefaultApi.md#healthCheck)       | **GET** /health              | Check the health of the API  |
| [**updatePersona()**](DefaultApi.md#updatePersona)   | **PUT** /v1/personas/{id}    | Update a Persona by ID       |

## `createPersona()`

```php
createPersona($persona_new): \NumenoPersona\Model\Persona
```

Create a new Persona

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: ApiKeyAuth
$config = NumenoPersona\Configuration::getDefaultConfiguration()->setApiKey('X-Numeno-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = NumenoPersona\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-Numeno-Key', 'Bearer');


$apiInstance = new NumenoPersona\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$persona_new = new \NumenoPersona\Model\PersonaNew(); // \NumenoPersona\Model\PersonaNew

try {
    $result = $apiInstance->createPersona($persona_new);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->createPersona: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name            | Type                                                          | Description | Notes |
| --------------- | ------------------------------------------------------------- | ----------- | ----- |
| **persona_new** | [**\NumenoPersona\Model\PersonaNew**](../Model/PersonaNew.md) |             |       |

### Return type

[**\NumenoPersona\Model\Persona**](../Model/Persona.md)

### Authorization

[ApiKeyAuth](../../README.md#ApiKeyAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `deletePersona()`

```php
deletePersona($id)
```

Delete a Persona by ID

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: ApiKeyAuth
$config = NumenoPersona\Configuration::getDefaultConfiguration()->setApiKey('X-Numeno-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = NumenoPersona\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-Numeno-Key', 'Bearer');


$apiInstance = new NumenoPersona\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string

try {
    $apiInstance->deletePersona($id);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->deletePersona: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name   | Type       | Description | Notes |
| ------ | ---------- | ----------- | ----- |
| **id** | **string** |             |       |

### Return type

void (empty response body)

### Authorization

[ApiKeyAuth](../../README.md#ApiKeyAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getPersonaById()`

```php
getPersonaById($id): \NumenoPersona\Model\Persona
```

Get a specific Persona by ID

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: ApiKeyAuth
$config = NumenoPersona\Configuration::getDefaultConfiguration()->setApiKey('X-Numeno-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = NumenoPersona\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-Numeno-Key', 'Bearer');


$apiInstance = new NumenoPersona\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string

try {
    $result = $apiInstance->getPersonaById($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->getPersonaById: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name   | Type       | Description | Notes |
| ------ | ---------- | ----------- | ----- |
| **id** | **string** |             |       |

### Return type

[**\NumenoPersona\Model\Persona**](../Model/Persona.md)

### Authorization

[ApiKeyAuth](../../README.md#ApiKeyAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getPersonas()`

```php
getPersonas($cursor, $limit): \NumenoPersona\Model\PersonaList
```

Get a list of all Personas

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: ApiKeyAuth
$config = NumenoPersona\Configuration::getDefaultConfiguration()->setApiKey('X-Numeno-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = NumenoPersona\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-Numeno-Key', 'Bearer');


$apiInstance = new NumenoPersona\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$cursor = 'cursor_example'; // string | Cursor for paginating results, obtained from the previous response. Omit or pass an empty string to start from the beginning.
$limit = 10; // int | Number of Personas to return per page.

try {
    $result = $apiInstance->getPersonas($cursor, $limit);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->getPersonas: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name       | Type       | Description                                                                                                                   | Notes                      |
| ---------- | ---------- | ----------------------------------------------------------------------------------------------------------------------------- | -------------------------- |
| **cursor** | **string** | Cursor for paginating results, obtained from the previous response. Omit or pass an empty string to start from the beginning. | [optional]                 |
| **limit**  | **int**    | Number of Personas to return per page.                                                                                        | [optional] [default to 10] |

### Return type

[**\NumenoPersona\Model\PersonaList**](../Model/PersonaList.md)

### Authorization

[ApiKeyAuth](../../README.md#ApiKeyAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getScopes()`

```php
getScopes(): \NumenoPersona\Model\Scopes
```

Get the Scopes for this API

Get a list of all the Scopes supported by the Numeno Persona API. Scopes are used to let API Keys access only certain parts of the API. Scopes are expressed as a string of the form `api:resource:action`: - `persona:personas:read` - can read any Persona (eg. `GET` `/personas`, `/personas/:id`, etc.) - `persona:personas:write` - can write (and read) any Persona - `persona:personas:*` - can perform any action on Personas - `persona:*:read` - can read any resource on `persona` - `*:*:*` - can do everything

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new NumenoPersona\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);

try {
    $result = $apiInstance->getScopes();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->getScopes: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

[**\NumenoPersona\Model\Scopes**](../Model/Scopes.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `healthCheck()`

```php
healthCheck(): \NumenoPersona\Model\HealthCheck
```

Check the health of the API

A health check endpoint. Returns a code indicating the health of the Persona service.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new NumenoPersona\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);

try {
    $result = $apiInstance->healthCheck();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->healthCheck: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

[**\NumenoPersona\Model\HealthCheck**](../Model/HealthCheck.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `updatePersona()`

```php
updatePersona($id, $persona_update): \NumenoPersona\Model\Persona
```

Update a Persona by ID

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: ApiKeyAuth
$config = NumenoPersona\Configuration::getDefaultConfiguration()->setApiKey('X-Numeno-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = NumenoPersona\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-Numeno-Key', 'Bearer');


$apiInstance = new NumenoPersona\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string
$persona_update = new \NumenoPersona\Model\PersonaUpdate(); // \NumenoPersona\Model\PersonaUpdate

try {
    $result = $apiInstance->updatePersona($id, $persona_update);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->updatePersona: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name               | Type                                                                | Description | Notes |
| ------------------ | ------------------------------------------------------------------- | ----------- | ----- |
| **id**             | **string**                                                          |             |       |
| **persona_update** | [**\NumenoPersona\Model\PersonaUpdate**](../Model/PersonaUpdate.md) |             |       |

### Return type

[**\NumenoPersona\Model\Persona**](../Model/Persona.md)

### Authorization

[ApiKeyAuth](../../README.md#ApiKeyAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
