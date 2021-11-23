<?php 
    $x = 5;
    $y = "Pham Ngoc Son";
    $z = 5.5;

    echo $x."</br>".$y."</br>".$z."</br>";


    $arr = array(
        1, 3, 5, 6, 8, 9
    );

    echo sizeof($arr)."</br>" ;
    echo $arr[4]."</br>";

    $array = [
        [
            "fullname" => "Pham Ngoc Son",
            "age" => "22",
            "addres" => "Hung Yen"
        ],
        [
            "fullname" => "Pham The Anh",
            "age" => "22",
            "addres" => "Hung Yen"
        ],
        [
            "fullname" => "Pham Thai Duy",
            "age" => "22",
            "addres" => "Hung Yen"
        ]
    ];

    echo $array[1]['fullname'];
?>