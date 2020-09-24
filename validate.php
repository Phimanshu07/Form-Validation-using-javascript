<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">

<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

<!-- Popper JS -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</head>

<body>
    <div class="container"><br>
    <h1 class="text-success text-center"> Form Fill Up</h1><br>
       <div class="col-lg-8 m-auto d-block">
       <form autocomplete="off" action="validate.php" onsubmit="return validation()" class="bg-light">
         <div class="form-group">
          <label>Name</label>
          <input type="name" class="form-control" id="name" autocomplete="off" > 
          <span id="uname" class="text-danger font-weight-bold"></span>
        </div>

        <div class="form-group">
          <label>Age</label>
          <input type="name" class="form-control" id="age" autocomplete="off"> 
          <span id="uage" class="text-danger font-weight-bold"></span>
        </div>
        <div class="form-group">
          <label>Mobile</label>
          <input type="text" class="form-control" id="mobile" autocomplete="off" > 
          <span id="umobile" class="text-danger font-weight-bold"></span>
        </div>
        <div class="form-group">
          <label>Gender</label>
          <input type="name" class="form-control" id="gender" autocomplete="off"> 
          <span id="ugender" class="text-danger font-weight-bold"></span>
        </div>
        
 
        <div class="form-group">
          <label>Email</label>
          <input type="name" class="form-control" id="email"  autocomplete="off"> 
          <span id="uemail" class="text-danger font-weight-bold"></span>
        </div>

        

         <button type="submit" class="btn btn-primary">Submit</button>
       </form>
          
         
       </div>
    </div>


    <script type="text/javascript" >

      function validation(){
        var mobile=document.getElementById("mobile");
        var name=document.getElementById("name");
        var age=document.getElementById("age");
        var gender=document.getElementById("gender");
        var email=document.getElementById("email");
        var nameformat=/^[A-Za-z]+$/;  
        var mailformat = /^([A-Za-z0-9_\-\.])+\@([A-Za-z0-9_\-\.])+\.([A-Za-z]{2,4})$/;
        
      
//username validation
        if(name.value ==""){
          document.getElementById("uname").innerHTML="**Please fill the field";
        return false;
        }

        if((name.value.length<=2) || (name.value.length>20)){
          document.getElementById("uname").innerHTML="**Username must be between 2 and 20";
          return false;
        }
       
        if(!isNaN(name.value)){
          document.getElementById("uname").innerHTML="**only character are allowed";
          return false;
        }
        if(!name.value.match(nameformat)){
          document.getElementById("uname").innerHTML="**Please user the field";
        return false;
        }
        
        

//age validation
        if(age.value ==""){
          document.getElementById("uage").innerHTML="**Please fill the field";
        return false;
        }

        if((age.value.length<1)){
          document.getElementById("uage").innerHTML="**Age must be between 1 to 100";
          return false;
        }

        if(age.value.length>3){
          document.getElementById("uage").innerHTML="**Age must be between 1 to 100";
          return false;
        }
        if(isNaN(age.value)){
          document.getElementById("uage").innerHTML="**only numbers are alloewd";
          return false;
        }

 //mobile number validation    


 if(mobile.value ==""){
          document.getElementById("umobile").innerHTML="**Please fill the field";
        return false;
        }
        if(isNaN(mobile.value)){
          document.getElementById("umobile").innerHTML="**only numbers are alloewd";
          return false;
        }

        if(mobile.value.length!=10){
          document.getElementById("umobile").innerHTML="**Mobile  numbers  must be 10 digits are alloewd";
          return false;
        }
//gender validation
        if(gender.value ==""){
          document.getElementById("ugender").innerHTML="**Please fill the field";
        return false;
        }

        
        
        
       
         
        if(!isNaN(gender.value)){
          document.getElementById("ugender").innerHTML="**only character are alloewd";
          return false;
        }


//email validation
        if(email.value ==""){
          document.getElementById("uemail").innerHTML="**Please fill the field";
        return false;
        }
        if(!isNaN(email.value)){
          document.getElementById("uemail").innerHTML="**only character are alloewd";
          return false;
        }

      
        
        if(!email.value.match(mailformat)){
          document.getElementById("uemail").innerHTML="**Format is invalid";
        return false;
        }
       

       return true;
      }
    </script>
</body>
</html>