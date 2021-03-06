<?php
    // ログインフィルターの読み込み
    require_once 'login_filter.php';
    require_once 'models/Item.php';
    // 一般ユーザーの表示
    session_start();
    $items = Item::all();

    $login_user = $_SESSION['login_user'];

    $flash_message = $_SESSION['flash_message'];
    $_SESSION['flash_message'] = null;
    
    $errors = $_SESSION['errors'];
    $_SESSION['errors'] = null;
    
    include_once 'views/user_top_view.php';
    