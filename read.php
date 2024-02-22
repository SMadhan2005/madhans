<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
     <style>
       a {
            padding-right: 25px;
            text-decoration: none;
            color: navy;
        }

        #hd {
            background-color: #40a0e9 100%;
            color: #33FF49 ;
        }
    </style>
</head>
<body>

 <div id="hd"><center>
        <h1>Student Details
            <hr>
        </h1></center>
        <div id="nav"><center>
            <h2>
       <a href="home.html">Home</a>
            <a href="newstudent.html">Student Details</a>
            <a href="update.html">Modify Details</a>
            <a href="remove.html">Remove Details</a>
            <a href="read.php">View Details</a></h2>
            <img src="avatar3.png" height="125px" width="175px">
    </center>
        </div>
    </div>
    <?php

$host='localhost';
$user='root';
$pass='';
$db='student';

$conn=new mysqli ($host,$user,$pass,$db);
//echo 'Connection Success...<br>';

$sql="select * from stud";

$res=$conn->query($sql);

if($res->num_rows>0)
{  
    echo "<table border='1' align='center'>";
    while($row=$res->fetch_assoc())
    {
        echo "<tr>";
      echo '<td>'.$row['s_id'].'</td>';
      echo '<td>'.$row['s_name'].'</td>';
      echo '<td>'.$row['s_con'].'</td>';
      echo '<td>'.$row['s_add'].'</td>';
    echo "</tr>";
    }
    echo "</table>";
}
else
{
    echo 'Record is empty...';
}

$conn->close();
?>
</body>
</html>
