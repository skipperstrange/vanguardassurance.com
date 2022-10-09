<?php 

$data['products']['personal_lines'] = [
    [
        'product_name'=>'motor',
        'title'=>'Motor',
        'description'=>'<div>Vanguard Motor insurance is designed to take care of liabilities to third parties as well as your vehicle due to accidental damage, fire theft and bodily injuries in accordance with the third-party insurance act (1958). Categories are Comprehensive, Third Party and Third-Party Fire & Theft. </div>',
        'writeup'=>'',
        'fa-icon' => 'fa-duatone fa-car',
        'hero_bg' => '',
        'icon' =>IMAGES_URL. 'icons/insurance_car.png',
        'template' => true,
    ],

    [
        'product_name'=>'travel',
        'title'=>'Travel',
        'description'=>'<div>Our travel policies are designed to cover clients traveling abroad who may sustain injury as a result of an accident. It comes in two categories namely Vanguard CICL and Vanguard Safe Travel policies. Get safe while away on a trip with the Vanguard CICL or Vanguard Safe Travel policies.</div>',
        'writeup'=>'',
        'fa-icon' => 'fa-solid fa-suitcase',
        'hero_bg' => '',
        'icon' =>IMAGES_URL. 'icons/suitcases.png',
        'template' => false,
    ],
    [
        'product_name'=>'home',
        'title'=>'Home Owners',
        'description'=>'<div>Vanguard homeowner’s policy is designed to cover loss or damage to your private dwelling, household goods and personal effects resulting from fire and allied perils or theft. Our policy also covers your liability to third parties for injury or damage sustained at the premises following negligence on your part.</div>',
        'writeup'=>'',
        'fa-icon' => 'fa-duotone fa-house-chimney-window',
        'hero_bg' => '',
        'icon' =>IMAGES_URL. 'icons/insurance_home.png',
        'template' => false,
    ],
    [
        'product_name'=>'personal_accident',
        'title'=>'Personal Accident',
        'description'=>'<div>The personal accident insurance or PA insurance is an annual policy which provides compensation in the event if injuries, disabilities, or death solely caused by violent, accident, external and visible events.</div>',
        'writeup'=>'',
        'fa-icon' => 'fa-duotone fa-suitcase-medical',
        'hero_bg' => '',
        'icon' =>IMAGES_URL. 'icons/personal_accident.png',
        'template' => false,
    ],
   /*
    */
];


$data['products']['corporate'] = [
    [
        'product_name'=>'motor',
        'title'=>'Motor',
        'description'=>'',
        'writeup'=>'',
        'fa-icon' => 'fa-duatone fa-car',
        'hero_bg' => '',
        'icon' =>IMAGES_URL. 'icons/insurance_car.png',
        'template' => true,
    ],
    [
        'product_name'=>'fire',
        'title'=>'Fire',
        'description'=>'',
        'writeup'=>'',
        'fa-icon' => 'fa-duotone fa-tire-flat',
        'hero_bg' => '',
        'icon' =>IMAGES_URL. 'icons/.png',
        'template' => true,
    ],
    [
        'product_name'=>'general_accident',
        'title'=>'General Accident',
        'description'=>'',
        'writeup'=>'',
        'fa-icon' => 'fa-duotone fa-tire-flat',
        'hero_bg' => '',
        'icon' =>IMAGES_URL. 'icons/.png',
        'template' => true,
    ],
    [
        'product_name'=>'engineering',
        'title'=>'Engineering',
        'description'=>'',
        'writeup'=>'',
        'fa-icon' => 'fa-duotone fa-tire-flat',
        'hero_bg' => '',
        'icon' =>IMAGES_URL. 'icons/.png',
        'template' => true,
    ],
    [
        'product_name'=>'bond',
        'title'=>'Bond',
        'description'=>'',
        'writeup'=>'',
        'fa-icon' => 'fa-duotone fa-tire-flat',
        'hero_bg' => '',
        'icon' =>IMAGES_URL. 'icons/.png',
        'template' => true,
    ],
    [
        'product_name'=>'workmen_compensation',
        'title'=>'Workmen Compensation',
        'description'=>'',
        'writeup'=>'',
        'fa-icon' => 'fa-duotone fa-tire-flat',
        'hero_bg' => '',
        'icon' =>IMAGES_URL. 'icons/.png',
        'template' => true,
    ],
    [
        'product_name'=>'marine',
        'title'=>'Marine',
        'description'=>'',
        'writeup'=>'',
        'fa-icon' => 'fa-duotone fa-tire-flat',
        'hero_bg' => '',
        'icon' =>IMAGES_URL. 'icons/.png',
        'template' => true,
    ],
    [
        'product_name'=>'aviation',
        'title'=>'Aviation',
        'writeup'=>'',
        'fa-icon' => '',
        'hero_bg' => '',
        'icon' =>IMAGES_URL. 'icons/.png',
        'template' => true,
    ],
];



$data['productTags'] = [
    ['tag'=>'personal_lines', 'label'=>'personal_lines', 'enabled'=> true],
    ['tag'=>'corporate', 'label'=>'corporate', 'enabled'=> true]
];