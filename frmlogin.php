<?php
	require_once 'support/config.php';
	makeHead('Login');
?>
 <div class="container">
        <div class="row">
            <div class="col-md-4 col-md-offset-4">
            	
                <div class="login-panel panel panel-default">
                    <div class="panel-heading">
                        <h3 class="panel-title">Please Log In</h3>
                    </div>
                    <div class="panel-body">
                        <form role="form" method="post" action='logingin.php'>
                            <fieldset>
                                <div class="form-group">
                                    <input class="form-control" placeholder="E-mail" name="username" type="text" autofocus>
                                </div>
                                <div class="form-group">
                                    <input class="form-control" placeholder="Password" name="password" type="password" value="">
                                </div>
                                <!-- Change this to a button or input when using this as a form -->
                                <button type='submit' class="btn btn-lg btn-success btn-block">Login</a>
                            </fieldset>
                        </form>
                    </div>
                </div>
                <?php
					Alert();
				?>
            </div>
        </div>
</div><!-- /container -->

<?php
	makeFoot();
?>