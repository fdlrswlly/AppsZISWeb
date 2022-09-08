<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <form action="/Zakatku/test" method=post>
        <select name="pilihbank" id="" onclick="pilih()">
            <?php foreach ($dropdownbank as $z) { ?>
                
                    <option value="<?= $z['id_bank']; ?>"><?= $z['nama_bank']; ?>
                    </option>
                <?php } ?>
        </select>
        <input type="submit" value="cek">
    </form>
    <?php foreach ($tampil as $z) { ?>
    <input type="text" name="norek" value="<?php $z['no_rekening'] ?>">
    <?php } ?>
</body>

</html>