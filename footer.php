<?php if ( 'on' == et_get_option( 'divi_back_to_top', 'false' ) ) : ?>

	<span class="et_pb_scroll_top et-pb-icon"></span>

<?php endif; ?>

		<div id="main-footer" class="footer">
			<?php get_sidebar( 'footer' ); ?>

			<div id="innovation-footer">
				<div id="innovation-bar">
					<div class="innovation-status">
						<a href="https://yourfuture.asu.edu/rankings"><span>ASU is #1 in the U.S. for Innovation</span></a>
					</div>
					<div class="innovation-hidden">
						<a href="https://yourfuture.asu.edu/rankings"><img src="data:image/png;base64,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" alt="Best Colleges U.S. News Most Innovative 2016"></a>
					</div>
				</div>
				<div class="footer-menu">
					<ul class="default">
						<li><a href="http://www.asu.edu/copyright/">Copyright &amp; Trademark</a></li>
						<li><a href="http://www.asu.edu/accessibility/">Accessibility</a></li>
						<li><a href="http://www.asu.edu/privacy/">Privacy</a></li>
						<li><a href="http://www.asu.edu/asujobs">Jobs</a></li>
						<li><a href="http://www.asu.edu/emergency/">Emergency</a></li>
						<li class="no-border"><a href="http://www.asu.edu/contactasu/">Contact ASU</a></li>
					</ul>
				</div>
			</div>

		</div> <!-- #main-footer -->

	</div> <!-- #et-main-area -->

</div> <!-- #page-container -->

<?php wp_footer(); ?>
	
</body>
</html>