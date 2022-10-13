var nama = prompt("Masukkan Nama Anda");
if (nama.trim()) {

    var tugas = prompt("Apakah sudah mengumpulkan Tugas Praktikum? YES atau NO");
    tugas = tugas.toLowerCase();
    if (tugas=="yes") {
        

        var asistensi = prompt("Ikut Asistensi? YES atau NO");
        asistensi = asistensi.toLowerCase();
        if (asistensi=="yes") {


            var totalasistensi = prompt("Sudah berapa asistensi? 1 atau 2")
            if (totalasistensi=="1")  {
                console.log("Asistensi sekali lagi ya "+nama);

            } else if(totalasistensi=="2") {
                console.log("Hebat kamu "+nama+" :)"); 

            } else {
                console.log("Masukkan input yang benar yaitu 1 atau 2")
            }
            
        } else if (asistensi=="no") {
            console.log("Asistensi dulu ya"+ nama);

        } else {
            console.log("Masukkan input yang benar yaitu YES atau NO")
        }

    } else if (tugas=="no") {
        console.log("Jangan Lupa dikerja tugas praktikumnya "+ nama)

    } else {
        console.log("Masukkan input yang benar yaitu YES atau NO")
    }

} else  {
    console.log("Masukkan Nama Terlebih Dahulu");
}