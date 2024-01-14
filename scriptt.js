let guncelSkor = 0;
let skor = 0;

document.addEventListener("DOMContentLoaded", function() {
    loadQuestion();
});

function loadQuestion() {
    // Burada PHP veya başka bir yöntemle sunucudan soruları alabilirsiniz
    // Örneğin, XMLHttpRequest veya fetch kullanabilirsiniz

    // Örneğin sadece bir dizi kullanalım:
    const sorular = [
        {
            soru_metni: "soru_metni",
            cevap_a: "cevap_a",
            cevap_b: "Cevap 2",
            cevap_c: "Cevap 3",
            dogru_cevap: 1
        },
        // Diğer soruları da ekleyin
    ];

    const currentQ = sorular[currentQuestion];
    document.getElementById("soru_metni").innerText = currentQ.soru_metni;
    document.getElementById("cevap_a").value = currentQ.cevap_a;
    document.getElementById("label1").innerText = currentQ.cevap_a;
    document.getElementById("cevap_b").value = currentQ.cevap_b;
    document.getElementById("label2").innerText = currentQ.cevap_b;
    document.getElementById("cevap_c").value = currentQ.cevap_c;
    document.getElementById("label3").innerText = currentQ.cevap_c  ;
}

function submitAnswer() {
    const selectedOption = document.querySelector('input[name="options"]:checked');
    
    if (!selectedOption) {
        alert("Lütfen bir seçenek seçin");
        return;
    }

    const answer = parseInt(selectedOption.value);
    const currentQ = sorular[currentQuestion];

    if (answer === currentQ.correct_option) {
        score++;
    }

    soru_id++;

    if (currentQuestion < questions.length) {
        loadQuestion();
    } else {
        alert("Quiz tamamlandı. Puanınız: " + score);
    }
}
