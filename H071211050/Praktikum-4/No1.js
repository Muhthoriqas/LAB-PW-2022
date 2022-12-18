const nama = prompt("Masukkan Nama Anda");

if (!nama.trim()) {
	console.log("Masukkan Nama");
} else {
	const a = prompt("Sudah kerja tugasnya? YES/yes or NO/no");
	if (a == "yes" || a == "YES") {
		const b = prompt("Sudah ikut Asistensi? YES or NO");
		switch (b) {
			case "YES":
				const b = prompt("Sudah berapa kali asistensi? 1 atau 2");
				switch (b) {
					case "1":
						console.log("1 kali pi lagi");
						break;
					case "2":
						console.log("Keren ko sob");
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
	} else if (a == "no" || a == "NO") {
		console.log("Bisa ko kerja dulu tugasmu?");
	} else {
		console.log("Masukkan YES/yes or NO/no");
	}
}
