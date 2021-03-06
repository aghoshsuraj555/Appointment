
<?php $__env->startSection('content'); ?>
<div class="container">
<h4>Create Appointment</h4>
<div class="row">
<form action="<?php echo e(route('appointment.store')); ?>" method="POST" id="form" enctype="multipart/form-data">
<?php echo csrf_field(); ?>
<input type="hidden" name="_method" value="POST"/>
<input type="hidden" class="form-control" name="client_id" id="client_id"/>
<div class="row">
<div class="col-md-6">
<div class="form-group">
<label for="client_name">Client Name</label>
<input type="text" class="form-control required" name="client_name" value="<?php echo e(old('client_name')); ?>" id="client_name"/>
</div>
</div>
<div class="col-md-6">
<div class="form-group">
<label for="logo">Client Logo</label>
<input type="file" class="form-control" name="logo" id="logo"/>
<div id="logopreview">
</div>
</div>
</div>
<div class="col-md-6">
<div class="form-group">
<label for="physician_name">Physician Name</label>
<input type="text" class="form-control required" name="physician_name" id="physician_name" value="<?php echo e(old('physician_name')); ?>"/>
</div>
</div>
<div class="col-md-6">
<div class="form-group">
<label for="physician_contact">Physician Contact</label>
<input type="text" class="form-control required" name="physician_contact" id="physician_contact" value="<?php echo e(old('physician_contact')); ?>"/>
</div>
</div>
<div class="col-md-6">
<div class="form-group">
<label for="physician_firstname">Patient First Name</label>
<input type="text" class="form-control required" name="patient_firstname" id="patient_firstname" value="<?php echo e(old('patient_firstname')); ?>"/>
</div>
</div>
<div class="col-md-6">
<div class="form-group">
<label for="physician_lastname">Patient Last Name</label>
<input type="text" class="form-control required" name="patient_lastname" id="patient_lastname" value="<?php echo e(old('patient_lastname')); ?>"/>
</div>
</div>
<div class="col-md-6">
<div class="form-group">
<label for="dob">Patient Dob</label>
<input type="text" class="form-control datepicker required" name="dob" id="dob" value="<?php echo e(old('dob')); ?>"/>
</div>
</div>
<div class="col-md-6">
<div class="form-group">
<label for="patient_contact">Patient Contact</label>
<input type="text" class="form-control required" name="patient_contact" id="patient_contact" value="<?php echo e(old('patient_contact')); ?>"/>
</div>
</div>
<div class="col-md-12">
<div class="form-group">
<label for="chief_complaint">Chief Complaint</label>
<textarea class="form-control editor" name="chief_complaint" id="chief_complaint"><?php echo e(old('chief_complaint')); ?></textarea>
</div>
</div>
<div class="col-md-12">
<div class="form-group">
<label for="note">Consultation Note</label>
<textarea class="form-control editor" name="note" id="note"><?php echo e(old('note')); ?></textarea>
</div>
</div>
<div class="col-md-12 text-center">
<button type="submit" class="btn btn-primary">Submit</button>
</div>
</div>
</form>
</div>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\wamp64\www\appointment\resources\views/add.blade.php ENDPATH**/ ?>