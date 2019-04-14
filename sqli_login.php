<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

function load($page = 'login.php') {
    $url = 'http://' . $_SERVER['HTTP_HOST'] .
            dirname($_SERVER['PHP_SELF']);
    $url = rtrim($url, '/\\');
    $url .= '/' . $page;
    header("Location: $url");
    exit();
}

function validate($PDO, $email = '', $password = '') {
    $errors = array();
    if (empty($email)) {
        $errors[] = 'Enter your email address.';
    } else {
        $e = mysqli_real_escape_string($PDO, trim($email));
    }
    if (empty($errors)) {
        $q = "SELECT user_id, first_name, last_name FROM users WHERE email ='$e' AND password = SHA1('$p')";
        $r = mysqli_query($PDO, $q);

        if (mysqli_num_rows($r) == 1) {
            $row = mysqli_fetch_array($r, MYSQLI_ASSOC);
        return array(true, $row); }
        else {
                    $errors[] = 'Email address and password not found.';
                }
            }
            
            return array(false, $errors);
            
        }
    

