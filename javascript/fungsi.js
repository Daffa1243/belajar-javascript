var x = "25";
var y = "3.14"

var toNum = parseInt (X);
var toFloat = parseFloat(y);
var toString = toNum.toString ();
console.log (toString + toString)

//fungsi deklarasi
function jumlah (a, b) {
    return a + b;
}
//fungsi ekspresi 
var jumlah = function(a, b) {
    return a + b;
}
alert (jumlah(5, 20));