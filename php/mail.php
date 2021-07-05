<html>
   
   <head>
        <title>Enter the title of the email message here.</title>
   </head>
   
   <body>
      
    <?php
        $to      = "anthonyallgood84@gmail.com"; // Enter the recipient's email address here.anthonyallgood84@gmail.com
        $subject = "ANTHONY ALLGOOD Contact Form"; // The subject

        /**
         * Each line below represents a field on your form.
         * Add new lines if you add new fields to the form.
         * Remember to include the "name" attribute in your new fields.
         */

        $message .= "<h1>Submited Data of Resume Site.</h1>"; // The title of the email body

        $message .= "<p>Name: "    . $_POST['name']    . '</p>'; // Field name
        $message .= "<p>Email: "   . $_POST['email']   . '</p>'; // Field email
        $message .= "<p>Phone: "   . $_POST['phone']   . '</p>'; // Field phone
        $message .= "<p>Company: " . $_POST['company'] . '</p>'; // Field company
        $message .= "<p>Manager: " . $_POST['manager'] . '</p>'; // Field manager
        $message .= "<p>Budget: "  . $_POST['budget']  . '</p>'; // Field budget
        $message .= "<p>Message: " . $_POST['message'] . '</p>'; // Field message
        
        $header = "From: ".$_POST['email']." \r\n"; // Enter the sender email address here
        $header .= "MIME-Version: 1.0\r\n";
        $header .= "Content-type: text/html\r\n";
        
        // This function sends the email
        $retval = mail ($to, $subject, $message, $header);
        
        // Here we receive response to display the message of success.
        if( $retval == true ) {
            echo true;
        } else {
            echo false;
        }
    ?>
      
   </body>
</html>