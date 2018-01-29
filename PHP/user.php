<?php
    session_start();
if($_SESSION['chek'] == ""){
    header("location:index.php");
}
else{
    include "connection.php";
    $account=mysqli_query($connect,"select * from data_guru where kode_guru='".$_SESSION['log']."'");
    $data=mysqli_fetch_array($account);
}
?>
<html>
    <head>
        <title><?php echo $data['nama_guru'];?></title>
        <meta name="viewport" content="width=device-width, intial-scale=1">
        <link href="../CSS/font-awesome.css" rel="stylesheet">
        <link href="../CSS/user.css" rel="stylesheet">
        <link href="../image/logofix.png" rel="icon">
    </head>
    <body>
        <div class="wrapper">
            <div class="nav-fix">
                <i class="fa fa-caret-right menu" aria-hidden="true"></i>
                <i class="fa fa-bars pop-icon" aria-hidden="true"></i>
                <div class="nav"></div>
                <div class="nav"></div>
                <div class="nav"></div>
            </div>
            <div class="pop-wrap"></div>
            <div class="pop">
                <form method="post">
                    <div class="pop-content">
                        <div class="input-group">
                            <input class="submit" type="submit" name="logout" value="Log Out">
                        </div>
                    </div>
                </form>            
            </div>
            <div class="profile-wrap"></div>
            <div class="profile-content">
                <div class="profile">
                    <form method="post" enctype="multipart/form-data">
                        <div class="photo">
                            <img src="posting/<?php echo $data['photo'];?>">
                        </div>
                        <label for="photo"><div class="change">Change</div></label>
                        <input value="<?php echo $data['photo'];?>" id="photo" type="file" name="photo" style="display:none;float:left;">
                        <input class="upload" type="submit" name="upload" value="Upload">
                    </form>
                    <form method="post">
                        <div class="input-group">
                                <div class="icon-wrap">
                                    <i class="fa fa-id-card icon" aria-hidden="true"></i>
                                </div>
                                <input class="input" type="text" name="kode" placeholder="A551E" value="<?php echo $data['kode_guru'];?>" required>
                            </div>
                            <div class="input-group">
                                <div class="icon-wrap">
                                    <i class="fa fa-user icon" aria-hidden="true"></i>
                                </div>
                                <input class="input" type="text" name="nama" placeholder="Nama guru" value="<?php echo $data['nama_guru'];?>" required>
                            </div>
                            <div class="input-group">
                                <div class="icon-wrap">
                                    <i class="fa fa-map-marker icon" aria-hidden="true"></i>
                                </div>
                                <input class="input" type="text" name="asal" placeholder="Asal guru" value="<?php echo $data['asal'];?>" required>
                            </div>
                            <div class="input-group">
                                <div class="icon-wrap">
                                    <i class="fa fa-phone icon" aria-hidden="true"></i>
                                </div>
                                <input class="input" type="number" onkeypress="if(this.value.length==13) return false;" name="telepon" placeholder="+62" value="<?php echo $data['telepon'];?>" required>
                            </div>
                            <div class="input-group">
                                <div class="icon-wrap">
                                    <i class="fa fa-graduation-cap icon" aria-hidden="true"></i>
                                </div>
                                <input style="display:none" class="input" type="text" name="pendidikan" id="show-select" placeholder="Other">
                                <select class="input" onchange="if(this.value == -1){document.getElementById('select').disabled = true;document.getElementById('select').style.display='none';document.getElementById('show-select').style.display='block'}" id="select" name="pendidikan">
                                    <option value="D3">D3</option>
                                    <option value="S1">S1</option>
                                    <option value="S2">S2</option>
                                    <option value="S3">S3</option>
                                    <option value="-1">Other</option>
                                </select>
                            </div>
                            <div class="input-group">
                                <div class="icon-wrap">
                                    <i class="fa fa-book icon" aria-hidden="true"></i>
                                </div>
                                <input class="input" style="display:none" type="text" name="mapel" placeholder="Mata pelajaran" id="show-mapel">
                                <select class="input" onchange="if(this.value == -1){document.getElementById('select-mapel').disabled = true;document.getElementById('select-mapel').style.display='none';document.getElementById('show-mapel').style.display='block'}" id="select-mapel" name="mapel">
                                    <option value="Math">Math</option>
                                    <option value="B. Inggris">B. Inggris</option>
                                    <option value="B. Indo">B. Indo</option>
                                    <option value="IPA">IPA</option>
                                    <option value="-1">Other</option>
                                </select>
                            </div>
                            <div class="input-group">
                                <div class="icon-wrap">
                                    <i class="fa fa-clock-o icon" aria-hidden="true"></i>
                                </div>
                                <input class="input" type="text" name="jam" placeholder="Jumlah jam mengajar" value="<?php echo $data['jumlah_jam'];?>" required>
                            </div>
                            <div class="input-group">
                                <div class="icon-wrap">
                                    <i class="fa fa-calendar icon" aria-hidden="true"></i>
                                </div>
                                <input class="input" type="date" name="tanggal" value="<?php echo $data['tanggal_mulai_mengajar'];?>" required>
                            </div>
                        <div class="input-group">
                            <div class="icon-wrap">
                                <i class="fa fa-user icon" aria-hidden="true"></i>
                            </div>
                            <input class="input" type="text" name="username" value="<?php echo $data['username_guru'];?>" required>
                        </div>
                        <div class="input-group">
                            <div class="icon-wrap">
                                <i class="fa fa-lock icon" aria-hidden="true"></i>
                            </div>
                            <input class="input" type="password" id="password" name="password" value="<?php echo $data['password'];?>">
                        </div>
                        <div class="input-group">
                            <input class="submit" type="submit" name="update" value="Save">
                        </div>
                    </form>
                    <form method="post">
                        <div class="input-group">
                            <form method="post">
                                <input class="delete" type="submit" name="delete" value="Delete account">
                            </form>
                        </div>
                    </form>
                    
                    <form method="post">
                        <div class="input-group">
                        </div>
                    </form>
                </div>
            </div>
            <div class="header">
                <div class="photo">
                    <img src="posting/<?php echo $data['photo'];?>">
                </div>
                <div class="header-title">
                    Welcome to online class <?php echo $data['username_guru'];?>        
                </div>
                <div class="id">
                    <table>
                        <tr>
                            <td><i class="fa fa-id-card icon" aria-hidden="true"></i></td>
                            <td>| <?php echo $data['kode_guru'];?></td>
                        </tr>
                        <tr>
                            <td><i class="fa fa-user icon" aria-hidden="true"></i></td>
                            <td>| <?php echo $data['nama_guru'];?></td>
                        </tr>
                        <tr>
                            <td><i class="fa fa-book icon" aria-hidden="true"></i></td>
                            <td>| <?php echo $data['mapel'];?></td>
                        </tr>
                        <tr>
                            <td><i class="fa fa-clock-o icon" aria-hidden="true"></i></td>
                            <td>| <?php echo $data['jumlah_jam'];?></td>
                        </tr>
                        <tr>
                            <td><i class="fa fa-money icon" aria-hidden="true"></i></td>
                            <td>| <?php echo $data['gaji'];?></td>
                        </tr>
                    </table>
                    
                    
                </div>
            </div>
            <div class="main">
                <div class="main-content">
                    <div class="cal-title">See your pay here</div>
                    <form method="post">
                        <div class="input-group">
                            <div class="icon-wrap">
                                <i class="fa fa-clock-o icon" aria-hidden="true"></i>
                            </div>
                            <input class="input" type="text" name="time" value="<?php echo $data['jumlah_jam'];?>" placeholder="Work time">
                        </div>
                        <div class="input-group">
                            <input class="submit" type="submit" name="cal" value="Get your pay">
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <script src="../JS/jquery-3.1.1.min.js"></script>
        <script src="../JS/user.js"></script>
    </body>
</html>
<?php
if(isset($_POST['logout'])){
    session_destroy();
    echo "<script>location.href='index.php';</script>";
}
else if(isset($_POST['upload'])){
    include "connection.php";
    $photo=$_FILES['photo']['name'];
    $directory=$_FILES['photo']['tmp_name'];
    
    $upload=mysqli_query($connect,"update data_guru set photo='$photo' where kode_guru='".$_SESSION['log']."'");
    move_uploaded_file($directory,'posting/'.$photo);
    
    if($upload){
        echo "<script>location.href='user.php';</script>";
    }   
    else{
        //echo "<script>alert('gagal');</script>";
        echo mysqli_error($connect);
    }
}
else if(isset($_POST['update'])){
    include "connection.php";
    $kode=$_POST['kode'];
    $nama=$_POST['nama'];
    $asal=$_POST['asal'];
    $telepon=$_POST['telepon'];
    $pendidikan=$_POST['pendidikan'];
    $mapel=$_POST['mapel'];
    $jam=$_POST['jam'];
    $tanggal=$_POST['tanggal'];
    $username=$_POST['username'];
    $password=$_POST['password'];

    $update=mysqli_query($connect,"update data_guru set kode_guru='$kode',nama_guru='$nama',asal='$asal',telepon='$telepon',pendidikan_terakhir='$pendidikan',mapel='$mapel',jumlah_jam='$jam',tanggal_mulai_mengajar='$tanggal',username_guru='$username',password='".$_POST['password']."' where kode_guru='".$_SESSION['log']."'");
    
    if($update){
        $data=mysqli_fetch_array($account);
        session_destroy();
        session_start();
        $_SESSION['chek']="pass";
        $_SESSION['log']=$kode;
        echo "<script>alert('sukses');location.href='user.php';</script>";
    }
    else{
        //echo $data['kode_guru'];
        echo mysqli_error($connect);
    }
}
else if(isset($_POST['delete'])){
    include "connection.php";
    $delete=mysqli_query($connect,"delete from data_guru where kode_guru='".$_SESSION['log']."'");
    if($delete){
        session_destroy();
        echo "<script>alert('You are logged in');location.href='index.php';</script>";
    }
    else{
        echo mysqli_error($connect);
    }
}
else if(isset($_POST['cal'])){
    include "connection.php";
    $time=$_POST['time'];
    
    $pay=$time*50000;
    
    $slav=mysqli_query($connect,"update data_guru set gaji='$pay'");
    
    if($slav){
        echo "<script>alert('You get ".$pay."');location.href='user.php';</script>";
    }
}
?>