<?php

//define('NAMA', 'Aldo Leonard');

//echo NAMA;

//echo "<br>";

//const UMUR = 20;
//echo UMUR;

//class Coba {
//    const NAMA = 'Aldo Leonard';
//}

//echo Coba::NAMA;

//function coba() {
//    return __FUNCTION__;
//}

//echo coba();

class Coba {
    public $kelas = __CLASS__;
}

$obj = new Coba;
echo $obj->kelas;

?>