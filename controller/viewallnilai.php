<?php
	$sqlSelect = "SELECT * FROM nilai";
	
	$result = $conn->query($sqlSelect);
	
	$kontenTable = "";
	
	
	if ($result->num_rows > 0) {
		
		while($row = $result->fetch_assoc()){
			$dataTR = "<tr>";
			$dataTD = "<td>". $row['id'] . "</td>";
			$dataTD .= "<td>" . $row['nama_mata_kuliah'] . "</td>";
			$dataTD .= "<td>" . $row['nim'] . "</td>";
			$dataTD .= "<td>" . $row['nilai'] . "</td>";
			$alamat = "controller/deletenilai.php?id=".$row['id'];
			$anchor = "<a data='nilai' class='delete' href='$alamat'>Hapus</a>";
			$dataTD .= "<td>$anchor</td>";
			$dataTR .= $dataTD . "</tr>";
			
			// simpan ke variable kontenTable
			$kontenTable .= $dataTR;
		}
	}
?>