<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
  <link rel="icon" href="images/logo.png">
  <title>Login Page</title>
    <link rel="icon web" href="Logo.png" class="responsive">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="assets/css/style_login.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css"/>
  </head>

  <body>      
    <div class="container">
      <div class="wrapper">
        <div class="title"><span>Silahkan Login</span></div>
        <form action="" method="post"> 
         @csrf
          <div class="row">
            <td>Email</td>
            <i class="fas fa-user"></i>
            <input name="email" type="email" placeholder="email" id="email" required>
          </div>
          <div class="space"></div>

          <div class="row">
            <td>password</td>
            <i class="fas fa-lock"></i>
            <input name="password" type="password" placeholder="Password" id="password" required>
          </div>
          <div class="space"></div>
          <div class="row button">
            <input type="submit" value="Login">
          </div>
         </form>
      </div>
    </div>

  </body>
</html>