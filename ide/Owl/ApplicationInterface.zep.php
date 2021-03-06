<?php

namespace Owl;


interface ApplicationInterface
{

    const ENV_PRODUCTION = "production";


    const ENV_DEVELOPMENT = "development";


    const EVENT_BEFORE_HANDLE = "app:beforeHandle";


    const EVENT_AFTER_HANDLE = "app:afterHandle";


    /**
     * @param mixed $di 
     * @param mixed $eventManager 
     * @param string $env 
     */
    public function __construct(\Owl\Di\ContainerInterface $di = null, Event\Manager $eventManager = null, $env = self::ENV_PRODUCTION);

    /**
     * Handle Http Request
     *
     * @param mixed $request 
     * @param mixed $response 
     * @return \Owl\Http\ResponseInterface 
     */
    public function handle(\Owl\Http\RequestInterface $request, \Owl\Http\ResponseInterface $response = null);

    /**
     * Sets the default namespace
     *
     * @param string $namespaceName 
     */
    public function setDefaultNamespace($namespaceName);

}
