<?php

session_start();

if (isset($_POST['submit'])) {
    
    include 'dbh.inc.php';
    
    $uid = mysqli_real_escape_string($conn, $_POST['uid']);
    $pwd = mysqli_real_escape_string($conn, $_POST['pwd']);

    //Error handlers
    //Check if inputs are empty
    if (empty($uid) || empty($pwd)) {
        header("Location: ../3f5bc53a4ZtT8G1gilL7cf8&gclid=EAIaIQobChMIwf330pbX2QIVUabtCh1zugm-EAEYASAAEgKWzPD_BwE.php?login=empty");
        exit();
    } else {
        $sql = "SELECT * FROM users WHERE user_uid='$uid' OR user_email='$uid'";
        $result = mysqli_query($conn, $sql);
        $resultcheck = mysqli_num_rows($result);
        if ($resultcheck < 1){
            header("Location: ../3f5bc53a4ZtT8G1gilL7cf8&gclid=EAIaIQobChMIwf330pbx2QIVuAbtCh1zugm-EAEYASAAEgKWzPD_BwE3f5bc53a4ZtT8G1gilL7cf8&gclid=EAIaIQobChMIwf330pbx2QIVuAbtCh1zugm-EAEYASAAEgKWzPD_BwE.php?login=error");
            exit();
        }else{
            if ($row = mysqli_fetch_assoc($result)) {
               //De-hashing the password
               $hashedPwdCheck = password_verify($pwd, $row['user_pwd']);
               if ($hashedPwdCheck == false) {
                    header("Location: ../loginerror.php?login=error");
                    exit();  
               } elseif ($hashedPwdCheck == true) {
                   //Login the user here
                   $_SESSION['u_id'] = $row['user_id'];
                   $_SESSION['u_first'] = $row['user_first'];
                   $_SESSION['u_last'] = $row['user_last'];
                   $_SESSION['u_email'] = $row['user_email'];
                   $_SESSION['u_uid'] = $row['user_uid'];
                   header("Location: ../index.php?login=Loggedin+Successful..!");
                    exit();
               }
            }
        }
    }
}else{
    header("Location: ../loginerror.php?login=LoginError");
    exit();
}