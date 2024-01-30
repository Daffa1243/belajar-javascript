var siswa = new Object();
siswa.namaDepan = "Daffa";
siswa.namaBelakang ="Akhdan";
siswa.alamat = "Bandung";
siswa.namalengkap = function() {
     return this.namaDepan + " " + this.namaBelakang;
}

alert("Nama :" + siswa.namalengkap());
// function namalengkap() {