<?php
	 
	 function tr_lead_gen5(){
	 
if(isset($_POST['psubmit'])&& $_POST['psubmit']=='psubmit') {
	
				$title= $_POST['sptitle'];
				$ffirstname= $_POST['spfirstname'];
				$flastname= $_POST['splastname'];
				$fphone= $_POST['spphone'];
				$femail= $_POST['spemail'];
				$lastname = trim($_POST['lastname']);
	
	
	
	

	if(trim($_POST['firstname']) === $ffirstname)  {
		$nameError = 'Please enter your Name.';
		$hasError = true;
	} else {
		$firstname = trim($_POST['firstname']);
	}
	
		if(trim($_POST['email']) === $femail)  {
		$emailError = 'Please enter your email address.';
		$hasError = true;
	} else if(!preg_match(
'/^[^0-9][a-zA-Z0-9_]+([.][a-zA-Z0-9_]+)*[@][a-zA-Z0-9_]+([.][a-zA-Z0-9_]+)*[.][a-zA-Z]{2,4}$/',
               trim($_POST['email']))) {
		$emailError = 'You entered an invalid email address.';
		$hasError = true;
	} else {
		$email = trim($_POST['email']);
	}
	
	

	if(!isset($hasError)) {		
		//$emailTo = get_option('tz_email');
		//if (!isset($emailTo) || ($emailTo == '') ){
			$emailTo = $_POST['semail'];
		//}
		$subject = '"'.$title.'" From '.$firstname.' '.$lastname;
		$body = "Name: $firstname $lastname  \n\nEmail: $email ";
		//$headers = 'From: '.$firstname.' '.$lastname.' <'.$emailTo.'>' . "\r\n" . 'Reply-To: ' . $email;
		$headers  = "From: $firstname $lastname <noreply@".$_SERVER['HTTP_HOST'].">\r\n";
		$headers .= "Reply-To: $email\r\n";
		$headers .= "Return-Path: $email\r\n";
		
		$headers .= "MIME-Version: 1.0\r\n";
		$headers .= 'X-Mailer: PHP/' . phpversion();
		$headers .= "Content-Type: text/plain\r\n";
		$headers .= "Content-Transfer-Encoding: 8bit\r\n";

		mail($emailTo, $subject, $body, $headers);
		$emailSent = true;
		
		//********store leads to database *****************
			$formTitleField = 'form_title'; // change this as needed
				if (is_array($_POST) && !empty($_POST)) {
					$title = isset($_POST[$formTitleField]) ? 
								   $_POST[$formTitleField] : 'Untitled';
					$posted_data = array();
					$uploaded_files = array();
				 
					// Get posted values
					foreach ($_POST as $key => $val) {
						if ($key != $formTitleField) {
							$posted_data[$key] = $val;
						}
					}
				 
					// Get uploaded files
					if (is_array($_FILES) && !empty($_FILES)) {
						foreach ($_FILES as $key => $file) {
							if (is_uploaded_file($file['tmp_name'])) {
								$posted_data[$key] = $file['name'];
								$uploaded_files[$key] = $file['tmp_name'];
							}
						}
					}
				 
					// Prepare data structure for call to hook
					$data = (object) array(
						'title' => $title,
						'posted_data' => $posted_data,
						'uploaded_files' => $uploaded_files);
				 
					// Call hook to submit data
					do_action_ref_array('cfdb_submit', array(&$data));
				}
		
		//****** end store leads to database ******************* 
	}

} 
?>
     
     
     
      <?php if(isset($emailSent) && $emailSent == true) { ?>
              <div class="pthanks">
                <p>Thanks, your email was sent successfully.</p>
              </div>
              <?php }  ?>
              <?php //the_content(); ?>
              <?php if(isset($hasError)) { ?>
              <div class="perror">
              <p class="error">Sorry, an error occured : <br/>
              <?php echo isset($nameError)?  '- '.$nameError.'<br/>' : ''; ?>
              <?php echo isset($phoneError)?  '- '.$phoneError.'<br/>' : ''; ?>
              <?php echo isset($emailError)?  '- '.$emailError.'<br/>' : ''; ?>
              <?php echo isset($zipError)?  '- '.$zipError.'<br/>' : ''; ?>
              </p></div>
                <?php } 
				?>    
                
  
<?php die(); 
}