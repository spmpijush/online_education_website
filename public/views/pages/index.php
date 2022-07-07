<?php if($_SERVER['REQUEST_URI'] == $_SERVER['PHP_SELF']) header("Location: noPage"); ?>

<div class="container">
	<div class="row">
		<div class="col-md-12" style="margin-top:10px;">
			<?php echo $this->page['page_content']; ?>	
		</div>
	</div>
</div>
