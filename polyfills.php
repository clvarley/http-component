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


if ( !function_exists( 'getallheaders' ) ) {

    /**
     * Fetch all HTTP request headers
     *
     * @return array HTTP headers
     */
    function getallheaders() : array
    {
        if ( empty( $_SERVER ) ) {
            return [];
        }

        $headers = [];

        foreach ( $_SERVER as $name => $value ) {
            if ( \substr( $name, 0, 5 ) === 'HTTP_' ) {
                $headers[\substr( $name, 5 )] = $value;
            }
        }

        return $headers;
    }

}
