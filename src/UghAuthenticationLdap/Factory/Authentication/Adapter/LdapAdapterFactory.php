<?php

namespace UghAuthenticationLdap\Factory\Authentication\Adapter;

use Zend\Authentication\Adapter\Ldap;
use Zend\ServiceManager\FactoryInterface;
use Zend\ServiceManager\ServiceLocatorInterface;

class LdapAdapterFactory implements FactoryInterface
{

    public function createService(ServiceLocatorInterface $serviceLocator)
    {
        $service = $serviceLocator->get('UghAuthenticationLdap\Ldap\Ldap');

        $adapter = new Ldap();
        $adapter->setLdap($service);

        return $adapter;
    }
}
