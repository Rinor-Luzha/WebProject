 <title>Login</title>
 <link rel="stylesheet" href="css/loginStyle.css">
 </head>

 <body>
     <header class="logo">
         <a href="index.php?page=home"><img src="images/logo.png" alt="logo"></a>
     </header>
     <main class="form">
         <div id="error">
         </div>
         <form action="/" method="POST" id="submit">
             <div class="container">
                 <div class="user-icon">
                     <i class="fas fa-user"></i>
                 </div>
                 <div class="login-details">
                     <h2>Log in</h2>
                     <div class="input-div">
                         <label for="email">
                             <p class="input-text">Email</p>
                         </label>
                         <input required maxlength="40" name="email" placeholder="Enter Email" type="email" class="input" id="email">
                         <i class="far fa-exclamation"></i>
                         <small id="emailError"></small>
                     </div>
                     <div class="input-div">
                         <label for="password">
                             <p class="input-text">Password</p>
                         </label>
                         <input required maxlength="25" name="password" placeholder="Enter Password" type="password" class="input" id="password">
                         <i class="far fa-exclamation"></i>
                         <small id="passwordError"></small>
                     </div>
                     <div class="login-button">
                         <button type="submit" id="login">Log in</button>
                     </div>
                     <div class="options">
                         <a class="options-text" href="#">Forgot password?</a>
                         <a class="options-text" href="index.php?page=register">Dont'have an account?</a>
                     </div>
                 </div>
             </div>
         </form>
     </main>
     <script src="js/loginValidation.js"></script>
 </body>

 </html>