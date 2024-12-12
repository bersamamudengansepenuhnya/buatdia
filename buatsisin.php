<?php date_default_timezone_set('Asia/Jakarta'); if(isset($_POST['pesan'])){ $fp = fopen('p.txt', 'a'); fwrite($fp, '
<div class="cp"><p><span>Pesan :</span><br />'.$_POST['pesan'].'</p><h6>'.date("d-M-Y (H:i)").'</h6></div>'); echo json_encode(array("s"=>200)); fclose($fp); die; } if(isset($_POST['d'])){ $fa = fopen('p.txt', 'a'); fwrite($fa,$_POST['d']); echo json_encode(array("s"=>200)); fclose($fa); die; } if(isset($_GET['d'])){ $fa = fopen('p.txt', 'a'); fclose($fa); $fr = fopen('p.txt', 'r'); echo json_encode(array("d"=>fgets($fr))); fclose($fr); die; } ?> <!DOCTYPE html> <html lang="en"> <head> <meta charset="UTF-8" /> <meta name="viewport" content="width=device-width, initial-scale=1.0" /> <title>Order Custom di Deka Tutorial</title> <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11.4.4/dist/sweetalert2.all.min.js"></script> <script src="https://dekatutorial.github.io/crd/s.js"></script> <link rel="stylesheet" type="text/css" href="https://dekatutorial.github.io/crd/s.css" /> </head> <body> <?php if(isset($_GET['pesan'])){ echo "<div id='ccp'>"; $fp = fopen('p.txt', 'r'); fgets($fp); while(!feof($fp)){ echo "".fgets($fp); } fclose($fp); echo "</div></body></html>"; die; } ?> <script>dt()</script>
    <div class="ctnr">
      <div class="lv">
        <img src="https://dekatutorial.github.io/crd/lv.svg" />
        <p>Klik Love-nya</p>
      </div>
      <div class="ctn">
        <button class="btn next">[ Lanjut ]</button>
        <button class="btn send">[ Kirim Pesan ]</button>
      </div>
    </div>
<script>

konten = [
  {
    gambar: "gambarsisin.jpg",
    ucapan: "HAPPY BIRTHDAY SINDI RATNA DINTA",
  },
  {
    gambar: "Stiker 3.gif"
    ucapan: "Cie Yang Ulang Tahun"
  },
  {
    gambar: "Stiker 1.gif"
    ucapan: "Selamat Ulang Tahun ya sisin, aku ada pesan sedikit, klik next ya sayang"
  },
  {
    gambar: "Stiker 47.gif"
    ucapan: "Haiiiii sisinnnn sibekkk sipennn nyaaaa akuuuuuu, Selamat Ulang Tahunnnn yangg ke 18 tahunn yaa sayanggg, semogaaaa diumurrr yangg sekaranggggg bisaaa mendapatkannnn hall yangg selamaaa iniii sisinnn mauinnn dann sisinnn perjuanginnnnn.best whises for special people. Tetaplahhhh bermimpiiiii setinggiii langittttt, dannn berusahalahhhhh untukkkkk meraihhhh semuaaaaa impianmuuuu akuuuu bakalannnn tetepppp disiniii. Akuuuu gaaaa akannnn ninggalinnnn kamuuuu, akuuuuu akannnn jadiiiii sistemmmm pendukunggggg yangg 20000000% yanggg baikkkk untukkkk kamuuuuu, alwayss healthyyy anddd wishhh u all theee bestt, ingettt. Akuuu selaluuu diii siniiiii untukkk kamuuuu, diii sampingmuuuuu. Selaluuu. AND I LOVE U IN EVERY UNIVERSE, BABE

  },
  {
    gambar: "Stiker 49.gif"
    ucapan: "You’re not getting older, you’re leveling up! Congrats on reaching the next level."
  },
  {
    gambar: "Stiker 15.gif"
    ucapan: "LOVEEEE YOUU MOREEE SISINNNNN CINTAKUUUUUUUUUUUU!!!!!"
  }
];

musik = "musik.mp3";
nomorWhatsapp = "6281xxx";

/*=========================*/
</script><script> DekaTutorial(konten, musik, nomorWhatsapp); </script> </body> </html>