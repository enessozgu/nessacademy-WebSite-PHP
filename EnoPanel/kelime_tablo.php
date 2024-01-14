<?php
include "ust.php";
?>
<div class="main-panel">
  <div class="content-wrapper">
    <div class="col-lg-12 stretch-card">
      <div class="card">
        <div class="card-body">
          <h4 class="card-title">Kelime Tablosu</h4>
          <p class="card-description">Türkçe İngilizce Tablosu</code>
          </p>
          <div class="table-responsive">
            <table class="table table-bordered table-contextual">
              <thead>
                <tr>
                  <th style="width:5%; "> Düzenle </th>
                  <th style="width:5%; "> Kelime Sayısı </th>
                  <th> Türkçe Kelime </th>
                  <th> İngilizce Kelime </th>
                  <th style="width:5%; "> Sil </th>
                </tr>
              </thead>
              <tbody>

                <?php
                $Kelimeler = $conn->query("SELECT * FROM kelimeler ORDER BY kelime_id ");
                foreach ($Kelimeler as $Kelime) {
                  ?>
                  <tr >
                    <td style="text-align:center;"><a href="kelime_duzenle.php"><i
                          class="mdi mdi-table-edit"></i></a></td>
                    <td style="text-align:center;">
                      <?php echo $Kelime['kelime_id'] ?>
                    </td>
                    <td>
                      <?php echo $Kelime['kelime'] ?>
                    </td>
                    <td>
                      <?php echo $Kelime['anlam'] ?>
                    </td>
                    <td style="text-align:center;"><a href="kelime_sil.php?id= <?php echo $Kelime['kelime_id'] ?>"><i
                           class="fab mdi mdi-delete"></i></a></td>
                  </tr>
                <?php } ?>
              </tbody>
            </table>
          </div>
        </div>
      </div>
    </div>
  </div>
  <?php
  include "alt.php";
  ?>
</div>