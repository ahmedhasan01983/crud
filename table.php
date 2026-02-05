<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
     <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<body>
    <a href="reister.php"></a>
    <a href="reister.php">create account</a>

    <table class="table">
        <tr>
        <th>name</th>
        <th>email</th>
        <th>password</th>
        <th>action</th>
    </tr>
    <?php
    include "code.php";
    $data = mysqli_query( connect(),"SELECT * FROM users");
    foreach($data as $value){
        ?>
        <tr>

        <td><?php echo "$value[name]"?></td>
        <td><?php echo "$value[email]"?></td>
        <td><?php echo "$value[passowrd]"?></td>
        <td><a class="btn btn-danger" href="code.php?id='<?php echo "$value[id]"  ?>'">DELETE</a> 
        <a class="btn btn-success" href="code.php?id='<?php echo "$value[id]"  ?>'">EDIT</a></td>
        </tr>


        <?php
    }




    ?>
</table>

    
</body>
</html>