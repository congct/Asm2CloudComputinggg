<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
</head>
<body>
<?php
	$connect = mysqli_connect('3.128.54.48','thanhcong','123@123a','music');
    if(!$connect)
    {
      echo "Kết nối thất bại";
    }
	
	$search = "";
	
		$search = $_GET['Search'];
	
	?>
	<h3 class="title">Search Results for: <?= $search ?></h3>
	<div class="container" style="margin-top: 20px">
		<div class="row">
			<?php
			if( !empty($search))
			{
				$rs = mysqli_query($connect, "SELECT * FROM song WHERE song.song_name LIke '%{$search}%' ");
				while($row = mysqli_fetch_assoc($rs)) {
					?>
					<div class="card" style="background-color: white;margin-top: 20px; margin-left: 35px;overflow: auto; width: 270px; border: 2px solid #F8ABAB;border-radius: 1px; border-bottom: 6px solid #FCA5A5; float: left;">
						<a href="detail.php?id=<?php echo $row['song_id']?>" style=" text-decoration: none; text-align: center;"> 
							<div style="height:80px">
								<h2><?php echo $row['song_name'] ?></h2>
							</div>
							<div><img src="image/<?php echo $row['song_img'] ?>" style="width: 247px;height: 200px;padding: 7px"></div>
							<p style="color: red"><?php echo $row['song_price']; ?></p>
							<h4 style="color: black;"><?php echo $row['song_description']; ?></h4>
							</a>
						</div>
						<?php
					}
				}
				?>
			</div>
		</div>
</body>
</html>