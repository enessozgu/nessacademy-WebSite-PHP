<?php
include 'ust.php';

// Soru ID'sini almak için bir kontrol ekleyelim
if (isset($_GET['id'])) {
    $soru_id = $_GET['id'];
    // Veritabanından belirtilen soruyu al
    $sorgu = $db->prepare("SELECT * FROM quiz_sorular WHERE id = ?");
    $sorgu->bind_param('i', $soru_id);
    $sorgu->execute();
    $result = $sorgu->get_result();
    $Kelime = $result->fetch_assoc();
} else {
    echo "Geçerli bir soru ID bulunamadı.";
    exit();
}
?>
<div class="main-panel">
    <div class="content-wrapper">
        <div class="col-lg-12 grid-margin stretch-card">
            <div class="card">
                <div class="card-body">

                    <form class="forms-sample" action="quiz_guncelle.php" method="post">
                        <input type="hidden" name="id" value="<?php echo $soru_id; ?>">
                        <div class="form-group" style="margin-top:100px;">
                            <label for="soru">SORU METNİ</label>
                            <input type="text" class="form-control" name="soru" value="<?php echo $Kelime['question_text'] ?>" id="soru" placeholder="">

                        </div>
                        <div class="form-group">
                            <label for="a">A şıkkı</label>
                            <input type="text" class="form-control" name="a" value="<?php echo $Kelime['option_a'] ?>" id="a" placeholder="">
                        </div>
                        <div class="form-group">
                            <label for="b">B şıkkı</label>
                            <input type="text" class="form-control" name="b" value="<?php echo $Kelime['option_b'] ?>" id="b" placeholder="">
                        </div>
                        <div class="form-group">
                            <label for="c">C şıkkı</label>
                            <input type="text" class="form-control" name="c" value="<?php echo $Kelime['option_c'] ?>" id="c" placeholder="">
                        </div>
                        <div class="form-group">
                            <label for="d">D şıkkı</label>
                            <input type="text" class="form-control" name="d" value="<?php echo $Kelime['option_d'] ?>" id="d" placeholder="">
                        </div>
                        <div class="form-group">
                            <label for="dogru">Doğru Seçenek</label>
                            <input type="text" class="form-control" name="dogru" value="<?php echo $Kelime['correct_answer'] ?>" id="dogru" placeholder="">
                        </div>
                        <div  style="width: 100%; text-align: center;">
                            <button type="submit" name="" class="btn btn-primary mr-2">Submit</button>
                            <button class="btn btn-dark">Cancel</button>
                        </div>
                    </form>
                </div>

            </div>
        </div>
    </div>










    <?php

    include 'alt.php';





?>
</div>