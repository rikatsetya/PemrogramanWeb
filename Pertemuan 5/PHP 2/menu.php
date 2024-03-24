<?php
/*
    Akan dibuat sebuah array multidimensi pada variabel menu.
    Pada fungsi yang dibuat, hanya memanggil array paling luar (menu nama) pada perulangan foreach.
    Pada kondisi if, adalah untuk memanggil array yang ada didalam.

*/

$menu = [
    [
        "nama" => "Beranda"
    ],
    [
        "nama" => "Berita",
        "subMenu" => [
        [
            "nama" => "Wisata",
            "subMenu"=> [
            [
                "nama" => "Pantai"
            ],
            [
                "nama" => "Gunung"
            ]
            ]
        ],
        [
            "nama" => "Kuliner"
        ],
        [
            "nama" => "Hiburan"
        ]
        ]
    ],
    [ "nama" => "Tentang"
    ],
    [ "nama" => "Kontak"
    ],
];

function tampilkanMenuBertingkat (array $menu) {
    echo "<ul>";
    foreach ($menu as $item) {
        echo "<li>{$item['nama']}</li>";
        if (isset($item['subMenu'])) {
            tampilkanMenuBertingkat($item['subMenu']);
        }
    }
    echo "</ul>";
}
tampilkanMenuBertingkat ($menu);
?>