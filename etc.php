<?php     
    include('smtp/PHPMailerAutoload.php');      
    
    //echo smtp_mailer('parmarhimanshu594@gmail.com','Signup Form','Membership has been found Successfully.');     
    echo smtp_mailer('krishnasales947@gmail.com','Sign up','Signup has been found Successfully.');     function smtp_mailer($to,$subject, $msg){         
        $mail = new PHPMailer();          
        $mail->IsSMTP();          
        $mail->SMTPAuth = true;          
        $mail->SMTPSecure = 'tls';          
        $mail->Host = "smtp.gmail.com";         
        $mail->Port = 587;          
        $mail->IsHTML(true);         
        $mail->CharSet = 'UTF-8';         
        $mail->SMTPDebug = 2;          
        $mail->Username = "krishnasales947@gmail.com";         
        $mail->Password = "nffdxeruyjctqios";         
        $mail->SetFrom("krishnasales947@gmail.com");         
        $mail->Subject = $subject;         
        $mail->Body =$msg;         
        $mail->AddAddress($to);         
        $mail->SMTPOptions=array('ssl'=>array(
            'verify_peer'=>false,             
            'verify_peer_name'=>false,             
            'allow_self_signed'=>false ));         
        if(!$mail->Send()){             
            echo $mail->ErrorInfo;}
        else{ 
            return 'Sent';         
        }     
    } 
?>