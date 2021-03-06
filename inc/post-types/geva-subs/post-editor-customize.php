<?
add_action('acf/init', 'geva_subs_acf_init');

function geva_subs_acf_init()
{
	if (function_exists('acf_add_local_field_group')) :

		acf_add_local_field_group(array(
			'key' => 'group_615375c778dc4',
			'title' => 'GEVA Subs',
			'fields' => array(
				array(
					'key' => 'field_615375e2f4876',
					'label' => 'First Name',
					'name' => 'first_name',
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
					'key' => 'field_6153768cf4877',
					'label' => 'Last Name',
					'name' => 'last_name',
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
					'key' => 'field_61537692f4878',
					'label' => 'Email',
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
				array(
					'key' => 'field_6153769df4879',
					'label' => 'Country',
					'name' => 'country',
					'type' => 'select',
					'instructions' => '',
					'required' => 0,
					'conditional_logic' => 0,
					'wrapper' => array(
						'width' => '',
						'class' => '',
						'id' => '',
					),
					'choices' => array(
						'AF' => 'Afghanistan',
						'AL' => 'Albania',
						'DZ' => 'Algeria',
						'AS' => 'American Samoa',
						'AD' => 'Andorra',
						'AO' => 'Angola',
						'AI' => 'Anguilla',
						'AQ' => 'Antarctica',
						'AG' => 'Antigua and Barbuda',
						'AR' => 'Argentina',
						'AM' => 'Armenia',
						'AW' => 'Aruba',
						'AU' => 'Australia',
						'AT' => 'Austria',
						'AZ' => 'Azerbaijan',
						'BS' => 'Bahamas',
						'BH' => 'Bahrain',
						'BD' => 'Bangladesh',
						'BB' => 'Barbados',
						'BY' => 'Belarus',
						'BE' => 'Belgium',
						'BZ' => 'Belize',
						'BJ' => 'Benin',
						'BM' => 'Bermuda',
						'BT' => 'Bhutan',
						'BO' => 'Bolivia, Plurinational State of',
						'BQ' => 'Bonaire, Sint Eustatius and Saba',
						'BA' => 'Bosnia and Herzegovina',
						'BW' => 'Botswana',
						'BV' => 'Bouvet Island',
						'BR' => 'Brazil',
						'IO' => 'British Indian Ocean Territory',
						'BN' => 'Brunei Darussalam',
						'BG' => 'Bulgaria',
						'BF' => 'Burkina Faso',
						'BI' => 'Burundi',
						'CV' => 'Cabo Verde',
						'KH' => 'Cambodia',
						'CM' => 'Cameroon',
						'CA' => 'Canada',
						'KY' => 'Cayman Islands',
						'CF' => 'Central African Republic',
						'TD' => 'Chad',
						'CL' => 'Chile',
						'CN' => 'China',
						'CX' => 'Christmas Island',
						'CC' => 'Cocos (Keeling) Islands',
						'CO' => 'Colombia',
						'KM' => 'Comoros',
						'CG' => 'Congo',
						'CD' => 'Congo, The Democratic Republic of the',
						'CK' => 'Cook Islands',
						'CR' => 'Costa Rica',
						'HR' => 'Croatia',
						'CU' => 'Cuba',
						'CW' => 'Cura??ao',
						'CY' => 'Cyprus',
						'CZ' => 'Czechia',
						'CI' => 'C??te d\'Ivoire',
						'DK' => 'Denmark',
						'DJ' => 'Djibouti',
						'DM' => 'Dominica',
						'DO' => 'Dominican Republic',
						'EC' => 'Ecuador',
						'EG' => 'Egypt',
						'SV' => 'El Salvador',
						'GQ' => 'Equatorial Guinea',
						'ER' => 'Eritrea',
						'EE' => 'Estonia',
						'SZ' => 'Eswatini',
						'ET' => 'Ethiopia',
						'FK' => 'Falkland Islands (Malvinas)',
						'FO' => 'Faroe Islands',
						'FJ' => 'Fiji',
						'FI' => 'Finland',
						'FR' => 'France',
						'GF' => 'French Guiana',
						'PF' => 'French Polynesia',
						'TF' => 'French Southern Territories',
						'GA' => 'Gabon',
						'GM' => 'Gambia',
						'GE' => 'Georgia',
						'DE' => 'Germany',
						'GH' => 'Ghana',
						'GI' => 'Gibraltar',
						'GR' => 'Greece',
						'GL' => 'Greenland',
						'GD' => 'Grenada',
						'GP' => 'Guadeloupe',
						'GU' => 'Guam',
						'GT' => 'Guatemala',
						'GG' => 'Guernsey',
						'GN' => 'Guinea',
						'GW' => 'Guinea-Bissau',
						'GY' => 'Guyana',
						'HT' => 'Haiti',
						'HM' => 'Heard Island and McDonald Islands',
						'VA' => 'Holy See (Vatican City State)',
						'HN' => 'Honduras',
						'HK' => 'Hong Kong',
						'HU' => 'Hungary',
						'IS' => 'Iceland',
						'IN' => 'India',
						'ID' => 'Indonesia',
						'IR' => 'Iran, Islamic Republic of',
						'IQ' => 'Iraq',
						'IE' => 'Ireland',
						'IM' => 'Isle of Man',
						'IL' => 'Israel',
						'IT' => 'Italy',
						'JM' => 'Jamaica',
						'JP' => 'Japan',
						'JE' => 'Jersey',
						'JO' => 'Jordan',
						'KZ' => 'Kazakhstan',
						'KE' => 'Kenya',
						'KI' => 'Kiribati',
						'KP' => 'Korea, Democratic People\'s Republic of',
						'KR' => 'Korea, Republic of',
						'KW' => 'Kuwait',
						'KG' => 'Kyrgyzstan',
						'LA' => 'Lao People\'s Democratic Republic',
						'LV' => 'Latvia',
						'LB' => 'Lebanon',
						'LS' => 'Lesotho',
						'LR' => 'Liberia',
						'LY' => 'Libya',
						'LI' => 'Liechtenstein',
						'LT' => 'Lithuania',
						'LU' => 'Luxembourg',
						'MO' => 'Macao',
						'MG' => 'Madagascar',
						'MW' => 'Malawi',
						'MY' => 'Malaysia',
						'MV' => 'Maldives',
						'ML' => 'Mali',
						'MT' => 'Malta',
						'MH' => 'Marshall Islands',
						'MQ' => 'Martinique',
						'MR' => 'Mauritania',
						'MU' => 'Mauritius',
						'YT' => 'Mayotte',
						'MX' => 'Mexico',
						'FM' => 'Micronesia, Federated States of',
						'MD' => 'Moldova, Republic of',
						'MC' => 'Monaco',
						'MN' => 'Mongolia',
						'ME' => 'Montenegro',
						'MS' => 'Montserrat',
						'MA' => 'Morocco',
						'MZ' => 'Mozambique',
						'MM' => 'Myanmar',
						'NA' => 'Namibia',
						'NR' => 'Nauru',
						'NP' => 'Nepal',
						'NL' => 'Netherlands',
						'NC' => 'New Caledonia',
						'NZ' => 'New Zealand',
						'NI' => 'Nicaragua',
						'NE' => 'Niger',
						'NG' => 'Nigeria',
						'NU' => 'Niue',
						'NF' => 'Norfolk Island',
						'MK' => 'North Macedonia',
						'MP' => 'Northern Mariana Islands',
						'NO' => 'Norway',
						'OM' => 'Oman',
						'PK' => 'Pakistan',
						'PW' => 'Palau',
						'PS' => 'Palestine, State of',
						'PA' => 'Panama',
						'PG' => 'Papua New Guinea',
						'PY' => 'Paraguay',
						'PE' => 'Peru',
						'PH' => 'Philippines',
						'PN' => 'Pitcairn',
						'PL' => 'Poland',
						'PT' => 'Portugal',
						'PR' => 'Puerto Rico',
						'QA' => 'Qatar',
						'RO' => 'Romania',
						'RU' => 'Russian Federation',
						'RW' => 'Rwanda',
						'RE' => 'R??union',
						'BL' => 'Saint Barth??lemy',
						'SH' => 'Saint Helena, Ascension and Tristan da Cunha',
						'KN' => 'Saint Kitts and Nevis',
						'LC' => 'Saint Lucia',
						'MF' => 'Saint Martin (French part)',
						'PM' => 'Saint Pierre and Miquelon',
						'VC' => 'Saint Vincent and the Grenadines',
						'WS' => 'Samoa',
						'SM' => 'San Marino',
						'ST' => 'Sao Tome and Principe',
						'SA' => 'Saudi Arabia',
						'SN' => 'Senegal',
						'RS' => 'Serbia',
						'SC' => 'Seychelles',
						'SL' => 'Sierra Leone',
						'SG' => 'Singapore',
						'SX' => 'Sint Maarten (Dutch part)',
						'SK' => 'Slovakia',
						'SI' => 'Slovenia',
						'SB' => 'Solomon Islands',
						'SO' => 'Somalia',
						'ZA' => 'South Africa',
						'GS' => 'South Georgia and the South Sandwich Islands',
						'SS' => 'South Sudan',
						'ES' => 'Spain',
						'LK' => 'Sri Lanka',
						'SD' => 'Sudan',
						'SR' => 'Suriname',
						'SJ' => 'Svalbard and Jan Mayen',
						'SE' => 'Sweden',
						'CH' => 'Switzerland',
						'SY' => 'Syrian Arab Republic',
						'TW' => 'Taiwan',
						'TJ' => 'Tajikistan',
						'TZ' => 'Tanzania, United Republic of',
						'TH' => 'Thailand',
						'TL' => 'Timor-Leste',
						'TG' => 'Togo',
						'TK' => 'Tokelau',
						'TO' => 'Tonga',
						'TT' => 'Trinidad and Tobago',
						'TN' => 'Tunisia',
						'TR' => 'Turkey',
						'TM' => 'Turkmenistan',
						'TC' => 'Turks and Caicos Islands',
						'TV' => 'Tuvalu',
						'UG' => 'Uganda',
						'UA' => 'Ukraine',
						'AE' => 'United Arab Emirates',
						'GB' => 'United Kingdom',
						'US' => 'United States',
						'UM' => 'United States Minor Outlying Islands',
						'UY' => 'Uruguay',
						'UZ' => 'Uzbekistan',
						'VU' => 'Vanuatu',
						'VE' => 'Venezuela, Bolivarian Republic of',
						'VN' => 'Viet Nam',
						'VG' => 'Virgin Islands, British',
						'VI' => 'Virgin Islands, U.S.',
						'WF' => 'Wallis and Futuna',
						'EH' => 'Western Sahara',
						'YE' => 'Yemen',
						'ZM' => 'Zambia',
						'ZW' => 'Zimbabwe',
						'AX' => '??land Islands',
					),
					'default_value' => '',
					'placeholder' => '',
					'prepend' => '',
					'append' => '',
					'maxlength' => '',
				),
				array(
					'key' => 'field_615376aff487a',
					'label' => 'Comment',
					'name' => 'comment',
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
			),
			'location' => array(
				array(
					array(
						'param' => 'post_type',
						'operator' => '==',
						'value' => 'geva_sub',
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
}

add_action('psfb_submit_before_redirect_successfull', 'planso_form_intercept_22914');
/**
 * intercept planso form
 */
function planso_form_intercept_22914()
{
	if ($_POST['psfb_form_id'] != '22914') return;
	$postID = wp_insert_post(wp_slash(array(
		'post_title' =>  $_POST['Vorname'] . ' - ' . $_POST['Nachname'],
		'post_status'   => 'publish',
		'post_type'     => 'geva_sub',
		'post_author'   => 0,
		'ping_status'   => get_option('default_ping_status'),
		'post_parent'   => 0,
		'menu_order'    => 0,
		'to_ping'       => '',
		'pinged'        => '',
		'post_password' => '',
		'post_excerpt'  => '',
	)));

	update_field('first_name', $_POST['Vorname'], $postID);
	update_field('last_name', $_POST['Nachname'], $postID);
	update_field('email', $_POST['E_Mail'], $postID);
	update_field('country', $_POST['Land'], $postID);
	update_field('comment', $_POST['Deine_Nachricht__maximal_1000_Zeichen_'], $postID);
}
