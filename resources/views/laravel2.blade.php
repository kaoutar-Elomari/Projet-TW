<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
 <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  <script type="text/javascript"> 
function bascule(id) 
{ 
  if (document.getElementById(id).style.visibility == "hidden")
      document.getElementById(id).style.visibility = "visible"; 
  else  document.getElementById(id).style.visibility = "hidden"; 
} 
</script> 
   <style type="text/css">
     *{
  margin: 0;
  padding: 0;
  font-family: "montserrat",sans-serif;

}
body{
   background-color: #F6F7F9;
}
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
.testimonial{

  background-color: white;
  border-radius: 4%;

  width: 450px;
  box-shadow: 0 0 5PX white;



}
.HI{
  display: block;
}
.testimonial img{
  width: 60px;
  height: 60px;
  border-radius: 10%;
  position: relative;
   margin: 20px 0;

  top: 80%;
  left: 20%;
}
.name{
  font-size: 15px;
  color: gray;
 position: relative;
 left: 20%;

  margin: 10px 0 ;
}
p{
 position: relative;
 top: 10%;
 left: 20%;
 margin: 10px 0 ;
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
<div  style="position: relative;
 top: 10%;
 left: 30%;
 margin: 10px 0 ;">
        <div class="HI">
    <div class="testimonial">
               <table><tr>
                <td><img src="https://i.pinimg.com/originals/36/2f/b3/362fb3534f4a6bfe415c114787be794a.jpg" ></td>
                <td> <p class="name">Lorem Ipsum is simply dummy text of</p></td>
              </tr></table>
            

              <p>full name  </p>
</div>
<div class="testimonial">
               <table><tr>
                <td><img src="https://i.pinimg.com/originals/36/2f/b3/362fb3534f4a6bfe415c114787be794a.jpg" ></td>
                <td> <p class="name">Lorem Ipsum is simply dummy text of</p></td>
              </tr></table>
            

              <p>full name  </p>
</div>
<div class="testimonial">
               <table><tr>
                <td><img src="https://i.pinimg.com/originals/36/2f/b3/362fb3534f4a6bfe415c114787be794a.jpg" ></td>
                <td> <p class="name">Lorem Ipsum is simply dummy text of</p></td>
              </tr></table>
            

              <p>full name   <b>3 min ago</b>   </p>
</div>
<div class="testimonial">
               <table><tr>
                <td><img src="https://i.pinimg.com/originals/36/2f/b3/362fb3534f4a6bfe415c114787be794a.jpg" ></td>
                <td> <p class="name">Lorem Ipsum is simply dummy text of</p></td>
              </tr></table>
            

              <p>full name  </p>
</div>


  <div class="testimonial">
               <table><tr>
                <td><img src="https://i.pinimg.com/originals/36/2f/b3/362fb3534f4a6bfe415c114787be794a.jpg" ></td>
                <td> <p class="name">Lorem Ipsum is simply dummy text of</p></td>
              </tr></table>
            

              <p>full name  </p>
</div>
</div>

     




</body>
</html>
