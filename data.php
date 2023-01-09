<?php
$nama_user = $_POST['username'];
$email_user = $_POST['useremail'];
$pesan_user = $_POST['userpesan'];
$conn = mysqli_connect("localhost", "root","","feedback");
$query = ("INSERT INTO data(nama, email, pesan)VALUES('$nama_user', '$email_user', '$pesan_user')");
$result = mysqli_query($conn, $query);
if($result){
  ?>
  <script language="JavaScript">
    alert('Terima Kasih Sudah Mengirim Pesan');
  </script>
<?php
} else{
  ?>
<script language="JavaScript">
    alert('Gagal Mengirim Pesan');
  </script>
<?php
}
?>