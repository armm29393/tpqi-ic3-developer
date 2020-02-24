<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
</head>
</html>
<?php require('dbconn.php'); ?>
<a href="?page=add">เพิ่มข้อมูล</a>&nbsp;<a href="?page=search">ค้นหาข้อมูล</a>&nbsp;
<a href="?page=edit">แก้ไขข้อมูล</a>&nbsp;<a href="?page=delete">ลบข้อมูล</a><br><br>
<?php
	switch ($_GET['page']) {
		case 'add':include('add.php');break;
		case 'search':include('search.php');break;
		case 'edit':include('edit.php');break;
		case 'delete':include('delete.php');break;
		default:include('list.php');break;
	}
?>