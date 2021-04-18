<?php 
class database {
  var $host = "localhost";
  var $user = "root";
  var $pass = "";
  var $db = "latihan_18";

function __construct(){
  $this->koneksi = mysqli_connect($this->host, $this->user,$this->pass, $this->db);
}

function tampil_data(){
  $data = mysqli_query ($this->koneksi,"select * from user");
  if (mysqli_num_rows($data) > 0) {
    while ($d = mysqli_fetch_array($data)){
      $hasil[] = $d;
    }
    return $hasil;
  }
}

function input($jalur,$akademik,$password,$nama,$no_hp,$petugas,$tahun,$biaya){
  mysqli_query($this->koneksi,"insert into user values ('','$jalur','$akademik', '$password', '$nama', '$no_hp', '$petugas', '$tahun', '$biaya')");
}

function hapus($nik){
  mysqli_query($this->koneksi,"delete from user where nik = '$nik'");
}

function update($jalur,$akademik,$password,$nama,$no_hp,$petugas,$tahun,$biaya){
  mysqli_query($this->koneksi,"update user set jalur = '$jalur',akademi = '$akademik', password ='$password', nama= '$nama',no_hp = '$no_hp',petugas = '$petugas',tahun = '$tahun',biaya = '$biaya', whre nik = '$nik'");
}

function edit($nik){
  $data = mysqli_query($this->koneksi,"select * from user where nik = '$nik'");
  while ($d = mysqli_fetch_array($data)){
    $hasil[]=$d;
  }
  return $hasil;
}
}
?>