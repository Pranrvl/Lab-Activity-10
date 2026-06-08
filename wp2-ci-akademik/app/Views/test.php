
<h1>Hi selamat pagi</h1>

<?php 
echo "<h2>".$title."</h2>";
echo "<h4>".$subtitle."</h4>";

#var_dump($mhs);

?>

<table class="table">
	<thead>
        <tr>
            <td>NIM</td>
            <td>Nama</td>
            <td>Program Studi</td>
            <td>Foto</td>
            <td>Aksi</td>
        </tr>
    </thead>
    <tbody>
	<?php
	foreach($mhs as $row){
		echo "<tr>";
		echo "<td>".$row['nim']."</td>";
		echo "<td>".$row['nama']."</td>";
		echo "<td>".$row['kode_prodi']."</td>";
		echo "<td><img src=".base_url('assets/mahasiswa/'.$row['foto'])." style=\"max-width:300px;\"/></td>";

		echo "</tr>";
	}	
	?>
	</tbody>
</table>