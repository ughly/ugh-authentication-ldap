<?php

return array(
    'modules' => array(
        'UghAuthenticationLdap'
    ),
    'module_listener_options' => array(
        'module_paths' => array(
            './tests',
            './vendor',
        ),
        'config_glob_paths' => array(
            'config/autoload/{,*.}{global,local}.php'
        )
    )
);
