<?php
function password_generator()
{
    $password = "";

    //Cadenas de caracteres permitidos para el password
    $minus = rc("abcdefghijklmnopqrstuvwxyz");
    $mayus = rc("ABCDEFGHIJKLMNOPQRSTUVWXYZ");
    $numbers = rc("1234567890");
    $specials = rc("#=)_@$-%{&*+}(");

    $tmpPassword = $minus . $mayus . $numbers . $specials;
    $password = str_shuffle($tmpPassword);

    return $password;
}

function rc($str = '', $num = 2)
{
    if (strlen($str)) {
        $s = extract_str($str, $num);
        return $s;
    }

    return '';
}

function extract_str($str, $num)
{
    $finalStr = ""; //variable para almacenar la cadena generada
    for ($i = 0; $i < $num; $i++) {
        /*Extraemos 1 caracter de los caracteres
        entre el rango 0 a Numero de letras que tiene la cadena */
        $finalStr .= substr($str, rand(0, strlen($str)), 1);
    }

    if (strlen($finalStr) < $num) //si no genera el numero total de elementos que se vuelta a ejecutar
    {
        $finalStr = extract_str($str, $num);
    }

    return $finalStr;
}
