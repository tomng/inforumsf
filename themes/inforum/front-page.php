<?php
/**
 * The front page of the Inforum website.
 *
 * @package inforum
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

			<div class="hero section">
				<div class="section-content">
					<h1>Meet</br/><span id="caption" class="typewriter"></span><span id="cursor" style="font-weight: 100;">|</span> <br/>shaping what</br/>matters to you</h1>
					<h2>In person, live in San Francisco.</h2>
				</div>
			</div>

			<div class="thin-section section-medium">
				<div class="section-content">
						<!-- Begin MailChimp Signup Form -->
						<div id="mc_embed_signup">
						<form action="//scoutdeck.us9.list-manage.com/subscribe/post?u=36e914627db788cc67da179a9&amp;id=f87f2c9504" method="post" id="mc-embedded-subscribe-form" name="mc-embedded-subscribe-form" class="validate" target="_blank" novalidate>
						    <div id="mc_embed_signup_scroll" class="cta-form">
									<label for="mce-EMAIL" class="prompt">Be the first to know about incredible speakers and events coming to SF.</label>

									<div class="signup">
										<input type="email" value="" name="EMAIL" class="email" id="mce-EMAIL" placeholder="Email Address" required>
								    <!-- real people should not fill this in and expect good things - do not remove this or risk form bot signups-->
								    <div style="position: absolute; left: -5000px;" aria-hidden="true"><input type="text" name="b_36e914627db788cc67da179a9_f87f2c9504" tabindex="-1" value=""></div>
								    <input type="submit" value="Join" name="subscribe" id="mc-embedded-subscribe" class="button">
									</div>
						    </div>
						</form>
						</div>
						<!--End mc_embed_signup-->
				</div>
			</div>

			<div class="upcoming-events section section-dark">

				<div class="section-content">

					<div class="tag">Upcoming Events</div>
					<h3>Grab a drink, bring a friend, and enjoy awesome conversations with incredible people.</h3>
					<div class="event">

						<div class="main">
							<div class="headline">
								<h1>Senator Cory Booker</h1>
								<h2>In conversation with Lt. Governor Gavin Newsom</h2>
							</div>
							<img class="photo" />
						</div>

						<div class="details">
							<div class="info">
								<span class="date nugget">Friday, February 19, 2016</span><span class="divider"> / </span><span class="time nugget">7:00pm-9:00pm</span><span class="divider"> / </span><span class="location nugget">Castro Theatre</span>
							</div>
							<div class="get-tickets">
								Get Tickets
							</div>
						</div>
					</div>
				</div>
			</div>

			<div class="section section-medium">

				<div class="section-content">
					<h2>Make your weeknights memorable</h2>

					<div class="quotes width-medium">
						<p class="quote">“INFORUM… has made a habit of programming insightful, celebrity-status speakers to discuss today’s critical issues”</p>
						<p class="attribution">San Francisco Magazine</p>

						<p class="quote">Recommended for singles looking for a “presidential forum and hang-out”</p>
						<p class="attribution">Los Angeles Times</p>

						<p class="quote">“One of the city’s most treasured institutions”</p>
						<p class="attribution">San Francisco Chronicle</p>
					</div>

				</div>
			</div>

			<div class="thin-section section-dark" style="padding-bottom: 60px">
				<div class="section-content">
					<h2>Join conversations that inspire you</h2>

							<!-- Begin MailChimp Signup Form -->
							<div id="mc_embed_signup">
							<form action="//scoutdeck.us9.list-manage.com/subscribe/post?u=36e914627db788cc67da179a9&amp;id=f87f2c9504" method="post" id="mc-embedded-subscribe-form" name="mc-embedded-subscribe-form" class="validate" target="_blank" novalidate>
							    <div id="mc_embed_signup_scroll" class="cta-form">
										<label for="mce-EMAIL" class="prompt">Get the inside scoop about upcoming Inforum SF events in your inbox.</label>

										<div class="signup">
											<input type="email" value="" name="EMAIL" class="email" id="mce-EMAIL" placeholder="Email Address" required>
									    <!-- real people should not fill this in and expect good things - do not remove this or risk form bot signups-->
									    <div style="position: absolute; left: -5000px;" aria-hidden="true"><input type="text" name="b_36e914627db788cc67da179a9_f87f2c9504" tabindex="-1" value=""></div>
									    <input type="submit" value="Join Us" name="subscribe" id="mc-embedded-subscribe" class="button">
										</div>
							    </div>
							</form>
							</div>
							<!--End mc_embed_signup-->

				</div>
			</div>

		</main><!-- #main -->
	</div><!-- #primary -->


	<script type="text/javascript" src="//cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>

	<script type="text/javascript">

		var captionLength = 0;
		var caption = '';

		var characterTypeDelayMin = 30; // in ms
		var characterTypeDelayMax = 240; // in ms

		var characterEraseDelay = 80; // in ms
		var firstWordTypeDelay = 1000;
		var nextWordTypeDelay = 1000;
		var wordEraseDelay = 3000;


		var captionList = [
			'leaders',
			'changemakers',
			'thinkers',
			'storytellers',
			'entrepreneurs',
			'makers',
			'activists',
			'scientists',
			'authors',
			'artists',
			'educators'
		];
		var captionIndex = 0;


		$(document).ready(function() {
				console.log('hi');

		    setInterval ('cursorAnimation()', 600);
		    captionEl = $('#caption');

				setTimeout('typeNextPerson()', firstWordTypeDelay);

		});

		function typeNextPerson() {
			caption = captionList[captionIndex++ % captionList.length];
			captionLength = 0;
			type();
		}

		function type() {
		    captionEl.html(caption.substr(0, captionLength++));
		    if(captionLength < caption.length+1) {
		        setTimeout('type()', getCharTypeDelay() );
		    } else {
		        // captionLength = 0;
		        // caption = '';
						setTimeout('eraseAndContinue()', wordEraseDelay)
		    }
		}

		// function testErasingEffect() {
		//     caption = captionEl.html();
		//     captionLength = caption.length;
		//     if (captionLength>0) {
		//         erase();
		//     } else {
		//         $('#caption').html("You didn't write anything to erase, but that's ok!");
		//         setTimeout('testErasingEffect()', 1000);
		//     }
		// }

		function eraseAndContinue() {
		    captionEl.html(caption.substr(0, captionLength--));
		    if(captionLength >= 0) {
		        setTimeout('eraseAndContinue()', characterEraseDelay);
		    } else {
		        // captionLength = 0;
		        // caption = '';
						setTimeout('typeNextPerson()', nextWordTypeDelay);
		    }
		}

		function cursorAnimation() {
		    $('#cursor').animate({
		        opacity: 0
		    }, 'fast', 'swing').animate({
		        opacity: 1
		    }, 'fast', 'swing');
		}

		function getCharTypeDelay() {
			return getRandomIntInclusive(characterTypeDelayMin,
				characterTypeDelayMax);
		}

		function getRandomIntInclusive(min, max) {
		  return Math.floor(Math.random() * (max - min + 1)) + min;
		}

</script>

<?php
get_sidebar();
get_footer();
