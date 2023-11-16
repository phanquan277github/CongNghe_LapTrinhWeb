<?php
    $lifetime = 60 * 60 * 24 * 14;    // 2 weeks in seconds
    session_set_cookie_params($lifetime, '/');
    session_start();

    if(empty($_SESSION['cart12']))
    {
        $_SESSION['cart12'] = array();
    } 

    require_once('cart.php');

    $products = array();
    $products[0] = array('name' => 'Quần thể thao', 'cost' => '400.000');
    $products[1] = array('name' => 'Áo Argentina', 'cost' => '500.000');
    $products[2] = array('name' => 'Bóng FIFA World Cup 2022', 'cost' => '700.000');

    $action = filter_input(INPUT_POST, 'action');
    if($action == null)
    {
        $action = filter_input(INPUT_GET, 'action');
        if($action == null)
        {
            $action = "show_add_item";
        }
    }

    switch($action)
    {
        case "show_add_item": 
            include('add_items_view.php');
            break;
        
        case "show_cart":
            include('cart_view.php');
            break;

        case "delete_all":
            unset($_SESSION['cart12']);
            include('cart_view.php');
            break;

        case "add":
            $key = filter_input(INPUT_POST,'productscode');
            $quantity = filter_input(INPUT_POST,'itemqty');
            add_item($key,$quantity);
            include('cart_view.php');
            break;
        
        case "update":
            $listnewqty = filter_input(INPUT_POST, 'newqty', FILTER_DEFAULT, 
            FILTER_REQUIRE_ARRAY);
            foreach($listnewqty as $key => $qty)
            {
                if($_SESSION['cart12'][$key]['qty'] != $qty)
                {
                    update_item($key,$qty);
                }
            }
            include('cart_view.php');
            break;
    }


?>

