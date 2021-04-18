<?php
    include 'database.php';
    $db = new database ();
?>
<h1>Crud OOP </h1>
<h3> Data </h3>
<a href="input.php">Input Data </a>
<table border="1">
<tr>
    <th>No</th>
    <th>Nik</th>
    <th>Jalur</th>
    <th>Akademi</th>
    <th>Password</th>
    <th>Nama</th>
    <th>No_Hp</th>
    <th>Petugas</th>
    <th>Tahun</th>
    <th>Biaya</th>
    <th>Tanggal_Daftar</th>
    <th>Opsi</th>
<tr>
<?php
    $no = 1;
  if (!empty ($db->tampil_data())) {
    foreach($db->tampil_data() as $d ){ ?>
      <tr>
        <td><?php echo $no++; ?></td>
        <td><?php echo $d['nik']; ?></td>
        <td><?php echo $d['jalur']; ?></td>
        <td><?php echo $d['akademik']; ?></td>
        <td><?php echo $d['password']; ?></td>
        <td><?php echo $d['nama']; ?></td>
        <td><?php echo $d['no_hp']; ?></td>
        <td><?php echo $d['petugas']; ?></td>
        <td><?php echo $d['tahun']; ?></td>
        <td><?php echo $d['biaya']; ?></td>
        <td><?php echo $d['tgl_daftar']; ?></td>
        <td>
          <a href="edit.php?id=<?php echo $d['id'];?> &aksi=edit">Edit </>
          <a href="proses.php?id=<?php echo $d['id'];?> &aksi=hapus">Hapus </>
        </td>
      </tr>
      <?php 
      
    }
  }
?>
</table>