<?php 
    $nama = isset($_POST['nama']) ? $_POST['nama'] : null;
    $umur = isset($_POST['umur']) ? $_POST['umur'] : null;
    $hobi = isset($_POST['hobi']) ? $_POST['hobi'] : null;

    if ($nama != null && $umur != null && $hobi != null) {
        echo "Nama : $nama </br> Umur : $umur </br> Hobi : $hobi"; 
    }
?>

<form action="" method="POST">
    <?php if ($nama == null) { ?>
    <div id="form-nama">
        Nama Anda : <input type="text" name="nama">
        <input type="button" value="Submit" onclick="document.getElementById('form-nama').style.display = 'none'; document.getElementById('form-umur').style.display = 'block';">
    </div>
    <?php } ?>
    <div id="form-umur" style="display:none;">
        Umur Anda : <input type="number" name="umur">
        <input type="button" value="Submit" onclick="document.getElementById('form-umur').style.display = 'none'; document.getElementById('form-hobi').style.display = 'block';">
    </div>
    <div id="form-hobi" style="display:none;">
        Hobi Anda : <input type="text" name="hobi">
        <input type="submit" value="Submit">
    </div>
</form>

