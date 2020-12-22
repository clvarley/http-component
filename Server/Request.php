<?php

namespace Http\Server;

/**
 *
 */
Class Request
{

    /**
     *
     */
    public $headers;

    /**
     *
     */
    public $query;

    /**
     *
     */
    public $post;

    /**
     *
     */
    protected $method = '';

    /**
     *
     */
    protected $scheme = '';

    /**
     *
     */
    protected $uri = '';

    /**
     *
     */
    protected $path = '';

    /**
     *
     */
    protected $fragment = '';

    /**
     * 
     */
    protected $content;

}
