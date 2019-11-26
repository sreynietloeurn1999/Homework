<?php
    include "connect.php";
    $id = $_GET['id'];
    $query = mysqli_query($connect,"SELECT*FROM my_family WHERE id=$id");
    foreach($query as $result) {
?>

<div class="container">
    <div class="row">
        <div class="col-4"></div>
        <div class="col-4">
            <form action="#" method="post">
                <div class="form-group">
                    <input type="text" name="name" placeholder="Name" class="form-control" value="<?php echo $result['Name']?>">
                </div>
                <div class="form-group">
                    <input type="text" name="sex" placeholder="Sex" class="form-control" value="<?php echo $result['Sex']?>">
                </div>
                <button type="submit" class="btn btn-primary" name="sub">Submit</button>
            </form>
            <?php
                }
            ?>
        </div>
        <div class="col-4"></div>
    </div>
</div>

<?php
    include "connect.php";
  
    if(isset($_POST['sub'])) {
        $name = $_POST['name'];
        $sex  = $_POST['sex'];
        $query = mysqli_query($connect,"UPDATE my_family SET Name='$name',Sex='$sex' WHERE id=$id");
        header("Location:index.php");
    }
   
?>