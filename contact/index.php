<?php
	if ($_POST["submit"]) {
		$name = $_POST['name'];
		$email = $_POST['email'];
		$message = $_POST['message'];
		$human = intval($_POST['human']);
		$from = 'hatzart.com Contact Form Submission'; 
		$to = 'ahatzikyriakou@gmail.com'; 
		$subject = 'Contact form submission on hatzart.com';
		
		$body = "From: $name\n\nE-Mail: $email\n\nMessage:\n$message";
 
		// Check if name has been entered
		if (!$_POST['name']) {
			$errName = 'Please enter your name.';
		}
		
		// Check if email has been entered and is valid
		if (!$_POST['email'] || !filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)) {
			$errEmail = 'Please enter a valid email address.';
		}
		
		//Check if message has been entered
		if (!$_POST['message']) {
			$errMessage = 'Please enter your message.';
		}
		//Check if simple anti-bot test is correct
		if ($human !== 137) {
			$errHuman = 'Your anti-spam is incorrect.';
		}
 
// If there are no errors, send the email
if (!$errName && !$errEmail && !$errMessage && !$errHuman) {
	if (mail ($to, $subject, $body, $from)) {
		$result='<div class="alert alert-success">Thank you! I will be in touch.</div>';
	} else {
		$result='<div class="alert alert-danger">Sorry there was an error sending your message. Please try again later.</div>';
	}
}
	}
?>
<!DOCTYPE html>
<html lang="en">
	<head>
<?php include $_SERVER['DOCUMENT_ROOT'] . '/head.php'; ?>
		<title>Amanda Hatzikyriakou | Contact</title>
		<meta name="description" content="Contact me with inquiries, commissions, job opportunities, or just to say hi!">
		<script src="/js/head.load.min.js"></script>
		<script>
			head.load("//code.jquery.com/jquery-1.11.2.min.js", "https://maxcdn.bootstrapcdn.com/bootstrap/3.3.1/js/bootstrap.min.js");
		</script>
	</head>
	<body>
<?php include $_SERVER['DOCUMENT_ROOT'] . '/nav-banner.php'; ?>
		<div class="contact">
			<div class="container">
				<form class="form-horizontal" role="form" method="post" action="/contact/">
					<div class="form-group">
						<label for="name" class="col-sm-2 control-label">Name</label>
						<div class="col-sm-10">
							<input type="text" class="form-control" id="name" name="name" placeholder="First & Last Name" value="<?php echo htmlspecialchars($_POST['name']); ?>">
							<?php echo "<p class='text-danger'>$errName</p>";?>
						</div>
					</div>
					<div class="form-group">
						<label for="email" class="col-sm-2 control-label">Email</label>
						<div class="col-sm-10">
							<input type="email" class="form-control" id="email" name="email" placeholder="example@domain.com" value="<?php echo htmlspecialchars($_POST['email']); ?>">
							<?php echo "<p class='text-danger'>$errEmail</p>";?>
						</div>
					</div>
					<div class="form-group">
						<label for="message" class="col-sm-2 control-label">Message</label>
						<div class="col-sm-10">
							<textarea class="form-control" rows="4" name="message"><?php echo htmlspecialchars($_POST['message']);?></textarea>
							<?php echo "<p class='text-danger'>$errMessage</p>";?>
						</div>
					</div>
					<div class="form-group">
						<label for="human" class="col-sm-2 control-label">135 + 2 = ?</label>
						<div class="col-sm-10">
							<input type="text" class="form-control" id="human" name="human" placeholder="Your Answer">
							<?php echo "<p class='text-danger'>$errHuman</p>";?>
						</div>
					</div>
					<div class="form-group">
						<div class="col-sm-10 col-sm-offset-2">
							<input id="submit" name="submit" type="submit" value="Send" class="btn btn-primary">
						</div>
					</div>
					<div class="form-group">
						<div class="col-sm-10 col-sm-offset-2">
							<?php echo $result; ?>	
						</div>
					</div>
				</form>
			</div>
		</div>
		<div class="spacer20"></div>
<?php include $_SERVER['DOCUMENT_ROOT'] . '/footer.php'; ?>
	</body>
</html>
