<?php

$navLinks = [
    'home'=>['href'=>  WEB_URL],
    
    'products' =>['href' => [ 
      //     'new fire claim' => ['href' => _link('fire-claim','fire-claim')],
           'personal_insurance' => ['href' => _link('products#personal_lines'),],
           'corporate' => ['href' => _link('products#corporate'),],
      //      'FAQ' => ['href'=> '#']
        ],
         'internal_link' => true
    ],
    /*'corporate' =>['href' => [ 
            
        ],
    ],,
    */
    'self_serve' => ['href' => [
        'quotes' => ['href'=>'https://app.vanguardassurance.com/'],
        'client area' => ['href' => "https://vanguardassurance.com/client-portal"],
//        'forms' => ['href' => _link('downloads')],
        ]
    ],

    'about_us' => ['href'=>[
        'our_story'=>[ 'href'=>_link('about-us','')],
        //'board_of_directors'=>[ 'href'=>_link('board','')],
       // 'management'=>[ 'href'=>_link('management','')],
        'our_team'=>[ 'href'=>_link('team#board','')],
        ]
    ],
    'contact_us' => ['href'=>_link('contact-us','')],    

    
];

$topLinks = [
    'about_us' => ['href'=>_link('about-us','')],
    'contact_us' => ['href'=>_link('contact-us','')],    
];

$data['socialMediaLinks'] = [
    ['href'=>LINKEDIN, 'icon'=>'fab fa-linkedin', 'title'=>'linkedin'],
    ['href'=>FACEBOOK, 'icon'=>'fab fa-facebook', 'title'=>'facebook'],
    ['href'=>INSTAGRAM, 'icon'=>'fab fa-instagram', 'title'=>'instagram'],
    ['href'=>TWITTER, 'icon'=>'fab fa-twitter', 'title'=>'twitter'],
];
