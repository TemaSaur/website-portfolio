<?php
	include_once "includes/hea.php";
	echo "Contact me - TemaSaur";
	include_once "includes/der.php";
	include_once "includes/page_top.php";
?>

		<div class="ts-txt-wrap">
			<h1 class="ts-hand ts-shadow">Concact me</h1>
			<div class="ts-dark">
				<h2>Let's work together!</h2>
				<p>Here are some useful links:</p>
				<ul class="ts-socials ts-box-shadow">
					<li>
						<a href="https://github.com/temasaur/" class="link">
							<i class="fab fa-github"></i>
						</a>
					</li>
					<li>
						<a href="https://vk.com/id166141066/" class="link">
							<i class="fab fa-vk"></i>
						</a>
					</li>
					<li>
						<a href="https://instagram.com/vakhrushevartemiy/" class="link">
							<i class="fab fa-instagram"></i>
						</a>
					</li>
					<li>
						<a href="https://www.facebook.com/temasaur/" class="link">
							<i class="fab fa-facebook"></i>
						</a>
					</li>
				</ul>
				<p>or you can email me:</p>
				<form action="includes/contact_form.php" method="POST" id="ts-email-form">
					<label for="ts-name">Name:</label><br>
					<input id="ts-name" name="name" type="text" placeholder="Will Smith"><br>

					<label for="ts-email">Email:</label><br>
					<input id="ts-email" name="e-mail" type="email" placeholder="willsmith@temasaur.dev"><br>

					<label for="ts-subject">Subject:</label><br>
					<input id="ts-subject" name="subject" type="text" placeholder="This is the subject"><br>

					<label for="ts-text">Text (content):</label><br>
					<textarea id="ts-text" name="txt" cols="30" rows="5" placeholder="Hello there" autocomplete="false"></textarea>

					<button id="ts-send" name="send" type="submit" class="ts-planet-red ts-shadow js-cursor-hover">Send!</button>
				</form>
			</div>
		</div>

		<section class="ts-footer-planet" id="contact-footer-planet">
			<?php include "svg/rocket_3.svg" ?>
		</section>
	</main>
</body>
</html>