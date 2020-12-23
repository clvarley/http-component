<?php

namespace Http\Server;

/**
 *
 */
Class Response
{

    /**
     * Response HTTP headers
     *
     * @var Headers $headers HTTP headers
     */
    public $headers;

    /**
     * Response payload
     *
     * @var string $content Response body
     */
    protected $content = '';

}
