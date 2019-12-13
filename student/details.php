<!DOCTYPE html>
<head>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
<style>
h1{
font-size:200%;
color:black;
padding:20px;
/*border:double;*/
text-align: center;
}
h2
{
font-size:150%;
text-align:center;
}
body
{
/*background-image: url('details_bg.jpg');*/
/*background: linear-gradient(to right, #1CB5E0, #000046);
background-position: center center;
background-size: cover;
background-attachment: fixed;*/
background: #24C6DC;  /* fallback for old browsers */
background: -webkit-linear-gradient(to right, #514A9D, #24C6DC);  /* Chrome 10-25, Safari 5.1-6 */
background: linear-gradient(to right, #514A9D, #24C6DC); /* W3C, IE 10+/ Edge, Firefox 16+, Chrome 26+, Opera 12+, Safari 7+ */

}
	.card
	{
		position: absolute;
		width: 600px;
		padding: 50px;
		border-radius: 10px;
		left: 50%;
		top: 50%;
		transform: translate(-50%, -5%);
	}
	.card .label
	{
		text-align: left;
		font-size:20px; 
	}
	.card .input
	{
		display: block;
		width: 100%;
		padding: 5px;
		margin-bottom: 15px;
		outline: none;

	}
button{
width: 100%;
padding: 5px;
}
select{
padding: 5px;
}
#ui{

	background-color: #333;
	padding: 30px;
	margin-top:50px;
	opacity: 0.7;
}
</style>
</head>
<body>
<h1 align="center"> Anil Neerukonda Instiituite of Technology and Sciences</h1>
 <h2 align="center">Student Details</h2>
 <marquee behaviour="scroll" direction="left" scrollamount="10"><font size="+2">This information is regarding with your placements,please make sure you fill correct details</font></marquee>
 <h2 align="center">Please fill your details here</h2>
<div class="card">
	<div id="ui">
<form name ="form" acion="backend.php" onsubmit="validate()">
  
  <div class ="label">STUDENT NAME: &nbsp</div>
  <input class="input" type="text" placeholder="enter the name" name="name" required>

 <div class ="label">BRANCH: &nbsp</div>
 <input class="input" type="text" placeholder="enter the branch" name="branch" required>
   
<div class="label">DOB: &nbsp</div>
<input class="input" type="date" placeholder="DD/MM/YY" name="dob" required>

<div class="label">GENDER: &nbsp</div>
<select>
	<option>select gender...</option>
    <option>male</option>
    <option>female</option>
</select>
<br></br>

<div class="label">RELIGION: &nbsp</div>
<input class="input" type="text" placeholder="enter the religion" name="rel" required>

<div class="label">CASTE: &nbsp</div>
<input class="input" type="text" placeholder="enter the caste" name="caste" required>

<div class="label">HEIGHT: &nbsp</div>
<input class="input" type ="number" placeholder="enter the height" name="height" required>

<div class="label">WEIGHT: &nbsp</div>
<input class="input" type ="number" placeholder="enter the weight" name="weight" required>

<div class="label">EYESIGHT: &nbsp</div>
<input class="input" type ="number" placeholder="enter the eyesight" name="eye" required>

<div class="label">BLOOD GROUP: &nbsp</div>
<input class="input" type ="text" placeholder="enter the bloodgroup" name="bg" required>

<div class="label">MOBILE NUMBER: &nbsp</div>
<input class="input" type ="number" placeholder="enter the mobilenumber" name="mb" required>

<div class="label">CLG EMAIL ID: &nbsp</div>
<input class="input" type ="email" placeholder="enter the email id" name="email" required>

<div class="label">ADDRESS: &nbsp</div>
<input class="input" type ="text" placeholder="enter the address" name="address" required>

<div class="label">PARENT NAME: &nbsp</div>
<input class="input" type ="text" placeholder="enter the parentname" name="pname" required>

<div class="label">PARENT OCCUPATION: &nbsp</div>
<input class="input" type ="text" placeholder="enter the occupation" name="occupation" required>

<div class="label">PARENT MOBILENUMBER: &nbsp</div>
<input class="input" type ="number" placeholder="enter the mobile number" name="pmb" required>
<div class="label">PARENT EMAILID: &nbsp</div>
<input class="input" type ="email" placeholder="enter the email id" name="pemail" required>

<div class="label">EAMCET RANK: &nbsp</div>
<input class="input" type ="number" placeholder="enter the eamcet rank" name="erank">

<div class="label">ECET RANK: &nbsp</div>
<input class="input" type ="number" placeholder="enter the ecet rank" name="ecrank">

<h2>SSC</h2>
<div class="label">SSC-CGPA: &nbsp</div>
<input class="input" type ="number" placeholder="enter the ssc gpa" name="sgpa" required>

<div class="label">SSC-percentage: &nbsp</div>
<input class="input" type ="number" placeholder="enter the ssc percentage" name="sper" required>

<div class="label">SSC-YOP: &nbsp</div>
<input class="input" type ="date" placeholder="enter the ssc year of pass" name="syop" required>

<div class="label">SSC-SCHOOL: &nbsp</div>
<input class="input" type ="text" placeholder="enter the ssc school" name="sschool" required>

<div class="label">SSC-CITY: &nbsp</div>
<input class="input" type ="text" placeholder="enter the ssc city" name="scity" required>

<div class="label">SSC-MEDIUM: &nbsp</div>
<input class="input" type ="text" placeholder="enter the ssc medium" name="smedium" required>

<h2>12th</h2>
<div class="label">12th-CGPA: &nbsp</div>
<input class="input" type ="number" placeholder="enter the 12th cgpa" name="tgpa">

<div class="label">12th-%: &nbsp</div>
<input class="input" type ="number" placeholder="enter the 12th percentage" name="tper">

<div class="label">12th-YOP: &nbsp</div>
<input class="input" type ="date" placeholder="enter the 12th yop" name="tyear">

<div class="label">12th-BOARD: &nbsp</div>
<input class="input" type ="text" placeholder="enter the 12th board" name="tboard">

<div class="label">12th-COLLEGE: &nbsp</div>
<input class="input" type ="text" placeholder="enter the 12th clg" name="tclg">

<div class="label">12th-GROUP: &nbsp</div>
<input class="input" type ="text" placeholder="enter the 12th group" name="tgrp">

<div class="label">12th-CITY: &nbsp</div>
<input class="input" type ="text" placeholder="enter the 12th city" name="tcity">

<div class="label">12th-MEDIUM: &nbsp</div>
<input class="input" type ="text" placeholder="enter the 12th medium" name="tmedium">

<h2>DIP</h2>

<div class="label">DIP-CGPA: &nbsp</div>
<input class="input" type ="number" placeholder="enter the dip cgpa" name="dgpa">
<div class="label">DIP-%: &nbsp</div>
<input class="input" type ="number" placeholder="enter the dip percentage" name="dper">
<div class="label">DIP-YOP: &nbsp</div>
<input class="input" type ="date" placeholder="enter the dip yop" name="dyear">
<div class="label">DIP-BOARD: &nbsp</div>
<input class="input" type ="text" placeholder="enter the dip board" name="dboard">
<div class="label">DIP-COLLEGE: &nbsp</div>
<input class="input" type ="text" placeholder="enter the dip clg" name="dclg">
<div class="label">DIP-GROUP: &nbsp</div>
<input class="input" type ="text" placeholder="enter the dip group" name="dgrp">
<div class="label">DIP-CITY: &nbsp</div>
<input class="input" type ="text" placeholder="enter the dip city" name="dcity" required>
<div class="label">DIP-MEDIUM: &nbsp</div>
<input class="input" type ="text" placeholder="enter the dip medium" name="dmedium" required>
<div class="label">AADHAR: &nbsp</div>
<input class="input" type="number" placeholder="enter the aadhar number" name="aadhar" required>
<div class="label">PAN: &nbsp</div>
<input class="input" type="number" placeholder="enter the pan number" name="pan" required>

<div class="label">INTERESTED IN HIGHER STUDIES: &nbsp</div>
<input class="input" type="text" placeholder="enter the yes/no" name="higher" required>
<div class="label">NAME OF THE COMPANY: &nbsp</div>
<input class="input" type="text" placeholder="enter the comapany name" name="company" required>
<div class="label">DECLERATION FORM SUBMITTED: &nbsp</div>
<input class="input" type="text" placeholder="enter YES /NO" name="declare" required>
<div class="label">REMARKS: &nbsp</div>
<input class="input" type="text" placeholder="enter your valuable remarks" name="remarks" >
 
<button class="button" type="submit">submit</button>
</form>
</div>
</div>
<script>
	{
	function validate()
	{
	var mobile=document.forms["form"]["mb"].value;
	var email=document.forms["form"]["email"].value;
	var pm=document.forms["form"]["pmb"].value;
	var em=document.forms["form"]["pemail"].value;
	var sg=document.forms["form"]["sgpa"].value;
	var sp=document.forms["form"]["sper"].value;
	var tg=document.forms["form"]["tgpa"].value;
	var tp=document.forms["form"]["tper"].value;
	var dg=document.forms["form"]["dgpa"].value;
	var dp=document.forms["form"]["dper"].value;
	var aad=document.forms["form"]["aadhar"].value;
	var paan=document.forms["form"]["pan"].value;
	var interest=document.forms["form"]["higher"].value;
	var dec=document.forms["form"]["declare"].value;
	if(!/[0-9]{10}/.test(mobile))
	{
     alert("please enter valid phone number");
	}
	if(!/^([a-zA-Z0-9_\-\.]+)@([a-zA-Z0-9_\-\.]+)\.([a-zA-Z]{2,5})/.test(email))
	{
		alert ("please enter the valid email address");
	}
	if(!/[0-9]{10}/.test(pm))
	{
		alert("please enter valid parent mobile number");
	}
	if(!/^([a-zA-Z0-9_\-\.]+)@([a-zA-Z0-9_\-\.]+)\.([a-zA-Z]{2,5})/.test(pm))
	{
	alert("please enter valid email address of your parent");
	}
	if(!/[0.0-10.0]/.test(sg))
	{
		alert("please enter valid gpa of your ssc grade");
	}
	if(!/^[35-100]/.test(sp))
	{
		alert("please enter vlid percentage of your of your ssc marks");
	}
	if(!/^[0.0-10.0]/.test(tg))
	{
      alert("please enter valid gpa of your 12th marks");
	}
	if(!/^[35-100]/.test(tp))
	{
		alert("enter the valid percentage of your 12th standard");
	}
	if(!/^[0.0-10.0]/.test(dg))
	{
		alert("please enter the valid grade of polytechnic");
	}
	if(!/^[35-100]/.test(dp))
	{
		alert("please enter the valid percentage of polytechnic scrore");
	}
	if(!/[0-12]{12}/.test(aad))
	{
		alert("please enter valid aadhar number");
	}
	if(!/[A-Z0-9]{10}/.test(paan))
	{
		alert("please enter valid pan number");
	}
	if(!/[(yes)/(no)]/.test(interest))
	{
		alert("please enter either yes or no in interest to higher studies column");
	}
	if(!/[(yes)/(no)]/.test(declare))
	{

			alert("please enter either yes or no in column of declerstion form submitted");
	}
}
</script>
</body>
</html>

