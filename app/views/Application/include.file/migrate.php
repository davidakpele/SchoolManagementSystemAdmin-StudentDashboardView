<?php
$this->DB = new Database;
$this->DB->query('SELECT * FROM student__account ORDER BY student__Id DESC');
    $row = $this->DB->single();
    $AvaliableID = $row->student__Id;
    if(empty($AvaliableID)){
        $Plugin_New_ID = '10001';
    }else {
        $AVA69 = str_replace("1000", "", $AvaliableID);
        $id =str_pad($AVA69 + 1,4,0, STR_PAD_LEFT);
        $Plugin_New_ID =  $id;
    } 
     
    $length = 11;
    $number = '1234567890';
    $numberLength = strlen($number);
    $randomNumber = '';
    for ($i = 0; $i < $length; $i++) {
        $randomNumber .= $number[rand(0, $numberLength - 1)];
    }  
    $randomNumber = 'MCU'.$randomNumber;