  <html>

    <head>
      <script src='https://www.google.com/recaptcha/api.js'></script>
    </head>
    <body> <!-- the body tag is required or the CAPTCHA may not show on some browsers -->
      <!-- your HTML content -->

      <form method="post" action="verify.php">
        <?php
          require_once('recaptchalib.php');
          $publickey = "6Lf0WEwUAAAAAIIpwruu6T6C0p4WqhVXnj53LSw7"; // you got this from the signup page
          echo recaptcha_get_html($publickey);
        ?>

        <div class="g-recaptcha" data-sitekey="6Lf0WEwUAAAAAIIpwruu6T6C0p4WqhVXnj53LSw7"></div>
        <input type="submit" />
      </form>

      <!-- more of your HTML content -->
    </body>
  </html>