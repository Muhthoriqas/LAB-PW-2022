var hasil = 0

var angka = prompt("Perkalian berapa?");
if (!isNaN(angka)) {

    var n = prompt("Ingin dikalikan sampai berapa?")
    if (!isNaN(n)) {

        if (n < 0) {
            console.log("Tidak dapat dikalikan kurang dari 0");
        } else {

            for (let i = 1; i <= n; i++) {
                console.log(i + " x " + angka + " = " + i*angka);
                var perkalian = i*angka
                hasil += perkalian
            }
            console.log("Hasil seluruh perkalian = "+ hasil );
        }

    } else {
        console.log("Input bukan angka");
    }

} else {
    console.log("Input bukan angka");
}

