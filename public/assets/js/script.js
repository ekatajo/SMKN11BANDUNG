const lang = navigator.language;
let date = new Date();

let tanggal = date.getDate();
let bulan = date.getMonth();
let namaHari = date.toLocaleString(lang, {weekday: 'long'})
let namaBulan = date.toLocaleString(lang, {month: 'long'})
let tahun = date.getFullYear();

document.getElementById('namaBulan').innerHTML = namaBulan;
document.getElementById('namaHari').innerHTML = namaHari;
document.getElementById('tanggal').innerHTML = tanggal;
document.getElementById('tahun').innerHTML = tahun;