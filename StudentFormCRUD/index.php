<?php

    include 'connection.php';

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css">

    <title>Student Form CRUD</title>
</head>
<body>
    <div class="container">
        <h1 style="text-align:center" class="my-3">Student List</h1>
        <button class="btn btn-primary my-3"><a href="addDATA.php" class="text-light">Add Student</a></button>
        <table class="table">
            <thead class="thead-dark">
                <tr>
                <th scope="col">ID no.</th>
                <th scope="col">Firstname</th>
                <th scope="col">Lastname</th>
                <th scope="col">Course</th>
                <th scope="col">Operations</th>
                </tr>
            </thead>
            <tbody>

                <?php
                    
                    $sql = "SELECT * FROM `student_list`";
                    $result = mysqli_query($con, $sql);
                    if($result){
                        while($row = mysqli_fetch_assoc($result)){
                            $id = $row['id'];
                            $firstname = $row['firstname'];
                            $lastname = $row['lastname'];
                            $course = $row['course'];
                            echo    '<tr>
                                        <th scope="row">' .$id. '</th>
                                        <td>' .$firstname. '</td>
                                        <td>' .$lastname. '</td>
                                        <td>' .$course. '</td>
                                        <td>
                                            <button class="btn btn-primary"><a href="editDATA.php?editDATAid=' .$id. '" class="text-light">Edit</a></button>
                                            <button class="btn btn-danger"><a href="deleteDATA.php?deleteid=' .$id. '" class="text-light">Delete</a></button>
                                        </td>
                                    </tr>';
                        }
                                    
                    }
                ?>
                
            </tbody>
        </table>
    </div>   
</body>
</html>