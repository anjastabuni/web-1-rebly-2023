var mobil = {
  nama: "Toyota",
  tipe: "Agya",
  berat: 600,
  warna: "Hitam",

  // fungsi
  maju: function () {
    return "Mobil mulai Maju";
  },
  mundur: function () {
    return "Mobil Mundur";
  },
};

// tampilkan
document.getElementById("demo").innerHTML = mobil.nama + " " + mobil.maju();
