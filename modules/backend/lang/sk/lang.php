<?php

return [
    'auth' => [
        'title' => 'Administrácia',
        'invalid_login' => 'Údaje, ktoré ste zadali sú nesprávne. Prosím skontrolujte údaje a skúste to znova.'
    ],
    'field' => [
        'invalid_type' => 'Bol použitý zlý typ :type.',
        'options_method_invalid_model' => "Vlastnosť ':field' nezodpovedá platnému modelu. Skúste špecifikovať metódu možností pre triedu modelu :model explicitne.",
        'options_method_not_exists' => "Trieda modelu :model musí implementovať metódu :method(), ktorá vracia možností pre formulárové pole ':field'."
    ],
    'widget' => [
        'not_registered' => "Trieda widgetu s menom ':name' nie je zaregistrovaná",
        'not_bound' => "Widget s názvom triedy ':name' nie je naviazaný na controller"
    ],
    'page' => [
        'untitled' => 'Bez názvu',
        '404' => [
            'label'     => 'Stránka nenájdená',
            'help'      => "Hľadali sme a hľadali, ale požadovanú adresu URL jednoducho nebolo možné nájsť. Možno ste hľadali niečo iné?",
            'back_link' => 'Späť na predchodzú stránku',
        ],
        'access_denied' => [
            'label' => 'Prístup odmietnutý',
            'help' => "Nemáte potrebné oprávnenia na zobrazenie tejto stránky.",
            'cms_link' => 'Späť do administrácie'
        ],
        'no_database' => [
            'label' => 'Chýba databáza',
            'help' => "Pre prístup do administrácie je potrebná databáza. Zkontrolujte, či je databáza nakonfigurovaná a zmigrovaná a skúste to znova.",
            'cms_link' => 'Späť na úvodnú stránku'
        ],
    ],
    'partial' => [
        'not_found_name' => "Čiastočná šablona ':name' nebola nájdená."
    ],
    'account' => [
        'signed_in_as' => 'Prihlásený ako :full_name',
        'sign_out' => 'Odhlásiť',
        'login' => 'Prihlásiť sa',
        'reset' => 'Resetovať',
        'restore' => 'Obnoviť',
        'login_placeholder' => 'prihlasovacie meno',
        'password_placeholder' => 'heslo',
        'remember_me' => 'Ostať prihlásený',
        'forgot_password' => 'Zabudli ste heslo?',
        'enter_email' => 'Zadajte váš email',
        'enter_login' => 'Zadajte vaše prihlasovacie meno',
        'email_placeholder' => 'email',
        'enter_new_password' => 'Zadajte nové heslo',
        'password_reset' => 'Obnova hesla',
        'restore_success' => 'E-mail s inštrukciami bol zaslaný na vašu e-mailovú adresu.',
        'restore_error' => "Užívateľ s prihlasovacím menom ':login' nebol nájdený",
        'reset_success' => 'Vaše heslo bolo úspešne obnovené. Teraz sa môžete prihlásiť.',
        'reset_error' => 'Dáta pre obnovu hesla nie sú správne. Prosím skúste to znova!',
        'reset_fail' => 'Obnova hesla zlyhala!',
        'apply' => 'Použiť',
        'cancel' => 'Zrušiť',
        'delete' => 'Zmazať',
        'ok' => 'OK'
    ],
    'dashboard' => [
        'menu_label' => 'Hlavný panel',
        'widget_label' => 'Widget',
        'widget_width' => 'Šírka',
        'full_width' => 'plná šírka',
        'manage_widgets' => 'Správa widgetov',
        'add_widget' => 'Pridať widget',
        'widget_inspector_title' => 'Nastavenie widgetu',
        'widget_inspector_description' => 'Tu si upravte všetky nastavenia widgetu',
        'widget_columns_label' => 'Šírka :columns',
        'widget_columns_description' => 'Šírka widgetu, číslo medzi 1 a 10.',
        'widget_columns_error' => 'Zadajte prosím šírku widgetu ako číslo medzi 1 a 10.',
        'columns' => '{1} stĺpec|[2,4] stĺpce|[5,Inf] stĺpcov',
        'widget_new_row_label' => 'Vždy na novom riadku',
        'widget_new_row_description' => 'Umiestniť widget do nového riadku.',
        'widget_title_label' => 'Názov widgetu',
        'widget_title_error' => 'Musíte zadať názov widgetu.',
        'reset_layout' => 'Obnoviť pôvodné usporiadanie',
        'reset_layout_confirm' => 'Naozaj obnoviť pôvodné usporiadanie?',
        'reset_layout_success' => 'Pôvodné usporiadanie bolo obnovené',
        'make_default' => 'Nastaviť ako predvolené',
        'make_default_confirm' => 'Nastaviť aktuálne usporiadanie ako predvolené?',
        'make_default_success' => 'Aktuálne usporiadanie je teraz nastavené ako predvolené',
        'collapse_all' => 'Zbaliť všetko',
        'expand_all' => 'Rozbaliť všetko',
        'status' => [
            'widget_title_default' => 'Stav systému',
            'update_available' => '{0} dostupných aktualizácií!|{1} dostupná aktualizácia!|[2,4] dostupné aktualizácie!|[4,Inf] dostupných aktualizácií!',
            'updates_pending' => 'Sú dostupné aktualizácie softwaru',
            'updates_nil' => 'Software je aktuálny',
            'updates_link' => 'Aktualizovať',
            'warnings_pending' => 'Niektoré problémy vyžadujú pozornosť',
            'warnings_nil' => 'Žiadne varovania na zobrazenie',
            'warnings_link' => 'Zobraziť',
            'core_build' => 'Verzia systému',
            'event_log' => 'Záznam udalostí',
            'request_log' => 'Záznam požiadavkov',
            'app_birthday' => 'Online od',
        ],
        'welcome' => [
            'widget_title_default' => 'Vitajte',
            'welcome_back_name' => 'Vitajte späť na :app, :name.',
            'welcome_to_name' => 'Vitajte na :app, :name.',
            'first_sign_in' => 'Toto je vaše prvé prihlásenie.',
            'last_sign_in' => 'Vaše posledné prihlásenie bolo',
            'view_access_logs' => 'Zobraziť záznam prihlásení',
            'nice_message' => 'Pekný deň!',
        ]
    ],
    'user' => [
        'name' => 'Administrátor',
        'menu_label' => 'Administrátori',
        'menu_description' => 'Správa administrátorov, skupín a oprávnení.',
        'list_title' => 'Spríva administrátorov',
        'new' => 'Nový administrátor',
        'login' => 'Prihlasovacie meno',
        'first_name' => 'Krstné meno',
        'last_name' => 'Priezvisko',
        'full_name' => 'Celé meno',
        'email' => 'E-mail',
        'role_field' => 'Rola',
        'role_comment' => 'Role definujú užívateľské oprávnenia, ktoré môžu byť prepísané na užívateľskej úrovni, na karte Oprávnení.',
        'groups' => 'Skupiny',
        'groups_comment' => 'Vyberto do akých skupín tento účet patrí.',
        'avatar' => 'Avatar',
        'password' => 'Heslo',
        'password_confirmation' => 'Potvrdiť heslo',
        'permissions' => 'Oprávnenia',
        'account' => 'Účet',
        'superuser' => 'Super užívateľ',
        'superuser_comment' => 'Umožňuje tomuto účtu neomedzený prístup do všetkých častí systému. Super užívatelia môžu pridávať a spravovať ostatných užívateľov.',
        'send_invite' => 'Poslať pozvánku e-mailom.',
        'send_invite_comment' => 'Pošle uvítací e-mail s prihlasovacími údajmi.',
        'delete_confirm' => 'Skutočne zmazať tohto administrátora?',
        'return' => 'Späť na zoznam adminitrátorov',
        'allow' => 'Povoliť',
        'inherit' => 'Zdediť',
        'deny' => 'Zakázať',
        'activated' => 'Aktivovaný',
        'last_login' => 'Posledné prihlásenie',
        'created_at' => 'Vytvorený',
        'updated_at' => 'Aktualizovaný',
        'group' => [
            'name' => 'Skupina',
            'name_field' => 'Meno',
            'name_comment' => 'Meno je zobrazené v zozname skupín na formulári administrátora.',
            'description_field' => 'Popis',
            'is_new_user_default_field_label' => 'Predvolená skupina',
            'is_new_user_default_field_comment' => 'Automaticky zaradiť nových administrátorov do tejto skupiny',
            'code_field' => 'Kód',
            'code_comment' => 'Zadajte unikátny kód pre prístup cez API k objektu skupiny.',
            'menu_label' => 'Skupiny',
            'list_title' => 'Správa skupín',
            'new' => 'Nová skupina',
            'delete_confirm' => 'Skutočne zmazať túto skupinu administrátorov?',
            'return' => 'Späť na zoznam skupín',
            'users_count' => 'Užívateľov'
        ],
        'role' => [
            'name' => 'Rola',
            'name_field' => 'Meno',
            'name_comment' => 'Meno je zobrazené v zozname rolí na formulári administrátora.',
            'description_field' => 'Popis',
            'code_field' => 'Kód',
            'code_comment' => 'Zadajte unikátny kód pre prístup cez API k objektu role.',
            'menu_label' => 'Role',
            'list_title' => 'Správa rolí',
            'new' => 'Nová rola',
            'delete_confirm' => 'Skutočne znazať túto rolu?',
            'return' => 'Späť na zoznam rolí',
            'users_count' => 'Užívatelia'
        ],
        'preferences' => [
            'not_authenticated' => 'Nebol nájdený žiadny prihlásený užívateľ pre načítanie alebo uloženie nastavení.'
        ]
    ],
    'list' => [
        'default_title' => 'Zoznam',
        'search_prompt' => 'Hľadať...',
        'no_records' => 'Žiadne záznamy na zobrazenie.',
        'missing_model' => 'Správanie zoznamu použité v :class nemá definovaný model.',
        'missing_column' => 'Neexistujú žiadne definície stĺpcov pre :columns.',
        'missing_columns' => 'Zoznam použitý v :class nemá definované žiadne stĺpce.',
        'missing_definition' => "Správanie zoznamu neobsahuje stĺpec pre ':field'.",
        'missing_parent_definition' => "Správanie zoznamu neobsahuje definíciu pre ':definition'.",
        'behavior_not_ready' => 'Správanie zoznamu nebolo inicializovanéd, skontrolujte, či ste zavolali metódu makeLists() vo svojom kontroleri.',
        'invalid_column_datetime' => "Hodnotu stĺpca ':column' nie je objekt typu DateTime, nechýba vám referencia \$dates v modeli?",
        'pagination' => 'Zobrazené záznamy: :from-:to z :total',
        'first_page' => 'Prvá stránka',
        'last_page' => 'Posledná stránka',
        'prev_page' => 'Predchádzajúca stránka',
        'next_page' => 'Nasledujúca stránka',
        'refresh' => 'Obnoviť',
        'updating' => 'Aktualizujem...',
        'loading' => 'Načítavam...',
        'setup_title' => 'Nastavenie zoznamu',
        'setup_help' => 'Pomocou checkboxov vyberte , ktoré stĺpce majú byť v zozname viditeľné. Môžete zmeniť pozíciu stĺpcov chytením a posunom hore alebo dole.',
        'records_per_page' => 'Záznamov na stránku',
        'records_per_page_help' => 'Vyberte koľko záznamov chcete vidieť na jednej stránke. Vysoký počet záznamov môže negatívne ovplyvniť rýchlosť stránok.',
        'check' => 'Zaškrtnúť',
        'delete_selected' => 'Zmazať vybrané',
        'delete_selected_empty' => 'Neboli vybrané žiadne záznamy na zmazanie.',
        'delete_selected_confirm' => 'Skutočne chcete zmazať vybrané záznamy?',
        'delete_selected_success' => 'Vybrané záznamy boli zmazané.',
        'column_switch_true' => 'Áno',
        'column_switch_false' => 'Nie'
    ],
    'fileupload' => [
        'attachment' => 'Príloha',
        'help' => 'Pridať názov a popis pre túto prílohu.',
        'title_label' => 'Názov',
        'description_label' => 'Popis',
        'default_prompt' => 'Kliknutím na %s alebo potiahnutím na toto miesto môžete súbor nahrať',
        'attachment_url' => 'URL prílohy',
        'upload_file' => 'Nahrať súbor',
        'upload_error' => 'Chyba nahrávanie',
        'remove_confirm' => 'Ste si istý?',
        'remove_file' => 'Odstrániť súbor'
    ],
    'form' => [
        'create_title' => 'Nový :name',
        'update_title' => 'Upraviť :name',
        'preview_title' => 'Náhľad :name',
        'create_success' => ':name bol vytvorený',
        'update_success' => ':name bol upravený',
        'delete_success' => ':name bol zmazaný',
        'reset_success' => 'Úspešne obnovené',
        'missing_id' => 'Musíte uviesť ID záznamu.',
        'missing_model' => 'Správanie formulára použité v :class nemá definovaný model.',
        'missing_definition' => "Správanie formulára neobsahuje pole pre ':field'.",
        'not_found' => 'Záznam formulíára s ID :id nebol nájdený.',
        'action_confirm' => 'Ste si istý?',
        'create' => 'Vytvoriť',
        'create_and_close' => 'Vytvoriť a zavrieť',
        'creating' => 'Vytváranie...',
        'creating_name' => 'Vytváranie :name...',
        'save' => 'Uložiť',
        'save_and_close' => 'Uložiť a zatvoriť',
        'saving' => 'Ukladanie...',
        'saving_name' => 'Ukladanie :name...',
        'delete' => 'Zmazať',
        'deleting' => 'Mazanie...',
        'confirm_delete' => 'Zmazať záznam?',
        'confirm_delete_multiple' => 'SKutočne zmazať vybrané záznamy?',
        'deleting_name' => 'Mazanie :name...',
        'reset_default' => 'Obnoviť predvolené',
        'resetting' => 'Obnova',
        'resetting_name' => 'Obnova :name',
        'undefined_tab' => 'Ostatné',
        'field_off' => 'Vyp',
        'field_on' => 'Zap',
        'add' => 'Pridať',
        'apply' => 'Použiť',
        'cancel' => 'Zrušiť',
        'close' => 'Zavrieť',
        'confirm' => 'Potvrdiť',
        'reload' => 'Znovu načítať',
        'complete' => 'Kompletné',
        'ok' => 'OK',
        'or' => 'alebo',
        'confirm_tab_close' => 'Skutočne zavrieť kartu? Neuložené zmeny budú stratené.',
        'behavior_not_ready' => 'Správanie formulára nebolo inicializované, skontrolujte či voláte funkciu initForm() vo svojom kontroleri.',
        'preview_no_files_message' => 'Žiadny súbor nebol nahraný.',
        'preview_no_media_message' => 'Žiadne médium nebolo vybrané.',
        'preview_no_record_message' => 'Žiadny záznam nie je vybraný',
        'select' => 'Vybrať',
        'select_all' => 'vybrať všetko',
        'select_none' => 'nevyber nič',
        'select_placeholder' => 'prosím vyberte',
        'insert_row' => 'Vložiť riadok',
        'insert_row_below' => 'Vložiť riadok pod',
        'delete_row' => 'Zmazať riadok',
        'concurrency_file_changed_title' => 'Súbor bol zmenený',
        'concurrency_file_changed_description' => "Súbor, ktorý upravujete bol na disku zmenený iným užívateľom. Môžete buď znovu načítať súbor a stratiť zmeny alebo prepísať súbor na disku.",
        'return_to_list' => 'Spať na zoznam'
    ],
    'recordfinder' => [
        'find_record' => 'Nájsť záznam',
        'cancel' => 'Zrušiť',
    ],
    'pagelist' => [
        'page_link' => 'Odkaz na stránku',
        'select_page' => 'Vyberte stránku...'
    ],
    'relation' => [
        'missing_config' => "Správanie relácie nemá žiadne nastavenie pre ':config'.",
        'missing_definition' => "Správanie ralácie neobsahuje definíciu pre ':field'.",
        'missing_model' => 'Správanie relácie použité v :class nemá definovaný žiadny model.',
        'invalid_action_single' => 'Táto akcia nemôže byť vykonaná na jednoduchej relácií.',
        'invalid_action_multi' => 'Táto akcia nemôže byť vykonaná na viacnásobnej relácií.',
        'help' => 'Pre pridanie kliknite na položku',
        'related_data' => 'Súvisiace dáta pre :name',
        'add' => 'Pridať',
        'add_selected' => 'Pridať vybrané',
        'add_a_new' => 'Pridať nový :name',
        'link_selected' => 'Vytvoriť väzbu na vybrané',
        'link_a_new' => 'Vytvoriť novú väzbu na :name',
        'cancel' => 'Zrušiť',
        'close' => 'Zatvoriť',
        'add_name' => 'Pridať :name',
        'create' => 'Vytvoriť',
        'create_name' => 'Vytvoriť :name',
        'update' => 'Upraviť',
        'update_name' => 'Upraviť :name',
        'preview' => 'Náhľad',
        'preview_name' => 'Náhľad :name',
        'remove' => 'Odstrániť',
        'remove_name' => 'Odstrániť :name',
        'delete' => 'Zmazať',
        'delete_name' => 'Zmazať :name',
        'delete_confirm' => 'Ste si istý?',
        'link' => 'Väzba',
        'link_name' => 'Väzba :name',
        'unlink' => 'Zrušiť väzbu',
        'unlink_name' => 'Zrušiť väzbu :name',
        'unlink_confirm' => 'Ste si istý?'
    ],
    'reorder' => [
        'default_title' => 'Zoradiť záznamy',
        'no_records' => 'Nenašli sa žiadne záznamy na zoradenie.'
    ],
    'model' => [
        'name' => 'Model',
        'not_found' => "Model ':class' s ID :id nebol nájdený",
        'missing_id' => 'Nie je špecifikované ID pre hľadanie záznamov v modeli.',
        'missing_relation' => "Model ':class' neobsahuje definíciu pre ':relation'.",
        'missing_method' => "Model ':class' nemá implementovanú metódu ':method'.",
        'invalid_class' => "Model :model použitý v :class nie je platný, musí dediť triedu \Model.",
        'mass_assignment_failed' => "Hromadné priradenie zlyhalo pre atribút ':attribute'."
    ],
    'warnings' => [
        'tips' => 'Tipy pre konfiguráciu systému',
        'tips_description' => 'Existujú problémy, ktoré vyžadujú vašu pozornosť, aby vol systém správne nastavený.',
        'permissions'  => 'Do adresára :name alebo jeho podadresárov sa nedá zapisovať z PHP. Prosím nastavte správne oprávnenia tomuto adresáru.',
        'extension' => 'PHP rozšírenie :name nie je nainštalované. Prosím nainštalujte túto knižnicu a aktivujte rozšírenie.',
        'plugin_missing' => 'Plugin :name je vyžadovaný ale nie je nainštalovaný. Prosím nainštaujte tento plugin.',
    ],
    'editor' => [
        'menu_label' => 'Nastavenia editora kódu',
        'menu_description' => 'Upraviť globálne nastavenia editora, napríklad veľkosť písma a farebnú schému.',
        'font_size' => 'Veľkosť písma',
        'tab_size' => 'Počet znakov odsadenia',
        'use_hard_tabs' => 'Odsadenia tabulatorom',
        'code_folding' => 'Skladanie kódu',
        'code_folding_begin' => 'Označiť začiatok',
        'code_folding_begin_end' => 'Označiť začiatok a koniec',
        'autocompletion' => 'Automatické doplňovanie',
        'word_wrap' => 'Zalamovanie slov',
        'highlight_active_line' => 'Zvýrazniť aktívny riadok',
        'auto_closing' => 'Automaticky uzatvárať značky',
        'show_invisibles' => 'Zobraziť neviditeľné znaky',
        'show_gutter' => 'Zobraziť kurzor',
        'basic_autocompletion'=> 'Základné automatické doplňovanie (Ctrl + Space)',
        'live_autocompletion'=> 'Živé automatické doplňovanie',
        'enable_snippets'=> 'Povoliť úryvky (snippets) kódu (Tab)',
        'display_indent_guides'=> 'Zobraziť vodítka odsadenia',
        'show_print_margin'=> 'Zobraziť okraje tlače',
        'mode_off' => 'Vyp',
        'mode_fluid' => 'Plynulý',
        '40_characters' => '40 znakov',
        '80_characters' => '80 znakov',
        'theme' => 'Farebná schéma',
        'markup_styles' => 'Štýly',
        'custom_styles' => 'Vlastné štýly',
        'custom styles_comment' => 'Vlastné štýly, ktoré budú zahrnuté do editora HTML.',
        'markup_classes' => 'Triedy štýlov',
        'paragraph' => 'Odstavec',
        'link' => 'Odkaz',
        'table' => 'Tabuľka',
        'table_cell' => 'Bunka tabuľky',
        'image' => 'Obrázok',
        'label' => 'Popis',
        'class_name' => 'Názov triedy',
        'markup_tags' => 'Značky',
        'allowed_empty_tags' => 'Povolené prázdne značky',
        'allowed_empty_tags_comment' => 'Zoznam značiek, ktoré nie sú odstránené v prípade, že nemajú žiadny obsah.',
        'allowed_tags' => 'Povolené značky',
        'allowed_tags_comment' => 'Zoznam povelných značiek.',
        'no_wrap' => 'Nezabaľovať tieto značky',
        'no_wrap_comment' => 'Zoznam značiek, ktoré by nemali byť zabalené vnútri blokových značiek.',
        'remove_tags' => 'Odstrániť značky',
        'remove_tags_comment' => 'Zoznam značiek, ktoré sú odstránené spolu s ich obsahom.',
        'toolbar_buttons' => 'Tlačítka na paneli nástrojov',
        'toolbar_buttons_comment' => 'Predvolené tlačítka, ktoré budú zobrazené na paneli nástrojov textového editoru.',
    ],
    'tooltips' => [
        'preview_website' => 'Náhľad stránok'
    ],
    'mysettings' => [
        'menu_label' => 'Moje nastavenia',
        'menu_description' => 'Nastavenia vášho administrátorského účtu'
    ],
    'myaccount' => [
        'menu_label' => 'Môj účet',
        'menu_description' => 'Nastavte si detaily svojho účtu ako meno, e-mail a heslo.',
        'menu_keywords' => 'bezpečnosť login'
    ],
    'branding' => [
        'menu_label' => 'Nastavenia administrácie',
        'menu_description' => 'Nastavte si mano, použité farby a logo v administrácií.',
        'brand' => 'Značka',
        'logo' => 'Logo',
        'logo_description' => 'Nahrajte vlastné logo, ktoré bude použité v administrácií.',
        'app_name' => 'Meno aplikácie',
        'app_name_description' => 'Toto meno se zobrazí v úvodnej lište stránok.',
        'app_tagline' => 'Motto aplikácie',
        'app_tagline_description' => 'Toto motto se zobrazí na prihlasovacej stránke administrácie.',
        'colors' => 'Farby',
        'primary_color' => 'Primárna farba',
        'secondary_color' => 'Sekundárna farba',
        'accent_color' => 'Farba zvýraznenia',
        'styles' => 'Štýly',
        'custom_stylesheet' => 'Vlastné kaskádové štýly',
        'navigation' => 'Navigácia',
        'menu_mode' => 'Štýl menu',
        'menu_mode_inline' => 'V riadku',
        'menu_mode_tile' => 'Dlaždice',
        'menu_mode_collapsed' => 'Zbalené'
    ],
    'backend_preferences' => [
        'menu_label' => 'Nastavenia administrácie',
        'menu_description' => 'Spravujte nastavenia svojho účtu ako napríklad jazyk.',
        'region' => 'Región',
        'code_editor' => 'Editor kódu',
        'timezone' => 'Časové pásmo',
        'timezone_comment' => 'Upraví zobrazenie času podľa tejto časovej zóny.',
        'locale' => 'Jazyk',
        'locale_comment' => 'Vyberte jazyk administrácie.'
    ],
    'access_log' => [
        'hint' => 'Tento záznam zobrazuje zoznam úspešných administrátorských prihlásení. Záznamy sú uchovávané po dobu :days dní.',
        'menu_label' => 'Záznam prihlásení',
        'menu_description' => 'Zobraziť zoznam úspešných prihlásení do administrácie.',
        'created_at' => 'Čas a dátum',
        'login' => 'Login',
        'ip_address' => 'IP adresa',
        'first_name' => 'Meno',
        'last_name' => 'Priezvisko',
        'email' => 'E-mail'
    ],
    'filter' => [
        'all' => 'všetko',
        'options_method_not_exists' => "Trieda modelu :model musí definovať metódu :method() vracajúcu možnosti pre ':filter' filter.",
        'date_all' => 'všetky obdobia',
        'number_all' => 'všetky čísla',
    ],
    'import_export' => [
        'upload_csv_file' => '1. Nahrať CSV súbor',
        'import_file' => 'Importovať súbor',
        'row' => 'Riadok :row',
        'first_row_contains_titles' => 'Prvý riadok obsahuje názvy stĺpcov',
        'first_row_contains_titles_desc' => 'Nechajte zaškrtnuté ak prvý riadok v CSV je použitý pre názvy stĺpcov.',
        'match_columns' => '2. Vytvoriť väzbu medzi stĺpcami v databáze a v súbore',
        'file_columns' => 'Sĺpce súboru',
        'database_fields' => 'Polia v databáze',
        'set_import_options' => '3. Nastavte možnosti importu',
        'export_output_format' => '1. Formát exportu',
        'file_format' => 'Formát súboru',
        'standard_format' => 'Štandardný formát',
        'custom_format' => 'Vlastný formát',
        'delimiter_char' => 'Oddeľovací znak',
        'enclosure_char' => 'Znak pre ohraničenie (enclosure character)',
        'escape_char' => 'Ukončovací znak (escape character)',
        'select_columns' => '2. Vybrať exportované stĺpce',
        'column' => 'Stĺpec',
        'columns' => 'Stĺpce',
        'set_export_options' => '3. Nastaviť vlastnosti exportu',
        'show_ignored_columns' => 'Zobraziť ignorované stĺpce',
        'auto_match_columns' => 'VytvoriŤ väzby automaticky',
        'created' => 'Vytvorené',
        'updated' => 'Aktualizované',
        'skipped' => 'Preskočené',
        'warnings' => 'Upozornenia',
        'errors' => 'Chyby',
        'skipped_rows' => 'Preskočené riadky',
        'import_progress' => 'Priebeh importu',
        'processing' => 'Spracovávam',
        'import_error' => 'Chyba importu',
        'upload_valid_csv' => 'Prosím nahrajte platný CSV súbor.',
        'drop_column_here' => 'Sem potiahnite stĺpec...',
        'ignore_this_column' => 'Ignorovať tento stĺpec',
        'processing_successful_line1' => 'Export bol dokončený!',
        'processing_successful_line2' => 'Prehliadač vás teraz presmeruje na stránku pre stiahnutie súboru.',
        'export_progress' => 'Priebeh exportu',
        'export_error' => 'Chyba exportu',
        'column_preview' => 'Náhľad stĺpa',
        'file_not_found_error' => 'Súbor nenájdený',
        'empty_error' => 'Neboli nájdené žiadne záznamy pre export',
        'empty_import_columns_error' => 'Prosím vyberte stĺpce pre import.',
        'match_some_column_error' => 'Prosím najprv vytvorte väzbu medzi stĺpcami.',
        'required_match_column_error' => 'Prosím vytvorte väzbu pre vyžadované pole :label.',
        'empty_export_columns_error' => 'Prosím vyberte stĺpce pre export.',
        'behavior_missing_uselist_error' => 'Musíte implementovať správanie kontrolera ListController s povolenou vlastnosťou "useList".',
        'missing_model_class_error' => 'Posím špecifikujtey vlastnosť triedy pre :type',
        'missing_column_id_error' => 'Chýbajúci identifikátor stĺpca',
        'unknown_column_error' => 'Neznámy stĺpec',
        'encoding_not_supported_error' => 'Kódovanie zdrojového súboru nie je rozpoznané. Zvoľte voľbu formátu súboru s vlastným kódovaním pre import súboru.',
        'encoding_format' => 'Kódovanie súboru',
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
    ],
    'permissions' => [
        'manage_media' => 'Nahrávanie a správa mediálneho obsahu - obrázkov, videí, zvukov, dokumentov'
    ],
    'mediafinder' => [
        'label' => 'Vyhľadávač médií',
        'default_prompt' => 'Kliknite na tlačítko %s pre hľadanie súboru'
    ],
    'media' => [
        'menu_label' => 'Médiá',
        'upload' => 'Nahrať',
        'move' => 'Presunúť',
        'delete' => 'Zmazať',
        'add_folder' => 'Pridať priečinok',
        'search' => 'Hľadať',
        'display' => 'Zobraziť',
        'filter_everything' => 'Všetko',
        'filter_images' => 'Obrázky',
        'filter_video' => 'Video',
        'filter_audio' => 'Audio',
        'filter_documents' => 'Dokumenty',
        'library' => 'Knižnica',
        'size' => 'Veľkosť',
        'title' => 'Názov',
        'last_modified' => 'Naposledy zmenené',
        'public_url' => 'URL',
        'click_here' => 'Kliknite sem',
        'thumbnail_error' => 'Chyba pri generovaní náhľadu.',
        'return_to_parent' => 'Späť do nadradeného priečinka',
        'return_to_parent_label' => 'Hore ..',
        'nothing_selected' => 'Nič nevybrané.',
        'multiple_selected' => 'Vybraných viac položiek.',
        'uploading_file_num' => 'Nahrávam :number súbor(y)...',
        'uploading_complete' => 'Nahrávanie dokončené',
        'uploading_error' => 'Nahrávanie zlyhalo',
        'type_blocked' => 'Použitý typ súboru je blokovaný z bezpečnostných dôvodov.',
        'order_by' => 'Zoradiť podľa',
        'direction' => 'Smer',
        'direction_asc' => 'Vzostupne',
        'direction_desc' => 'Zostupne',
        'folder' => 'Priečinok',
        'no_files_found' => 'Pre túto požiadavku neboli nájdené žiaadne súbory.',
        'delete_empty' => 'Prosím vyberte položky pre zmazanie.',
        'delete_confirm' => 'Skutočne zmazať vybrané položky?',
        'error_renaming_file' => 'Cyba pri premenovávaní súboru.',
        'new_folder_title' => 'Nový priečinok',
        'folder_name' => 'Názov priečinka',
        'error_creating_folder' => 'Chyba pri vytváraní priečinka',
        'folder_or_file_exist' => 'Priečinok alebo súbor s daným menom už existuje.',
        'move_empty' => 'Prosím vyberte položky na presunutie.',
        'move_popup_title' => 'Presunúť súbory alebo priečinky',
        'move_destination' => 'Cieľový priečinok',
        'please_select_move_dest' => 'Prosím vyberte cieľový priečinok.',
        'move_dest_src_match' => 'Prosím vyberte iný cieľový priečinok.',
        'empty_library' => 'Knižnica médií je prázdna. Nahrajte súbory alebo vytvorte priečinky.',
        'insert' => 'Vložiť',
        'crop_and_insert' => 'Orezať a vložiť',
        'select_single_image' => 'Prosím vyberte iba jeden obrázok.',
        'selection_not_image' => 'Vybraná položka nie je obrázok.',
        'restore' => 'Späť všetky zmeny',
        'resize' => 'Zmeniť veľkosť...',
        'selection_mode_normal' => 'Normálna',
        'selection_mode_fixed_ratio' => 'Pevný pomer strán',
        'selection_mode_fixed_size' => 'Pevná veľkosť',
        'height' => 'Výška',
        'width' => 'Šírka',
        'selection_mode' => 'Spôsob označovania',
        'resize_image' => 'Zmeniť veľkosť obrázku',
        'image_size' => 'Veľkosť obrázku:',
        'selected_size' => 'Vybrané:'
    ],
];
