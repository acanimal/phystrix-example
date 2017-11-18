<?php

namespace AppBundle\Phystrix;

use Zend\Config\Config;
use Odesk\Phystrix\ApcStateStorage;
use Odesk\Phystrix\CircuitBreakerFactory;
use Odesk\Phystrix\CommandMetricsFactory;
use Odesk\Phystrix\CommandFactory;

class PhystrixCommandFactory
{
    public function getFactory()
    {
        $config = new Config(PhystrixConfig::config());
        $stateStorage = new ApcStateStorage();
        $circuitBreakerFactory = new CircuitBreakerFactory($stateStorage);
        $commandMetricsFactory = new CommandMetricsFactory($stateStorage);

        $factory = new CommandFactory(
            $config,
            new \Zend\Di\ServiceLocator(),
            $circuitBreakerFactory,
            $commandMetricsFactory,
            new \Odesk\Phystrix\RequestCache(),
            new \Odesk\Phystrix\RequestLog()
        );
        
        return $factory;
    }
}
