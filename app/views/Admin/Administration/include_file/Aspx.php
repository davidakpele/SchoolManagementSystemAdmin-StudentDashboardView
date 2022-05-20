<?php
$this->DB = new Database;
$this->DB->query('SELECT * FROM users ORDER BY UserRefID DESC');
    $row = $this->DB->single();
    $AvaliableID = $row->UserRefID;
    if(empty($AvaliableID)){
        $Plugin_New_ID = 'Student0001';
    }else {
        $AVA69 = str_replace("Student", "", $AvaliableID);
        $id =str_pad($AVA69 + 1,4,0, STR_PAD_LEFT);
        $Plugin_New_ID = 'Student' .$id;
    } 
     //Creating A unique IDs :: AutoGen
     $user = 'UniLag';
    // Reverse to make it harder to predict
    $stamp = (int) strrev(time());
    // character set up change base
    $charset = '123456789abcdefghijklnmopqrstuvwxyz';
    // convert timestamp to base whatever to shorten and obfuscate
    $rma_str = base10_to_y( $stamp, $charset );
    //echo 'Unique RMA Number: '.$user.''.$rma_str;
    $StudentID = $user.''.$rma_str;
    function base10_to_y( $num,$charset ) {
    $len = strlen($charset);
    for( $r=''; $num>=0; $num=intval(bcdiv($num,$len))-100 )
        $r=$charset[bcmod($num,$len)].$r;
    return $r;	
    }