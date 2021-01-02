<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    <link rel="stylesheet" href="style.css">
    <style>
table,th,td {
  border : 1px solid black;
  border-collapse: collapse;
  background-color:antiquewhite;
}
th,td {
  padding: 5px;
}
</style>
    
  </head>
  <body>
  <fieldset class="form-wrapper">
  <h2>Supplier Information - Press "Click Here"</h2>
  <form class="product-form">
            <table>
                <tbody>
                <button type="button" onclick="loadXMLDoc()">Click Here</button>
<br><br>
<table id="demo"></table>

<script>
function loadXMLDoc() {
  var xmlhttp = new XMLHttpRequest();
  xmlhttp.onreadystatechange = function() {
    if (this.readyState == 4 && this.status == 200) {
      myFunction(this);
    }
  };
  xmlhttp.open("GET", "t.xml", true);
  xmlhttp.send();
}
function myFunction(xml) {
  var i;
  var xmlDoc = xml.responseXML;
  var table="<tr><th>PC Component</th><th>Company</th><th>Model</th><th>Country</th><th>Price</th><th>Year</th></tr>";
  var x = xmlDoc.getElementsByTagName("PC");
  for (i = 0; i <x.length; i++) { 
    table += "<tr><td>" +
    x[i].getElementsByTagName("TITLE")[0].childNodes[0].nodeValue +
    "</td><td>" +
    x[i].getElementsByTagName("COMPANY")[0].childNodes[0].nodeValue +
    "</td><td>" +
    x[i].getElementsByTagName("ARTIST")[0].childNodes[0].nodeValue +
    "</td><td>"+
    x[i].getElementsByTagName("COUNTRY")[0].childNodes[0].nodeValue +
    "</td><td>" +
    x[i].getElementsByTagName("PRICE")[0].childNodes[0].nodeValue +
    "</td><td>"+
    x[i].getElementsByTagName("YEAR")[0].childNodes[0].nodeValue +
    "</td></tr>";
  }
  document.getElementById("demo").innerHTML = table;
}
</script>  
				           
                </tbody>
            </table>
           
             
            <input type="submit" style="color:blue;position:center;" value="Submit"> 
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