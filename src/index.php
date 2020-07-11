<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta http-equiv="X-UA-Compatible" content="ie=edge">
<title>CoViD-19 Test Report</title>

<link rel="stylesheet" href="fonts/material-icon/css/material-design-iconic-font.min.css">

<link rel="stylesheet" href="css/style.css">
</head>
<body>
<div class="main">
<div class="container">
<div class="signup-content">
<div class="signup-img" style="height: 1473.23px; ">
<div class="img1" style="background-image: url('images/signup-img.jpg'); height:736.21px; ">
</div>
<div class="img2" style="background-image: url('images/signup-img2.jpg'); height:737.02px;">
</div>
</div>
<div class="signup-form">
<form method="POST" action="modified.php" class="register-form" id="register-form">
<h2>PATIENT DEMOGRAPHICS</h2>
<div class="form-group">
<label for="uid">UNIQUE MEDICAL ID *</label>
<input type="number" name="uid" id="uid" required />
</div>
<div class="form-row">
<div class="form-group">
<label for="fname">FIRST NAME *</label>
<input type="text" name="fname" id="fname" pattern = "^[A-Za-z. ]+$" required />
</div>
<div class="form-group">
<label for="lname">LAST NAME *</label>
<input type="text" name="lname" id="lname" pattern = "^[A-Za-z. ]+$" required />
</div>
</div>
<div class="form-group">
<label for="email">EMAIL</label>
<input type="email" name="email" id="email" required />
</div>
<div class="form-group">
<label for="dob">DATE OF BIRTH *</label>
<input type="date" name="dob" id="dob" min = <?php echo date('1900-01-01')?>  max = <?php echo date('Y-m-d'); ?> required />
</div>
<div class="form-row">
<div class="form-group">
<label for="flat">HOUSE NUMBER *</label>
<input type="text" name="flat" id="flat" required />
</div>
<div class="form-group">
<label for="street">STREET *</label>
<input type="text" name="street" id="street" required />
</div>
<div class="form-group">
<label for="locality">LOCALITY *</label>
<input type="text" name="locality" id="locality" required />
</div>
</div>
<div class="form-row">
<div class="form-group">
<label for="city">CITY *</label>
<input type="text" name="city" id="city" required />
</div>
<div class="form-group">
<label for="state">STATE *</label>
<input type="text" name="state" id="state" required />
</div>
<div class="form-group">
<label for="pin">PIN CODE *</label>
<input type="text" name="pin" id="pin" pattern = "[0-9]{6}" required />
</div>
</div>
<div class="form-group">
<label for="sod">SOURCE OF DISEASE *</label>
<input type="text" name="sod" id="sod" required />
</div>
<h2>LAB DETAILS</h2>
<div class="form-group">
<label for="laddress">ADDRESS *</label>
<textarea name="laddress" id="laddress" placeholder="Laboratory Address" rows="4" cols="50" required></textarea>
</div>
<div class="form-group">
<label for="lab_director">LAB DIRECTOR *</label>
<input type="text" name="lab_director" id="lab_director" pattern = "^[A-Za-z. ]+$" required />
</div>
<div class="form-group">
<label for="tmethod">TEST METHOD *</label>
<div class="form-select">
<select name="tmethod" id="tmethod" required>
<option value="" >Select method</option>
<option value="genesig Real-Time PCR Coronavirus">genesig Real-Time PCR Coronavirus</option>
<option value="cobas SARS-Cov-2">cobas SARS-Cov-2</option>
</select>
</div>
</div>
<div class="form-group">
<label for="performed_date">PERFORMED DATE *</label>
<input type="date" name="performed_date" id="performed_date" min = <?php echo date('2019-12-01')?>  max = <?php echo date('Y-m-d'); ?> required />
</div>
<h2>TEST RESULTS</h2>
<div class="form-radio">
<label for="result" class="radio-label">TEST RESULT *</label>
<div class="form-radio-item">
<input type="radio" name="result" id="positive" value="positive" required />
<label for="positive">POSITIVE</label>
<span class="check"></span> 
</div>
<div class="form-radio-item">
<input type="radio" name="result" id="negative" value="negative" required />
<label for="negative">NEGATIVE</label>
<span class="check"></span> 
</div>
</div>
<div class="form-submit">
<input type="submit" value="Reset All" class="submit" name="reset" id="reset" />
<input type="submit" value="Submit Form" class="submit" name="button1" id="button1" style="background-color:#53e0ce;" />
</div>
</form>
</div>
</div>
</div>
</div>
<script src="vendor/jquery/jquery.min.js"></script>
<script src="js/main.js"></script>
</body>
</html>