<?php
function get_header(): void
{
    require_once('layouts/header.php');

}

function get_footer(): void
{
    require_once('layouts/footer.php');

}

function get_main(): void
{
    require_once('layouts/main.php');

}

function show_arr($arr): void
{
    echo '<pre>';
    print_r($arr);
    echo '</pre>';

}



function redirect($url): void
{
    header('location:' . $url);
}