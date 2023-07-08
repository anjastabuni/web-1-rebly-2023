// menggabungkan tiga array
var kelasA = ["Rebly", "Jelky", "Trivena "];
var kelasB = ["Manson", "Iko", "Siska "];
var kelasC = ["Mas", "Ellyansek", "Marsel"];

var mhsTI = kelasA.join(" ").concat(kelasB.join(" "), kelasC.join(" "));
document.getElementById("tigaArray").innerHTML = mhsTI;

// iterasi data dari array dengan for
var buah = ["pisang", "durian", "tomat"];

// looping data
var teks, i;
teks = "<ul>";
for (i = 0; i < buah.length; i++) {
  teks += "<li>" + buah[i] + "</li>";
}
teks += "</ul>";
document.getElementById("demo").innerHTML = teks;
