<html>
<head>
       <title>Title here!</title>
</head>
<body>
 
<h1>Pemesanan Tiket Cinema 99</h1>
<form action=view-output-cinema.php method=post>
<pre>
Nama Pemesan     <input type=text name=nmpsn size=10>
Judul Film     <select name=jdlflm>

             <option value="Parasite">Parasite
             <option value="Hereditary">Hereditary
             <option value="The Closet">The Closet
             <option value="Kamen Rider Reiwa">Kamen Rider Reiwa
             </select><br>

Pukul   <input type=radio name= type value=14.20>14.20
        <input type=radio name=type value=15.40>15.40
        <input type=radio name=type value=16.40>16.40<br>

Tipe Studio    <select name=tpstudio>
        <input type=radio name= type value=Reguler2D>Reguler2D
        <input type=radio name=type value=3D>3D
        <input type=radio name=type value=Velvet>Velvet<br>

Jumlah Pesan  <input type=text name=jumlahpesan size=3>
</pre>
 
<input type=submit name=submit value=Hitung>
<input type=reset name=reset value=Batal>
 
</form>
</body>
</html>