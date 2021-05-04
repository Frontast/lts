<?php 

$phone = $_POST['phone-user'];
$name = $_POST['name-user'];
$fromwhere = $_POST['from-where'];
$where = $_POST['where'];
$mail = $_POST['mail-user'];
$review = $_POST['review-user'];

require_once('phpmailer/PHPMailerAutoload.php');
$mail = new PHPMailer;
$mail->CharSet = 'utf-8';

//$mail->SMTPDebug = 3;                               // Enable verbose debug output

$mail->isSMTP();                                      // Set mailer to use SMTP
$mail->Host = 'smtp.mail.ru';  // Specify main and backup SMTP servers
$mail->SMTPAuth = true;                               // Enable SMTP authentication
$mail->Username = 'hailoc@mail.ru';                 // Наш логин
$mail->Password = 'welcome952';                           // Наш пароль от ящика
$mail->SMTPSecure = 'ssl';                            // Enable TLS encryption, `ssl` also accepted
$mail->Port = 465;                                    // TCP port to connect to
 
$mail->setFrom('hailoc@mail.ru', 'Andrey Gyuttuev');   // От кого письмо 
$mail->addAddress('hailoc@yandex.ru');     // Add a recipient
//$mail->addAddress('ellen@example.com');               // Name is optional
//$mail->addReplyTo('info@example.com', 'Information');
//$mail->addCC('cc@example.com');
//$mail->addBCC('bcc@example.com');
//$mail->addAttachment('/var/tmp/file.tar.gz');         // Add attachments
//$mail->addAttachment('/tmp/image.jpg', 'new.jpg');    // Optional name
$mail->isHTML(true);                                  // Set email format to HTML

$mail->Subject = 'Благодарим Вас за заявку!';
$mail->Body    = 'Пользователь оставил свои данные <br> 
	Телефон: ' . $phone . '<br>Имя: ' . $name;// . '<br>Место отправки: ' . $fromwhere . '<br>Место доставки: ' . $where . '<br>E-mail: ' . $mail . '<br>Отзыв клиента' . $review
$mail->AltBody = 'Это альтернативный текст';

if(!$mail->send()) {
    return false;
} else {
    return true;// header ('location: ../thanks.html');
}

?>