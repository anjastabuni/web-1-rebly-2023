// operator aritmatika
var a = 20;
var b = 10;
var c = a / b;
document.getElementById("aritmatika").innerHTML = "10 / 20 = " + c;

// operator assignment
let angka = 100;
angka += 100;
document.getElementById("Assignment").innerHTML = "100 += 100 = " + angka;

// operator penggabungan string
var salam = "Selamat Datang";
salam += " Rebly Megib Tabuni";
document.getElementById("gabung").innerText = salam;

// operator pembanding
const angka1 = 50;
const huruf = 50;
const banding = angka1 >= huruf;
document.getElementById("pembanding").innerText = banding;

// operator logika
var UTS = 80;
var UAS = 50;
if (UTS && UAS == 80) {
  document.getElementById("logika").innerHTML = "Lulus";
} else {
  document.getElementById("logika").innerHTML = "Tidak Lulus";
}
