<?php  include('config.php'); ?>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<?php  include('includes/public_functions.php'); ?>
<?php
	if (isset($_GET['post-slug'])) {
		$post = getPost($_GET['post-slug']);
	}
	$topics = getAllTopics();
?>
<?php include('includes/head_section.php'); ?>
<title> <?php echo $post['title'] ?> | LifeBlog</title>
</head>
<body>
<div class="container">
	<!-- Navbar -->
		<?php include( ROOT_PATH . '/includes/navbar.php'); ?>
	<!-- // Navbar -->

	<div class="content" >
		<!-- Page wrapper -->
		<div class="post-wrapper">
			<!-- full post div -->
			<div class="full-post-div">
			<?php if ($post['published'] == false): ?>
				<h2 class="post-title">Sorry... This post has not been published</h2>
			<?php else: ?>
				<h2 class="post-title"><?php echo $post['title']; ?></h2>
				<div class="post-body-div">
					<?php
								echo html_entity_decode($post['body']);
								$conn=mysql_connect('localhost', 'root', '');
  							mysql_select_db('complete-blog-php', $conn);
								$bd = $post['body'];
								$vw = ++$post['views'];
								$sql = "UPDATE posts SET views = $vw where body='$bd'";
								$res = mysql_query($sql);
					 ?>
					 <button class="btn btn-primary" onclick="alert('You Liked The Post')" style="float:right;margin-top:215px"><i onclick="<?php
 								echo html_entity_decode($post['body']);
 								$conn=mysql_connect('localhost', 'root', '');
   							mysql_select_db('complete-blog-php', $conn);
 								$bd = $post['body'];
 								$vw = ++$post['likes'];
 								$sql = "UPDATE posts SET likes = $vw where body='$bd'";
 								$res = mysql_query($sql);
 					 ?>" class="fa fa-thumbs-up" ></i> Like</button>
				</div>
			<?php endif ?>
			</div>
			<!-- // full post div -->

			<!-- comments section -->
			<!--  coming soon ...  -->
		</div>
		<!-- // Page wrapper -->

		<!-- post sidebar -->
		<div class="post-sidebar">
			<div class="card">
				<div class="card-header">
					<h2>Topics</h2>
				</div>
				<div class="card-content">
					<?php foreach ($topics as $topic): ?>
						<a
							href="<?php echo BASE_URL . 'filtered_posts.php?topic=' . $topic['id'] ?>">
							<?php echo $topic['name']; ?>
						</a>
					<?php endforeach ?>
				</div>
			</div>
		</div>
		<!-- // post sidebar -->
	</div>
</div>
<!-- // content -->

<?php include( ROOT_PATH . '/includes/footer.php'); ?>
