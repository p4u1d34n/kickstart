<nav id="nav">
	<ul class="links">
<?php
    foreach ($menu as $item) {
        echo '<li class="'.($item->active?'active':'').'"><a href="'.$item->link.'">'.$item->title.'</a></li>';
    }
?>
	</ul>
	<ul class="icons">
        <li><a href="#" class="icon fa-twitter"><span class="label">Twitter</span></a></li>
        <li><a href="#" class="icon fa-facebook"><span class="label">Facebook</span></a></li>
        <li><a href="#" class="icon fa-instagram"><span class="label">Instagram</span></a></li>
        <li><a href="#" class="icon fa-github"><span class="label">GitHub</span></a></li>
    </ul>
</nav>