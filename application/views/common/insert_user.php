<!DOCTYPE html>
<html lang="en">

<div class="jumbotron jumbotron-fluid">
  <div class="container">
    <h2 class="display-3">User Registration</h2>
    <p class="lead">blah blah blah</p>
  </div>
</div>
<form method="POST" action="<?= site_url('insert_user') ?>">

<!-- <form>
<?php echo form_open('insert_user'); ?> -->


<?php if (isset($successmessage)) { ?>
<CENTER><h3 style="color:green;">User Data created successfully!</h3></CENTER><br>
<?php } ?>

<?php if (isset($errormessage)) { ?>
<CENTER><h3 style="color:red;">Error! User data not created!</h3></CENTER><br>
<?php } ?>

<div class="form-group row">
<label for="example-text-input" class="col-xs-2 col-form-label">Employee ID</label><div class="col-xs-10">
<?= form_error('employee_id'); ?>
<?= form_input(array('class'=>'form-control', 'type'=>'text', 'placeholder'=>'Employee ID', 'id'=>'employee_id', 'name'=>'employee_id')); ?>
</div> </div>

<div class="form-group row">
<label for="example-text-input" class="col-xs-2 col-form-label">Full Name</label><div class="col-xs-10">
<?= form_error('fullname'); ?>
<?= form_input(array('class'=>'form-control', 'type'=>'text', 'placeholder'=>'Full name', 'id'=>'fullname', 'name'=>'fullname')); ?>
</div></div>

<div class="form-group row">
<label for="exampleTextarea" class="col-xs-2 col-form-label">Residential Address</label><div class="col-xs-10">
<?= form_error('res_addr'); ?>
<?= form_textarea(array('class'=>'form-control','type'=>'text','placeholder'=>'Address','id'=>'res_addr','name'=>'res_addr','rows'=>'3')); ?>
</div></div>

  <div class="form-group row">
  <label for="example-text-input" class="col-xs-2 col-form-label">Contact No.</label><div class="col-xs-10">
  <?= form_error('contact_no'); ?>
<?= form_input(array('class'=>'form-control', 'type'=>'text', 'placeholder'=>'Contact No.', 'id'=>'contact_no', 'name'=>'contact_no')); ?>
  </div></div>

  <div class="form-group row">
  <label for="example-text-input" class="col-xs-2 col-form-label">Birth Date</label> <div class="col-xs-10">
  <?= form_error('bday'); ?>
<?= form_input(array('class'=>'form-control', 'type'=>'date', 'id'=>'bday', 'name'=>'bday')); ?>
  </div></div>

  <div class="form-group row">
  <label for="exampleInputEmail1" class="col-xs-2 col-form-label">Email address</label>      <div class="col-xs-10">
  <?= form_error('email'); ?>
  <?= form_input(array('class'=>'form-control', 'type'=>'email', 'placeholder'=>'Email Address', 'id'=>'email', 'name'=>'email', 'aria-describedby'=>'emailHelp')); ?>
    <small id="emailHelp" class="form-text text-muted">Company Email</small>
  </div></div>

    <div class="form-group row">
  <label for="example-text-input" class="col-xs-2 col-form-label">Position</label>  <div class="col-xs-10">
  <?= form_error('post'); ?>
<?= form_input(array('class'=>'form-control', 'type'=>'text', 'placeholder'=>'Position', 'id'=>'post', 'name'=>'post')); ?>
  </div></div>

  <div class="form-group row">
  <label for="example-text-input" class="col-xs-2 col-form-label">Department</label>  <div class="col-xs-10">
  <?= form_error('dept'); ?>
<?= form_input(array('class'=>'form-control', 'type'=>'text', 'placeholder'=>'Department', 'id'=>'dept', 'name'=>'dept')); ?>
  </div></div>

  <div class="form-group row">
  <label for="example-text-input" class="col-xs-2 col-form-label">Division</label>  <div class="col-xs-10">
  <?= form_error('divi'); ?>
<?= form_input(array('class'=>'form-control', 'type'=>'text', 'placeholder'=>'Division', 'id'=>'divi', 'name'=>'divi')); ?>
  </div></div>

    <div class="form-group row">
  <label for="example-text-input" class="col-xs-2 col-form-label">Date Hired</label>  <div class="col-xs-10">
  <?= form_error('datehir'); ?>
<?= form_input(array('class'=>'form-control', 'type'=>'date', 'placeholder'=>'Date Hired', 'id'=>'datehir', 'name'=>'datehir')); ?>
  </div></div>

  <div class="form-group row">
  <label for="example-text-input" class="col-xs-2 col-form-label">BioMetrics No.</label>  <div class="col-xs-10">
  <?= form_error('bio_no'); ?>
<?= form_input(array('class'=>'form-control', 'type'=>'number', 'placeholder'=>'Biometrics No.', 'id'=>'bio_no', 'name'=>'bio_no')); ?>
  </div></div>

  <div class="form-group row">
  <label for="example-text-input" class="col-xs-2 col-form-label">Contact Person in case of Emergency</label>  <div class="col-xs-10">
  <?= form_error('emgcy_cperson'); ?>
<?= form_input(array('class'=>'form-control', 'type'=>'text', 'placeholder'=>'Contact Person ', 'id'=>'emgcy_cperson', 'name'=>'emgcy_cperson')); ?>
  </div></div>

  <div class="form-group row">
  <label for="example-text-input" class="col-xs-2 col-form-label">Emergency No.</label>  <div class="col-xs-10">
  <?= form_error('emgcy_cno'); ?>
<?= form_input(array('class'=>'form-control', 'type'=>'text', 'placeholder'=>'Emergency Contact No.', 'id'=>'emgcy_cno', 'name'=>'emgcy_cno')); ?>
  </div></div>

    <div class="form-group row">
    <label for="exampleSelect1" class="col-xs-2 col-form-label">Immediate Superior</label>  <div class="col-xs-10">
  <?= form_error('immed_sup'); ?>
<?php $options = array(
''=>'',
'test1'=>'test1',
'test'=>'test');

$shirts_on_sale = array('', '');
echo form_dropdown('immed_sup', $options, 'large', 'class="form-control" id="immed_sup"');
?>
<!--           <?php 
            echo "<option value=''></option>"; 
            $query = mysql_query("SELECT a.fulname FROM tbl_user a where (a.utypID = '2' or  a.utypID = '3') and empstat = 'ACTIVE' order by a.empID asc");
            while ($row = mysql_fetch_array($query))
                        {echo "<option value=". $row['fulname'] .">" . $row['fulname'] . "</option>"; }
          ?> -->
  </div></div>

      <div class="form-group row">
    <label for="exampleSelect1" class="col-xs-2 col-form-label">Role</label>  <div class="col-xs-10">
    <?= form_error('role_id'); ?>
    <?php $options = array(
''=>'',
'1'=>'Salesman',
'2'=>'Office Staff',
'3'=>'Division Manager',
'4'=>'Administrator',
'5'=>'Accounting Head',
'6'=>'Sales Manager',
'7'=>'Sales Coordinator Supervisor',
'8'=>'Warehouse Supervisor',
'9'=>'Warehouse Staff'
);
$shirts_on_sale = array('', '');
echo form_dropdown('role_id', $options, 'large', 'class="form-control" id=""role_id');
 ?>
  </div></div>


        <div class="form-group row">
    <label for="exampleSelect1" class="col-xs-2 col-form-label">Single parent?</label>  <div class="col-xs-10">
 <?= form_error('sgl_parent'); ?>
<?php $options = array(
''=>'',
'NO'=>'NO',
'YES'=>'YES',
);
$shirts_on_sale = array('', '');
echo form_dropdown('sgl_parent', $options, 'large', 'class="form-control" id="sgl_parent"');
 ?>
  </div></div>


  <div class="form-group row">
  <label for="example-text-input" class="col-xs-2 col-form-label">Starting VL</label>  <div class="col-xs-10">
  <?= form_error('totVL'); ?>
<?= form_input(array('class'=>'form-control', 'type'=>'number', 'placeholder'=>'0', 'id'=>'totVL', 'name'=>'totVL')); ?>
  </div> </div>

    <div class="form-group row">
  <label for="example-text-input" class="col-xs-2 col-form-label">Starting SL</label>  <div class="col-xs-10">
  <?= form_error('totSL'); ?>
<?= form_input(array('class'=>'form-control', 'type'=>'number', 'placeholder'=>'0', 'id'=>'totSL', 'name'=>'totSL')); ?>
  </div> </div>

    <div class="form-group row">
  <label for="example-text-input" class="col-xs-2 col-form-label">Starting SPL</label>  <div class="col-xs-10">
  <?= form_error('totSPL'); ?>
<?= form_input(array('class'=>'form-control', 'type'=>'number', 'placeholder'=>'0', 'id'=>'totSPL', 'name'=>'totSPL')); ?>
  </div> </div>

<!---------------------------------------------------------------------------------------------------------------------------------------->
<div class="form-group row">
<?= form_error('username'); ?>
<?= form_input(array('class'=>'form-control', 'type'=>'hidden', 'value'=>'LAC', 'id'=>'username', 'name'=>'username')); ?>

<?= form_error('enroled_by'); ?>
<?= form_input(array('class'=>'form-control', 'type'=>'hidden', 'value'=>'', 'id'=>'enroled_by', 'name'=>'enroled_by')); ?>

</div>

<!--<div class="form-group row">
    <label for="exampleInputFile" class="col-xs-2 col-form-label">File input</label>  <div class="col-xs-10">
    <input type="file" class="form-control-file" id="exampleInputFile" aria-describedby="fileHelp" required>
    <small id="fileHelp" class="form-text text-muted">This is some placeholder block-level help text for the above input. It's a bit lighter and easily wraps to a new line.</small>
  </div></div> -->
 
<div class="form-group row"><center>
<button type="submit" class="btn btn-primary">Submit</button>
</div>
</form><br><br>
</html>