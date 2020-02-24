<?php
// echo 'list';
$sql = 'SELECT * FROM menu';
$result = mysqli_query($conn, $sql);
mysqli_num_rows($result);
echo "<table border='1'>";
echo "<tr><th>รหัสเมนู</th>";
echo "<th>ชื่อเมนูอาหาร</th>";
echo "<th>ประเภทอาหาร</th>";
echo "<th>ราคา</th></tr>";
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
?>