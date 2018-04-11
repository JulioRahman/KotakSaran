// fungsi nge-cek nis pake AJAX
function kirimnis(str) {
  if (str.length > 0) {
    if (window.XMLHttpRequest) {
      // kode untuk IE7+, Firefox, Chrome, Opera, Safari
      xmlhttp = new XMLHttpRequest();
    } else { 
      // kode untuk IE6, IE5
      xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
    }
    xmlhttp.onreadystatechange = function() {
      if (this.readyState == 4 && this.status == 200) {
        if (this.responseText == "tidak") {
          document.getElementById("exampleModalLongTitle").innerHTML = "Peringatan!";
          document.getElementById("tombolsubmit").style.display = "none";
          document.getElementById("isimodal").innerHTML = "NIS yang anda masukan tidak terdaftar atau salah!";
          document.getElementById("isimodal").style.display = "inline";
          document.getElementById("fgtidak").style.display = "none";
        } else if (this.responseText == "masuk") {
          document.getElementById("exampleModalLongTitle").innerHTML = "Masuk";
          document.getElementById("tombolsubmit").style.display = "inline";
          document.getElementById("tombolsubmit").innerHTML = "Masuk";
          document.getElementById("tombolsubmit").name = "masuk";
          document.getElementById("isimodal").style.display = "none";
          document.getElementById("fgtidak").style.display = "inline";
          document.getElementById("fgnis").style.display =
          document.getElementById("fgnama").style.display =
          document.getElementById("fgjk").style.display =
          document.getElementById("fgemail").style.display =
          "none";
          document.getElementById("fgnislogin").style.display = "block";

          document.getElementById("nislogin").value = str;
        } else if (this.responseText.substr(0,1) == "d") {
          document.getElementById("exampleModalLongTitle").innerHTML = "Daftar";
          document.getElementById("tombolsubmit").style.display = "inline";
          document.getElementById("tombolsubmit").innerHTML = "Daftar";
          document.getElementById("tombolsubmit").name = "daftar";
          document.getElementById("isimodal").style.display = "block";
          document.getElementById("isimodal").innerHTML = "Sepertinya kamu belum terdaftar, silakan isi form dibawah!";
          document.getElementById("fgtidak").style.display = "inline";
          document.getElementById("fgnis").style.display =
          document.getElementById("fgnama").style.display =
          document.getElementById("fgjk").style.display =
          document.getElementById("fgemail").style.display =
          "block";
          document.getElementById("fgnislogin").style.display = "none";

          document.getElementById("nis").value = str;
          document.getElementById("nama").value = this.responseText.slice(2);          

          if (this.responseText.substr(1,1) == "L") {
            document.getElementById("rbl").checked = "true";
          } else if (this.responseText.substr(1,1) == "P") {
            document.getElementById("rbp").checked = "true";
          }

          document.getElementById("tombolsubmit").onclick = function() {cekemail(str)};
        }
        $('#modallogin').modal('show');
      }
    }
    xmlhttp.open("GET", "php/sistem-login.php?nis="+str, true);
    xmlhttp.send();
  }
}

//fungsi nge-cek email pake AJAX
function cekemail(str) {
  if (str.length > 0) {
    if (window.XMLHttpRequest) {
      // kode untuk IE7+, Firefox, Chrome, Opera, Safari
      xmlhttp = new XMLHttpRequest();
    } else { 
      // kode untuk IE6, IE5
      xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
    }
    xmlhttp.onreadystatechange = function() {
      if (this.readyState == 4 && this.status == 200) {
        if (this.responseText == "ada") {
          document.getElementById("judulmodal2").innerHTML = "Peringatan!";
          document.getElementById("isimodal2").innerHTML = "Email yang anda masukan sudah terpakai, silakan masukan email lain";
        } else if (this.responseText == "berhasil") {
          document.getElementById("judulmodal2").innerHTML = "Pemberitahuan!";
          document.getElementById("isimodal2").innerHTML = "Pendaftaran berhasil, silakan login";

          document.getElementById("btutup").onclick = function() {$('#modallogin').modal('hide')};
        }
        $('#modal2').modal('show');
      }
    }
    xmlhttp.open("GET", "php/daftar.php?nis="+str+"&email="+document.getElementById("email").value+"&katasandi="+document.getElementById("katasandi").value, true);
    xmlhttp.send();
  }
}

// statistik pake chart.js -----------------
var ctx = document.getElementById("chart");

var data = {
  datasets: [{
    data: [1, 1, 1],
    backgroundColor: [
      '#00b8ff',
      '#9600ff',
      '#ff00c1'
    ]
  }],

  labels: [
    'Saran',
    'Keluhan',
    'Curhat'
  ]
};

var chart = new Chart(ctx,{
  type: 'pie',
  data: data
});