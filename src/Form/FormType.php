<?php

namespace App\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\BirthdayType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\CountryType;
use Symfony\Component\Form\Extension\Core\Type\EmailType;
use Symfony\Component\Form\Extension\Core\Type\FileType;
use Symfony\Component\Form\Extension\Core\Type\HiddenType;
use Symfony\Component\Form\Extension\Core\Type\LanguageType;
use Symfony\Component\Form\Extension\Core\Type\PasswordType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class FormType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('user_name', TextType::class)
            ->add('password', PasswordType::class)
            ->add('name', TextType::class)
            ->add('last_name', TextType::class)
            ->add('email', EmailType::class)
            ->add('birthday', BirthdayType::class)
            ->add('sex', ChoiceType::class, array('choices'=>[
                'Male'=>'male',
                'Female'=>'female'
                ]))
            ->add('avatar', FileType::class)
            ->add('language', LanguageType::class)
             ->add('origin_country', ChoiceType::class, array(
                'choices' =>[
                        
                        'Afghanistan' => 'Afghanistan',
                        'Aland Islands' => 'Aland Islands',
                        'Albania' => 'Albania',
                        'Algeria' => 'Algeria',
                        'American Samoa' => 'American Samoa',
                        'Andorra' => 'Andorra',
                        'Angola' => 'Angola',
                        'Anguilla' => 'Anguilla',
                        'Antarctica' => 'Antarctica',
                        'Antigua And Barbuda' => 'Antigua And Barbuda',
                        'Argentina' => 'Argentina',
                        'Armenia' => 'Armenia',
                        'Aruba' => 'Aruba',
                        'Australia' => 'Australia',
                        'Austria' => 'Austria',
                        'Azerbaijan' => 'Azerbaijan',
                        'Bahamas' => 'Bahamas',
                        'Bahrain' => 'Bahrain',
                        'Bangladesh' => 'Bangladesh',
                        'Barbados' => 'Barbados',
                        'Belarus' => 'Belarus',
                        'Belgium' => 'Belgium',
                        'Belize' => 'Belize',
                        'Benin' => 'Benin',
                        'Bermuda' => 'Bermuda',
                        'Bhutan' => 'Bhutan',
                        'Bolivia' => 'Bolivia',
                        'Bosnia And Herzegovina' => 'Bosnia And Herzegovina',
                        'Botswana' => 'Botswana',
                        'Bouvet Island' => 'Bouvet Island',
                        'Brazil' => 'Brazil',
                        'British Indian Ocean Territory' => 'British Indian Ocean Territory',
                        'Brunei Darussalam' => 'Brunei Darussalam',
                        'Bulgaria' => 'Bulgaria',
                        'Burkina Faso' => 'Burkina Faso',
                        'Burundi' => 'Burundi',
                        'Cambodia' => 'Cambodia',
                        'Cameroon' => 'Cameroon',
                        'Canada' => 'Canada',
                        'Cape Verde' => 'Cape Verde',
                        'Cayman Islands' => 'Cayman Islands',
                        'Central African Republic' => 'Central African Republic',
                        'Chad' => 'Chad',
                        'Chile' => 'Chile',
                        'China' => 'China',
                        'Christmas Island' => 'Christmas Island',
                        'Cocos (Keeling) Islands' => 'Cocos (Keeling) Islands',
                        'Colombia' => 'Colombia',
                        'Comoros' => 'Comoros',
                        'Congo' => 'Congo',
                        'Congo Democratic Republic' => 'Congo, Democratic Republic',
                        'Cook Islands' => 'Cook Islands',
                        'Costa Rica' => 'Costa Rica',
                        'Cote D\'Ivoire' => 'Cote D\Ivoire',
                        'Croatia' => 'Croatia',
                        'Cuba' => 'Cuba',
                        'Cyprus' => 'Cyprus',
                        'Czech Republic' => 'Czech Republic',
                        'Denmark' => 'Denmark',
                        'Djibouti' => 'Djibouti',
                        'Dominica' => 'Dominica',
                        'Dominican Republic' => 'Dominican Republic',
                        'Ecuador' => 'Ecuador',
                        'Egypt' => 'Egypt',
                        'El Salvador' => 'El Salvador',
                        'Equatorial Guinea' => 'Equatorial Guinea',
                        'Eritrea' => 'Eritrea',
                        'Estonia' => 'Estonia',
                        'Ethiopia' => 'Ethiopia',
                        'Falkland Islands (Malvinas)' => 'Falkland Islands (Malvinas)',
                        'Faroe Islands' => 'Faroe Islands',
                        'Fiji' => 'Fiji',
                        'Finland' => 'Finland',
                        'France' => 'France',
                        'French Guiana' => 'French Guiana',
                        'French Polynesia' => 'French Polynesia',
                        'French Southern Territories' => 'French Southern Territories',
                        'Gabon' => 'Gabon',
                        'Gambia' => 'Gambia',
                        'Georgia' => 'Georgia',
                        'Germany' => 'Germany',
                        'Ghana' => 'Ghana',
                        'Gibraltar' => 'Gibraltar',
                        'Greece' => 'Greece',
                        'Greenland' => 'Greenland',
                        'Grenada' => 'Grenada',
                        'Guadeloupe' => 'Guadeloupe',
                        'Guam' => 'Guam',
                        'Guatemala' => 'Guatemala',
                        'Guernsey' => 'Guernsey',
                        'Guinea' => 'Guinea',
                        'Guinea-Bissau' => 'Guinea-Bissau',
                        'Guyana' => 'Guyana',
                        'Haiti' => 'Haiti',
                        'Heard Island & Mcdonald Islands' => 'Heard Island & Mcdonald Islands',
                        'Holy See (Vatican City State)' => 'Holy See (Vatican City State)',
                        'Honduras' => 'Honduras',
                        'Hong Kong' => 'Hong Kong',
                        'Hungary' => 'Hungary',
                        'Iceland' => 'Iceland',
                        'India' => 'India',
                        'Indonesia' => 'Indonesia',
                        'Iran Islamic Republic Of' => 'Iran, Islamic Republic Of',
                        'Iraq' => 'Iraq',
                        'Ireland' => 'Ireland',
                        'Isle Of Man' => 'Isle Of Man',
                        'Israel' => 'Israel',
                        'Italy' => 'Italy',
                        'Jamaica' => 'Jamaica',
                        'Japan' => 'Japan',
                        'Jersey' => 'Jersey',
                        'Jordan' => 'Jordan',
                        'Kazakhstan' => 'Kazakhstan',
                        'Kenya' => 'Kenya',
                        'Kiribati' => 'Kiribati',
                        'Korea' => 'Korea',
                        'Kuwait' => 'Kuwait',
                        'Kyrgyzstan' => 'Kyrgyzstan',
                        'Laos' => 'Laos',
                        'Latvia' => 'Latvia',
                        'Lebanon' => 'Lebanon',
                        'Lesotho' => 'Lesotho',
                        'Liberia' => 'Liberia',
                        'Libyan Arab Jamahiriya' => 'Libyan Arab Jamahiriya',
                        'Liechtenstein' => 'Liechtenstein',
                        'Lithuania' => 'Lithuania',
                        'Luxembourg' => 'Luxembourg',
                        'Macao' => 'Macao',
                        'Macedonia' => 'Macedonia',
                        'Madagascar' => 'Madagascar',
                        'Malawi' => 'Malawi',
                        'Malaysia' => 'Malaysia',
                        'Maldives' => 'Maldives',
                        'Mali' => 'Mali',
                        'Malta' => 'Malta',
                        'Marshall Islands' => 'Marshall Islands',
                        'Martinique' => 'Martinique',
                        'Mauritania' => 'Mauritania',
                        'Mauritius' => 'Mauritius',
                        'Mayotte' => 'Mayotte',
                        'Mexico' => 'Mexico',
                        'Micronesia Federated States Of' => 'Micronesia, Federated States Of',
                        'Moldova' => 'Moldova',
                        'Monaco' => 'Monaco',
                        'Mongolia' => 'Mongolia',
                        'Montenegro' => 'Montenegro',
                        'Montserrat' => 'Montserrat',
                        'Morocco' => 'Morocco',
                        'Mozambique' => 'Mozambique',
                        'Myanmar' => 'Myanmar',
                        'Namibia' => 'Namibia',
                        'Nauru' => 'Nauru',
                        'Nepal' => 'Nepal',
                        'Netherlands' => 'Netherlands',
                        'Netherlands Antilles' => 'Netherlands Antilles',
                        'New Caledonia' => 'New Caledonia',
                        'New Zealand' => 'New Zealand',
                        'Nicaragua' => 'Nicaragua',
                        'Niger' => 'Niger',
                        'Nigeria' => 'Nigeria',
                        'Niue' => 'Niue',
                        'Norfolk Island' => 'Norfolk Island',
                        'Northern Mariana Islands' => 'Northern Mariana Islands',
                        'Norway' => 'Norway',
                        'Oman' => 'Oman',
                        'Pakistan' => 'Pakistan',
                        'Palau' => 'Palau',
                        'Palestinian Territory ' => 'Palestinian Territory',
                        'Panama' => 'Panama',
                        'Papua New Guinea' => 'Papua New Guinea',
                        'Paraguay' => 'Paraguay',
                        'Peru' => 'Peru',
                        'Philippines' => 'Philippines',
                        'Pitcairn' => 'Pitcairn',
                        'Poland' => 'Poland',
                        'Portugal' => 'Portugal',
                        'Puerto Rico' => 'Puerto Rico',
                        'Qatar' => 'Qatar',
                        'Reunion' => 'Reunion',
                        'Romania' => 'Romania',
                        'Russian Federation' => 'Russian Federation',
                        'Rwanda' => 'Rwanda',
                        'Saint Barthelemy' => 'Saint Barthelemy',
                        'Saint Helena' => 'Saint Helena',
                        'Saint Kitts And Nevis' => 'Saint Kitts And Nevis',
                        'Saint Lucia' => 'Saint Lucia',
                        'Saint Martin' => 'Saint Martin',
                        'Saint Pierre And Miquelon' => 'Saint Pierre And Miquelon',
                        'Saint Vincent And Grenadines' => 'Saint Vincent And Grenadines',
                        'Samoa' => 'Samoa',
                        'San Marino' => 'San Marino',
                        'Sao Tome And Principe' => 'Sao Tome And Principe',
                        'Saudi Arabia' => 'Saudi Arabia',
                        'Senegal' => 'Senegal',
                        'Serbia' => 'Serbia',
                        'Seychelles' => 'Seychelles',
                        'Sierra Leone' => 'Sierra Leone',
                        'Singapore' => 'Singapore',
                        'Slovakia' => 'Slovakia',
                        'Slovenia' => 'Slovenia',
                        'Solomon Islands' => 'Solomon Islands',
                        'Somalia' => 'Somalia',
                        'South Africa' => 'South Africa',
                        'South Georgia And Sandwich Isl.' => 'South Georgia And Sandwich Isl.',
                        'Spain' => 'Spain',
                        'Sri Lanka' => 'Sri Lanka',
                        'Sudan' => 'Sudan',
                        'Suriname' => 'Suriname',
                        'Svalbard And Jan Mayen' => 'Svalbard And Jan Mayen',
                        'Swaziland' => 'Swaziland',
                        'Sweden' => 'Sweden',
                        'Switzerland' => 'Switzerland',
                        'Syrian Arab Republic' => 'Syrian Arab Republic',
                        'Taiwan' => 'Taiwan',
                        'Tajikistan' => 'Tajikistan',
                        'Tanzania' => 'Tanzania',
                        'Thailand' => 'Thailand',
                        'Timor-Leste' => 'Timor-Leste',
                        'Togo' => 'Togo',
                        'Tokelau' => 'Tokelau',
                        'Tonga' => 'Tonga',
                        'Trinidad And Tobago' => 'Trinidad And Tobago',
                        'Tunisia' => 'Tunisia',
                        'Turkey' => 'Turkey',
                        'Turkmenistan' => 'Turkmenistan',
                        'Turks And Caicos Islands' => 'Turks And Caicos Islands',
                        'Tuvalu' => 'Tuvalu',
                        'Uganda' => 'Uganda',
                        'Ukraine' => 'Ukraine',
                        'United Arab Emirates' => 'United Arab Emirates',
                        'United Kingdom' => 'United Kingdom',
                        'United States of America' => 'United States of America',
                        'United States Outlying Islands' => 'United States Outlying Islands',
                        'Uruguay' => 'Uruguay',
                        'Uzbekistan' => 'Uzbekistan',
                        'Vanuatu' => 'Vanuatu',
                        'Venezuela' => 'Venezuela',
                        'Viet Nam' => 'Viet Nam',
                        'Virgin Islands British' => 'Virgin Islands, British',
                        'Virgin Islands U.S.' => 'Virgin Islands, U.S.',
                        'Wallis And Futuna' => 'Wallis And Futuna',
                        'Western Sahara' => 'Western Sahara',
                        'Yemen' => 'Yemen',
                        'Zambia' => 'Zambia',
                        'Zimbabwe' => 'Zimbabwe',
                    ]
                ))
            ->add('active', HiddenType::class)
            ->add('role', HiddenType::class)
                       
            ->getForm()                  
        ;
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            // uncomment if you want to bind to a class
            //'data_class' => Form::class,
        ));
    }
    
}


