<?php

return [

    'validation_name_required'  => 'Molimo unesite vaše ime.',
    'validation_name_max'       => 'Ime ne smije biti dulje od :max znakova.',
    'validation_name_regex'     => 'Ime smije sadržavati samo slova abecede i razmake.',
    'validation_image_mimes'    => 'Slika mora biti datoteka tipa: jpg, gif, png.',
    'validation_email_required' => 'Email je obavezan i ne smije biti prazan.',
    'validation_email_email'    => 'Unesite važeću email adresu.',
    'update_successfull'        => 'Korisnik uspješno ažuriran.',
    'delete_successfull'        => 'Korisnik :name uspješno izbrisan.',
    'admin_assigned'            => 'Uspješno ste dodijelili administratorske ovlasti korisniku :name.',
    'admin_removed'             => 'Uspješno ste uklonili administratorske ovlasti korisniku :name.',

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

    'edit_title_header_user'              => 'Informacije o korisniku',
    'edit_description_user'               => 'Ažurirajte informacije za korisnika ',
    'edit_label_name'                     => 'Ime',
    'edit_label_image'                    => 'Slika profila',
    'edit_label_email'                    => 'Email',
    'edit_button_update'                  => 'Ažuriraj',
    'edit_status_updated'                 => 'Uspješno ažurirano',
    'edit_delete_title'                   => 'Izbriši korisnika',
    'edit_delete_description'             => 'Kada izbrišete ovaj račun, svi njegovi resursi i podaci bit će trajno izbrisani i ovaj korisnik više neće moći pristupiti sustavu.',
    'edit_delete_button_delete'           => 'Izbriši',
    'edit_delete_modal_title'             => 'Jeste li sigurni da želite izbrisati račun korisnika :name?',
    'edit_delete_modal_description'       => 'Kada izbrišete korisnički račun, svi njegovi resursi i podaci bit će trajno izbrisani. Unesite korisnikov email kako biste potvrdili da želite trajno izbrisati njegov račun.',
    'edit_delete_modal_button_delete'     => 'Izbriši',
    'edit_delete_modal_button_cancel'     => 'Otkaži',
    'edit_admin_title'                    => 'Administratorske ovlasti',
    'edit_admin_description_remove'       => 'Uklonite administratorske ovlasti za ovog korisnika, nakon čega više neće imati mogućnost upravljanja računima drugih korisnika i drugim administratorskim ovlastima.',
    'edit_admin_description_assign'       => 'Dodijelite ovom korisniku administratorske ovlasti, nakon čega će imati mogućnost upravljanja računima drugih korisnika i drugim administratorskim ovlastima.',
    'edit_admin_button_remove'            => 'Ukloni administratorska prava',
    'edit_admin_button_assign'            => 'Dodijeli administratorska prava',
    'edit_admin_modal_title_remove'       => 'Jeste li sigurni da želite ukloniti administratorska prava korisniku :name?',
    'edit_admin_modal_title_assign'       => 'Jeste li sigurni da želite dodijeliti administratorska prava korisniku :name?',
    'edit_admin_modal_description_remove' => 'Nakon što uklonite administratorska prava ovom korisniku, on više neće imati mogućnost pristupa i mijenjanja podataka drugih korisnika kao ni drugih administratorskih ovlasti.',
    'edit_admin_modal_description_assign' => 'Nakon što korisnik dobije administratorska prava, imat će mogućnost pristupa i mijenjanja povjerljivih podataka drugih korisnika. Molimo potvrdite ovu radnju.',
    'edit_admin_modal_button_confirm'     => 'Potvrdi',
    'edit_admin_modal_button_cancel'      => 'Otkaži',

    'index_title_header_users'            => 'Korisnici',
    'index_table_header_name'             => 'Ime',
    'index_table_header_email'            => 'Email',
    'index_table_link_edit'               => 'Uredi',
    'index_message_no_users'              => 'Nema korisnika za prikazivanje.',

    'posts_title_header_posts'            => 'Objave korisnika :name',
    'posts_button_create'                 => 'Nova objava',
    'posts_link_read_more'                => 'Pročitaj više',
    'posts_message_no_posts'              => 'Trenutno nema objava ovog korisnika.',
    'posts_message_no_posts_self'         => 'Još niste objavili niti jednu objavu.',

];
