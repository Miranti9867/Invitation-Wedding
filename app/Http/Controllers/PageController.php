<?php

namespace App\Http\Controllers;

use App\Models\Comment;
use Illuminate\Http\Request;

class PageController extends Controller
{
    public function index(){
        $data = [
            "title" => "Wedding of Do Kyungsoo & Lee Ji-eun",
            "main_image" => "images/main_img.jpg",
            "wedding_date" => "2024-12-20 00:00:00",
            "groom_name" => "Do Kyungsoo",
            "bride_name" => "Lee Ji-eun",
            "groom_photo" => "images/groom.jpg",
            "bride_photo" => "images/bride.jpg",
            "groom_father_name" => "Do Seungsoo",
            "groom_mother_name" => "Lee Krystal",
            "bride_father_name" => "Lee Jin Kook",
            "bride_mother_name" => "Kim Misam",
            "groom_social_media" => "https://www.instagram.com/d.o.hkyungsoo/",
            "bride_social_media" => "https://www.instagram.com/dlwlrma/",
            "akad_start_date" => "2024-12-20 08:00:00",
            "akad_end_date" => "2024-12-20 12:00:00",
            "akad_place_name" => "Grand Atyasa Convention Center",
            "akad_address" => "Jl. Flores No. 261, 11 Ulu, Plaju, Palembang",
            "akad_maps" => "https://maps.app.goo.gl/82mxi4xzwBXC5F9C9",
            "reception_start_date" => "2024-12-22 10:00:00",
            "reception_end_date" => "2024-12-22 15:00:00",
            "reception_place_name" => "Grand Atyasa Convention Center",
            "reception_address" => "Jl. Flores No. 261, 11 Ulu, Plaju, Palembang",
            "reception_maps" => "https://maps.app.goo.gl/82mxi4xzwBXC5F9C9",
            "gift_qr_image" => "images/gift.png",
            "audio" => "audio/youre still the one.mp3",
            "gallery" => [
                ["link" => "images/gallery1.jpg"],
                ["link" => "images/gallery2.jpg"],
                ["link" => "images/gallery3.jpg"],
                ["link" => "images/gallery4.jpg"],
                ["link" => "images/gallery5.jpg"],
                ["link" => "images/gallery6.jpg"],
                ["link" => "images/gallery7.jpg"],
                ["link" => "images/gallery8.jpg"],
                ["link" => "images/bride.jpg"],
                ["link" => "images/gallery10.jpg"],
                ["link" => "images/gallery11.jpg"],
                ["link" => "images/gallery12.jpg"],
            ],
            "journey" => [
                [
                    "title" => "Pertama Bertemu",
                    "story" => "Awal mula kisah kami adalah melalui teman bersama yang
                    memperkenalkan kami karena melihat adanya kecocokan. Saat
                    itu, kami tidak langsung mengenal satu sama lain, tetapi
                    diperkenalkan secara singkat melalui teman yang juga
                    berperan sebagai perantara.",
                    "date" => "2021-07-10 00:00:00"
                ],
                [
                    "title" => "Proses Taa'ruf",
                    "story" => "Setelah beberapa kali bertukar informasi dan mengenal
                    kepribadian melalui perantara, kami memutuskan untuk
                    melanjutkan dengan proses taaruf yang lebih intensif.
                    Dalam proses ini, kami berdua berkomitmen menjaga
                    batas-batas syariat dan saling menanyakan visi hidup,
                    nilai-nilai, serta harapan terhadap keluarga.",
                    "date" => "2022-05-05 00:00:00"
                ],
                [
                    "title" => "Konsultasi Keluarga",
                    "story" => "Setelah merasa cocok melalui taaruf, kami melibatkan
                    keluarga dalam proses ini. Pertemuan keluarga pertama
                    diadakan untuk saling mengenal lebih dalam dan berdiskusi
                    tentang masa depan kami. Keluarga menjadi pendukung dan
                    penasihat bagi kami berdua dalam proses menuju pernikahan.",
                    "date" => "2023-11-20 00:00:00"
                ],
                [
                    "title" => "Lamaran",
                    "story" => "Dengan restu dari keluarga, ia resmi melamar dengan
                    khitbah. Acara khitbah ini dilakukan dengan sederhana
                    namun penuh makna, sebagai tanda keseriusan untuk
                    melanjutkan ke jenjang pernikahan. Khitbah ini juga
                    menjadi momen di mana kedua keluarga semakin erat dan
                    saling mendukung.",
                    "date" => "2024-07-27 00:00:00"
                ],
                [
                    "title" => "Pernikahan",
                    "story" => "Setelah melalui persiapan dan doa yang tak henti-hentinya,
                    hari pernikahan kami tiba. Dengan penuh syukur, kami
                    mengucap ijab kabul di hadapan Allah, keluarga, dan
                    sahabat. Hari ini adalah awal dari babak baru dalam hidup
                    kami sebagai suami istri, siap membangun keluarga yang
                    sakinah, mawaddah, dan warahmah.",
                    "date" => "2024-12-20 00:00:00"
                ]
            ]
        ];
        
        $data["comments"] = Comment::all()->sortByDesc('created_at');

        return view('theme', ['data' => (object) $data]);
    }
}
