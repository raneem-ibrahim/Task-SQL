<?php
class AppleDevice {

    // properties 
    // visibility marker 
public $ram = "1GB";
public $inch = "4 Inch";
public $space = "16 GB";
public $color= "BLACK";
private $lock ;
public $OwenerName ;
const OWNERNAME = 5;

public function doubleHomePressed(){
    echo "you have pressed the  home button twice";
}
public function getSpaeification(){
    echo "this iphon ram is :" .$this->ram;

}

public function setownername($owner){
if(strlen($owner) <3){
    echo "owner name cant be less than 3 char";
}
}

public function setownername2($owner){
    if(strlen($owner) < self ::OWNERNAME){
        echo "owner name cant be less than  ".self ::OWNERNAME." char";
    }
    }





    public function changlock($chang){
        // هاي لتشفير نص الباسوورد 
        $this->lock =sha1($chang);
    }

}

$iphone6pluse = new AppleDevice();
$iphone6pluse->ram = '2GB';
$iphone6pluse->inch = "5 Inch";
$iphone6pluse->space ="32GB";
$iphone6pluse->color = 'Gold';
$iphone6pluse->changlock("raneem12345677");
echo AppleDevice::OWNERNAME."<br>";
echo $iphone6pluse::OWNERNAME."<br>";
// $iphone6pluse->OwenerName = 'osama';
$iphone6pluse->setownername2('os');
echo "<br>";
$iphone6pluse->doubleHomePressed();
echo "<br>";
$iphone6pluse->getSpaeification();
echo "<pre>";

print_r($iphone6pluse);
$iphone6 = new AppleDevice();
echo "<pre>";

print_r( $iphone6 );



// $iphone7pluse = new AppleDevice();

// echo `<pre>`;

// var_dump($iphone7pluse);
// echo `<pre>`;





?>
