<?php
/**
 * @access protected
 * @author Judzhin Miles <info[woof-woof]msbios.com>
 */
namespace MSBiosTest\Validator;

use MSBios\Validator\Module;
use PHPUnit\Framework\MockObject\MockObject;
use PHPUnit\Framework\TestCase;

/**
 * Class ModuleTest
 * @package MSBiosTest\Validator
 */
class ModuleTest extends TestCase
{
    /**
     *
     */
    public function testGetConfig()
    {
        /** @var \PHPUnit_Framework_MockObject_MockObject|MockObject $mock */
        $mock = $this->createMock(Module::class);
        $mock->method('getConfig')
            ->willReturn([]);

        $this->assertInternalType('array', $mock->getConfig());
    }

    /**
     *
     */
    public function testGetAutoloaderConfig()
    {
        /** @var \PHPUnit_Framework_MockObject_MockObject|MockObject $mock */
        $mock = $this->createMock(Module::class);
        $mock->method('getAutoloaderConfig')
            ->willReturn([]);

        $this->assertInternalType('array', $mock->getAutoloaderConfig());
    }
}
