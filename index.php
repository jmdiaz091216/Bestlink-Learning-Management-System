<?php include('header.php'); ?>
<style>
	body#login::before {
    content: "";
    background: #00000036;
    position: absolute;
    top: 0;
    /* z-index: 1; */
    left: 0;
    width: 100%;
    height: 100%;
}
	
</style>
<body id="login">
    <div class="container" style="position: relative">
			<div class="span6"><div class="title_index"><?php include('title_index.php'); ?></div></div>
			<div class="span7"><div class="pull-right"><?php include('login_form.php'); ?></div></div>
<?php include('script.php'); ?>
</body>
</html>