function benar() {
  alert("terimakasih sudah mengisi form ini");
}
function pesan() {
  var nama = document.getElementById("nama").value;
  var email = document.getElementById("email").value;
  var nohp = document.getElementById("nohp").value;

  if (nama == "" || email == "" || nohp == "") {
    alert("semua data harus diisi");
    return false;
  }

  if (nama.length <= 1) {
    alert("lengkapi nama lengkap anda");
    return false;
  }

  if (email.indexOf("@") === -1) {
    alert("email harus mengandung @");
    return false;
  }

  benar();
}
