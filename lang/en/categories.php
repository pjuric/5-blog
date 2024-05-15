<?php

return [

    'validation_title_required' => 'Category name must not be empty!',
    'validation_title_max'      => 'The category name cannot contain more than 255 characters.',
    'validation_title_unique'   => 'A category with this name already exists.',
    'create_successfull'        => 'New category successfully created.',
    'update_successfull'        => 'Category successfully updated.',
    'delete_successfull'        => 'Category :title successfully deleted.',
    'delete_error_posts_exist'  => 'This category cannot be deleted because there are posts related to this category!',

    /*
    |--------------------------------------------------------------------------
    | Language Lines For Categories Blade Views
    |--------------------------------------------------------------------------
    |
    | Language lines for blade views localization (locales) shouldn't contain
    | more than 5 words and more than 4 underscores and should also follow this
    | naming convention: 'blade_name_element_indicator1_indicator2'
    |
    */

    'index_title_categories'            => 'Categories',
    'index_message_no_categories'       => 'There is no existing categories.',

    'view_link_read_more'               => 'Read more',
    'view_message_no_posts'             => 'There are currently no posts available with this category.',

    'create_button_new_category'        => 'New Category',
    'create_modal_title'                => 'Create a new category',
    'create_modal_description'          => 'The newly created category will be selectable when creating or updating posts.',
    'create_modal_label_category'       => 'Category name',
    'create_modal_placeholder_category' => 'category',
    'create_modal_button_cancel'        => 'Cancel',
    'create_modal_button_create'        => 'Create',

    'delete_button_delete_category'     => 'Delete category',
    'delete_modal_title'                => 'Delete category',
    'delete_modal_description'          => 'After deleting, this category won\'t be selectable when creating new posts.',
    'delete_modal_button_cancel'        => 'Cancel',
    'delete_modal_button_delete'        => 'Delete',

    'edit_button_update_category'       => 'Update category',
    'edit_modal_title'                  => 'Update category',
    'edit_modal_description'            => 'The updated category will be visible in the list of categories, and in the posts related to that category',
    'edit_modal_button_cancel'          => 'Cancel',
    'edit_modal_button_update'          => 'Update',

];
