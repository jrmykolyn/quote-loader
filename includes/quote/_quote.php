<blockquote class="quote-elem <?= ( $options['hide'] !== true ) ? 'js--trans-ready' : '' ?>">
	<?php
	/// TEMP - Prevent 'header' elems. from being printed until treatment is finalized.
	if ( 1 === 2 ):
	?>
	<div class="quote-elem__header">
		<span class="text--context">
			On the nature of the universe:
		</span>
	</div>
	<?php endif; ?>
	<div class="quote-elem__body">
		<span>
			<?= $quote_arr[1]; ?>
		</span>
	</div>
	<footer class="quote-elem__footer">
		<cite class="text--attribution">
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