<?php $this->managelayout->add_css(element('view_skin_url', $layout) . '/css/style.css'); ?>

<div class="search col-md-10 col-md-offset-1">
	<?php
	echo validation_errors('<div class="alert alert-warning" role="alert">', '</div>');
	echo show_alert_message($this->session->flashdata('message'), '<div class="alert alert-auto-close alert-dismissible alert-info"><button type="button" class="close alertclose" >&times;</button>', '</div>');
	$attributes = array('class' => 'form-horizontal', 'name' => 'fregisterform', 'id' => 'fregisterform');
	echo form_open(current_full_url(), $attributes);
	?>
		<input type="hidden" name="register" value="1" />
		<div class="panel panel-default">
			<div class="panel-heading">회원가입</div>
			<div class="panel-body">
				<p><strong>회원가입약관</strong></p>
				<div class="form-group">
					<div class="col-lg-12">
					<textarea class="form-control" rows="3" readonly="readonly"><?php echo html_escape(element('member_register_policy1', $view)); ?></textarea>
					</div>
				</div>
				<div class="form-group">
					<div class="col-lg-12">
						<div class="checkbox">
						<label for="agree">
							<input type="checkbox" name="agree" id="agree" value="1" /> 회원가입약관의 내용에 동의합니다.
						</label>
						</div>
					</div>
				</div>
				<p><strong>개인정보취급방침안내</strong></p>
				<div class="form-group">
					<div class="col-lg-12">
						<textarea class="form-control" rows="3" readonly="readonly"><?php echo html_escape(element('member_register_policy2', $view)); ?></textarea>
					</div>
				</div>
				<div class="form-group">
					<div class="col-lg-12">
						<div class="checkbox">
						<label for="agree2">
							<input type="checkbox" name="agree2" id="agree2" value="1" /> 개인정보취급방침안내의 내용에 동의합니다.
						</label>
						</div>
					</div>
				</div>
				<div class="form-group">
					<div class="col-lg-12">
						<button type="submit" class="btn btn-success btn-sm">회원가입</button>
					</div>
				</div>
			</div>
		</div>
	<?php echo form_close(); ?>
</div>

<script type="text/javascript">
//<![CDATA[
$(function() {
	$('#fregisterform').validate({
		rules: {
			agree: {required :true},
			agree2: {required :true}
		}
	});
});
//]]>
</script>
