<?php return array(
    'root' => array(
        'name' => 'getgrav/email-ohmysmtp',
        'pretty_version' => '1.0.0+no-version-set',
        'version' => '1.0.0.0',
        'reference' => NULL,
        'type' => 'grav-plugin',
        'install_path' => __DIR__ . '/../../',
        'aliases' => array(),
        'dev' => true,
    ),
    'versions' => array(
        'getgrav/email-ohmysmtp' => array(
            'pretty_version' => '1.0.0+no-version-set',
            'version' => '1.0.0.0',
            'reference' => NULL,
            'type' => 'grav-plugin',
            'install_path' => __DIR__ . '/../../',
            'aliases' => array(),
            'dev_requirement' => false,
        ),
        'psr/event-dispatcher' => array(
            'dev_requirement' => false,
            'replaced' => array(
                0 => '*',
            ),
        ),
        'symfony/deprecation-contracts' => array(
            'dev_requirement' => false,
            'replaced' => array(
                0 => '*',
            ),
        ),
        'symfony/http-client' => array(
            'dev_requirement' => false,
            'replaced' => array(
                0 => '*',
            ),
        ),
        'symfony/mailer' => array(
            'dev_requirement' => false,
            'replaced' => array(
                0 => '*',
            ),
        ),
        'symfony/oh-my-smtp-mailer' => array(
            'pretty_version' => 'v5.4.11',
            'version' => '5.4.11.0',
            'reference' => '254e26005b7d47ff4143be89cf533193c180cd3e',
            'type' => 'symfony-mailer-bridge',
            'install_path' => __DIR__ . '/../symfony/oh-my-smtp-mailer',
            'aliases' => array(),
            'dev_requirement' => false,
        ),
        'symfony/polyfill-php80' => array(
            'dev_requirement' => false,
            'replaced' => array(
                0 => '*',
            ),
        ),
    ),
);
