<?php
if(isset($_POST['submit']))
{
 $user=$_POST['sname']	;
 $user_len=strlen($user);
 $email=$_POST['Email']	;
 $gender =$_POST["gender"];
  $degree =$_POST["Degree"];
  //$dob =$_POST["Dob"];

  //$bgroup=$_POST["Bgroup"];
  /*$file_name=$_FILES['file']['name'];
    $file_type=$_FILES['file']['type'];
      $file_size=$_FILES['file']['size'];
        $file_temp_Loc=$_FILES['file']['tmp_name'];
          $file_store="upload/".$file_name;
          move_uploaded_file($file_temp_Loc,$file_store);*/


if(empty($user)){
	$msg="please enter a valid user Name";
	
}
else if (!preg_match("/^[a-zA-Z ]*$/",$user)){
	$msg="please enter a valid user id";
}
else if($user_len<=2){
	$msg="please enter at least 2 words";
}
else if(empty($email)){
	$msg="please enter a valid email";
}
else if(!filter_var($email,FILTER_VALIDATE_EMAIL)){
$msg="please enter a valid email";

}
else if(empty($gender)){
$msg="please enter a valid gender";

}
else if(empty($degree)){
$msg="please enter a valid degree";

}/*else if(var_dump(checkdate($month, $day, $year))){
$msg="please enter a valid dob";
}*/
/* else if(empty($bgroup)){
$msg="please enter a valid blood group";
}*/
else{
	$msg="ok";
}
}
?>





<!DOCTYPE html>
<html>
<head>
	<title>Registration Form</title>
</head>
<body>
	<h1>My Profile</h1>


	<form method="POST" action="">
	<fieldset>
		<legend>Registration</legend>
	<table>
		<tr>
			<td>Name:</td>
			<td><input type="text" name="sname" value="" /></td>
		</tr>
		
		<tr>
			<td>Email: </td>
			<td><input type="text" name="Email" value=""/></td>
		</tr>

			<tr>
			<td>Gender: </td>
			<td> 
				


				    <input type="radio" name="gender" <?php if (isset($gender) && $gender=="female")  echo "checked" ;?> value="female">Female
                    <input type="radio" name="gender" <?php if (isset($gender) && $gender=="male")  echo "checked";?> value="male">Male
                   <input type="radio" name="gender" <?php if (isset($gender) && $gender=="other") echo "checked";?> value="other">Other 

			</td>
		</tr>

		<tr>
			<td>DOB:</td>
			<td><input type="date" name="Dob" value=""/></td>
		</tr>

        

	
		<tr>
					<td>Blood Group:</td>
			<td>
				<select name="Bgroup"<?php echo($data['user_bloodgroup']==$Bgroup)?'checked':''?>>
					<option>A+</option>
					<option>B+</option>
					<option>A-</option>
				</select>
			</td>
		</tr>
		
		
			<tr>
			<td>Degree:</td>
			<td>
				<input type="checkbox" name="Degree" <?php if (isset($degree) && $degree=="ssc")  echo "checked" ;?> value="degree">SSC
				<input type="checkbox" name="Degree" <?php if (isset($degree) && $degree=="hsc")  echo "checked" ;?> value="degree">HSC
				<input type="checkbox" name="Degree" <?php if (isset($degree) && $degree=="bsc")  echo "checked" ;?> value="degree">BSC
				<input type="checkbox" name="Degree" <?php if (isset($degree) && $degree=="msc")  echo "checked" ;?> value="degree">MSC
			</td>
		</tr>

		<tr>
			<td></td>
			<td>
				
				<input type="submit" name="submit" value="Submit">
				<input type="reset" name="" value="Reset">
					<p style="color:red"><?php
			if(isset($msg)){
			echo $msg ;}
			?></p>
			</td>
		</tr>
		<!--<tr>
			<form method="POST" action="" entype="multipart/form-data">

         <label>Choseen files</label>
         <p>input type="file" name="file"/></p>
         <p>input type="submit" name="submit" value="Upload Image"></p>
     </form>
         </tr>-->
	
			


		
        
	</table>
	</fieldset>
	</form>
</body>
</html>