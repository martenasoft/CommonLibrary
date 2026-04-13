<?php

namespace MartenaSoft\CommonLibrary\Dictionary;

class RouteDictionary
{
    public const int GROUP_PAGE = 1;
    public const string GROUP_PAGE_TITLE = 'Page';
    public const int GROUP_USER = 2;
    public const string GROUP_USER_TITLE = 'User';
    public const int GROUP_ROLE = 3;
    public const string GROUP_ROLE_TITLE = 'Role';
    public const int GROUP_PERMISSION = 4;
    public const string GROUP_PERMISSION_TITLE = 'Permission';
    public const int GROUP_OTHER = 5;
    public const string GROUP_OTHER_TITLE = 'Other';
    public const int GROUP_UNTITLED = 6;
    public const string GROUP_UNTITLED_TITLE = 'Untitled';


    public const array GROUPS = [
        self::GROUP_PAGE => self::GROUP_PAGE_TITLE,
        self::GROUP_USER => self::GROUP_USER_TITLE,
        self::GROUP_ROLE => self::GROUP_ROLE_TITLE,
        self::GROUP_PERMISSION => self::GROUP_PERMISSION_TITLE,
        self::GROUP_OTHER => self::GROUP_OTHER_TITLE,
        self::GROUP_UNTITLED => self::GROUP_UNTITLED_TITLE,
    ];

    public const array DESCRIPTION = [
        self::GROUP_PAGE_TITLE => [
            'Admin. Pages items' => 'app_page_items_admin',
            'Admin. Create page' => 'app_page_create',
            'Admin. Update page' => 'app_page_update',
            'Admin. Delete page safe' => 'app_delete_page_safe',
            'Admin. Delete page' => 'app_delete_page',
            'Common. Main page' => 'app_page_main',
            'Common. Page detail' => 'app_page_slug',
        ],

        self::GROUP_USER_TITLE => [
            'Admin. Users items' => 'app_user_admin_index',
            'Admin. Create user' => 'app_user_admin_new',
            'Admin. Update user' => 'app_user_update',
            'Admin. Delete user' => 'app_user_profile_delete',
            'Common. Change user password' => 'app_user_profile_change_password',
            'Common. Forgot password' => 'app_forgot_password_request',
            'Common. Reset password' => 'app_reset_password',
            'Common. Delete user profile safe' => 'app_user_profile_safe_delete',
            'Common. User profile' => 'app_user_profile',
            'Common. Logout' => 'app_logout',
            'Common. Login' => 'app_login',
            'Common. Registration' => 'app_register',
            'Common. Verify email' => 'app_verify_email',
            'Common. Check email' => 'app_check_email',
        ],

        self::GROUP_ROLE_TITLE => [
            'Admin. Roles items' => 'app_role_admin_index',
            'Admin. Create role' => 'app_role_admin_new',
            'Admin. Update user' => 'app_role_admin_edit',
            'Admin. Role detail' => 'app_role_admin_show',
            'Admin. Delete role' => 'app_role_admin_delete',
        ],

        self::GROUP_PERMISSION_TITLE => [
            'Admin. Permissions items' => 'app_permission_admin_index',
            'Admin. Create permission' => 'app_permission_admin_new',
            'Admin. Update permission' => 'app_permission_admin_edit',
            'Admin. Permission detail' => 'app_permission_admin_show',
            'Admin. Delete permission' => 'app_permission_admin_delete',
        ],
    ];
}