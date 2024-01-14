<?php
include "ust.php";
?>
<div class="main-panel">
    <div class="content-wrapper">
        <div class="col-lg-12 grid-margin stretch-card">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title">Yorumlar Tablosu</h4>
                    <!-- <p class="card-description"> Add class <code>.table-striped</code>
                    </p> -->
                    <div class="table-responsive">
                        <table class="table table-striped">
                            <thead>
                                <tr>
                                    <th style="width: 10%;"> İsim </th>
                                    <th style="width: 10%;"> Mail </th>
                                    <th style="width: 55%;"> Yorum </th>
                                    <th style="width: 10%;"> Yorum Tarihi </th>
                                    <th style="width: 5%;">Sil</th>
                                </tr>
                            </thead>
                            <tbody>


                                <?php
                                $Kelimeler = $db->query("SELECT * FROM yorumlar ORDER BY id ");
                                foreach ($Kelimeler as $Kelime) {
                                    ?>
                                    <tr>
                                   
                                        <td>
                                            <?php echo $Kelime['user_name'] ?>
                                        </td>
                                        <td>
                                            <?php echo $Kelime['user_mail'] ?>
                                        </td>
                                        <td>
                                            <?php echo $Kelime['yorum'] ?>
                                        </td>
                                        <td>
                                            <?php echo $Kelime['tarih_saat'] ?>
                                        </td>
                                        <td><a href="yorum_sil.php?id= <?php echo $Kelime['id'] ?>">
                                                <i class="fab mdi mdi-delete"></i>
                                            </a></td>


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