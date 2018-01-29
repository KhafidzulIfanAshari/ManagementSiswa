<?php
session_start();
if(@$_SESSION['chek']=="pass"){
    echo "<script>location.href='user.php';</script>";
}
?>
<html>
    <head>
        <title>Be a smart guy</title>
        <meta name="viewport" content="width=device-width, intial-scale=1">
        <link href="../CSS/font-awesome.css" rel="stylesheet">
        <link href="../CSS/index.css" rel="stylesheet">
        <link href="../CSS/indexresponsive.css" rel="stylesheet">
        <link href="../image/logofix.png" rel="icon">
    </head>
    <body>
        <div class="wrapper">
            <div class="nav-fix">
                <div class="nav" id="login">
                    Sign In <i class="fa fa-sign-in" aria-hidden="true"></i>
                    <div class="underline"></div>
                </div>
            </div>
            <div class="header">
                <div class="header-title">Welcome to <font color="#74bc60" style="font-weight:normal">Be a smart guy</font></div>
                <div class="header-title2">Online class to <font color="white" style="font-weight:bolder">catch your dream</font> </div>
                <div class="select">
                    <div class="select-title">Create your account</div>
                    <div class="sub-select" id="teacher">I'am a teacher</div>
                    <div class="sub-select">I'am a student</div>
                    <div class="sub-select">I'am a parrent</div>
                </div>
                <!--//--------------------//|Login|//--------------------//-->
                <div class="login-wrap"></div>
                <div class="login-content">
                    <div class="login-val">
                        <div class="val-title">Login to start the lesson</div>
                        <form method="post">
                            <div class="input-group">
                                <div class="icon-wrap">
                                    <i class="fa fa-user icon" aria-hidden="true"></i>
                                </div>
                                <input class="input" type="text" name="username" placeholder="username" required>
                            </div>
                            <div class="input-group">
                                <div class="icon-wrap">
                                    <i class="fa fa-lock icon" aria-hidden="true"></i>
                                </div>
                                <input class="input" type="password" id="password1" name="password" required>
                            </div>
                            <div class="input-group">
                                <input class="submit" type="submit" name="login" value="Login">
                            </div>
                        </form>
                    </div>
                </div>
                <!--//--------------------//|Sign Up|//--------------------//-->
                <div class="teacher-wrap"></div>
                <div class="teacher-content">
                    <div class="teacher-val">
                        <div class="val-title">Nice to meet you</div>
                        <form method="post" enctype="multipart/form-data">
                            <div class="input-group">
                                <div class="icon-wrap">
                                    <i class="fa fa-id-card icon" aria-hidden="true"></i>
                                </div>
                                <input class="input" type="text" name="kode" placeholder="A551E" required>
                            </div>
                            <div class="input-group">
                                <div class="icon-wrap">
                                    <i class="fa fa-user icon" aria-hidden="true"></i>
                                </div>
                                <input class="input" type="text" name="nama" placeholder="Nama guru" required>
                            </div>
                            <div class="input-group">
                                <div class="icon-wrap">
                                    <i class="fa fa-map-marker icon" aria-hidden="true"></i>
                                </div>
                                <input class="input" type="text" name="asal" placeholder="Asal guru" required>
                            </div>
                            <div class="input-group">
                                <div class="icon-wrap">
                                    <i class="fa fa-phone icon" aria-hidden="true"></i>
                                </div>
                                <input class="input" type="number" onkeypress="if(this.value.length==13) return false;" name="telepon" placeholder="+62" required>
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
                                <input class="input" type="text" name="jam" placeholder="Jumlah jam mengajar" required>
                            </div>
                            <div class="input-group">
                                <div class="icon-wrap">
                                    <i class="fa fa-calendar icon" aria-hidden="true"></i>
                                </div>
                                <input class="input" type="date" name="tanggal" value="2017-05-22" required>
                            </div>
                            <div class="input-group">
                                <div class="icon-wrap">
                                    <i class="fa fa-id-card-o icon" aria-hidden="true"></i>
                                </div>
                                <input class="input" type="text" name="username" placeholder="Username" required>
                            </div>
                            <div class="input-group">
                                <div class="icon-wrap" id="unmask">
                                    <i class="fa fa-lock icon" aria-hidden="true"></i>
                                </div>
                                <input class="input" type="password" id="password" name="password" required>
                            </div>
                            <div class="input-group">
                                    <label for="photo"><div class="browse">Browse</div></label>
                                    <input style="display:none" id="photo" type="file" name="photo">
                            </div>
                            <div class="input-group">
                                <input class="submit" type="submit" name="signup" value="Sign up">
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <script src="../JS/jquery-3.1.1.min.js"></script>
        <script src="../JS/index.js"></script>
    </body>
</html>
<?php
if(isset($_POST['signup'])){
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
        
    $photo=$_FILES['photo']['name'];
    $directory=$_FILES['photo']['tmp_name'];
    
    $save=mysqli_query($connect,"insert into data_guru(kode_guru,nama_guru,asal,telepon,pendidikan_terakhir,mapel,jumlah_jam,tanggal_mulai_mengajar,username_guru,password,photo) values('$kode','$nama','$asal','$telepon','$pendidikan','$mapel','$jam','$tanggal','$username','".$_POST['password']."','$photo')");
    move_uploaded_file($directory,'posting/'.$photo);    
    if($save){
        $account=mysqli_query($connect,"select * from tb_guru where username='$username' and password='".$_POST['password']."'");
        $data=mysqli_fetch_array($account);
        $_SESSION['log']=$kode;
        $_SESSION['chek']="pass";
        echo "<script>alert('sukses');location.href='user.php';</script>";
    }
    else{
        echo "<script>alert('Duplicate Kode Guru');location.href='index.php';</script>";
    }
    
}
else if(isset($_POST['login'])){
    include "connection.php";
    $username=$_POST['username'];
    $password=$_POST['password'];
    
    $account=mysqli_query($connect,"select * from data_guru where username_guru='$username' and password='".$_POST['password']."'");
    $chek=mysqli_num_rows($account);
    $data=mysqli_fetch_array($account);
    if($chek>0){
        $_SESSION['log']=$data['kode_guru'];
        $_SESSION['chek']="pass";
        echo "<script>location.href='user.php';</script>";
    }
    else{
        echo "<script>alert('You are failed to log in');location.href='index.php';</script>";
    }
}

?>