<?php

    //require
    require './vendor/autoload.php';

    //初期化

    //.envの保存場所指定（カレントに設定）
    $dotenv = new Dotenv\Dotenv(__DIR__);

    $dotenv->load();

    //利用
    //値を取得
    $name = getenv('NAME');
    echo $name;