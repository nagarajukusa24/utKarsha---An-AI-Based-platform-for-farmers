<!DOCTYPE html>
<html>
<head>
	<title>Farmer Registration</title>
	<script type="text/javascript">
		
		function val(){
			
			var fname=document.forms['form1']['fname'].value;
			var surname=document.forms['form1']['surname'].value;
			var qualification=document.forms['form1']['qualification'].value;
			var contact=document.forms['form1']['contact'].value;
			var employment=document.forms['form1']['employ'].value;
			var address=document.forms['form1']['address'].value;		
			if(fname.length>15 && surname.length>15){
				alert('Name Character limit Exceeded');
				return false;
			}
		
			if(fname=="" || surname==""){
				alert("Enter Names");
				return false;
			}
		

			if(document.getElementById('gen1').checked==false && document.getElementById('gen2').checked==false && document.getElementById('gen3').checked==false)
			{
				alert("check gender");
				return false;
			}

			// if(document.getElementById('i1').checked==false && document.getElementById('i2').checked==false && document.getElementById('i3').checked==false && document.getElementById('i4').checked==false)
			if(qualification==-1)
			{
				alert("Select Qualification");	
								return false;

			}
			if(contact.length>10){
				alert("Check Contact number");
								return false;

			}
			//if(employment[0].checked==false && employment[1].checked==false)
			if(document.getElementById('e1').checked==false && document.getElementById('e2').checked==false){
				alert("Enter Employment Status");
								return false;

			}
			
			if(address==" "){
				alert("Enter Address");
				return false;
			}
			if(document.getElementById('c1').checked==false && document.getElementById('c2').checked==false && document.getElementById('c3').checked==false && document.getElementById('c4').checked==false ){
				alert("Selct Crops");
				return false;
			}

		}
		
	</script> 
</head>
<body>
	<form action="farm-reg-process.php" align="center" method="post" onsubmit="return val()" name="form1" enctype="multipart/form-data"> 
		
		Upload Photo<span style="color: red">*</span><input type="file" name="image" required/><br>
		<br>
		Farmer's Name <input type="text" name="fname"><br>
		<br>
		Surname Name<input type="text" name="surname"><br>
		<br>
		Gender <input type="radio" name="gender" id="gen1" value="male">Male <input type="radio" name="gender" id="gen2" value="male">Female
		<input type="radio" name="gender" id="gen3" value="male">LGBT<br><br>
		
		Qualification 
		<select name="qualification" required/>
			<option value="-1">Select Option</option>
			<option name="q1" id="i1" value="secondary-schooling">Secondary Schooling</option>
			<option name="q2" id="i2" value="intermediate-education">Intermediate Education</option>
			<option name="q3" id="i3" value="under-graduation">Under Graduation</option>
			<option name="q4" id="i4" value="post-graduation">Post Graduation</option>
		</select>
		<br><br>
		Contact Number <input type="text" name="contact"><br><br>
		
		Employment Status <input type="radio" name="employ" id="e1" value="yes">Yes <input type="radio" id="e2" name="employ" value="no">No<br>
		<br>
		Residential Address <textarea cols="30" rows="3" name="address">
			
		</textarea>
		<br><br>
			Crops <input type="checkbox" id="c1" name="crops" value="paddy">Paddy <input type="checkbox" id="c2" name="crops" value="cotton">Cotton
				<input type="checkbox" id="c3" name="crops" value="maize">Maize<input type="checkbox" id="c4" name="crops" value="wheat">Wheat
		<br><br>
		<br><br>
		<input type="reset" name="Reset" value="reset"> &nbsp &nbsp
	
	
		<input type="submit" value="Review Registration" name="save">
	</form>

		
	
</body>
</html>	