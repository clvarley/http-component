<?php

namespace Http;

/**
 * Utility class for managing URLs
 *
 * @author C Varley <clvarley>
 */
Class Url
{

    /**
     * The protocol being used
     *
     * @var string $scheme Url scheme
     */
    public $scheme = '';

    /**
     * The requested authority/domain
     *
     * @var string $domain Domain component
     */
    public $domain = '';

    /**
     * Path to resource
     *
     * @var string $path Path component
     */
    public $path = '';

    /**
     * Additional query parameters
     *
     * @var string $query Query string
     */
    public $query = '';

    /**
     * Resource fragment
     *
     * @var string $fragment Fragment identifier
     */
    public $fragment = '';

}
