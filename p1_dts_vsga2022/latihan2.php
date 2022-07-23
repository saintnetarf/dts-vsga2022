<!DOCTYPE html>
<html>
<head>
    <title>Menentukan Luas Lingkaran</title>
</head>
<body>
    <H1>isi data</H1>
    <form action="./" method="POST" enctype="multipart/form-data">
        <table>
            <tr>
            <td>Bilangan 1</td>
            <td>:</td>
            <td><input type="number" name="bil1" require></td>
            </tr>
            <tr>
            <td>Bilangan 2</td>
            <td>:</td>
            <td><input type="number" name="bil2" require></td>
            </tr>
            <tr>
            <td></td>
            <td></td>
            <td><input type="submit" name="submit" value="cek"></td>
            </tr>
        </table>
        </form>
        <?php
        if (isset($_POST['submit'])){
                $bil1 = $_POST[bil1];
                $bil2 = $_POST[bil2];
            
                echo "bilangan 1 : $bil1<br />";
                echo "bilangan 2 : $bil2<br />";
                echo "<br />";

                if ($bil1 > $bil2) {
                    echo "Bilangan 1 lebih besar";

                }
                elseif ($bil1 < $bil2) {
                    echo "Bilangan 1 lebih kecil";
                } else {
                    echo "kedua bilangan sama besar";
                }
        }
        ?>
</body>
</html>
