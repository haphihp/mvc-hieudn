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
<script type="text/javascript">
            function getConfirmation(b){
               var a = confirm("Are you sure you want to delete this item?");
               if( a == true ){  
                  window.location = 'index.php?controller=tintuc&function=deletetintuc&id='+b;
               }
               else{
                 return false;
                  }
        }
      </script>
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
									<th><button onClick="getConfirmation(<?php echo $value['id'];?>)" type="submit">XÓA</button></th>
								<tr>
							<?php endforeach ?>
					</table>
				</div>
				<div class="paging">
					<ul>					
						<?php if (isset($page) && $page != 1): ?>						
						<li><a href="index.php?controller=tintuc&function=allnews&page=1">FIRST</a></li>
						<?php if ($page > 1): ?>
						<li><a href="index.php?controller=tintuc&function=allnews&page=<?php echo $page-1 ?>"><<</a></li>
						<?php endif; ?>
						<?php endif; ?>
						
						<?php 
						$pageStart = $page-2;
						if ($pageStart < 1 )
						{
							$pageStart = 1;
						}
						
						$pageEnd = $page+2;
						if ($pageEnd > $pageNumbers )
						{
							$pageEnd = $pageNumbers;
						}
						if ($pageStart > 1 )
						{
							echo "<li>.....</li>";
						}
						
						
						for ($i = $pageStart; $i <= $pageEnd; $i++)
						{
							if ($i == $page)
							{
								echo "<li class=\"page-active\">$i</li>";
							}
							else
							{
								echo "<li><a href=\"index.php?controller=tintuc&function=allnews&page=$i\">$i</a></li>";
							}
						}
						
						if ($pageEnd < $pageNumbers )
						{
							echo "<li>.....</li>";
						}
						?>
						
						<?php if ($page != $pageNumbers): ?>
						<?php if ($page < $pageNumbers): ?>
						<li><a href="index.php?controller=tintuc&function=allnews&page=<?php echo $page+1 ?>">>></a></li>
						<?php endif; ?>
						<li><a href="index.php?controller=tintuc&function=allnews&page=<?php echo $pageNumbers?>">LAST</a></li>					
						<?php endif; ?>
					</ul>
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


