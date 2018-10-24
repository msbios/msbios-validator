<?php
/**
 * @access protected
 * @author Judzhin Miles <info[woof-woof]msbios.com>
 */
namespace MSBios\Validator;

use MSBios\ModuleInterface;
use Zend\Loader\AutoloaderFactory;
use Zend\Loader\StandardAutoloader;
use Zend\Stdlib\ArrayUtils;

/**
 * Class Module
 * @package MSBios\Validator
 */
class Module implements ModuleInterface
{
    /** @const VERSION */
    const VERSION = '1.0.0';

    /**
     * @return mixed
     */
    public function getConfig()
    {
        return ArrayUtils::merge(
            include __DIR__ . '/../config/module.config.php',
            [
                'service_manager' => (new ConfigProvider)->getDependencyConfig()
            ]
        );
    }

    /**
     * Return an array for passing to Zend\Loader\AutoloaderFactory.
     *
     * @return array
     */
    public function getAutoloaderConfig()
    {
        return [
            AutoloaderFactory::STANDARD_AUTOLOADER => [
                StandardAutoloader::LOAD_NS => [
                    __NAMESPACE__ => __DIR__,
                ],
            ],
        ];
    }
}
