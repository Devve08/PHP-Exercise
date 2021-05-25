<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="stylehome.css">
    <title>Document</title>
</head>
<body>

      <header>
       <h1>WELCOME !!</h1>
      </header>
    <section class="container">
     
    
       <div class="container-one">
           <h1> Register Here !</h1>
        <form action="safe.php" method="POST">
           <div class="label-and-input">
               <label for="name">Full Name</label>
               <input id="name" type="text" name="fullname" >
           </div>

           <div class="label-and-input">
               <label for="username">Username</label>
               <input id="username" type="text" name="usname" >
           </div>

           <div class="label-and-input">
               <label for="password">Password</label>
               <input id="password" type="password" name="pwd">
           </div>

           <div class="label-and-input">
               <label for="confirm">Confirm</label>
               <input id="confirm" type="password" name="confirmpwd">
           </div>

           <div class="label-and-input">
               <label for="email">Email</label>
               <input id="email" type="email" name="emailone">
           </div>

           <div class="label-and-input">
               <label for="phone">Phone</label>
               <input id="phone" type="number" name="phone">
           </div>

           <div class="label-and-input">
               <label for="date">Birth Date</label>
               <input id="date" type="date" name="date">
           </div>

           <div class="label-and-input">
               <label for="number">S Security Number</label>
               <input id="number" type="number" name="security">
           </div>
        
           <button type="submit" name="submit-signup">
               Sign Up
           </button>
        
        </form>
       </div>


       <div class="container-two">

          <h1> Login </h1>

          
          <form method="post" action="safe.php">
             <div class="form">
                 
              
                <input class="form-input" name="username" id="username" type="text" placeholder=" ">
              
              
              
                  <label class="form-label" for="username">
                  <span class="content-name">Username</span>
              </label>
              </div>

            <div class="form">

                
            
                <input class="form-input" name="password" id="password" type="password" placeholder=" ">
              
              
            
            <label class="form-label" for="password">
                  <span class="content-name">Password</span>
              </label>
              </div>                    

              <div>
                  <button name="submit" type="submit">
                      Sign In
                  </button>
              </div>
            </form>

            
       
       </div>
    
       
       
       </div>
    
    
    
    </section>
</body>
</html>