<?php
    require('koneksi.php');
?>

<?php
    if(isset($_POST['submit'])){
        $sql = mysqli_query($conn_log,"SELECT * FROM `login` WHERE `username` = '$_POST[username]' AND `password` = '$_POST[password]'");
        if (mysqli_num_rows($sql) == 0 ){
            echo '<script language = "javascript">
            alert("Username dan Password Salah") </script>' ;

        }else{
            $artis = $_POST['artis'];
            $judul = $_POST['judul'];
            $username = $_POST['username'];
            $sql_upload = mysqli_query($conn_log,"INSERT INTO `playlist`(`username`, `Penyanyi`, `Lagu`, `Link`) VALUES ('".$username."','".$artis."','".$judul."','null')");
            if($sql_upload){
                echo '<script language = "javascript">
                alert("Data Berhasil Di Input") </script>';    
            }
            else{
                echo '<script language = "javascript">
                alert("Data Gagal Di Input") </script>' ;    
            }
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
    <link rel="stylesheet" href="stylesheet/style.css?v7">
        
</head>
<body >
    <nav class="Navigator">
        <div class="Brand">
            <div id="Depan" onclick="ubahheader()">Sing</div>
            <div id="Belakang" onclick="ubahheader1()">It</div>
        </div>
        <ul >
            <li><a href="home.php">Home</a></li>
            <li><a href="playlist.php">My Playlist</a></li>
            <li><a href="#about">About</a></li>
            <li><a href="">Artist</a></li>
            <li><a href="">Album</a></li>
            <li><a href="index.php">Logout</a></li>
            
            <li ><input class="btn" onclick="mode()" type="checkbox"></li>
        </ul>
        <div class="List-Nav-toggle">
            <input type="checkbox">
            <span></span>
            <span></span>
            <span></span>
        </div>

    </nav>
    <div class="ContentPlace">
        <div class="ContainerContent">
            <div class="slidecontent">
                <div class="content"  style="background-image: url(img/barat.png);">
                    <a href="https://www.youtube.com/watch?v=H5v3kku4y6Q&list=PLFcGX84jKOu6_Pegw-FXT5RojAP4-Tzc8">
                        <div></div>
                    </a>
                    <h3>Top 100 Barat</h3>
                    <a href="https://www.youtube.com/watch?v=H5v3kku4y6Q&list=PLFcGX84jKOu6_Pegw-FXT5RojAP4-Tzc8">
                        <div></div>
                    </a>
                </div>
                <div class="content"  style="background-image: url(img/indo.png);">
                    <a href="https://www.youtube.com/watch?v=_ZYvZ7XfQU4&list=PL4fGSI1pDJn5ObxTlEPlkkornHXUiKX1z">
                        <div></div>
                    </a>
                    <h3>Top 100 Indonesia</h3>
                    <a href="https://www.youtube.com/watch?v=_ZYvZ7XfQU4&list=PL4fGSI1pDJn5ObxTlEPlkkornHXUiKX1z">
                        <div></div>
                    </a>

                </div> 
                <div class="content"  style="background-image: url(img/new.png);">
                    <a href="https://www.youtube.com/watch?v=gQlMMD8auMs&list=PLOHoVaTp8R7dfrJW5pumS0iD_dhlXKv17">
                        <div></div>
                    </a>
                    <h3>Top 100 K-pop</h3>
                    <a href="https://www.youtube.com/watch?v=gQlMMD8auMs&list=PLOHoVaTp8R7dfrJW5pumS0iD_dhlXKv17">
                        <div></div>
                    </a>
                </div>  
            </div>
            <div class="slide">
                <input type="checkbox" onclick="activeslideimg(activeslide = 0)" name="slide">
                <input type="checkbox" onclick="activeslideimg(activeslide = 1)" name="slide">
                <input type="checkbox" onclick="activeslideimg(activeslide = 2)" name="slide">
            </div>
        </div>
        <div class="containeralbum">
            <div style="background-image: url(img/tulus.png);">
                <a href="https://www.youtube.com/watch?v=cA7Gzh2ISL0&list=OLAK5uy_kXpsbASAjdQXJZyLjdWjE1XqnYZ1i5afs&index=1">
                    <div></div>
                </a>
            </div>
            <div style="background-image: url(img/oned.png);">
                <a href="https://www.youtube.com/watch?v=JXk_rNZ3gl4&list=OLAK5uy_k-fR8UG9108cSGptPFWTQpRabw7Kyzc5c">
                    <div></div>
                </a>
            </div>
            <div style="background-image: url(img/pamungkas.png);">
                <a href="https://www.youtube.com/watch?v=tCDuLLs-NcI&list=OLAK5uy_liZdYpRpiNzlU46nuATpsMl3sPDU3tFUY">
                    <div></div>
                </a>
            </div>
        </div>  
        <div class="containerplay">
            <h2>Add Your Playlist</h2>
            <div class="play">
                <form action="" method="post">
                    <div class = "form">
                        <label for="">Username</label>
                        <input type="text" name="username" required><br>
                        <label for="">Password</label>
                        <input type="password" name="password" required>
                    </div>
                    <div class = "form">
                        <label for="">Artis</label>
                        <input type="text" name="artis" required><br>
                        <label for="">Judul</label>
                        <input type="text" name="judul" required>
                    </div>
                    <div class = "form">
                    <button type="submit" name="submit"><b>Submit</b></button>
                    </div>
                    
                    
                    
                </form>
            </div>
        </div>
    </div>

    <div id="about">
        <div>
            <h1>AboutMe</h1>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Non, distinctio accusantium? Aperiam qui perferendis eius odit fugit ullam dignissimos dolorum eaque! Eos veritatis provident deleniti totam amet, nemo iusto rem exercitationem alias. Sit atque accusantium omnis blanditiis ea illo eius, adipisci cupiditate assumenda eligendi fugiat? Quae quod inventore nihil magni nobis in corporis fugit maxime repellat, dolores eligendi nam obcaecati amet, iusto laborum excepturi ad porro similique? Porro illo quas ab molestias rerum. Rerum illo ipsam animi, dolores pariatur, saepe facere maxime quod, aperiam quasi harum esse quisquam sapiente perspiciatis nam porro molestiae eum asperiores soluta hic iste consequuntur fugit!</p>
        </div>
    </div>

    <div class="footer">
        <div class="containerfooter">
            <div class="top">
                <span>
                    Tangga Lagu Terpopuler <br>
                    <span>
                        <a  href="https://www.joox.com/id/album/WE41MgdfIUP8CnHMdReTnw==">
                            |Nissa Sabyan Songs|
                        </a>
                    </span>
                    <span>
                        <a  href="https://www.joox.com/id/album/WE41MgdfIUP8CnHMdReTnw==">
                            Aurel Hermansyah Songs|
                        </a>
                    </span>
                    <span>
                        <a  href="https://www.joox.com/id/album/WE41MgdfIUP8CnHMdReTnw==">
                            Blackpink Songs|
                        </a>
                    </span>
                </span>
                <span>
                    <span>
                        <a  href="https://www.joox.com/id/album/WE41MgdfIUP8CnHMdReTnw==">
                             |BTS Songs|
                        </a>
                    </span>
                    <span>
                        <a  href="https://www.joox.com/id/album/WE41MgdfIUP8CnHMdReTnw==">
                            Tulus Songs|
                        </a>
                    </span>
                    <span>
                        <a  href="https://www.joox.com/id/album/WE41MgdfIUP8CnHMdReTnw==">
                            Pamungkas Songs|
                        </a>
                    </span>
                </span>
                <span>
                    <span>
                        <a  href="https://www.joox.com/id/album/WE41MgdfIUP8CnHMdReTnw==">
                            |Pasha Ungu Songs|
                        </a>
                    </span>
                    <span>
                        <a  href="https://www.joox.com/id/album/WE41MgdfIUP8CnHMdReTnw==">
                            Indonesia Top Hits|
                        </a>
                    </span>
                </span>
            </div>
            <div class="lirik">
                <span>
                    lirik Lagu <br>
                    <span>
                        <a  href="https://www.joox.com/id/album/WE41MgdfIUP8CnHMdReTnw==">
                            |Bintang di Surga|
                        </a>
                    </span>
                    <span>
                        <a  href="https://www.joox.com/id/album/WE41MgdfIUP8CnHMdReTnw==">
                            Kangen|
                        </a>
                    </span>
                    <span>
                        <a  href="https://www.joox.com/id/album/WE41MgdfIUP8CnHMdReTnw==">
                            Risahlah Hati|
                        </a>
                    </span>
                </span>
                <span>
                    <span>
                        <a  href="https://www.joox.com/id/album/WE41MgdfIUP8CnHMdReTnw==">
                             |Manuasia Kuat|
                        </a>
                    </span>
                    <span>
                        <a  href="https://www.joox.com/id/album/WE41MgdfIUP8CnHMdReTnw==">
                            Interaksi|
                        </a>
                    </span>
                    <span>
                        <a  href="https://www.joox.com/id/album/WE41MgdfIUP8CnHMdReTnw==">
                            Hati Hati Di jalan|
                        </a>
                    </span>
                </span>
                <span>
                    <span>
                        <a  href="https://www.joox.com/id/album/WE41MgdfIUP8CnHMdReTnw==">
                            |Bukan Rayuan Gombal|
                        </a>
                    </span>
                    <span>
                        <a  href="https://www.joox.com/id/album/WE41MgdfIUP8CnHMdReTnw==">
                            Love Yourself|
                        </a>
                    </span>
                </span>
            </div>
        </div> 
    </div>
    <p>Copyright. Yanuar Gideon Simalango</p>
    
    
    
    <script src="script/sctipt.js">
    </script>
    
</body>
</html>