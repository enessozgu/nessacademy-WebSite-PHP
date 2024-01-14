<?php
include 'ust.php';
?>

<?php
include 'baglanti.php';
// Promo kodunu veritabanından çek
$sql = "SELECT pr FROM promo";  // 'pr' alanı üzerinden bir filtreleme yapmanız gerekiyor.
$result = $conn->query($sql);

if (!$result) {
    die("Sorgu hatası: " . $conn->error);
}

$promoData = $result->fetch_assoc();  // Satırdan veriyi çek

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Formdan gelen verileri al
    $newPromoValue = $_POST["promo"]; // input elemanının name özelliğini "promo" olarak değiştirin

    // Güncelleme SQL sorgusunu oluştur
    $updateQuery = "UPDATE promo SET pr = '$newPromoValue'"; // Id'yi uygun şekilde değiştirin

    // Güncelleme sorgusunu çalıştır
    $updateResult = $conn->query($updateQuery);

    if ($updateResult) {
        echo "Veri başarıyla güncellendi.";
    } else {
        echo "Güncelleme hatası: " . $conn->error;
    }
}
?>

<div class="col-12 grid-margin stretch-card">
    <div class="card">
        <div class="card-body">
            <h4 class="card-title">Inline forms</h4>
            <br><br><br></b>
            <form class="form-inline" method="POST" action="">
                <div class="input-group mb-2 mr-sm-2">
                    <div class="input-group-prepend">
                        <div class="input-group-text">@</div>
                    </div>
                    <input type="text" name="promo" value="<?php echo $promoData['pr']; ?>" class="form-control" id="inlineFormInputGroupUsername2" placeholder="">
                </div>
                <button type="submit" class="btn btn-primary mb-2">Submit</button>
            </form>
        </div>
    </div>
</div>

<?php
include 'alt.php';
?>
