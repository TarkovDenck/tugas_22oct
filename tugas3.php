<?php
// Function untuk cek bilangan genap
function cekBilanganGenap($bilangan) {
    if ($bilangan % 2 == 0) {
        return "$bilangan adalah bilangan genap.";
    } else {
        return "$bilangan adalah bilangan ganjil.";
    }
}

// Contoh penggunaan function
echo cekBilanganGenap(10); // Output: 10 adalah bilangan genap.
echo "<br>";
echo cekBilanganGenap(7);  // Output: 7 adalah bilangan ganjil.
?>
