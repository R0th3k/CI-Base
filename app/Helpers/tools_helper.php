<?php
function encrypt($password)
{
    return password_hash($password, PASSWORD_DEFAULT);
}

function compare($plain, $hash)
{
    return password_verify($plain, $hash);
}

function percent($price, $priceDiscount)
{
    $discount = round($priceDiscount * 100 / $price);
    $result = 100 - $rebaja;
    return $result;
}

function generateToken($length = 33)
{
    $characters = 'ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijkmnopqrstuvwxyz0123456789';
    $charactersLength = strlen($characters);
    $randomString = '';
    for ($i = 0; $i < $length; $i++) {
        $randomString .= $characters[rand(0, $charactersLength - 1)];
    }
    return $randomString;
}

function slug($string){
  return strtolower(trim(preg_replace('/[^A-Za-z0-9-]+/', '-', $string), '-'));
}

function nowDate()
{
  return date("Y-m-d H:i:s");
}