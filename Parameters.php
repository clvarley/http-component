<?php

namespace Http;

/**
 * Utility container for managing HTTP parameters
 *
 * @author C Varley <clvarley>
 */
Class Parameters
{

    /**
     * Array of HTTP parameters
     *
     * @var array[]
     */
    protected $parameters = [];

    /**
     * Creates a new parameter bag from the (optionally) provided parameters
     *
     * @param array $parameters (Optional) Http parameters
     */
    public function __construct( array $parameters )
    {
        $this->parameters = $parameters;
    }

    /**
     * Sets the value for the named parameter
     *
     * @param string $name Parameter name
     * @param mixed $value Parameter value
     * @return void        N/a
     */
    public function set( string $name, /* mixed */ $value ) : void
    {
        $this->parameters[$name] = $value;
    }

    /**
     * Gets the value for the named parameter
     *
     * @param string $name Parameter name
     * @return mixed|null  Parameter value
     */
    public function get( string $name ) // : mixed
    {
        return $this->parameters[$name] ?? null;
    }

    /**
     * Checks to see if a named parameter has been set
     *
     * @param string $name Parameter name
     * @return bool        Parameter set
     */
    public function has( string $name ) : bool
    {
        return \array_key_exists( $name, $this->parameters );
    }

    /**
     * Gets all parameters
     *
     * @return array Parameter values
     */
    public function all() : array
    {
        return $this->parameters;
    }
}
