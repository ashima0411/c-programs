<!DOCTYPE html>
<html lang="en">
<head>
    <style>
        .error { color:#FF0001;}
    </style>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    echo"kirti vardhan ajmani";
    $nameErr=$emailErr =$mobilenoErr=$genderErr=$websiteErr = $agreeErr ="";
    $name=$email=$mobileno =$gender=$website=$agree="";
    if($_SERVER["REQUEST_METHOD"]=="POST")
    {
        if(empty($_POST["name"]))
        {
            $nameErr="Name  is Required";
        }
        else{
            $name=input_data($_POST["name"]);
            
            if(!preg_match("/^[a-zA-Z]*$/",$name)){
                $nameErr="only alphabets and white spaces are allowed";
            }
        }
        if(empty($_POST["email"])){
            $emailErr="Email is required";
        }
        else{
            $email=input_data($_POST["email"]);
            if(!filter_var($email,FILTER_VALIDATE_EMAIL)){
                $emailErr="Invalid email format";
            }
        }
        if(empty($_POST["mobileno"]))
        {
            $mobilenoErr ="Mobile no is required";
        }
        else{
            $mobileno=input_data($_POST["mobileno"]);
            if(!preg_match("/^[0-9]*$/",$mobileno)){
                $mobilenoErr="Only numeric value is allowed";
            }
            if(strlen($mobileno) !=10){
                $mobilenoErr="Mobile no must contain 10 digits";
            }

        }
        if(empty($_POST["website"]))
        {
            $website="";
        }
        else{
            $website= input_data($_POST["website"]);
            if(!preg_match("/\b(?:(?:https?|ftp):\/\/|www\.)"))
        }
    }
    
</body>
</html>