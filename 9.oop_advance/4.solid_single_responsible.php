 <?php
    class student
    {
        function checkAttendence()
        {
        }
        function calculationGrade()
        {
        }
        function collectfee()
        {
        }
    }
    // but best way to write class . one class work for one type of thing;

    class GradeCalculator
    {
    }
    class Attendence
    {
    }
    class StudentPayment
    {
    }
    class Collectfee
    {
    }

    // that is single resposible principal;

    // // example
    // class Mailer
    // {
    //     function sendMail($to, $from, $subject, $message, $attachment)
    //     {
    //     }
    //     function connectMTA($mtaType, $userName, $password)
    //     {
    //     }
    //     function prepareMail($to, $from, $subject, $message)
    //     {
    //     }
    // }
    // // this is bad practice

    // class BetterMailer
    // {
    //     private $mg;
    //     private $mail;
    //     private $attachment;
    //     function __construct(MailGatewayInterface $mg, MailInterface $mail, AttachmentInterface $attachment)
    //     {
    //         $this->mg = $mg;
    //         $this->mail = $mail;
    //         $this->attachment = $attachment;
    //     }
    //     function sendMail($to, $from, $subject, $message, $attachment)
    //     {
    //         $this->mail->addAttachment($attachment);
    //         $mailBody = $this->mail->prepare($to, $from, $subject, $message,);
    //         $this->mg->connect();
    //         $this->mg->send($mailBody);
    //     }
    // }
