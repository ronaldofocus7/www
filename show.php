<html>
<head>
<title>ITF Lab</title>
</head>
<body>
<a href="form.html">Insert New Record</a>
<?php
$conn = mysqli_init();
mysqli_real_connect($conn, 'lab-itf-63070211-kantapak.mysql.database.azure.com', 'ronaldofocus7@lab-itf-63070211-kantapak', 'Ronaldo77', 'ITFLab', 3306);
if (mysqli_connect_errno($conn))
{
    die('Failed to connect to MySQL: '.mysqli_connect_error());
}
$res = mysqli_query($conn, 'SELECT * FROM guestbook2');
?>
<table width="600" border="1">
  <tr>
    <th width="100"> <div align="center">Name</div></th>
    <th width="350"> <div align="center">Comment </div></th>
    <th width="150"> <div align="center">Link </div></th>
    <th width="100"> <div align="center">Edit</div></th>
    <th width="1จ0"> <div align="center">Delete</div></th>
  </tr>
<?php
while($Result = mysqli_fetch_array($res))
{
?>
  <tr>
    <td><?php echo $Result['Name'];?></div></td>
    <td><?php echo $Result['Comment'];?></td>
    <td><?php echo $Result['Link'];?></td>
    <td><a href="edit.php?id=<?php echo $Result['id']; ?>">Edit</a></td>
    <td><a href="delete.php?id=<?php echo $Result['id']; ?>">Delete</a></td>
  </tr>
<?php
}
?>
</table>
<?php
mysqli_close($conn);
?>
</body>
</html>
