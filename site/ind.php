 <?php 

require_once('phpmailer/PHPMailerAutoload.php');
$mail = new PHPMailer;
$mail->CharSet = 'utf-8';

$name = $_POST['user_name'];
$fam = $_POST['fam'];
$phone = $_POST['phone'];

$mail->isSMTP();
$mail->Host = 'smtp.mail.ru';
$mail->SMTPAuth = true;
$mail->Username = 'kdrozdin@bk.ru'; 
$mail->Password = '$vfdfvx6jf';
$mail->SMTPSecure = 'ssl';
$mail->Port = 465;
$mail->setFrom('kdrozdin@bk.ru'); 
$mail->addAddress('vova.prituzhalov@bk.ru');
$mail->isHTML(true);

$mail->Subject = 'Заявка с сайта';
$mail->Body    = ''.$name.' '.$fam. ' оставил заявку, его телефон ' .$phone;
$mail->AltBody = '';
/*try{
       if(!$mail->send()) {
       	echo "Fail - " . $mail->ErrorInfo;
       	die;
       } 
       die('error');

     } catch(Exception $e){
    //Something went bad
        echo "Fail - " . $mail->ErrorInfo;
        die;
     }

die('1111111333');
 header('location: index.html');
*/
 if (!$mail->send()) {
 	echo 'error';
 } else {
 	header('location: index.html');
 }
?> 


 



