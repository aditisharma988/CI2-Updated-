<!doctype html>

<html lang="en">

<head>

    <meta charset="utf-8">

    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Codeigniter 4 Authentication Login And Registration Tutorial Example - Nicesnippets.com</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">

</head>

<body>

    <div class="container">

        <div class="row justify-content-md-center">

            <div class="col-5">
            <div class="login-box">
   
	<div class="login-snip">

                <h2>Login in</h2>        

                <?php if(session()->getFlashdata('msg')):?>

                    <div class="alert alert-warning">

                       <?= session()->getFlashdata('msg') ?>

                    </div>

                <?php endif;?>
                <form action="<?php echo base_url(); ?>/index.php/signin" method="post">
                  <?=csrf_field() ?>
                
                
                
                
                
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


                    
                    
                    
                    
                    
                    
                    <!-- <div class="form-group mb-3">

                        <input type="email" name="email" placeholder="Email" value="<?= set_value('email') ?>" class="form-control" >

                    </div>

                    <div class="form-group mb-3">

                        <input type="password" name="password" placeholder="Password" class="form-control" >

                    </div>

                    <div class="d-grid">

                         <button type="submit" class="btn btn-success">Signin</button>

                    </div>   -->  

                </form>

            </div>

        </div>

    </div>

</body>

</html>
