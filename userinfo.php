<?php
 $con = mysqli_connect('localhost','root');
 if($con){
    echo "connection successfull";
 }else{
    echo"no connection";
 }

 mysqli_select_db($con,'business');
 $user=$_POST['user'];
 $email=$_POST['email'];
 $mobile=$_POST['mobile'];
 $comment=$_POST['comment']
 

 $query="INSERT INTO `student`(`id`, `user`, `mobile`, `comment`) VALUES ('[id]','[user]','[mobile]','[comment]')";
 
 echo" $query";


 mysqli_query($con,$query);



  ?>
 
