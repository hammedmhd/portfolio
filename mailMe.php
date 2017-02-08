<?php
require_once('swiftmailer/lib/swift_required.php');
date_default_timezone_set("Asia/Kuala_Lumpur");

		$name = strip_tags(trim($_POST["name"]));
		$name = str_replace(array("\r","\n"),array(" "," "),$name);
        $email = filter_var(trim($_POST["email"]), FILTER_SANITIZE_EMAIL);
        $content = trim($_POST["message"]);
		if(empty($name) OR empty($email) OR empty($content)){
			echo '<p style="font-size:20px" class="text-center">Opps... looks like you missed out some details. please re-enter details and submit.</p>';
		}
		else{
			$transport = Swift_SmtpTransport::newInstance('smtp.gmail.com', 465, "ssl")
			 ->setUsername('hmdmhdportfolio@gmail.com')
			 ->setPassword('piresnumber7');

			$mailer = Swift_Mailer::newInstance($transport);
			
			$message = Swift_Message::newInstance('Inquiry via Portfolio')
			  ->setFrom(array($email => $name))
			  ->setTo(array('hmdmhdportfolio@gmail.com'))
			  ->setBody($content . ' From: ' . $email . '  DateSentOn: ' . date('d.m.Y') . '  Time: ' .date('h:ia'));

			$result = $mailer->send($message);
			echo '<p style="font-size:20px" class="text-center">Email sent successfully.</p>';
		}
		
?>
