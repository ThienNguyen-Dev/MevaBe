<?php 

include('../connect.php');
	
$ID_danhmuc1=!empty($_POST['ID_danhmuc1'])?$_POST['ID_danhmuc1']:'';


	if (!empty($ID_danhmuc1)) {
		
		$query = "SELECT * FROM danhmuc2 WHERE ID_danhmuc1 = {$ID_danhmuc1}";

		$result = mysqli_query( $conn, $query );

		if (mysqli_num_rows($result) >0) {
			while ($row = mysqli_fetch_assoc($result)) {
				echo '<option value="'.$row['ID_danhmuc2'].'">'.$row['tendanhmuc2'].'</option>'; 
			}
		}else{
			echo '<option value="">Không có danh mục 2</option>'; 
		}
	}
?>