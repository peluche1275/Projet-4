<?php

namespace OCFram;

class Managers
{
    // PROPERTIES //

    protected $api = null;
    protected $dao = null;
    protected $managers = [];

    // CONSTRUCTOR //

    public function __construct($api, $dao)
    {
        $this->api = $api;
        $this->dao = $dao;
    }

    // METHOD //
    
    public function getManagerOf($module)
    {
        if (!is_string($module) || empty($module)) 
        {
            throw new \InvalidArgumentException('Le module spécifié est invalide');
        }

        if (!isset($this->managers[$module])) 
        {
            $manager = '\\Model\\' . $module . 'Manager' . $this->api;

            $this->managers[$module] = new $manager($this->dao);
        }

        return $this->managers[$module];
    }
}
