<?php

include ("./header.php");
include ("./nav.php");
include ("./db.php");

if(isset($_POST['signup'])){
    $name = $_POST['name'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $phno = $_POST['phone'];
    $address = $_POST['address'];
    $role = 'user';
    $sql = "INSERT INTO users (user_name,user_email,user_pass,uphno,uaddress,user_role) VALUES ('$name','$email','$password','$phno','$address','$role')";
    $result = mysqli_query($conn,$sql);
}
?>


        <!-- login -->
        <div class="container login">
            <div class="row"> 
                <div class="col-md-4" id="side1">
                    <h3>Welcome Back!!</h3>
                    <p>Lorem ipsum dolor sit amet consectetur.</p>
                    <div id="btn"><a href="login.html">Login</a></div>
                </div>
                <div class="col-md-8" id="side2">
                    <form action="" method="post">
                      <h3>Create Account</h3>
                    <div class="inp">
                        <input name="name" type="text" placeholder="Name" required>
                        <input name="email" type="email" placeholder="Email" required>
                        <input name="password" type="text" placeholder="Password" required>
                        <input type="number" name="phone" placeholder="Phone Number" id="">
                        <input type="text" name="address" placeholder="Address" id="">
                    </div>
                    <p>Lorem ipsum dolor sit amet.</p>
                    <div class="icons">
                        <i class="fa-brands fa-twitter"></i>
                        <i class="fa-brands fa-facebook-f"></i>
                        <i class="fa-brands fa-instagram"></i>
                    </div>
                    <div id="login"><button name="signup">SIGN UP</button></div>
                    </form>
                </div>
            </div>
        </div>
        <!-- login -->


<?php 

include ("./footer.php");

?>