@extends('admin.admin_master')
@section('admin')
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>



 <div class="content-wrapper">
	  <div class="container-full">
		<!-- Content Header (Page header) -->
	

<section class="content">

		 <!-- Basic Forms -->
		  <div class="box">
			<div class="box-header with-border">
			  <h4 class="box-title">Add Student </h4>
			  
			</div>
			<!-- /.box-header -->
			<div class="box-body">
			  <div class="row">
				<div class="col">

	 <form method="post" action="{{ route('store.student.registration') }}" enctype="multipart/form-data">
	 	@csrf
					  <div class="row">
						<div class="col-12">	
 

 	
 		<div class="row"> <!-- 1st Row -->
 			
 			<div class="col-md-4">

 		 <div class="form-group">
		<h5>Student Name <span class="text-danger">*</span></h5>
		<div class="controls">
	 <input type="text" name="name" class="form-control" required="" > 
	  </div>		 
	  </div>

 			</div> <!-- End Col md 4 -->


	<div class="col-md-4">

 		 <div class="form-group">
		<h5>Family Name <span class="text-danger">*</span></h5>
		<div class="controls">
	 <input type="text" name="fname" class="form-control" required="" > 
	  </div>		 
	  </div>
	  
 			</div> <!-- End Col md 4 -->



	<div class="col-md-4">

 		 <div class="form-group">
		<h5>Father's Name <span class="text-danger">*</span></h5>
		<div class="controls">
	 <input type="text" name="mname" class="form-control" required=""> 
	  </div>		 
	  </div>
	  
 			</div> <!-- End Col md 4 --> 
 
 			
 		</div> <!-- End 1stRow -->






	<div class="row"> <!-- 2nd Row -->
 			
 			<div class="col-md-4">

 		 <div class="form-group">
		<h5>Mobile Number <span class="text-danger">*</span></h5>
		<div class="controls">
	 <input type="text" name="mobile" class="form-control" required="" > 
	  </div>		 
	  </div>

 			</div> <!-- End Col md 4 -->


	<div class="col-md-4">

 		 <div class="form-group">
		<h5>Address <span class="text-danger">*</span></h5>
		<div class="controls">
	 <input type="text" name="address" class="form-control" required="" > 
	  </div>		 
	  </div>
	  
 			</div> <!-- End Col md 4 -->



	<div class="col-md-4">

 		 <div class="form-group">
		<h5>Gender <span class="text-danger">*</span></h5>
		<div class="controls">
	 <select name="gender" id="gender" required="" class="form-control">
			<option value="" selected="" disabled="">Select Gender</option>
			<option value="Male">Male</option>
			<option value="Female">Female</option>
			 
		</select>
	  </div>		 
	  </div>
	  
 			</div> <!-- End Col md 4 --> 
 
 			
 		</div> <!-- End 2nd Row -->



<div class="row"> <!-- 3rd Row -->


<div class="col-md-4">

 		 <div class="form-group">
		<h5>Nationality <span class="text-danger">*</span></h5>
		<div class="controls">
	 <select name="religion" id="religion" required="" class="form-control">
			<option value="" selected="" disabled="">Select Nationality</option>
			<option value="afghan">Afghan</option>
			<option value="albanian">Albanian</option>
			<option value="algerian">Algerian</option>
			<option value="american">American</option>
			<option value="andorran">Andorran</option>
			<option value="angolan">Angolan</option>
			<option value="antiguans">Antiguans</option>
			<option value="argentinean">Argentinean</option>
			<option value="armenian">Armenian</option>
			<option value="australian">Australian</option>
			<option value="austrian">Austrian</option>
			<option value="azerbaijani">Azerbaijani</option>
			<option value="bahamian">Bahamian</option>
			<option value="bahraini">Bahraini</option>
			<option value="bangladeshi">Bangladeshi</option>
			<option value="barbadian">Barbadian</option>
			<option value="barbudans">Barbudans</option>
			<option value="batswana">Batswana</option>
			<option value="belarusian">Belarusian</option>
			<option value="belgian">Belgian</option>
			<option value="belizean">Belizean</option>
			<option value="beninese">Beninese</option>
			<option value="bhutanese">Bhutanese</option>
			<option value="bolivian">Bolivian</option>
			<option value="bosnian">Bosnian</option>
			<option value="brazilian">Brazilian</option>
			<option value="british">British</option>
			<option value="bruneian">Bruneian</option>
			<option value="bulgarian">Bulgarian</option>
			<option value="burkinabe">Burkinabe</option>
			<option value="burmese">Burmese</option>
			<option value="burundian">Burundian</option>
			<option value="cambodian">Cambodian</option>
			<option value="cameroonian">Cameroonian</option>
			<option value="canadian">Canadian</option>
			<option value="cape verdean">Cape Verdean</option>
			<option value="central african">Central African</option>
			<option value="chadian">Chadian</option>
			<option value="chilean">Chilean</option>
			<option value="chinese">Chinese</option>
			<option value="colombian">Colombian</option>
			<option value="comoran">Comoran</option>
			<option value="congolese">Congolese</option>
			<option value="costa rican">Costa Rican</option>
			<option value="croatian">Croatian</option>
			<option value="cuban">Cuban</option>
			<option value="cypriot">Cypriot</option>
			<option value="czech">Czech</option>
			<option value="danish">Danish</option>
			<option value="djibouti">Djibouti</option>
			<option value="dominican">Dominican</option>
			<option value="dutch">Dutch</option>
			<option value="east timorese">East Timorese</option>
			<option value="ecuadorean">Ecuadorean</option>
			<option value="egyptian">Egyptian</option>
			<option value="emirian">Emirian</option>
			<option value="equatorial guinean">Equatorial Guinean</option>
			<option value="eritrean">Eritrean</option>
			<option value="estonian">Estonian</option>
			<option value="ethiopian">Ethiopian</option>
			<option value="fijian">Fijian</option>
			<option value="filipino">Filipino</option>
			<option value="finnish">Finnish</option>
			<option value="french">French</option>
			<option value="gabonese">Gabonese</option>
			<option value="gambian">Gambian</option>
			<option value="georgian">Georgian</option>
			<option value="german">German</option>
			<option value="ghanaian">Ghanaian</option>
			<option value="greek">Greek</option>
			<option value="grenadian">Grenadian</option>
			<option value="guatemalan">Guatemalan</option>
			<option value="guinea-bissauan">Guinea-Bissauan</option>
			<option value="guinean">Guinean</option>
			<option value="guyanese">Guyanese</option>
			<option value="haitian">Haitian</option>
			<option value="herzegovinian">Herzegovinian</option>
			<option value="honduran">Honduran</option>
			<option value="hungarian">Hungarian</option>
			<option value="icelander">Icelander</option>
			<option value="indian">Indian</option>
			<option value="indonesian">Indonesian</option>
			<option value="iranian">Iranian</option>
			<option value="iraqi">Iraqi</option>
			<option value="irish">Irish</option>
			<option value="israeli">Israeli</option>
			<option value="italian">Italian</option>
			<option value="ivorian">Ivorian</option>
			<option value="jamaican">Jamaican</option>
			<option value="japanese">Japanese</option>
			<option value="jordanian">Jordanian</option>
			<option value="kazakhstani">Kazakhstani</option>
			<option value="kenyan">Kenyan</option>
			<option value="kittian and nevisian">Kittian and Nevisian</option>
			<option value="kuwaiti">Kuwaiti</option>
			<option value="kyrgyz">Kyrgyz</option>
			<option value="laotian">Laotian</option>
			<option value="latvian">Latvian</option>
			<option value="lebanese">Lebanese</option>
			<option value="liberian">Liberian</option>
			<option value="libyan">Libyan</option>
			<option value="liechtensteiner">Liechtensteiner</option>
			<option value="lithuanian">Lithuanian</option>
			<option value="luxembourger">Luxembourger</option>
			<option value="macedonian">Macedonian</option>
			<option value="malagasy">Malagasy</option>
			<option value="malawian">Malawian</option>
			<option value="malaysian">Malaysian</option>
			<option value="maldivan">Maldivan</option>
			<option value="malian">Malian</option>
			<option value="maltese">Maltese</option>
			<option value="marshallese">Marshallese</option>
			<option value="mauritanian">Mauritanian</option>
			<option value="mauritian">Mauritian</option>
			<option value="mexican">Mexican</option>
			<option value="micronesian">Micronesian</option>
			<option value="moldovan">Moldovan</option>
			<option value="monacan">Monacan</option>
			<option value="mongolian">Mongolian</option>
			<option value="moroccan">Moroccan</option>
			<option value="mosotho">Mosotho</option>
			<option value="motswana">Motswana</option>
			<option value="mozambican">Mozambican</option>
			<option value="namibian">Namibian</option>
			<option value="nauruan">Nauruan</option>
			<option value="nepalese">Nepalese</option>
			<option value="new zealander">New Zealander</option>
			<option value="ni-vanuatu">Ni-Vanuatu</option>
			<option value="nicaraguan">Nicaraguan</option>
			<option value="nigerien">Nigerien</option>
			<option value="north korean">North Korean</option>
			<option value="northern irish">Northern Irish</option>
			<option value="norwegian">Norwegian</option>
			<option value="omani">Omani</option>
			<option value="pakistani">Pakistani</option>
			<option value="palauan">Palauan</option>
			<option value="panamanian">Panamanian</option>
			<option value="papua new guinean">Papua New Guinean</option>
			<option value="paraguayan">Paraguayan</option>
			<option value="peruvian">Peruvian</option>
			<option value="polish">Polish</option>
			<option value="portuguese">Portuguese</option>
			<option value="qatari">Qatari</option>
			<option value="romanian">Romanian</option>
			<option value="russian">Russian</option>
			<option value="rwandan">Rwandan</option>
			<option value="saint lucian">Saint Lucian</option>
			<option value="salvadoran">Salvadoran</option>
			<option value="samoan">Samoan</option>
			<option value="san marinese">San Marinese</option>
			<option value="sao tomean">Sao Tomean</option>
			<option value="saudi">Saudi</option>
			<option value="scottish">Scottish</option>
			<option value="senegalese">Senegalese</option>
			<option value="serbian">Serbian</option>
			<option value="seychellois">Seychellois</option>
			<option value="sierra leonean">Sierra Leonean</option>
			<option value="singaporean">Singaporean</option>
			<option value="slovakian">Slovakian</option>
			<option value="slovenian">Slovenian</option>
			<option value="solomon islander">Solomon Islander</option>
			<option value="somali">Somali</option>
			<option value="south african">South African</option>
			<option value="south korean">South Korean</option>
			<option value="spanish">Spanish</option>
			<option value="sri lankan">Sri Lankan</option>
			<option value="sudanese">Sudanese</option>
			<option value="surinamer">Surinamer</option>
			<option value="swazi">Swazi</option>
			<option value="swedish">Swedish</option>
			<option value="swiss">Swiss</option>
			<option value="syrian">Syrian</option>
			<option value="taiwanese">Taiwanese</option>
			<option value="tajik">Tajik</option>
			<option value="tanzanian">Tanzanian</option>
			<option value="thai">Thai</option>
			<option value="togolese">Togolese</option>
			<option value="tongan">Tongan</option>
			<option value="trinidadian or tobagonian">Trinidadian or Tobagonian</option>
			<option value="tunisian">Tunisian</option>
			<option value="turkish">Turkish</option>
			<option value="tuvaluan">Tuvaluan</option>
			<option value="ugandan">Ugandan</option>
			<option value="ukrainian">Ukrainian</option>
			<option value="uruguayan">Uruguayan</option>
			<option value="uzbekistani">Uzbekistani</option>
			<option value="venezuelan">Venezuelan</option>
			<option value="vietnamese">Vietnamese</option>
			<option value="welsh">Welsh</option>
			<option value="yemenite">Yemenite</option>
			<option value="zambian">Zambian</option>
			<option value="zimbabwean">Zimbabwean</option>
			 
		</select>
	  </div>		 
	  </div>
	  
 			</div> <!-- End Col md 4 --> 



 			
 			<div class="col-md-4">

 		 <div class="form-group">
		<h5>Date of Birth <span class="text-danger">*</span></h5>
		<div class="controls">
	 <input type="date" name="dob" class="form-control" required="" > 
	  </div>		 
	  </div>

 			</div> <!-- End Col md 4 -->


	<div class="col-md-4">

 		 <div class="form-group">
		<h5>Discount <span class="text-danger">*</span></h5>
		<div class="controls">
	 <input type="text" name="discount" class="form-control" required="" > 
	  </div>		 
	  </div>
	  
 			</div> <!-- End Col md 4 --> 
 
 			
 		</div> <!-- End 3rd Row -->




<div class="row"> <!-- 4TH Row -->


<div class="col-md-4">

 		 <div class="form-group">
		<h5>Year <span class="text-danger">*</span></h5>
		<div class="controls">
	 <select name="year_id" required="" class="form-control">
			<option value="" selected="" disabled="">Select Year</option>
			 @foreach($years as $year)
			<option value="{{ $year->id }}">{{ $year->name }}</option>
		 	@endforeach
			 
		</select>
	  </div>		 
	  </div>
	  
 			</div> <!-- End Col md 4 --> 



 			
 		<div class="col-md-4">

 		 <div class="form-group">
		<h5>Class <span class="text-danger">*</span></h5>
		<div class="controls">
	 <select name="class_id"  required="" class="form-control">
			<option value="" selected="" disabled="">Select Class</option>
			 @foreach($classes as $class)
			<option value="{{ $class->id }}">{{ $class->name }}</option>
		 	@endforeach
			 
		</select>
	  </div>		 
	  </div>
	  
 			</div> <!-- End Col md 4 --> 


<div class="col-md-4">

 		 <div class="form-group">
		<h5>Group <span class="text-danger">*</span></h5>
		<div class="controls">
	 <select name="group_id"   required="" class="form-control">
			<option value="" selected="" disabled="">Select Group</option>
			 @foreach($groups as $group)
			<option value="{{ $group->id }}">{{ $group->name }}</option>
		 	@endforeach
			 
		</select>
	  </div>		 
	  </div>
	  
 			</div> <!-- End Col md 4 --> 
 
 			
 		</div> <!-- End 4TH Row -->




<div class="row"> <!-- 5TH Row -->


<div class="col-md-4">

 		 <div class="form-group">
		<h5>Shift <span class="text-danger">*</span></h5>
		<div class="controls">
	 <select name="shift_id"   class="form-control">
			<option value="" selected="" disabled="">Select Shift</option>
			 @foreach($shifts as $shift)
			<option value="{{ $shift->id }}">{{ $shift->name }}</option>
		 	@endforeach
			 
		</select>
	  </div>		 
	  </div>
	  
 			</div> <!-- End Col md 4 --> 



 			
 		<div class="col-md-4">

 		<div class="form-group">
		<h5>Profile Image <span class="text-danger">*</span></h5>
		<div class="controls">
	 <input type="file" name="image" class="form-control" id="image" >  </div>
	 </div>
	  
 			</div> <!-- End Col md 4 --> 


<div class="col-md-4">

 		<div class="form-group">
		<div class="controls">
	<img id="showImage" src="{{ url('upload/no_image.jpg') }}" style="width: 100px; width: 100px; border: 1px solid #000000;"> 

	 </div>
	 </div>
	  
 			</div> <!-- End Col md 4 --> 
 
 			
 		</div> <!-- End 5TH Row -->

 
  
							 
						<div class="text-xs-right">
	 <input type="submit" class="btn btn-rounded btn-info mb-5" value="Submit">
						</div>
					</form>

				</div>
				<!-- /.col -->
			  </div>
			  <!-- /.row -->
			</div>
			<!-- /.box-body -->
		  </div>
		  <!-- /.box -->

		</section>


 
 
	  
	  </div>
  </div>

<script type="text/javascript">
	$(document).ready(function(){
		$('#image').change(function(e){
			var reader = new FileReader();
			reader.onload = function(e){
				$('#showImage').attr('src',e.target.result);
			}
			reader.readAsDataURL(e.target.files['0']);
		});
	});
</script>



@endsection
