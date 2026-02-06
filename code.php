<?php
function connect(){
    return mysqli_connect("localhost","root","","work");
};

if(isset($_POST['submit'])){

$username =$_POST['username'];
$email =$_POST['email'];
$password =$_POST['password'];

$insert = mysqli_query(connect() , "INSERT INTO users(name,email,passowrd) VALUES('$username','$email','$password')");

if($insert == true){

?>

<script>
    alert("account created succsesfully")
    location.assign("table.php")
</script>

<?php
}
};

//delete

if(isset($_GET['id'])){
    $getid =$_GET ['id'];
    $get =mysqli_query(connect(),"DELETE FROM users where id = $getid ");

    if( $get == true){


?>

<script>
    alert("account created succsesfully")
    location.assign("table.php")
</script>

<?php
}

}
//edit
if(isset($_POST['edit'])){
    $ename = $_POST['editusername'];
    $email = $_POST['eitemail'];
    $password = $_POST['editpassword'];
    $eid = $_POST["edid"];




    $postsquery = mysqli_query(connect(),"UPDATE users SET name= '$ename', email='$email', passowrd='$password' WHERE id =' $eid '  ");
    if($postsquery == true){
        ?>
        <script>
            alert("edit account succesfully")
            location.assign("table.php")

        </script>
<?php
    }
}





?>