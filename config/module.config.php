<?php

return array(
    'ldap' => array(
        'host' => '',
        'username' => '',
        'password' => '',
        'bindRequiresDn' => true,
        'accountDomainNameShort' => '',
        'baseDn' => '',
        'accountCanonicalForm' => '',
        'useSsl' => false,
        'port' => 636,
        'accountFilterFormat' => '',
        'tryUsernameSplit' => true,
    ),
    'service_manager' => array(
        'factories' => array(
            'UghAuthenticationLdap\Authentication\Adapter\LdapAdapter' => 'UghAuthenticationLdap\Factory\Authentication\Adapter\LdapAdapterFactory',
            'UghAuthenticationLdap\Ldap\Ldap' => 'UghAuthenticationLdap\Factory\Ldap\LdapFactory'
        )
    )
);
