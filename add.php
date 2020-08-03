<?php
    require 'includes/common.php';
?>

<?php
if(isset($_POST['submit']))
{
	
	$image=$_FILES["pic"]["name"];
	$text=$_POST['text'];
	$price=$_POST['price'];
	$imagedata=$_FILES["pic"]["tmp_name"];
	$target='images/';
	if(move_uploaded_file($imagedata,$target.$image))
	{
		$sql="insert into items(image,name,price)values('$image','$text','$price')";
		$query=mysqli_query($con,$sql);
		if($query)
		{
			echo "image uploaded successfully";
			header('location: add.php');
		}
		else
		{
		echo "failed to upload image";
		}
	}
}

?>
<html>
<head>
<title>products</title>
</head>
<body>
<div class="main">
<h1></h1>
<form action="" method="POST" enctype="multipart/form-data">
<input type="file" name="pic" required ></br></br>
<input type="text" id="text" name="text" placeholder="image name" required /></br></br>
<input type="text" name="price" placeholder="enter cost" required /></br></br>
<input type="submit" name="submit" value="Upload">
 </div>
</form>
<div class="bg-img">
<table border="1" style="border-collapse:collapse; color:#404040;">
<thead>
<tr>
<th><strong>sno</strong></th>
<th><strong>name</strong></th>
<th><strong>image</strong></th>
<th><strong>price</strong></th>
</tr>
</thead>
<?php
$count=1;
$query="select * from items";
$result=mysqli_query($con,$query);
while($row=mysqli_fetch_array($result))
{?>
<tr>
<td align="center"><?php echo $count;?></td>
<td align="center"><?php echo $row['name'];?></td>
<?php
echo "<td><img src='images/".$row['image']."' height='150' width='200'/></td>";
?>
<td align="center"><?php echo $row['price'];?></td>
</tr>
<?php $count++; }
?>
</table>
</div>
</body>
</html>


			