// pengkondisian if else
const nilaiAkhir = 90;
let tempat;
if (nilaiAkhir >= 80) {
  tempat = "Nilai A";
} else if (nilaiAkhir >= 70) {
  tempat = "Nilai B";
} else if (nilaiAkhir >= 60) {
  tempat = "Nilai C";
}
document.getElementById("ifElse").innerHTML = "Lulus dengan " + tempat;

// pengkondisian switch
let day;
switch (new Date().getDay()) {
  case 0:
    day = "Minggu";
    break;
  case 1:
    day = "Senin";
    break;
  case 2:
    day = "Selasa";
    break;
  case 3:
    day = "Rabu";
    break;
  case 4:
    day = "Kamis";
    break;
  case 5:
    day = "Jumat";
    break;
  case 6:
    day = "Sabtu";
    break;
}
document.getElementById("switch").innerHTML = "Hari " + day;
