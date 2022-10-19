<?php
    require('koneksi.php');
?>

<?php
    if(isset($_POST['submit'])){
        $sql = mysqli_query($conn_log,"SELECT * FROM `login` WHERE `username` = '$_POST[username]' AND `password` = '$_POST[password]'");
        if (mysqli_num_rows($sql) == 0 ){
            echo '<script language = "javascript">
            alert("Login Gagal"); document.location = "index.php";</script>' ;

        }else{
            echo '<script language = "javascript">
            alert("Login Berhasil"); document.location = "home.php";</script>' ;
        }
    }

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SingIt</title>
    <link rel="stylesheet" href="stylesheet/style_login.css?v5">
        
</head>
<body >
    <div class = "container">
        <div class = "daftar" >
            <h2>DAFTAR</h2>
            <div class ="form">
                <h1>COMING SOON</h1>
            </div>
        </div>
        <div class = "login">
            <h2>LOGIN</h2>
            <div class ="form">
                <form action=""method="POST">
                    <div class = "bungkus">
                        <div>
                            <label for="">Username</label>
                            <input type="text" name="username" required>
                        </div>
                        <div>
                            <label for="">Password </label>
                            <input type="password" name="password" required>
                        </div>
                        <div>
                            <button type="submit" name="submit"><b>Login</b></button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
        
    </div>
    
    
    
    
    <script src="script/sctipt.js">
    </script>
    
</body>
</html>