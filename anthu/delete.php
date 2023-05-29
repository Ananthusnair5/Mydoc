<?php
include_once ('conn.php');
$id = $_GET['id'];
$query ="DELETE FROM anlist WHERE id='$id'";
$data=mysqli_query($connection,$query);
if($data){
    ?>
    <script type="text/javascript">
        alert("data deleted successfully")
        window.open("http://localhost/anthu/list.php","_self");
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