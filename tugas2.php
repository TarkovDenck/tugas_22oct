<!DOCTYPE html>
<html lang="en">
<?php

function hello() {
    echo "Hello selamat datang" . "<br/>";
}

function helloGender($name, $gender) {
    $sapa = $gender == "laki-laki" ? "Hi bro" : ($gender == "perempuan" ? "Hi sis" : "Hi");

    echo $sapa . "nama saya adalah " . $name . " dan gender saya " . $gender . "<br/>";
}

function cekBilanganGenap($number) {
    return ($number % 2 == 0) ? "Bilangan Genap" : "Bilangan Ganjil";
}

hello();

helloGender("Rizki", "laki-laki");

echo cekBilanganGenap(10) . "<br/>";

echo cekBilanganGenap(9) . "<br/>";
?>

</html>
