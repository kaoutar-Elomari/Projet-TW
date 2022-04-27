<!doctype html> 
<html> 
<head> 
<title>test</title> 
<script type="text/javascript"> 
function bascule(id) 
{ 
  if (document.getElementById(id).style.visibility == "hidden")
      document.getElementById(id).style.visibility = "visible"; 
  else  document.getElementById(id).style.visibility = "hidden"; 
} 
</script> 
<style type="text/css"> 
#header { 
 visibility: hidden;
} 
 
#bouton { 
    background-color  : blue;
    text-align: center;
    font-size: 30px;
    margin: 20px;
    padding: 10px;
    color: white;
    border-radius: 5px;
    width: 130px;
    height: 40px;
} 
input[type=text] {
  width: 300px;
  padding: 12px 20px;
  margin: 8px 0;
  box-sizing: border-box;
}
input[type=submit] {
  background-color: blue;
  color: white;
  height: 43px;
  padding: 12px 20px;
  margin: 10px;
  border: none;
  border-radius: 4px;
  cursor: pointer;

}

input[type=submit]:hover {
  background-color: blue;
}
</style> 
</head> 
 
<body> 
<div id="bouton" onclick="bascule('header');">Reply</div> 
 
<div id="header">
<form>
  <input type="text" id="fname" name="fname">
  <input type="submit" name="">
</form>
    
</div>
</body> 
</html>