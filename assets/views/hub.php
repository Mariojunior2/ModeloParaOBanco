<?php 
session_start();
include '../includes/header.php'; 

$id = $_SESSION['user_id'];

if(!isset($id)) {
    header('Location: ../../index.php');
    exit();
}

?>
<h1><?php echo "" . $_SESSION['user_name']; ?></h1>
<?php 
include '../includes/footer.php'; 
?>