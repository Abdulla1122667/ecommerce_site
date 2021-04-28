        <?php include('header.php');?>
        <?php include('menu.php');?>
        <?php include('slider.php');?>
       
       	<div class="content">
            <div class="content">
                <h1>Login as Admin</h1>
                <p>** Please use pre-defined username and password to login as admin...</p>
                <p>** Only authorized person can login as admin, so there is no registration for admin. </p>
                <?php
                    if($_SESSION['loginErrorMessage']){ 
                        echo $_SESSION['loginErrorMessage'];
                    }
                ?>

                <form method="post" action="process/admin-login-process.php">
                    <table>
                        <tr>
                            <td>Admin Username: *</td>
                            <td><input class="form-control" type="text" name="admin_username" id="admin_username" value="admin" required="required"></td>
                        </tr>
                        <tr>
                            <td>Admin Password: *</td>
                            <td><input class="form-control" type="password" name="admin_password" id="admin_password" value="admin" required="required"></td>
                        </tr>
                        <tr>
                            <td></td>
                            <td><input class="btn btn-primary" type="submit" name="submit" id="submit"></td>
                        </tr>
                    </table>
                </form>
            </div>


        </div> <!--end of content div-->
       
       <?php include('footer.php');?>
    </div> <!--end of wrapper div-->
</body>
</html>