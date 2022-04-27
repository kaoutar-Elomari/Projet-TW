<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
   <style type="text/css">
     *{
  margin: 0;
  padding: 0;
  font-family: "montserrat",sans-serif;

}
input[type=text]{
  width: 560px;
  height: 60px;
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
    height: 60px;
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
  font-size: 20px;
  color: gray;
  margin: 20px;
  padding: 20px;
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

<br>
<div class="container">
 
  <button type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#myModal">Reply</button>

  <!-- Modal -->
  <div class="modal fade" id="myModal" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
        </div>
        <div class="modal-body">
           <form action="/" method="POST">
           @csrf
           @method('POST')
          <input type="text" name="body" placeholder="Go ahead,don't be shy . Share your thoughts ....">
           <input type="hidden" class="form-control" id="pwd"  name="userid" value="625998aef356934d64224a02">
         <input type="hidden" class="form-control"   name="postid" value="6258a15f099715739caffe38">
        <input type="hidden" class="form-control"   name="date" value="2022-04-14T22:31:28.486+00:00">
        </div>
        <div class="modal-footer">
          <button type="submit" class="btn btn-default" data-dismiss="modal">Share Comment</button>
        </div>
        </form>
      </div>
      
    </div>
  </div>
  
</div>

<div  style="position: relative;top: 10%;left: 30%;margin: 10px 0 ;">
        <div class="HI">
          @foreach($result as $res)
<div class="testimonial">
               <table><tr>
                <td><img src="https://i.pinimg.com/originals/36/2f/b3/362fb3534f4a6bfe415c114787be794a.jpg" ></td>
                <td> <p class="name">{{$res['body']}}</p></td>
              </tr></table>
            

              <p>{{$res['first_name']}}  {{$res['last_name']}} <b>{{$res['createdAt']}}  ago</b>   </p>
</div>
@endforeach

</div>

     




</body>
</html>