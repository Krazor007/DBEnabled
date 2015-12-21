<?php

$name=  $_REQUEST["name"];
$mail= $_REQUEST["mail"];
$company=$_REQUEST["company"];
$message=$_REQUEST["message"];

echo "hi"+$name+$mail+$company+$message;

// $username=  $_REQUEST["name"] ;

// $key=  $_REQUEST["key"] ;

// $username=ltrim($username);

// $mail=  $username ;
//    $to = "kajal.patil4@gmail.com";
//    $subject = "AllCureLifeScience.com";
//    $message =  "Hey there, \n We will be waiting for you! Please be there to grace the event with your presence at Chakra Restaurant ,Andheri Kurla Road, Sakinaka, Mumbai from 6.30pm onwards. \n
//    				Thanks & Regards, \n The MFC Team";
//    $header = "FROM: ODC MFC Team <ODC-MFC-Team@.mckinsey.com>";
//    $retval = mail ($to,$subject,$message,$header);
//    if( $retval == true )  
//    {
//       echo "Message sent successfully...";
//    }
//    else
//    {
//       echo "Message could not be sent...";
//    }


?>