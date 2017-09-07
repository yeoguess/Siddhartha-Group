<?php get_header('home'); 
    // Message Vars
    $msg = '';
    $msgClass = '';

    // Check For Submit
    if(filter_has_var(INPUT_POST, 'submit')){
        // Get Form Data
        $name = htmlspecialchars($_POST['name']);
        $email = htmlspecialchars($_POST['email']);
        $message = htmlspecialchars($_POST['message']);

        // Check Required Fields
        if(!empty($email) && !empty($name) && !empty($message)){
            // Passed
            // Check Email
            if(filter_var($email, FILTER_VALIDATE_EMAIL) === false){
                // Failed
                $msg = 'Please use a valid email';
                $msgClass = 'alert-danger';
            } else {
                // Passed
                $toEmail = 'yogesh@socialaves.com';
                $subject = 'Contact Request From '.$name;
                $body = '<h2>Contact Request</h2>
                    <h4>Name</h4><p>'.$name.'</p>
                    <h4>Email</h4><p>'.$email.'</p>
                    <h4>Message</h4><p>'.$message.'</p>
                ';

                // Email Headers
                $headers = "MIME-Version: 1.0" ."\r\n";
                $headers .="Content-Type:text/html;charset=UTF-8" . "\r\n";

                // Additional Headers
                $headers .= "From: " .$name. "<".$email.">". "\r\n";

                if(mail($toEmail, $subject, $body, $headers)){
                    // Email Sent
                    // die($message); 
                    $msg = 'Your email has been sent';
                    $msgClass = 'alert-success';
                } else {
                    // Failed
                    $msg = 'Your email was not sent';
                    $msgClass = 'alert-danger';
                }
            }
        } else {
            // Failed
            $msg = 'Please fill in all fields';
            $msgClass = 'alert-danger';
        }
    }
?>


    <?php get_template_part('template-parts/content-banner') ;?>
        
    <?php get_template_part('template-parts/content-mission') ;?>
        
<?php get_footer(); ?>