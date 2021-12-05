<?php

namespace App;

use Exception;

class ServiceContainer
{

    protected array $services = [];

    public function addService(string $name, $service)
    {
        $this->services[$name] = $service;
    }

    /**
     * @throws Exception
     */
    public function getService($name)
    {
        if (isset($this->services[$name])) {
            return $this->services['name'];
        } else {
            throw new Exception('service not found');
        }
    }

}
