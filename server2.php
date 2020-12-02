
<?php
if(isset($_POST['register'])){
 $db=mysqli_connect('localhost','root','','registeration1');
 $name=mysqli_escape_string($db,$_POST['name']);
 $surname=mysqli_escape_string($db,$_POST['surname']);

 
$sql=mysqli_query($db,"insert into programming(id,name,surname)
values('','$name ','$surname')");

$name=mysqli_escape_string($db,$_POST['name']);
$surname=mysqli_escape_string($db,$_POST['surname']);

}
 

?>
<html>
    <head>
        <style type="text/css">
        a{
            text-decoration:none;
            color:white;
            font-size:xx-large
        }
        p{
            color:orange;
            font-size:150px;
            font-family:Edwardian Script ITC;
        }
        body{
            background-image:url(jj.jpg);
        }
            
        
        
     
        </style>
</head>
<body>
<p>Congratulation for choosing to code together with me</p>
    <a href="introduction1.html">click here to access our services</a>

</body>
<html>