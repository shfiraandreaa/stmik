<?php
	$sqlSelect = "SELECT * FROM jurusan";
	
	$result = $conn->query($sqlSelect);
	
	$kontenTable = "";
	
	
	if ($result->num_rows > 0) {
		
		while($row = $result->fetch_assoc()){
			$dataTR = "<tr>";
			$dataTD = "<td>". $row['id'] . "</td>";
			$dataTD .= "<td>" . $row['jurusan'] . "</td>";
			$alamat = "controller/deletejurusan.php?id=".$row['id'];
			$anchor = "<a data='jurusan' class='delete' href='$alamat'>Hapus</a>";
			$dataTD .= "<td>$anchor</td>";
			$dataTR .= $dataTD . "</tr>";
			
			// simpan ke variable kontenTable
			$kontenTable .= $dataTR;
		}
	}
?>