<?php 


    

    //dang ky
    function insert_taikhoan($user,$pass,$email){
        $sql="INSERT INTO `taikhoan` (`user`, `pass`, `email`) VALUES ('$user','$pass','$email') ";
    
        pdo_execute($sql);
      
        
    }


    function checkuser($user,$pass) {
        $sql="SELECT * FROM taikhoan WHERE user='$user' and pass='$pass'";
       $sp=pdo_query_one($sql);
       return $sp;
    }

    function dangnhap($user,$pass) {
        $sql="SELECT * FROM taikhoan WHERE user='$user' and pass='$pass'";
        $taikhoan = pdo_query_one($sql);


        if ($taikhoan != false) {
            $_SESSION['user'] = $taikhoan;
        } else {
            return "Thông tin tài khoản sai";
        }
    }

    function dangxuat() {
        if (isset($_SESSION['user'])) {
            unset($_SESSION['user']);
        }
    }
    

    function delete_taikhoan($id){
        $sql="update taikhoan set isdelete= 1 where id= ".$id ;
        pdo_execute($sql);
    }
     function loadone_taikhoan($id){
        $sql="SELECT * FROM `taikhoan` where id=".$id;
        $listtaikhoan=pdo_query_one($sql); 
        return $listtaikhoan;
    }
    function loadall_taikhoan(){
        $sql="SELECT * FROM `taikhoan` where isdelete = 0 order by id desc";
        $listtaikhoan=pdo_query($sql); 
        return $listtaikhoan;
    }
    function update_taikhoan($id,$user,$pass,$email,$address,$tel="",$role=2){

    
         $sql="UPDATE `taikhoan` SET `user` = '$user',`pass` = '$pass', `email` = '$email',`address` = '$address',`tel`= '$tel',`role`='$role' WHERE `taikhoan`.`id` = $id";
    //   echo $sql;
    //   die;
         pdo_execute($sql);
     
     }
    function sendMail($email) {
        $sql="SELECT * FROM taikhoan WHERE email='$email'";
        $taikhoan = pdo_query_one($sql);

        if ($taikhoan != false) {
            sendMailPass($email, $taikhoan['user'], $taikhoan['pass']);
            
            return "gui email thanh cong";
        } else {
            return "Email bạn nhập ko có trong hệ thống";
        }
    }

    function sendMailPass($email, $username, $pass) {
        require 'PHPMailer/src/Exception.php';
        require 'PHPMailer/src/PHPMailer.php';
        require 'PHPMailer/src/SMTP.php';

        $mail = new PHPMailer\PHPMailer\PHPMailer(true);

        try {
            //Server settings
            $mail->SMTPDebug = PHPMailer\PHPMailer\SMTP::DEBUG_OFF;                      //Enable verbose debug output
            $mail->isSMTP();                                            //Send using SMTP
            $mail->Host       = 'sandbox.smtp.mailtrap.io';                     //Set the SMTP server to send through
            $mail->SMTPAuth   = true;                                   //Enable SMTP authentication
            $mail->Username   = '52b4d8277038ce';                     //SMTP username
            $mail->Password   = '783ed580504688';                               //SMTP password
            $mail->SMTPSecure = PHPMailer\PHPMailer\PHPMailer::ENCRYPTION_STARTTLS;            //Enable implicit TLS encryption
            $mail->Port       = 587;                                    //TCP port to connect to; use 587 if you have set `SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS`

            //Recipients
            $mail->setFrom('taivip@gmail.com', 'DuAnMau');
            $mail->addAddress($email, $username);     //Add a recipient

            //Content
            $mail->isHTML(true);                                  //Set email format to HTML
            $mail->Subject = 'Ban da yeu cau lay lai mat khau';
            $mail->Body    = 'mat khau cu ban la' .$pass;

            $mail->send();
        } catch (Exception $e) {
            echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
        }
    }
?>
