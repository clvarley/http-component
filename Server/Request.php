<?php

namespace Http\Server;

use Http\{
    Headers,
    Parameters,
    Url
};

/**
 * Class used to represent HTTP requests coming into the server
 *
 * @author C Varley <clvarley>
 */
Class Request
{

    /**
     * Recognised HTTP methods we can respond to
     *
     * We are not currently planning to support the TRACE or CONNECT verbs.
     *
     * @var string[] ALLOWED_METHODS HTTP verbs
     */
    public const ALLOWED_METHODS = [
        'OPTIONS'
        'HEAD',
        'GET',
        'POST',
        'PUT',
        'PATCH',
        'DELETE'
    ];

    /**
     * Request HTTP headers
     *
     * @var Headers $headers HTTP headers
     */
    public $headers;

    /**
     * HTTP query string parameters
     *
     * @var Parameters $query Query parameters
     */
    public $query;

    /**
     * HTTP POST parameters
     *
     * @var Parameters $post POST parameters
     */
    public $post;

    /**
     * HTTP method used
     *
     * @var string $method HTTP verb
     */
    protected $method = '';

    /**
     * URL used to generate this request
     *
     * @var Url $url Requested URL
     */
    protected $url;

    /**
     * Request payload
     *
     * @var mixed $content Request body
     */
    protected $content;

}
