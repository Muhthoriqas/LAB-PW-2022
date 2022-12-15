const kali = prompt("Masukkan Angka");
if (kali) {
	if (isNaN(kali) || kali.trim() == "") {
		console.log(" Masukkan Inputan Angka");
	} else {
		const kal = prompt("mau dikali sampai berapa");

		if (isNaN(kal) || kal.trim() == "") {
			console.log("Bukan Angka");
		} else {
				let total = 0;
				
				for (let i = 1; i <= kal; i++) {
					hasil = kali * i;
					total += hasil;
					console.log(`${i} X ${kali}  =  ${hasil}`);
					
				}
				console.log(`Jumlah Semua Perkalian ${total}`);
			}
		}
	}
