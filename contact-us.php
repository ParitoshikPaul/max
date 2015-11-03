<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, user-scalable=no">
	<title>Max Healthcare</title>
	<link rel="icon" href="img/home/favicon.jpg" type="image/gif" sizes="16x16">
	<script type="text/javascript" src="scripts/jquery-1.10.2.min.js"></script>
	<script type="text/javascript" src="scripts/jquery-ui.min.js"></script>
	<script type="text/javascript" src="scripts/main.js"></script>
	<link rel="stylesheet" type="text/css" href="styles/styles.css">
	<link rel="stylesheet" type="text/css" href="styles/jquery-ui.min.css">
</head>


<?php
	
	$captchaArray = [
		'AENIEQ',
		'FJSKHT',
		'LKSMER',
		'VKRIAL',
		'QMISJS',
		'ERELPS',
		'VJSOIA',
		'JGHPKD',
		'VSJSJS',
		'SOSIID',
		'LSPSIZ',
	];


	function getCaptcha()
	{
		global $captchaArray;

		return $captchaArray[array_rand($captchaArray)];
	}

	function checkCaptcha($value)
	{
		global $captchaArray;

		return array_search($value, $captchaArray) ? 1 : 0;
	}

	ini_set('display_errors', 1);
	$response = "";

	$full_name = "";
	$patient_name = "";
	$type = "";
	$sex = "";
	$dob = "";
	$email = "";
	$phone = "";
	$city = "";
	$comment = "";


	if(isset($_POST) && !empty($_POST) ){
		if(isset($_POST['full_name']) && !empty($_POST['full_name']) 
			&& isset($_POST['patient_name']) && !empty($_POST['patient_name']) 
			&& isset($_POST['type']) && !empty($_POST['type'])
			&& isset($_POST['sex']) && !empty($_POST['sex'])
			&& isset($_POST['dob']) && !empty($_POST['dob'])
			&& isset($_POST['email']) && !empty($_POST['email'])
			&& isset($_POST['phone']) && !empty($_POST['phone'])
			&& isset($_POST['city']) && !empty($_POST['city'])
			&& isset($_POST['comment']) && !empty($_POST['comment']) )
		{
			$full_name = $_POST['full_name'];
			$patient_name = $_POST['patient_name'];
			$type = $_POST['type'];
			$sex = $_POST['sex'];
			$dob = $_POST['dob'];
			$email = $_POST['email'];
			$phone = $_POST['phone'];
			$city = $_POST['city'];
			$comment = $_POST['comment'];

			// Checking if captcha entered is corrected
			if(checkCaptcha($_POST['captcha']))
			{
				$to = "ips.query@maxhealthcare.com";
				$subject= "Contact Form Query";
				$todayis = date("l, F j, Y, g:i a") ;
				$message = "
				Date - $todayis
				Name - " . $_POST['full_name'] . "
				Patient Name - " . $_POST['patient_name'] . "
				Type - " . $_POST['type'] . "
				Gender - " . $_POST['sex'] . "
				Patient Birth Date - " . $_POST['dob'] . "
				Email - " . $_POST['email'] . "
				Phone - " . $_POST['phone'] . "
				City - " . $_POST['city'] . "
				Comment - " . $_POST['comment'] . "";



				$mime_boundary="==Multipart_Boundary_x".md5(mt_rand())."x";
				 $headers = "From: $email\r\n" .
							"Cc: margaret.maxhealthcare@gmail.com,divya.verma@maxhealthcare.com,prajkta.agarwal@maxhealthcare.com\r\n" .
				 "MIME-Version: 1.0\r\n" .
					"Content-Type: multipart/mixed;\r\n" .
					" boundary=\"{$mime_boundary}\"";
				'Cc: pawan.stardust@gmail.com' . "\r\n";
				 $message = "This is a multi-part message in MIME format.\n\n" .
					"--{$mime_boundary}\n" .
					"Content-Type: text/plain; charset=\"iso-8859-1\"\n" .
					"Content-Transfer-Encoding: 7bit\n\n" .
				 $message . "\n\n";
				 $i = 0;

				 foreach($_FILES['uploads']['tmp_name'] as $file)
				 {
					$tmp_name = $file;
					$type = $_FILES['uploads']['type'][$i];
					$name = $_FILES['uploads']['name'][$i];
					$size = filesize($files['uploads']['tmp_name'][$i]);
					if (file_exists($tmp_name))
					{
					   if(is_uploaded_file($tmp_name))
					   {
						  $file = fopen($tmp_name,'rb');
						  $data = fread($file,filesize($tmp_name));
						  fclose($file);
						  $data = chunk_split(base64_encode($data));
					   }
					   $message .= "--{$mime_boundary}\n" .
						  "Content-Type: {$type};\n" .
						  " name=\"{$name}\"\n" .
						  "Content-Disposition: attachment;\n" .
						  " filename=\"{$fileatt_name}\"\n" .
						  "Content-Transfer-Encoding: base64\n\n" .
					   $data . "\n\n";
					}

					$i++;
				 }
				 
				 $message.="--{$mime_boundary}--\n";

				mail($to, $subject, $message, $headers);

				?>

				<script type="text/javascript">
					$(document).ready(function(){
						setTimeout(function() {
							$('.table-success').removeClass('table-thank-you-destroy').show();
						}, 100);
	                      
					});
				</script>

				<?php
			}

			else
			{
				?>

				<script type="text/javascript">
					$(document).ready(function(){
						setTimeout(function() {
								$('.table-fail').removeClass('table-thank-you-destroy').show();
						}, 100);
					});
				</script>

				<?php
			}


		}
	}
	
	

?>



<body class="contact">
	
	<!-- Navigation Bar Begins -->

	<div class="nav-main"></div>

	<!-- Navigation Bar Ends -->


	<!-- Specialties Panel Begins -->

	<div class="panel-specialties panel-specialties-compress"></div>

	<!-- Specialties Panel Ends -->

	<div class="table-contact-details table-contact-details-1">
		<div class="wrapper-contact-details">
			<div class="cell-contact-details">
				<div class="contact-details">
					<p class="head">Contact Us</p>
					<p class="description">
						At Max Super Speciality Hospitals, it’s our level of service that truly sets us apart. From professional interpreters to world-class medical care & from best of doctors to best of accommodations, we treat every patient of ours like a VIP. Talk to us now!
					</p>
					<ul class="container-details">
						<li class="detail detail-green"><a>Kenya Office</a></li>
						<li class="detail">
							<label>
								Max Healthcare Institute Ltd<br>    
								General Accident House,<br>
								3rd Floor, Ralph Buche Road,<br>
								Nairobi
							</label>
						</li>
						<li class="detail detail-green"><a>Contact Number<a></li>
						<li class="detail">
							<a href="tel:+254 720 809 800" target="_blank">+254 720 809 800</a>
						</li>
					</ul>
				</div>
			</div>
		</div>
	</div>


		<div class="table-contact-details table-thank-you table-thank-you-destroy table-thank-you-destroy table-success">
		<div class="wrapper-contact-details">
			<div class="cell-contact-details">
				<div class="contact-details">
					<p class="head">Thank You</p>
					<p class="description">
						Your details have been successfully submitted. We will get in touch with you shortly.
					</p>
					<div class="button-ok">OK</div>
				</div>
			</div>
		</div>
	</div>

	<div class="table-contact-details table-thank-you table-thank-you-destroy table-thank-you-destroy table-fail">
		<div class="wrapper-contact-details">
			<div class="cell-contact-details">
				<div class="contact-details">
					<p class="head">Sorry</p>
					<p class="description">
						The captcha entered is wrong.Please try again.
					</p>
					<div class="button-ok">OK</div>
				</div>
			</div>
		</div>
	</div>

	<!-- Conatct Section Begins -->

	<section class="section-contact">
		<div class="container-content">
			<div class="overlay"></div>
			<form class="form-contact" action="contact-us.php" method="POST" enctype="multipart/form-data">
				<h1 class="head">
					Submit Information<br>&amp; Medical Reports
				</h1>
				<div class="container-attach">
					<img class="icon-attach" src="img/contact/attach.svg">
					<p class="description">
						Upload<br>Medical Reports
					</p>
				</div>
				

				<div class="wrapper-radio">
					<div class="container-radio">
						<input class="field field-radio" type="radio" name="type" id="quote" checked value="Request for a Quote">
						<label class="label-radio">Request for a Quote</label>
					</div>

					<div class="container-radio">
						<input class="field field-radio" type="radio" name="type" id="opinion" value="Get a Second Opinion">
						<label class="label-radio">Get a Second Opinion</label>
					</div>
				</div>

				<input class="field" placeholder="Your Name*" name="full_name" value="<?php echo $full_name; ?>" required>
				<input class="field" placeholder="Name of the Patient*" name="patient_name" value="<?php echo $patient_name; ?>" required>
				
				<div class="wrapper-radio">
					<div class="container-radio">
						<input class="field field-radio" type="radio" name="sex" value="Male" checked>
						<label class="label-radio">Male</label>
					</div>

					<div class="container-radio">
						<input class="field field-radio" type="radio" name="sex" value="Female">
						<label class="label-radio">Female</label>
					</div>
				</div>
				<input class="field field-dob" placeholder="Patient's Birth Date*" name="dob" value="<?php echo $dob; ?>" required>
				<input class="field" placeholder="Email ID*" name="email" value="<?php echo $email; ?>" required>
				<input class="field" placeholder="Contact Number*" name="phone" value="<?php echo $phone; ?>" required>
				<div class="field div-city">
					<input class="field field-city" placeholder="City*" name="city" value="<?php echo $city; ?>" required>
					<div class="table-dd-pointer">
						<div class="cell-dd-pointer">
							<div class="dd-pointer"></div>
						</div>
					</div>
					<div class="container-dd-cities">
						<ul class="dd-cities"></ul>
					</div>
				</div>
				<textarea class="field" placeholder="Comments*" name="comment" <?php echo $comment; ?> required></textarea>
				<div class="container-upload" style="border-bottom:solid 1px #5dbab0;">
					<label>Uploaded Medical Reports</label>
					<div class="button-reset">
						<img src="img/contact/refresh.svg">
					</div>
					<div class="button-add">+</div>
					<div class="button-remove">-</div>
					<div class="wrapper-upload">
						<label class="wrapper-file-upload">
							Upload
							<input class="field field-file" type="file" name="uploads[]">
						</label>
						<span class="filename"></span>
					</div>
				</div>
				<div class="container-captcha">
                       <span class="captcha"><?php echo getCaptcha(); ?></span>
                       <input class="field field-captcha" name="captcha" placeholder="Enter Captcha" required>
               </div>
				<input class="submit" type="submit" value="Submit">
			</form>
		</div>
	</section>

	<!-- Conatct Section Ends -->

	<!-- Footer Begins -->

	<div class="footer"></div>

	<!-- Footer Ends -->

	<script type="text/javascript">
		$(document).ready(function(){
			var contactDetailsAligner = function() {
				$('.table-contact-details').height($(window).height() - $('.nav-main').height());
			}
			contactDetailsAligner();

			$(window).resize(function(){
				contactDetailsAligner();
			});

			if (localStorage.getItem('radio-selected') == 0) {
				$('#opinion').prop('checked',true);
			}
			else {
				$('#quote').prop('checked',true);
			}

			$('.field-dob').change(function(){
				$(this).addClass('field-active');
			});

			$('.table-dd-pointer').click(function(event){
				event.stopPropagation();
				$('.div-city').toggleClass('field-active');
			});

			$('.field-city').click(function(event){
				event.stopPropagation();
				$('.div-city').addClass('field-active');
			});

			$(document).click(function(){
				$('.div-city').removeClass('field-active');
			});
		});
	</script>

</body>
</html>