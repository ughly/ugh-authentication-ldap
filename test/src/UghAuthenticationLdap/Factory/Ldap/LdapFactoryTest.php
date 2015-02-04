<?php

namespace UghAuthenticationLdapTest\Factory\Ldap;

use PHPUnit_Framework_TestCase;
use UghAuthenticationLdap\Factory\Ldap\LdapFactory;
use Zend\ServiceManager\ServiceManager;

class LdapFactoryTest extends PHPUnit_Framework_TestCase
{

    public function testCanCreateService()
    {
        $serviceManager = new ServiceManager();
        $serviceManager->setService('Config', array());

        $factory = new LdapFactory();

        $ldap = $factory->createService($serviceManager);

        $this->assertInstanceOf('Zend\Ldap\Ldap', $ldap);
    }

    public function testCanCreateServiceWithLdapConfigs()
    {
        $ldapConfig = array(
            'ldap' => array(
                'host' => 'test.hostname'
            )
        );

        $serviceManager = new ServiceManager();
        $serviceManager->setService('Config', $ldapConfig);

        $factory = new LdapFactory();

        $ldap = $factory->createService($serviceManager);

        $this->assertInstanceOf('Zend\Ldap\Ldap', $ldap);
    }
}
