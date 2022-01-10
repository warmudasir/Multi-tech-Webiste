<!DOCTYPE html>
<html>
    <!-- CSS only -->
    
    <head>
    <link href="login.css" rel="Stylesheet">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>
    <body>
      
<section class="h-100 gradient-form" style="background-color: #eee;">
    <div class="container py-5 h-100">
      <div class="row d-flex justify-content-center align-items-center h-100">
        <div class="col-xl-10">
          <div class="card rounded-3 text-black">
            <div class="row g-0">
              <div class="col-lg-6">
                <div class="card-body p-md-5 mx-md-4">
  
                  <div class="text-center">
                    <img src="./photo/multi.png" style="width: 185px;" alt="logo">
                    <h4 class="mt-1 mb-5 pb-1">We are here for your service</h4>
                  </div>
  
                  <form onsubmit="return f1()" action="Needchange.php" method="get">
                    <p>Please Login to your account</p>
                    <div class="form-outline mb-4">
                      <input type="email" id="form2Example11" class="form-control" placeholder="Phone number or email address" name="Email"/>
                      <label class="form-label" for="form2Example11">Username</label>
                    </div>
  
                    <div class="form-outline mb-4">
                      <input type="password" id="form2Example22" class="form-control" name="Password"/>
                      <label class="form-label" for="form2Example22">Password</label>
                    </div>
  
                    <div class="text-center pt-1 mb-5 pb-1">
                      <input type="submit"  class="btn btn-primary btn-block fa-lg gradient-custom-2 mb-3" name="get_submit"></input>
                      <a class="text-muted" href="#!">Forgot password?</a>
                    </div>
  
                    <div class="d-flex align-items-center justify-content-center pb-4">
                      <p class="mb-0 me-2">Don't have an account?</p>
                      <a href="signup.php"><button type="button" class="btn btn-outline-danger">Create new</button></a>
                    </div>
  
                  </form>
  
                </div>
              </div>
   


              <div class="col-lg-6 d-flex align-items-center gradient-custom-2">
                <div class="text-white px-3 py-4 p-md-5 mx-md-4">
                  <h4 class="mb-4">MULTI-TECH</h4>
                  <p class="small mb-0">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <script>
      function f1(){
      if(document.getElementById("form2Example11").value=="")
      {
          alert("Please enter the Username\n");
          return false;
      }
      if(document.getElementById("form2Example22").value=="")
      {
          alert("Please enter your password\n");
          return false;
      }
      else
      {

          return true;
      }
    }
  </script>

<!--Database stuff-->

</body>
  
  </html>