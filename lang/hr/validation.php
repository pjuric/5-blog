<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Validation Language Lines
    |--------------------------------------------------------------------------
    |
    | The following language lines contain the default error messages used by
    | the validator class. Some of these rules have multiple versions such
    | as the size rules. Feel free to tweak each of these messages here.
    |
    */

    'accepted'             => 'Polje :attribute mora biti prihvaćeno.',
    'accepted_if'          => 'Polje :attribute mora biti prihvaćeno kada je :other :value.',
    'active_url'           => 'Polje :attribute mora biti valjani URL.',
    'after'                => 'Polje :attribute mora biti datum nakon :date.',
    'after_or_equal'       => 'Polje :attribute mora biti datum nakon ili jednak :date.',
    'alpha'                => 'Polje :attribute mora sadržavati samo slova.',
    'alpha_dash'           => 'Polje :attribute može sadržavati samo slova, brojeve, crte i donje crte.',
    'alpha_num'            => 'Polje :attribute može sadržavati samo slova i brojeve.',
    'array'                => 'Polje :attribute mora biti niz.',
    'ascii'                => 'Polje :attribute može sadržavati samo jednobajtna alfanumerička slova i simbole.',
    'before'               => 'Polje :attribute mora biti datum prije :date.',
    'before_or_equal'      => 'Polje :attribute mora biti datum prije ili jednak :date.',
    'boolean'              => 'Polje :attribute mora biti true ili false.',
    'can'                  => 'Polje :attribute sadrži neovlaštenu vrijednost.',
    'confirmed'            => 'Potvrda polja :attribute ne odgovara.',
    'current_password'     => 'Lozinka je netočna.',
    'date'                 => 'Polje :attribute mora biti valjani datum.',
    'date_equals'          => 'Polje :attribute mora biti datum jednak :date.',
    'date_format'          => 'Polje :attribute mora odgovarati formatu :format.',
    'decimal'              => 'Polje :attribute mora imati :decimal decimalna mjesta.',
    'declined'             => 'Polje :attribute mora biti odbijeno.',
    'declined_if'          => 'Polje :attribute mora biti odbijeno kada je :other :value.',
    'different'            => 'Polje :attribute i :other moraju biti različiti.',
    'digits'               => 'Polje :attribute mora imati :digits znamenki.',
    'digits_between'       => 'Polje :attribute mora imati između :min i :max znamenki.',
    'dimensions'           => 'Polje :attribute ima nevaljane dimenzije slike.',
    'distinct'             => 'Polje :attribute ima duplu vrijednost.',
    'doesnt_end_with'      => 'Polje :attribute ne smije završavati s jednim od sljedećeg: :values.',
    'doesnt_start_with'    => 'Polje :attribute ne smije počinjati s jednim od sljedećeg: :values.',
    'email'                => 'Polje :attribute mora biti valjana e-mail adresa.',
    'ends_with'            => 'Polje :attribute mora završiti s jednim od sljedećeg: :values.',
    'enum'                 => 'Odabrani :attribute je nevažeći.',
    'exists'               => 'Odabrani :attribute je nevažeći.',
    'extensions'           => 'Polje :attribute mora imati jednu od sljedećih ekstenzija: :values.',
    'file'                 => 'Polje :attribute mora biti datoteka.',
    'filled'               => 'Polje :attribute mora imati vrijednost.',
    'hex_color'            => 'Polje :attribute mora biti valjana heksadecimalna boja.',
    'image'                => 'Polje :attribute mora biti slika.',
    'in'                   => 'Odabrani :attribute je nevažeći.',
    'in_array'             => 'Polje :attribute mora postojati u :other.',
    'integer'              => 'Polje :attribute mora biti cijeli broj.',
    'ip'                   => 'Polje :attribute mora biti valjana IP adresa.',
    'ipv4'                 => 'Polje :attribute mora biti valjana IPv4 adresa.',
    'ipv6'                 => 'Polje :attribute mora biti valjana IPv6 adresa.',
    'json'                 => 'Polje :attribute mora biti valjan JSON string.',
    'list'                 => 'Polje :attribute mora biti lista.',
    'lowercase'            => 'Polje :attribute mora biti malim slovima.',
    'mac_address'          => 'Polje :attribute mora biti valjana MAC adresa.',
    'max_digits'           => 'Polje :attribute ne smije imati više od :max znamenki.',
    'mimes'                => 'Polje :attribute mora biti datoteka tipa: :values.',
    'mimetypes'            => 'Polje :attribute mora biti datoteka tipa: :values.',
    'min_digits'           => 'Polje :attribute mora imati barem :min znamenki.',
    'missing'              => 'Polje :attribute mora biti nedostajuće.',
    'missing_if'           => 'Polje :attribute mora biti nedostajuće kada je :other :value.',
    'missing_unless'       => 'Polje :attribute mora biti nedostajuće osim ako :other nije :value.',
    'missing_with'         => 'Polje :attribute mora biti nedostajuće kada je :values prisutan.',
    'missing_with_all'     => 'Polje :attribute mora biti nedostajuće kada su prisutni :values.',
    'multiple_of'          => 'Polje :attribute mora biti višekratnik od :value.',
    'not_in'               => 'Odabrani :attribute je nevažeći.',
    'not_regex'            => 'Format polja :attribute nije valjan.',
    'numeric'              => 'Polje :attribute mora biti broj.',
    'present'              => 'Polje :attribute mora biti prisutno.',
    'present_if'           => 'Polje :attribute mora biti prisutno kada je :other :value.',
    'present_unless'       => 'Polje :attribute mora biti prisutno osim ako :other nije :value.',
    'present_with'         => 'Polje :attribute mora biti prisutno kada je :values prisutno.',
    'present_with_all'     => 'Polje :attribute mora biti prisutno kada su prisutni :values.',
    'prohibited'           => 'Polje :attribute je zabranjeno.',
    'prohibited_if'        => 'Polje :attribute je zabranjeno kada je :other :value.',
    'prohibited_unless'    => 'Polje :attribute je zabranjeno osim ako :other nije u :values.',
    'prohibits'            => 'Polje :attribute zabranjuje prisutnost :other.',
    'regex'                => 'Format polja :attribute nije valjan.',
    'required'             => 'Polje :attribute je obavezno.',
    'required_array_keys'  => 'Polje :attribute mora sadržavati unose za: :values.',
    'required_if'          => 'Polje :attribute je obavezno kada je :other :value.',
    'required_if_accepted' => 'Polje :attribute je obavezno kada je :other prihvaćen.',
    'required_if_declined' => 'Polje :attribute je obavezno kada je :other odbijen.',
    'required_unless'      => 'Polje :attribute je obavezno osim ako :other nije u :values.',
    'required_with'        => 'Polje :attribute je obavezno kada je prisutan :values.',
    'required_with_all'    => 'Polje :attribute je obavezno kada su prisutni :values.',
    'required_without'     => 'Polje :attribute je obavezno kada :values nije prisutan.',
    'required_without_all' => 'Polje :attribute je obavezno kada nijedan od :values nije prisutan.',
    'same'                 => 'Polje :attribute mora se podudarati s :other.',
    'starts_with'          => 'Polje :attribute mora početi s jednim od sljedećeg: :values.',
    'string'               => 'Polje :attribute mora biti string.',
    'timezone'             => 'Polje :attribute mora biti valjana vremenska zona.',
    'unique'               => ':attribute već postoji.',
    'uploaded'             => 'Neuspjelo učitavanje :attribute.',
    'uppercase'            => 'Polje :attribute mora biti velikim slovima.',
    'url'                  => 'Polje :attribute mora biti valjani URL.',
    'ulid'                 => 'Polje :attribute mora biti valjan ULID.',
    'uuid'                 => 'Polje :attribute mora biti valjan UUID.',

    /*
    |--------------------------------------------------------------------------
    | Nested Validation Language Lines
    |--------------------------------------------------------------------------
    |
    | Nested validation language lines are separated from one-liners for better
    | readability and localization structure
    |
    */

    'between' => [
        'array'   => 'Polje :attribute mora imati između :min i :max stavki.',
        'file'    => 'Polje :attribute mora biti između :min i :max kilobajta.',
        'numeric' => 'Polje :attribute mora biti između :min i :max.',
        'string'  => 'Polje :attribute mora biti između :min i :max znakova.',
    ],
    'gt' => [
        'array'   => 'Polje :attribute mora imati više od :value stavki.',
        'file'    => 'Polje :attribute mora biti veće od :value kilobajta.',
        'numeric' => 'Polje :attribute mora biti veće od :value.',
        'string'  => 'Polje :attribute mora biti duže od :value znakova.',
    ],
    'gte' => [
        'array'   => 'Polje :attribute mora imati :value stavki ili više.',
        'file'    => 'Polje :attribute mora biti veće od ili jednako :value kilobajta.',
        'numeric' => 'Polje :attribute mora biti veće od ili jednako :value.',
        'string'  => 'Polje :attribute mora biti veće od ili jednako :value znakova.',
    ],
    'lt' => [
        'array'   => 'Polje :attribute mora imati manje od :value stavki.',
        'file'    => 'Polje :attribute mora biti manje od :value kilobajta.',
        'numeric' => 'Polje :attribute mora biti manje od :value.',
        'string'  => 'Polje :attribute mora biti kraće od :value znakova.',
    ],
    'lte' => [
        'array'   => 'Polje :attribute ne smije imati više od :value stavki.',
        'file'    => 'Polje :attribute mora biti manje od ili jednako :value kilobajta.',
        'numeric' => 'Polje :attribute mora biti manje od ili jednako :value.',
        'string'  => 'Polje :attribute mora biti manje od ili jednako :value znakova.',
    ],
    'max' => [
        'array'   => 'Polje :attribute ne smije imati više od :max stavki.',
        'file'    => 'Polje :attribute ne smije biti veće od :max kilobajta.',
        'numeric' => 'Polje :attribute ne smije biti veće od :max.',
        'string'  => 'Polje :attribute ne smije biti duže od :max znakova.',
    ],
    'min' => [
        'array'   => 'Polje :attribute mora imati barem :min stavki.',
        'file'    => 'Polje :attribute mora biti najmanje :min kilobajta.',
        'numeric' => 'Polje :attribute mora biti najmanje :min.',
        'string'  => 'Polje :attribute mora biti najmanje :min znakova.',
    ],
    'size' => [
        'array'   => 'Polje :attribute mora sadržavati :size stavki.',
        'file'    => 'Polje :attribute mora biti :size kilobajta.',
        'numeric' => 'Polje :attribute mora biti :size.',
        'string'  => 'Polje :attribute mora biti :size znakova.',
    ],
    'password' => [
        'letters'       => 'Polje :attribute mora sadržavati barem jedno slovo.',
        'mixed'         => 'Polje :attribute mora sadržavati barem jedno veliko i jedno malo slovo.',
        'numbers'       => 'Polje :attribute mora sadržavati barem jedan broj.',
        'symbols'       => 'Polje :attribute mora sadržavati barem jedan simbol.',
        'uncompromised' => 'Dano :attribute se pojavilo u curenju podataka. Molimo odaberite drugo :attribute.',
    ],

    /*
    |--------------------------------------------------------------------------
    | Custom Validation Language Lines
    |--------------------------------------------------------------------------
    |
    | Here you may specify custom validation messages for attributes using the
    | convention "attribute.rule" to name the lines. This makes it quick to
    | specify a specific custom language line for a given attribute rule.
    |
    */

    'custom' => [
        'attribute-name' => [
            'rule-name' => 'custom-message',
        ],
    ],

    /*
    |--------------------------------------------------------------------------
    | Custom Validation Attributes
    |--------------------------------------------------------------------------
    |
    | The following language lines are used to swap our attribute placeholder
    | with something more reader friendly such as "E-Mail Address" instead
    | of "email". This simply helps us make our message more expressive.
    |
    */

    'attributes' => [],

];

