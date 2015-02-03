<?php

namespace UghAuthenticationLdapTest\Adapter;

use PHPUnit_Framework_TestCase;
use UghAuthenticationLdap\Authentication\Adapter\ChainableAdapterLdap;
use Zend\Authentication\Result;

class ChainableAdapterLdapTest extends PHPUnit_Framework_TestCase
{

    public function testCanAuthenticate()
    {
        $authResult = new Result(1, 'testuser');

        $adapterMock = $this->getMock('Zend\Authentication\Adapter\AbstractAdapter', array('setIdentity', 'setCredential', 'authenticate'));
        $adapterMock->expects($this->any())->method('authenticate')->will($this->returnValue($authResult));

        $ldapAdapterChain = new ChainableAdapterLdap($adapterMock);
        $ldapAdapterChain->setIdentity('testuser');
        $ldapAdapterChain->setCredential('password');

        $this->assertSame($authResult, $ldapAdapterChain->authenticate());
    }
}
