<?php 

namespace App\Bundle;

class TestBundle
{
    /**
     * @var Cortex\Core\Application
     */
    protected $application;

    /**
     * @var Cortex\Core\ConfigManager
     */
    protected $configManager;

    public function __construct()
    {

    }

    public function initialize(\Cortex\Core\Application $Application)
    {
        $this->application = $Application;
        $this->configManager = $Application->getConfigManager();
        $this->application->getRouter()->addRoute(new \Cortex\Router\ExplicitRoute('test-route', '/cyka', array('GET'), 'App\CykaException'));
    }
}
