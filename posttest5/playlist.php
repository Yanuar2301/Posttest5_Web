<?php
    require('koneksi.php');
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SingIt</title>
    <link rel="stylesheet" href="stylesheet/style_playlist.css?v8">
        
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
        <table >
            <tr>
                <th>Username</th>
                <th>Artis</th>
                <th>Judul</th>
                <th>Judul</th>
                <th></th>
            </tr>
            
            <?php 
                $read = mysqli_query($conn_log, "SELECT * FROM playlist ");
                if(mysqli_num_rows($read) > 0){
                    while($row = mysqli_fetch_array($read)){
            ?>
            <tr>
                <td><?php echo $row['username'] ?></td>
                <td><?php echo $row['Penyanyi'] ?></td>
                <td><?php echo $row['Lagu'] ?></td>
                <td><?php echo $row['Link'] ?></td>
                <form action="" method="post">
                    <td><button type="submit" name="hapus">Hapus Data</button>
                    <br>
                    <button type="submit" name="edit">Edit Data</button></td>
                </form>
                <?php  
                    if(isset($_POST['hapus'])){
                        echo '<script language = "javascript">
                        alert("Belum Bisa Bang");document.location = "playlist.php"; </script>';  
                    }
                    if(isset($_POST['edit'])){
                        echo '<script language = "javascript">
                        alert("Belum Bisa Bang");document.location = "playlist.php"; </script>';  
                    }
                    
                ?>
            </tr>
            <?php }} ?>
        </table>
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