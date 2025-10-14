<?php 

// if( function_exists('acf_add_local_field_group') ):

//     acf_add_local_field_group(array(
//         'key' => 'group_5b588dd8a8319',
//         'title' => '(Offices) Header Map',
//         'fields' => array(
//             array(
//                 'key' => 'field_5b59ae22f70f1',
//                 'label' => 'Google Map',
//                 'name' => 'google_map',
//                 'type' => 'column',
//                 'instructions' => '',
//                 'required' => 0,
//                 'conditional_logic' => 0,
//                 'wrapper' => array(
//                     'width' => '',
//                     'class' => '',
//                     'id' => '',
//                 ),
//                 'column-type' => '1_2',
//             ),
//             array(
//                 'key' => 'field_5b588e0db929e',
//                 'label' => '',
//                 'name' => 'map',
//                 'type' => 'google_map',
//                 'instructions' => '',
//                 'required' => 0,
//                 'conditional_logic' => 0,
//                 'wrapper' => array(
//                     'width' => '',
//                     'class' => '',
//                     'id' => '',
//                 ),
//                 'center_lat' => '',
//                 'center_lng' => '',
//                 'zoom' => '',
//                 'height' => '',
//             ),
//             array(
//                 'key' => 'field_61b06cef11544',
//                 'label' => 'Map Image Replacement',
//                 'name' => '',
//                 'type' => 'column',
//                 'instructions' => '',
//                 'required' => 0,
//                 'conditional_logic' => 0,
//                 'wrapper' => array(
//                     'width' => '',
//                     'class' => '',
//                     'id' => '',
//                 ),
//                 'column-type' => '1_2',
//             ),
//             array(
//                 'key' => 'field_61b06d2311545',
//                 'label' => 'Map Image',
//                 'name' => 'map_image',
//                 'type' => 'image',
//                 'instructions' => '',
//                 'required' => 0,
//                 'conditional_logic' => 0,
//                 'wrapper' => array(
//                     'width' => '',
//                     'class' => '',
//                     'id' => '',
//                 ),
//                 'return_format' => 'url',
//                 'preview_size' => 'medium',
//                 'library' => 'all',
//                 'min_width' => '',
//                 'min_height' => '',
//                 'min_size' => '',
//                 'max_width' => '',
//                 'max_height' => '',
//                 'max_size' => '',
//                 'mime_types' => '',
//             ),
//             array(
//                 'key' => 'field_5b59ae36f70f2',
//                 'label' => 'Contact Information',
//                 'name' => '',
//                 'type' => 'column',
//                 'instructions' => '',
//                 'required' => 0,
//                 'conditional_logic' => 0,
//                 'wrapper' => array(
//                     'width' => '',
//                     'class' => '',
//                     'id' => '',
//                 ),
//                 'column-type' => '1_1',
//             ),
//             array(
//                 'key' => 'field_5b59aee77434d',
//                 'label' => '',
//                 'name' => '',
//                 'type' => 'message',
//                 'instructions' => '',
//                 'required' => 0,
//                 'conditional_logic' => 0,
//                 'wrapper' => array(
//                     'width' => '',
//                     'class' => '',
//                     'id' => '',
//                 ),
//                 'message' => '<h3>Telephones:</h3>',
//                 'new_lines' => 'wpautop',
//                 'esc_html' => 0,
//             ),
//             array(
//                 'key' => 'field_5b59afc86f3fb',
//                 'label' => 'General Enquires',
//                 'name' => 'general_enquires',
//                 'type' => 'text',
//                 'instructions' => '',
//                 'required' => 0,
//                 'conditional_logic' => 0,
//                 'wrapper' => array(
//                     'width' => '33%',
//                     'class' => '',
//                     'id' => '',
//                 ),
//                 'default_value' => '',
//                 'placeholder' => '',
//                 'prepend' => '',
//                 'append' => '',
//                 'maxlength' => '',
//             ),
//             array(
//                 'key' => 'field_5b59afdb6f3fc',
//                 'label' => 'Sales',
//                 'name' => 'sales',
//                 'type' => 'text',
//                 'instructions' => '',
//                 'required' => 0,
//                 'conditional_logic' => 0,
//                 'wrapper' => array(
//                     'width' => '33%',
//                     'class' => '',
//                     'id' => '',
//                 ),
//                 'default_value' => '',
//                 'placeholder' => '',
//                 'prepend' => '',
//                 'append' => '',
//                 'maxlength' => '',
//             ),
//             array(
//                 'key' => 'field_5b59d30fcc56c',
//                 'label' => 'Fax',
//                 'name' => 'fax_1',
//                 'type' => 'text',
//                 'instructions' => '',
//                 'required' => 0,
//                 'conditional_logic' => 0,
//                 'wrapper' => array(
//                     'width' => '33',
//                     'class' => '',
//                     'id' => '',
//                 ),
//                 'default_value' => '',
//                 'placeholder' => '',
//                 'prepend' => '',
//                 'append' => '',
//                 'maxlength' => '',
//             ),
//             array(
//                 'key' => 'field_5b59ae54f70f4',
//                 'label' => 'Email',
//                 'name' => 'email',
//                 'type' => 'text',
//                 'instructions' => '',
//                 'required' => 0,
//                 'conditional_logic' => 0,
//                 'wrapper' => array(
//                     'width' => '',
//                     'class' => '',
//                     'id' => '',
//                 ),
//                 'default_value' => '',
//                 'placeholder' => '',
//                 'prepend' => '',
//                 'append' => '',
//                 'maxlength' => '',
//             ),
//             array(
//                 'key' => 'field_60fa7675e4be2',
//                 'label' => 'Address',
//                 'name' => 'address',
//                 'type' => 'text',
//                 'instructions' => '',
//                 'required' => 0,
//                 'conditional_logic' => 0,
//                 'wrapper' => array(
//                     'width' => '',
//                     'class' => '',
//                     'id' => '',
//                 ),
//                 'default_value' => '',
//                 'placeholder' => '',
//                 'prepend' => '',
//                 'append' => '',
//                 'maxlength' => '',
//                 'show_column' => 0,
//                 'show_column_sortable' => 0,
//                 'show_column_weight' => 1000,
//                 'allow_quickedit' => 0,
//                 'allow_bulkedit' => 0,
//             ),
//             array(
//                 'key' => 'field_618b925a54ada',
//                 'label' => 'Contact Background',
//                 'name' => 'contact_background',
//                 'type' => 'color_picker',
//                 'instructions' => '',
//                 'required' => 0,
//                 'conditional_logic' => 0,
//                 'wrapper' => array(
//                     'width' => '',
//                     'class' => '',
//                     'id' => '',
//                 ),
//                 'default_value' => '#ed1c24',
//             ),
//             array(
//                 'key' => 'field_614b4869ddc04',
//                 'label' => 'Country',
//                 'name' => 'country',
//                 'type' => 'country',
//                 'instructions' => '',
//                 'required' => 0,
//                 'conditional_logic' => 0,
//                 'wrapper' => array(
//                     'width' => '',
//                     'class' => '',
//                     'id' => '',
//                 ),
//                 'choices' => 'AF : Afghanistan
//                     AX : Åland Islands
//                     AL : Albania
//                     DZ : Algeria
//                     AS : American Samoa
//                     AD : Andorra
//                     AO : Angola
//                     AI : Anguilla
//                     AQ : Antarctica
//                     AG : Antigua & Barbuda
//                     AR : Argentina
//                     AM : Armenia
//                     AW : Aruba
//                     AC : Ascension Island
//                     AU : Australia
//                     AT : Austria
//                     AZ : Azerbaijan
//                     BS : Bahamas
//                     BH : Bahrain
//                     BD : Bangladesh
//                     BB : Barbados
//                     BY : Belarus
//                     BE : Belgium
//                     BZ : Belize
//                     BJ : Benin
//                     BM : Bermuda
//                     BT : Bhutan
//                     BO : Bolivia
//                     BA : Bosnia & Herzegovina
//                     BW : Botswana
//                     BR : Brazil
//                     IO : British Indian Ocean Territory
//                     VG : British Virgin Islands
//                     BN : Brunei
//                     BG : Bulgaria
//                     BF : Burkina Faso
//                     BI : Burundi
//                     KH : Cambodia
//                     CM : Cameroon
//                     CA : Canada
//                     IC : Canary Islands
//                     CV : Cape Verde
//                     BQ : Caribbean Netherlands
//                     KY : Cayman Islands
//                     CF : Central African Republic
//                     EA : Ceuta & Melilla
//                     TD : Chad
//                     CL : Chile
//                     CN : China
//                     CX : Christmas Island
//                     CC : Cocos (Keeling) Islands
//                     CO : Colombia
//                     KM : Comoros
//                     CG : Congo - Brazzaville
//                     CD : Congo - Kinshasa
//                     CK : Cook Islands
//                     CR : Costa Rica
//                     CI : Côte d’Ivoire
//                     HR : Croatia
//                     CU : Cuba
//                     CW : Curaçao
//                     CY : Cyprus
//                     CZ : Czechia
//                     DK : Denmark
//                     DG : Diego Garcia
//                     DJ : Djibouti
//                     DM : Dominica
//                     DO : Dominican Republic
//                     EC : Ecuador
//                     EG : Egypt
//                     SV : El Salvador
//                     GQ : Equatorial Guinea
//                     ER : Eritrea
//                     EE : Estonia
//                     ET : Ethiopia
//                     EZ : Eurozone
//                     FK : Falkland Islands
//                     FO : Faroe Islands
//                     FJ : Fiji
//                     FI : Finland
//                     FR : France
//                     GF : French Guiana
//                     PF : French Polynesia
//                     TF : French Southern Territories
//                     GA : Gabon
//                     GM : Gambia
//                     GE : Georgia
//                     DE : Germany
//                     GH : Ghana
//                     GI : Gibraltar
//                     GR : Greece
//                     GL : Greenland
//                     GD : Grenada
//                     GP : Guadeloupe
//                     GU : Guam
//                     GT : Guatemala
//                     GG : Guernsey
//                     GN : Guinea
//                     GW : Guinea-Bissau
//                     GY : Guyana
//                     HT : Haiti
//                     HN : Honduras
//                     HK : Hong Kong SAR China
//                     HU : Hungary
//                     IS : Iceland
//                     IN : India
//                     ID : Indonesia
//                     IR : Iran
//                     IQ : Iraq
//                     IE : Ireland
//                     IM : Isle of Man
//                     IL : Israel
//                     IT : Italy
//                     JM : Jamaica
//                     JP : Japan
//                     JE : Jersey
//                     JO : Jordan
//                     KZ : Kazakhstan
//                     KE : Kenya
//                     KI : Kiribati
//                     XK : Kosovo
//                     KW : Kuwait
//                     KG : Kyrgyzstan
//                     LA : Laos
//                     LV : Latvia
//                     LB : Lebanon
//                     LS : Lesotho
//                     LR : Liberia
//                     LY : Libya
//                     LI : Liechtenstein
//                     LT : Lithuania
//                     LU : Luxembourg
//                     MO : Macau SAR China
//                     MK : Macedonia
//                     MG : Madagascar
//                     MW : Malawi
//                     MY : Malaysia
//                     MV : Maldives
//                     ML : Mali
//                     MT : Malta
//                     MH : Marshall Islands
//                     MQ : Martinique
//                     MR : Mauritania
//                     MU : Mauritius
//                     YT : Mayotte
//                     MX : Mexico
//                     FM : Micronesia
//                     MD : Moldova
//                     MC : Monaco
//                     MN : Mongolia
//                     ME : Montenegro
//                     MS : Montserrat
//                     MA : Morocco
//                     MZ : Mozambique
//                     MM : Myanmar (Burma)
//                     NA : Namibia
//                     NR : Nauru
//                     NP : Nepal
//                     NL : Netherlands
//                     NC : New Caledonia
//                     NZ : New Zealand
//                     NI : Nicaragua
//                     NE : Niger
//                     NG : Nigeria
//                     NU : Niue
//                     NF : Norfolk Island
//                     KP : North Korea
//                     MP : Northern Mariana Islands
//                     NO : Norway
//                     OM : Oman
//                     PK : Pakistan
//                     PW : Palau
//                     PS : Palestinian Territories
//                     PA : Panama
//                     PG : Papua New Guinea
//                     PY : Paraguay
//                     PE : Peru
//                     PH : Philippines
//                     PN : Pitcairn Islands
//                     PL : Poland
//                     PT : Portugal
//                     PR : Puerto Rico
//                     QA : Qatar
//                     RE : Réunion
//                     RO : Romania
//                     RU : Russia
//                     RW : Rwanda
//                     WS : Samoa
//                     SM : San Marino
//                     ST : São Tomé & Príncipe
//                     SA : Saudi Arabia
//                     SN : Senegal
//                     RS : Serbia
//                     SC : Seychelles
//                     SL : Sierra Leone
//                     SG : Singapore
//                     SX : Sint Maarten
//                     SK : Slovakia
//                     SI : Slovenia
//                     SB : Solomon Islands
//                     SO : Somalia
//                     ZA : South Africa
//                     GS : South Georgia & South Sandwich Islands
//                     KR : South Korea
//                     SS : South Sudan
//                     ES : Spain
//                     LK : Sri Lanka
//                     BL : St. Barthélemy
//                     SH : St. Helena
//                     KN : St. Kitts & Nevis
//                     LC : St. Lucia
//                     MF : St. Martin
//                     PM : St. Pierre & Miquelon
//                     VC : St. Vincent & Grenadines
//                     SD : Sudan
//                     SR : Suriname
//                     SJ : Svalbard & Jan Mayen
//                     SZ : Swaziland
//                     SE : Sweden
//                     CH : Switzerland
//                     SY : Syria
//                     TW : Taiwan
//                     TJ : Tajikistan
//                     TZ : Tanzania
//                     TH : Thailand
//                     TL : Timor-Leste
//                     TG : Togo
//                     TK : Tokelau
//                     TO : Tonga
//                     TT : Trinidad & Tobago
//                     TA : Tristan da Cunha
//                     TN : Tunisia
//                     TR : Turkey
//                     TM : Turkmenistan
//                     TC : Turks & Caicos Islands
//                     TV : Tuvalu
//                     UM : U.S. Outlying Islands
//                     VI : U.S. Virgin Islands
//                     UG : Uganda
//                     UA : Ukraine
//                     AE : United Arab Emirates
//                     GB : United Kingdom
//                     UN : United Nations
//                     US : United States
//                     UY : Uruguay
//                     UZ : Uzbekistan
//                     VU : Vanuatu
//                     VA : Vatican City
//                     VE : Venezuela
//                     VN : Vietnam
//                     WF : Wallis & Futuna
//                     EH : Western Sahara
//                     YE : Yemen
//                     ZM : Zambia
//                     ZW : Zimbabwe',
//                 'allow_null' => 1,
//                 'multiple' => 0,
//                 'ui' => 1,
//                 'return_format' => 'code',
//                 'default_value' => '',
//                 'placeholder' => 'Select a country',
//             ),
//         ),
//         'location' => array(
//             array(
//                 array(
//                     'param' => 'post_type',
//                     'operator' => '==',
//                     'value' => 'offices',
//                 ),
//             ),
//         ),
//         'menu_order' => 1,
//         'position' => 'normal',
//         'style' => 'default',
//         'label_placement' => 'top',
//         'instruction_placement' => 'label',
//         'hide_on_screen' => array(
//             0 => 'the_content',
//         ),
//         'active' => true,
//         'description' => '',
//     ));
    
// endif;

if( function_exists('acf_add_local_field_group') ):

    acf_add_local_field_group(array(
        'key' => 'group_5b588dd8a8319',
        'title' => '(Offices) Header Map',
        'fields' => array(
            // array(
            //     'key' => 'field_5b59ae22f70f1',
            //     'label' => '',
            //     'name' => '',
            //     'type' => 'column',
            //     'instructions' => '',
            //     'required' => 0,
            //     'conditional_logic' => 0,
            //     'wrapper' => array(
            //         'width' => '',
            //         'class' => '',
            //         'id' => '',
            //     ),
            //     'column-type' => '1_2',
            // ),
            array(
                'key' => 'field_5b588e0db929e',
                'label' => '',
                'name' => 'map',
                'type' => 'google_map',
                'instructions' => '',
                'required' => 0,
                'conditional_logic' => 0,
                'wrapper' => array(
                    'width' => '100%',
                    'class' => '',
                    'id' => '',
                ),
                'center_lat' => '',
                'center_lng' => '',
                'zoom' => '',
                'height' => '',
            ),
            array(
				'key' => 'field_64b726bec0eee',
				'label' => 'Map URL',
				'name' => 'map_url',
				'aria-label' => '',
				'type' => 'textarea',
				'instructions' => '',
				'required' => 0,
				'conditional_logic' => 0,
				'wrapper' => array(
					'width' => '100',
					'class' => '',
					'id' => '',
				),
				'default_value' => '',
				'placeholder' => '',
			),
            // array(
            //     'key' => 'field_5b59ae36f70f2',
            //     'label' => '',
            //     'name' => '',
            //     'type' => 'column',
            //     'instructions' => '',
            //     'required' => 0,
            //     'conditional_logic' => 0,
            //     'wrapper' => array(
            //         'width' => '',
            //         'class' => '',
            //         'id' => '',
            //     ),
            //     'column-type' => '1_2',
            // ),
            array(
                'key' => 'field_5b59aee77434d',
                'label' => '',
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
                'message' => '<b>Telephones:</b>',
                'new_lines' => 'wpautop',
                'esc_html' => 0,
            ),
            array(
                'key' => 'field_5b59afc86f3fb',
                'label' => 'General Enquires',
                'name' => 'general_enquires',
                'type' => 'text',
                'instructions' => '',
                'required' => 0,
                'conditional_logic' => 0,
                'wrapper' => array(
                    'width' => '25',
                    'class' => '',
                    'id' => '',
                ),
                'default_value' => '',
                'maxlength' => '',
                'placeholder' => '',
                'prepend' => '',
                'append' => '',
            ),
            array(
                'key' => 'field_5b59afdb6f3fc',
                'label' => 'Sales',
                'name' => 'sales',
                'type' => 'text',
                'instructions' => '',
                'required' => 0,
                'conditional_logic' => 0,
                'wrapper' => array(
                    'width' => '25',
                    'class' => '',
                    'id' => '',
                ),
                'default_value' => '',
                'maxlength' => '',
                'placeholder' => '',
                'prepend' => '',
                'append' => '',
            ),
            array(
                'key' => 'field_5b59d30fcc56c',
                'label' => 'Fax',
                'name' => 'fax_1',
                'type' => 'text',
                'instructions' => '',
                'required' => 0,
                'conditional_logic' => 0,
                'wrapper' => array(
                    'width' => '25',
                    'class' => '',
                    'id' => '',
                ),
                'default_value' => '',
                'maxlength' => '',
                'placeholder' => '',
                'prepend' => '',
                'append' => '',
            ),
            array(
                'key' => 'field_5b59ae54f70f4',
                'label' => 'Email',
                'name' => 'email',
                'type' => 'text',
                'instructions' => '',
                'required' => 0,
                'conditional_logic' => 0,
                'wrapper' => array(
                    'width' => '25',
                    'class' => '',
                    'id' => '',
                ),
                'default_value' => '',
                'maxlength' => '',
                'placeholder' => '',
                'prepend' => '',
                'append' => '',
            ),
            array(
                'key' => 'field_5b59ae54f70f4',
                'label' => 'Badge Widget',
                'name' => 'badge_widget',
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
                'maxlength' => '',
                'placeholder' => '',
                'prepend' => '',
                'append' => '',
            ),

            array(
                'key' => 'field_63ce860bb641f',
                'label' => 'Conumer General Enquires',
                'name' => 'general_enquires2',
                'type' => 'text',
                'instructions' => '',
                'required' => 0,
                'conditional_logic' => 0,
                'wrapper' => array(
                    'width' => '25',
                    'class' => '',
                    'id' => '',
                ),
                'default_value' => '',
                'maxlength' => '',
                'placeholder' => '',
                'prepend' => '',
                'append' => '',
            ),
            array(
                'key' => 'field_63ce841e55cc5',
                'label' => 'Consumer Sales No',
                'name' => 'sales2',
                'type' => 'text',
                'instructions' => '',
                'required' => 0,
                'conditional_logic' => 0,
                'wrapper' => array(
                    'width' => '25',
                    'class' => '',
                    'id' => '',
                ),
                'default_value' => '',
                'maxlength' => '',
                'placeholder' => '',
                'prepend' => '',
                'append' => '',
            ),
            array(
                'key' => 'field_63ce844555cc6',
                'label' => 'Consumer Fax No.',
                'name' => 'fax2',
                'type' => 'text',
                'instructions' => '',
                'required' => 0,
                'conditional_logic' => 0,
                'wrapper' => array(
                    'width' => '25',
                    'class' => '',
                    'id' => '',
                ),
                'default_value' => '',
                'maxlength' => '',
                'placeholder' => '',
                'prepend' => '',
                'append' => '',
            ),
            array(
                'key' => 'field_63ce846e55cc8',
                'label' => 'Consumer Email',
                'name' => 'email2',
                'type' => 'text',
                'instructions' => '',
                'required' => 0,
                'conditional_logic' => 0,
                'wrapper' => array(
                    'width' => '25',
                    'class' => '',
                    'id' => '',
                ),
                'default_value' => '',
                'maxlength' => '',
                'placeholder' => '',
                'prepend' => '',
                'append' => '',
            ),
            array(
                'key' => 'field_60fa7675e4be2',
                'label' => 'Address',
                'name' => 'address',
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
                'key' => 'field_614b4869ddc04',
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
                'allow_null' => 1,
                'multiple' => 0,
                'ui' => 1,
                'return_format' => 'code',
                'default_value' => '',
                'placeholder' => 'Select a country',
            ),
        ),
        'location' => array(
            array(
                array(
                    'param' => 'post_type',
                    'operator' => '==',
                    'value' => 'offices',
                ),
            ),
        ),
        'menu_order' => 0,
        'position' => 'acf_after_title',
        'style' => 'default',
        'label_placement' => 'top',
        'instruction_placement' => 'label',
        'hide_on_screen' => array(
            0 => 'the_content',
        ),
        'active' => true,
        'description' => '',
        'show_in_rest' => 0,
    ));
    
    endif;	