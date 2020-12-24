<?php

namespace Http;

/**
 * Utility class for managing URLs
 *
 * @author C Varley <clvarley>
 */
Class Url Implements \Stringable
{

    /**
     * Basic regex used to parse URL strings
     *
     * @var string URL_REGEX Url regex
     */
    private const URL_REGEX = '/^(https?):\/\/([^\/]*)\/?([^?]*)(?:\?([^#]*)#([A-Za-z]*))?$/';

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

    /**
     * Returns the string representation of this URL
     *
     * @return string Url
     */
    public function __toString() : string
    {
        $url = "{$this->scheme}://{$this->domain}/";

        if ( !empty( $this->path ) ) {
            $url .= $this->path;
        }

        if ( !empty( $this->query ) ) {
            $url .= "?{$this->query}";
        }

        if ( !empty( $this->fragment ) ) {
            $url .= "#{$this->fragment}";
        }

        return $url;
    }

    /**
     * Attempt to parse to given string into a Url object
     *
     * @param string $url Subject string
     * @return Url|null   Url object
     */
    public function fromString( string $url ) : ?Url
    {
        if ( !\preg_match( self::URL_REGEX, $url, $matches ) ) {
            return null;
        }

        $url = new Url;
        $url->scheme   = $matches[1];
        $url->domain   = $matches[2];
        $url->path     = $matches[3] ?? '';
        $url->query    = $matches[4] ?? '';
        $url->fragment = $matches[5] ?? '';

        return $url;
    }
}
