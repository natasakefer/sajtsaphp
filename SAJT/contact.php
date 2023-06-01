<?php

if(isset($_POST["submit"])){
    $name=$_POST["ime"];
    $prezime=$_POST["prezime"];
    $email=$_POST["email"];
    $subject=$_POST["subject"];
    $pitanje=$_POST["pitanje"];

    $data=file_get_contents("data.json");
    $data_array= json_decode($data,true);

    $data_new=array(
        "ime"=>$ime,
        "prezime"=>$prezime,
        "email"=>$email,
        "subject"=>$subject,
        "pitanje"=>$pitanje,
    );
    $data_array[]= $data_new;

    $new_data= json_encode($data_array);
    file_put_contents("data.json",$new_data) 
}
?>