<?php
 session_start();
 $login=filter_var(trim($_POST['login']),FILTER_SANITIZE_STRING);
 $password=filter_var(trim($_POST['password']),FILTER_SANITIZE_STRING);
 $admin;
 $password=md5($password."zxcghoul");

 $mysql= new mysqli('localhost','root','','register-bd');
 
 $result=$mysql->query("SELECT * FROM `users` WHERE `login`='$login' AND `password`='$password' ");



 $user=$result->fetch_assoc();
 if(count($user)==0){
   $_SESSION['error'] ="Пользователь не найден";
   header('Location:/userenter.php');
   exit();
 }
 setcookie('user',$user['name'],time()+3600,"/");

 setcookie('login',$user['login'],time()+3600,"/");
 setcookie('admin',$user['admin'],time()+3600,"/");
 
 $mysql->close();
 header('Location:/index.php')
?>