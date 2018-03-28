<?php
/*------------------------------------------------------------------------
# acquaintsoftech - Youtube Plugin
-------------------------------------------------------------------------*/
// no direct access
defined( '_JEXEC' ) or die( 'Restricted access' );
?>
<?php if ($youtube_id) { ?>

	<div class="sp_simple_youtube <?php echo ( $responsive ) ? 'sp_simple_youtube_responsive' : ''; ?>" data-width="<?php echo $width; ?>" data-height="<?php echo $height; ?>">
		<?php if($responsive){ ?>
			<iframe title="Simple youtube plugin" id="sp-simple-youtube<?php echo $uniqid ?>" src="http://www.youtube.com/embed/<?php echo $youtube_id ?>?wmode=transparent" frameborder="0"></iframe>
		<?php } else { ?>
			<iframe title="Simple youtube plugin" id="sp-simple-youtube<?php echo $uniqid ?>" src="http://www.youtube.com/embed/<?php echo $youtube_id ?>?wmode=transparent" width="<?php echo $width; ?>" height="<?php echo $height; ?>" frameborder="0"></iframe>
		<?php } ?>
	</div>

<?php } else { ?>
	<p>Please enter youtube id.</p>
<?php } ?>