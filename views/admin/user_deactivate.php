<div class="content-wrapper">
 <!-- Content Header (Page header) -->
	<section class="content-header">
		<h1>
			Pengguna
			<small>Control Panel</small>
		</h1>
		<ol class="breadcrumb">
			<li><a href="<?php echo base_url('admin') ?>"><i class="fa fa-dashboard"></i> Admin</a></li>
      <li>User</li>
			<li class="active">Deactivate</li>
		</ol>
	</section>

	<section class="content">

<div class="box box-info">
  <div class="box-header with-border">
    <h3 class="box-title">Nonaktif Pengguna</h3>
  </div>
  <!-- /.box-header -->
  <!-- form start -->
    <div class="box-body">

      <p><?php echo sprintf(lang('deactivate_subheading'), $user->username);?></p>

      <?php echo form_open("user/deactivate/".$user->id);?>

        <p>
        	<?php echo lang('deactivate_confirm_y_label', 'confirm');?>
          <input type="radio" name="confirm" value="yes" checked="checked" />
          <?php echo lang('deactivate_confirm_n_label', 'confirm');?>
          <input type="radio" name="confirm" value="no" />
        </p>

        <?php echo form_hidden($csrf); ?>
        <?php echo form_hidden(array('id'=>$user->id)); ?>

        <p><?php echo form_submit('submit', lang('deactivate_submit_btn'), 'class="btn btn-danger"');?></p>

      <?php echo form_close();?>

    </div>
    <!-- /.box-body -->
    <!-- /.box-footer -->
</div>

</section>

</div>
