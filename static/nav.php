<?php

$navLinks = [
    'home'=>['href'=>  WEB_URL],
    
    'products' =>[
      //  'children' => [ 
      //     'new fire claim' => ['href' => _link('fire-claim','fire-claim')],
      //     'personal_insurance' => ['href' => _link('products#_personal_lines'),],
      //     'corporate' => ['href' => _link('products#_corporate'),],
      //      'FAQ' => ['href'=> '#']
      //      ],
         'internal_link' => false,
         'href' => _link('products'),
    ],
    /*'corporate' =>['href' => [ 
            
        ],
    ],,
    */
   // 'quotes' => ['href'=>'https://app.vanguardassurance.com/', 'target'=>'_blank'],
    'claims' => ['href' => "https://vanguardassurance.com/client-portal", 'target'=>'_blank'],

    'about_us' => ['children'=>[
        'our_story'=>[ 'href'=>_link('about-us','')],
        //'board_of_directors'=>[ 'href'=>_link('board','')],
       // 'management'=>[ 'href'=>_link('management','')],
        'our_team'=>[ 'href'=>_link('team#board','')],
        ],
    ],
    'news' => ['href'=>_link('news','')],        
    'contact_us' => ['href'=>_link('contact-us','')],        
];

$buttonLinks = [
    'buy_insurance' =>[
        'href' => "https://app.vanguardassurance.com/", 'target'=>'_blank', 'button'=>true, 'label'=>'', 'target'=> '_blank'  
    ], 
];


$topLinks = [
    'about_us' => ['href'=>'about-us'],
    'contact_us' => ['href'=>'contact-us'],    
];


//Social media Links - top of navbar
$data['socialMediaLinks'] = [
    ['href'=>LINKEDIN, 'icon'=>'fab fa-linkedin', 'title'=>'linkedin'],
    ['href'=>FACEBOOK, 'icon'=>'fab fa-facebook', 'title'=>'facebook'],
    ['href'=>INSTAGRAM, 'icon'=>'fab fa-instagram', 'title'=>'instagram'],
    ['href'=>TWITTER, 'icon'=>'fab fa-twitter', 'title'=>'twitter'],
];
