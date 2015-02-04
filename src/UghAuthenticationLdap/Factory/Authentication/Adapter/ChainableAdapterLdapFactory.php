<?php

namespace UghAuthenticationLdap\Factory\Authentication\Adapter;

use UghAuthenticationLdap\Authentication\Adapter\ChainableAdapterLdap;
use Zend\ServiceManager\FactoryInterface;
use Zend\ServiceManager\ServiceLocatorInterface;

class ChainableAdapterLdapFactory implements FactoryInterface
{

    public function createService(ServiceLocatorInterface $serviceLocator)
    {
        $ldapAdapter = $serviceLocator->get('UghAuthenticationLdap\Authentication\Adapter\LdapAdapter');

        $chainableAdapter = new ChainableAdapterLdap($ldapAdapter);

        return $chainableAdapter;
    }
}
