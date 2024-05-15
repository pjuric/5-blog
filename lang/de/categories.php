<?php

return [

    'validation_title_required' => 'Der Kategoriename darf nicht leer sein!',
    'validation_title_max'      => 'Der Kategoriename darf nicht mehr als 255 Zeichen enthalten.',
    'validation_title_unique'   => 'Eine Kategorie mit diesem Namen existiert bereits.',
    'create_successfull'        => 'Neue Kategorie erfolgreich erstellt.',
    'update_successfull'        => 'Kategorie erfolgreich aktualisiert.',
    'delete_successfull'        => 'Kategorie :title erfolgreich gelöscht.',
    'delete_error_posts_exist'  => 'Diese Kategorie kann nicht gelöscht werden, da es Beiträge zu dieser Kategorie gibt!',

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

    'index_title_categories'            => 'Kategorien',
    'index_message_no_categories'       => 'Es gibt keine vorhandenen Kategorien.',

    'view_link_read_more'               => 'Mehr lesen',
    'view_message_no_posts'             => 'Aktuell sind keine Beiträge mit dieser Kategorie verfügbar.',

    'create_button_new_category'        => 'Neue Kategorie',
    'create_modal_title'                => 'Eine neue Kategorie erstellen',
    'create_modal_description'          => 'Die neu erstellte Kategorie kann beim Erstellen oder Aktualisieren von Beiträgen ausgewählt werden.',
    'create_modal_label_category'       => 'Kategoriename',
    'create_modal_placeholder_category' => 'Kategorie',
    'create_modal_button_cancel'        => 'Abbrechen',
    'create_modal_button_create'        => 'Erstellen',

    'delete_button_delete_category'     => 'Kategorie löschen',
    'delete_modal_title'                => 'Kategorie löschen',
    'delete_modal_description'          => 'Nach dem Löschen dieser Kategorie kann sie beim Erstellen neuer Beiträge nicht mehr ausgewählt werden.',
    'delete_modal_button_cancel'        => 'Abbrechen',
    'delete_modal_button_delete'        => 'Löschen',

    'edit_button_update_category'       => 'Kategorie aktualisieren',
    'edit_modal_title'                  => 'Kategorie aktualisieren',
    'edit_modal_description'            => 'Die aktualisierte Kategorie wird in der Liste der Kategorien und in den Beiträgen, die zu dieser Kategorie gehören, sichtbar sein.',
    'edit_modal_button_cancel'          => 'Abbrechen',
    'edit_modal_button_update'          => 'Aktualisieren',

];
