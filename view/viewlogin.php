<?php if (isset($message)) echo "<p>$message</p>"; ?>
	<?php if (isset($show_error)) 
	{
		foreach ($show_error as $string)
		{
			echo "<p>$string</p>";
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
        <button type="submit" name="dangnhap" class="btn btn-default">Đăng Nhập</button>
      </form>
<a href="index.php?controller=user&function=signup" class="btn btn-default">ĐĂNG KÍ</a></p>
</div>
