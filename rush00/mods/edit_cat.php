<?php
    session_start();
    if (!isset($_SESSION['user_email']))
        echo "<script>window.open('login.php?not_admin=You are not an Mod!','_self')</script>";
    else
    {
?>
<?php
    include ("includes/db.php");
    if (isset($_GET['edit_cat']))
    {
        $cat_id = $_GET['edit_cat'];
        $get_cat = "select * from categories where cat_id='$cat_id'";
        $run_cat = mysqli_query($con, $get_cat);
        $row_cat = mysqli_fetch_array($run_cat);
        $cat_id = $row_cat['cat_id'];
        $cat_title = $row_cat['cat_title'];

    }
?>

<form action="" method="post" style="padding: 80px">
    <b>Edit Category:</b>
    <input type="text" name="sel_cat" value="<?php echo $cat_title;?>"/>
    <input type="submit" name="update_cat" value="Update category">
</form>

<?php
    if (isset($_POST['update_cat']))
    {
        $sel_cat = $_POST['sel_cat'];
        $update_cat = "update categories set cat_title='$sel_cat' where cat_id='$cat_id'";
        $run_cat = mysqli_query($con, $update_cat);
        if ($run_cat)
        {
            echo "<script>alert('Category Has Been updateed!')</script>";
            echo "<script>window.open('index.php?view_cats', '_self')</script>";
        }
    }
?>
<?php } ?>