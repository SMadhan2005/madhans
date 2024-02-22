<?php
$host='localhost';
$user='root';
$pass='';
$db='student';

//create connection
$conn=new mysqli($host,$user,$pass,$db);
echo 'connection success...';

$sna=$_POST['sna'];
$sct=$_POST['sct'];
$sad=$_POST['sad'];

$sql="insert into stud(s_name,s_con,s_add) values('$sna','$sct','$sad')";

$res=$conn->query($sql);

if($res==TRUE)
{
    echo '<br>Data insertion Success...';
}
else
{
    echo 'Error...';
}

$conn->close();
?>
