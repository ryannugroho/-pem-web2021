<?php
include "koneksi.php";

if(isset($_POST['proses'])){
  mysqli_query($koneksi,"insert into komentar set 
  username = '$_POST[username]',
  comment = '$_POST[comment]'");
  
  echo "Data telah tersimpan";
}
?>