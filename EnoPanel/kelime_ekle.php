<?php
include "ust.php";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  // Form submit edildiğinde
  $turkce_kelime = $_POST['turkce_kelime'];
  $ingilizce_kelime = $_POST['ingilizce_kelime'];

  // Veritabanına ekleme işlemi
  $ekleme_sorgusu = $db->prepare("INSERT INTO kelimeler (kelime, anlam) VALUES (?, ?)");
  $ekleme_sorgusu->bind_param('ss', $turkce_kelime, $ingilizce_kelime);

  if ($ekleme_sorgusu->execute()) {
    // Kelime başarıyla eklendi, kelime_tablo sayfasına yönlendir
    echo "<script>alert('Kelime Başarıyla Eklendi')</script>";
    echo "<script>window.location.href='kelime_tablo.php'</script>";
    exit();
  } else {
    echo "Kelime eklenirken bir hata oluştu: " . $ekleme_sorgusu->error;
  }
}


?>
<div class="main-panel">
  <div class="content-wrapper">
    <div class="col-md-6 grid-margin stretch-card" style="margin: auto; margin-top: 150px;">
      <div class="card">
        <div class="card-body">
          <h4 class="card-title">Kelime Ekle</h4>
          <p class="card-description"> İngilizce Türkçe Kelime Eklenir. </p>
          <form action="kelime_ekle.php" method="post">
            <div class="form-group row">
              <div class="col">
                <label>Türkçe Kelime</label>
                <div id="the-basics">
                  <input class="typeahead" name="turkce_kelime" type="text" placeholder="Türkçe Anlamını Giriniz">
                </div>
              </div>
              <div class="col">
                <label>İngilizce Kelime</label>
                <div id="bloodhound">
                  <input class="typeahead" name="ingilizce_kelime" type="text" placeholder="İngilizce Anlamını Giriniz">
                </div>
              </div>
            </div>
            <button type="submit" style="text-align: center;" class="btn btn-primary btn-fw">Ekle</button>
          </form>
        </div>
      </div>
    </div>
  </div>
  <?php
  include "alt.php";
?>