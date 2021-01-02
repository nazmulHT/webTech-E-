<!DOCTYPE HTML>  
<html>
<head>
<style>
.error {color: #FF0000;}
</style>
</head>
<link rel="stylesheet" href="style.css">
<body>
<section class="adr"> 

<script type = "text/javascript">
   <!--
     
      function validate() {
      
         if( document.myForm.name.value == "" ) {
            alert( "Please provide your name!" );
            document.myForm.Name.focus() ;
            return false;
         }
         if( document.myForm.lastname.value == "" ) {
            alert( "Please provide your lastname!" );
            document.myForm.lastname.focus() ;
            return false;
         }

            if( document.myForm.email.value == "" ) {
            alert( "Please provide your email!" );
            document.myForm.email.focus() ;
            return false;
         }

         if( document.myForm.telephone.value == "" ) {
            alert( "Please provide your telephone!" );
            document.myForm.telephone.focus() ;
            return false;
         }

         if( document.myForm.dob.value == "" ) {
            alert( "Please provide your dob!" );
            document.myForm.dob.focus() ;
            return false;
         }

         if( document.myForm.gender.value == "" ) {
            alert( "Please provide your gender!" );
            document.myForm.gender.focus() ;
            return false;
         }

         if( document.myForm.address.value == "" ) {
            alert( "Please provide your address!" );
            document.myForm.address.focus() ;
            return false;
         }

         if( document.myForm.presentaddress.value == "" ) {
            alert( "Please provide your present address!" );
            document.myForm.presentaddress.focus() ;
            return false;
         }

         if( document.myForm.city.value == "" ) {
            alert( "Please provide your city!" );
            document.myForm.city.focus() ;
            return false;
         }

         if( document.myForm.dob.value == "" ) {
            alert( "Please provide your dob!" );
            document.myForm.dob.focus() ;
            return false;
         }

         if( document.myForm.country.value == "" ) {
            alert( "Please provide your country!" );
            document.myForm.country.focus() ;
            return false;
         }

         if( document.myForm.region.value == "" ) {
            alert( "Please provide your region!" );
            document.myForm.region.focus() ;
            return false;
         }

         if( document.myForm.password.value == "" ) {
            alert( "Please provide your password!" );
            document.myForm.password.focus() ;
            return false;
         }
         if( document.myForm.dob.value == "" ) {
            alert( "Please provide your dob!" );
            document.myForm.dob.focus() ;
            return false;
         }

         if( document.myForm.Zip.value == "" || isNaN( document.myForm.Zip.value ) ||
            document.myForm.Zip.value.length != 5 ) {
            
            alert( "Please provide a zip in the format #####." );
            document.myForm.Zip.focus() ;
            return false;
         }
         if( document.myForm.Country.value == "-1" ) {
            alert( "Please provide your country!" );
            return false;
         }
         return( true );
      }
   //-->
</script>

<h2  style="text-align:center;">Admin Signup</h2>

<form method="post" name = "myForm" onsubmit = "return(validate());">  
 <div class="registration_box">
<h3>Personal Details</h3>

 <B>First Name:</b> <input type="text" name="name" id="fname">
  
  <br><br>
 
  <B>Last Name:</b> <input type="text" name="lastname" id="lname" >
  <span class="error"></span>
  <br><br>
  <B>User Name:</b> <input type="text" name="username" id="uname" >
  <span class="error"></span>
  <br><br>
  <b>E-MAIL:</b> <input type="text" name="email" id="eml">
  <span class="error"></span>
  <br><br>
  <b>Contact:</b> <input type="text" name="telephone" id="ct">
  <span class="error"></span><br><br>
  <b>DOB:</b> <input type="date" name="dob" id="dob">
  <span class="error"></span>
  <br><br>
  <b>GENDER:</b>
  <br><br>
  <input type="radio" name="gender" id="ml" value="male">Male
  <input type="radio" name="gender" id="fl" value="female">Female
  <input type="radio" name="gender" id="ot" value="other">Other  
  <span class="error"></span>
  <br><br>
  <h4>Your Address</h4>
  <b>Parmanent Address:</b> <input type="text" name="address" id="add" >
  <span class="error"></span><br><br>
  <b>Present Address:</b> <input type="text" name="presentaddress" id="padd">
  <span class="error"></span><br><br>
  <b>City:</b> <input type="text" name="city" id="ct">
  <span class="error"></span><br><br>
  <b>Country:</b> <input type="text" name="country" id="cn">
  <span class="error"></span><br><br>
  <b>Region/State:</b>
  <select  name="region" id="rg" >
  <option value="">_ _ _Must Be Selected_ _ _</option>  
    <option value="Bangladesh">Bangladesh</option>
    <option value="A-">Outside Bangladesh</option>
    </select>
	<span class="error">*  </span>
	<br><br>
  <h5>Your Password</h5>
  <B>Password:</b> <input type="text" name="password" id="ps">
  <span class="error"></span>
  <br><br>
  <B>Confirm Password:</b> <input type="text" name="password" id="cps">
  <span class="error"></span>
  <br><br>
  
  
  <input type="submit" name="Continue" value="continue">  

</form>

</section>
</body>
</html>