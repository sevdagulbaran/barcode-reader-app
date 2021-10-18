<?php

try {
    $db = new PDO("mysql:host=localhost;dbname=barcodes", "root", "");
} catch (PDOException $e) {
    print "ERR! :" .$e->getMessage() . "<br/>";
    die();
}

$barcode = $_GET ['barcode'];

if ($barcode) {
    $query = $db ->prepare("SELECT * FROM barcodes WHERE barcode = :barcode");
    $query -> bindParam(':barcode', $barcode);
    $barcode = $query -> execute();
    $barcode = $query -> fetch(PDO::FETCH_OBJ);
    print_r($barcode);

}



// barcode db den localhost/api.php?barcode=${barcode} url'ni nasıl ayarlayıp koduma ekleyebilrim
// api url ni nasıl olusturabilrim
?>