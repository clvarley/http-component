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
