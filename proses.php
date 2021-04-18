<?php 
  include 'database.php';
  $db = new database();

  $aksi = $_GET['aksi'];
  if ($aksi=="tambah"){
      $db->input(
      $_POST['nik'],
      $_POST['jalur'],
      $_POST['akademik'],md5($_POST['password']),$_POST['nama'],
      $_POST['no_hp'],
      $_POST['petugas'],
      $_POST['tahun'],
      $_POST['biaya']);
      header("location:tampil.php");
  }elseif ($aksi=="hapus"){
    $db->hapus($_GET['nik']);
    header("location:tampil.php");
  }elseif ($aksi=="update"){
    $db->update($_POST['nik'],
    $_POST['jalur'],
    $_POST['akademik'],md5($_POST['password']),$_POST['nama'],
    $_POST['no_hp'],
    $_POST['petugas'],
    $_POST['tahun'],
    $_POST['biaya'],);
    header("location:tampil.php");
  }
?>