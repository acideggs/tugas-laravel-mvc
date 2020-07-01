<!DOCTYPE html>
<html>
<head>
	<title>SanberBook | Sign Up</title>
</head>
<body>

	<h1>Buat Account Baru!</h1>
	<h3>Sign Up Form</h3>

	<form action="/welcome" method="POST">

		@csrf

		<p><label for="firstName">First Name:</label></p>
		<p><input type="text" name="firstName" id="firstName"></p>

		<p><label for="lastName">Last Name:</label></p>
		<p><input type="text" name="lastName" id="lastName"></p>

		<p>Gender:</p>

		<input type="radio" name="gender" id="male" value="male">
		<label for="male">Male</label><br>
		
		<input type="radio" name="gender" id="female" value="female">
		<label for="female">Female</label><br>

		<input type="radio" name="gender" id="other" value="other">
		<label for="other">Other</label>

		<p>Nationality:</p>
		<select>
			<option value="indonesian">Indonesian</option>
			<option value="Singaporean">Singaporean</option>
			<option value="Malaysian">Malaysian</option>
			<option value="Australian">Australian</option>
		</select>

		<p>Language Spoken:</p>

		<input type="checkbox" name="indonesia" id="indonesia" value="bahasa indonesia">
		<label for="indonesia">Bahasa Indonesia</label><br>

		<input type="checkbox" name="english" id="english" value="english">
		<label for="english">English</label><br>

		<input type="checkbox" name="otherLang" id="otherLang" value="other">
		<label for="otherLang">Other</label><br>
		
		<p>Bio:</p>
		<textarea rows="10"></textarea><br>

		<input type="submit" name="signUp" id="signUp" value="Sign Up">

	</form>

</body>
</html>