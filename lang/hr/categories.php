<?php

return [

    'validation_title_required' => 'Naziv kategorije ne smije biti prazan!',
    'validation_title_max'      => 'Naziv kategorije ne može sadržavati više od 255 znakova.',
    'validation_title_unique'   => 'Kategorija s ovim nazivom već postoji.',
    'create_successfull'        => 'Nova kategorija uspješno kreirana.',
    'update_successfull'        => 'Kategorija uspješno ažurirana.',
    'delete_successfull'        => 'Kategorija :title uspješno izbrisana.',
    'delete_error_posts_exist'  => 'Ova kategorija ne može biti izbrisana jer postoje objave povezane s ovom kategorijom!',

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

    'index_title_categories'            => 'Kategorije',
    'index_message_no_categories'       => 'Trenutno ne postoji niti jedna kategorija.',

    'view_link_read_more'               => 'Pročitaj više',
    'view_message_no_posts'             => 'Trenutno nema dostupnih objava s ovom kategorijom.',

    'create_button_new_category'        => 'Nova Kategorija',
    'create_modal_title'                => 'Kreiraj novu kategoriju',
    'create_modal_description'          => 'Nova kategorija će se moći odabrati prilikom kreiranja ili ažuriranja objava.',
    'create_modal_label_category'       => 'Naziv kategorije',
    'create_modal_placeholder_category' => 'kategorija',
    'create_modal_button_cancel'        => 'Otkaži',
    'create_modal_button_create'        => 'Kreiraj',

    'delete_button_delete_category'     => 'Izbriši kategoriju',
    'delete_modal_title'                => 'Izbriši kategoriju',
    'delete_modal_description'          => 'Nakon brisanja, ova kategorija se neće moći odabrati prilikom kreiranja novih objava.',
    'delete_modal_button_cancel'        => 'Otkaži',
    'delete_modal_button_delete'        => 'Izbriši',

    'edit_button_update_category'       => 'Ažuriraj kategoriju',
    'edit_modal_title'                  => 'Ažuriraj kategoriju',
    'edit_modal_description'            => 'Ažurirana kategorija bit će vidljiva u popisu kategorija i u objavama povezanim s tom kategorijom.',
    'edit_modal_button_cancel'          => 'Otkaži',
    'edit_modal_button_update'          => 'Ažuriraj',

];
