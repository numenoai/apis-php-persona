# OpenAPIClient-php

### Introduction

Use the Numeno Persona API to create new personas.

For more information, please visit [https://numeno.ai/](https://numeno.ai/).

## Installation & Usage

### Requirements

PHP 7.4 and later.
Should also work with PHP 8.0.

### Composer

To install the bindings via [Composer](https://getcomposer.org/), add the following to `composer.json`:

```json
{
  "repositories": [
    {
      "type": "vcs",
      "url": "https://github.com/GIT_USER_ID/GIT_REPO_ID.git"
    }
  ],
  "require": {
    "GIT_USER_ID/GIT_REPO_ID": "*@dev"
  }
}
```

Then run `composer install`

### Manual Installation

Download the files and include `autoload.php`:

```php
<?php
require_once('/path/to/OpenAPIClient-php/vendor/autoload.php');
```

## Getting Started

Please follow the [installation procedure](#installation--usage) and then run the following:

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
$persona_update = new \NumenoPersona\Model\PersonaUpdate(); // \NumenoPersona\Model\PersonaUpdate

try {
    $result = $apiInstance->createPersona($persona_update);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->createPersona: ', $e->getMessage(), PHP_EOL;
}

```

## API Endpoints

All URIs are relative to *https://api.numeno.ai/persona*

| Class        | Method                                                      | HTTP request                        | Description                  |
| ------------ | ----------------------------------------------------------- | ----------------------------------- | ---------------------------- |
| _DefaultApi_ | [**createPersona**](docs/Api/DefaultApi.md#createpersona)   | **POST** /v1/personas               | Create a new persona         |
| _DefaultApi_ | [**deletePersona**](docs/Api/DefaultApi.md#deletepersona)   | **DELETE** /v1/personas/{personaId} | Delete a persona by ID       |
| _DefaultApi_ | [**getPersonaById**](docs/Api/DefaultApi.md#getpersonabyid) | **GET** /v1/personas/{personaId}    | Get a specific persona by ID |
| _DefaultApi_ | [**getPersonas**](docs/Api/DefaultApi.md#getpersonas)       | **GET** /v1/personas                | Get a list of all personas   |
| _DefaultApi_ | [**healthCheck**](docs/Api/DefaultApi.md#healthcheck)       | **GET** /health                     | Check the health of the API  |
| _DefaultApi_ | [**updatePersona**](docs/Api/DefaultApi.md#updatepersona)   | **PUT** /v1/personas/{personaId}    | Update a persona by ID       |

## Models

- [ErrorDetail](docs/Model/ErrorDetail.md)
- [ErrorResponse](docs/Model/ErrorResponse.md)
- [HealthCheck](docs/Model/HealthCheck.md)
- [Persona](docs/Model/Persona.md)
- [PersonaUpdate](docs/Model/PersonaUpdate.md)
- [Personas](docs/Model/Personas.md)

## Authorization

Authentication schemes defined for the API:

### ApiKeyAuth

- **Type**: API key
- **API key parameter name**: X-Numeno-Key
- **Location**: HTTP header

## Tests

To run the tests, use:

```bash
composer install
vendor/bin/phpunit
```

## Author

support@numeno.ai

## About this package

This PHP package is automatically generated by the [OpenAPI Generator](https://openapi-generator.tech) project:

- API version: `1.0.0`
  - Package version: `0.0.1`
  - Generator version: `7.9.0`
- Build package: `org.openapitools.codegen.languages.PhpClientCodegen`
