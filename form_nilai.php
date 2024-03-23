<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Nilai</title>
    <style>
    

    form {
    
        margin:100px 90px 75px 400px;
        text-align:left;
        width: 350px;
        height: 250px;
        background-color:pink;
        padding: 30px;
     }
    
     .h2{
        text-align:center;
     }
     </style>
</head>
<body>
<div class="container">
    <form method="post" action="proses.php" class="form">
    <h2 class="h2">Form Hasil Nilai Mahasiswa</h2>
        <hr/>
        <br>
        <label for="nama">Nama Mahasiswa:</label>
        <input type="text" id="nama" name="nama">
        <br>
        <br>

        <label for="nilai">Nilai Mahasiswa :</label>
        <input type="number" id="nilai" name="nilai">
        <br>
        <br>
        <br>

        <button type="submit" class="btn btn-secondary">Submit</button>
    </form>
</div>
</body>
</html>