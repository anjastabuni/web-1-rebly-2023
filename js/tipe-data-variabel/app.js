var A = 5;
var B = 5;
var C = A + B;

document.getElementById("var").innerHTML = "hasil variabel  A + B = " + C;

let angka1 = 10;
let angka2 = 10;
let hasil = A - B;

document.getElementById("let").innerHTML = "hasil variabel A - B = " + hasil;

const namadepan = "Rebly";
const namabelakan = " Tabuni";
const namalengkap = namadepan + namabelakan;

document.getElementById("let").innerHTML = "Nama Lengkap " + namalengkap;

// tipe data
// Numbers:
let numbers = 7.5;
document.getElementById("number").innerHTML = "tipe data numbers = " + numbers;

// Strings:
let namaDpn = "Rebly";
let namaBlkg = "Tabuni";
document.getElementById("string").innerHTML = "tipe data string = " + namaDpn + " " + namaBlkg;

// Booleans
let x = true;
let y = false;
document.getElementById("boolean").innerHTML = "tipe data boolean = " + x + " " + y;

// Object:
const person = { firstName: "Rebly", lastName: "Tabuni" };
document.getElementById("object").innerHTML = "tipe data object = " + person.firstName + " " + person.lastName;

// Array object:
const cars = ["Singkong", " Keladi", " Ubi", " Papeda", " Pinang"];
document.getElementById("array").innerHTML = "tipe data Array = " + cars;

// Date object:
const date = new Date("2023-07-6");
document.getElementById("dtObject").innerHTML = "tipe data date Object = " + date;
