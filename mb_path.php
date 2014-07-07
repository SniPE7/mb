<?php
/**
 * Created by PhpStorm.
 * User: Den
 * Date: 7/5/14
 * Time: 7:12 PM
 */

    $absolutePath = "mb";

//path of the themes
    $path = 'themes';
    $themesNames = scandir($path);
    $length = count($themesNames);
    $lengthWithoutDots = $length -2;


    $choosedTheme = "";



?>