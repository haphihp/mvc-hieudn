<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Bootstrap </title>
    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap-theme.min.css">
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
    <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
    <style type="text/css">
        .example{
            margin: 20px;
        }
    </style>
</head>
<body>
    <div class="example">
        <div class="container">
            <div class="row">
                <h2>Trang Tin Tức</h2>
            <div class="table-responsive">    
                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>CATERGORY</th>
                            <th>TITLE</th>
                            <th>CONTENT</th>
                            <th>SỬA</th>
							<th>XÓA</th>
                        </tr>
						<?php foreach ($data as $value): ?>
                    </thead>
							<tr>
								<td width="50"><?php echo $value['id'];?></td>
								<td width="150"><?php echo $value['category'];?></td>
								<td width="300"><?php echo $value['title'];?></td>
								<td width="500"><?php echo $value['content'];?></td>
								<td width="50"><a href="index.php?controller=tintuc&function=edittintuc&id=<?php echo $value['id']?>">SỬA</a></td>
								<td width="50"><a href="index.php?controller=tintuc&function=deletetintuc&id=<?php echo $value['id']?>">XÓA</a></td>
							<tr>
						<?php endforeach ?>
                </table>
             </div>   
            </div>
            <div>
            	<a href="index.php?controller=tintuc&function=addtintuc" class="btn btn-primary">THÊM TIN TỨC</a>
				<a href="index.php?controller=tintuc&function=addca" class="btn btn-success">THÊM CATEGORY</a>
				<a href="index.php?controller=tintuc&function=allca" class="btn btn-info">CATEGORY</a>
				<a href="index.php?controller=user&function=logout" class="btn btn-warning">ĐĂNG XUẤT</a>

            </div>
        </div>
 
    </div>
</body>
</html>


