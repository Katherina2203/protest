<?php
include "include/dbconnect.php";
$query = mysqli_query($connect, 'SELECT * FROM cities WHERE id_country='.$_POST["id_country"].'');
?>

<option>Выберите город</option>
<?php while($rs = mysqli_fetch_assoc($query)){ ?>
	<option value="<?php echo $rs['id_city']; ?>"><?php echo $rs['city_name']; ?></option>
<?php }?>
