<!DOCTYPE HTML>  
<html>
<head>
<style>
.error {color: #FF0000;}

</style>
</head>
<link rel="stylesheet" href="style.css">
<style>
			.ashab{text-align:left;
			      padding: 5px
				  margin : 10px;
			     }
			
			</style>
  </head>
<body>

<script type = "text/javascript">
   <!--
     
      function validate() {
      
         if( document.myForm.name.value == "" ) {
            alert( "Please provide your name!" );
            document.myForm.Name.focus() ;
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
         
        
         if( document.myForm.address.value == "" ) {
            alert( "Please provide your address!" );
            document.myForm.address.focus() ;
            return false;
         }
         
         
         return( true );
      }
   //-->
</script>

<h2  style="text-align:center;">Courier</h2>

<form method="post" name = "myForm" onsubmit = "return(validate());">  
<fieldset class="form-wrapper">
<h3>Courier Details</h3>
 <B>Name:</b> <input type="text" name="name" id="fname">
  
  <br><br>
 
  
  <b>E-MAIL:</b> <input type="text" name="email" id="eml">
  <span class="error"></span>
  <br><br>
  <b>Contact:</b> <input type="text" name="telephone" id="ct">
  <span class="error"></span><br><br>
  
  <h4>Address</h4>
  <b>Address:</b> <input type="text" name="address" id="add" >
  <span class="error"></span><br><br>
 
  <input type="submit" name="Continue" value="continue">  
</form>
</fieldset>
<?php include_once("Includer/Header.php")?>

<?php include_once("Includer/Sidebar.php")?>
<div class="content">
      <div class="card">
        <h1></h1>
      </div>
      
    </div>
</body>
</html>

