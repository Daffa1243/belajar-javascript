alert ("Menu Makanan \n1.Nasi Rp .5000 \n2.Ayam Rp .10000 \n3.sambal Rp. 4000" );
var makanan = prompt("Silahkan memesan");
var pesanan = prompt("Mau pesan berapa?");
var x = 5000
var y = 10000
var z = 4000
var totalHarga = x * pesanan;
if (makanan == "Nasi") {
  totalHarga = x * pesanan
  alert("Pesanan Anda:\nMakanan: " +
 makanan +"\nJumlah porsi: " + pesanan + 
"\nTotal harga: Rp. " + totalHarga );
} else if (makanan == "Ayam") {
  totalHarga = y * pesanan
  alert("Pesanan Anda:\nMakanan: " +
 makanan +"\nJumlah porsi: " + pesanan + 
"\nTotal harga: Rp. " + totalHarga );
} else if (makanan == "sambal") {
    totalHarga = z * pesanan 
    alert("Pesanan Anda:\nMakanan: " +
 makanan +"\nJumlah porsi: " + pesanan + 
"\nTotal harga: Rp. " + totalHarga );
  } else {
    alert("Menu tidak tersedia")
  }

alert ("Terimakasih sudah mampir");