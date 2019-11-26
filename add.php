<div class="container">
    <div class="row">
        <div class="col-4"></div>
        <div class="col-4">
            <form action="#" method="post">
                <div class="form-group">
                    <input type="text" name="name" placeholder="Name" class="form-control">
                </div>
                <div class="form-group">
                    <input type="text" name="sex" placeholder="Sex" class="form-control">
                </div>
                <button type="submit" class="btn btn-primary" name="sub">Submit</button>
            </form>
        </div>
        <div class="col-4"></div>
    </div>
</div>

<?php
    include "connect.php";
    if(isset($_POST['sub'])) {
        $name = $_POST['name'];
        $sex  = $_POST['sex'];
        $query = mysqli_query($connect,"INSERT INTO my_family(Name,Sex) VALUES('$name','$sex')");
        header("Location:index.php");
    }
   
?>