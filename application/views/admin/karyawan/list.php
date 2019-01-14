<?php
  foreach ($karyawan as $karyawanlist):
    echo $karyawanlist->id_karyawan;
    echo $karyawanlist->nama_karyawan;
    echo $karyawanlist->alamat;
    echo $karyawanlist->telpon;
    echo "<br />";
  endforeach;
?>
