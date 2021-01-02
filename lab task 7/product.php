<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    <link rel="stylesheet" href="style.css">
    
  </head>
  <body>
  <script type = "text/javascript">
   <!--
     
      function validate() {
      
        if( document.myForm.name.value == "" ) {
            alert( "Please provide Product id!" );
            document.myForm.name.focus() ;
            return false;
         }
         if( document.myForm.pname.value == "" ) {
            alert( "Please provide product name!" );
            document.myForm.pname.focus() ;
            return false;
         }
         if( document.myForm.pprice.value == "" ) {
            alert( "Please provide product price!" );
            document.myForm.pprice.focus() ;
            return false;
         }
         
         
         return( true );
      }
   //-->
</script>
<form method="post" name = "myForm" onsubmit = "return(validate());">  
  <fieldset class="form-wrapper">
  <h2>ADD PRODUCT</h2>
  <form class="product-form">
            <table>
                <tbody>
                <tr>
                <td>
                <h1></h1>
				<input type="file" name="picture">
				<input type="submit" name="picturesubmit" value="Add picture"></td>
                </tr>
                    <tr>
                        <td><b> Pruduct ID: </b></td>
                        <td> <input type="text" name="name"> </td>
                    </tr>
                    <tr>
                        <td><b>Product Name: <b></td>
                        <td> <input type="text" name="pname"> </td>
                    </tr>
					<tr>
                        <td><b> Product Price : </b></td>
                        <td> <input type="text" name="pprice"> </td>
                    </tr>
					<tr>
                        <td><b> Add description </b></td>
                        <td> <textarea name="message" row="5" cols ="20"> Add description</textarea></td>
                    </tr>
                    <b>
                    <label for="Category">Choose a catagory:</label>
                    <select name="Category" id="category">
                      <option value="processor">Processor</option>
                      <option value="motherboard">Motherboard</option>
                      <option value="ram">Ram</option>
                      <option value="psu">Power Supply</option>
                      <option value="case">Case</option>
                      <option value="l1">Laptop</option>
                      <option value="l2">Gaming Laptop</option>
                      
                    </select>
                    
                      
                    </select>
                    </b>
                </tbody>
            </table>
            
           
             
            <input type="submit" style="color:blue;position:center;" value="Submit"> 
        </form>
    </fieldset>

    <input type="checkbox" id="check">
    <?php include_once("Includer/Header.php")?>
    
    
   
    </div>
    
    <?php include_once("Includer/Sidebar.php")?>
   

    <div class="content">
      <div class="card">
        <h1></h1>
      </div>
      
    </div>

    

  </body>
</html>