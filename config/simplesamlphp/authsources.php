<?php

$config = array(
    'admin' => array(
        'core:AdminPassword',
    ),

    'example-userpass' => array(
        'exampleauth:UserPass',
        'user1:password' => array(
            'mail' => 'adiogo@test.fr',
            'login_ad' => 'ARDG2',
            'IdpTargetId' => 'ARDG',
            'name' => 'Andre',
            'first_name' => 'test andre',
            'last_name' => 'test yes',
        ),
        'user2:password' => array(
            'email' => 'user2@example.com',
            'IdpTargetId' => '99513',
            'name' => 'Jacqueline SANTHIOGU',
            'first_name' => 'Jacqueline',
            'last_name' => 'SANTHIOGU',
        ),
    ),

);
