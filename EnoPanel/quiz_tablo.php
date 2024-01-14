<?php

include 'ust.php';


?>

<div class="main-panel">
    <div class="content-wrapper">
        <div class="col-lg-12 stretch-card">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title">Inverse table</h4>
                    <p class="card-description"> Add class <code>.table-dark</code>
                    </p>
                    <div class="table-responsive">
                        <table class="table table-dark">
                            <thead>
                                <tr>
                                  <th> Düzenle </th>
                                    <th> id </th>
                                    <th> Sorular </th>
                                    <th> A </th>
                                    <th> B </th>
                                    <th> C </th>
                                    <th> D </th>
                                    <th> Dogru Cevap </th>
                                    <th> Sil </th>
                                </tr>
                            </thead>
                            <tbody>
                            <?php
                          $Kelimeler = $db->query("SELECT * FROM quiz_sorular ORDER BY id ");
                           foreach ($Kelimeler as $Kelime) {
                             ?>
                                <tr>
                                <td style="text-align:center;"><a href="quiz_duzenle.php?id=<?php echo $Kelime['id'] ?>"><i
                          class="mdi mdi-table-edit"></i></a></td>
                                    <td>  <?php echo $Kelime['id'] ?>  </td>
                                    <td> <?php echo $Kelime['question_text'] ?> </td>
                                    <td>  <?php echo $Kelime['option_a'] ?>  </td>
                                    <td><?php echo $Kelime['option_b'] ?> </td>
                                    <td><?php echo $Kelime['option_c'] ?> </td>
                                    <td><?php echo $Kelime['option_d'] ?> </td>
                                    <td><?php echo $Kelime['correct_answer'] ?> </td>
                                    <td><a href="quiz_sil.php?id= <?php echo $Kelime['id'] ?>">
                                                <i class="fab mdi mdi-delete"></i>
                                            </a></td>
                                </tr>
<?php

                }
?>
                            </tbody>
                            
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>







    <?php

    include 'alt.php';


    ?>