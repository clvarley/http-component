<?php

namespace Http\Server;

use Http\Headers;

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
     * Response status code
     *
     * @var int $status Status code
     */
    protected $status;

    /**
     * Response payload
     *
     * @var string $content Response body
     */
    protected $content = '';

    /**
     * Creates a new HTTP response using the values provided
     *
     * @param int $status     (Optional) Status code
     * @param string $content (Optional) Response body
     * @param array $headers  (Optional) Http headers
     */
    public function __construct( int $status = 200, string $content = '', array $headers = [] )
    {
        $this->status  = $status;
        $this->content = $content;
        $this->headers = new Headers( $headers );
    }

    /**
     * Sends this HTTP response to the client
     *
     * @return void N/a
     */
    public function send() : void
    {
        \http_response_code( $this->status );

        foreach ( $this->headers->all() as $name => $values ) {
            foreach ( $values as $index => $value ) {
                \header( "$name: $value", $index < 1 );
            }
        }

        echo $this->content;
    }
}
