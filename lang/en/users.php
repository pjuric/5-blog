<?php

return [

    'validation_name_required'  => 'Please enter your name.',
    'validation_name_max'       => 'Name must not be longer than :max characters.',
    'validation_name_regex'     => 'Name may only contain letters of the alphabet and spaces.',
    'validation_image_mimes'    => 'The image must be a file of type: jpg, gif, png.',
    'validation_email_required' => 'Email is required and must not be empty.',
    'validation_email_email'    => 'Please enter a valid email address.',
    'update_successfull'        => 'User updated successfully.',
    'delete_successfull'        => 'User :name deleted successfully.',
    'admin_assigned'            => 'You have successfully assigned admin rights to :name',
    'admin_removed'             => 'You have successfully removed admin rights from :name',

    /*
    |--------------------------------------------------------------------------
    | Language Lines For Users Blade Views
    |--------------------------------------------------------------------------
    |
    | Language lines for blade views localization (locales) shouldn't contain
    | more than 5 words and more than 4 underscores and should also follow this
    | naming convention: 'blade_name_element_indicator1_indicator2'
    |
    */

    'edit_title_header_user'              => 'User information',
    'edit_description_user'               => 'Update informations for user ',
    'edit_label_name'                     => 'Name',
    'edit_label_image'                    => 'Profile image',
    'edit_label_email'                    => 'Email',
    'edit_button_update'                  => 'Update',
    'edit_status_updated'                 => 'Successfully updated',
    'edit_delete_title'                   => 'Delete user',
    'edit_delete_description'             => 'Once you delete this account, all its resources and data will be permanently deleted and this user will no longer be able to log into the system.',
    'edit_delete_button_delete'           => 'Delete',
    'edit_delete_modal_title'             => 'Are you sure you want to delete :name\'s account?',
    'edit_delete_modal_description'       => 'Once an account is deleted, all of its resources and data will be permanently deleted. Enter the user\'s email to confirm that you want to permanently delete their account.',
    'edit_delete_modal_button_delete'     => 'Delete',
    'edit_delete_modal_button_cancel'     => 'Cancel',
    'edit_admin_title'                    => 'Admin permissions',
    'edit_admin_description_remove'       => 'Remove admin rights for this user, after which they will no longer have the ability to manage other users\' accounts and other admin permissions',
    'edit_admin_description_assign'       => 'Grant this user admin rights, after which he will have the permissions to manage the accounts of other users and other admin powers.',
    'edit_admin_button_remove'            => 'Remove admin right',
    'edit_admin_button_assign'            => 'Assign admin rights',
    'edit_admin_modal_title_remove'       => 'Are you sure you want to remove admin rights from :name?',
    'edit_admin_modal_title_assign'       => 'Are you sure you want to give admin rights to :name?',
    'edit_admin_modal_description_remove' => 'After you remove the user\'s admin rights, he will no longer have the ability to access and modify the data of other users as well as other admin privileges.',
    'edit_admin_modal_description_assign' => 'After the user gets admin rights, he will have the possibility to access and change the confidential data of other users. Please confirm this action.',
    'edit_admin_modal_button_confirm'     => 'Confirm',
    'edit_admin_modal_button_cancel'      => 'Cancel',

    'index_title_header_users'            => 'Users',
    'index_table_header_name'             => 'Name',
    'index_table_header_email'            => 'Email',
    'index_table_link_edit'               => 'Edit',
    'index_message_no_users'              => 'There is no users to display.',

    'posts_title_header_posts'            => ':name\'s posts',
    'posts_button_create'                 => 'New post',
    'posts_link_read_more'                => 'Read more',
    'posts_message_no_posts'              => 'There is no posts of this user at this moment.',
    'posts_message_no_posts_self'         => 'You haven\'t published any posts.',

];