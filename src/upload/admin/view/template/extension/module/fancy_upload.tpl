<?php echo $header; ?><?php echo $column_left; ?>
<div id="content">
	<div class="page-header">
		<div class="container-fluid">
			<div class="pull-right">
				<button type="submit" form="form-account" data-toggle="tooltip" title="<?php echo $button_save; ?>" class="btn btn-primary"><i class="fa fa-save"></i></button>
				<a href="<?php echo $cancel; ?>" data-toggle="tooltip" title="<?php echo $button_cancel; ?>" class="btn btn-default"><i class="fa fa-reply"></i></a></div>
			<h1><?php echo $heading_title; ?></h1>
			<ul class="breadcrumb">
				<?php foreach ($breadcrumbs as $breadcrumb) { ?>
				<li><a href="<?php echo $breadcrumb['href']; ?>"><?php echo $breadcrumb['text']; ?></a></li>
				<?php } ?>
			</ul>
		</div>
	</div>
	<div class="container-fluid">
		<?php if ($error_warning) { ?>
		<div class="alert alert-danger"><i class="fa fa-exclamation-circle"></i> <?php echo $error_warning; ?>
			<button type="button" class="close" data-dismiss="alert">&times;</button>
		</div>
		<?php } ?>
		<div class="panel panel-default">
			<div class="panel-heading">
				<h3 class="panel-title"><i class="fa fa-pencil"></i> <?php echo $text_edit; ?></h3><h3 class="panel-title pull-right">v<?php echo $version; ?></h3>
			</div>
			<div class="panel-body">
				<form action="<?php echo $action; ?>" method="post" enctype="multipart/form-data" id="form-account" class="form-horizontal">
				
					<ul class="nav nav-tabs">
						<li class="active"><a href="#tab-upload" data-toggle="tab"><?php echo $tab_upload; ?></a></li>
						<li><a href="#tab-interface" data-toggle="tab"><?php echo $tab_interface; ?></a></li>
					</ul>
				
					<div class="tab-content">

						<div class="tab-pane active" id="tab-upload">
						
							<div class="form-group">
								<label class="col-sm-2 control-label" for="input-path"><span data-toggle="tooltip" data-container="#tab-upload" title="<?php echo $entry_path_help; ?>"><?php echo $entry_path; ?></span></label>
								<div class="col-sm-10">
									<input type="text" name="fancy_upload_path" value="<?php echo $fancy_upload_path; ?>" placeholder="<?php echo $entry_path; ?>" id="input-path" class="form-control" />
								</div>
							</div>

							<div class="form-group fu-help-block-trigger">
								<div class="col-sm-2">
									<button type="button" class="btn btn-primary pull-right" id="show_description"><?php echo $text_show_description ?></button>
								</div>
								<div class="col-sm-10">
								</div>
							</div>
							
							<div class="form-group fu-help-block">
								<div class="col-sm-12">
									<?php echo $entry_path_description ?>
								</div>
							</div>
							
							<div class="form-group">
								<label class="col-sm-2 control-label"><span data-toggle="tooltip" data-container="#tab-upload" title="<?php echo $entry_change_image_size_help; ?>"><?php echo $entry_change_image_size; ?></span></label>
								<div class="col-sm-10">
									<label class="radio-inline">
										<?php if ($fancy_upload_change_image_size) { ?>
										<input type="radio" name="fancy_upload_change_image_size" value="1" checked="checked" />
										<?php echo $text_yes; ?>
										<?php } else { ?>
										<input type="radio" name="fancy_upload_change_image_size" value="1" />
										<?php echo $text_yes; ?>
										<?php } ?>
									</label>
									<label class="radio-inline">
										<?php if (!$fancy_upload_change_image_size) { ?>
										<input type="radio" name="fancy_upload_change_image_size" value="0" checked="checked" />
										<?php echo $text_no; ?>
										<?php } else { ?>
										<input type="radio" name="fancy_upload_change_image_size" value="0" />
										<?php echo $text_no; ?>
										<?php } ?>
									</label>
								</div>
							</div>

							<div class="form-group">
								<label class="col-sm-2 control-label" for="input-width"><?php echo $entry_image_size; ?></label>
								<div class="col-sm-5">
									<input type="text" name="fancy_upload_image_size_width" value="<?php echo $fancy_upload_image_size_width; ?>" placeholder="<?php echo $text_width; ?>" id="input-width" class="form-control" />
								</div>
								<div class="col-sm-5">
									<input type="text" name="fancy_upload_image_size_height" value="<?php echo $fancy_upload_image_size_height; ?>" placeholder="<?php echo $text_height; ?>" id="input-height" class="form-control" />
								</div>
							</div>

							<div class="form-group">
								<label class="col-sm-2 control-label" for="input-exec"><span data-toggle="tooltip" data-container="#tab-interface" title="<?php echo $entry_exec_help; ?>"><?php echo $entry_exec; ?></span></label>
								<div class="col-sm-10">
									<input type="text" name="fancy_upload_exec" value="<?php echo $fancy_upload_exec; ?>" placeholder="<?php echo $entry_exec; ?>" id="input-exec" class="form-control" />
								</div>
							</div>

							<div class="form-group">
								<div class="col-sm-12">
									<h4><b><?php echo $text_current_values ?></b></h4>
									<ul>
										<li>max_file_uploads: <?php echo $ini_max_file_uploads; ?></li>
										<li>max_input_time: <?php echo $ini_max_input_time; ?></li>
										<li>post_max_size: <?php echo $ini_post_max_size; ?></li>
										<li>upload_max_filesize: <?php echo $ini_upload_max_filesize; ?></li>
									</ul>
								</div>
							</div>

						</div>

						<div class="tab-pane" id="tab-interface">

							<div class="form-group">
								<label class="col-sm-2 control-label" for="input-path"><?php echo $entry_disable_confirm; ?></label>
								<div class="col-sm-10">
									<label class="radio-inline">
										<?php if ($fancy_upload_disable_confirm) { ?>
										<input type="radio" name="fancy_upload_disable_confirm" value="1" checked="checked" />
										<?php echo $text_yes; ?>
										<?php } else { ?>
										<input type="radio" name="fancy_upload_disable_confirm" value="1" />
										<?php echo $text_yes; ?>
										<?php } ?>
									</label>
									<label class="radio-inline">
										<?php if (!$fancy_upload_disable_confirm) { ?>
										<input type="radio" name="fancy_upload_disable_confirm" value="0" checked="checked" />
										<?php echo $text_no; ?>
										<?php } else { ?>
										<input type="radio" name="fancy_upload_disable_confirm" value="0" />
										<?php echo $text_no; ?>
										<?php } ?>
									</label>
								</div>
							</div>

						</div>

					</div>

				</form>
			</div>
		</div>
	</div>
</div>
<style>
.fu-help-block {
	display: none;
}
</style>
<script>
$(document).ready(function () {
	$('input[name=fancy_upload_change_image_size]').on('change', function(e) {
		let checked = Boolean(parseInt($('input[name=fancy_upload_change_image_size]:checked').val()));
		$('input[name=fancy_upload_image_size_width], input[name=fancy_upload_image_size_height]').prop('disabled', !checked);
	}).trigger('change');
	
	$('#show_description').on('click', function(e) {
		$('.fu-help-block-trigger').hide();
		$('.fu-help-block').show();
	});
});
</script>
<?php echo $footer; ?>