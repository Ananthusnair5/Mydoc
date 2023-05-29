<?php
include_once ('conn1.php');
$id = $_GET['id'];
$query ="DELETE FROM regvalid WHERE id='$id'";
$data=mysqli_query($connection,$query);
if($data){
    ?>
    <script type="text/javascript">
        alert("data deleted successfully")
        window.open("http://localhost/anthu/registerlist.php","_self");
        </script>
        <?php
}
else{
?>
<script type="text/javascript">
        alert("please try again");
        </script>

<?php
}
?>