<?php
/**
 * @access protected
 * @author Judzhin Miles <info[woof-woof]msbios.com>
 */
namespace MSBios\Validator\Factory;

use Interop\Container\ContainerInterface;
use MSBios\Validator\GoogleReCaptcha;
use MSBios\Validator\Module;
use Zend\ServiceManager\Factory\FactoryInterface;

/**
 * Class GoogleReCaptchaFactory
 * @package MSBios\Validator\Factory
 */
class GoogleReCaptchaFactory implements FactoryInterface
{
    /**
     * @param ContainerInterface $container
     * @param string $requestedName
     * @param array|null $options
     * @return GoogleReCaptcha
     */
    public function __invoke(ContainerInterface $container, $requestedName, array $options = null)
    {
        return new GoogleReCaptcha(
            $container->get(Module::class)[GoogleReCaptcha::class]
        );
    }
}