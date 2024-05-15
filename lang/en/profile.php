<?php

return [

    'validation_name_required'  => 'Please enter your name.',
    'validation_name_max'       => 'Name must not be longer than :max characters.',
    'validation_name_regex'     => 'Name may only contain letters of the alphabet and spaces.',
    'validation_image_mimes'    => 'The image must be a file of type: jpg, gif, png.',
    'validation_email_required' => 'Email is required and must not be empty.',
    'validation_email_email'    => 'Please enter a valid email address.',
    'update_successfull'        => 'Profile updated successfully.',

    /*
    |--------------------------------------------------------------------------
    | Language Lines For Profile Blade Views
    |--------------------------------------------------------------------------
    |
    | Language lines for blade views localization (locales) shouldn't contain
    | more than 5 words and more than 4 underscores and should also follow this
    | naming convention: 'blade_name_element_indicator1_indicator2'
    |
    */

    'edit_title_header_account'                     => 'My Account',

    'delete_title_delete'                           => 'Delete account',
    'delete_description_notice'                     => 'Once your account is deleted, all of its resources and data will be permanently deleted, including your posts. Before deleting your account, download any data or information you want to keep.',
    'delete_button_delete'                          => 'Delete account',
    'delete_modal_title'                            => 'Are you sure you want to delete your account?',
    'delete_modal_description'                      => 'Once your account is deleted, all of its resources and data will be permanently deleted. Enter your password to confirm that you want to permanently delete your account.',
    'delete_modal_label_password'                   => 'Password',
    'delete_modal_placeholder_password'             => 'Password',
    'delete_modal_button_delete'                    => 'Delete',
    'delete_modal_button_cancel'                    => 'Cancel',

    'update_title_update_password'                  => 'Change password',
    'update_description_update_password'            => 'Please use a long and strong password (combination of letters, numbers and characters)',
    'update_label_password'                         => 'Current password',
    'update_label_password_new'                     => 'New password',
    'update_label_password_confirm'                 => 'Confirm new password',
    'update_button_update_password'                 => 'Update',
    'update_status_message_updated'                 => 'Successfully updated',

    'update_profile_information_title_header'       => 'Informations',
    'update_profile_information_description_header' => 'Update your account informations.',
    'update_profile_information_label_name'         => 'Name',
    'update_profile_information_label_image'        => 'Profile image',
    'update_profile_information_error_image'        => ' not supported',
    'update_profile_information_label_email'        => 'Email',
    'update_profile_information_button_update'      => 'Update',
    'update_profile_information_confirm_message'    => 'Your email has not been verified.',
    'update_profile_information_confirm_link'       => 'Click here to confirm your email address.',
    'update_profile_information_confirm_status'     => 'A link to confirm your email address has been sent.',

];
