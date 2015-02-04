<?php

namespace UghAuthenticationLdapTest\Factory\Authentication\Adapter;

use PHPUnit_Framework_TestCase;
use UghAuthenticationLdap\Factory\Authentication\Adapter\ChainableAdapterLdapFactory;
use Zend\ServiceManager\ServiceManager;

class ChainableAdapterLdapFactoryTest extends PHPUnit_Framework_TestCase
{

    public function testCanCreateService()
    {
        $ldapAdapterMock = $this->getMock('Zend\Authentication\Adapter\Ldap');

        $serviceManager = new ServiceManager();
        $serviceManager->setService('UghAuthenticationLdap\Authentication\Adapter\LdapAdapter', $ldapAdapterMock);

        $factory = new ChainableAdapterLdapFactory();

        $chainableAdapter = $factory->createService($serviceManager);

        $this->assertInstanceOf('UghAuthenticationLdap\Authentication\Adapter\ChainableAdapterLdap', $chainableAdapter);
    }
}
