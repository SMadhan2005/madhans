<?php
$host='localhost';
$user='root';
$pass='';
$db='student';

$conn=new mysqli($host,$user,$pass,$db);
//echo 'Connection Success...<br>';

$id=$_POST['sid'];
$cna=$_POST['sna'];
$cct=$_POST['sct'];
$cad=$_POST['sad'];

$sql="update stud set  s_name='$cna',s_con='$cct',s_add='$cad' where s_id='$id'";

$res=$conn->query($sql);

if($res==TRUE)
{
    echo 'Data updation Success...';
}
else 
{
    echo 'Error1...';
}

$conn->close();
?>
