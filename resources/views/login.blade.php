<!DOCTYPE html>
<html >
<head>
  <meta charset="UTF-8">
  <title>Sign-Up/Login Form</title>
  <link href='https://fonts.googleapis.com/css?family=Titillium+Web:400,300,600' rel='stylesheet' type='text/css'>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css">

  
      <link rel="stylesheet" href="css/style.css">

  
</head>

<body>

  <div class="form">
      
      <ul class="tab-group">
        <li class="tab active"><a href="#login">Log In</a></li>
        <li class="tab "><a href="#signup">Sign Up</a></li>

      </ul>
      
      <div class="tab-content">
        
        <div id="login">   
          <h1>Login Here!</h1>
          
          <form action="/loginme" method="post">
          
          <input type="hidden" name="_token" value="{{ csrf_token() }}">
            <div class="field-wrap">
            <label>
              Username<span class="req">*</span>
            </label>
            <input type="username"required autocomplete="off" name="username" />
          </div>
          
          <div class="field-wrap">
            <label>
              Password<span class="req">*</span>
            </label>
            <input type="password"required autocomplete="off" name="password" />
          </div>
         
          <button type="submit" name="login" value="Login" class="button button-block"/>Log In</button>
          
          </form>

        </div>
        <div id="signup">   
          <h1>Sign Up Here!</h1>
          
          <form action="/signupme" method="post">
          
          <input type="hidden" name="_token" value="{{ csrf_token() }}">
          <div class="top-row">
            <div class="field-wrap">
              <label>
                First Name<span class="req">*</span>
              </label>
              <input type="text" required autocomplete="off" name="first_name"/>
            </div>
        
            <div class="field-wrap">
              <label>
                Last Name<span class="req">*</span>
              </label>
              <input type="text"required autocomplete="off" name="last_name"/>
            </div>
          </div>

          <div class="top-row">
            <div class="field-wrap">
              <label>
                Username<span class="req">*</span>
              </label>
              <input type="text"required autocomplete="off" name="username"/>
            </div>

            <div class="field-wrap">
            <label>
              Password<span class="req">*</span>
            </label>
            <input type="password"required autocomplete="off" name="password"/>
            </div>
          </div>

          <div class="top-row">
            <div class="field-wrap">
              <label>
                Email Address<span class="req">*</span>
              </label>
              <input type="text"required autocomplete="off" name="email"/>
            </div>

            <div class="field-wrap">
              <label>
                Phone<span class="req">*</span>
              </label>
              <input type="text"required autocomplete="off" name="phone"/>
            </div>
          </div>

            <div class="field-wrap">
              <label>
                Address<span class="req">*</span>
              </label>
              <input type="text"required autocomplete="off" name="address"/>
            </div>

          <div class="top-row">
            <div class="field-wrap">
              <label>
                City<span class="req">*</span>
              </label>
              <input type="text"required autocomplete="off" name="City"/>
            </div>

            <div class="field-wrap">
              <label>
                Zip<span class="req">*</span>
              </label>
              <input type="text"required autocomplete="off" name="zip"/>
            </div>
          </div>

          <button type="submit" name="signup" value="Signup" class="button button-block"/>Get Started</button>
          
          </form>

        </div>
        
      </div><!-- tab-content -->
      
</div> <!-- /form -->


  <script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>

    <script  src="js/index.js"></script>

</body>
</html>
