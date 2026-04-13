<?php

namespace MartenaSoft\CommonLibrary\Dictionary;

class DictionaryMessage
{

    //--- Keys

    public const string CREATED_SUCCESSFUL_KEY = 'created_successfully';
    public const string ERROR_CREATING_KEY = 'create_error';

    public const string CHANGED_SUCCESSFUL_KEY = 'changed_successfully';
    public const string ERROR_CHANGING_KEY = 'error_changing_record';

    public const string DELETED_SUCCESSFUL_KEY = 'deleted_successfully';
    public const string ERROR_DELETING_DEFAULT_KEY = 'error_deleting';

    //--- Pages
    public const string PAGE_SAVED = 'Page saved successfully';
    public const string PAGE_SAVING_ERROR = 'Error while saving page';
    public const string PAGE_MOVING_UP_ERROR = 'Moving up error';
    public const string PAGE_MOVING_DOWN_ERROR = 'Moving up error';

    public const string PAGE_DELETED = 'Page deleted successfully';
    public const string PAGE_DELETED_ERROR = 'Error while deleting page';
    public const string BASKET_MESSAGE_AFTER_DELETED = '<a href="%s">For restore got to basket</a>';

    public const string PAGE_RESTORED_FROM_BASKET = 'Page restored form basket successfully';
    public const string PAGE_RESTORED_FROM_BASKET_ERROR = 'Error while  restored form basket  page';

    public const string IMAGE_SAVED = 'Image saved successfully';
    public const string IMAGE_SAVING_ERROR = 'Error while saving image';

    public const string IMAGE_DELETED = 'Image deleted successfully';

    public const string IMAGE_SET_AS_MAIN = 'The image is set as the main one';
    public const string IMAGE_UNSET_AS_MAIN = 'The image is unset as the main one';
    public const string IMAGE_DELETING_ERROR = 'Error while deleting image';

    public const string SOMETHING_WRONG = 'Something wrong';

    public const string USER_CREATED = 'User created successfully';
    public const string USER_CREATED_ERROR = 'Error while creating user';

    public const string USER_UPDATED = 'User updated successfully';
    public const string USER_UPDATE_ERROR = 'Error while updating user';

    public const string PASSWORD_CHANGED = 'Password changed successfully';
    public const string ERROR_CHENG_PASSWORD = 'Error change password';

    //------------ Permissions

    public const string PERMISSION_CREATED_SUCCESSFUL = 'Permission created successfully!';
    public const string ERROR_CREATING_PERMISSION = 'Error while creating permission';

    public const string PERMISSION_CHANGED_SUCCESSFUL = 'Permission changed successfully!';
    public const string ERROR_CHANGING_PERMISSION = 'Error while changing permission';

    public const string PERMISSION_DELETED_SUCCESSFUL = 'Permission deleted successfully!';
    public const string ERROR_DELETING_PERMISSION = 'Error while deleting permission';

    //------------ Roles

    public const string ROLE_CREATED_SUCCESSFUL = 'Role created successfully!';
    public const string ERROR_CREATING_ROLE = 'Error while creating role';

    public const string ROLE_CHANGED_SUCCESSFUL = 'Role changed successfully!';
    public const string ERROR_CHANGING_ROLE = 'Error while changing role';

    public const string ROLE_DELETED_SUCCESSFUL = 'Role deleted successfully!';
    public const string ERROR_DELETING_ROLE = 'Error while deleting Role';

    public const string MESSAGE_BASKET_TYPE_NOT_FOUND = 'Basket type not found';

    public const string MESSAGE_ERROR_CREATING_WITH_TYPE = 'You cannot save with a parent type as "{{ type }}"';

    //------------------ Template
    public const string TEMPLATE_CREATED_SUCCESSFUL = 'Template created successfully!';
    public const string ERROR_CREATING_TEMPLATE = 'Error while creating template';

    public const string TEMPLATE_CHANGED_SUCCESSFUL = 'Template changed successfully!';
    public const string ERROR_CHANGING_TEMPLATE = 'Error while changing template';

    public const string TEMPLATE_DELETED_SUCCESSFUL = 'Template deleted successfully!';
    public const string ERROR_DELETING_TEMPLATE = 'Error while deleting template';

    public const string RESOURCE_NOT_WRITABLE = 'This %s %s is not %s';

    public const array TEMPLATES = [
        self::CREATED_SUCCESSFUL_KEY => self::TEMPLATE_CREATED_SUCCESSFUL,
        self::ERROR_CREATING_KEY => self::ERROR_CREATING_TEMPLATE,
        self::CHANGED_SUCCESSFUL_KEY => self::TEMPLATE_CHANGED_SUCCESSFUL,
        self::ERROR_CHANGING_KEY => self::ERROR_CHANGING_TEMPLATE,
        self::DELETED_SUCCESSFUL_KEY => self::TEMPLATE_DELETED_SUCCESSFUL,
        self::ERROR_DELETING_DEFAULT_KEY => self::ERROR_DELETING_TEMPLATE,
    ];


    //------------------ Default
    public const string DEFAULT_CREATED_SUCCESSFUL = 'New record created successfully!';
    public const string ERROR_CREATING_DEFAULT = 'Error while creating new record';

    public const string DEFAULT_CHANGED_SUCCESSFUL = 'Record changed successfully!';
    public const string ERROR_CHANGING_DEFAULT = 'Error while changing record';

    public const string DEFAULT_DELETED_SUCCESSFUL = 'Record deleted successfully!';
    public const string ERROR_DELETING_DEFAULT = 'Error while deleting record';

    public const array DEFAULTS = [
        self::CREATED_SUCCESSFUL_KEY => self::DEFAULT_CREATED_SUCCESSFUL,
        self::ERROR_CREATING_KEY => self::ERROR_CREATING_DEFAULT,
        self::CHANGED_SUCCESSFUL_KEY => self::DEFAULT_CHANGED_SUCCESSFUL,
        self::ERROR_CHANGING_KEY => self::ERROR_CHANGING_DEFAULT,
        self::DELETED_SUCCESSFUL_KEY => self::DEFAULT_DELETED_SUCCESSFUL,
        self::ERROR_DELETING_DEFAULT_KEY => self::ERROR_DELETING_DEFAULT,
    ];


}
