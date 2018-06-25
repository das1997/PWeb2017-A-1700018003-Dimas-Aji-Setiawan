<html>
<head>
<title>inputan laundry</title>
</head>
<body>
<link rel="stylesheet" type="text/css" href="desain.css">  
  <div align="center" class="head">
  <frameset>
    <img src="gambar.jpg" width="100" align="left">
    <img src="gambar.jpg" width="100" align="right">
      <font color='black' size='15' face="Cooper Std Black">DASH Laundry</font>
      <br>  
      <font color='black' size='10' face="Harlow Solid Italic">Reguler</font> 
</frameset>
  </div>
<div align="center"> 
<a href="ngarep.html"><button class="atas">Home </button></a>
</div>   

<form align="center" action=output.php method="post" class="kotak">
<table border=0 >
</tr>
        <tr>
          <td>
            Nama
          </td>
          <td>
            <input type="text" name="nama">
          </td>
        </tr>
        <tr>
          <td>
            Alamat
          </td>
          <td>
            <textarea rows="5" cols="20" name="alamat"></textarea>
          </td>
        </tr>
        <tr>
          <td>
            Nomor HP
          </td>
          <td>
            <input type="text" name ="no_hp">
          </td>
        </tr>
        <tr>
          <td>
            Tanggal Masuk
          </td>
          <td>
            <select name="tgl">
            <option selected="selected">Tanggal</option>
            <?php
            for($a=1; $a<=31; $a+=1){
            echo"<option value=$a> $a </option>";
            }
            ?>
            </select>
            <select name="bln">
            <option selected="selected">Bulan</option>
            <?php
            for($b=1; $b<=12; $b+=1){
            echo"<option value=$b> $b </option>";
            }
            ?>
            </select>
            <select name="thn">
            <option selected="selected">Tahun</option>
              <?php
              for($c=2017; $c<=2040; $c+=1){
                echo"<option value=$c> $c </option>";
                }
              ?>
            </select>
          </td>
        </tr>
        <tr>
          <td>
            Berat pakaian/kg
          </td>
          <td>
            <input type="text" name ="berat">
          </td>
        </tr>
        <tr>
          <td>
            Pilih paket
          </td>
          <td>
            <input type="radio" name ="pil_pak" value="regular" checked="checked">regular
          </td>
        </tr>
        <tr>
          <td>
            jasa antar
          </td>
          <td>
            <input type="checkbox" name ="jas_an" value="Menggunakan">Menggunakan
            <br/>
          </td>
        </tr>
        <tr>
          <td>
          </td>
  <div align="center">
  <td colspan=3 align="center"><input type="submit" name="button" value="Submit" id="edit" class="button" >
  <input align="center" type="reset" value="Cancel" class="reset"></td></tr> </div>
</form>
</td></tr>
</table>
</form>