<?php
    session_start();
?>

<!DOCTYPE HTML>
<!--
	Twenty by HTML5 UP
	html5up.net | @ajlkn
	Free for personal and commercial use under the CCA 3.0 license (html5up.net/license)
-->
<html>
	<head>
		<title>Twenty by HTML5 UP</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
		<link rel="stylesheet" href="assets/css/main.css" />
		<noscript><link rel="stylesheet" href="assets/css/noscript.css" /></noscript>

		<!-- Social Media Buttons -->

		<script type="text/javascript" src="https://platform-api.sharethis.com/js/sharethis.js#property=6644d8a76c912d0019965c3e&product=inline-share-buttons&source=platform" async="async"></script>
	
		<style>
        	canvas {
        	    border: 1px solid black;
        	}
        	svg {
        	    border: 1px solid black;
        	    width: 200px;
        	    height: 200px;
        	}
    	</style>
	
	</head>
	<body class="index is-preload">
		<div id="page-wrapper">

			<!-- Header -->
				<header id="header" class="alt">
					<h1 id="logo"><a href="index.php">Twenty <span>by HTML5 UP</span></a></h1>
					<nav id="nav">
						<ul>
							<li class="current"><a href="index.php">Welcome</a></li>
							<li class="submenu">
								<a href="#">Layouts</a>
								<ul>
									<li><a href="left-sidebar.php">Left Sidebar</a></li>
									<li><a href="right-sidebar.php">Right Sidebar</a></li>
									<li><a href="no-sidebar.php">No Sidebar</a></li>
									<li><a href="contact.php">Contact</a></li>
									<li class="submenu">
										<a href="#">Submenu</a>
										<ul>
											<li><a href="#">Dolore Sed</a></li>
											<li><a href="#">Consequat</a></li>
											<li><a href="#">Lorem Magna</a></li>
											<li><a href="#">Sed Magna</a></li>
											<li><a href="#">Ipsum Nisl</a></li>
										</ul>
									</li>
								</ul>
							</li>
							<li><a href="signin.php" class="button primary">Sign Up</a></li>
							<li><a href="login.php" class="button primary">Log In</a></li>
						</ul>
					</nav>
				</header>

			<!-- Banner -->
				<section id="banner">

					<!--
						".inner" is set up as an inline-block so it automatically expands
						in both directions to fit whatever's inside it. This means it won't
						automatically wrap lines, so be sure to use line breaks where
						appropriate (<br />).
					-->
					<div class="inner">

						<header>
							<h2>TWENTY</h2>
						</header>
                        <p>
                            <?php echo "Bun venit ".$_SESSION["AdminUsername"];?>
                        </p>
					
						<footer>
							<ul class="buttons stacked">
								<li><a href="index.php" class="button fit scrolly">Back To Index</a></li>
							</ul>
						</footer>

					</div>

				</section>
            <!-- Main -->
			    <article id="main">

                    <header class="special container">

                        <form method="post" action="save.php" enctype="multipart/form-data">
            			   <input type="hidden" name="size" value="1000000">
						
            			    <div>
            			        <input type="file" name="image">
            			    </div>
            			    <div>
							    <input type="text" name="PhotoName" id="PhotoName" placeholder="Name the Photo" />
            			    </div>
						    <br>
            			    <div>
            			        <input type="submit" name="upload" value="Upload Image">
            			   </div>
                        </form>

                        <?php
						    include 'connection.php';
						    $sql='SELECT * FROM images; ';
						    $query= mysqli_query($con,$sql)or die(mysqli_error($con));
						?>
						<table width="50%" cellpadding="4" cellspace="4" rules="rows">
						    <tr>
						        <th>Nume</th>
						        <th>Imagine</th>
						        <th colspan="3" align="center">Actions</th>
						    </tr>
						    <?php while($row=mysqli_fetch_array($query)){
						        ?>
						        <tr style="border-bottom: 1px solid black;">
						    <td><?php echo $row['title'];?></td>
						    <td><img src="<?php echo $row['image'];?>"></td>
						    <td>
						        <?php echo "<a href=\"view.php?id=".$row['id']."\">View</a> <a href=\"edit.php?id=".$row['id']."\">Edit</a> <a href=\"delete.php?id=".$row['id']."\" onclick=\"return confirm('Are you sure?')\">Delete</a>"?>
						    </td>
						</tr>
						   <?php } ?>
							
						</table>
                    </header>
                        
                    <!-- Two -->
                        <section class="wrapper style1 container special">
                            <div class="row">
                                <div class="col-4 col-12-narrower">
                        
                                    <section>
                                        <span class="icon solid featured fa-check"></span>
                                        <header>
                                            <h3>This is Something</h3>
                                        </header>
                                        <p>Sed tristique purus vitae volutpat ultrices. Aliquam eu elit eget arcu commodo suscipit dolor nec nibh. Proin a ullamcorper elit, et sagittis turpis. Integer ut fermentum.</p>
                                    </section>
                        
                                </div>
                                <div class="col-4 col-12-narrower">
                        
                                    <section>
                                        <span class="icon solid featured fa-check"></span>
                                        <header>
                                            <h3>Also Something</h3>
                                        </header>
                                        <p>Sed tristique purus vitae volutpat ultrices. Aliquam eu elit eget arcu commodo suscipit dolor nec nibh. Proin a ullamcorper elit, et sagittis turpis. Integer ut fermentum.</p>
                                    </section>
                        
                                </div>
                                <div class="col-4 col-12-narrower">
                        
                                    <section>
                                        <span class="icon solid featured fa-check"></span>
                                        <header>
                                            <h3>Probably Something</h3>
                                        </header>
                                        <p>Sed tristique purus vitae volutpat ultrices. Aliquam eu elit eget arcu commodo suscipit dolor nec nibh. Proin a ullamcorper elit, et sagittis turpis. Integer ut fermentum.</p>
                                    </section>
                        
                                </div>
                            </div>
                        </section>
                        
                     </article>



				<footer id="footer">

					<div class="sharethis-inline-share-buttons"></div>

					<ul class="copyright">
						<li>&copy; Untitled</li><li>Design: <a href="http://html5up.net">HTML5 UP</a></li>
					</ul>

				</footer>

		</div>

		<!-- Scripts -->
			<script src="assets/js/jquery.min.js"></script>
			<script src="assets/js/jquery.dropotron.min.js"></script>
			<script src="assets/js/jquery.scrolly.min.js"></script>
			<script src="assets/js/jquery.scrollex.min.js"></script>
			<script src="assets/js/browser.min.js"></script>
			<script src="assets/js/breakpoints.min.js"></script>
			<script src="assets/js/util.js"></script>
			<script src="assets/js/main.js"></script>

	</body>
</html>