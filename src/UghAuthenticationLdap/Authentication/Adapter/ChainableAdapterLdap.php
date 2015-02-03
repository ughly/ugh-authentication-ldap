<?php

namespace UghAuthenticationLdap\Authentication\Adapter;

use UghAuthentication\Authentication\Adapter\ChainableAdapter;
use Zend\Authentication\Adapter\AbstractAdapter;

class ChainableAdapterLdap extends ChainableAdapter
{

    /** @var AbstractAdapter */
    private $adapter;

    public function __construct(AbstractAdapter $adapter)
    {
        $this->adapter = $adapter;
    }

    protected function doAuthentication()
    {
        $this->adapter->setIdentity($this->getIdentity());
        $this->adapter->setCredential($this->getCredential());

        return $this->adapter->authenticate();
    }
}
