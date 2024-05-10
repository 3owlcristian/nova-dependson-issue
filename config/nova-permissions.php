<?php

return [
    /*
    |--------------------------------------------------------------------------
    | User model class
    |--------------------------------------------------------------------------
     */

    'user_model' => 'App\Models\User',

    /*
    |--------------------------------------------------------------------------
    | Nova User resource tool class
    |--------------------------------------------------------------------------
     */

    'user_resource' => 'App\Nova\User',

    /*
    |--------------------------------------------------------------------------
    | The group associated with the resource
    |--------------------------------------------------------------------------
     */

    'role_resource_group' => 'Other',

    /*
    |--------------------------------------------------------------------------
    | Database table names
    |--------------------------------------------------------------------------
    | When using the "HasRoles" trait from this package, we need to know which
    | table should be used to retrieve your roles. We have chosen a basic
    | default value but you may easily change it to any table you like.
     */

    'table_names' => [
        'roles' => 'roles',

        'role_permission' => 'role_permission',

        'role_user' => 'role_user',

        'users' => 'users',
    ],

    /*
    |--------------------------------------------------------------------------
    | Application Permissions
    |--------------------------------------------------------------------------
     */

    'permissions' => [
        //User
        'view users' => [
            'display_name' => 'View users',
            'description' => 'Can view users',
            'group' => 'User',
        ],

        'create users' => [
            'display_name' => 'Create users',
            'description' => 'Can create users',
            'group' => 'User',
        ],

        'edit users' => [
            'display_name' => 'Edit users',
            'description' => 'Can edit users',
            'group' => 'User',
        ],

        'delete users' => [
            'display_name' => 'Delete users',
            'description' => 'Can delete users',
            'group' => 'User',
        ],
        //Roles
        'view roles' => [
            'display_name' => 'View roles',
            'description' => 'Can view roles',
            'group' => 'Role',
        ],

        'create roles' => [
            'display_name' => 'Create roles',
            'description' => 'Can create roles',
            'group' => 'Role',
        ],

        'edit roles' => [
            'display_name' => 'Edit roles',
            'description' => 'Can edit roles',
            'group' => 'Role',
        ],

        'delete roles' => [
            'display_name' => 'Delete roles',
            'description' => 'Can delete roles',
            'group' => 'Role',
        ],
        //Clinics
        'view clinics' => [
            'display_name' => 'View clinics',
            'description' => 'Can view clinics',
            'group' => 'Clinic',
        ],

        'create clinics' => [
            'display_name' => 'Create clinics',
            'description' => 'Can create clinics',
            'group' => 'Clinic',
        ],

        'edit clinics' => [
            'display_name' => 'Edit clinics',
            'description' => 'Can edit clinics',
            'group' => 'Clinic',
        ],

        'delete clinics' => [
            'display_name' => 'Delete clinics',
            'description' => 'Can delete clinics',
            'group' => 'Clinic',
        ],
        //Management
        'view managements' => [
            'display_name' => 'View managements',
            'description' => 'Can view managements',
            'group' => 'Management',
        ],

        'create managements' => [
            'display_name' => 'Create managements',
            'description' => 'Can create managements',
            'group' => 'Management',
        ],

        'edit managements' => [
            'display_name' => 'Edit managements',
            'description' => 'Can edit managements',
            'group' => 'Management',
        ],

        'delete managements' => [
            'display_name' => 'Delete managements',
            'description' => 'Can delete managements',
            'group' => 'Management',
        ],
        //County
        'view counties' => [
            'display_name' => 'View counties',
            'description' => 'Can view counties',
            'group' => 'County',
        ],

        'create counties' => [
            'display_name' => 'Create counties',
            'description' => 'Can create counties',
            'group' => 'County',
        ],

        'edit counties' => [
            'display_name' => 'Edit counties',
            'description' => 'Can edit counties',
            'group' => 'County',
        ],

        'delete counties' => [
            'display_name' => 'Delete counties',
            'description' => 'Can delete counties',
            'group' => 'County',
        ],
        //Courts
        'view courts' => [
            'display_name' => 'View courts',
            'description' => 'Can view courts',
            'group' => 'Court',
        ],

        'create courts' => [
            'display_name' => 'Create courts',
            'description' => 'Can create courts',
            'group' => 'Court',
        ],

        'edit courts' => [
            'display_name' => 'Edit courts',
            'description' => 'Can edit courts',
            'group' => 'Court',
        ],

        'delete courts' => [
            'display_name' => 'Delete courts',
            'description' => 'Can delete courts',
            'group' => 'Court',
        ],

        //insurance carriers

        'view insurance carriers' => [
            'display_name' => 'View insurance carriers',
            'description' => 'Can view insurance carriers',
            'group' => 'Insurance Carrier',
        ],

        'create insurance carriers' => [
            'display_name' => 'Create insurance carriers',
            'description' => 'Can create insurance carriers',
            'group' => 'Insurance Carrier',
        ],

        'edit insurance carriers' => [
            'display_name' => 'Edit insurance carriers',
            'description' => 'Can edit insurance carriers',
            'group' => 'Insurance Carrier',
        ],

        'delete insurance carriers' => [
            'display_name' => 'Delete insurance carriers',
            'description' => 'Can delete insurance carriers',
            'group' => 'Insurance Carrier',
        ],

        //insurance carrier locations

        'view insurance carrier locations' => [
            'display_name' => 'View insurance carrier locations',
            'description' => 'Can view insurance carrier locations',
            'group' => 'Insurance Carrier Location',
        ],

        'create insurance carrier locations' => [
            'display_name' => 'Create insurance carrier locations',
            'description' => 'Can create insurance carrier locations',
            'group' => 'Insurance Carrier Location',
        ],

        'edit insurance carrier locations' => [
            'display_name' => 'Edit insurance carrier locations',
            'description' => 'Can edit insurance carrier locations',
            'group' => 'Insurance Carrier Location',
        ],

        'delete insurance carrier locations' => [
            'display_name' => 'Delete insurance carrier locations',
            'description' => 'Can delete insurance carrier locations',
            'group' => 'Insurance Carrier Location',
        ],

        //law firms

        'view law firms' => [
            'display_name' => 'View law firms',
            'description' => 'Can view law firms',
            'group' => 'Law Firm',
        ],

        'create law firms' => [
            'display_name' => 'Create law firms',
            'description' => 'Can create law firms',
            'group' => 'Law Firm',
        ],

        'edit law firms' => [
            'display_name' => 'Edit law firms',
            'description' => 'Can edit law firms',
            'group' => 'Law Firm',
        ],

        'active deactive law firms' => [
            'display_name' => 'Active/Deactive law firms',
            'description' => 'Can Active/Deactive law firms',
            'group' => 'Law Firm',
        ],

        'delete law firms' => [
            'display_name' => 'Delete law firms',
            'description' => 'Can delete law firms',
            'group' => 'Law Firm',
        ],

        //attorneys

        'view attorneys' => [
            'display_name' => 'View attorneys',
            'description' => 'Can view attorneys',
            'group' => 'Attorney',
        ],

        'create attorneys' => [
            'display_name' => 'Create attorneys',
            'description' => 'Can create attorneys',
            'group' => 'Attorney',
        ],

        'edit attorneys' => [
            'display_name' => 'Edit attorneys',
            'description' => 'Can edit attorneys',
            'group' => 'Attorney',
        ],

        'active deactive attorneys' => [
            'display_name' => 'Active/Deactive attorneys',
            'description' => 'Can Active/Deactive attorneys',
            'group' => 'Attorney',
        ],

        'delete attorneys' => [
            'display_name' => 'Delete attorneys',
            'description' => 'Can delete attorneys',
            'group' => 'Attorney',
        ],

        //attorney statuses

        'view attorney statuses' => [
            'display_name' => 'View attorney statuses',
            'description' => 'Can view attorney statuses',
            'group' => 'Attorney Status',
        ],

        'create attorney statuses' => [
            'display_name' => 'Create attorney statuses',
            'description' => 'Can create attorney statuses',
            'group' => 'Attorney Status',
        ],

        'edit attorney statuses' => [
            'display_name' => 'Edit attorney statuses',
            'description' => 'Can edit attorney statuses',
            'group' => 'Attorney Status',
        ],

        'delete attorney statuses' => [
            'display_name' => 'Delete attorney statuses',
            'description' => 'Can delete attorney statuses',
            'group' => 'Attorney Status',
        ],

        //case managers

        'view case managers' => [
            'display_name' => 'View case managers',
            'description' => 'Can view case managers',
            'group' => 'Case Manager',
        ],

        'create case managers' => [
            'display_name' => 'Create case managers',
            'description' => 'Can create case managers',
            'group' => 'Case Manager',
        ],

        'edit case managers' => [
            'display_name' => 'Edit case managers',
            'description' => 'Can edit case managers',
            'group' => 'Case Manager',
        ],
        'active deactive case managers' => [
            'display_name' => 'Active/Deactive case managers',
            'description' => 'Can Active/Deactive case managers',
            'group' => 'Case Manager',
        ],

        'delete case managers' => [
            'display_name' => 'Delete case managers',
            'description' => 'Can delete case managers',
            'group' => 'Case Manager',
        ],

        //law firm locations

        'view law firm locations' => [
            'display_name' => 'View law firm locations',
            'description' => 'Can view law firm locations',
            'group' => 'Law Firm Location',
        ],

        'create law firm locations' => [
            'display_name' => 'Create law firm locations',
            'description' => 'Can create law firm locations',
            'group' => 'Law Firm Location',
        ],

        'edit law firm locations' => [
            'display_name' => 'Edit law firm locations',
            'description' => 'Can edit law firm locations',
            'group' => 'Law Firm Location',
        ],
        'active deactive law firm locations' => [
            'display_name' => 'Active/Deactive law firm locations',
            'description' => 'Can Active/Deactive law firm locations',
            'group' => 'Law Firm Location',
        ],

        'delete law firm locations' => [
            'display_name' => 'Delete law firm locations',
            'description' => 'Can delete law firm locations',
            'group' => 'Law Firm Location',
        ],

        //providers

        'view providers' => [
            'display_name' => 'View providers',
            'description' => 'Can view providers',
            'group' => 'Providers',
        ],

        'create providers' => [
            'display_name' => 'Create providers',
            'description' => 'Can create providers',
            'group' => 'Providers',
        ],

        'edit providers' => [
            'display_name' => 'Edit providers',
            'description' => 'Can edit providers',
            'group' => 'Providers',
        ],

        'delete providers' => [
            'display_name' => 'Delete providers',
            'description' => 'Can delete providers',
            'group' => 'Providers',
        ],
    ],
];
