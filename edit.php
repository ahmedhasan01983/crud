<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register | MyWebsite</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            background-color: #f8f9fa;
            display: flex;
            align-items: center;
            justify-content: center;
            min-height: 100vh;
        }
        .register-card {
            width: 100%;
            max-width: 450px;
            padding: 2rem;
            border-radius: 15px;
            box-shadow: 0 10px 25px rgba(0,0,0,0.1);
            background: white;
        }
        .btn-primary {
            background-color: #0d6efd;
            border: none;
            padding: 0.6rem;
        }
    </style>
</head>
<body>
    <?php
    include "code.php";
    $editid =$_GET['editid'];
    $dataquery =mysqli_query(connect(),"SELECT *FROM users WHERE id=$editid ");
    $convert =mysqli_fetch_array($dataquery);

    if($dataquery == true){
        $name =$convert['name'];
         $email = $convert['email'];
          $password = $convert['passowrd'];
          $id = $convert['id'];
    }


    ?>

<div class="register-card">
    <h2 class="text-center mb-4">Create Account</h2>
    <form action="code.php" method="POST">
        <input type="hidden" name="edid" value=" <?php echo "$id" ?>"  >
        <div class="mb-3">
            <label for="fullName" class="form-label">username</label>
            <input type="text" class="form-control" name="editusername" value=" <?php echo "$name" ?>" id="fullName" placeholder="John Doe" required>
        </div>

        <div class="mb-3">
            <label for="email" class="form-label">Email address</label>
            <input type="email" class="form-control" name="eitemail" id="email" value=" <?php echo "$email" ?>" placeholder="name@example.com" required>
        </div>

        <div class="mb-3">
            <label for="password" class="form-label">Password</label>
            <input type="text" class="form-control" name="editpassword" value=" <?php echo "$password" ?>" id="password" placeholder="Min. 8 characters" required>
        </div>

        
        <div class="d-grid">
            <button type="submit" name="edit" class="btn btn-primary">Sign Up</button>
        </div>

        <p class="text-center mt-3">
            Already have an account? <a href="#">Login</a>
        </p>
    </form>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>