<?php
	$this->load->view('template/header');
?>
 <!-- loader -->
<div id="loading" style="display:none;position: fixed;margin-top: 20%;margin-left:50%;z-index:1">
  <img src='<?php echo base_url('resource/global/img/gear.gif') ?>' width="64" height="64" /><br>Loading..
</div>
<!-- laoder -->
<div class="content-wrapper">
	<?php
    	$this->load->view('alert/alert');
  	?>

	<?php $this->load->view($page); ?>

</div>

<?php
	$this->load->view('template/footer');
?>