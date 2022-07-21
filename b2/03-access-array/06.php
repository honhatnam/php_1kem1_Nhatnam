<?php
$arrMenu = [
    'index' => [
        "name"  => "Home",   "link"  => "index.php"
    ],
    'about' => [
        "name"  => "About",
        "link"  => "data/about.php",
        "child" => [
            'service'   => [
                "name"  => "Service",
                "link"  => "service.php",
                "child" => [
                    'sale'      => ["name" => "Sale", "link" => "sale.php"],
                    'training'  => ["name" => "Training", "link" => "training.php"]
                ]
            ],
            'company'   => [
                "name" => "Company",
                "link" => "company.php",
                "child" => [
                    'toyota' => ["name" => "Toyota", "link"   => "toyota.php"]
                ]
            ]
        ]
    ],
    'contact' => ["name" => "Contact", "link" => "contact.php"]
];

    // Yêu cầu: In ra tên của các menu cấp 3
    // Output: Sale - Training - Toyota

    $menu ='';
    foreach($arrMenu as $keyLeverOne => $valueLeverOne){
        if(isset($valueLeverOne['child'])){
            foreach($valueLeverOne['child'] as $keyLeverTow => $valueLeverTwo){
               if(isset($valueLeverTwo['child'])){
                    foreach ($valueLeverTwo['child'] as $keyLeverThree => $valueLeverThree) {
                       $menu .= $valueLeverThree['name'].' - ';
                    }
                
               }
            }
        }
    }
    $menu = substr($menu,0,-3);

    echo $menu;
    echo '<pre style="color: red;">';
    print_r($menu);
    echo '</pre>';