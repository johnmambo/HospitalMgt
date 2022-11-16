<?php

return [
    /**
     * Control if the seeder should create a user per role while seeding the data.
     */
    'create_users' => true,

    /**
     * Control if all the laratrust tables should be truncated before running the seeder.
     */
    'truncate_tables' => true,

    'roles_structure' => [
        'admin' => [
            'users' => 'c,r,u,d',
            'payments' => 'c,r,u,d',
            'profile' => 'r,u'
        ],
        'hr' => [
            'users' => 'c,r,u,d',
            'payments' => 'c,r,u,d',
            'profile' => 'r,u'
        ],
        
        'Doctor' => [
            'users' => 'c,r,u,d',
            'profile' => 'c,r,u'
        ],
        'nurse' => [
            'users' => 'c,r,u,',
            'profile' => 'c,r,u'
        ],
        'patient' => [
            'profile' => 'r,u',
        ],
        'user' => [
            'profile' => 'r,u',
        ],
        'pharmacist' => [
            'users' => 'c,r,u',
            'payments' => 'c,r,u',
            'profile' => 'r,u'
        ]
    ],

    'permissions_map' => [
        'c' => 'create',
        'r' => 'read',
        'u' => 'update',
        'd' => 'delete'
    ]
];
