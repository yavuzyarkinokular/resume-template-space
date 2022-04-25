<?php
try {
    $user = "";
    $pass = "";
    $db = new PDO('mysql:host=89.252.180.102;dbname=yavuzyar_information;charset=utf8', $user, $pass);
    // echo "Bağlantı başarılı";
} catch (PDOException $e) {
    print "Hata!: " . $e->getMessage() . "<br/>";
    die();
}
?>