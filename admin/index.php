<?php session_start();
if( $_SESSION['email']=="" ||  $_SESSION['email']==null)
{
    echo "<script>window.location.href='../index.php'</script>";
}   
?>
<?php include "header.php" ?>

<?php include "footer.php" ?>
