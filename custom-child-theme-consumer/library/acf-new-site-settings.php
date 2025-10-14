<?php
if( function_exists('acf_add_local_field_group') ):

    acf_add_local_field_group(array(
        'key' => 'group_5b0d19f23d0a1',
        'title' => '(Site) Settings',
        'fields' => array(
            array(
                'key' => 'field_5e7dcd0c75c59',
                'label' => 'Primary settings',
                'name' => '',
                'type' => 'tab',
                'instructions' => '',
                'required' => 0,
                'conditional_logic' => 0,
                'wrapper' => array(
                    'width' => '',
                    'class' => '',
                    'id' => '',
                ),
                'placement' => 'top',
                'endpoint' => 0,
            ),
            array(
                'key' => 'field_5b0d1a0b42198',
                'label' => 'Main Header Logo',
                'name' => 'main_header_logo',
                'type' => 'image',
                'instructions' => '',
                'required' => 0,
                'conditional_logic' => 0,
                'wrapper' => array(
                    'width' => '',
                    'class' => '',
                    'id' => '',
                ),
                'return_format' => 'array',
                'preview_size' => 'thumbnail',
                'library' => 'all',
                'min_width' => '',
                'min_height' => '',
                'min_size' => '',
                'max_width' => '',
                'max_height' => '',
                'max_size' => '',
                'mime_types' => '',
            ),
            array(
                'key' => 'field_5c98a9705befd',
                'label' => 'Country Languages',
                'name' => 'country_languages',
                'type' => 'country',
                'instructions' => '',
                'required' => 0,
                'conditional_logic' => 0,
                'wrapper' => array(
                    'width' => '',
                    'class' => '',
                    'id' => '',
                ),
                'choices' => 'AF : Afghanistan
    AX : Åland Islands
    AL : Albania
    DZ : Algeria
    AS : American Samoa
    AD : Andorra
    AO : Angola
    AI : Anguilla
    AQ : Antarctica
    AG : Antigua & Barbuda
    AR : Argentina
    AM : Armenia
    AW : Aruba
    AC : Ascension Island
    AU : Australia
    AT : Austria
    AZ : Azerbaijan
    BS : Bahamas
    BH : Bahrain
    BD : Bangladesh
    BB : Barbados
    BY : Belarus
    BE : Belgium
    BZ : Belize
    BJ : Benin
    BM : Bermuda
    BT : Bhutan
    BO : Bolivia
    BA : Bosnia & Herzegovina
    BW : Botswana
    BR : Brazil
    IO : British Indian Ocean Territory
    VG : British Virgin Islands
    BN : Brunei
    BG : Bulgaria
    BF : Burkina Faso
    BI : Burundi
    KH : Cambodia
    CM : Cameroon
    CA : Canada
    IC : Canary Islands
    CV : Cape Verde
    BQ : Caribbean Netherlands
    KY : Cayman Islands
    CF : Central African Republic
    EA : Ceuta & Melilla
    TD : Chad
    CL : Chile
    CN : China
    CX : Christmas Island
    CC : Cocos (Keeling) Islands
    CO : Colombia
    KM : Comoros
    CG : Congo - Brazzaville
    CD : Congo - Kinshasa
    CK : Cook Islands
    CR : Costa Rica
    CI : Côte d’Ivoire
    HR : Croatia
    CU : Cuba
    CW : Curaçao
    CY : Cyprus
    CZ : Czechia
    DK : Denmark
    DG : Diego Garcia
    DJ : Djibouti
    DM : Dominica
    DO : Dominican Republic
    EC : Ecuador
    EG : Egypt
    SV : El Salvador
    GQ : Equatorial Guinea
    ER : Eritrea
    EE : Estonia
    ET : Ethiopia
    EZ : Eurozone
    FK : Falkland Islands
    FO : Faroe Islands
    FJ : Fiji
    FI : Finland
    FR : France
    GF : French Guiana
    PF : French Polynesia
    TF : French Southern Territories
    GA : Gabon
    GM : Gambia
    GE : Georgia
    DE : Germany
    GH : Ghana
    GI : Gibraltar
    GR : Greece
    GL : Greenland
    GD : Grenada
    GP : Guadeloupe
    GU : Guam
    GT : Guatemala
    GG : Guernsey
    GN : Guinea
    GW : Guinea-Bissau
    GY : Guyana
    HT : Haiti
    HN : Honduras
    HK : Hong Kong SAR China
    HU : Hungary
    IS : Iceland
    IN : India
    ID : Indonesia
    IR : Iran
    IQ : Iraq
    IE : Ireland
    IM : Isle of Man
    IL : Israel
    IT : Italy
    JM : Jamaica
    JP : Japan
    JE : Jersey
    JO : Jordan
    KZ : Kazakhstan
    KE : Kenya
    KI : Kiribati
    XK : Kosovo
    KW : Kuwait
    KG : Kyrgyzstan
    LA : Laos
    LV : Latvia
    LB : Lebanon
    LS : Lesotho
    LR : Liberia
    LY : Libya
    LI : Liechtenstein
    LT : Lithuania
    LU : Luxembourg
    MO : Macau SAR China
    MK : Macedonia
    MG : Madagascar
    MW : Malawi
    MY : Malaysia
    MV : Maldives
    ML : Mali
    MT : Malta
    MH : Marshall Islands
    MQ : Martinique
    MR : Mauritania
    MU : Mauritius
    YT : Mayotte
    MX : Mexico
    FM : Micronesia
    MD : Moldova
    MC : Monaco
    MN : Mongolia
    ME : Montenegro
    MS : Montserrat
    MA : Morocco
    MZ : Mozambique
    MM : Myanmar (Burma)
    NA : Namibia
    NR : Nauru
    NP : Nepal
    NL : Netherlands
    NC : New Caledonia
    NZ : New Zealand
    NI : Nicaragua
    NE : Niger
    NG : Nigeria
    NU : Niue
    NF : Norfolk Island
    KP : North Korea
    MP : Northern Mariana Islands
    NO : Norway
    OM : Oman
    PK : Pakistan
    PW : Palau
    PS : Palestinian Territories
    PA : Panama
    PG : Papua New Guinea
    PY : Paraguay
    PE : Peru
    PH : Philippines
    PN : Pitcairn Islands
    PL : Poland
    PT : Portugal
    PR : Puerto Rico
    QA : Qatar
    RE : Réunion
    RO : Romania
    RU : Russia
    RW : Rwanda
    WS : Samoa
    SM : San Marino
    ST : São Tomé & Príncipe
    SA : Saudi Arabia
    SN : Senegal
    RS : Serbia
    SC : Seychelles
    SL : Sierra Leone
    SG : Singapore
    SX : Sint Maarten
    SK : Slovakia
    SI : Slovenia
    SB : Solomon Islands
    SO : Somalia
    ZA : South Africa
    GS : South Georgia & South Sandwich Islands
    KR : South Korea
    SS : South Sudan
    ES : Spain
    LK : Sri Lanka
    BL : St. Barthélemy
    SH : St. Helena
    KN : St. Kitts & Nevis
    LC : St. Lucia
    MF : St. Martin
    PM : St. Pierre & Miquelon
    VC : St. Vincent & Grenadines
    SD : Sudan
    SR : Suriname
    SJ : Svalbard & Jan Mayen
    SZ : Swaziland
    SE : Sweden
    CH : Switzerland
    SY : Syria
    TW : Taiwan
    TJ : Tajikistan
    TZ : Tanzania
    TH : Thailand
    TL : Timor-Leste
    TG : Togo
    TK : Tokelau
    TO : Tonga
    TT : Trinidad & Tobago
    TA : Tristan da Cunha
    TN : Tunisia
    TR : Turkey
    TM : Turkmenistan
    TC : Turks & Caicos Islands
    TV : Tuvalu
    UM : U.S. Outlying Islands
    VI : U.S. Virgin Islands
    UG : Uganda
    UA : Ukraine
    AE : United Arab Emirates
    GB : United Kingdom
    UN : United Nations
    US : United States
    UY : Uruguay
    UZ : Uzbekistan
    VU : Vanuatu
    VA : Vatican City
    VE : Venezuela
    VN : Vietnam
    WF : Wallis & Futuna
    EH : Western Sahara
    YE : Yemen
    ZM : Zambia
    ZW : Zimbabwe',
                'allow_null' => 0,
                'multiple' => 1,
                'ui' => 1,
                'return_format' => 'array',
                'default_value' => '',
                'placeholder' => 'Select a country',
            ),
            array(
                'key' => 'field_5cc18756348dd',
                'label' => 'Moving Pages',
                'name' => 'moving_pages',
                'type' => 'group',
                'instructions' => '',
                'required' => 0,
                'conditional_logic' => 0,
                'wrapper' => array(
                    'width' => '',
                    'class' => '',
                    'id' => '',
                ),
                'layout' => 'row',
                'sub_fields' => array(
                    array(
                        'key' => 'field_5cc1876f348de',
                        'label' => 'Hongkong',
                        'name' => 'hongkong',
                        'type' => 'link',
                        'instructions' => '',
                        'required' => 0,
                        'conditional_logic' => 0,
                        'wrapper' => array(
                            'width' => '',
                            'class' => '',
                            'id' => '',
                        ),
                        'return_format' => 'array',
                    ),
                    array(
                        'key' => 'field_5cc1878f348df',
                        'label' => 'Thailand',
                        'name' => 'thailand',
                        'type' => 'link',
                        'instructions' => '',
                        'required' => 0,
                        'conditional_logic' => 0,
                        'wrapper' => array(
                            'width' => '',
                            'class' => '',
                            'id' => '',
                        ),
                        'return_format' => 'array',
                    ),
                    array(
                        'key' => 'field_5cc187a2348e0',
                        'label' => 'India',
                        'name' => 'india',
                        'type' => 'link',
                        'instructions' => '',
                        'required' => 0,
                        'conditional_logic' => 0,
                        'wrapper' => array(
                            'width' => '',
                            'class' => '',
                            'id' => '',
                        ),
                        'return_format' => 'array',
                    ),
                    array(
                        'key' => 'field_5cc187b9348e1',
                        'label' => 'Singapore',
                        'name' => 'singapore',
                        'type' => 'link',
                        'instructions' => '',
                        'required' => 0,
                        'conditional_logic' => 0,
                        'wrapper' => array(
                            'width' => '',
                            'class' => '',
                            'id' => '',
                        ),
                        'return_format' => 'array',
                    ),
                    array(
                        'key' => 'field_5cc187c7348e2',
                        'label' => 'UAE',
                        'name' => 'uae',
                        'type' => 'link',
                        'instructions' => '',
                        'required' => 0,
                        'conditional_logic' => 0,
                        'wrapper' => array(
                            'width' => '',
                            'class' => '',
                            'id' => '',
                        ),
                        'return_format' => 'array',
                    ),
                    array(
                        'key' => 'field_5cc187d9348e3',
                        'label' => 'UK',
                        'name' => 'uk',
                        'type' => 'link',
                        'instructions' => '',
                        'required' => 0,
                        'conditional_logic' => 0,
                        'wrapper' => array(
                            'width' => '',
                            'class' => '',
                            'id' => '',
                        ),
                        'return_format' => 'array',
                    ),
                    array(
                        'key' => 'field_5cc187e5348e4',
                        'label' => 'USA',
                        'name' => 'usa',
                        'type' => 'link',
                        'instructions' => '',
                        'required' => 0,
                        'conditional_logic' => 0,
                        'wrapper' => array(
                            'width' => '',
                            'class' => '',
                            'id' => '',
                        ),
                        'return_format' => 'array',
                    ),
                ),
            ),
            array(
                'key' => 'field_5b1e7abd2becb',
                'label' => 'Social Media',
                'name' => 'social_media',
                'type' => 'repeater',
                'instructions' => '',
                'required' => 0,
                'conditional_logic' => 0,
                'wrapper' => array(
                    'width' => '',
                    'class' => '',
                    'id' => '',
                ),
                'collapsed' => '',
                'min' => 0,
                'max' => 0,
                'layout' => 'table',
                'button_label' => '',
                'sub_fields' => array(
                    array(
                        'key' => 'field_5b1e7ad82becc',
                        'label' => 'Sites',
                        'name' => 'sites',
                        'type' => 'select',
                        'instructions' => '',
                        'required' => 0,
                        'conditional_logic' => 0,
                        'wrapper' => array(
                            'width' => '30',
                            'class' => '',
                            'id' => '',
                        ),
                        'choices' => array(
                            'fa-facebook-official' => 'Facebook',
                            'fa-twitter' => 'Twitter',
                            'fa-linkedin' => 'Linkedin',
                            'fa-instagram' => 'Instagram',
                            'fa-wechat' => 'WeChat',
                        ),
                        'default_value' => array(
                        ),
                        'allow_null' => 0,
                        'multiple' => 0,
                        'ui' => 0,
                        'ajax' => 0,
                        'return_format' => 'value',
                        'show_column' => 0,
                        'show_column_sortable' => 0,
                        'show_column_weight' => 1000,
                        'allow_quickedit' => 0,
                        'allow_bulkedit' => 0,
                        'placeholder' => '',
                    ),
                    array(
                        'key' => 'field_5b1e7b5a2becd',
                        'label' => 'Profile Url',
                        'name' => 'profile_url',
                        'type' => 'text',
                        'instructions' => '',
                        'required' => 0,
                        'conditional_logic' => 0,
                        'wrapper' => array(
                            'width' => '70',
                            'class' => '',
                            'id' => '',
                        ),
                        'default_value' => '',
                        'placeholder' => '',
                        'prepend' => '',
                        'append' => '',
                        'maxlength' => '',
                    ),
                ),
            ),
            array(
                'key' => 'field_5b211e9161d89',
                'label' => 'Form Assembly Forms',
                'name' => 'form_assembly_forms',
                'type' => 'group',
                'instructions' => '',
                'required' => 0,
                'conditional_logic' => 0,
                'wrapper' => array(
                    'width' => '',
                    'class' => '',
                    'id' => '',
                ),
                'layout' => 'block',
                'sub_fields' => array(
                    array(
                        'key' => 'field_5b211ecb61d8a',
                        'label' => '',
                        'name' => 'form_list',
                        'type' => 'repeater',
                        'instructions' => '',
                        'required' => 0,
                        'conditional_logic' => 0,
                        'wrapper' => array(
                            'width' => '',
                            'class' => '',
                            'id' => '',
                        ),
                        'collapsed' => '',
                        'min' => 0,
                        'max' => 0,
                        'layout' => 'table',
                        'button_label' => '',
                        'sub_fields' => array(
                            array(
                                'key' => 'field_5b211f0261d8b',
                                'label' => 'Form Assembly Id',
                                'name' => 'form_assembly_id',
                                'type' => 'text',
                                'instructions' => '',
                                'required' => 0,
                                'conditional_logic' => 0,
                                'wrapper' => array(
                                    'width' => '50',
                                    'class' => '',
                                    'id' => '',
                                ),
                                'default_value' => '',
                                'placeholder' => '',
                                'prepend' => '',
                                'append' => '',
                                'maxlength' => '',
                            ),
                            array(
                                'key' => 'field_5b211f1261d8c',
                                'label' => 'Page',
                                'name' => 'page',
                                'type' => 'post_object',
                                'instructions' => '',
                                'required' => 0,
                                'conditional_logic' => 0,
                                'wrapper' => array(
                                    'width' => '',
                                    'class' => '',
                                    'id' => '',
                                ),
                                'post_type' => array(
                                    0 => 'page',
                                ),
                                'taxonomy' => array(
                                ),
                                'allow_null' => 0,
                                'multiple' => 0,
                                'return_format' => 'id',
                                'ui' => 1,
                            ),
                        ),
                    ),
                ),
            ),
            array(
                'key' => 'field_5b2235b5bef82',
                'label' => 'Footer',
                'name' => 'company_footer',
                'type' => 'text',
                'instructions' => '',
                'required' => 0,
                'conditional_logic' => 0,
                'wrapper' => array(
                    'width' => '',
                    'class' => '',
                    'id' => '',
                ),
                'default_value' => '',
                'placeholder' => '',
                'prepend' => '',
                'append' => '',
                'maxlength' => '',
            ),
            array(
                'key' => 'field_5bbc72a130210',
                'label' => 'Accreditation and Memberships',
                'name' => 'footer_awards',
                'type' => 'repeater',
                'instructions' => '',
                'required' => 0,
                'conditional_logic' => 0,
                'wrapper' => array(
                    'width' => '',
                    'class' => '',
                    'id' => '',
                ),
                'collapsed' => '',
                'min' => 0,
                'max' => 0,
                'layout' => 'row',
                'button_label' => '',
                'sub_fields' => array(
                    array(
                        'key' => 'field_5bbc72c630211',
                        'label' => 'Award',
                        'name' => 'award_logo',
                        'type' => 'image',
                        'instructions' => '',
                        'required' => 0,
                        'conditional_logic' => 0,
                        'wrapper' => array(
                            'width' => '',
                            'class' => '',
                            'id' => '',
                        ),
                        'return_format' => 'url',
                        'preview_size' => 'thumbnail',
                        'library' => 'all',
                        'min_width' => '',
                        'min_height' => '',
                        'min_size' => '',
                        'max_width' => '',
                        'max_height' => '',
                        'max_size' => '',
                        'mime_types' => '',
                        'show_column' => 0,
                        'show_column_weight' => 1000,
                        'allow_quickedit' => 0,
                        'allow_bulkedit' => 0,
                    ),
                    array(
                        'key' => 'field_5bbc72db30212',
                        'label' => 'Award Link',
                        'name' => 'award_link',
                        'type' => 'text',
                        'instructions' => '',
                        'required' => 0,
                        'conditional_logic' => 0,
                        'wrapper' => array(
                            'width' => '',
                            'class' => '',
                            'id' => '',
                        ),
                        'default_value' => '',
                        'placeholder' => '',
                        'prepend' => '',
                        'append' => '',
                        'maxlength' => '',
                        'show_column' => 0,
                        'show_column_sortable' => 0,
                        'show_column_weight' => 1000,
                    ),
                ),
            ),
            array(
                'key' => 'field_5e7dcd1c75c5a',
                'label' => 'Menu',
                'name' => '',
                'type' => 'tab',
                'instructions' => '',
                'required' => 0,
                'conditional_logic' => 0,
                'wrapper' => array(
                    'width' => '',
                    'class' => '',
                    'id' => '',
                ),
                'placement' => 'top',
                'endpoint' => 0,
            ),
            array(
                'key' => 'field_5e7dcd3975c5b',
                'label' => 'Consumer Menu',
                'name' => 'consumer_menu',
                'type' => 'relationship',
                'instructions' => '',
                'required' => 0,
                'conditional_logic' => 0,
                'wrapper' => array(
                    'width' => '',
                    'class' => '',
                    'id' => '',
                ),
                'post_type' => '',
                'taxonomy' => '',
                'filters' => array(
                    0 => 'search',
                    1 => 'post_type',
                ),
                'elements' => '',
                'min' => '',
                'max' => '',
                'return_format' => 'id',
                'show_column' => 0,
                'show_column_weight' => 1000,
            ),
            array(
                'key' => 'field_5e7dcd6d75c5c',
                'label' => 'Corporate Menu',
                'name' => 'corporate_menu',
                'type' => 'relationship',
                'instructions' => '',
                'required' => 0,
                'conditional_logic' => 0,
                'wrapper' => array(
                    'width' => '',
                    'class' => '',
                    'id' => '',
                ),
                'post_type' => '',
                'taxonomy' => '',
                'filters' => array(
                    0 => 'search',
                    1 => 'post_type',
                ),
                'elements' => '',
                'min' => '',
                'max' => '',
                'return_format' => 'id',
                'show_column' => 0,
                'show_column_weight' => 1000,
            ),
            array(
                'key' => 'field_60f7cd3c71deb',
                'label' => 'Corporate Settings',
                'name' => '',
                'type' => 'tab',
                'instructions' => '',
                'required' => 0,
                'conditional_logic' => 0,
                'wrapper' => array(
                    'width' => '',
                    'class' => '',
                    'id' => '',
                ),
                'placement' => 'top',
                'endpoint' => 0,
            ),
            array(
                'key' => 'field_60f7cdb271dec',
                'label' => 'Relationship Carousel',
                'name' => '',
                'type' => 'message',
                'instructions' => '',
                'required' => 0,
                'conditional_logic' => 0,
                'wrapper' => array(
                    'width' => '',
                    'class' => '',
                    'id' => '',
                ),
                'message' => '',
                'new_lines' => 'wpautop',
                'esc_html' => 0,
            ),
            array(
                'key' => 'field_60f7cdda71ded',
                'label' => 'Moving Carousel',
                'name' => 'moving_carousel',
                'type' => 'post_object',
                'instructions' => '',
                'required' => 0,
                'conditional_logic' => 0,
                'wrapper' => array(
                    'width' => '',
                    'class' => '',
                    'id' => '',
                ),
                'post_type' => array(
                    0 => 'page',
                ),
                'taxonomy' => '',
                'allow_null' => 0,
                'multiple' => 1,
                'return_format' => 'id',
                'show_column' => 0,
                'show_column_weight' => 1000,
                'allow_quickedit' => 0,
                'allow_bulkedit' => 0,
                'ui' => 1,
            ),
            array(
                'key' => 'field_60f935fdbe20d',
                'label' => 'Title',
                'name' => 'moving_title',
                'type' => 'text',
                'instructions' => '',
                'required' => 0,
                'conditional_logic' => 0,
                'wrapper' => array(
                    'width' => '',
                    'class' => '',
                    'id' => '',
                ),
                'default_value' => '',
                'placeholder' => '',
                'prepend' => '',
                'append' => '',
                'maxlength' => '',
                'show_column' => 0,
                'show_column_sortable' => 0,
                'show_column_weight' => 1000,
                'allow_quickedit' => 0,
                'allow_bulkedit' => 0,
            ),
            array(
                'key' => 'field_60f9360cbe20e',
                'label' => 'Description',
                'name' => 'moving_description',
                'type' => 'text',
                'instructions' => '',
                'required' => 0,
                'conditional_logic' => 0,
                'wrapper' => array(
                    'width' => '',
                    'class' => '',
                    'id' => '',
                ),
                'default_value' => '',
                'placeholder' => '',
                'prepend' => '',
                'append' => '',
                'maxlength' => '',
                'show_column' => 0,
                'show_column_sortable' => 0,
                'show_column_weight' => 1000,
                'allow_quickedit' => 0,
                'allow_bulkedit' => 0,
            ),
            array(
                'key' => 'field_60f910ae53bec',
                'label' => 'Moving Items',
                'name' => 'moving_items',
                'type' => 'repeater',
                'instructions' => '',
                'required' => 0,
                'conditional_logic' => 0,
                'wrapper' => array(
                    'width' => '',
                    'class' => '',
                    'id' => '',
                ),
                'collapsed' => 'field_60f9110253bee',
                'min' => 0,
                'max' => 4,
                'layout' => 'block',
                'button_label' => '',
                'sub_fields' => array(
                    array(
                        'key' => 'field_60f910e053bed',
                        'label' => 'Image',
                        'name' => 'image',
                        'type' => 'image',
                        'instructions' => '',
                        'required' => 0,
                        'conditional_logic' => 0,
                        'wrapper' => array(
                            'width' => '',
                            'class' => '',
                            'id' => '',
                        ),
                        'return_format' => 'array',
                        'preview_size' => 'medium',
                        'library' => 'all',
                        'min_width' => '',
                        'min_height' => '',
                        'min_size' => '',
                        'max_width' => '',
                        'max_height' => '',
                        'max_size' => '',
                        'mime_types' => '',
                    ),
                    array(
                        'key' => 'field_60f9110253bee',
                        'label' => 'Title',
                        'name' => 'title',
                        'type' => 'text',
                        'instructions' => '',
                        'required' => 0,
                        'conditional_logic' => 0,
                        'wrapper' => array(
                            'width' => '',
                            'class' => '',
                            'id' => '',
                        ),
                        'default_value' => '',
                        'placeholder' => '',
                        'prepend' => '',
                        'append' => '',
                        'maxlength' => '',
                    ),
                    array(
                        'key' => 'field_60f9110753bef',
                        'label' => 'Description',
                        'name' => 'description',
                        'type' => 'textarea',
                        'instructions' => '',
                        'required' => 0,
                        'conditional_logic' => 0,
                        'wrapper' => array(
                            'width' => '',
                            'class' => '',
                            'id' => '',
                        ),
                        'default_value' => '',
                        'placeholder' => '',
                        'maxlength' => '',
                        'rows' => '',
                        'new_lines' => '',
                    ),
                    array(
                        'key' => 'field_60f9111e53bf0',
                        'label' => 'Link',
                        'name' => 'link',
                        'type' => 'link',
                        'instructions' => '',
                        'required' => 0,
                        'conditional_logic' => 0,
                        'wrapper' => array(
                            'width' => '',
                            'class' => '',
                            'id' => '',
                        ),
                        'return_format' => 'array',
                    ),
                ),
            ),
            array(
                'key' => 'field_60f7ce6175cae',
                'label' => 'Assignment Management Carousel',
                'name' => 'assignment_management_carousel',
                'type' => 'post_object',
                'instructions' => '',
                'required' => 0,
                'conditional_logic' => 0,
                'wrapper' => array(
                    'width' => '',
                    'class' => '',
                    'id' => '',
                ),
                'post_type' => array(
                    0 => 'page',
                ),
                'taxonomy' => '',
                'allow_null' => 0,
                'multiple' => 1,
                'return_format' => 'id',
                'show_column' => 0,
                'show_column_weight' => 1000,
                'allow_quickedit' => 0,
                'allow_bulkedit' => 0,
                'ui' => 1,
            ),
            array(
                'key' => 'field_60f9362d26a13',
                'label' => 'Title',
                'name' => 'ass_title',
                'type' => 'text',
                'instructions' => '',
                'required' => 0,
                'conditional_logic' => 0,
                'wrapper' => array(
                    'width' => '',
                    'class' => '',
                    'id' => '',
                ),
                'default_value' => '',
                'placeholder' => '',
                'prepend' => '',
                'append' => '',
                'maxlength' => '',
                'show_column' => 0,
                'show_column_sortable' => 0,
                'show_column_weight' => 1000,
                'allow_quickedit' => 0,
                'allow_bulkedit' => 0,
            ),
            array(
                'key' => 'field_60f9364726a14',
                'label' => 'Description',
                'name' => 'ass_description',
                'type' => 'text',
                'instructions' => '',
                'required' => 0,
                'conditional_logic' => 0,
                'wrapper' => array(
                    'width' => '',
                    'class' => '',
                    'id' => '',
                ),
                'default_value' => '',
                'placeholder' => '',
                'prepend' => '',
                'append' => '',
                'maxlength' => '',
                'show_column' => 0,
                'show_column_sortable' => 0,
                'show_column_weight' => 1000,
                'allow_quickedit' => 0,
                'allow_bulkedit' => 0,
            ),
            array(
                'key' => 'field_60f934b0cde36',
                'label' => 'Assignment Management Items',
                'name' => 'assignment_management_items',
                'type' => 'repeater',
                'instructions' => '',
                'required' => 0,
                'conditional_logic' => 0,
                'wrapper' => array(
                    'width' => '',
                    'class' => '',
                    'id' => '',
                ),
                'collapsed' => 'field_60f9110253bee',
                'min' => 0,
                'max' => 4,
                'layout' => 'block',
                'button_label' => '',
                'sub_fields' => array(
                    array(
                        'key' => 'field_60f934b0cde37',
                        'label' => 'Image',
                        'name' => 'image',
                        'type' => 'image',
                        'instructions' => '',
                        'required' => 0,
                        'conditional_logic' => 0,
                        'wrapper' => array(
                            'width' => '',
                            'class' => '',
                            'id' => '',
                        ),
                        'return_format' => '',
                        'preview_size' => 'medium',
                        'library' => '',
                        'min_width' => '',
                        'min_height' => '',
                        'min_size' => '',
                        'max_width' => '',
                        'max_height' => '',
                        'max_size' => '',
                        'mime_types' => '',
                        'show_column' => 0,
                        'show_column_weight' => 1000,
                        'allow_quickedit' => 0,
                        'allow_bulkedit' => 0,
                    ),
                    array(
                        'key' => 'field_60f934b0cde38',
                        'label' => 'Title',
                        'name' => 'title',
                        'type' => 'text',
                        'instructions' => '',
                        'required' => 0,
                        'conditional_logic' => 0,
                        'wrapper' => array(
                            'width' => '',
                            'class' => '',
                            'id' => '',
                        ),
                        'default_value' => '',
                        'placeholder' => '',
                        'prepend' => '',
                        'append' => '',
                        'maxlength' => '',
                        'show_column' => 0,
                        'show_column_sortable' => 0,
                        'show_column_weight' => 1000,
                        'allow_quickedit' => 0,
                        'allow_bulkedit' => 0,
                    ),
                    array(
                        'key' => 'field_60f934b0cde39',
                        'label' => 'Description',
                        'name' => 'description',
                        'type' => 'textarea',
                        'instructions' => '',
                        'required' => 0,
                        'conditional_logic' => 0,
                        'wrapper' => array(
                            'width' => '',
                            'class' => '',
                            'id' => '',
                        ),
                        'default_value' => '',
                        'placeholder' => '',
                        'maxlength' => '',
                        'rows' => '',
                        'new_lines' => '',
                        'show_column' => 0,
                        'show_column_weight' => 1000,
                        'allow_quickedit' => 0,
                        'allow_bulkedit' => 0,
                    ),
                    array(
                        'key' => 'field_60f934b0cde3a',
                        'label' => 'Link',
                        'name' => 'link',
                        'type' => 'link',
                        'instructions' => '',
                        'required' => 0,
                        'conditional_logic' => 0,
                        'wrapper' => array(
                            'width' => '',
                            'class' => '',
                            'id' => '',
                        ),
                        'return_format' => '',
                        'show_column' => 0,
                        'show_column_weight' => 1000,
                        'allow_quickedit' => 0,
                        'allow_bulkedit' => 0,
                    ),
                ),
            ),
            array(
                'key' => 'field_60f7ce8c0f817',
                'label' => 'Compensation and Expenses Carousel',
                'name' => 'compensation_and_expenses_carousel',
                'type' => 'post_object',
                'instructions' => '',
                'required' => 0,
                'conditional_logic' => 0,
                'wrapper' => array(
                    'width' => '',
                    'class' => '',
                    'id' => '',
                ),
                'post_type' => array(
                    0 => 'page',
                ),
                'taxonomy' => '',
                'allow_null' => 0,
                'multiple' => 1,
                'return_format' => 'id',
                'show_column' => 0,
                'show_column_weight' => 1000,
                'allow_quickedit' => 0,
                'allow_bulkedit' => 0,
                'ui' => 1,
            ),
            array(
                'key' => 'field_60f9366026a15',
                'label' => 'Title',
                'name' => 'comp_title',
                'type' => 'text',
                'instructions' => '',
                'required' => 0,
                'conditional_logic' => 0,
                'wrapper' => array(
                    'width' => '',
                    'class' => '',
                    'id' => '',
                ),
                'default_value' => '',
                'placeholder' => '',
                'prepend' => '',
                'append' => '',
                'maxlength' => '',
                'show_column' => 0,
                'show_column_sortable' => 0,
                'show_column_weight' => 1000,
                'allow_quickedit' => 0,
                'allow_bulkedit' => 0,
            ),
            array(
                'key' => 'field_60f9367526a16',
                'label' => 'Description',
                'name' => 'comp_description',
                'type' => 'text',
                'instructions' => '',
                'required' => 0,
                'conditional_logic' => 0,
                'wrapper' => array(
                    'width' => '',
                    'class' => '',
                    'id' => '',
                ),
                'default_value' => '',
                'placeholder' => '',
                'prepend' => '',
                'append' => '',
                'maxlength' => '',
                'show_column' => 0,
                'show_column_sortable' => 0,
                'show_column_weight' => 1000,
                'allow_quickedit' => 0,
                'allow_bulkedit' => 0,
            ),
            array(
                'key' => 'field_60f934cacde3b',
                'label' => 'Compensation and Expenses Items',
                'name' => 'compensation_and_expenses_items',
                'type' => 'repeater',
                'instructions' => '',
                'required' => 0,
                'conditional_logic' => 0,
                'wrapper' => array(
                    'width' => '',
                    'class' => '',
                    'id' => '',
                ),
                'collapsed' => 'field_60f9110253bee',
                'min' => 0,
                'max' => 4,
                'layout' => 'block',
                'button_label' => '',
                'sub_fields' => array(
                    array(
                        'key' => 'field_60f934cacde3c',
                        'label' => 'Image',
                        'name' => 'image',
                        'type' => 'image',
                        'instructions' => '',
                        'required' => 0,
                        'conditional_logic' => 0,
                        'wrapper' => array(
                            'width' => '',
                            'class' => '',
                            'id' => '',
                        ),
                        'return_format' => '',
                        'preview_size' => 'medium',
                        'library' => '',
                        'min_width' => '',
                        'min_height' => '',
                        'min_size' => '',
                        'max_width' => '',
                        'max_height' => '',
                        'max_size' => '',
                        'mime_types' => '',
                        'show_column' => 0,
                        'show_column_weight' => 1000,
                        'allow_quickedit' => 0,
                        'allow_bulkedit' => 0,
                    ),
                    array(
                        'key' => 'field_60f934cacde3d',
                        'label' => 'Title',
                        'name' => 'title',
                        'type' => 'text',
                        'instructions' => '',
                        'required' => 0,
                        'conditional_logic' => 0,
                        'wrapper' => array(
                            'width' => '',
                            'class' => '',
                            'id' => '',
                        ),
                        'default_value' => '',
                        'placeholder' => '',
                        'prepend' => '',
                        'append' => '',
                        'maxlength' => '',
                        'show_column' => 0,
                        'show_column_sortable' => 0,
                        'show_column_weight' => 1000,
                        'allow_quickedit' => 0,
                        'allow_bulkedit' => 0,
                    ),
                    array(
                        'key' => 'field_60f934cacde3e',
                        'label' => 'Description',
                        'name' => 'description',
                        'type' => 'textarea',
                        'instructions' => '',
                        'required' => 0,
                        'conditional_logic' => 0,
                        'wrapper' => array(
                            'width' => '',
                            'class' => '',
                            'id' => '',
                        ),
                        'default_value' => '',
                        'placeholder' => '',
                        'maxlength' => '',
                        'rows' => '',
                        'new_lines' => '',
                        'show_column' => 0,
                        'show_column_weight' => 1000,
                        'allow_quickedit' => 0,
                        'allow_bulkedit' => 0,
                    ),
                    array(
                        'key' => 'field_60f934cacde3f',
                        'label' => 'Link',
                        'name' => 'link',
                        'type' => 'link',
                        'instructions' => '',
                        'required' => 0,
                        'conditional_logic' => 0,
                        'wrapper' => array(
                            'width' => '',
                            'class' => '',
                            'id' => '',
                        ),
                        'return_format' => '',
                        'show_column' => 0,
                        'show_column_weight' => 1000,
                        'allow_quickedit' => 0,
                        'allow_bulkedit' => 0,
                    ),
                ),
            ),
            array(
                'key' => 'field_60f7ceb40f818',
                'label' => 'Corporate Immigration Carousel',
                'name' => 'corporate_immigration_carousel',
                'type' => 'post_object',
                'instructions' => '',
                'required' => 0,
                'conditional_logic' => 0,
                'wrapper' => array(
                    'width' => '',
                    'class' => '',
                    'id' => '',
                ),
                'post_type' => array(
                    0 => 'page',
                ),
                'taxonomy' => '',
                'allow_null' => 0,
                'multiple' => 1,
                'return_format' => 'id',
                'show_column' => 0,
                'show_column_weight' => 1000,
                'allow_quickedit' => 0,
                'allow_bulkedit' => 0,
                'ui' => 1,
            ),
            array(
                'key' => 'field_60f9368c26a17',
                'label' => 'Title',
                'name' => 'corp_title',
                'type' => 'text',
                'instructions' => '',
                'required' => 0,
                'conditional_logic' => 0,
                'wrapper' => array(
                    'width' => '',
                    'class' => '',
                    'id' => '',
                ),
                'default_value' => '',
                'placeholder' => '',
                'prepend' => '',
                'append' => '',
                'maxlength' => '',
                'show_column' => 0,
                'show_column_sortable' => 0,
                'show_column_weight' => 1000,
                'allow_quickedit' => 0,
                'allow_bulkedit' => 0,
            ),
            array(
                'key' => 'field_60f936a326a18',
                'label' => 'Description',
                'name' => 'corp_description',
                'type' => 'text',
                'instructions' => '',
                'required' => 0,
                'conditional_logic' => 0,
                'wrapper' => array(
                    'width' => '',
                    'class' => '',
                    'id' => '',
                ),
                'default_value' => '',
                'placeholder' => '',
                'prepend' => '',
                'append' => '',
                'maxlength' => '',
                'show_column' => 0,
                'show_column_sortable' => 0,
                'show_column_weight' => 1000,
                'allow_quickedit' => 0,
                'allow_bulkedit' => 0,
            ),
            array(
                'key' => 'field_60f9350acde47',
                'label' => 'Corporate Immigration Items',
                'name' => 'corporate_immigration_items',
                'type' => 'repeater',
                'instructions' => '',
                'required' => 0,
                'conditional_logic' => 0,
                'wrapper' => array(
                    'width' => '',
                    'class' => '',
                    'id' => '',
                ),
                'collapsed' => 'field_60f9110253bee',
                'min' => 0,
                'max' => 4,
                'layout' => 'block',
                'button_label' => '',
                'sub_fields' => array(
                    array(
                        'key' => 'field_60f9350acde48',
                        'label' => 'Image',
                        'name' => 'image',
                        'type' => 'image',
                        'instructions' => '',
                        'required' => 0,
                        'conditional_logic' => 0,
                        'wrapper' => array(
                            'width' => '',
                            'class' => '',
                            'id' => '',
                        ),
                        'return_format' => '',
                        'preview_size' => 'medium',
                        'library' => '',
                        'min_width' => '',
                        'min_height' => '',
                        'min_size' => '',
                        'max_width' => '',
                        'max_height' => '',
                        'max_size' => '',
                        'mime_types' => '',
                        'show_column' => 0,
                        'show_column_weight' => 1000,
                        'allow_quickedit' => 0,
                        'allow_bulkedit' => 0,
                    ),
                    array(
                        'key' => 'field_60f9350acde49',
                        'label' => 'Title',
                        'name' => 'title',
                        'type' => 'text',
                        'instructions' => '',
                        'required' => 0,
                        'conditional_logic' => 0,
                        'wrapper' => array(
                            'width' => '',
                            'class' => '',
                            'id' => '',
                        ),
                        'default_value' => '',
                        'placeholder' => '',
                        'prepend' => '',
                        'append' => '',
                        'maxlength' => '',
                        'show_column' => 0,
                        'show_column_sortable' => 0,
                        'show_column_weight' => 1000,
                        'allow_quickedit' => 0,
                        'allow_bulkedit' => 0,
                    ),
                    array(
                        'key' => 'field_60f9350acde4a',
                        'label' => 'Description',
                        'name' => 'description',
                        'type' => 'textarea',
                        'instructions' => '',
                        'required' => 0,
                        'conditional_logic' => 0,
                        'wrapper' => array(
                            'width' => '',
                            'class' => '',
                            'id' => '',
                        ),
                        'default_value' => '',
                        'placeholder' => '',
                        'maxlength' => '',
                        'rows' => '',
                        'new_lines' => '',
                        'show_column' => 0,
                        'show_column_weight' => 1000,
                        'allow_quickedit' => 0,
                        'allow_bulkedit' => 0,
                    ),
                    array(
                        'key' => 'field_60f9350acde4b',
                        'label' => 'Link',
                        'name' => 'link',
                        'type' => 'link',
                        'instructions' => '',
                        'required' => 0,
                        'conditional_logic' => 0,
                        'wrapper' => array(
                            'width' => '',
                            'class' => '',
                            'id' => '',
                        ),
                        'return_format' => '',
                        'show_column' => 0,
                        'show_column_weight' => 1000,
                        'allow_quickedit' => 0,
                        'allow_bulkedit' => 0,
                    ),
                ),
            ),
            array(
                'key' => 'field_60f7cece0f819',
                'label' => 'Destination Services Carousel',
                'name' => 'destination_services_carousel',
                'type' => 'post_object',
                'instructions' => '',
                'required' => 0,
                'conditional_logic' => 0,
                'wrapper' => array(
                    'width' => '',
                    'class' => '',
                    'id' => '',
                ),
                'post_type' => array(
                    0 => 'page',
                ),
                'taxonomy' => '',
                'allow_null' => 0,
                'multiple' => 1,
                'return_format' => 'id',
                'show_column' => 0,
                'show_column_weight' => 1000,
                'allow_quickedit' => 0,
                'allow_bulkedit' => 0,
                'ui' => 1,
            ),
            array(
                'key' => 'field_60f936c326a19',
                'label' => 'Title',
                'name' => 'dest_title',
                'type' => 'text',
                'instructions' => '',
                'required' => 0,
                'conditional_logic' => 0,
                'wrapper' => array(
                    'width' => '',
                    'class' => '',
                    'id' => '',
                ),
                'default_value' => '',
                'placeholder' => '',
                'prepend' => '',
                'append' => '',
                'maxlength' => '',
                'show_column' => 0,
                'show_column_sortable' => 0,
                'show_column_weight' => 1000,
                'allow_quickedit' => 0,
                'allow_bulkedit' => 0,
            ),
            array(
                'key' => 'field_60f936d226a1a',
                'label' => 'Description',
                'name' => 'dest_description',
                'type' => 'text',
                'instructions' => '',
                'required' => 0,
                'conditional_logic' => 0,
                'wrapper' => array(
                    'width' => '',
                    'class' => '',
                    'id' => '',
                ),
                'default_value' => '',
                'placeholder' => '',
                'prepend' => '',
                'append' => '',
                'maxlength' => '',
                'show_column' => 0,
                'show_column_sortable' => 0,
                'show_column_weight' => 1000,
                'allow_quickedit' => 0,
                'allow_bulkedit' => 0,
            ),
            array(
                'key' => 'field_60f93518cde4c',
                'label' => 'Destination Services Items',
                'name' => 'destination_services_items',
                'type' => 'repeater',
                'instructions' => '',
                'required' => 0,
                'conditional_logic' => 0,
                'wrapper' => array(
                    'width' => '',
                    'class' => '',
                    'id' => '',
                ),
                'collapsed' => 'field_60f9110253bee',
                'min' => 0,
                'max' => 4,
                'layout' => 'block',
                'button_label' => '',
                'sub_fields' => array(
                    array(
                        'key' => 'field_60f93518cde4d',
                        'label' => 'Image',
                        'name' => 'image',
                        'type' => 'image',
                        'instructions' => '',
                        'required' => 0,
                        'conditional_logic' => 0,
                        'wrapper' => array(
                            'width' => '',
                            'class' => '',
                            'id' => '',
                        ),
                        'return_format' => 'id',
                        'preview_size' => 'medium',
                        'library' => 'all',
                        'min_width' => '',
                        'min_height' => '',
                        'min_size' => '',
                        'max_width' => '',
                        'max_height' => '',
                        'max_size' => '',
                        'mime_types' => '',
                    ),
                    array(
                        'key' => 'field_60f93518cde4e',
                        'label' => 'Title',
                        'name' => 'title',
                        'type' => 'text',
                        'instructions' => '',
                        'required' => 0,
                        'conditional_logic' => 0,
                        'wrapper' => array(
                            'width' => '',
                            'class' => '',
                            'id' => '',
                        ),
                        'default_value' => '',
                        'placeholder' => '',
                        'prepend' => '',
                        'append' => '',
                        'maxlength' => '',
                        'show_column' => 0,
                        'show_column_sortable' => 0,
                        'show_column_weight' => 1000,
                        'allow_quickedit' => 0,
                        'allow_bulkedit' => 0,
                    ),
                    array(
                        'key' => 'field_60f93518cde4f',
                        'label' => 'Description',
                        'name' => 'description',
                        'type' => 'textarea',
                        'instructions' => '',
                        'required' => 0,
                        'conditional_logic' => 0,
                        'wrapper' => array(
                            'width' => '',
                            'class' => '',
                            'id' => '',
                        ),
                        'default_value' => '',
                        'placeholder' => '',
                        'maxlength' => '',
                        'rows' => '',
                        'new_lines' => '',
                        'show_column' => 0,
                        'show_column_weight' => 1000,
                        'allow_quickedit' => 0,
                        'allow_bulkedit' => 0,
                    ),
                    array(
                        'key' => 'field_60f93518cde50',
                        'label' => 'Link',
                        'name' => 'link',
                        'type' => 'link',
                        'instructions' => '',
                        'required' => 0,
                        'conditional_logic' => 0,
                        'wrapper' => array(
                            'width' => '',
                            'class' => '',
                            'id' => '',
                        ),
                        'return_format' => '',
                        'show_column' => 0,
                        'show_column_weight' => 1000,
                        'allow_quickedit' => 0,
                        'allow_bulkedit' => 0,
                    ),
                ),
            ),
            array(
                'key' => 'field_6203f66f5950c',
                'label' => 'Country Ip',
                'name' => '',
                'type' => 'tab',
                'instructions' => '',
                'required' => 0,
                'conditional_logic' => 0,
                'wrapper' => array(
                    'width' => '',
                    'class' => '',
                    'id' => '',
                ),
                'placement' => 'top',
                'endpoint' => 0,
            ),
            array(
                'key' => 'field_6203f6965950d',
                'label' => 'Countries',
                'name' => 'country_items',
                'type' => 'repeater',
                'instructions' => '',
                'required' => 0,
                'conditional_logic' => 0,
                'wrapper' => array(
                    'width' => '',
                    'class' => '',
                    'id' => '',
                ),
                'collapsed' => '',
                'min' => 0,
                'max' => 0,
                'layout' => 'table',
                'button_label' => '',
                'sub_fields' => array(
                    array(
                        'key' => 'field_6203f6d15950e',
                        'label' => 'Country',
                        'name' => 'country',
                        'type' => 'country',
                        'instructions' => '',
                        'required' => 0,
                        'conditional_logic' => 0,
                        'wrapper' => array(
                            'width' => '',
                            'class' => '',
                            'id' => '',
                        ),
                        'choices' => 'AF : Afghanistan
    AX : Åland Islands
    AL : Albania
    DZ : Algeria
    AS : American Samoa
    AD : Andorra
    AO : Angola
    AI : Anguilla
    AQ : Antarctica
    AG : Antigua & Barbuda
    AR : Argentina
    AM : Armenia
    AW : Aruba
    AC : Ascension Island
    AU : Australia
    AT : Austria
    AZ : Azerbaijan
    BS : Bahamas
    BH : Bahrain
    BD : Bangladesh
    BB : Barbados
    BY : Belarus
    BE : Belgium
    BZ : Belize
    BJ : Benin
    BM : Bermuda
    BT : Bhutan
    BO : Bolivia
    BA : Bosnia & Herzegovina
    BW : Botswana
    BR : Brazil
    IO : British Indian Ocean Territory
    VG : British Virgin Islands
    BN : Brunei
    BG : Bulgaria
    BF : Burkina Faso
    BI : Burundi
    KH : Cambodia
    CM : Cameroon
    CA : Canada
    IC : Canary Islands
    CV : Cape Verde
    BQ : Caribbean Netherlands
    KY : Cayman Islands
    CF : Central African Republic
    EA : Ceuta & Melilla
    TD : Chad
    CL : Chile
    CN : China
    CX : Christmas Island
    CC : Cocos (Keeling) Islands
    CO : Colombia
    KM : Comoros
    CG : Congo - Brazzaville
    CD : Congo - Kinshasa
    CK : Cook Islands
    CR : Costa Rica
    CI : Côte d’Ivoire
    HR : Croatia
    CU : Cuba
    CW : Curaçao
    CY : Cyprus
    CZ : Czechia
    DK : Denmark
    DG : Diego Garcia
    DJ : Djibouti
    DM : Dominica
    DO : Dominican Republic
    EC : Ecuador
    EG : Egypt
    SV : El Salvador
    GQ : Equatorial Guinea
    ER : Eritrea
    EE : Estonia
    ET : Ethiopia
    EZ : Eurozone
    FK : Falkland Islands
    FO : Faroe Islands
    FJ : Fiji
    FI : Finland
    FR : France
    GF : French Guiana
    PF : French Polynesia
    TF : French Southern Territories
    GA : Gabon
    GM : Gambia
    GE : Georgia
    DE : Germany
    GH : Ghana
    GI : Gibraltar
    GR : Greece
    GL : Greenland
    GD : Grenada
    GP : Guadeloupe
    GU : Guam
    GT : Guatemala
    GG : Guernsey
    GN : Guinea
    GW : Guinea-Bissau
    GY : Guyana
    HT : Haiti
    HN : Honduras
    HK : Hong Kong SAR China
    HU : Hungary
    IS : Iceland
    IN : India
    ID : Indonesia
    IR : Iran
    IQ : Iraq
    IE : Ireland
    IM : Isle of Man
    IL : Israel
    IT : Italy
    JM : Jamaica
    JP : Japan
    JE : Jersey
    JO : Jordan
    KZ : Kazakhstan
    KE : Kenya
    KI : Kiribati
    XK : Kosovo
    KW : Kuwait
    KG : Kyrgyzstan
    LA : Laos
    LV : Latvia
    LB : Lebanon
    LS : Lesotho
    LR : Liberia
    LY : Libya
    LI : Liechtenstein
    LT : Lithuania
    LU : Luxembourg
    MO : Macau SAR China
    MK : Macedonia
    MG : Madagascar
    MW : Malawi
    MY : Malaysia
    MV : Maldives
    ML : Mali
    MT : Malta
    MH : Marshall Islands
    MQ : Martinique
    MR : Mauritania
    MU : Mauritius
    YT : Mayotte
    MX : Mexico
    FM : Micronesia
    MD : Moldova
    MC : Monaco
    MN : Mongolia
    ME : Montenegro
    MS : Montserrat
    MA : Morocco
    MZ : Mozambique
    MM : Myanmar (Burma)
    NA : Namibia
    NR : Nauru
    NP : Nepal
    NL : Netherlands
    NC : New Caledonia
    NZ : New Zealand
    NI : Nicaragua
    NE : Niger
    NG : Nigeria
    NU : Niue
    NF : Norfolk Island
    KP : North Korea
    MP : Northern Mariana Islands
    NO : Norway
    OM : Oman
    PK : Pakistan
    PW : Palau
    PS : Palestinian Territories
    PA : Panama
    PG : Papua New Guinea
    PY : Paraguay
    PE : Peru
    PH : Philippines
    PN : Pitcairn Islands
    PL : Poland
    PT : Portugal
    PR : Puerto Rico
    QA : Qatar
    RE : Réunion
    RO : Romania
    RU : Russia
    RW : Rwanda
    WS : Samoa
    SM : San Marino
    ST : São Tomé & Príncipe
    SA : Saudi Arabia
    SN : Senegal
    RS : Serbia
    SC : Seychelles
    SL : Sierra Leone
    SG : Singapore
    SX : Sint Maarten
    SK : Slovakia
    SI : Slovenia
    SB : Solomon Islands
    SO : Somalia
    ZA : South Africa
    GS : South Georgia & South Sandwich Islands
    KR : South Korea
    SS : South Sudan
    ES : Spain
    LK : Sri Lanka
    BL : St. Barthélemy
    SH : St. Helena
    KN : St. Kitts & Nevis
    LC : St. Lucia
    MF : St. Martin
    PM : St. Pierre & Miquelon
    VC : St. Vincent & Grenadines
    SD : Sudan
    SR : Suriname
    SJ : Svalbard & Jan Mayen
    SZ : Swaziland
    SE : Sweden
    CH : Switzerland
    SY : Syria
    TW : Taiwan
    TJ : Tajikistan
    TZ : Tanzania
    TH : Thailand
    TL : Timor-Leste
    TG : Togo
    TK : Tokelau
    TO : Tonga
    TT : Trinidad & Tobago
    TA : Tristan da Cunha
    TN : Tunisia
    TR : Turkey
    TM : Turkmenistan
    TC : Turks & Caicos Islands
    TV : Tuvalu
    UM : U.S. Outlying Islands
    VI : U.S. Virgin Islands
    UG : Uganda
    UA : Ukraine
    AE : United Arab Emirates
    GB : United Kingdom
    UN : United Nations
    US : United States
    UY : Uruguay
    UZ : Uzbekistan
    VU : Vanuatu
    VA : Vatican City
    VE : Venezuela
    VN : Vietnam
    WF : Wallis & Futuna
    EH : Western Sahara
    YE : Yemen
    ZM : Zambia
    ZW : Zimbabwe',
                        'allow_null' => 0,
                        'multiple' => 0,
                        'ui' => 1,
                        'return_format' => 'code',
                        'default_value' => '',
                        'placeholder' => 'Select a country',
                    ),
                    array(
                        'key' => 'field_6203f6f959XXf',
                        'label' => 'Corporate Phone number',
                        'name' => 'corporate_phone_number',
                        'type' => 'text',
                        'instructions' => '',
                        'required' => 0,
                        'conditional_logic' => 0,
                        'wrapper' => array(
                            'width' => '',
                            'class' => '',
                            'id' => '',
                        ),
                        'default_value' => '',
                        'placeholder' => '',
                        'prepend' => '',
                        'append' => '',
                        'maxlength' => '',
                    ),
                    array(
                        'key' => 'field_6203f71a5XX11',
                        'label' => 'Corporate Email',
                        'name' => 'corporate_email',
                        'type' => 'email',
                        'instructions' => '',
                        'required' => 0,
                        'conditional_logic' => 0,
                        'wrapper' => array(
                            'width' => '',
                            'class' => '',
                            'id' => '',
                        ),
                        'default_value' => '',
                        'placeholder' => '',
                        'prepend' => '',
                        'append' => '',
                    ),
                    array(
                        'key' => 'field_6203f6f95950f',
                        'label' => 'Sanelo number',
                        'name' => 'phone_number',
                        'type' => 'text',
                        'instructions' => '',
                        'required' => 0,
                        'conditional_logic' => 0,
                        'wrapper' => array(
                            'width' => '',
                            'class' => '',
                            'id' => '',
                        ),
                        'default_value' => '',
                        'placeholder' => '',
                        'prepend' => '',
                        'append' => '',
                        'maxlength' => '',
                    ),
                    array(
                        'key' => 'field_6203f71a59511',
                        'label' => 'Sanelo Email',
                        'name' => 'email',
                        'type' => 'email',
                        'instructions' => '',
                        'required' => 0,
                        'conditional_logic' => 0,
                        'wrapper' => array(
                            'width' => '',
                            'class' => '',
                            'id' => '',
                        ),
                        'default_value' => '',
                        'placeholder' => '',
                        'prepend' => '',
                        'append' => '',
                    ),
                  
                    // array(
                    //     'key' => 'field_6203f70959510',
                    //     'label' => 'weChat',
                    //     'name' => 'wechat',
                    //     'type' => 'text',
                    //     'instructions' => '',
                    //     'required' => 0,
                    //     'conditional_logic' => 0,
                    //     'wrapper' => array(
                    //         'width' => '',
                    //         'class' => '',
                    //         'id' => '',
                    //     ),
                    //     'default_value' => '',
                    //     'placeholder' => '',
                    //     'prepend' => '',
                    //     'append' => '',
                    //     'maxlength' => '',
                    // ),
                 
                    array(
                        'key' => 'field_6203f72159512',
                        'label' => 'Office page',
                        'name' => 'office_page',
                        'type' => 'page_link',
                        'instructions' => '',
                        'required' => 0,
                        'conditional_logic' => 0,
                        'wrapper' => array(
                            'width' => '',
                            'class' => '',
                            'id' => '',
                        ),
                        'post_type' => '',
                        'taxonomy' => '',
                        'allow_null' => 0,
                        'allow_archives' => 1,
                        'multiple' => 0,
                    ),
                ),
            ),
            array(
                'key' => 'field_620514bc015fd',
                'label' => 'Sanelo',
                'name' => '',
                'type' => 'tab',
                'instructions' => '',
                'required' => 0,
                'conditional_logic' => 0,
                'wrapper' => array(
                    'width' => '',
                    'class' => '',
                    'id' => '',
                ),
                'placement' => 'top',
                'endpoint' => 0,
            ),
            array(
                'key' => 'field_620514d2015fe',
                'label' => 'Newsbanner headline',
                'name' => 'newsbanner_headline',
                'type' => 'textarea',
                'instructions' => '',
                'required' => 0,
                'conditional_logic' => 0,
                'wrapper' => array(
                    'width' => '',
                    'class' => '',
                    'id' => '',
                ),
                'default_value' => 'If you are a corporate customer please visit the <strong> corporate section </strong> of our website by <a href="https://www.santaferelo.com/en/corporate-relocation/">clicking here</a>',
                'placeholder' => '',
                'maxlength' => '',
                'rows' => '',
                'new_lines' => '',
            ),
            array(
                'key' => 'field_62051500015ff',
                'label' => 'Tagline',
                'name' => 'tagline',
                'type' => 'text',
                'instructions' => '',
                'required' => 0,
                'conditional_logic' => 0,
                'wrapper' => array(
                    'width' => '',
                    'class' => '',
                    'id' => '',
                ),
                'default_value' => 'Megan and Christian can’t wait to see their new bedrooms after Sanelo laid out their treasured belongings, out precisely as planned',
                'placeholder' => '',
                'prepend' => '',
                'append' => '',
                'maxlength' => '',
            ),
        ),
        'location' => array(
            array(
                array(
                    'param' => 'options_page',
                    'operator' => '==',
                    'value' => 'theme-settings',
                ),
            ),
        ),
        'menu_order' => 0,
        'position' => 'normal',
        'style' => 'default',
        'label_placement' => 'top',
        'instruction_placement' => 'label',
        'hide_on_screen' => '',
        'active' => true,
        'description' => '',
    ));
    
    endif;