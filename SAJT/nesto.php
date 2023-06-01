<?php

if(isset($_REQUEST["submit"])){
    $data="";
    $filename="data.json";
    if(is_file($filename)){
        $data=file_get_contents($filename);
    }
    $json_arr=json_decode($data,true);
    $json_arr[]=array("ime"=>$_REQUEST["ime"],"prezime"=>$_REQUEST["prezime"],"email"=>$_REQUEST["email"],"subject"=>$_REQUEST["subject"],"pitanje"=>$_REQUEST["pitanje"]);
    file_put_contents($filename,json_encode($json_arr));

    header("Location:http://127.0.0.1:5500/contact.html")
}

?>