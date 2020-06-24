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
if(isset($_POST["submit"])){
$user = $_SESSION['username'];
$name = $_POST['Iname'];
$desc = $_POST['Idesc'];
$query = "UPDATE item SET title='$name',MDescription='$desc',FDescription='$desc' WHERE id = '$id' " ;
    mysqli_query($connect,$query);
    echo '<script>alert("The item was edited successfully") </script>';
    mysqli_close($connect) ;
    header("Location:SellerPage.php");


}

?>