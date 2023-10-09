<html>
<head>
       <title>Title here!</title>
</head>
<body>
<h2>Pemesanan Tiket Cinema 99</h2>
<?

if ($tpstudio=="Reguler2D")
{
    $tarifsewa = 40000;
}
elseif ($tpstudio=="3D")
{
    $tarifsewa=80000;
}
else
{
    $tarifsewa=100000;
}

$subtotal= $tarifsewa * $jumlahpesan;

echo"
<pre>
Nama Pemesan       : $kdkamar
Judul Film     : $nmkamar
Pukul       : $jnskamar
Type Studio      : $type
Jumlah Pesan          : Rp $tarifsewa
Banyak Sewa     : $banyaksewa Kamar
Lama Sewa        : $lamasewa Hari
==================================
Subtotal              : Rp $subtotal
Diskon                 : Rp $diskon
==================================
Total                   : Rp $total
</pre>
<a href=penginapan.php>Booking Lagi</a>";
?>
</body>
</html>