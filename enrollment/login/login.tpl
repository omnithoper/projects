<html>
   <head>
  <link type="text/css" rel="stylesheet" href="/css/bootstrap.min.css" />
  <link type="text/css" rel="stylesheet" href="/css/mystyles.css" />
   </head>
   <body>
      <nav id="searchStudent"> 
         <div id = "container">
               <h2>Enter Username and Password</h2>
         <form method = "post">
            <h4 class = "form-signin-heading">{$msg}</h4>
            <input type = "text" class = "form-control" name = "username" placeholder = "username" required autofocus></br>
            <input type = "password" class = "form-control" name = "password" placeholder = "password" required autofocus>
            <button class = "btn btn-lg btn-primary btn-block" type = "submit" 
               name = "login">Login</button>
         </form>
               
      </div> 
   </nav>   
   </body>
</html>