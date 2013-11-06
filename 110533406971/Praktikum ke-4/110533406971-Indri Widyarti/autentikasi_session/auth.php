<?php
defined('_VALID') or die ('not allowed');

//Memanggil session
session_start();
function init_login(){
    //data username dan password pada awal login
    $user = 'indri';
    $pass = 'indri';  

    if (isset($_POST['user']) && isset ($_POST['pass'])){
        $n = trim($_POST['user']);
        $p = trim($_POST['pass']);

        if(($n===$user) && ($p ===$pass)){          

            if(!isset($_SESSION['nlogin']) || !isset($_SESSION['time'])){
                $_SESSION['nlogin'] = $n;
                $_SESSION['time'] = time();
            } 
            ?>
            <script type="text/javascript">
            document.location.href="./";
            </script>
            <?php
            } 
            else {
                echo 'WARNING!!!!!!("Nama/Password Yang Anda Masukkan Salah,, Silahkan Coba lagi");';
                return false;
            }
        }
    }

function validate(){
    if(!isset($_SESSION['nlogin']) || !isset($_SESSION['time'])){?>
            <style type="text/css">
<!--
.style1 {color:#FFCCFF}
-->
</style>
            
    <div class="inner">
    <form action="" method="post">
    <table border=0 cellpadding=14>
    <tr>
            <td colspan="12" bgcolor="#9966FF" bordercolor="#9900CC" style="border-style:groove">
			<div align="center" class="style1" style="border-bottom-style:double" style="border-bottom-color:#9900FF" style="border-bottom-width:thin" style="border-bottom-color:#9900CC"> FORM LOGIN</div></td>
      </tr>
        <tr>
            <td>Username</td>
            <td><input type="text" name="user" /></td>
        </tr>
        <tr>
            <td>Password</td>
            <td><input type="password" name="pass" /></td>
        </tr>
        <tr>
            <td></td>
			<tr>
			<td>
            <td><input type="submit" value="LOGIN" /></td>
			</tr>
			</td>
        </tr>        
    </table>
    </form>
    </div>

    <?php
    exit;
    }
    if(isset($_GET['m']) && $_GET['m'] == 'logout'){
    //menghapus session
    if(isset($_SESSION['nlogin'])){
        unset($_SESSION['nlogin']);
        }
    if(isset($_SESSION['time'])){
        unset($_SESSION['time']);
        }
    ?>
    <script type="text/javascript">
    document.location.href="./";
    </script>
    <?php
    }
}
?>