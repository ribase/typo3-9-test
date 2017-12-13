<?php
return [
    'BE' => [
        'debug' => false,
        'explicitADmode' => 'explicitAllow',
        'installToolPassword' => '$pbkdf2-sha256$25000$YkGbaLK1l/bGzAIxvf6m7g$utjuzVzfge7ImR96Z.I/7banuGF/7V76GmNkJZq7NfI',
        'loginSecurityLevel' => 'normal',
    ],
    'DB' => [
        'Connections' => [
            'Default' => [
                'charset' => 'utf8',
                'dbname' => 'typo3',
                'driver' => 'mysqli',
                'host' => 'db',
                'password' => 'typo3',
                'port' => 3306,
                'user' => 'typo3',
            ],
        ],
    ],
    'EXT' => [
        'extConf' => [
            'backend' => 'a:6:{s:14:"backendFavicon";s:0:"";s:11:"backendLogo";s:0:"";s:20:"loginBackgroundImage";s:0:"";s:13:"loginFootnote";s:0:"";s:19:"loginHighlightColor";s:0:"";s:9:"loginLogo";s:0:"";}',
            'extensionmanager' => 'a:2:{s:21:"automaticInstallation";i:1;s:11:"offlineMode";i:0;}',
            'rsaauth' => 'a:1:{s:18:"temporaryDirectory";s:0:"";}',
            'saltedpasswords' => 'a:6:{s:3:"BE.";a:4:{s:21:"saltedPWHashingMethod";s:41:"TYPO3\\CMS\\Saltedpasswords\\Salt\\Pbkdf2Salt";s:11:"forceSalted";i:0;s:15:"onlyAuthService";i:0;s:12:"updatePasswd";i:1;}s:3:"FE.";a:5:{s:7:"enabled";i:1;s:21:"saltedPWHashingMethod";s:41:"TYPO3\\CMS\\Saltedpasswords\\Salt\\Pbkdf2Salt";s:11:"forceSalted";i:0;s:15:"onlyAuthService";i:0;s:12:"updatePasswd";i:1;}s:20:"checkConfigurationBE";s:1:"0";s:21:"checkConfigurationBE2";s:1:"0";s:20:"checkConfigurationFE";s:1:"0";s:21:"checkConfigurationFE2";s:1:"0";}',
            'scheduler' => 'a:3:{s:11:"enableBELog";i:1;s:11:"maxLifetime";i:1440;s:15:"showSampleTasks";i:1;}',
        ],
    ],
    'EXTENSIONS' => [
        'backend' => [
            'backendFavicon' => '',
            'backendLogo' => '',
            'loginBackgroundImage' => '',
            'loginFootnote' => '',
            'loginHighlightColor' => '',
            'loginLogo' => '',
        ],
        'extensionmanager' => [
            'automaticInstallation' => 1,
            'offlineMode' => 0,
        ],
        'rsaauth' => [
            'temporaryDirectory' => '',
        ],
        'saltedpasswords' => [
            'BE' => [
                'forceSalted' => 0,
                'onlyAuthService' => 0,
                'saltedPWHashingMethod' => 'TYPO3\\CMS\\Saltedpasswords\\Salt\\Pbkdf2Salt',
                'updatePasswd' => 1,
            ],
            'FE' => [
                'enabled' => 1,
                'forceSalted' => 0,
                'onlyAuthService' => 0,
                'saltedPWHashingMethod' => 'TYPO3\\CMS\\Saltedpasswords\\Salt\\Pbkdf2Salt',
                'updatePasswd' => 1,
            ],
            'checkConfigurationBE' => '0',
            'checkConfigurationBE2' => '0',
            'checkConfigurationFE' => '0',
            'checkConfigurationFE2' => '0',
        ],
        'scheduler' => [
            'enableBELog' => 1,
            'maxLifetime' => 1440,
            'showSampleTasks' => 1,
        ],
    ],
    'FE' => [
        'debug' => false,
        'loginSecurityLevel' => 'rsa',
    ],
    'MAIL' => [
        'transport' => 'sendmail',
        'transport_sendmail_command' => '/usr/sbin/sendmail -t -i ',
        'transport_smtp_encrypt' => '',
        'transport_smtp_password' => '',
        'transport_smtp_server' => '',
        'transport_smtp_username' => '',
    ],
    'SYS' => [
        'devIPmask' => '',
        'displayErrors' => 0,
        'encryptionKey' => 'eee2ab0184585fa661ec4b64a8beddb25c20cf67974de70ab3aba94220f7a7b5da148a0b4dd4c3062f29e949b1f5dbf1',
        'exceptionalErrors' => 4096,
        'sitename' => 'TYPO3-9-TEST',
        'systemLogLevel' => 2,
        'systemMaintainers' => [
            1,
        ],
    ],
];
