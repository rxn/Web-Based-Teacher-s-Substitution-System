<? php doctype("html5"); ?>
<!--[if lt IE 7]> <html class="no-js ie6 oldie" lang="en"> <![endif]-->
<!--[if IE 7]>    <html class="no-js ie7 oldie" lang="en"> <![endif]-->
<!--[if IE 8]>    <html class="no-js ie8 oldie" lang="en"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" lang="en"> <!--<![endif]-->
<head>

	<title>Teacher's Substitution Admin - Login</title>

	<meta charset="utf-8" />
	<meta name="description" content="" />
	<meta name="author" content="" />		
	<meta name="viewport" content="width=device-width,initial-scale=1" />
	<!-- CSS -->
	<link rel="stylesheet" href="<?php echo base_url();?>stylesheets/all.css" type="text/css" />
	<link rel="stylesheet" href="<?php echo base_url()?>stylesheets/reset.css" type="text/css" media="screen" title="no title" />
	<link rel="stylesheet" href="<?php echo base_url()?>stylesheets/text.css" type="text/css" media="screen" title="no title" />
	<link rel="stylesheet" href="<?php echo base_url()?>stylesheets/buttons.css" type="text/css" media="screen" title="no title" />
	<link rel="stylesheet" href="<?php echo base_url()?>stylesheets/theme-default.css" type="text/css" media="screen" title="no title" />
	<link rel="stylesheet" href="<?php echo base_url()?>stylesheets/login.css" type="text/css" media="screen" title="no title" />
	<!-- END CSS -->
</head>

<body>

<div class="holderfiller">
<div class="holder">
<div id="login">
	
	<div class=""  style="float:left">
		<h1>Dashboard</h1>
	</div>
	<div class=""  style="float:left">
		<div id="login_panel">
			<?php if (validation_errors()):?>
				<div class="notify notify-error">
					<a class="close" href="javascript:;">×</a>
					<p><?php echo validation_errors();?></p>			
				</div>
			<?php endif;?>

		<?php echo form_open('account/login');?>
			
			<div class="login_fields">
				<div class="field">
					<label for="username">Username</label>
					<input type="text"  name="username" value="" id="username" tabindex="1" placeholder="username" />		
				
				</div>
				 
				<div class="field">
					<label for="password">Password <small></small></label>
					<input type="password" name="password" value="" id="password" tabindex="2" placeholder="password" />			
				</div>
			</div> <!-- .login_fields -->
			
			<div class="login_actions">
				<button type="submit" class="btn btn-primary" tabindex="3">Login</button>
			</div>
		<?php echo form_close(); ?>
		</div> <!-- #login_panel -->		

	</div>
	
	
</div> <!-- #login -->
</div>
<br style="clear:both"/>	
</div>
<script src="<?php echo base_url()?>/javascripts/all.js"></script>
</body>
</html>