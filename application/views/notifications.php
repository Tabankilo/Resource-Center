<?php if( $errors = $this->session->flashdata('errors') ) : ?>
	<br>
<div class="alert alert-danger fade in">
    <a href="#" class="close" data-dismiss="alert">&times;</a>
    <strong>Error!</strong> <?php echo $errors; ?>
</div>
<?php endif; ?>

<?php if( $success = $this->session->flashdata('success')) : ?>
<br>
<div class="alert alert-success fade in">
    <a href="#" class="close" data-dismiss="alert">&times;</a>
    <strong>Success!</strong> <?php echo $success; ?>
</div>
<?php endif; ?>

<?php if ( $info = $this->session->flashdata('info') ) : ?>
<div class="alert alert-info fade in">
    <a href="#" class="close" data-dismiss="alert">&times;</a>
    <strong>Note!</strong> <?php echo $info; ?>
</div>
<?php endif; ?>