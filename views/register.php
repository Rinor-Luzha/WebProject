 <title>Register</title>
 <link rel="stylesheet" href="css/loginStyle.css">
 <link rel="stylesheet" href="css/registerStyle.css">
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
                     <h2>Register</h2>
                     <div class="input-div">
                         <div class="input-wrapper">
                             <div class="initials">
                                 <label for="name">
                                     <span class="input-text">Name</span>
                                 </label>
                                 <input required maxlength="20" name="name" placeholder="Enter Name" type="text" class="input" id="name">
                             </div>
                             <div class="initials">
                                 <label for="surname">
                                     <span class="input-text">Surname</span>
                                 </label>
                                 <input required maxlength="20" name="surname" placeholder="Enter Surname" type="text" class="input" id="surname">
                             </div>
                         </div>
                     </div>
                     <div class="input-div">
                         <label>
                             <p class="input-text">Gender</p>
                         </label>
                         <div class="gender-wrapper">
                             <div class="gender">
                                 <label for="male">Male</label>
                                 <input name="gender" type="radio" class="input" value="male" id="male" checked>
                             </div>
                             <div class="gender">
                                 <label for="female">Female</label>
                                 <input name="gender" type="radio" class="input" vlaue="female" id="female">
                             </div>
                         </div>
                     </div>
                     <div class="input-div">
                         <label for="birthdate">
                             <p class="input-text">Birthday</p>
                         </label>
                         <input required max="2004-01-01" min="1900-01-01" name=" birthdate" placeholder="Enter Surname" type="date" class="input" id="birthdate">
                     </div>
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
                         <button type="submit">Sign in</button>
                     </div>
                     <div class="options">
                         <a class="options-text" href="#">Forgot password?</a>
                         <a class="options-text" href="index.php?page=login">Already have an account?</a>
                     </div>
                 </div>
             </div>
         </form>
     </main>
     <script src="js/registrationValidation.js"></script>
 </body>

 </html>