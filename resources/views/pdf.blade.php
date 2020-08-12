<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>PDF Report</title>
</head>

<body>
<table class="outer" width="100%" border="0" cellspacing="0" cellpadding="0">
  <tr>
    <td style="width:20px;">&nbsp;</td>
    <td style="height:20px;">&nbsp;</td>
    <td style="width:20px;">&nbsp;</td>
  </tr>
  <tr>
   <td style="width:20px;">&nbsp;</td>
    <td align="center" valign="top"><table width="100%" border="0" cellspacing="0" cellpadding="0">
  <tr>
    <td><table width="100%" border="0" cellspacing="0" cellpadding="0">
  <tr>
    <td style="width:77px;"><img src="{{ public_path().'/storage/uploads/'.$show->client_logo }}" alt="" style="display:block; margin:0; outline:none; border:0;width:120px;height:120px;" /></td>
    <td align="right" height="15" valign="middle" style="margin:0; font-size:40px; font-weight:bold; font-family: arial, sans-serif; color:#af0917;" >{{$show->client_name}}</td>
  </tr>
</table>
</td>
  </tr>
  <tr>
    <td bgcolor="#af0917"><img style="display:block; height:10px; width:1px; margin:0; outline:none; border:0;" src="{{ public_path().'/storage/uploads/'.$show->client_logo }}" height="10" alt="" /></td>
  </tr>
  <tr>
   <td><img style="display:block; height:20px; width:1px; margin:0; outline:none; border:0;" src="{{ public_path().'/uploads/spacer.png'}}" height="20" alt="" /></td>
  </tr>
  <tr>
    <td align="center" valign="top">
    <table width="100%" cellspacing="0" cellpadding="10" style="border:1px solid #cccccc;">
  <tr>
    <td width="" align="right" style="margin:0; font-size:15px; font-weight:bold; font-family: arial, sans-serif; color:#333333;">Client Name</td>
    <td width="15" align="center" valign="middle" style="margin:0; font-size:15px; font-weight:bold; font-family: arial, sans-serif; color:#ff6666; ">:</td>
    <td align="left" valign="middle" style="margin:0; font-size:15px; font-weight:normel; font-family: arial, sans-serif; color:#333333;">{{$show->client_name}}</td>
  </tr>
  <tr>
    <td width="" align="right" style="margin:0; font-size:15px; font-weight:bold; font-family: arial, sans-serif; color:#333333;">Physician Name</td>
    <td width="15" align="center" valign="middle" style="margin:0; font-size:15px; font-weight:bold; font-family: arial, sans-serif; color:#ff6666;">:</td>
    <td align="left" valign="middle" style="margin:0; font-size:15px; font-weight:normel; font-family: arial, sans-serif; color:#333333;">{{$show->physician_name}}</td>
  </tr>
  <tr>
    <td width="" align="right" style="margin:0; font-size:15px; font-weight:bold; font-family: arial, sans-serif; color:#333333;">Physician Contact</td>
    <td width="15" align="center" valign="middle" style="margin:0; font-size:15px; font-weight:bold; font-family: arial, sans-serif; color:#ff6666;">:</td>
    <td align="left" valign="middle" style="margin:0; font-size:15px; font-weight:normel; font-family: arial, sans-serif; color:#333333;">{{$show->physician_contact}}</td>
  </tr>
 <tr>
    <td width="" align="right" style="margin:0; font-size:15px; font-weight:bold; font-family: arial, sans-serif; color:#333333;">Patient First Name</td>
    <td width="15" align="center" valign="middle" style="margin:0; font-size:15px; font-weight:bold; font-family: arial, sans-serif; color:#ff6666;">:</td>
    <td align="left" valign="middle" style="margin:0; font-size:15px; font-weight:normel; font-family: arial, sans-serif; color:#333333;">{{$show->patient_firstname}}</td>
  </tr>
 <tr>
    <td width="" align="right" style="margin:0; font-size:15px; font-weight:bold; font-family: arial, sans-serif; color:#333333;">Patient Last Name</td>
    <td width="15" align="center" valign="middle" style="margin:0; font-size:15px; font-weight:bold; font-family: arial, sans-serif; color:#ff6666;">:</td>
    <td align="left" valign="middle" style="margin:0; font-size:15px; font-weight:normel; font-family: arial, sans-serif; color:#333333;">{{$show->patient_lastname}}</td>
  </tr>
 <tr>
    <td width="" align="right" style="margin:0; font-size:15px; font-weight:bold; font-family: arial, sans-serif; color:#333333;">Patient date of birth</td>
    <td width="15" align="center" valign="middle" style="margin:0; font-size:15px; font-weight:bold; font-family: arial, sans-serif; color:#ff6666;">:</td>
    <td align="left" valign="middle" style="margin:0; font-size:15px; font-weight:normel; font-family: arial, sans-serif; color:#333333;">{{date('d-m-Y',strtotime($show->patient_dob))}}</td>
  </tr>
 <tr>
    <td width="" align="right" style="margin:0; font-size:15px; font-weight:bold; font-family: arial, sans-serif; color:#333333;">Patient contact</td>
    <td width="15" align="center" valign="middle" style="margin:0; font-size:15px; font-weight:bold; font-family: arial, sans-serif; color:#ff6666;">:</td>
    <td align="left" valign="middle" style="margin:0; font-size:15px; font-weight:normel; font-family: arial, sans-serif; color:#333333;">{{$show->patient_contact}}</td>
  </tr>
   <tr>
    <td width="" align="right" style="margin:0; font-size:15px; font-weight:bold; font-family: arial, sans-serif; color:#333333;">Chief Complaint</td>
    <td width="15" align="center" valign="middle" style="margin:0; font-size:15px; font-weight:bold; font-family: arial, sans-serif; color:#ff6666;">:</td>
    <td align="left" valign="middle" style="margin:0; font-size:15px; font-weight:normel; font-family: arial, sans-serif; color:#333333;">{{strip_tags($show->chief_complaint)}}</td>
  </tr>
   <tr>
    <td width="" align="right" style="margin:0; font-size:15px; font-weight:bold; font-family: arial, sans-serif; color:#333333;">Consultation Note</td>
    <td width="15" align="center" valign="middle" style="margin:0; font-size:15px; font-weight:bold; font-family: arial, sans-serif; color:#ff6666;">:</td>
    <td align="left" valign="middle" style="margin:0; font-size:15px; font-weight:normel; font-family: arial, sans-serif; color:#333333;">{{strip_tags($show->consultation_note)}}</td>
  </tr>
</table>

    </td>
  </tr>
   <tr>
   <td><img style="display:block; height:20px; width:1px; margin:0; outline:none; border:0;" src="{{ public_path().'/uploads/spacer.png'}}" height="20" alt="" /></td>
  </tr>
  <tr>
    <td bgcolor="#af0917"><img style="display:block; height:10px; width:1px; margin:0; outline:none; border:0;" src="{{ public_path().'/uploads/spacer.png'}}" height="10" alt="" /></td>
    </tr>
    <tr>
    <td height="50" align="center" valign="middle" bgcolor="#707173" style="margin:0; font-size:15px; font-weight:normel; font-family: arial, sans-serif; color:#ffffff;">Date and time:{{date('d-m-Y H:i A')}}&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Copyright © {{date('Y')}} {{$show->client_name}} &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;IP Address:{{Request::ip()}}
	</td>
    </tr>
</table>
</td>
    <td style="width:20px;">&nbsp;</td>
  </tr>
  <tr>
    <td style="width:20px;">&nbsp;</td>
    <td style="height:20px;">&nbsp;</td>
    <td style="width:20px;">&nbsp;</td>
  </tr>
</table>



</body>
</html>
