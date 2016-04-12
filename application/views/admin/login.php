<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Login Page">
    <meta name="author" content="rfnajid">

	<title>Babysitterku Login Page</title>

	<!-- Login CSS -->
    <?=css('admin-login.css')?>

    <!-- Custom Fonts -->
    <?=css('font-awesome.min.css')?>

	 <!-- Bootstrap Core CSS -->
    <?=css('bootstrap.min.css')?>

    <!-- TOASTR -->
    <?=css('toastr.min.css')?>

</head>
<body>

<div class="container">
	<div class="login-container">
            <div id="output"></div>
            <div class="avatar"></div>
            <div class="form-box">
                <form method="post" action="<?=site_url('/admin/login/cek')?>">
                    <input name="username" type="text" placeholder="username" required autofocus>
                    <input name="password" type="password" placeholder="password" required>
                    <button class="btn btn-info btn-block login" type="submit">login</button>
                </form>
            </div>
        </div>
</div>

</body>
<!--
<?
if(isset($msg)){
	echo '<script> toastr.'.$msg['status'].'("'.$msg['message'].'","'.$msg['status'].'"); </script>';
}
?>
-->
<!-- JQUERY -->
<?=js('jquery.js')?>

<!-- TOASTR -->
<?=js('toastr.min.js')?>

</script>
<script>
/*var msg = <?=json_encode($msg)?>;
if(msg.status==='success')
  toastr.success(msg.message,'Success');
else if(msg.status=='error')
  toastr.error(msg.message,'Error');
  */
</script>
</html>
