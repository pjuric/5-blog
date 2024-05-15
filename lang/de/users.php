<?php

return [

    'validation_name_required'  => 'Bitte geben Sie Ihren Namen ein.',
    'validation_name_max'       => 'Der Name darf nicht länger als :max Zeichen sein.',
    'validation_name_regex'     => 'Der Name darf nur Buchstaben des Alphabets und Leerzeichen enthalten.',
    'validation_image_mimes'    => 'Das Bild muss eine Datei vom Typ: jpg, gif, png sein.',
    'validation_email_required' => 'Die E-Mail ist erforderlich und darf nicht leer sein.',
    'validation_email_email'    => 'Bitte geben Sie eine gültige E-Mail-Adresse ein.',
    'update_successfull'        => 'Benutzer erfolgreich aktualisiert.',
    'delete_successfull'        => 'Benutzer :name erfolgreich gelöscht.',
    'admin_assigned'            => 'Sie haben erfolgreich Admin-Rechte an :name zugewiesen.',
    'admin_removed'             => 'Sie haben die Admin-Rechte von :name erfolgreich entfernt.',

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

    'edit_title_header_user'              => 'Benutzerinformationen',
    'edit_description_user'               => 'Aktualisieren Sie die Informationen für Benutzer ',
    'edit_label_name'                     => 'Name',
    'edit_label_image'                    => 'Profilbild',
    'edit_label_email'                    => 'E-Mail',
    'edit_button_update'                  => 'Aktualisieren',
    'edit_status_updated'                 => 'Erfolgreich aktualisiert',
    'edit_delete_title'                   => 'Benutzer löschen',
    'edit_delete_description'             => 'Wenn Sie dieses Konto löschen, werden alle seine Ressourcen und Daten dauerhaft gelöscht und dieser Benutzer wird sich nicht mehr im System anmelden können.',
    'edit_delete_button_delete'           => 'Löschen',
    'edit_delete_modal_title'             => 'Sind Sie sicher, dass Sie das Konto von :name löschen möchten?',
    'edit_delete_modal_description'       => 'Nachdem ein Konto gelöscht wurde, werden alle seine Ressourcen und Daten dauerhaft gelöscht. Geben Sie die E-Mail-Adresse des Benutzers ein, um zu bestätigen, dass Sie sein Konto dauerhaft löschen möchten.',
    'edit_delete_modal_button_delete'     => 'Löschen',
    'edit_delete_modal_button_cancel'     => 'Abbrechen',
    'edit_admin_title'                    => 'Admin-Berechtigungen',
    'edit_admin_description_remove'       => 'Entfernen Sie die Admin-Rechte für diesen Benutzer, nachdem er nicht mehr die Möglichkeit haben wird, die Konten anderer Benutzer und andere Admin-Berechtigungen zu verwalten.',
    'edit_admin_description_assign'       => 'Weisen Sie diesem Benutzer Admin-Rechte zu, nachdem er die Berechtigungen erhalten hat, die Konten anderer Benutzer und andere Admin-Rechte zu verwalten.',
    'edit_admin_button_remove'            => 'Admin-Recht entfernen',
    'edit_admin_button_assign'            => 'Admin-Rechte zuweisen',
    'edit_admin_modal_title_remove'       => 'Sind Sie sicher, dass Sie die Admin-Rechte von :name entfernen möchten?',
    'edit_admin_modal_title_assign'       => 'Sind Sie sicher, dass Sie :name Admin-Rechte geben möchten?',
    'edit_admin_modal_description_remove' => 'Nachdem Sie die Admin-Rechte des Benutzers entfernt haben, wird er nicht mehr die Möglichkeit haben, auf die Daten anderer Benutzer zuzugreifen und diese zu ändern, sowie andere Admin-Privilegien.',
    'edit_admin_modal_description_assign' => 'Nachdem der Benutzer Admin-Rechte erhalten hat, wird er die Möglichkeit haben, auf die vertraulichen Daten anderer Benutzer zuzugreifen und diese zu ändern. Bitte bestätigen Sie diese Aktion.',
    'edit_admin_modal_button_confirm'     => 'Bestätigen',
    'edit_admin_modal_button_cancel'      => 'Abbrechen',

    'index_title_header_users'            => 'Benutzer',
    'index_table_header_name'             => 'Name',
    'index_table_header_email'            => 'E-Mail',
    'index_table_link_edit'               => 'Bearbeiten',
    'index_message_no_users'              => 'Es gibt keine Benutzer zum Anzeigen.',

    'posts_title_header_posts'            => 'Beiträge von :name',
    'posts_button_create'                 => 'Neuer Beitrag',
    'posts_link_read_more'                => 'Mehr lesen',
    'posts_message_no_posts'              => 'Es gibt keine Beiträge dieses Benutzers im Moment.',
    'posts_message_no_posts_self'         => 'Sie haben keine Beiträge veröffentlicht.',

];
