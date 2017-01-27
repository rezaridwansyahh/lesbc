<?php
include 'Kendaraan.php';
include 'Pesawat.php';
 ?>
<html>
  <head>
    <title>Hahaha</title>
  </head>
  <?php
  $boeing737 = new Pesawat("Boing737",2000000);
  $boeing737->setTinggiMaks(7500);
  $boeing737->setKecepatanMaks(650);

  $boeing747 = new Pesawat("boeing747",3500000);
  $boeing747->setTinggiMaks(5800);
  $boeing747->setKecepatanMaks(750);

  $cassa = new Pesawat("Cassa",750000);
  $cassa->setTinggiMaks(7500);
  $cassa->setKecepatanMaks(650);
   ?>

  <body>
    <table border="2">
      <tr>
        <td>
          Merek Pesawat
        </td>
        <td>
          Harga
        </td>
        <td>
          Tinggi Maks
        </td>
        <td>
          Keccepatan Maks
        </td>
      </tr>
      <tr>
        <td>
          wakakak
        </td>
        <td>
          Harga
        </td>
        <td>
          Tinggi Maks
        </td>
        <td>
          Keccepatan Maks
        </td>
      </tr>
    </table>
    <p>Biaya Operasional <?=$boeing737->bacaMerek()?> dengan harga Rp <?=$boeing737->bacaHarga()?>
      yang Memiliki Tinggi Maksimum <?=$boeing737->bacaTinggiMaks()?> feet dan kecepatan maksimum
      <?=$boeing737->bacaKecepatanMaks()?> Km/Jam adalah RP
      <?=$boeing737->biayaOperasional($boeing737->bacaTinggiMaks(),$boeing737->bacaKecepatanMaks(),$boeing737->bacaHarga())?>
    </p>
    <p>Biaya Operasional <?=$boeing747->bacaMerek()?> dengan harga Rp <?=$boeing747->bacaHarga()?>
      yang Memiliki Tinggi Maksimum <?=$boeing747->bacaTinggiMaks()?> feet dan kecepatan maksimum
      <?=$boeing747->bacaKecepatanMaks()?> Km/Jam adalah RP
      <?=$boeing747->biayaOperasional($boeing747->bacaTinggiMaks(),$boeing747->bacaKecepatanMaks(),$boeing747->bacaHarga())?>
    </p>
    <p>Biaya Operasional <?=$cassa->bacaMerek()?> dengan harga Rp <?=$cassa->bacaHarga()?>
      yang Memiliki Tinggi Maksimum <?=$cassa->bacaTinggiMaks()?> feet dan kecepatan maksimum
      <?=$cassa->bacaKecepatanMaks()?> Km/Jam adalah RP
      <?=$cassa->biayaOperasional($cassa->bacaTinggiMaks(),$cassa->bacaKecepatanMaks(),$cassa->bacaHarga())?>
    </p>
  </body>
</html>
