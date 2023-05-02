<?php
function tambah($ang1, $ang2){
    $hasil = $ang1 + $ang2;
    return $hasil;
}

function kurang($ang1, $ang2){
    $hasil = $ang1 - $ang2;
    return $hasil;
}
function bagi($ang1, $ang2){
    $hasil = $ang1 / $ang2;
    return $hasil;
}
function kali($ang1, $ang2){
    $hasil = $ang1 * $ang2;
    return $hasil;
}

// menampung inputan
$angka1 = @$_POST['masbro1'];
$angka2 = @$_POST['masbro2'];
$hasil = @$_POST['result'];

// respon tombol operator
if(isset($_POST['tambah']))
{
   $hasil = tambah($angka1, $angka2);
}

if(isset($_POST['kurang']))
{
   $hasil = kurang($angka1, $angka2);
}

if(isset($_POST['bagi']))
{
   $hasil = bagi($angka1, $angka2);
}

if(isset($_POST['kali']))
{
   $hasil = kali($angka1, $angka2);
}

if(isset($_POST['hapus']))
{
   $hasil = "";
   $angka1= "";
   $angka2= "";
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kalkulator</title>
    <Link rel="stylesheet" type="text/css" href="css.css">
</head>
<body>
<form method="post">
        <table align="center" border="0">
            <tr>
                <td colspan="3" bgcolor="black" align="center">KALKULATOR</td>
            </tr>
            <tr>
                <td colspan="3"> <hr> </td>
            </tr>
            <tr>
                <td>Input 1</td>
                <td>:</td>
                <td>
                    <input type="text" name="masbro1" value="<?=$angka1?>">
                </td>
            </tr>
            <tr>
                <td>Input 2</td>
                <td>:</td>
                <td>
                    <input type="text" name="masbro2" value="<?=$angka2?>">
                </td>
            </tr>
            <tr>
                <td></td>
                <td></td>
                <td>
                    <input type="submit" name="tambah" value="+">
                    <input type="submit" name="kurang" value="-">
                    <input type="submit" name="bagi" value="/">
                    <input type="submit" name="kali" value="*">
                    <input type="submit" name="hapus" value="C">
                </td>
            </tr>
            </tr>
            <tr>
                <td>Hasil</td>
                <td>:</td>
                <td>
                    <input type="text" name="result" value="<?=$hasil?>">
                </td>
            </tr>
            <tr>
                <td colspan="3"> <hr> </td>
            </tr>
        </table>
    </form>
</body>
</html>