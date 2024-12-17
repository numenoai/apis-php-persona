<?php
/**
 * ModelInterface
 *
 * PHP version 7.4
 *
 * @category Class
 * @package  NumenoPersona\Model
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */

/**
 * Numeno Persona API
 *
 * ### Introduction  Use the Numeno Persona API to create and manage **Personas**.  Evolving a Persona over time is dead-simple: [create a Persona](create-persona), then send natural-language descriptions of your users’ in-app activities to the Persona API. Under the hood, we create a rich set of models of the system that evolve over time.  Then, ask Numeno to personalize some part of your experience using the Persona.  Numeno will use our models to tailor your software to each user’s unique preferences and habits, allowing you to dynamically adjust your offerings.  For example, connect a Persona to the **[Numeno Article Recommender API](https://numeno.ai/wp-content/uploads/docs/artrec/numeno-article-recommender-api)** to generate **Article Feeds** that evolve over time as your Persona evloves with user interaction.  Personas are not limited to modelling users. Posts in a social environment, articles or topics on a content platform, a screen or widget in your UI, a product in your inventory - groups of any of these things – Personas can evolve models of anything in your system!  Get creative!
 *
 * The version of the OpenAPI document: 1.0.0
 * Contact: support@numeno.ai
 * Generated by: https://openapi-generator.tech
 * Generator version: 7.10.0
 */

/**
 * NOTE: This class is auto generated by OpenAPI Generator (https://openapi-generator.tech).
 * https://openapi-generator.tech
 * Do not edit the class manually.
 */

namespace NumenoPersona\Model;

/**
 * Interface abstracting model access.
 *
 * @package NumenoPersona\Model
 * @author  OpenAPI Generator team
 */
interface ModelInterface
{
    /**
     * The original name of the model.
     *
     * @return string
     */
    public function getModelName();

    /**
     * Array of property to type mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function openAPITypes();

    /**
     * Array of property to format mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function openAPIFormats();

    /**
     * Array of attributes where the key is the local name, and the value is the original name
     *
     * @return array
     */
    public static function attributeMap();

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @return array
     */
    public static function setters();

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @return array
     */
    public static function getters();

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array
     */
    public function listInvalidProperties();

    /**
     * Validate all the properties in the model
     * return true if all passed
     *
     * @return bool
     */
    public function valid();

    /**
     * Checks if a property is nullable
     *
     * @param string $property
     * @return bool
     */
    public static function isNullable(string $property): bool;

    /**
     * Checks if a nullable property is set to null.
     *
     * @param string $property
     * @return bool
     */
    public function isNullableSetToNull(string $property): bool;
}
