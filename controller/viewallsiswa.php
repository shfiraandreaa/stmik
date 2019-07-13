<?php
	$sqlSelect = "SELECT * FROM siswa";
	
	$result = $conn->query($sqlSelect);
	
	$kontenTable = "";
	
	
	if ($result->num_rows > 0) {
		
		while($row = $result->fetch_assoc()){
			$dataTR = "<tr>";
			$dataTD = "<td>". $row['id'] . "</td>";
			$dataTD .= "<td>" . $row['nama'] . "</td>";
			$dataTD .= "<td>" . $row['kelas'] . "</td>";
			$dataTD .= "<td>" . $row['email'] . "</td>";$dataTD .= "<td>" . $row['alamat'] . "</td>";
			$dataTD .= "<td>" . $row['ttl'] . "</td>";
			$alamat = "controller/deletesiswa.php?id=".$row['id'];
			$anchor = "<a data='siswa' class='delete' href='$alamat'>Hapus</a>";
			$dataTD .= "<td>$anchor</td>";
			$dataTR .= $dataTD . "</tr>";
			
			// simpan ke variable kontenTable
			$kontenTable .= $dataTR;
		}
	}
?>