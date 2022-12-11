<!doctype html>

<html lang="en">

<head>

    <meta charset="utf-8">

    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Codeigniter 4 Authentication Login And Registration Tutorial Example - Nicesnippets.com</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">

</head>

<body>

    <div class="container mt-5">

        <div class="row justify-content-md-center">

            <div class="col-5">

                <h2>Register User</h2>

                <?php if(isset($validation)):?>

                    <div class="alert alert-warning">

                       <?= $validation->listErrors() ?>

                    </div>

                <?php endif;?>

                <form action="http://localhost/codeigniter/CI/public/index.php/signup" method="post">
                <?=csrf_field() ?>

                    <div class="form-group mb-3">

                        <input type="text" name="name" placeholder="Name" value="<?= set_value('name') ?>" class="form-control" >

                    </div>

                    <div class="form-group mb-3">

                        <input type="email" name="email" placeholder="Email" value="<?= set_value('email') ?>" class="form-control" >

                    </div>

                    <div class="form-group mb-3">

                        <input type="password" name="password" placeholder="Password" class="form-control" >

                    </div>

                    <div class="form-group mb-3">

                        <input type="password" name="confirmpassword" placeholder="Confirm Password" class="form-control" >

                    </div>

                    <div class="d-grid">

                        <button type="submit" class="btn btn-dark">Signup</button>

                    </div>

                </form>

            </div>

        </div>

    </div>

</body>

</html>  

<!--  <!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet">
  <link href="style.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js">  
    
  </script>
</head>
<body>
       <div class="container3">
    <div class ="row">
	<div class="col-md-6 mx-auto p-0">
		<div class="card">


<div class="login-box">
   
	<div class="login-snip">
		<input id="tab-1" type="radio" name="tab" class="sign-in" checked><label for="tab-1" class="tab">Login</label>
		
		
		
		
		 <?php if(session()->getFlashdata('msg')):?>

                    <div class="alert alert-warning">

                       <?= session()->getFlashdata('msg') ?>

                    </div>

                <?php endif;?>

                <form action="/index.php/login_form" method="post">
                  <?=csrf_field() ?>
                  
                  
                  
              
			</div>
			 <div class="sign-up-form">
				<div class="group">
					<label for="user" class="label">Username</label>
					<input id="user" type="text" class="input" placeholder="Create your Username">
				</div>
				<div class="group">
					<label for="pass" class="label">Password</label>
					<input id="pass" type="password" class="input" data-type="password" placeholder="Create your password">
				</div>
				<div class="group">
					<label for="pass" class="label">Repeat Password</label>
					<input id="pass" type="password" class="input" data-type="password" placeholder="Repeat your password" >
				</div>
				<div class="group">
					<label for="pass" class="label">Email Address</label>
					<input id="pass" type="text" class="input" placeholder="Enter your email address">
				</div>
				<div class="group">
                    <input type="submit" class="button" value="Sign Up">
				
                </div>
				<div class="hr"></div>
				<div class="foot">
					<label for="tab-1">Already Member?</label>
				</div>
			</div>
		</div>
	</div>
</div>   
</div>
</div>
</div>

</div> 


</body>
</html>   -->


