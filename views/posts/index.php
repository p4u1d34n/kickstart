<section class="posts">
<?php foreach($posts as $post) { ?>
  <article>
									<header>
										<span class="date">April 24, 2017</span>
										<h2><?php echo $post->author; ?></h2>
									</header>
									<a href='?controller=posts&action=show&id=<?php echo $post->id; ?>'  class="image fit"><img src="images/pic02.jpg" alt="" /></a>
									<p>Donec eget ex magna. Interdum et malesuada fames ac ante ipsum primis in faucibus. Pellentesque venenatis dolor imperdiet dolor mattis sagittis magna etiam.</p>
									<ul class="actions special">
										<li><a href='?controller=posts&action=show&id=<?php echo $post->id; ?>' class="button">Full Story</a></li>
									</ul>
								</article>
<?php } ?>
</section>

	<footer>
								<div class="pagination">
									<!--<a href="#" class="previous">Prev</a>-->
									<a href="#" class="page active">1</a>
									<a href="#" class="page">2</a>
									<a href="#" class="page">3</a>
									<span class="extra">&hellip;</span>
									<a href="#" class="page">8</a>
									<a href="#" class="page">9</a>
									<a href="#" class="page">10</a>
									<a href="#" class="next">Next</a>
								</div>
							</footer>