<?php

namespace Http\Server;

use Http\Url;
use Http\Parameters;
use Http\Headers;

/**
 * Class used to represent HTTP requests coming into the server
 *
 * @author C Varley <clvarley>
 */
Class Request
{

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
