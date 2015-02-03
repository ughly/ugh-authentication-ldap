<?php

return array(
    'service_manager' => array(
        'factories' => array(
            'UghAuthentication\Authentication\Adapter\LdapAdapter' => 'UghAuthenticationLdap\Factory\Authentication\Adapter\LdapAdapterFactory',
            'UghAuthentication\Ldap\Ldap' => 'UghAuthenticationLdap\Factory\Ldap\LdapFactory'
        )
    )
);
