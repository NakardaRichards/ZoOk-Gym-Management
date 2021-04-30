<html>
    <head>
    <meta name = "viewport" content = "width=device-width, initial-scale = 1">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css" >
    <script src="https:code.jquery.com/jquery-3.2.1.min.js"></script>
</head> 
<body>
<form id="formID" action= "" method="POST">
 
        <div class="container">
        <div class="row">
        <div class="col-6">
       
         <div class="form-group">
            <label for="first_name"> FirstName</label>
            <input class="form-control"type="text" id="fname" name="first_name"value="" placeholder="First Name" >
            
</div>
    <div class="form-group">
            <label for="last_name"> LastName</label>
            <input class="form-control"type="text" id="lname"name="last_name"value="" placeholder="Last Name" >  
            
</div>
    <div class="form-group">
            <label for="email"> Email Address</label>
            <input class="form-control"type="text" id="emails"name="email" value="" placeholder="Email" >
            
</div>
<div class="form-group">
            <label for="address"> Address</label>
            <input class="form-control"type="text" id="addressin"name="addressinfo"value="" placeholder="Address">
            
</div>
<div class="form-group">
            <label for="date"> Date of Birth </label>
            <input class="form-control"type="date" id="dob" name="dateofbir" value="" placeholder="Date" >
            
</div>
<div class="form-group">
        <label for="password">Password</label>
        <input class="form-control"type="password" id="pass" name="passwordoff" value="" placeholder="Password" >
</div>
<div class="form-group">
    <label for="passwordconfirm">Confirm Password</label>
    <input class="form-control" type="password" id="conf" name="confirmedpass" value="" placeholder="Confirm your password" >
<div class="form-group">
 
            <button onclick="myfunction()" class="btn btn-primary"  name="submitted" style="width:100%">Sign In</button>
         
</div>
</div>
</div>
</div>
</form>
</div>
<script>
    function myfunction(){
        var a=document.getElementById("fname");
        var b=document.getElementById("lname");
        var c=document.getElementById("ages");
        var d=document.getElementById("addressin");
        var x=document.getElementById("dob");
        var y=document.getElementById("pass");
        var z=document.getElementById("conf");
        if (a.value==""){
            alert("Please enter your first name");
        }
        if (b.value==""){
            alert("Please enter your last name");
        }
        if (c.value==""){
            alert("Please enter your age");
        }
        if(d.value==""){
            alert("Please enter your address")
        }
        if (x.value==""){
            alert("Please enter your date of birth");
        }
        if (y.value==""){
            alert("Please enter a password");
        }
        if (z.value==""){
            alert("Please confirm your password");
        }
    }
</script>
</body>  
</html>
</body>
</html>