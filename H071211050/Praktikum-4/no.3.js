var str = prompt("Masukkan Kalimat")
var chars = str.split("");
chars=chars.sort();
var letters_count = {};

for (var i=0; i<chars.length; i++) {
    if (letters_count[chars[i]] == undefined) {
        letters_count[chars[i]] = 0;
    }
    letters_count[chars[i]]++;
}

for (var i in letters_count) {
    if (i === " ") {
        console.log("spasi" + " = " + letters_count[i]);
    } else {
        console.log(i + " = " + letters_count[i]);
    }
}