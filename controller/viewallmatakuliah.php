<?php
$sqlSelect = "SELECT * FROM mata_kuliah";
	
	$result = $conn->query($sqlSelect);
	
	$kontenTable = "";
	
	
	if ($result->num_rows > 0) {
		
		while($row = $result->fetch_assoc()){
			$dataTR = "<tr>";
			$dataTD = "<td>". $row['id'] . "</td>";
			$dataTD .= "<td>" . $row['nama'] . "</td>";
			$dataTD .= "<td>" . $row['jumlah_sks'] . "</td>";
			$dataTD .= "<td>" . $row['fakultas'] . "</td>";
			$alamat = "controller/deletematakuliah.php?id=".$row['id'];
			$anchor = "<a data='matakuliah' class='delete' href='$alamat'>Hapus</a>";
			$dataTD .= "<td>$anchor</td>";
			$dataTR .= $dataTD . "</tr>";
			
			// simpan ke variable kontenTable
			$kontenTable .= $dataTR;
		}
	}
?>
