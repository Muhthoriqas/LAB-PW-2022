const input = prompt("Masukkan kalimat");
let chars = input.split("");
console.log(chars);
while (true) {
	if (chars.length == 0) {
		break;
	}
	const findItem = chars[0];
	let jumlah = 0;

	for (const item of chars) {
		console.log(item);
		if (item == findItem) {
			jumlah++;
		}
	}
	console.log(`"${findItem}" = ${jumlah}`);
	chars = chars.filter((element, index) => element != findItem);
}