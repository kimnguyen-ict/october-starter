<?php

return [
    'auth' => [
        'title' => 'Haldusliides'
    ],
    'field' => [
        'invalid_type' => 'Välja tüüpi :type pole olemas.',
        'options_method_invalid_model' => "Atribuut ':field' ei vasta ühelegi olemasolevale andmemudelile. Palun defineeri valikväärtuste funktioon :model andmemudelis.",
        'options_method_not_exists' => "Andmemudelis :model peab olema defineeritud funktsioon :method(), mis tagastab valikväärtused välja ':field' jaoks."
    ],
    'widget' => [
        'not_registered' => "Vidina klassinimi ':name' pole registreeritud",
        'not_bound' => "Vidin klassinimega ':name' pole seotud kontrolleriga"
    ],
    'page' => [
        'untitled' => 'Nimeta',
        'access_denied' => [
            'label' => 'Juurdepääs keelatud',
            'help' => "Sul pole vajalikke õiguseid, et seda lehte näha.",
            'cms_link' => 'Tagasi haldusliidesesse'
        ],
        'no_database' => [
            'label' => 'Andmebaas puudub',
            'help' => "Haldusliidese kasutamiseks peab olemas seadistatud andmebaas. Enne jätkamist palun kontrolli andmebaasi seadistust.",
            'cms_link' => 'Tagasi kodulehele'
        ],
        'invalid_token' => [
            'label' => 'Vigane turvamärk'
        ]
    ],
    'partial' => [
        'not_found_name' => "Koodiblokki ':name' ei leitud."
    ],
    'account' => [
        'sign_out' => 'Logi välja',
        'login' => 'Logi sisse',
        'reset' => 'Lähtesta',
        'restore' => 'Taasta',
        'login_placeholder' => 'logi sisse',
        'password_placeholder' => 'parool',
        'forgot_password' => 'Unustasid parooli?',
        'enter_email' => 'Sisesta oma e-post',
        'enter_login' => 'Sisesta oma kasutajanimi',
        'email_placeholder' => 'e-post',
        'enter_new_password' => 'Siseta uus parool',
        'password_reset' => 'Parooli lähtestamine',
        'restore_success' => 'Sinu e-posti aadressile saadeti kiri juhistega.',
        'restore_error' => "Sellist kasutajat ei ole süsteemis: ':login'",
        'reset_success' => 'Parool on lähtestatud, võid nüüd oma uue parooli sisse logida.',
        'reset_error' => 'Sisestasid parooli lähtestamiseks vigased andmed. Palun proovi uuesti!',
        'reset_fail' => 'Parooli lähtestamine ebaõnnestus!',
        'apply' => 'Rakenda',
        'cancel' => 'Loobu',
        'delete' => 'Kustuta',
        'ok' => 'OK'
    ],
    'dashboard' => [
        'menu_label' => 'Töölaud',
        'widget_label' => 'Vidin',
        'widget_width' => 'Laius',
        'full_width' => 'täislaius',
        'manage_widgets' => 'Halda vidinaid',
        'add_widget' => 'Lisa vidin',
        'widget_inspector_title' => 'Vidina seaded',
        'widget_inspector_description' => 'Seadista töölaua vidin',
        'widget_columns_label' => 'Laius :columns',
        'widget_columns_description' => 'Vidina laius ekraanil, vahemikus 1 kuni 10.',
        'widget_columns_error' => 'Vidina laius peab olema täisarv vahemikus 1-10.',
        'columns' => '{1} veerg|[2,Inf] veergu',
        'widget_new_row_label' => 'Näita uuel real',
        'widget_new_row_description' => 'Näita vidinat alati uuel real.',
        'widget_title_label' => 'Vidina nimi',
        'widget_title_error' => 'Vidina nimi on kohustuslik.',
        'reset_layout' => 'Lähtesta paigutus',
        'reset_layout_confirm' => 'Lähtesta vidinate paigutus vaikeseadele?',
        'reset_layout_success' => 'Vidinate paigutus on lähtestatud',
        'make_default' => 'Määra vaikeseadeks',
        'make_default_confirm' => 'Kas soovid määrata praeguse vidinate paigutuse vaikeseadeks?',
        'make_default_success' => 'Praegune paigutus on nüüd vaikeseade.',
        'collapse_all' => 'Peida kõik',
        'expand_all' => 'Näita kõiki',
        'status' => [
            'widget_title_default' => 'Süsteemi olek',
            'update_available' => '{0} uuendust saadval!|{1} uuendus saadaval!|[2,Inf] uuendust saadaval!',
            'updates_pending' => 'Ootel süsteemiuuendused',
            'updates_nil' => 'Süsteem on ajakohane',
            'updates_link' => 'Uuenda',
            'warnings_pending' => 'Mõned küsimused nõuavad tähelepanu',
            'warnings_nil' => 'Kõik on korras',
            'warnings_link' => 'Vaata',
            'core_build' => 'Süsteemi versioon',
            'event_log' => 'Sündmuste logi',
            'request_log' => 'Päringute logi',
            'app_birthday' => 'Süsteem on töös alates',
        ],
        'welcome' => [
            'widget_title_default' => 'Tere tulemast',
            'welcome_back_name' => ':app. Tere tulemast tagasi, :name.',
            'welcome_to_name' => ':app. Tere, :name.',
            'first_sign_in' => 'See on esimene kord kui oled sisse loginud.',
            'last_sign_in' => 'Sinu viimane sisselogimine oli',
            'view_access_logs' => 'Vaata juurdepääsu logi',
            'nice_message' => 'Kena päeva jätku!',
        ]
    ],
    'user' => [
        'name' => 'Administraator',
        'menu_label' => 'Administraatorid',
        'menu_description' => 'Muuda haldusliidese kasutajaid, õiguseid ja gruppe.',
        'list_title' => 'Halda administraatoreid',
        'new' => 'Uus administraator',
        'login' => 'Logi sisse',
        'first_name' => 'Eesnimi',
        'last_name' => 'Perenimi',
        'full_name' => 'Täisnimi',
        'email' => 'E-post',
        'groups' => 'Grupid',
        'groups_comment' => 'Määra millistesse gruppidesse kasutaja kuulub. Grupid määravad ära kasutaja juurdepääsu õigused, mida on võimalik eralid seadistada ka õiguste alt.',
        'avatar' => 'Avatar',
        'password' => 'Parool',
        'password_confirmation' => 'Korda parooli',
        'permissions' => 'Õigused',
        'account' => 'Konto',
        'superuser' => 'Ülemkasutaja',
        'superuser_comment' => 'Ülemkasutajal on juurdepääs kogu süsteemile. Samuti on õigus luua uusi kasutajakontosid. ',
        'send_invite' => 'Saada kutse e-postiga',
        'send_invite_comment' => 'Saadat tervituskiri, mis sisaldab ka sisse logimiseks vajalikku kasutajanime ja parooli.',
        'delete_confirm' => 'Kustuta administraator?',
        'return' => 'Tagasin nimekirja',
        'allow' => 'Luba',
        'inherit' => 'Päritud',
        'deny' => 'Keela',
        'activated' => 'Aktiveeritud',
        'last_login' => 'Viimane sisselogimine',
        'created_at' => 'Loodud',
        'updated_at' => 'Muudetud',
        'group' => [
            'name' => 'Grupp',
            'name_comment' => 'Grupi nime kuvatakse administraatori loomise ja muutmise vormides olevas gruppide nimekirjas.',
            'name_field' => 'Nimi',
            'description_field' => 'Kirjeldus',
            'is_new_user_default_field_label' => 'Vaikimisi grupp',
            'is_new_user_default_field_comment' => 'Uued kasutajad lisatakse automaatselt sellesse gruppi',
            'code_field' => 'Kood',
            'code_comment' => 'Unikaalne kood, mida kasutatakse süsteemisiseselt.',
            'menu_label' => 'Halda gruppe',
            'list_title' => 'Halda gruppe',
            'new' => 'Uus grupp',
            'delete_confirm' => 'Kusuta see grupp?',
            'return' => 'Tagasi nimekirja',
            'users_count' => 'Kasutajad'
        ],
        'preferences' => [
            'not_authenticated' => 'Puudub autoriseeritud kasutaja kellele seadeid laadida või salvestada.'
        ]
    ],
    'list' => [
        'default_title' => 'Nimekiri',
        'search_prompt' => 'Otsi...',
        'no_records' => 'Siin vaates pole ühtegi kirjet.',
        'missing_model' => 'Klassis :class ei ole nimekirjade jaoks defineeritud andmemudelit.',
        'missing_column' => ':columns jaoks puuduvad veergude definitsioonid.',
        'missing_columns' => 'Klassis :class kasutatud nimekirjal puudvad veergude definitsioonid.',
        'missing_definition' => "':field' jaoks puudub nimekirja veeru definitsioon.",
        'missing_parent_definition' => "Nimekirjal puudub definitsioon ':definition' kohta.",
        'behavior_not_ready' => 'Nimekirjade funktsionaalsus pole initsialiseeritud, vaata üle, et makeLists() oleks kontrolleris välja kutsutud.',
        'invalid_column_datetime' => "Veeru väärtus ':column' ei ole DateTime objekt. Võibolla on andmemudelis puudu \$dates muutuja viide?",
        'pagination' => 'Kuvatud kirjeid: :from-:to. Kokku: :total',
        'first_page' => 'Esimene leht',
        'last_page' => 'Viimane leht',
        'prev_page' => 'Eelmine leht',
        'next_page' => 'Järgmine leht',
        'refresh' => 'Laadi uuesti',
        'updating' => 'Uuendan...',
        'loading' => 'Laen...',
        'setup_title' => 'Nimekirja seadistus',
        'setup_help' => 'Vali veerud, mida soovid näha nimekirjas. Veergude järjestust saad muuta lohistades neid üles-alla.',
        'records_per_page' => 'Kirjeid lehel',
        'records_per_page_help' => 'Vali kirjete arv, mida soovid ühel lehel kuvada. NB! mida rohkem kirjeid lehel kuvatakse, seda kauem võtab aega lehe laadimine.',
        'check' => 'Vali',
        'delete_selected' => 'Kustuta valitud',
        'delete_selected_empty' => 'Ühtegi kirjet ei valitud.',
        'delete_selected_confirm' => 'Kustuta valitud kirjed?',
        'delete_selected_success' => 'Valitud kirjed on kustutatud.',
        'column_switch_true' => 'Jah',
        'column_switch_false' => 'Ei'
    ],
    'fileupload' => [
        'attachment' => 'Manus',
        'help' => 'Manuse nimi ja kirjeldus.',
        'title_label' => 'Nimi',
        'description_label' => 'Kirjeldus',
        'default_prompt' => 'Faili üleslaadimiseks kliki %s või lohista fail siia',
        'attachment_url' => 'Manuse URL',
        'upload_file' => 'Lae fail üles',
        'upload_error' => 'Üleslaadimisel tekkis viga',
        'remove_confirm' => 'Oled sa kindel?',
        'remove_file' => 'Eemalda fail'
    ],
    'form' => [
        'create_title' => 'Loomine: :name',
        'update_title' => 'Muutmine: :name',
        'preview_title' => 'Eelvaade: :name',
        'create_success' => ':name loodud',
        'update_success' => ':name muudetud',
        'delete_success' => ':name kustutatud',
        'reset_success' => 'Lähtestamine edukas',
        'missing_id' => 'Vormis puudus kirje ID.',
        'missing_model' => 'Klassis :class ei ole vormi jaoks defineeritud andmemudelit.',
        'missing_definition' => "Väli ':field' ei ole vormis defineeritud.",
        'not_found' => 'Kirjet ID-ga :id ei leitud.',
        'action_confirm' => 'Oled sa kindel?',
        'create' => 'Loo',
        'create_and_close' => 'Loo ja sulge',
        'creating' => 'Loon...',
        'creating_name' => 'Loon objekti :name...',
        'save' => 'Salvesta',
        'save_and_close' => 'Salvesta ja sulge',
        'saving' => 'Salvestan...',
        'saving_name' => 'Salvestan objekti :name...',
        'deleting' => 'Kustutan...',
        'delete' => 'Kustuta',
        'confirm_delete' => 'Kustuta kirje?',
        'confirm_delete_multiple' => 'Kustuta valitud kirjed?',
        'deleting_name' => 'Kustutan objekti :name...',
        'reset_default' => 'Lähtesta vaikeväärtus',
        'resetting' => 'Lähtestan',
        'resetting_name' => 'Lähtestan objekti :name',
        'undefined_tab' => 'Muu',
        'field_off' => 'Ei',
        'field_on' => 'Jah',
        'add' => 'Lisa',
        'apply' => 'Rakenda',
        'cancel' => 'Loobu',
        'close' => 'Sulge',
        'confirm' => 'Kinnita',
        'reload' => 'Lae uuesti',
        'complete' => 'Lõpeta',
        'ok' => 'OK',
        'or' => 'või',
        'confirm_tab_close' => 'Sulge vaheleht? Salvestamata muudatused lähevad kaduma.',
        'behavior_not_ready' => 'Vormi funktsionaalsus pole initsialiseeritud, vaata üle, et initForm() oleks kontrolleris välja kutsutud.',
        'preview_no_files_message' => 'Ühtegi faili pole üles laetud.',
        'preview_no_media_message' => 'Ühtegi meediafaili pole valitud.',
        'preview_no_record_message' => 'Ühtegi kirjet pole valitud.',
        'select' => 'Vali',
        'select_all' => 'kõik',
        'select_none' => 'mitte ükski',
        'select_placeholder' => 'palun vali',
        'insert_row' => 'Lisa rida',
        'insert_row_below' => 'Lisa rida alla',
        'delete_row' => 'Kustuta rida',
        'concurrency_file_changed_title' => 'Faili on muudetud',
        'concurrency_file_changed_description' => "Teine kasutaja on muutnud sama faili, mida sina praegu muudad. Võid faili uuesti laadida ja sellega kaotada oma muudatused või kirjutada üle teise kasutaja muudatused.",
        'return_to_list' => 'Tagasi nimekirja'
    ],
    'recordfinder' => [
        'find_record' => 'Leia kirje',
        'cancel' => 'Loobu',
    ],
    'pagelist' => [
        'page_link' => 'Lehe link',
        'select_page' => 'Vali leht...'
    ],
    'relation' => [
        'missing_config' => "':config' jaoks puuduvad seoste definitsioonid.",
        'missing_definition' => "Välja ':field' jaoks puudub seose definitsioon.",
        'missing_model' => 'Klassis :class ei ole seoste jaoks defineeritud andmemudelit.',
        'invalid_action_single' => 'Üks-ühele seosega ei saa seda tegevust sooritada.',
        'invalid_action_multi' => 'Mitu-mitmele seosega ei saa seda tegevust sooritada.',
        'help' => 'Lisamiseks kliki kirjel',
        'related_data' => 'Seotud objekti andmed: :name',
        'add' => 'Lisa',
        'add_selected' => 'Lisa valitud',
        'add_a_new' => 'Lisa uus :name',
        'link_selected' => 'Lisa valitud',
        'link_a_new' => 'Lisa uus :name',
        'cancel' => 'Loobu',
        'close' => 'Sulge',
        'add_name' => 'Lisa :name',
        'create' => 'Loo',
        'create_name' => 'Loo :name',
        'update' => 'Uuenda',
        'update_name' => 'Uuenda objekti :name',
        'preview' => 'Eelvaade',
        'preview_name' => 'Objekti :name eelvaade',
        'remove' => 'Eemalda',
        'remove_name' => 'Eemalda :name',
        'delete' => 'Kustuta',
        'delete_name' => 'Kustuta :name',
        'delete_confirm' => 'Oled sa kindel?',
        'link' => 'Lisa seos',
        'link_name' => 'Lisa :name',
        'unlink' => 'Eemalda',
        'unlink_name' => 'Eemalda :name',
        'unlink_confirm' => 'Oled sa kindel?'
    ],
    'reorder' => [
        'default_title' => 'Muuda järjestust',
        'no_records' => 'Ühtegi kirjet ei leitud.'
    ],
    'model' => [
        'name' => 'Andmemudel',
        'not_found' => "Andmemudelit ':class' ID-ga :id ei leitud",
        'missing_id' => 'Andmemudeli ID väärtus puudub.',
        'missing_relation' => "Andmemudelil ':class' puudub definitsioon seosele ':relation'.",
        'missing_method' => "Andmemudelil ':class' puudub funktsioon ':method'.",
        'invalid_class' => "Klassis :class kasutatud andmemudel :model ei ole korrektne. See peab olema päritud klassist \Model.",
        'mass_assignment_failed' => "Andmemudeli atribuudi ':attribute' väärtuste määramine ebaõnnestus."
    ],
    'warnings' => [
        'tips' => 'Näpunäited süsteemi seadistamiseks',
        'tips_description' => 'Süsteemi õigeks seadistamiseks on vaja meeles pidada paari olulist aspekti.',
        'permissions'  => 'PHP-l ei ole õigust kirjutada katallogi :name või selle alamkataloogidesse. Palun paranda kataloogide juurdepääsuõigused serveris.',
        'extension' => 'PHP laiendus :name ei ole paigaldatud. Süsteemi toimiseks on vajalik selle paigaldamine.',
        'plugin_missing' => 'Plugin :name on vajalik süsteemi toimimiseks, kuid seda pole paigaldatud. Palun paigalda see plugin.',
    ],
    'editor' => [
        'menu_label' => 'Tekstiredaktori seadistused',
        'menu_description' => 'Isikupärast kõikjal kasutatavaid redaktori seadeid, nagu teksti suurus ja värvivalik.',
        'font_size' => 'Teksti suurus',
        'tab_size' => 'Taande suurus',
        'use_hard_tabs' => 'Ära kasuta taandel tühikuid',
        'code_folding' => 'Koodi murdmine',
        'code_folding_begin' => 'Murdmise algus',
        'code_folding_begin_end' => 'Murdmise algus ja lõpp',
        'autocompletion' => 'Automaattäitmine',
        'word_wrap' => 'Sõnamurdmine',
        'highlight_active_line' => 'Tõsta aktiivne rida esile',
        'auto_closing' => 'Automaatselt sulge HTML tägid',
        'show_invisibles' => 'Näita peidetu märke',
        'show_gutter' => 'Näita jalust',
        'basic_autocompletion'=> 'Lihtne automaattäitmine (Ctrl + Space)',
        'live_autocompletion'=> 'Live automaattäitmine',
        'enable_snippets'=> 'Kasuta eeldefineeritud koodijuppe (Tab)',
        'display_indent_guides'=> 'Näide taande juhtjooni',
        'show_print_margin'=> 'Näita printimise juhtjooni',
        'mode_off' => 'Väljas',
        'mode_fluid' => 'Voolav',
        '40_characters' => '40 tähemärki',
        '80_characters' => '80 tähemärki',
        'theme' => 'Värvivalik',
        'markup_styles' => 'Markup stiilid',
        'custom_styles' => 'Kohandatud CSS',
        'custom styles_comment' => 'Kohandatud CSS reglid, mis lisada HTML redaktorile.',
        'markup_classes' => 'Markup klassid',
        'paragraph' => 'Lõik',
        'link' => 'Link',
        'table' => 'Tabel',
        'table_cell' => 'Tabeli lahter',
        'image' => 'Pilt',
        'label' => 'Silt',
        'class_name' => 'Klassi nimi',
        'markup_tags' => 'Markup tägid',
        'allowed_empty_tags' => 'Luba tühjad HTML tägid',
        'allowed_empty_tags_comment' => 'Nimekiri HTML tägidest, mida automaatselt ei eemaldata kui neis pole sisu.',
        'allowed_tags' => 'Lubatud HTML tägid',
        'allowed_tags_comment' => 'Nimekiri lubatud HTML tägidest.',
        'no_wrap' => 'HTML blokktägid',
        'no_wrap_comment' => 'Nimekiri HTML tägidest, mida ei ole automaatselt vaja panna blokktägide sisse.',
        'remove_tags' => 'Eemalda HTML tägid',
        'remove_tags_comment' => 'Nimekiri HTML tägidest, mis eemaldatakse automaatselt koos sisuga.'
    ],
    'tooltips' => [
        'preview_website' => 'Kodulehe eelvaade'
    ],
    'mysettings' => [
        'menu_label' => 'Minu seaded',
        'menu_description' => 'Sinu haldusliidese kontoga seonduvad seadistused'
    ],
    'myaccount' => [
        'menu_label' => 'Minu konto',
        'menu_description' => 'Muuda oma konto andmeid nagu nimi, e-posti aadress ja parool.',
        'menu_keywords' => 'parool konto turva sala'
    ],
    'branding' => [
        'menu_label' => 'Isikupärasta haldusliidest',
        'menu_description' => 'Muuda haldusliidese välimust (nt nimi, värvid, logo)',
        'brand' => 'Bränd',
        'logo' => 'Logo',
        'logo_description' => 'Lae üles logo, mida kasutada haldusliideses.',
        'app_name' => 'Haldusliidese nimi',
        'app_name_description' => 'Seda nime kuvatakse haldusliidese päises.',
        'app_tagline' => 'Tervitustekst',
        'app_tagline_description' => 'Seda teksti kuvatakse haldusliidesesse sisselogimisel.',
        'colors' => 'Värvid',
        'primary_color' => 'Peamine värv',
        'secondary_color' => 'Teine color',
        'accent_color' => 'Aktsendi color',
        'styles' => 'Stiilid',
        'custom_stylesheet' => 'Kohandatud CSS',
        'navigation' => 'Navigatsioon',
        'menu_mode' => 'Menüü stiil',
        'menu_mode_inline' => 'Järjekorras',
        'menu_mode_tile' => 'Kastid',
        'menu_mode_collapsed' => 'Minimaalne'
    ],
    'backend_preferences' => [
        'menu_label' => 'Haldusliidese seaded',
        'menu_description' => 'Muuda oma haldusliidese seadeid nagu keel jm.',
        'region' => 'Regioon',
        'code_editor' => 'Koodi redaktor',
        'timezone' => 'Ajatsoon',
        'timezone_comment' => 'Kuva kõiki kuupäevi selles ajatsoonis.',
        'locale' => 'Keel',
        'locale_comment' => 'Vali haldusliidese keel.'
    ],
    'access_log' => [
        'hint' => 'See logi sisaldab kõiki edukaid sisselogimisi haldusliidesesse. Andmeid hoitakse maksimaalselt :days päeva.',
        'menu_label' => 'Juurdepääsu logi',
        'menu_description' => 'Näita kõiki õnnestunud sisselogimisi.',
        'created_at' => 'Kuupäev',
        'login' => 'Kasutjanimi',
        'ip_address' => 'IP aaddress',
        'first_name' => 'Eesnimi',
        'last_name' => 'Perenimi',
        'email' => 'E-post'
    ],
    'filter' => [
        'all' => 'kõik',
        'options_method_not_exists' => "Andmemudelis :model peab olema defineeritud functioon :method(), mis tagastab valikud filtrile ':filter'.",
        'date_all' => 'kõik perioodid'
    ],
    'import_export' => [
        'upload_csv_file' => '1. Lae üles CSV fail',
        'import_file' => 'Impordi fail',
        'first_row_contains_titles' => 'Esimene rida sisaldab veerupäiseid',
        'first_row_contains_titles_desc' => 'Märgi see kast kui üleslaetavas CSV failis on esimesel real veergude nimed.',
        'match_columns' => '2. Ühenda failis olevad veerud andmebaasi väljadega',
        'file_columns' => 'Faili veerud',
        'database_fields' => 'Andmebaasi väljad',
        'set_import_options' => '3. Määra impordi valikud',
        'export_output_format' => '1. Ekspordi väljundi formaat',
        'file_format' => 'Failiformaat',
        'standard_format' => 'Tavaline',
        'custom_format' => 'Kohandatud',
        'delimiter_char' => 'Veergude eraldaja',
        'enclosure_char' => 'Veerud on ümbritsetud',
        'escape_char' => 'Paomärk',
        'select_columns' => '2. Vali veerud, mida eksportida',
        'column' => 'Veerg',
        'columns' => 'Veerud',
        'set_export_options' => '3. Määra ekspordi valikud',
        'show_ignored_columns' => 'Näita väljajätetud veergusid',
        'auto_match_columns' => 'Ühenda andmed automaatselt',
        'created' => 'Loodud',
        'updated' => 'Uuendatud',
        'skipped' => 'Vahelejäetud',
        'warnings' => 'Hoiatusi',
        'errors' => 'Vigu',
        'skipped_rows' => 'Vahelejäetud read',
        'import_progress' => 'Impordi progress',
        'processing' => 'Töötlen',
        'import_error' => 'Impordi viga',
        'upload_valid_csv' => 'Palun lae üles korrektne CSV fail.',
        'drop_column_here' => 'Lohista veerg siia...',
        'ignore_this_column' => 'Jäta see veerg vahele',
        'processing_successful_line1' => 'Faili loomise protsess lõpetatud!',
        'processing_successful_line2' => 'Veebilehitseja suunab kohe edasi faili allalaadimisele.',
        'export_progress' => 'Ekspordi progress',
        'export_error' => 'Ekspordi viga',
        'column_preview' => 'Veeru eelvaade',
        'file_not_found_error' => 'Faili ei leitud',
        'empty_error' => 'Eksportimiseks ei leitud andmeid',
        'empty_import_columns_error' => 'Impordiks peab valima vähemalt ühe veeru.',
        'match_some_column_error' => 'Palun seo mõni veerg andmebaasi väljaga.',
        'required_match_column_error' => 'Kohustuslik väli :label peab olema seotud.',
        'empty_export_columns_error' => 'Ekspordiks peab valima vähemalt ühe veeru.',
        'behavior_missing_uselist_error' => 'Kontrolleris peab olema kasutusel nimekirjade funktsionaalsus ning peab olema määratud "useList" valik.',
        'missing_model_class_error' => 'Palun määra andmemudeli klassi atribuudi tüüp: :type',
        'missing_column_id_error' => 'Puudu veeru ID',
        'unknown_column_error' => 'Tundmatu veerg',
        'encoding_not_supported_error' => 'Lähtefaili kodeering ei ole tuvastatav. Importimiseks määra kodeering kohandatud impordi seadete alt.',
        'encoding_format' => 'Faili kodeering',
        'encodings' => [
            'utf_8' => 'UTF-8',
            'us_ascii' => 'US-ASCII',
            'iso_8859_1' => 'ISO-8859-1 (Latin-1, Western European)',
            'iso_8859_2' => 'ISO-8859-2 (Latin-2, Central European)',
            'iso_8859_3' => 'ISO-8859-3 (Latin-3, South European)',
            'iso_8859_4' => 'ISO-8859-4 (Latin-4, North European)',
            'iso_8859_5' => 'ISO-8859-5 (Latin, Cyrillic)',
            'iso_8859_6' => 'ISO-8859-6 (Latin, Arabic)',
            'iso_8859_7' => 'ISO-8859-7 (Latin, Greek)',
            'iso_8859_8' => 'ISO-8859-8 (Latin, Hebrew)',
            'iso_8859_0' => 'ISO-8859-9 (Latin-5, Turkish)',
            'iso_8859_10' => 'ISO-8859-10 (Latin-6, Nordic)',
            'iso_8859_11' => 'ISO-8859-11 (Latin, Thai)',
            'iso_8859_13' => 'ISO-8859-13 (Latin-7, Baltic Rim)',
            'iso_8859_14' => 'ISO-8859-14 (Latin-8, Celtic)',
            'iso_8859_15' => 'ISO-8859-15 (Latin-9, Western European revision with euro sign)',
            'windows_1251' => 'Windows-1251 (CP1251)',
            'windows_1252' => 'Windows-1252 (CP1252)'
        ]
    ]
];
