<!DOCTYPE html>
<html>
<head>
    <title>Menentukan Luas Lingkaran dan keliling</title>
</head>
<body>
<form method="POST" action="">
    Masukkan Jari-jari : <input type="number" name="r"><br/>
    <input type="submit" name="submit" value="Proses">
</form>

<?php
    if(isset($_POST[])) {
        $r = $_POST['r'];
        
        $luas = $r*$r*22/7;
        echo "Luas Lingkaran = ". $luas;
    }
?>

</body>
</html>
