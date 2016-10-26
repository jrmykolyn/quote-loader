<blockquote class="quote-elem <?= ( $options['hide'] !== true ) ? 'js--trans-ready' : '' ?>">
	<div class="quote-elem__body">
		<span>
			<?= $quote_arr[1]; ?>
		</span>
	</div>
	<footer class="quote-elem__footer">
		<cite>
			<?php
				// Print out quote author.
				echo $quote_arr[0];

				// Print out quote year if avail.
				if ( isset( $quote_arr[2] ) && !empty( $quote_arr[2] ) ) {
					echo ", ";
					echo "<em>";
					echo $quote_arr[2];
					echo "</em>";
				}
			?>
		</cite>
	</footer>
</blockquote>