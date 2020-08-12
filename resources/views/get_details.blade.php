<div class="row content-details">
<div class="col-md-3 active-title">
Client Name :
</div>
<div class="col-md-3">
{{$appointment->client_name}}
</div>
<div class="col-md-3 active-title">
Client Logo :
</div>
<div class="col-md-3 text-center">
<img src="{{ URL::to('/') }}/storage/uploads/{{$appointment->client_logo}}" height="50px" width="50px" />
</div>
<div class="col-md-3 active-title">
Physician Name :
</div>
<div class="col-md-3">
{{$appointment->physician_name}}
</div>
<div class="col-md-3 active-title">
Physician Contact :
</div>
<div class="col-md-3">
{{$appointment->physician_contact}}
</div>
<div class="col-md-3 active-title">
Patient First Name :
</div>
<div class="col-md-3 ">
{{$appointment->patient_firstname}}
</div>
<div class="col-md-3 active-title">
Patient Last Name :
</div>
<div class="col-md-3">
{{$appointment->patient_lastname}}
</div>
<div class="col-md-3 active-title">
Patient Date of birth :
</div>
<div class="col-md-3">
{{date('d-m-Y',strtotime($appointment->patient_dob))}}
</div>
<div class="col-md-3 active-title">
Patient Contact :
</div>
<div class="col-md-3">
{{$appointment->patient_contact}}
</div>
<div class="col-md-3 active-title">
Chief Complaint :
</div>
<div class="col-md-3">
<?php echo $appointment->chief_complaint;?>
</div>
<div class="col-md-3 active-title">
Consultation Note :
</div>
<div class="col-md-3">
<?php echo $appointment->consultation_note;?>
</div>
</div>