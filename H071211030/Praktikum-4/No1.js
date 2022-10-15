const nama = prompt("Masukkan Nama Anda");

if (!nama.trim()) {
	console.log("Masukkan nama dulu banh");
} else {
	let a = prompt("Sudah kerja tugasnya? YES/yes or NO/no");
	a = a.toLowerCase();
	if (a == "yes") {
		let b = prompt("Sudah ikut Asistensi? YES or NO");
		b = b.toUpperCase();
		switch (b) {
			case "YES":
				const c = prompt("Sudah berapa kali asistensi? 1 atau 2");
				switch (c) {
					case "1":
						console.log("Sekali lagi");
						break;
					case "2":
						console.log("Mantap");
						break;
					default:
						console.log("Masukkan 1 atau 2");
				}
				break;
			case "NO":
				console.log("Asistensi dulu lah");
				break;
			default:
				console.log("Masukkan YES atau NO");
		}
	} else if (a == "no") {
		console.log("Kerja Dulu Tugasnya Banh");
	} else {
		console.log("Masukkan YES/yes or NO/no");
	}
}
