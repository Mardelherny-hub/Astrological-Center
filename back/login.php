<!DOCTYPE html>
<html lang="en">

  <head>
    <meta charset="utf-8" />
    <title>Login</title>
    <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet">
  </head>

  <body>
  <div class="navbar navbar-fixed-top navbar-inverse" role="navigation">
  <div class="container">
  <div class="navbar-header">
          <a class="navbar-brand" href="#">Backend</a>
  </div>
  </div>
  </div>
  <div class="container" id="mainContainer">
  
    <br/>
    <hr />
  <div id="formlogin" style="width:220px;">
    <form name="form1" method="post" action="checklogin.php">

    <label>Usuario:</label>
    <input name="username" type="text" id="username">
    <br><br>

    <label>Password:</label>
    <input name="password" type="password" id="password">
    <br><br>
    <input type="submit" name="Submit" value="Ingresar">

    </form>

    <hr />
  </div>

    <footer>
    <p>&copy; Aztlan 2014</p>
    </footer>
     </div>
  </body>
</html>
