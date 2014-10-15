<!DOCTYPE html>

<html>

<head>
	<title>Mobile First Test</title>
	<meta charset="utf-8">
	<link rel="stylesheet" href="main.css" type="text/css" />
	<link href='http://fonts.googleapis.com/css?family=Oswald:400,300,700' rel='stylesheet' type='text/css'>
<head/>

<body>
	<div class="container">
		<section><strong>Financia</strong></section>
		<aside><a href"">Create Account</a></aside>
		<aside><a href"">Sign In<a/></aside>
	</div>
	
	<div id="usercont">
		<form method="post" class="userForm">
			<fieldset>
				<legend>Contact Info</legend>
				
				<label for="frmNameA">Name</label>
				<input name="name" id="frmNameA" placeholder="Full name" required="" autocomplete="name" type="text">
				<br class="rwd-break">
				<label for="frmEmailA">Email</label>
				<input name="email" id="frmEmailA" placeholder="name@example.com" required="" autocomplete="email" type="email">
				<br class="rwd-break">
				<label for="frmEmailC">Confirm Email</label>
				<input name="emailC" id="frmEmailC" placeholder="name@example.com" required="" autocomplete="email" type="email">
				<br class="rwd-break">
				<label for="frmPhoneNumA">Phone</label>
				<input name="phone" id="frmPhoneNumA" placeholder="+1-555-555-5555" required="" autocomplete="tel" type="tel">

			</fieldset>

			<fieldset>
				<legend>Adress</legend>

				<label for="frmAddressS">Address</label>
				<input name="ship-address" required="" id="frmAddressS" placeholder="123 Any Street" autocomplete="shipping street-address" type="text">
				<br class="rwd-break">
				<label for="frmCityS">City</label>
				<input name="ship-city" required="" id="frmCityS" placeholder="New York" autocomplete="shipping locality" type="text">
				<br class="rwd-break">
				<label for="frmStateS">State</label>
				<input name="ship-state" required="" id="frmStateS" placeholder="NY" autocomplete="shipping region" type="text">
				<br class="rwd-break">
				<label for="frmZipS">Zip</label>
				<input name="ship-zip" required="" id="frmZipS" placeholder="10011" autocomplete="shipping postal-code" type="text">
				<br class="rwd-break">
				<label for="frmCountryS">Country</label>
				<input name="ship-country" required="" id="frmCountryS" placeholder="USA" autocomplete="shipping country" type="text">
			</fieldset>
			
		</form>
	 </div>
	
</body>

</html>