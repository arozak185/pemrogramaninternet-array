<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="" method="POST">
        <label for="masukanIndex">Masukan Index</label>
        <input type="text" name="masukanIndex" id="masukanIndex">
        <button type="submit" name="proses" id="proses">Proses</button>
    </form>
    <?php
        if(isset($_POST['proses'])){
            $array = ['A','B','D','U','L','R','O','J','A','K'];
            $masukanIndex = $_POST['masukanIndex'];

            if(array_key_exists($masukanIndex,$array)){
                echo $array[$masukanIndex];
            }else{
                echo"Index Tidak Tersedia";
            }
        }
    ?>
</body>
</html>