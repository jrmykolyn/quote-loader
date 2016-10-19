<blockquote>
	<span class="elem--hide js--trans-in">
		<?= $quote_arr[1]; ?>
	</span>
	<footer class="elem--hide js--trans-in">
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