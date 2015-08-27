<meta charset="UTF-8">
<?php

// php'nin çağırılan sınıfı bulamadığında çalıştırdığı __autoload methodunu tanımlıyoruz
function __autoload($className){
    echo $className . " sınıfını bulamadı ve __autoload çalıştı<br>";
    require_once "classes/" . $className . ".php";
}

/*
// sınıfları /classes klasörüne aldığımız için ihtiyacımız olan sırayla çağırıyoruz

require_once "classes/KuruTemizleme.php";
require_once "classes/EveKuruTemizleme.php";
*/

// instance oluşturuyoruz
$kuruTemizlemeci = new EveKuruTemizleme();

// camasir için veri gönderiyoruz
$kuruTemizlemeci->setCamasir("Pantul");

// camasir yıkama işlemlerini çalıştırıyoruz
$kuruTemizlemeci->yika();
