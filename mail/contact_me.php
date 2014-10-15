	
<?php

if(empty($_POST['name']) || empty($_POST['email']) || empty($_POST['message']))
{
echo "No arguments Provided!";
return false;
}

$name = $_POST['name'];
$email_address = $_POST['email'];
$message = $_POST['message'];


$to = 'savoreux69@gmail.com'; 
$email_subject = "Отзыв на ssu-literature от: $name";
$email_body = "У вас появился новый отзыв на сайте ssu-literature.\n\n"."Здесь некоторые детали:\n\nИмя: $name\n\nEmail: $email_address\n\nСообщение:\n$message";
$headers = "From: $email_address"; 
mail($to,$email_subject,$email_body,$headers);
return true; 
?>
