<?php
session_start();
ob_start();
include ("./header.php");
include ("./nav.php");
include ("./db.php");

if(isset($_POST['login'])){
    $username = $_POST['username'];
    $password = $_POST['password'];
    $role = $_POST['urole'];
    $sql = "SELECT * FROM users WHERE user_name='$username' AND user_pass='$password' AND user_role='$role'";
    $result = mysqli_query($conn,$sql);
    if(mysqli_num_rows($result)>0){
        $row = mysqli_fetch_assoc($result);
        if($username == $row['user_name'] and $password == $row['user_pass'] and $role == 'user'){
            $_SESSION['uid'] = $row['user_id'];
            $_SESSION['login'] = true;
            header("location: index.php");
        }else{
            header("location: admin.php");
        }
    }
}

?>
        <!-- login -->
        <div class="container login">
            <div class="row">
                <div class="col-md-4" id="side1">
                    <h3>Hello Friend!</h3>
                    <p>Create New Account</p>
                    <div id="btn"><a href="signup.html">Sign up</a></div>
                </div>
                <div class="col-md-8" id="side2">
                    <form action="" method="post">
                      <h3>Login Account</h3>
                    <div class="inp">
                        <input type="text" name="username" placeholder="User Name" required>
                        <input type="text" name="password" placeholder="Password" required>
                    </div>
                    <div class="role">
                      <select name="urole" id="">
                        <option value="user">User</option>
                        <option value="admin">Admin</option>
                      </select>
                    </div>
                    <p>Forgot Your Password</p>
                    <div class="icons">
                        <i class="fa-brands fa-twitter"></i>
                        <i class="fa-brands fa-facebook-f"></i>
                        <i class="fa-brands fa-instagram"></i>
                    </div>
                    <div id="login"><button name="login">LOG IN</button></div>

                    </form>
                </div>
            </div>
        </div>
        <!-- login -->


<?php 

include ("./footer.php");

?>