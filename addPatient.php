<html>
<head>
<title>Add Patient</title>
</head>
<body>
<form action="http://localhost/patientadded.php" method="post">

<b>Add a New Patient</b>

<p>First Name:
<input type="text" name="first_name" size="30" value="" />
</p>

<p>Last Name:
<input type="text" name="last_name" size="30" value="" />
</p>

<p>Email:
<input type="text" name="email" size="30" value="" />
</p>

<p>Street:
<input type="text" name="street" size="30" value="" />
</p>

<p>City:
<input type="text" name="city" size="30" value="" />
</p>

<p>Province (2 Characters):
<input type="text" name="state" size="30" maxlength="2" value="" />
</p>

<p>Zip Code:
<input type="text" name="zip" size="30" maxlength="6" value="" />
</p>

<p>Phone Number:
<input type="text" name="phone" size="30" value="" />
</p>

<p>Birth Date (YYYY-MM-DD):
<input type="text" name="birth_date" size="30" value="" />
</p>

<p>Sex (M or F):
<input type="text" name="sex" size="30" maxlength="1" value="" />
</p>

<p>Height:
<input type="text" name="height" size="30" value="" />
</p>

<p>Weight:
<input type="text" name="weight" size="30" value="" />
</p>

<p>Health Card #:
<input type="text" name="health_card" size="30" value="" />
</p>





<p>
<input type="submit" name="submit" value="Send" />
</p>

</form>
</body>
</html>