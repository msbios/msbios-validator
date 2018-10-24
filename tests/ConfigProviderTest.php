<?php
/**
 * @access protected
 * @author Judzhin Miles <info[woof-woof]msbios.com>
 */
namespace MSBiosTest\Validator;

use MSBios\Validator\ConfigProvider;
use PHPUnit\Framework\MockObject\MockObject;
use PHPUnit\Framework\TestCase;

/**
 * Class ConfigProviderTest
 * @package MSBiosTest\Validator
 */
class ConfigProviderTest extends TestCase
{
    /**
     *
     */
    public function testCallInvoke()
    {
        /** @var \PHPUnit_Framework_MockObject_MockObject|MockObject $mock */
        $mock = $this->createMock(ConfigProvider::class);
        $mock->method('__invoke')
            ->willReturn([]);

        $this->assertInternalType('array', $mock->__invoke());
    }

    /**
     *
     */
    public function testGetDependencyConfig()
    {
        /** @var \PHPUnit_Framework_MockObject_MockObject|MockObject $mock */
        $mock = $this->createMock(ConfigProvider::class);
        $mock->method('getDependencyConfig')
            ->willReturn([]);

        $this->assertInternalType('array', $mock->getDependencyConfig());
    }
}
