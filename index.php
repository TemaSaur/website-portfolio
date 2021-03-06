<?php
	include_once "includes/hea.php";
	echo "TemaSaur";
	include_once "includes/der.php";
	?>
	
	<aside id="ts-stars">
	</aside>

	<aside id="planets">
		<span class="ts-planet-orange ts-planet-medium ts-div-shadow ts-circle anim-0" id="planet-0"></span>
		<span class="ts-planet-gray ts-planet-small ts-div-shadow ts-circle anim-1" id="planet-1"></span>
		<span class="ts-planet-gray ts-planet-small ts-div-shadow ts-circle anim-0" id="planet-2"></span>
		<span class="ts-planet-blue ts-planet-big ts-div-shadow ts-circle anim-2" id="planet-3"></span>
		<span class="ts-planet-red ts-planet-small ts-div-shadow ts-circle anim-1" id="planet-4"></span>
		<span class="ts-planet-orange ts-planet-big ts-div-shadow ts-circle anim-0" id="planet-5"></span>
		<span class="ts-planet-red ts-planet-small ts-div-shadow ts-circle anim-1" id="planet-6"></span>
	</aside>
	<main>
		<section id="ts-bg-top">

			<a href="ru/" id="ts-lang" class="ts-circle-center ts-div-shadow ts-planet-red js-cursor-hover">
				<h2 class="ts-shadow">en/ru</h2>
			</a>
			
			<div id="ts-hello" class="fade-in">
				<h2 class="ts-shadow">
					Hello!<br>
					My name is
				</h2>
				<h1 class="ts-hand ts-shadow">
					Artemy Vakhrushev
				</h1>
				<h2 class="ts-shadow">
					and I'm a self-taught programmer
				</h2>
			</div> <!-- /ts-hello -->

			<a href="#thanks" class="ts-circle-center ts-sun js-cursor-hover">
				<h3>click me!</h3>
			</a>
			
		</section>

		<section id="ts-bg-bottom">
			<div id="ts-nav">
				<a href="about" id="ts-about" class="ts-circle-center ts-div-shadow ts-planet-orange js-cursor-hover">
					<span id="thanks"></span>
					<h3 class="ts-shadow">About me</h3>
				</a>
				<span class="ts-planet-blue ts-planet-medium ts-div-shadow ts-circle anim-1" id="planet-7"></span>
				<a href="projects" id="ts-portfolio" class="ts-circle-center ts-div-shadow ts-planet-red js-cursor-hover">
					<h3 class="ts-shadow">Projects</h3>
				</a>
				<span class="ts-planet-gray ts-planet-small ts-div-shadow ts-circle anim-2" id="planet-8"></span>
				<a href="contact" id="ts-contact" class="ts-circle-center ts-div-shadow ts-planet-blue js-cursor-hover">
					<h3 class="ts-shadow">Contact me</h3>
				</a>
				<span class="ts-planet-gray ts-planet-small ts-div-shadow ts-circle anim-1" id="planet-9"></span>
			</div>
		</section>
	</main>
	
</body>
</html>
