<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $id = $_POST['menu_ID'];
    $foodName = $_POST['menu_Name'];
    $foodType = $_POST['menu_Type'];
    $foodPrice = $_POST['menu_price'];
    $sql = "INSERT INTO menu (menu_ID, menu_Name, menu_Type, menu_price)
    VALUES ('$id', '$foodName', '$foodType', '$foodPrice')";
    if ($conn->query($sql) === TRUE) {
        echo "<script>alert('บันทึกสำเร็จ!');window.location.replace('?page=add');</script>";
    } else {
        echo "<script>alert('มีข้อผิดพลาด แก้ไขและลองใหม่อีกครั้ง');window.location.replace('?page=add');</script>";
    }
    $conn->close();
}
?>
<form method="post">
    รหัสเมนู : <input type="text" name="menu_ID" required><br>
    ชื่อเมนูอาหาร : <input type="text" name="menu_Name" required><br>
    ประเภทอาหาร : 
    <select name="menu_Type">
      <option value="1">1 - อาหารคาว</option>
      <option value="2">2 - อาหารหวาน</option>
      <option value="3">3 - อาหารว่าง</option>
    </select><br>
    ราคา : <input type="number" name="menu_price" required><br>
    <input type="submit" value="เพิ่มข้อมูล">
</form>