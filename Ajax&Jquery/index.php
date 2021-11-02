<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>post</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
</head>
<body>
 
    
<div class="form-container">
  <form action="" method="post">
     <div class="form-group">
     
    <div class="form mb-3">
        <input type="email" class="form-control" id="email" placeholder="name@example.com" name="email">
        
      </div>
      <div class="form">
        <input type="text" class="form-control" id="Password" placeholder="Password" name="password">
      
      </div>
    <button onclick="submitForm(event);" id="btn" name="submit"> Submit</button>
  </form>
     <br>
 <span id="response"></span>
</div>



</div>
<script type="text/javascript">

function submitForm(){
  event.preventDefault();
  var email = $("#email").val();
  var password = $("#Password").val();
 console.log("so far so good");
  var formData = {email:email , password:password};
  $.ajax({url: "process.php" , type: 'POST' , data: formData , success : function (response) {
    $("form").trigger("reset");
  }});
}


// $(document).ready(function(){
//    $("#btn").click(function(){
   
//     var email = $("#email").val();
//     var password = $("#password").val();
//     $.post("./process.php",{
//       email :email,
//       password:password
//     },function(data,status){
//       if(data == "success"){
//         $("#response").html("<div class='alert alert-info'>"+data+"</div>");
//       }
//       else{
//         console.log(data);
//         $("#response").html("<div class='alert alert-info'>"+data+"</div>"); 
//       }
//     });


//   });





// });

</script>

<!-- <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
 -->
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>   
</body>
</html>