<?php
/**
 * @access protected
 * @author Judzhin Miles <info[woof-woof]msbios.com>
 */
namespace MSBiosTest\Validator;

use MSBios\Validator\ConfigProvider;
use PHPUnit\Framework\TestCase;

/**
 * Class ConfigProviderTest
 * @package MSBiosTest\Validator
 */
class ConfigProviderTest extends TestCase
{
    /** @var ConfigProvider */
    protected $instance;

    /**
     * @constructor
     */
    protected function setUp()
    {
        parent::setUp();
        $this->instance = new ConfigProvider;
    }

    /**
     *
     */
    public function testCallInvoke()
    {
        $this->assertInternalType('array', $this->instance->__invoke());
    }

    /**
     *
     */
    public function testGetDependencyConfig()
    {

        $this->assertInternalType('array', $this->instance->getDependencyConfig());
    }
}
