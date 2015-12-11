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
        <li class="navli"><a class="lien" href="index.php">Sign in</a></li>
        <li class="navli"><a class="lien" id="lien_sign_up" href="signup.php">Sign up</a></li>
      </ul>
    </nav>
    <section>

      <form action="traitement.php" method="post">
        <h3>Sign up</h3>
        <p>
          <label>
            <input type="radio" id="radio" name="sx" value="man" onclick="changeColour('m')" /><img src="img/symbole_homme.png" alt="symbole homme" /><span id="sxm">Man</span>
          </label>
          <label>
            <input type="radio" id="radio" name="sx" value="woman" onclick="changeColour('f')" /><img src="img/symbole_femme.png" alt="symbole femme" /><span id="sxf">Woman</span>
          </label>
          <p></p>
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
    <script src="js/script.js" type="text/javascript"></script>
  </body>
</html>
