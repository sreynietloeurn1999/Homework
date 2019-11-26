
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
</head>
<body>
    
    <div class="container">
        <a href="add.php" class="btn btn-primary">Add</a>
        <div class="row">
            <div class="col-12">
                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Name</th>
                            <th>Sex</th>
                            <th>Action</th>
                            
                        </tr>
                    </thead>
                    <?php
                        include "connect.php";
                        $query = mysqli_query($connect,"SELECT*FROM my_family");
                        foreach($query as $row) {
                    ?>
                        <tbody>
                            <tr>
                                <td><?php echo $row['ID']?></td>
                                <td><?php echo $row['Name']?></td>
                                <td><?php echo $row['Sex']?></td>
                                <td>
                                    <a href="edit.php?id=<?php echo $row['ID']?>"><i class="material-icons" >edit</a>
                                    <a href="delete.php?id=<?php echo $row['ID']?>"><i class="material-icons">delete</a>
                                </td>
                            </tr>
                        </tbody>

                        <?php
                        }
                        ?>
                </table>
            </div>
        </div>
    </div>
</body>
</html>