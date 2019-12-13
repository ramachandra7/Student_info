<!DOCTYPE html>
<html>
<head>
<style>
  body{
    background-color: #333333;
  }
.dropbtn {
  background-color: skyblue;
  color: white;
  padding: 12px 16px;
  font-size: 16px;
  border: none;
  cursor: pointer;
}

.dropdown {
  position: relative;
  display: inline-block;
}

.dropdown-content {
  display: none;
  position: absolute;
  background-color: #ffff99;
  min-width: 160px;
  box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
  z-index: 1;
}

.dropdown-content a {
  color: black;
  padding: 12px 16px;
  text-decoration: none;
  display: block;
}

.dropdown-content a:hover {background-color: white}

.dropdown:hover .dropdown-content {
  display: block;
}


input[type=text] {
  width: 275px;
  padding: 12px 20px;
  margin: 8px 0;
  box-sizing: border-box;
  border: 3px solid #ccc;
  -webkit-transition: 0.5s;
  transition: 0.5s;
  outline: none;
}

input[type=text]:focus {
  border: 3px solid #555;
}
input[type=Number] {
  width: 75px;
  padding: 12px 20px;
  margin: 8px 0;
  box-sizing: border-box;
  border: 3px solid #ccc;
  -webkit-transition: 0.5s;
  transition: 0.5s;
  outline: none;
}

input[type=Number]:focus {
  border: 3px solid #555;
}

.container {
  position: absolute;
  top:20px;
  left:20px;
  padding: 40px;
}
input[type=marks] {
  width: 150px;
  padding: 12px 20px;
  margin: 8px 0;
  box-sizing: border-box;
  border: 3px solid #ccc;
  -webkit-transition: 0.5s;
  transition: 0.5s;
  outline: none;
}

input[type=marks]:focus {
  border: 3px solid #555;
}
</style>
</head>
<body>
      <h2 style="color: #ffff99;font-family: cursive; text-align: center;">MARKS</h2>
      <br>
  <div class="container">
<br>
<form>
  <label style="color: white;font-size: 28;font-family: cursive;" for="sname">Student Name: GGG</label>
 
  <label style="color: white;font-size: 28;font-family: cursive;" for="rno">Roll Number: 1 </label>
 
</form>
<div class="row">
<div style="color: white;font-family: cursive;"><span style="font-size: 22px">Year</span></div>
<div class="dropdown">
  <select style="color: black;" class="dropbtn">
  <div class="dropdown-content">
    <option value="first year">FIRST YEAR</option>
    <option value="second year">SECOND YEAR</option>
    <option value="third year">THIRD YEAR</option>
    <option value="fourth year">FOURTH YEAR</option>
 
  </div>
  </div>
</select>
<h4 style="color: white;font-size: 28;font-family: cursive;">Semester</h4>

<div class="dropdown">
  <select style="color: black;" class="dropbtn">
  <div class="dropdown-content">
    <option value="sem1">FIRST SEM</option>
    <option value="sem2">SECOND SEM</option>
  </div>
</div>
</select>
</div>
<br>
<div1>
<form style="color: white;font-family: cursive;size: 32;">
  <br>
  sub1: &nbsp<input type="Number" id="sub1" name="sub1"> &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp
  sub2: &nbsp<input type="Number" id="sub2" name="sub2"> &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp
  sub3: &nbsp<input type="Number" id="sub3" name="sub3"> &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp <br>
  sub4: &nbsp<input type="Number" id="sub4" name="sub4"> &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp
  sub5: &nbsp<input type="Number" id="sub5" name="sub5"> &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp
  sub6: &nbsp<input type="Number" id="sub6" name="sub6">
  <br><br>
  <div style="color: skyblue;">
  SGPA: &nbsp<input type="marks" id="rno" name="rno"> &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp
  CGPA: &nbsp<input type="marks" id="rno" name="rno">
</div>
</form>
</div1>
</div>
</body>
</html>