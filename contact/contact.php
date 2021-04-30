<!DOCTYPE html>
<html>
    <head>
      
      <title>Tyler's  CONTACT</title>
      <link rel="icon" href="" type="image/icon type">
      <meta charset = "utf-8">
      <meta name = "viewport" content = "width=device-width, initial-scale = 1">
    
      <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
        
      <link rel="stylesheet" href="style1.css">
      <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
      <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <style>
     </style>
    </head>
 
  <body>

  <section id="formsection">
    <div class="container-sm" > 

      <form action="contactform.php" method="POST">
              
        <div class="row">
          <div class="col-sm-7">
              <h2><i>Contact</i></h2>
              <p>Business Inquiries</p>   
                <div class="form-group">
                  <label for="FormGroupExampleInput2">Name</label>
                  <input type="text" class="form-control" id="formGroupExampleInput" name="name" placeholder="Enter your name">
              </div>
                <div class="form-group">
                  <label for="formGroupExampleInput2"> Email Address</label>
                  <input type="text" class="form-control" id="exampleFormControlInput1" name="email" placeholder="Enter your email">
                </div>
                <div class="form-group">
                    <label for="formGroupExampleInput2"> Message </label>
                    <input type="text" class="form-control" id="formGroupExampleInput2" name="message" placeholder="Enter your message">
                  </div>
                
                <button class="btn btn-primary"name="submit" >Send</button>
                
            
              </form>
           
             
          </div>
        
          <div class="col-sm-4">
            <img src="gym11.jpg" alt="..."height="250px"width="300px">
            <p><b>Gym Solutions</b></p>
            <p>gymsolutions.net</p>
            <p>+1-876-813-4433</p>
           
            
          </div>
        
    </div>
    
   
   





    <script>
        function myfunction(){
      
        var x= document.getElementById("formGroupExampleInput");
        var y= document.getElementById("exampleFormControlInput1");
        var z= document.getElementById("formGroupExampleInput2");
        if (x.value==""){
        alert("Please Enter your Name");
      
        }
        if(y.value==""){
        alert("Please enter your email addresss");
        }
        if(z.value==""){
        alert("Please enter your message")
        }
        else{
        mywindow=window.open('contact.html');
        }
      
        }
        </script>
    </section>
  
  </body>
  </htm>