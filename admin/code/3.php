<?php
include '../config/database.php';
$textsql = $dbprefix.'sentence';

$con = mysqli_connect($dbhost,$dbuser,$dbpasswd,$dbname);

$sql = "SELECT * FROM ".$textsql;

$result = mysqli_query($con, $sql);

if (mysqli_num_rows($result) > 0) {
    while($row = mysqli_fetch_assoc($result)) {
        echo ('<tr>
        <td>'.$row['id'].'</td>
        <td>'.$row['author'].'</td>
        <td>'.$row['text'].'</td>
        <td>'.$row['creator'].'</td>
      </tr>');
    }
} else 
{
    echo "";
}

mysqli_close($con);


?>