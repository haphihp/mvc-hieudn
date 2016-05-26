<?php 
if(isset($message))
{
 echo $message; 
}
?>
<?php if(isset($showerror))
{
foreach($showerror as $value) {
	echo $value;
}
}
 ?>

	<div class="container">
  <div class="row">
    <div class="col-md-3">
		<form method="POST" action="">
        <div class="form-group">
          <label for="username">UserName</label>
          <input type="text" class="form-control" name="username"  id="username">
        </div>
        <div class="form-group">
          <label for="pwd">Password:</label>
          <input type="password" class="form-control" name="password" id="pwd">
        </div>
        <div class="form-group">
          <label for="email">Email:</label>
          <input type="email" class="form-control" name="email" id="pwd">
        </div>

        <button type="submit" name="dangki" class="btn btn-default">Đăng Kí</button>
      </form>
<a href="index.php?controller=user" class="btn btn-default">ĐĂNG NHẬP</a>
</div>