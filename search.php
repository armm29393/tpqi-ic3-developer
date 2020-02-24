<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $q = $_POST['q'];
    $sql = ($q === '') ? 'SELECT * FROM menu':"SELECT * FROM menu WHERE menu_ID like '$q' or menu_Name like '$q'";
    // echo "$sql";
    $result = mysqli_query($conn, $sql);
?>
<form method="post">
    รหัส/ชื่อเมนูอาหาร&nbsp;<input type="text" name="q">
    &nbsp;<input type="submit" value="ค้นหา">
</form><br><table border='1'>
<tr><th>รหัสเมนู</th>
<th>ชื่อเมนูอาหาร</th>
<th>ประเภทอาหาร</th>
<th>ราคา</th></tr>
<?php
    while($row = mysqli_fetch_array($result)){
        switch ($row['menu_Type']) {
            case '1':$foodType = 'อาหารคาว';break;
            case '2':$foodType = 'อาหารหวาน';break;
            case '3':$foodType = 'อาหารว่าง';break;
        }
        echo "<tr>"; 
        echo "<td>" . $row['menu_ID'] . "</td>";
        echo "<td>" . $row['menu_Name'] . "</td>";
        echo "<td>" . $foodType . "</td>";
        echo "<td>" . $row['menu_price'] . "</td>";
        echo "</tr>";
        }
    echo "</table>";
    mysqli_free_result($result);
    mysqli_close($conn);
    exit();
}
?>
<form method="post">
    รหัส/ชื่อเมนูอาหาร&nbsp;<input type="text" name="q">
    &nbsp;<input type="submit" value="ค้นหา">
</form>