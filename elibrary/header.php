<?php include("../header.php"); ?>

<style>
	#entry p, blockquote { font-size: 15px; text-align: justify; line-height: 1.5em; }
	.entry, .entry.entry-date-section { margin-bottom: 0; padding: 10px; }
</style>

		<!-- Page Sub Menu
		============================================= -->
		<div id="page-menu">

			<div id="page-menu-wrap">

				<div class="container clearfix">
					
					<div class="menu-title" style="font-size: 16px; font-weight: bold">
						<?php
							if ($lang=="en") { echo "<a href='/elibrary/en.php' style='color: white'>E-Library | MuktoMona</a>"; }
							else if ($lang=="bn") { echo "<a href='/elibrary' style='color: white'>ই-লাইব্রেরি | মুক্তমনা</a>"; }
						?>
					</div>

					<nav class="one-page-menu" style="font-weight: bold">
						<ul>
							<?php 
								if ($lang=="en") { echo '
									<li><a href="/elibrary/all.php"><div>All Writers</div></a></li>
									<li><a href="/elibrary/ancient.php"><div>Ancient</div></a></li>
									<li><a href="/elibrary/medieval.php"><div>Medieval</div></a></li>
									<li><a href="/elibrary/renaissance.php"><div>Renaissance</div></a></li>
									<li><a href="/elibrary/early-modern.php"><div>Early Modern</div></a></li>
									<li><a href="/elibrary/modern.php"><div>Modern</div></a></li>'; }
								else if ($lang=="bn") { echo '
									<li><a href="/avijit/birthday-2015.php"><div>জন্মদিনের লেখা</div></a></li>
									<li><a href="/avijit/biography.php"><div>জীবনী</div></a></li>
									<li><a href="/avijit/books.php"><div>বই</div></a></li>
									<li><a href="/avijit/articles.php"><div>প্রবন্ধ</div></a></li>
									<li><a href="/avijit/facebook.php"><div>ফেসবুক</div></a></li>
									<li><a href="/avijit/quotes.php"><div>উদ্ধৃতি</div></a></li>
									<li><a href="/avijit/response.php"><div>বিশ্বপ্রতিক্রিয়া</div></a></li>'; }
							?>
						</ul>
					</nav>

					<div id="page-submenu-trigger"><i class="icon-reorder"></i></div>

				</div>

			</div>

		</div><!-- #page-menu end -->
		
		<?php if (basename($_SERVER['PHP_SELF']) != 'en.php') { echo '
		<!-- Page Title
		============================================= -->
		<section id="page-title">

			<div class="container clearfix">
				<h1 style="text-transform: inherit;"><?php echo $title ?></h1>
			</div>

		</section><!-- #page-title end -->

		<!-- Content
		============================================= -->
		<section id="content">
			
			<div class="content-wrap" style="margin-top: -50px; margin-bottom: -50px">'; } ?>
			
