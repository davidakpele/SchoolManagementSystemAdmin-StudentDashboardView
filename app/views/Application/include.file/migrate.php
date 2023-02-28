<?php
    $this->DB = new Database;
    $this->DB->query('SELECT * FROM student__account ORDER BY student__Id DESC');
    $row = $this->DB->single();
    if (empty($row)) {
        $AvaliableID = $row['student__Id'];
         $Studentid = '9001';
    }else {
        $AvaliableID = $row->student__Id;
        $stmtid = str_replace("900", "", $AvaliableID);
        $id =str_pad($stmtid + 1,1,0, STR_PAD_LEFT);
        $Studentid = '900'.  $id;
    }
    
    $length = 11;
    $number = '1234567890';
    $numberLength = strlen($number);
    $randomNumber = '';
    for ($i = 0; $i < $length; $i++) {
        $randomNumber .= $number[rand(0, $numberLength - 1)];
    }  
    $randomNumber = 'MCU'.$randomNumber;