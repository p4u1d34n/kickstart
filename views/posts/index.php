<section class="posts">
<?php foreach($posts as $post) { ?>
  <article>
									<header>
										<span class="date">April 24, 2017</span>
										<h2><?php echo $post->author; ?></h2>
									</header>
									<a href="#" class="image fit"><img src="images/pic02.jpg" alt="" /></a>
									<p>Donec eget ex magna. Interdum et malesuada fames ac ante ipsum primis in faucibus. Pellentesque venenatis dolor imperdiet dolor mattis sagittis magna etiam.</p>
									<ul class="actions special">
										<li><a href='?controller=posts&action=show&id=<?php echo $post->id; ?>' class="button">Full Story</a></li>
									</ul>
								</article>
<?php } ?>
</section>