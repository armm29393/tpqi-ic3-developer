<?php
// echo "delete";
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    if (isset($_POST['delete'])) {
        $id = $_POST['menu_ID'];
        $sql = "DELETE FROM menu WHERE menu_ID='$id'";
        $result = mysqli_query($conn, $sql);
        if ($conn->query($sql) === TRUE) {
            echo "<script>alert('ลบข้อมูลสำเร็จ!');window.location.replace('?page=delete');</script>";
        } else {
            echo "<script>alert('มีข้อผิดพลาด ลองใหม่อีกครั้ง');window.location.replace('?page=delete');</script>";
        }
        $conn->close();
    }
    $q = $_POST['q'];
    // if ($q === '') echo '<script>window.location.replace("?page=");</script>';
    $sql = "SELECT * FROM menu WHERE menu_ID like '$q'";
    $result = mysqli_query($conn, $sql);
    while($row = mysqli_fetch_array($result)){
        // print_r($row);
        $id = $row['menu_ID'];
        $foodName = $row['menu_Name'];
        switch ($row['menu_Type']) {
        case '1':$foodType = 'อาหารคาว';break;
        case '2':$foodType = 'อาหารหวาน';break;
        case '3':$foodType = 'อาหารว่าง';break; }
        $foodPrice = $row['menu_price'];
?>
<form method="post">
    รหัสเมนู&nbsp;<?php echo "<input type='text' name='q' value='$id'>"; ?>
    &nbsp;<input type="submit" value="ค้นหา">
</form><br>
<table>
    <tr><td>รหัสเมนู</td>
        <td><?php echo "$id"; ?></td>
    </tr>
    <tr><td>ชื่อเมนูอาหาร</td>
        <td><?php echo "$foodName"; ?></td>
    </tr>
    <tr><td>ประเภทอาหาร&nbsp;&nbsp;&nbsp;&nbsp;</td>
        <td><?php echo "$foodType"; ?></td>
    </tr>
    <tr><td>ราคา</td>
        <td><?php echo "$foodPrice"; ?></td>
    </tr>
</table>
<form method="post">
    <?php echo "<input type='text' name='menu_ID' value='$id' hidden>"; ?>
    <input type="submit" name="delete" value="ลบข้อมูล">
</form>
<?php
    }
    exit();
}
?>
<form method="post">
    รหัสเมนู&nbsp;<input type="text" name="q" required>
    &nbsp;<input type="submit" value="ค้นหา">
</form>