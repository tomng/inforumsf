<?php
/**
 * The front page of the Inforum website.
 *
 * @package inforum
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

			<div class="hero section section-light">

				<div class="section-content">
					<h1>Make your weeknights memorable.</h1>
					<p>Inspired, unscripted conversations with leaders in politics, culture, tech, business, social issues, design, and more. <strong>Join us at Inforum.</strong></p>
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
								    <input type="submit" value="Join Us" name="subscribe" id="mc-embedded-subscribe" class="button">
									</div>
						    </div>
						</form>
						</div>
						<!--End mc_embed_signup-->
				</div>
			</div>

			<div class="upcoming-events center section section-dark">
				<div class="tag">Upcoming Events</div>
				<div class="event">
					<h1>Senator Cory Booker</h1>
					<h2>In conversation with Lt. Governor Gavin Newsom</h2>
					<div class="info">
						<span class="date">Friday, February 19, 2016</span> / <span class="time">7:00pm-9:00pm</span> / <span class="location">Castro Theatre</span>
					</div>
					<div class="get-tickets">
						Get Tickets
					</div>
				</div>
			</div>

			<div class="section section-medium center">

				<div class="section-content width-medium">
					<h2>What people are saying</h2>

					<p class="quote">“INFORUM… has made a habit of programming insightful, celebrity-status speakers to discuss today’s critical issues”</p>
					<p class="attribution">San Francisco Magazine</p>

					<p class="quote">Recommended for singles looking for a “presidential forum and hang-out”</p>
					<p class="attribution">Los Angeles Times</p>

					<p class="quote">“One of the city’s most treasured institutions”</p>
					<p class="attribution">San Francisco Chronicle</p>

				</div>
			</div>

			<div class="section section-light">

				<div class="speakers section-content">
					<div class="speakers-primary">
						<div class="tag">Speakers</div>

						<h3>
							Leaders of organizations, movements, and ideas that shape the world share their stories at Inforum.
						</h3>
						<h3>
							Every month, join us for a fun, illuminating, unforgettable evening.
						</h3>
					</div>

					<div class="speakers-secondary">
						<div class="recent-speakers">
							<p class="intro">Some of our recent speakers:</p>
							<p>Sal Khan</p>
							<p>Marc Benioff</p>
							<p>Sheryl Sandberg</p>
							<p>Nate Silver</p>
							<p>Jack Dorsey</p>
							<p>Cornel West</p>
							<p>Judy Blume</p>
							<p>Mark Zuckerberg</p>
							<p>Arianna Huffington</p>
							<p>Reid Hoffman</p>
							<p>James Franco</p>
							<p>Megan Smith</p>
							<p>David &amp; Tom Kelley </p>
							<p>Rachel Maddow</p>
							<p>Andy Cohen</p>
							<p>Kim Kardashian West</p>
							<p>Molly Ringwald</p>
							<p>Talib Kweli</p>
							<p>Adam Savage</p>
							<p>Nicholas Kristof</p>
							<p>Mario Batali</p>
							<p>Alexis Ohanian</p>
							<p>Jared Diamond</p>
							<p>Cecile Richards</p>
							<p>Marissa Mayer</p>
							<p>Rashida Jones</p>
							<p>John Maeda</p>
							<p>Chuck Palahniuk</p>
						</div>
					</div>
				</div>
			</div>

			<div class="thin-section section-dark">
				<div class="section-content">
					<h2 class="center">Join conversations that inspire you</h2>

							<!-- Begin MailChimp Signup Form -->
							<div id="mc_embed_signup">
							<form action="//scoutdeck.us9.list-manage.com/subscribe/post?u=36e914627db788cc67da179a9&amp;id=f87f2c9504" method="post" id="mc-embedded-subscribe-form" name="mc-embedded-subscribe-form" class="validate" target="_blank" novalidate>
							    <div id="mc_embed_signup_scroll" class="cta-form">
										<label for="mce-EMAIL" class="prompt">Get the inside scoop about upcoming Inforum events in your inbox.</label>

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

<?php
get_sidebar();
get_footer();
