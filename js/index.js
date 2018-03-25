$(function () {
  $('[data-toggle="popover"]').popover();
});

function kirimnis(str) {
  $('#email').popover('hide');
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

          document.getElementById("tombolsubmit").onclick = "cekemail(nis.value)";
        }
        $('#modallogin').modal('show');
      }
    }
    xmlhttp.open("GET", "php/sistem-login.php?nis="+str, true);
    xmlhttp.send();
  }
}

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
          $('#email').popover('show');
        } else if (this.responseText == "berhasil") {
          $('#modallogin').modal('hide');
          kirimnis(str);
        }
      }
    }
    xmlhttp.open("GET", "php/daftar.php?nis="+str+"+email="+document.getElementById("nis").value+"+katasandi="+document.getElementById("katasandi").value, true);
    xmlhttp.send();
  }
}