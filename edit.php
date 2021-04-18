<?php 
    include 'database.php';
    $db = new database();
?>
<h2>Edit Data</h2>
<form action="proses.php?aksi=update" method="POST">
<?php 
    foreach($db->edit($_GET['id']) as $d) { ?> 
<table>
  <tr>
    <td>Jalur</td>
    <td>
        <input type="hidden" name="nik" value="<?php echo $d['nik'] ?>" >
        <input type="text" name="username" value="<?php echo $d['jalur'] ?>" >
    </td>
  </tr>
  <tr>
    <td>Akademik</td>
    <td><input type="text" name="akademik" value="<?php echo $d['akademik']?>"></td>
  </tr>
  <tr>
    <td>Password</td>
    <td><input type="password" name="password" value="<?php echo $d['password']?>"></td>
  </tr>
  <tr>
    <td>Nama</td>
    <td><input type="text" name="nama" value="<?php echo $d['password']?>"></td>
  </tr>
  <tr>
    <td>No Hp</td>
    <td><input type="text" name="no_hp" value="<?php echo $d['no_hp']?>"></td>
  </tr>
  <tr>
    <td>Petugas</td>
    <td><input type="text" name="petugas" value="<?php echo $d['petugas']?>"></td>
  </tr>
  <tr>
    <td>Tahun</td>
    <td><input type="text" name="tahun" value="<?php echo $d['tahun']?>"></td>
  </tr>
  <tr>
    <td>Biaya</td>
    <td><input type="text" name="biaya" value="<?php echo $d['biaya']?>"></td>
  </tr>
  <tr>
    <td></td>
    <td><input type="submit" name="Simpan"></td>
  </tr>
</table>
<?php } ?>
</form>
