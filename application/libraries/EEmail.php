<?php

/**
 * Created by PhpStorm.
 * User: User
 * Date: 12.05.2016
 * Time: 18:36
 * Отправка соощений по емаил
 */
class EEmail
{
    public $CI;

    function __construct()
    {
        $this->CI =& get_instance();
        $this->CI->load->library('phpmailer');
        $this->CI->phpmailer->isSMTP();                                      // Set mailer to use SMTP
        $this->CI->phpmailer->CharSet = "UTF-8";
        $this->CI->phpmailer->Host = 'smtp.yandex.ru';  // Specify main and backup server
        $this->CI->phpmailer->SMTPAuth = true;                               // Enable SMTP authentication
        $this->CI->phpmailer->Username = 'forestunion@yandex.ru';                            // SMTP username
        $this->CI->phpmailer->Password = '12QWaszx';                           // SMTP password
        $this->CI->phpmailer->SMTPSecure = 'tls';
        // Enable encryption, 'ssl' also accepted

        $this->CI->phpmailer->SMTP_PORT = 465;

        $this->CI->phpmailer->From = 'forestunion@yandex.ru';

    }

    public function Send($to,$Subject,$Body)
    {
        /*todo сделать название в письме от кого*/
        $this->CI->phpmailer->FromName = 'Сервис доставки';
#$mail->addAddress('josh@example.net', 'Josh Adams');  // Add a recipient
        $this->CI->phpmailer->addAddress($to);               // Name is optional
#$mail->addReplyTo('info@example.com', 'Information');
        //  $mail->addCC('elex@medlan.samara.ru');
        //   $mail->addBCC('elex@medlan.samara.ru');

        $this->CI->phpmailer->WordWrap = 50;                                 // Set word wrap to 50 characters
#$mail->addAttachment('/var/tmp/file.tar.gz');         // Add attachments
#$mail->addAttachment('/tmp/image.jpg', 'new.jpg');    // Optional name
        $this->CI->phpmailer->isHTML(true);                                  // Set email format to HTML

        $this->CI->phpmailer->Subject = $Subject;
        $this->CI->phpmailer->Body    = $Body;
        //$mail->AltBody = 'This is the body in plain text for non-HTML mail clients';

        $res['error']=0;
        if(!$this->phpmailer->send()) {
            $res['error']=1;
            $res['error_msg']=$this->phpmailer->ErrorInfo;
        }
        return $res;
    }
}