<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="css/stylesheet.css" >
    <title>Sign up</title>
  </head>
  <body>
    <nav>
      <ul>
        <li class="navli"><a class="lien" href="index.html">Sign in</a></li>
        <li class="navli"><a class="lien" id="lien_sign_up" href="signup.html">Sign up</a></li>
      </ul>
    </nav>
    <section>

      <form action="traitement.php" method="post">
        <h3>Sign up</h3>
        <p>
          <input type="text" name="username" placeholder=" Pick a username" id="username" autofocus required/>
          <p></p>
          <input type="email" name="email" placeholder=" Your email" id="email" required/>
          <p></p>
          <input type="password" name="password" placeholder=" Create a password" id="password" required/>
          <p></p>
          <input class="submit_button" type="submit" value="Sign up">
        </p>
      </form>
      
    </section>
  </body>
</html>
