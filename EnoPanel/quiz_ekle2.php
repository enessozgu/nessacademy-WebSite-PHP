<?php

include 'ust.php';


if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Form submit edildiğinde
    $soru = $_POST['soru'];
    $a = $_POST['a'];
    $b = $_POST['b'];
    $c = $_POST['c'];
    $d = $_POST['d'];
    $dogru = $_POST['dogru'];

    // Veritabanına ekleme işlemi
    $ekleme_sorgusu = $db->prepare("INSERT INTO quiz_sorular2 (question_text, option_a, option_b, option_c, option_d, correct_answer) VALUES (?, ?, ?, ?, ?, ?)");
    $ekleme_sorgusu->bind_param('ssssss', $soru, $a, $b, $c, $d, $dogru);


    if ($ekleme_sorgusu->execute()) {
        // Kelime başarıyla eklendi, kelime_tablo sayfasına yönlendir
        echo "<script>alert('Quiz Başarıyla Eklendi')</script>";
        echo "<script>window.location.href='Quiz_tablo.php'</script>";
        exit();
    } else {
        echo "Kelime eklenirken bir hata oluştu: " . $ekleme_sorgusu->error;
    }
}


?>



<div class="card-body">

    <form class="forms-sample" action="quiz_ekle2.php" method="post">

        <div class="form-group" style="margin-top:100px;">
            <label for="exampleInputUsername1">SORU METNİ</label>
            <input type="text" class="form-control" name="soru" id="exampleInputUsername1" placeholder="">
        </div>
        <div class="form-group">
            <label for="exampleInputUsername1">A şıkkı</label>
            <input type="text" class="form-control" name="a" id="exampleInputUsername1" placeholder="">
        </div>
        <div class="form-group">
            <label for="exampleInputUsername1">B şıkkı</label>
            <input type="text" class="form-control" name="b" id="exampleInputUsername1" placeholder="">
        </div>
        <div class="form-group">
            <label for="exampleInputUsername1">C şıkkı</label>
            <input type="text" class="form-control" name="c" id="exampleInputUsername1" placeholder="">
        </div>
        <div class="form-group">
            <label for="exampleInputUsername1">D şıkkı</label>
            <input type="text" class="form-control" name="d" id="exampleInputUsername1" placeholder="">
        </div>
        <div class="form-group">
            <label for="exampleInputUsername1">Doğru Seçenek</label>
            <input type="text" class="form-control" name="dogru" id="exampleInputUsername1" placeholder="">
        </div>
        <button type="submit" name="" class="btn btn-primary mr-2">Submit</button>
        <button class="btn btn-dark">Cancel</button>
    </form>
</div>


<?php

include 'alt.php';





?>