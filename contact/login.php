<html>
    <head>
    <meta name = "viewport" content = "width=device-width, initial-scale = 1">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <script src="https:code.jquery.com/jquery-3.2.1.min.js"></script>
</head> 
<body>
<form id="formID" action= "" method="POST">
 
 <div class="container">
 <div class="row">
 <div class="col-6">

  <div class="form-group">
     <label for="first_name"> Username</label>
     <input class="form-control"type="text" id="uname" name="user_name"value="" placeholder="Username">
     
</div>
<div class="form-group">
<label for="password">Password</label>
        <input class="form-control"type="password" id="pass" name="password" value="" placeholder="Password">
</div>
<div class="input-group mb-3">
  <div class="input-group-prepend">
    <label class="input-group-text" for="inputGroupSelect01">User:</label>
  </div>
  <select class="custom-select" id="inputGroupSelect01">
    
    <option value="1">Member</option>
    <option value="2">Admin</option>
    
  </select>
</div>
<div class="form-group">
 
            <button  class="btn btn-primary"  name="submitted" style="width:100%">Sign In</button>
         
</div>
</div>
</div>
</body>