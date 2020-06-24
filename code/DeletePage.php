<?php
    session_start();
if(!isset($_SESSION['username']))
    header('location:login.php?error=Please signin again!');
?>
    <?php  
    $con= new mysqli("localhost","root","","swe381project");
if (mysqli_connect_errno($con)){
  echo "Failed to connect to MySQL: ".mysqli_connect_error();} 

?>
<?php
$id = $_GET['id'];
$connect = mysqli_connect("localhost","root", "","swe381project");
$query = "DELETE FROM item WHERE id = '$id'";
mysqli_query($connect,$query);
    mysqli_close($connect) ;
    header("Location:myProducts.php?message=Product has been deleted successfuly&id=$id");
?>