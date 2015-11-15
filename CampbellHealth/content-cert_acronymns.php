<?php $acronymns = get_field('letter_meanings'); 
if($acronymns){ ?>
	<h2 class='h3'>What do all the Letters Mean?</h2>
		<ul class="accordion">
			
			<?php 
			$i = 1;
			foreach ($acronymns as $item) { 
				if($i == 1) { $checked = 'checked'; }
	            else { $checked = ''; } ?>
				<li <?php if($i == 1) echo 'class="active"'?>
				id="abbr-<?php echo $item['abbreviation'] ?>">

					<?php 
					echo '<label for="item-'.$i.'" class="hd h4"><abbr title="'.$item['title'].'">'.$item['abbreviation'].'</abbr></label>'; 
		            echo '<input '. $checked .' type="radio" id="item-'.$i.'" name="a" />';
		            ?>

					<div class="bd description">
						<h3><?php echo $item['title'] ?></h3>
						<?php echo $item['description'] ?>
					</div>
				</li>

				<?php $i += 1; 
			} // foreach ?>
		</ul>
	
<?php } // if $acronymns ?>
