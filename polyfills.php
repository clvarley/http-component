<?php

if ( !interface_exists( 'Stringable', false ) ) {

    /**
     * Indicates the implementing class can be represented as a string
     */
    interface Stringable
    {
        public function __toString() : string;
    }
}


if ( !function_exists( 'apache_request_headers' ) ) {

    /**
     * Fetch all HTTP request headers from the current request
     *
     * @return array HTTP headers
     */
    function apache_request_headers() : array
    {
        if ( empty( $_SERVER ) ) {
            return [];
        }

        $headers = [];

        foreach ( $_SERVER as $name => $value ) {
            if ( \substr( $name, 0, 5 ) !== 'HTTP_' ) {
                continue;
            }

            $name = \substr( $name, 5 );
            $name = \strtr( $name, '_', '-' );
            $name = \ucwords( $name, ' -' );

            $headers[$name] = $value;
        }

        return $headers;
    }

    /**
     * Alias of apache_request_headers
     */
    function getallheaders() : array
    {
        return apache_request_headers();
    }
}
