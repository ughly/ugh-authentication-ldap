<?php

namespace UghAuthenticationLdap\Factory\Ldap;

use Zend\Ldap\Ldap;
use Zend\ServiceManager\FactoryInterface;
use Zend\ServiceManager\ServiceLocatorInterface;

class LdapFactory implements FactoryInterface
{

    public function createService(ServiceLocatorInterface $serviceLocator)
    {
        $config = $serviceLocator->get('Config');

        $ldapConfig = array();
        if (array_key_exists('ldap', $config)) {
            $ldapConfig = $config['ldap'];
        }

        $ldap = new Ldap($ldapConfig);
        return $ldap;
    }
}
