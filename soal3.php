<?php 
$connection = mysqli_connect("localhost","root","","testdb");
 
if (mysqli_connect_errno()){
	echo "Koneksi database gagal : " . mysqli_connect_error();
}
?> 

<table border="1">
    <thead>
        <tr>
            <td>No</td>
            <td>Nama</td>
            <td>Alamat</td>                
            <td>Hobi</td>
        </tr>
    </thead>
    <?php
    $nama = isset($_GET['nama']) ? $_GET['nama'] : null;
    $alamat = isset($_GET['alamat']) ? $_GET['alamat'] : null;
    $hobi = isset($_GET['hobi']) ? $_GET['hobi'] : null;

    $no = 1;
    $query = mysqli_query($connection, 'SELECT * FROM person INNER JOIN hobi ON person.id = hobi.person_id where person.nama like "%'.$nama.'%" and person.alamat like "%'.$alamat.'%" and hobi.hobi like "%'.$hobi.'%" ');
    while ($data = mysqli_fetch_array($query)) {
    ?>
        <tr>
            <td><?php echo $no++ ?></td>
            <td><?php echo $data['nama'] ?></td>
            <td><?php echo $data['alamat'] ?></td>
            <td><?php echo $data['hobi'] ?></td>
        </tr>
    <?php } ?>
</table>

<form action="" method="GET">
    <table style="margin-top:10px; border: 1px solid black;">
        <tr>
            <td>Filter</td>
        </tr>
        <tr>
            <td>Nama</td>
            <td><input type="text" name="nama"></td>
        </tr>
        <tr>
            <td>Alamat</td>
            <td><input type="text" name="alamat"></td>
        </tr>
        <tr>
            <td>Hobi</td>
            <td><input type="text" name="hobi"></td>
        </tr>
        <tr>
            <td><input type="submit" value="Search"></td>
        </tr>
    </table>
</form>