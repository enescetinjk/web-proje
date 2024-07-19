<?php
include("baglanti.php"); 
?>
<!DOCTYPE html>
<html>
<head>
<style>
#customers {
  font-family: Arial, Helvetica, sans-serif;
  border-collapse: collapse;
  width: 100%;
}

#customers td, #customers th {
  border: 1px solid #ddd;
  padding: 8px;
}

#customers tr:nth-child(even){background-color: #f2f2f2;}

#customers tr:hover {background-color: #ddd;}

#customers th {
  padding-top: 12px;
  padding-bottom: 12px;
  text-align: left;
  background-color: #04AA6D;
  color: white;
}
</style>
</head>
<body>



<table id="customers">
  <tr>
    <th>AD SOYAD</th>
    <th>TELEFON</th>
    <th>EMAIL</th>
    <th>KONU</th>
    <th>MESAJ</th>
  </tr>
  <tr>
    <td>Enes Çetin</td>
    <td>0553033555</td>
    <td>mail@hotmail.com</td>
    <td>konu</td>
    <td>başarılı</td>
  </tr>
  <?php
  session_start();
  if($_SESSION["user"]=="") {

    echo "<script>window.location.href='cikis.php'</script>";


  }else {
      echo "Kullanıcı Adınız: ".$_SESSION['user']."<br>";
      echo "<a href='cikis.php'>ÇIKIŞ YAP</a><br><br><br>";



  $sec = "Select * From iletisim";
$sonuc=$baglan->query($sec);

if($sonuc->num_rows>0){

    while($cek=$sonuc->fetch_assoc())
    {
        echo "
          <tr>
    <td>".$cek['adsoyad']."</td>
    <td>".$cek['telefon']."</td>
    <td>".$cek['email']."</td>
    <td>".$cek['konu']."</td>
    <td>".$cek['mesaj']."</td>
    </tr>
        
        ";
    }
} else{
    echo "Kayıtlı Veri Bulunamadı!";
}
  }
?>

</table>

</body>
</html>


