<?php
include "ust.php";
?>
<div class="main-panel">
    <div class="content-wrapper">
        <div class="col-lg-12 grid-margin stretch-card">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title">Üyeler Tablosu</h4>
                    <!-- <p class="card-description"> Add class <code>.table-striped</code>
                    </p> -->
                    <div class="table-responsive">
                        <table class="table table-striped">
                            <thead>
                                <tr>
                                    <th style="width: 8%;">Profil</th>
                                    <th> İsim </th>
                                    <th> Soyisim </th>
                                    <th> Mail </th>
                                    <th> Telefon no </th>

                                    <th style="width: 5%;">Sil</th>
                                </tr>
                            </thead>
                            <tbody>

                                <?php
                                $Kelimeler = $db->query("SELECT * FROM users ORDER BY id ");
                                foreach ($Kelimeler as $Kelime) {
                                    ?>
                                    <tr>
                                        <td class="py-1">
                                            <img src=" ../<?php echo $Kelime['profile_picture'] ?>" alt="" />
                                        </td>
                                        <td>
                                            <?php echo $Kelime['user_name'] ?>
                                        </td>
                                        <td>
                                            <?php echo $Kelime['last_name'] ?>
                                        </td>
                                        <td>
                                            <?php echo $Kelime['user_mail'] ?>
                                        </td>
                                        <td>
                                            <?php echo $Kelime['user_number'] ?>
                                        </td>
                                        <td><a href="uye_sil.php?id= <?php echo $Kelime['id'] ?>">
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