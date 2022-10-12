<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css">

</head>
<style>
    <?php include('page-homepage.css') ?>
</style>

<body>
    <div class="nar_menu">
        <div class="menu_left">
            <img src="https://vov.vn/themes/custom/vovvn/images/logo_meta_home.jpg" alt="">
            <p>Hôm nay là ngày 05/10/2002</p>
        </div>

        <div class="menu_midle">
            <a href="#"><i class="fa-brands fa-facebook"></i></a>
            <a href="#"><i class="fa-brands fa-tiktok"></i></a>
            <a href="#"><i class="fa-brands fa-youtube"></i></a>
            <a href="#"><i class="fa-brands fa-skype"></i></a>
            <p>Nghe & xem <i class="fa-solid fa-circle-chevron-right"></i></p>

        </div>
        <div class="menu_right">
            <p>English</p>
            <p><input type="text"><i class="fa-solid fa-magnifying-glass"></i></p>
        </div>

    </div>
    <div class="navbar_menu">
        <p><i class="fa-solid fa-house"></i>Chính trị </p>
        <p>Xã hội</p>
        <p>Thế giới</p>
        <p>Kinh tế</p>
        <p>Thể thao</p>
        <p>Văn hóa</p>
        <p>Phát luật</p>
        <p>Du lịch</p>
        <p>Quân sự - Quốc phòng</p>
        <p>Sức khỏe</p>
        <p>Đời sống</p>
        <p>Postcast <i class="fa-solid fa-bars"></i></p>
    </div>
    <div class="container">
        <?php

        $curl = curl_init();

        curl_setopt_array($curl, array(
            CURLOPT_URL => 'https://61d6e1cf35f71e0017c2e86e.mockapi.io/news',
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_ENCODING => '',
            CURLOPT_MAXREDIRS => 10,
            CURLOPT_TIMEOUT => 0,
            CURLOPT_FOLLOWLOCATION => true,
            CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
            CURLOPT_CUSTOMREQUEST => 'GET',
        ));

        $response = curl_exec($curl);

        curl_close($curl);


        $data = json_decode($response);

        ?>
        <div class="container-fuild">
            <div class="rightNews">
                <?php
                foreach ($data as $value) { ?>
                    <div class="colOne">
                        <?php if ($value->isLarge) { ?>
                            <img class="imageLarge" src="<?= $value->image ?>" />
                            <p class="contentlarge"><?= $value->content ?></p>
                        <?php } else ?>
                    </div>
                    <div class="colTwo">
                            <img class="imageMiddle" src="<?= $value->image ?>" />
                            <p class="contentMiddle"><?= $value->content ?></p>
                    </div>
                <?php } ?>
            </div>
        </div>
    </div>
</body>