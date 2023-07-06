// perulangan for
var listNama = ["Rebly", "Mas", "Manson", "Jelky"];

let wadah = "";
for (let x in listNama) {
  wadah += listNama[x] + "<br>";
}
document.getElementById("fordata").innerHTML = wadah;

// perulangan while
const angota1 = ["Nama : Rebly Tabuni", "Alamat : Sentani", "Email : reblytabuni2004@gmail.com"];
let i = 0;
let mab = "";
while (angota1[i]) {
  mab += angota1[i] + "<br>";
  i++;
}
document.getElementById("whiledata").innerHTML = mab;

// perulangan do while
var buahan = ["Kelapa", "Pinang", "mangga", "Rambutan", "Salak"];
let tempat = "";
let buah = 0;
do {
  tempat += buahan[buah] + "<br>";
  buah++;
} while (buahan[buah]);
document.getElementById("dowhile").innerHTML = tempat;
