<?php

$conn = mysqli_init();
mysqli_real_connect($conn, 'lab-itf-63070211-kantapak.mysql.database.azure.com', 'ronaldofocus7@lab-itf-63070211-kantapak', 'Ronaldo77', 'ITFLab', 3306);
if (mysqli_connect_errno($conn))
{
    die('Failed to connect to MySQL: '.mysqli_connect_error());
}


$name = $_POST['name'];
$comment = $_POST['comment'];
$link = $_POST['link'];


$sql = "INSERT INTO guestbook2 (Name , Comment , Link) VALUES ('$name', '$comment', '$link')";


if (mysqli_query($conn, $sql)) {
    echo "New record created successfully";
  } else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
  }
  
mysqli_close($conn);
?>
<a href="show.php">Go to show page</a>
