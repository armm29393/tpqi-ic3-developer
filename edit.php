<?php
// echo "edit";
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
	if (isset($_POST['submit'])) {
		$id = $_POST['menu_ID'];
	    $foodName = $_POST['menu_Name'];
	    $foodType = $_POST['menu_Type'];
	    $foodPrice = $_POST['menu_price'];
		$sql = "UPDATE menu SET menu_Name='$foodName',
			menu_Type='$foodType',
			menu_price='$foodPrice'
			WHERE menu_ID='$id'";
		// echo $sql;
		if(mysqli_query($conn, $sql)){
		    echo "<script>alert('แก้ไขสำเร็จ!');window.location.replace('?page=edit');</script>";
	    } else {
	        echo "<script>alert('มีข้อผิดพลาด แก้ไขและลองใหม่อีกครั้ง');window.location.replace('?page=edit');</script>";
	    }
	}
    $q = $_POST['q'];
    // if ($q === '') echo '<script>window.location.replace("?page=edit");</script>';
    $sql = "SELECT * FROM menu WHERE menu_ID like '$q'";
    $result = mysqli_query($conn, $sql);
    while($row = mysqli_fetch_array($result)){
	    // print_r($row);
	    $id = $row['menu_ID'];
	    $foodName = $row['menu_Name'];
	    $foodType = $row['menu_Type'];
	    $foodPrice = $row['menu_price'];
?>
<form method="post">
    รหัสเมนู&nbsp;<?php echo "<input type='text' name='q' value='$id'>"; ?>
    &nbsp;<input type="submit" value="ค้นหา">
</form><br>
<form method="post">
    รหัสเมนู : <?php echo "<input type='text' name='menu_ID' required readonly value='$id'><br>"; ?>
    ชื่อเมนูอาหาร : <?php echo "<input type='text' name='menu_Name' required value='$foodName'><br>"; ?>
    ประเภทอาหาร : 
    <select name="menu_Type">
      <option value="1">1 - อาหารคาว</option>
      <option value="2">2 - อาหารหวาน</option>
      <option value="3">3 - อาหารว่าง</option>
    </select><br>
    ราคา : <?php echo "<input type='number' name='menu_price' required value='$foodPrice'><br>"; ?><br>
    <input type="submit" name="submit" value="แก้ไขข้อมูล">
</form>
<?php
	}
    mysqli_free_result($result);
    mysqli_close($conn);
    exit();
}
?>
<form method="post">
    รหัสเมนู&nbsp;<input type="text" name="q" required>
    &nbsp;<input type="submit" value="ค้นหา">
</form>