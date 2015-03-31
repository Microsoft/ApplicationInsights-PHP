<?php
namespace ApplicationInsights\Channel\Contracts;

/**
* Data contract class for type Location. 
*/
class Location
{
    /**
    * Data array that will store all the values. 
    */
    private $_data;

    /**
    * Creates a new Location. 
    */
    function __construct()
    {
        $this->_data = array();
    }

    /**
    * Gets the ip field. 
    */
    public function getIp()
    {
        return array_key_exists('ai.location.ip', $this->_data) ? $this->_data['ai.location.ip'] : null;
    }

    /**
    * Sets the ip field. 
    */
    public function setIp($ip)
    {
        $this->_data['ai.location.ip'] = $ip;
    }

    /**
    * Overrides JSON serialization for this class. 
    */
    public function jsonSerialize()
    {
        return Utils::removeEmptyValues($this->_data);
    }
}
