<?php

namespace UghAuthenticationLdapTest\Factory\Authentication\Adapter;

use PHPUnit_Framework_TestCase;
use UghAuthenticationLdap\Factory\Authentication\Adapter\LdapAdapterFactory;
use Zend\ServiceManager\ServiceManager;

class LdapAdapterFactoryTest extends PHPUnit_Framework_TestCase
{

    public function testCanCreateClass()
    {
        $ldapService = $this->getMock('Zend\Ldap\Ldap');

        $serviceManager = new ServiceManager();
        $serviceManager->setService('UghAuthenticationLdap\Ldap\Ldap', $ldapService);

        $factory = new LdapAdapterFactory();

        $ldapAdapter = $factory->createService($serviceManager);

        $this->assertInstanceOf('Zend\Authentication\Adapter\Ldap', $ldapAdapter);
    }
}
