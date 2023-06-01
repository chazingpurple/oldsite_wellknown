<?php
  $mail_to = 'info@chazingpurple.com'; // specify your email here

    // Assigning data from the $_POST array to variables
    $name = $_POST['name'];
	$phone = $_POST['phone'];
    $email = $_POST['email'];
	$booking = $_POST['booking'];
	$bookingchildren = $_POST['bookingchildren'];
	$bookingadults = $_POST['bookingadults'];
	
	
	
	

    // Construct email subject
    $subject = 'MIRAKI Enquiry From ' . $name;

    // Construct email body
    $body_message = 'From:' .$name ;
	$body_message = 'Phone:' .$phone ;
    $body_message = 'E-mail:' .$email;
	$body_message = 'Name:' .$name."\r\n" .$phone."\r\n" .$email."\r\n" .$booking."\r\n" .$bookingchildren."\r\n" .$bookingadults ;


    // Construct email headers
    $headers = 'From: ' . $email . "\r\n" ;
    $headers = 'Reply-To: ' . $email . "\r\n";

    $mail_sent = mail($mail_to, $subject, $body_message, $headers);

    if ($mail_sent == true){ ?>
        <script language="javascript" type="text/javascript">
        alert('Thank you for the message. We will contact you shortly.');
        window.location = '/property/miraki/details.html';
        </script>
    <?php } else { ?>
    <script language="javascript" type="text/javascript">
        alert('Message not sent. Please, notify the site administrator info@chazingpurple.com');
        window.location = '/property/miraki/details.html';
    </script>
    <?php
    }
  
?>