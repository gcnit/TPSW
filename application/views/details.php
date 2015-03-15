<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
	<head>
            <meta name="viewport" content="width=device-width, initial-scale=1">
		<title>
			Profile
		</title>
		<script src='<?php echo base_url();?>static/js/jquery.min.js'></script>
		<script src='<?php echo base_url();?>static/js/bootstrap.min.js'></script>
		<link href='<?php echo base_url();?>static/css/bootstrap.css' rel="stylesheet" type="text/css">
		<link href='<?php echo base_url();?>static/css/custom.css' rel="stylesheet" type="text/css">
		<script src='<?php echo base_url();?>static/js/respond.js'></script>
        <script src='<?php echo base_url();?>static/js/profile.js'></script>
	</head>
        <?php //var_dump($updated); ?>
        <?php //echo "Details.<br>"; ?>
        <?php //var_dump($details); ?>
	<body>
	
		<?php
		
		foreach ( $details as $key => $value ) {
			$f_data [$key] = $value;
		}
		
		?>
		<?php
		
		$f_pic = array (
				'type' => 'file',
				'name' => 'display_image',
				'id' => 'lefile',
				'required' => '',
				'style'	=>	'display:none'
		);
		$f_submit = array (
				'type' => 'submit',
				'name' => 'lesubmit',
				'id' => 'lesubmit',
				'required' => '',
				'style'	=>	'display:none'
		);
		$f_roll_no = array (
				'type' => 'text',
				'name' => 'roll_no',
				'id' => 'roll_no',
				'class' => '',
				'required' => '',
				'value' => $f_data ['roll_no'] 
		);
		
		$f_name = array (
				'type' => 'text',
				'name' => 'name',
				'id' => 'name',
				'class' => 'form-control',
				'required' => '',
				'value' => ucwords(strtolower($f_data['name'])) 
		);
		
		$f_branch = array (
				'type' => 'text',
				'name' => 'branch',
				'id' => 'branch',
				'class' => 'form-control',
				'required' => '',
				'value' => $f_data ['branch'] 
		);
		$f_registration_no = array (
				'type' => 'text',
				'name' => 'registration_no',
				'id' => 'registration_no',
				'class' => 'form-control',
				'required' => '',
				'value' => $f_data ['registration_no']
		);
		
		$f_current_sem = array (
				'0' => '1st',
				'1' => '2nd',
				'2' => '3rd',
				'3' => '4th',
				'4' => '5th',
				'5' => '6th',
				'6' => '7th',
				'7' => '8th'
		);
		
		$f_sex = array (
				'0' => '--Select--',
				'male' => "Male",
				'female' => "Female"
		);
		
		$f_dob = array (
				'type' => 'text',
				'name' => 'dob',
				'id' => 'dob',
				'class' => 'form-control',
				'required' => '',
				'value' => $f_data ['dob'] 
		);
		
		$f_category = array (
				'gen' => 'General',
				'obc' => 'OBC',
				'sc' => 'SC',
				'st' => 'ST'
		);
		
		$f_email = array (
				'type' => 'text',
				'name' => 'email',
				'id' => 'email',
				'class' => 'form-control',
				'required' => '',
				'value' => $f_data ['email'] 
		);
		
		$f_contact_no_1 = array (
				'type' => 'text',
				'name' => 'contact_no_1',
				'id' => 'contact_no_1',
				'class' => 'form-control',
				'required' => '',
				'value' => $f_data ['contact_no_1'] 
		);
		
		$f_contact_no_2 = array (
				'type' => 'text',
				'name' => 'contact_no_2',
				'id' => 'contact_no_2',
				'class' => 'form-control',
				'required' => '',
				'value' => $f_data ['contact_no_2'] 
		);
		
		$f_home_town = array (
				'type' => 'text',
				'name' => 'home_town',
				'id' => 'home_town',
				'class' => 'form-control',
				'required' => '',
				'value' => $f_data ['home_town']
		);
		
		$f_home_address = array (
				'type' => 'text',
				'name' => 'home_address',
				'id' => 'home_address',
				'class' => 'form-control',
				'required' => '',
				'value' => $f_data ['home_address'],
				'rows'	=>	'3'
		);
		
		$f_hostel_address = array (
				'type' => 'text',
				'name' => 'hostel_address',
				'id' => 'hostel_address',
				'class' => 'form-control',
				'required' => '',
				'value' => $f_data ['hostel_address'],
				'rows'	=>	'3' 
		);
		
		$f_sgpa_1 = array (
				'type' => 'text',
				'name' => 'sgpa_1',
				'id' => 'sgpa_1',
				'class' => 'form-control',
				'required' => '',
				'value' => $f_data ['sgpa_1'] 
		);
		
		$f_sgpa_2 = array (
				'type' => 'text',
				'name' => 'sgpa_2',
				'id' => 'sgpa_2',
				'class' => 'form-control',
				'required' => '',
				'value' => $f_data ['sgpa_2'] 
		);
		
		$f_sgpa_3 = array (
				'type' => 'text',
				'name' => 'sgpa_3',
				'id' => 'sgpa_3',
				'class' => 'form-control',
				'required' => '',
				'value' => $f_data ['sgpa_3'] 
		);
		
		$f_sgpa_4 = array (
				'type' => 'text',
				'name' => 'sgpa_4',
				'id' => 'sgpa_4',
				'class' => 'form-control',
				'required' => '',
				'value' => $f_data ['sgpa_4'] 
		);
		
		$f_sgpa_5 = array (
				'type' => 'text',
				'name' => 'sgpa_5',
				'id' => 'sgpa_5',
				'class' => 'form-control',
				'required' => '',
				'value' => $f_data ['sgpa_5'] 
		);
		
		$f_sgpa_6 = array (
				'type' => 'text',
				'name' => 'sgpa_6',
				'id' => 'sgpa_6',
				'class' => 'form-control',
				'required' => '',
				'value' => $f_data ['sgpa_6'] 
		);
		
		$f_sgpa_7 = array (
				'type' => 'text',
				'name' => 'sgpa_7',
				'id' => 'sgpa_7',
				'class' => 'form-control',
				'required' => '',
				'value' => $f_data ['sgpa_7'] 
		);
		
		$f_sgpa_8 = array (
				'type' => 'text',
				'name' => 'sgpa_8',
				'id' => 'sgpa_8',
				'class' => 'form-control',
				'required' => '',
				'value' => $f_data ['sgpa_8'] 
		);
		
		$f_cgpa = array (
				'type' => 'text',
				'name' => 'cgpa',
				'id' => 'cgpa',
				'class' => 'form-control',
				'required' => '',
				'value' => $f_data ['cgpa'] 
		);
		
		$f_supplies = array (
				'type' => 'text',
				'name' => 'supplies',
				'id' => 'supplies',
				'class' => 'form-control',
				'required' => '',
				'value' => $f_data ['supplies'] 
		);
		
		$f_active_supplies = array (
				'type' => 'text',
				'name' => 'active_supplies',
				'id' => 'active_supplies',
				'class' => 'form-control',
				'required' => '',
				'value' => $f_data ['active_supplies'] 
		);
		
		$f_aieee_air = array (
				'type' => 'text',
				'name' => 'aieee_air',
				'id' => 'aieee_air',
				'class' => 'form-control',
				'required' => '',
				'value' => $f_data ['aieee_air'] 
		);
		
		$f_gap_12_btech = array (
				'type' => 'text',
				'name' => 'gap_12_btech',
				'id' => 'gap_12_btech',
				'class' => 'form-control',
				'required' => '',
				'value' => $f_data ['gap_12_btech'] 
		);
		
		$f_12_board = array (
				'type' => 'text',
				'name' => '12_board',
				'id' => '12_board',
				'class' => 'form-control',
				'required' => '',
				'value' => $f_data ['12_board'] 
		);
		
		$f_12_school = array (
				'type' => 'text',
				'name' => '12_school',
				'id' => '12_school',
				'class' => 'form-control',
				'required' => '',
				'value' => $f_data ['12_school'] 
		);
		
		$f_12_passing_year = array (
				'type' => 'text',
				'name' => '12_passing_year',
				'id' => '12_passing_year',
				'class' => 'form-control',
				'required' => '',
				'value' => $f_data ['12_passing_year'] 
		);
		
		$f_12_obtained_marks = array (
				'type' => 'text',
				'name' => '12_obtained_marks',
				'id' => '12_obtained_marks',
				'class' => 'form-control',
				'required' => '',
				'value' => $f_data ['12_obtained_marks'] 
		);
		
		$f_12_total_marks = array (
				'type' => 'text',
				'name' => '12_total_marks',
				'id' => '12_total_marks',
				'class' => 'form-control',
				'required' => '',
				'value' => $f_data ['12_total_marks'] 
		);
		
		$f_12_percent = array (
				'type' => 'text',
				'name' => '12_percent',
				'id' => '12_percent',
				'class' => 'form-control',
				'required' => '',
				'value' => $f_data ['12_percent'] 
		);
		
		$f_10_board = array (
				'type' => 'text',
				'name' => '10_board',
				'id' => '10_board',
				'class' => 'form-control',
				'required' => '',
				'value' => $f_data ['10_board'] 
		);
		
		$f_10_school = array (
				'type' => 'text',
				'name' => '10_school',
				'id' => '10_school',
				'class' => 'form-control',
				'required' => '',
				'value' => $f_data ['10_school'] 
		);
		
		$f_10_passing_year = array (
				'type' => 'text',
				'name' => '10_passing_year',
				'id' => '10_passing_year',
				'class' => 'form-control',
				'required' => '',
				'value' => $f_data ['10_passing_year'] 
		);
		
		$f_10_obtained_marks = array (
				'type' => 'text',
				'name' => '10_obtained_marks',
				'id' => '10_obtained_marks',
				'class' => 'form-control',
				'required' => '',
				'value' => $f_data ['10_obtained_marks'] 
		);
		
		$f_10_total_marks = array (
				'type' => 'text',
				'name' => '10_total_marks',
				'id' => '10_total_marks',
				'class' => 'form-control',
				'required' => '',
				'value' => $f_data ['10_total_marks'] 
		);
		
		$f_10_percent = array (
				'type' => 'text',
				'name' => '10_percent',
				'id' => '10_percent',
				'class' => 'form-control',
				'required' => '',
				'value' => $f_data ['10_percent'] 
		);
		
		$f_father_name = array (
				'type' => 'text',
				'name' => 'father_name',
				'id' => 'father_name',
				'class' => 'form-control',
				'required' => '',
				'value' => $f_data ['father_name'] 
		);
		
		$f_mother_name = array (
				'type' => 'text',
				'name' => 'mother_name',
				'id' => 'mother_name',
				'class' => 'form-control',
				'required' => '',
				'value' => $f_data ['mother_name'] 
		);
		
		$f_height = array (
				'type' => 'text',
				'name' => 'height',
				'id' => 'height',
				'class' => 'form-control',
				'required' => '',
				'value' => $f_data ['height'] 
		);
		
		$f_weight = array (
				'type' => 'text',
				'name' => 'weight',
				'id' => 'weight',
				'class' => 'form-control',
				'required' => '',
				'value' => $f_data ['weight'] 
		);
		
		$f_power_left = array (
				'type' => 'text',
				'name' => 'power_left',
				'id' => 'power_left',
				'class' => 'form-control',
				'required' => '',
				'value' => $f_data ['power_left'] 
		);
		
		$f_power_right = array (
				'type' => 'text',
				'name' => 'power_right',
				'id' => 'power_right',
				'class' => 'form-control',
				'required' => '',
				'value' => $f_data ['power_right'] 
		);
		
		$f_disability = array (
				'yes' => 'Yes',
				'no' => 'No' 
		);
		
		$f_disability_type = array (
				'type' => 'text',
				'name' => 'disability_type',
				'id' => 'disability_type',
				'class' => 'form-control',
				'required' => '',
				'value' => $f_data ['disability_type'] 
		);
		
		$f_disability_percent = array (
				'type' => 'text',
				'name' => 'disability_percent',
				'id' => 'disability_percent',
				'class' => 'form-control',
				'required' => '',
				'value' => $f_data ['disability_percent'] 
		);
		
		$f_scholastic_achievements = array (
				'type' => 'text',
				'name' => 'scholastic_achievements',
				'id' => 'scholastic_achievements',
				'class' => 'form-control',
				'required' => '',
				'value' => ($f_data ['scholastic_achievements']),
				'rows'	=>	'3' 
		);
		
		$f_academic_projects = array (
				'type' => 'text',
				'name' => 'academic_projects',
				'id' => 'academic_projects',
				'class' => 'form-control',
				'required' => '',
				'value' => nl2br($f_data ['academic_projects']),
				'rows'	=>	'3' 
		);
		
		$f_practical_training = array (
				'type' => 'text',
				'name' => 'practical_training',
				'id' => 'practical_training',
				'class' => 'form-control',
				'required' => '',
				'value' => nl2br($f_data ['practical_training']),
				'rows'	=>	'3' 
		);
		
		$f_skills_capabilities = array (
				'type' => 'text',
				'name' => 'skills_capabilities',
				'id' => 'skills_capabilities',
				'class' => 'form-control',
				'required' => '',
				'value' => nl2br($f_data ['skills_capabilities']),
				'rows'	=>	'3' 
		);
		
		$f_position_responsibility = array (
				'type' => 'text',
				'name' => 'position_responsibility',
				'id' => 'position_responsibility',
				'class' => 'form-control',
				'required' => '',
				'value' => nl2br($f_data ['position_responsibility']),
				'rows'	=>	'3' 
		);
		
		$f_extra_curriculars = array (
				'type' => 'text',
				'name' => 'extra_curriculars',
				'id' => 'extra_curriculars',
				'class' => 'form-control',
				'required' => '',
				'value' => nl2br($f_data ['extra_curriculars']),
				'rows'	=>	'3' 
		);
		
		$class = array(
				'class' => 'form-horizontal',
				'role'	=>	'form'
		);
		
		?>
	<!-- Header Start -->
		<div>
                    <h1 class="text-center database">
                        <a href=<?php echo base_url(); ?> class="datab">
                            Database
                        </a>
                        <small>
                            <span class="dropdown flright" role="presentation">
                                <a  href = "#" id= "dropdown" data-toggle="dropdown" class="dropdown-toggle flright" role="button" aria-haspopup="true" aria-expanded="false">
                                    <span class="glyphicon glyphicon-cog" aria-hidden="true"></span>
                                    <span class="caret"></span>
                                </a>
                                <ul class="dropdown-menu absright" role="menu" aria-labelledby="dLabel">
                                    <li role="presentation">
                                        <a role="menuitem" tabindex="-1" href="../temp/password.php">
                                            <span class="glyphicon glyphicon-lock" aria-hidden="true"></span>
                                            Change Password
                                        </a>
                                    </li>
                                    <li role="presentation">
                                        <a role="menuitem" tabindex="-1" href=<?php echo base_url()."details/logout"; ?>>
                                            <span class="glyphicon glyphicon-log-out" aria-hidden="true"></span>
                                            Logout
                                        </a>
                                    </li>
                                </ul>
                            </span>
                        </small>
                    </h1>
		</div>
	<!-- Header End-->
	<!-- Main Body Start-->
		<div class="row mainpart">
			<!-- Start Right Part (Image Part) -->
			<div class="col-lg-4 rightpr">
				<!-- Name Part Start-->
				<h2 class="text-center bluebox"><?php echo ucwords(strtolower($f_data['name'])); ?></h2>
				<!-- Name Part End-->
				<!-- Photo Start-->
				<div id="picture" class="pic">
					<?php 
						if ($f_data['image'] == '') {
							$src = base_url()."static/images/default.png?".time();
						}
						else {
							$src = base_url()."static/images/".$f_data['image']."?".time();
						}
					?>
					<img src= "<?php echo $src; ?>"  width=100%>
					<div class="editbutt">
						<a href = "#" id= "editbutton" onclick=show('newpic','picture') data-toggle="tooltip" title="Update picture">
							<span class="glyphicon glyphicon-pencil" aria-hidden="true">
							</span>
						</a>
					</div>
				</div>
                                <!-- Photo End-->
				<!-- Roll No. Start-->
				<div>
					<h3 class="text-center rollno bluebox"><?php echo $f_data['roll_no']; ?></h3>
				</div>
				<!-- Roll No. End-->
			
				<!-- Image Form Start -->
				<div id="newpic" style=display:none>
					<?php $attributes = array('id' => 'Imgfrm','enctype' => 'multipart/form-data');?>
					<?php echo form_open(base_url().'details/submit',$attributes); ?>
						<?php echo form_input($f_pic); ?>
						<div class="input-append">
							<a class="btn btn1" onclick="$('input[id=lefile]').click();">Select File</a>
							<a href=<?php echo base_url()."details/delete"; ?> id= "trash"data-toggle="tooltip" title="Delete image" onclick="return window.confirm('Do you really want to delete your photo?')"><span class="glyphicon glyphicon-trash right0" aria-hidden="true"></span></a>
						</div>
						<?php 
							if ($f_data['image'] == '') {
								$src = base_url()."static/images/default.png";
							}
							else {
								$src = base_url()."static/images/".$f_data['image']."?".time();
							}
						?>
						<br>
						<img id="preview" src="<?php echo $src; ?>" alt="your image" /width=100%>
						
						<br><br>
						<?php //echo form_input($f_submit); ?>
						<div class="input-append">
							<button type="submit" name = "update_image" value = "update_image" class="btn btn-primary btn2">Update</button>
							<button type="button" onclick=show('picture','newpic') class="btn btn-default right0">Cancel</button>
						</div>
					<?php echo form_close(); ?>
					<br><br>
				</div>
				<!-- Image Form End -->
			</div>
			<!-- End Right Part (Image Part) -->
			<!-- Start Left Part (Details Part) -->
			<div class="leftpr">
				<!-- Start Data Panels -->
                                <?php //var_dump($updated); ?>
				<div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
					<!-- Basic Info Start -->
					<div class="panel panel-default">
						<a data-toggle="collapse" data-parent="#accordion" href="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
							<div class="panel-heading" role="tab" id="headingOne">
								<h4 class="panel-title">
									<div>Basic Info</div>
								</h4>
							</div>
						</a>
						<div id="collapseOne" class="panel-collapse collapse 
                                                     <?php
                                                     //$updated['updated_resume'] = 1;
                                                        if (isset($updated[sha1(md5('success_basic'))]) || isset($updated["error_basic"]) || empty($updated)) {
                                                            echo "in";
                                                        }
                                                     ?>
                                                     " role="tabpanel" aria-labelledby="headingOne">
							<div class="panel-body saman">
                                                                <?php
                                                                    if(isset($updated[sha1(md5("success_basic"))])) {
                                                                    echo '<div class="alert alert-success alert-dismissible fade in" style="text-align:center" role="alert">
                                                                        <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">x</span></button>
                                                                        <p>Updated Successfully!</p>
                                                                    </div>';
                                                                    }
                                                                ?>
								<!-- Basic Info text version start -->
								<div id="clickmeid1" 
                                                                    <?php 
                                                                        if(isset($updated["error_basic"])) {
                                                                            echo 'style=display:none';
                                                                        }
                                                                        else {
                                                                            echo "style=display:block";
                                                                        }
                                                                    ?>
                                                                >
									<div align="right">
										<a  href = "#" id= "clickmeida1" onclick=show('comment1','clickmeid1') data-toggle="tooltip" title="Edit">
                                                                                    <span class="glyphicon glyphicon-pencil" aria-hidden="true"></span>
                                                                                </a>
									</div>
									<div>
										<div class="row">
											<label class="control-label col-lg-3 col-md-3 col-sm-3 namkaran">Name:</label>
                                                                                        <div class="col-lg-9 col-md-9 col-sm-9 entry"><?php echo ucwords(strtolower($f_data['name'])); ?></div>
										</div>
										<div class="row">
											<label class="control-label col-lg-3 col-md-3 col-sm-3 namkaran">Registration No:</label>
											<div class="col-lg-9 col-md-9 col-sm-9 entry"><?php echo $f_data['registration_no']; ?></div>
										</div>
										<div class="row">
											<label class="control-label col-lg-3 col-md-3 col-sm-3 namkaran">Current Semester:</label>
											<div class="col-lg-9 col-md-9 col-sm-9 entry">
												<?php 
													if (isset($f_current_sem[$f_data['current_sem']])) {
														echo $f_current_sem[$f_data['current_sem']]; 
													}
													?>
											</div>
										</div>
										<div class="row">
											<label class="control-label col-lg-3 col-md-3 col-sm-3 namkaran">Sex:</label>
											<div class="col-lg-9 col-md-9 col-sm-9 entry">
												<?php 
													if(isset($f_sex[$f_data['sex']])) {
														echo $f_sex[$f_data['sex']];
													} 
												?>
											</div>
										</div>
										<div class="row">
											<label class="control-label col-lg-3 col-md-3 col-sm-3 namkaran">Date of Birth:</label>
											<div class="col-lg-9 col-md-9 col-sm-9 entry"><?php echo $f_data['dob']; ?></div>
										</div>
										<div class="row">
											<label class="control-label col-lg-3 col-md-3 col-sm-3 namkaran">Category:</label>
											<div class="col-lg-9 col-md-9 col-sm-9 entry">
												<?php 
													if (isset( $f_category[$f_data['category']])) {
														echo $f_category[$f_data['category']]; 
													}
												?>
											</div>
										</div>
									</div>
								</div>
								<!-- Basic Info text version End -->
								<!-- Basic Info Form Start -->
								<div id="comment1" 
                                                                     <?php
                                                                            if (isset($updated["error_basic"])) {
                                                                                echo "style=display:block";

                                                                            }
                                                                            else {
                                                                                echo "style=display:none";
                                                                            }
                                                                        ?>
                                                                     >
									<?php echo form_open(base_url().'details/submit',$class); ?>
										<div class="form-group">
											<label class="control-label col-lg-3 col-md-3 col-sm-3 namkaran">Name:</label>
											<div class="col-lg-8"><?php echo ucwords(strtolower(form_input($f_name))); ?></div>
										</div>
                                                                                <span style='color: red;text-align: center'> 
                                                                                    <b><?php echo form_error('name','<div class="error">', '</div>')?></b><br>
                                                                                </span>
										<div class="form-group">
											<label class="control-label col-lg-3 col-md-3 col-sm-3 namkaran">Registration No.:</label>
											<div class="col-lg-8"><?php echo form_input($f_registration_no); ?></div>
										</div>
                                                                                <span style='color: red;text-align: center'> 
                                                                                    <b><?php echo form_error('registration_no','<div class="error">', '</div>')?></b><br>
                                                                                </span>
										<div class="form-group">
											<label class="control-label col-lg-3 col-md-3 col-sm-3 namkaran">Current Semester:</label>
											<div class="col-lg-8"><?php echo form_dropdown("current_sem", $f_current_sem,$f_data['current_sem'],'class = "form-control"'); ?></div>
										</div>
                                                                                <span style='color: red;text-align: center'> 
                                                                                    <b><?php echo form_error('current_sem','<div class="error">', '</div>')?></b><br>
                                                                                </span>
										<div class="form-group">
											<label class="control-label col-lg-3 col-md-3 col-sm-3 namkaran">Sex:</label>
											<div class="col-lg-8"><?php echo form_dropdown("sex", $f_sex,$f_data['sex'],'class = "form-control"'); ?></div>
										</div>
                                                                                <span style='color: red;text-align: center'> 
                                                                                    <b><?php echo form_error('sex','<div class="error">', '</div>')?></b><br>
                                                                                </span>
										<div class="form-group">
											<label class="control-label col-lg-3 col-md-3 col-sm-3 namkaran">Date of Birth:</label>
											<div class="col-lg-8"><?php echo form_input($f_dob); ?></div>
										</div>
                                                                                <span style='color: red;text-align: center'> 
                                                                                    <b><?php echo form_error('dob','<div class="error">', '</div>')?></b><br>
                                                                                </span>
										<div class="form-group">
											<label class="control-label col-lg-3 col-md-3 col-sm-3 namkaran">Category:</label>
											<div class="col-lg-8"><?php echo form_dropdown("category", $f_category,$f_data['category'],'class = "form-control"'); ?></div>
										</div>
                                                                                <span style='color: red;text-align: center'> 
                                                                                    <b><?php echo form_error('category','<div class="error">', '</div>')?></b><br>
                                                                                </span>
										<div>
											<button type="submit" name = "update_basic" value = "update_basic" class="btn btn-primary col-lg-offset-2">Update</button>
                                                                                        <button type="button" onclick=show('clickmeid1','comment1') value="Cancel" class="btn btn-default right0">Cancel</button>
										</div>
									</form>
								</div>
								<!-- Basic Info Form End -->
							</div>						
						</div>
					</div>
					<!-- Basic Info End -->
                                        <!-- Contact Info Start -->
					<div class="panel panel-default">
                                            <a class="collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
						<div class="panel-heading" role="tab" id="headingTwo">
							<h4 class="panel-title">
                                                            Contact Info
							</h4>
						</div>
                                            </a>
                                            <div id="collapseTwo" class="panel-collapse collapse
                                                 <?php
                                                    if (isset($updated[sha1(md5('success_contact'))]) || isset($updated['error_contact'])) {
                                                        echo "in";
                                                    }
                                                 ?>
                                                " role="tabpanel" aria-labelledby="headingTwo">
                                                <div class="panel-body saman">
                                                    <?php
                                                        if(isset($updated[sha1(md5("success_contact"))])) {
                                                            echo '<div class="alert alert-success alert-dismissible fade in" style="text-align:center" role="alert">
                                                                <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">x</span></button>
                                                                <p>Updated Successfully!</p>
                                                            </div>';
                                                        }
                                                    ?>
                                                    <!-- Contact Info text version start -->
                                                    <div>
                                                        <div align="right">
                                                            <a  href = "#" id= "clickmeida2" onclick=show('comment2','clickmeid2') data-toggle="tooltip" title="Edit">
                                                                <span class="glyphicon glyphicon-pencil" aria-hidden="true"></span>
                                                            </a>
                                                        </div>
                                                        <div id="clickmeid2"
                                                             <?php
                                                                if (isset($updated["error_contact"])) {
                                                                    echo "style=display:none";

                                                                }
                                                                else {
                                                                    echo "style=display:block";
                                                                }
                                                            ?>
                                                             >
                                                            <div class="row">
                                                                    <label class="control-label col-lg-3 col-md-3 col-sm-3 namkaran">Email Id:</label>
                                                                    <div class="col-lg-9 col-md-9 col-sm-9 entry"><?php echo $f_data['email']; ?></div>
                                                            </div>
                                                            <div class="row">
                                                                    <label class="control-label col-lg-3 col-md-3 col-sm-3 namkaran">Contact No 1:</label>
                                                                    <div class="col-lg-9 col-md-9 col-sm-9 entry"><?php echo $f_data['contact_no_1']; ?></div>
                                                            </div>
                                                            <div class="row">
                                                                    <label class="control-label col-lg-3 col-md-3 col-sm-3 namkaran">Contact No 2:</label>
                                                                    <div class="col-lg-9 col-md-9 col-sm-9 entry"><?php echo $f_data['contact_no_2']; ?></div>
                                                            </div>
                                                            <div class="row">
                                                                    <label class="control-label col-lg-3 col-md-3 col-sm-3 namkaran">Hometown:</label>
                                                                    <div class="col-lg-9 col-md-9 col-sm-9 entry"><?php echo $f_data['home_town']; ?></div>
                                                            </div>
                                                            <div class="row">
                                                                    <label class="control-label col-lg-3 col-md-3 col-sm-3 namkaran">Home Address:</label>
                                                                    <div class="col-lg-9 col-md-9 col-sm-9 entry"><?php echo $f_data['home_address']; ?></div>
                                                            </div>
                                                            <div class="row">
                                                                    <label class="control-label col-lg-3 col-md-3 col-sm-3 namkaran">Hostel Address:</label>
                                                                    <div class="col-lg-9 col-md-9 col-sm-9 entry"><?php echo $f_data['hostel_address']; ?></div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <!-- Contact Info text version End -->
                                                    <!-- Contact Info form start -->
                                                    <div id="comment2" 
                                                         <?php
                                                            if (isset($updated["error_contact"])) {
                                                                echo "style=display:block";

                                                            }
                                                            else {
                                                                echo "style=display:none";
                                                            }
                                                        ?>
                                                         >
                                                        <?php echo form_open(base_url().'details/submit',$class); ?>
                                                            <div class="form-group">
                                                                <label class="control-label col-lg-3 col-md-3 col-sm-3 namkaran">Email Id:</label>
                                                                <div class="col-lg-8"><?php echo form_input($f_email); ?></div>
                                                            </div>
                                                            <span style='color: red;text-align: center'> 
                                                                <b><?php echo form_error('email','<div class="error">', '</div>')?></b><br>
                                                            </span>
                                                            <div class="form-group">
                                                                <label class="control-label col-lg-3 col-md-3 col-sm-3 namkaran">Contact No 1.:</label>
                                                                <div class="col-lg-8"><?php echo form_input($f_contact_no_1); ?></div>
                                                            </div>
                                                            <span style='color: red;text-align: center'> 
                                                                <b><?php echo form_error('contact_no_1','<div class="error">', '</div>')?></b><br>
                                                            </span>
                                                            <div class="form-group">
                                                                <label class="control-label col-lg-3 col-md-3 col-sm-3 namkaran">Contact No 2:</label>
                                                                <div class="col-lg-8"><?php echo form_input($f_contact_no_2); ?></div>
                                                            </div>
                                                            <span style='color: red;text-align: center'> 
                                                                <b><?php echo form_error('contact_no_2','<div class="error">', '</div>')?></b><br>
                                                            </span>
                                                            <div class="form-group">
                                                                <label class="control-label col-lg-3 col-md-3 col-sm-3 namkaran">Home Town:</label>
                                                                <div class="col-lg-8"><?php echo form_input($f_home_town); ?></div>
                                                            </div>
                                                            <span style='color: red;text-align: center'> 
                                                                <b><?php echo form_error('home_town','<div class="error">', '</div>')?></b><br>
                                                            </span>
                                                            <div class="form-group">
                                                                <label class="control-label col-lg-3 col-md-3 col-sm-3 namkaran">Home Address:</label>
                                                                <div class="col-lg-8"><?php echo form_textarea($f_home_address); ?></div>
                                                            </div>
                                                            <span style='color: red;text-align: center'> 
                                                                <b><?php echo form_error('home_address','<div class="error">', '</div>')?></b><br>
                                                            </span>
                                                            <div class="form-group">
                                                                <label class="control-label col-lg-3 col-md-3 col-sm-3 namkaran">Hostel Address:</label>
                                                                <div class="col-lg-8"><?php echo form_textarea($f_hostel_address); ?></div>
                                                            </div>
                                                            <span style='color: red;text-align: center'> 
                                                                <b><?php echo form_error('hostel_address','<div class="error">', '</div>')?></b><br>
                                                            </span>
                                                            <div>
                                                                <button type="submit" name = "update_contact" value = "update_contact" class="btn btn-primary col-lg-offset-2">Update</button>
                                                                <button type="button" onclick=show('clickmeid2','comment2') value="Cancel" class="btn btn-default right0">Cancel</button>
                                                            </div>
                                                        <?php echo form_close(); ?>
                                                    </div>
                                                    <!-- Contact Info form end -->
                                                </div>
                                            </div>
					</div>
                                        <!-- Contact Info End -->
                                        <!-- Academic Performance Start -->
					<div class="panel panel-default">
                                            <a class="collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
						<div class="panel-heading" role="tab" id="headingThree">
                                                    <h4 class="panel-title">	
                                                        Academic Performance
                                                    </h4>
						</div>
                                            </a>
                                            <div id="collapseThree" class="panel-collapse collapse
                                                 <?php
                                                    if (isset($updated[sha1(md5('success_academic'))]) || isset($updated['error_academic'])) {
                                                        echo "in";
                                                    }
                                                 ?>
                                                 " role="tabpanel" aria-labelledby="headingThree">
                                                <div class="panel-body saman">
                                                    <?php
                                                        if(isset($updated[sha1(md5("success_academic"))])) {
                                                            echo '<div class="alert alert-success alert-dismissible fade in" style="text-align:center" role="alert">
                                                                <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">x</span></button>
                                                                <p>Updated Successfully!</p>
                                                            </div>';
                                                        }
                                                    ?>
                                                    <!-- Academic Performance text version start -->
                                                    <div>
                                                        <div align="right">
                                                            <a  href = "#" id= "clickmeida3" onclick=show('comment3','clickmeid3') data-toggle="tooltip" title="Edit">
                                                                <span class="glyphicon glyphicon-pencil" aria-hidden="true"></span>
                                                            </a>
                                                        </div>
                                                        <div id="clickmeid3"
                                                             <?php
                                                                if (isset($updated["error_academic"])) {
                                                                    echo "style=display:none";

                                                                }
                                                                else {
                                                                    echo "style=display:block";
                                                                }
                                                            ?>
                                                             >
                                                            <div class="row">
                                                                    <label class="control-label col-lg-3 col-md-3 col-sm-3 namkaran">1st Semester's SGPA:</label>
                                                                    <div class="col-lg-9 col-md-9 col-sm-9 entry"><?php echo $f_data['sgpa_1']; ?></div>
                                                            </div>
                                                            <div class="row">
                                                                    <label class="control-label col-lg-3 col-md-3 col-sm-3 namkaran">2nd Semester's SGPA:</label>
                                                                    <div class="col-lg-9 col-md-9 col-sm-9 entry"><?php echo $f_data['sgpa_2']; ?></div>
                                                            </div>
                                                            <div class="row">
                                                                    <label class="control-label col-lg-3 col-md-3 col-sm-3 namkaran">3rd Semester's SGPA:</label>
                                                                    <div class="col-lg-9 col-md-9 col-sm-9 entry"><?php echo $f_data['sgpa_3']; ?></div>
                                                            </div>
                                                            <div class="row">
                                                                    <label class="control-label col-lg-3 col-md-3 col-sm-3 namkaran">4th Semester's SGPA:</label>
                                                                    <div class="col-lg-9 col-md-9 col-sm-9 entry"><?php echo $f_data['sgpa_4']; ?></div>
                                                            </div>
                                                            <div class="row">
                                                                    <label class="control-label col-lg-3 col-md-3 col-sm-3 namkaran">5th Semester's SGPA:</label>
                                                                    <div class="col-lg-9 col-md-9 col-sm-9 entry"><?php echo $f_data['sgpa_5']; ?></div>
                                                            </div>
                                                            <div class="row">
                                                                    <label class="control-label col-lg-3 col-md-3 col-sm-3 namkaran">6th Semester's SGPA:</label>
                                                                    <div class="col-lg-9 col-md-9 col-sm-9 entry"><?php echo $f_data['sgpa_6']; ?></div>
                                                            </div>
                                                            <div class="row">
                                                                    <label class="control-label col-lg-3 col-md-3 col-sm-3 namkaran">7th Semester's SGPA:</label>
                                                                    <div class="col-lg-9 col-md-9 col-sm-9 entry"><?php echo $f_data['sgpa_7']; ?></div>
                                                            </div>
                                                            <div class="row">
                                                                    <label class="control-label col-lg-3 col-md-3 col-sm-3 namkaran">8th Semester's SGPA:</label>
                                                                    <div class="col-lg-9 col-md-9 col-sm-9 entry"><?php echo $f_data['sgpa_8']; ?></div>
                                                            </div>
                                                            <div class="row">
                                                                    <label class="control-label col-lg-3 col-md-3 col-sm-3 namkaran">CGPA:</label>
                                                                    <div class="col-lg-9 col-md-9 col-sm-9 entry"><?php echo $f_data['cgpa']; ?></div>
                                                            </div>
                                                            <div class="row">
                                                                    <label class = "control-label col-lg-3 col-md-3 col-sm-3 namkaran">Supplies till <?php if (isset($f_current_sem[$f_data['current_sem']])){echo $f_current_sem[$f_data['current_sem']];}else {echo "current";} ?> Sem:</label>
                                                                    <div class="col-lg-9 col-md-9 col-sm-9 entry"><?php echo $f_data['supplies']; ?></div>
                                                            </div>
                                                            <div class="row">
                                                                    <label class = "control-label col-lg-3 col-md-3 col-sm-3 namkaran">Active Supplies:</label>
                                                                    <div class="col-lg-9 col-md-9 col-sm-9 entry"><?php echo $f_data['active_supplies']; ?></div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <!-- Academic Performance text version end -->
                                                    <!-- Academic Performance form start -->
                                                        <div id="comment3" 
                                                             <?php
                                                                if (isset($updated["error_academic"])) {
                                                                    echo "style=display:block";

                                                                }
                                                                else {
                                                                    echo "style=display:none";
                                                                }
                                                            ?>
                                                             >
                                                            <?php echo form_open(base_url().'details/submit',$class); ?>
                                                                    
                                                                    <div class="form-group">
                                                                            <label class="control-label col-lg-3 col-md-3 col-sm-3 namkaran">1st Semester's SGPA:</label>
                                                                            <div class="col-lg-8"><?php echo form_input($f_sgpa_1); ?></div>
                                                                    </div>
                                                                    <span style='color: red;text-align: center'> 
                                                                        <b><?php echo form_error('sgpa_1','<div class="error">', '</div>')?></b><br>
                                                                    </span>
                                                                    <div class="form-group">
                                                                            <label class="control-label col-lg-3 col-md-3 col-sm-3 namkaran">2nd Semester's SGPA:</label>
                                                                            <div class="col-lg-8"><?php echo form_input($f_sgpa_2); ?></div>
                                                                    </div>
                                                                    <span style='color: red;text-align: center'> 
                                                                        <b><?php echo form_error('sgpa_2','<div class="error">', '</div>')?></b><br>
                                                                    </span>
                                                                    <div class="form-group">
                                                                            <label class="control-label col-lg-3 col-md-3 col-sm-3 namkaran">3rd Semester's SGPA:</label>
                                                                            <div class="col-lg-8"><?php echo form_input($f_sgpa_3); ?></div>
                                                                    </div>
                                                                    <span style='color: red;text-align: center'> 
                                                                        <b><?php echo form_error('sgpa_3','<div class="error">', '</div>')?></b><br>
                                                                    </span>
                                                                    <div class="form-group">
                                                                            <label class="control-label col-lg-3 col-md-3 col-sm-3 namkaran">4th Semester's SGPA:</label>
                                                                            <div class="col-lg-8"><?php echo form_input($f_sgpa_4); ?></div>
                                                                    </div>
                                                                    <span style='color: red;text-align: center'> 
                                                                        <b><?php echo form_error('sgpa_4','<div class="error">', '</div>')?></b><br>
                                                                    </span>
                                                                    <div class="form-group">
                                                                            <label class="control-label col-lg-3 col-md-3 col-sm-3 namkaran">5th Semester's SGPA:</label>
                                                                            <div class="col-lg-8"><?php echo form_input($f_sgpa_5); ?></div>
                                                                    </div>
                                                                    <span style='color: red;text-align: center'> 
                                                                        <b><?php echo form_error('sgpa_5','<div class="error">', '</div>')?></b><br>
                                                                    </span>
                                                                    <div class="form-group">
                                                                            <label class="control-label col-lg-3 col-md-3 col-sm-3 namkaran">6th Semester's SGPA:</label>
                                                                            <div class="col-lg-8"><?php echo form_input($f_sgpa_6); ?></div>
                                                                    </div>
                                                                    <span style='color: red;text-align: center'> 
                                                                        <b><?php echo form_error('sgpa_6','<div class="error">', '</div>')?></b><br>
                                                                    </span>
                                                                    <div class="form-group">
                                                                            <label class="control-label col-lg-3 col-md-3 col-sm-3 namkaran">7th Semester's SGPA:</label>
                                                                            <div class="col-lg-8"><?php echo form_input($f_sgpa_7); ?></div>
                                                                    </div>
                                                                    <span style='color: red;text-align: center'> 
                                                                        <b><?php echo form_error('sgpa_7','<div class="error">', '</div>')?></b><br>
                                                                    </span>
                                                                    <div class="form-group">
                                                                            <label class="control-label col-lg-3 col-md-3 col-sm-3 namkaran">8th Semester's SGPA:</label>
                                                                            <div class="col-lg-8"><?php echo form_input($f_sgpa_8); ?></div>
                                                                    </div>
                                                                    <span style='color: red;text-align: center'> 
                                                                        <b><?php echo form_error('sgpa_8','<div class="error">', '</div>')?></b><br>
                                                                    </span>
                                                                    <div class="form-group">
                                                                            <label class="control-label col-lg-3 col-md-3 col-sm-3 namkaran">CGPA:</label>
                                                                            <div class="col-lg-8"><?php echo form_input($f_cgpa); ?></div>
                                                                    </div>
                                                                    <span style='color: red;text-align: center'> 
                                                                        <b><?php echo form_error('cgpa','<div class="error">', '</div>')?></b><br>
                                                                    </span>
                                                                    <div class="form-group">
                                                                            <label class = "control-label col-lg-3 col-md-3 col-sm-3 namkaran">Supplies till <?php if (isset($f_current_sem[$f_data['current_sem']])){echo $f_current_sem[$f_data['current_sem']];}else {echo "current";} ?> Sem:</label>
                                                                            <div class="col-lg-8"><?php echo form_input($f_supplies); ?></div>
                                                                    </div>
                                                                    <span style='color: red;text-align: center'> 
                                                                        <b><?php echo form_error('supplies','<div class="error">', '</div>')?></b><br>
                                                                    </span>
                                                                    <div class="form-group">
                                                                            <label class = "control-label col-lg-3 col-md-3 col-sm-3 namkaran">Active Supplies:</label>
                                                                            <div class="col-lg-8"><?php echo form_input($f_active_supplies);?></div>
                                                                    </div>
                                                                    <span style='color: red;text-align: center'> 
                                                                        <b><?php echo form_error('active_supplies','<div class="error">', '</div>')?></b><br>
                                                                    </span>
                                                                    <div>
                                                                        <button type="submit" name = "update_academic" value = "update_academic" class="btn btn-primary col-lg-offset-2">Update</button>
                                                                        <button type="button" onclick=show('clickmeid3','comment3') value="Cancel" class="btn btn-default right0">Cancel</button>
                                                                    </div>
                                                            <?php echo form_close(); ?>
                                                        </div>
                                                    <!-- Academic Performance form end -->
                                                </div>
                                            </div>
					</div>
                                        <!-- Academic Performance End -->
                                        <!-- Past Education start -->
					<div class="panel panel-default">
                                            <a class="collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
						<div class="panel-heading" role="tab" id="headingFour">
							<h4 class="panel-title">	
                                                            Past Education
                                                        </h4>
						</div>
                                            </a>
                                            <div id="collapseFour" class="panel-collapse collapse
                                                 <?php
                                                    if (isset($updated[sha1(md5('success_past'))]) || isset($updated['error_past'])) {
                                                        echo "in";
                                                    }
                                                 ?>
                                                 " role="tabpanel" aria-labelledby="headingFour">
                                                <div class="panel-body saman">
                                                    <?php
                                                        if(isset($updated[sha1(md5("success_past"))])) {
                                                            echo '<div class="alert alert-success alert-dismissible fade in" style="text-align:center" role="alert">
                                                                <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">x</span></button>
                                                                <p>Updated Successfully!</p>
                                                            </div>';
                                                        }
                                                    ?>
                                                    <!-- Past Education text version start -->
                                                        <div>
                                                            <div align="right">
                                                                <a href = "#"  id= "clickmeida4" onclick=show('comment4','clickmeid4') data-toggle="tooltip" title="Edit">
                                                                    <span class="glyphicon glyphicon-pencil" aria-hidden="true"></span>
                                                                </a>
                                                            </div>
                                                            <div id="clickmeid4"
                                                                <?php
                                                                    if (isset($updated["error_past"])) {
                                                                        echo "style=display:none";

                                                                    }
                                                                    else {
                                                                        echo "style=display:block";
                                                                    }
                                                                ?>
                                                                 >
                                                                <div class="row">
                                                                        <label class="control-label col-lg-3 col-md-3 col-sm-3 namkaran">AIEEE Rank:</label>
                                                                        <div class="col-lg-9 col-md-9 col-sm-9 entry"><?php echo $f_data['aieee_air']; ?></div>
                                                                </div>
                                                                <div class="row">
                                                                        <label class="control-label col-lg-3 col-md-3 col-sm-3 namkaran">Gap between 12th and B.Tech:</label>
                                                                        <div class="col-lg-9 col-md-9 col-sm-9 entry"><?php echo $f_data['gap_12_btech']; ?></div>
                                                                </div>
                                                                <div class="row">
                                                                        <label class="control-label col-lg-3 col-md-3 col-sm-3 namkaran">12th board name:</label>
                                                                        <div class="col-lg-9 col-md-9 col-sm-9 entry"><?php echo $f_data['12_board']; ?></div>
                                                                </div>
                                                                <div class="row">
                                                                        <label class="control-label col-lg-3 col-md-3 col-sm-3 namkaran">12th School Name:</label>
                                                                        <div class="col-lg-9 col-md-9 col-sm-9 entry"><?php echo $f_data['12_school']; ?></div>
                                                                </div>
                                                                <div class="row">
                                                                        <label class="control-label col-lg-3 col-md-3 col-sm-3 namkaran">12th Passing Year:</label>
                                                                        <div class="col-lg-9 col-md-9 col-sm-9 entry"><?php echo $f_data['12_passing_year']; ?></div>
                                                                </div>
                                                                <div class="row">
                                                                        <label class="control-label col-lg-3 col-md-3 col-sm-3 namkaran">Total marks obtained in 12th:</label>
                                                                        <div class="col-lg-9 col-md-9 col-sm-9 entry"><?php echo $f_data['12_obtained_marks']; ?></div>
                                                                </div>
                                                                <div class="row">
                                                                        <label class="control-label col-lg-3 col-md-3 col-sm-3 namkaran">Max marks in 12th:</label>
                                                                        <div class="col-lg-9 col-md-9 col-sm-9 entry"><?php echo $f_data['12_total_marks']; ?></div>
                                                                </div>
                                                                <div class="row">
                                                                        <label class="control-label col-lg-3 col-md-3 col-sm-3 namkaran">12th percentage:</label>
                                                                        <div class="col-lg-9 col-md-9 col-sm-9 entry"><?php echo $f_data['12_percent']; ?></div>
                                                                </div>
                                                                <div class="row">
                                                                        <label class="control-label col-lg-3 col-md-3 col-sm-3 namkaran">10th board name:</label>
                                                                        <div class="col-lg-9 col-md-9 col-sm-9 entry"><?php echo $f_data['10_board']; ?></div>
                                                                </div>
                                                                <div class="row">
                                                                        <label class="control-label col-lg-3 col-md-3 col-sm-3 namkaran">10th School Name:</label>
                                                                        <div class="col-lg-9 col-md-9 col-sm-9 entry"><?php echo $f_data['10_school']; ?></div>
                                                                </div>
                                                                <div class="row">
                                                                        <label class="control-label col-lg-3 col-md-3 col-sm-3 namkaran">10th Passing Year:</label>
                                                                        <div class="col-lg-9 col-md-9 col-sm-9 entry"><?php echo $f_data['10_passing_year']; ?></div>
                                                                </div>
                                                                <div class="row">
                                                                        <label class="control-label col-lg-3 col-md-3 col-sm-3 namkaran">Total marks obtained in 10th:</label>
                                                                        <div class="col-lg-9 col-md-9 col-sm-9 entry"><?php echo $f_data['10_obtained_marks']; ?></div>
                                                                </div>
                                                                <div class="row">
                                                                        <label class="control-label col-lg-3 col-md-3 col-sm-3 namkaran">Max marks in 10th:</label>
                                                                        <div class="col-lg-9 col-md-9 col-sm-9 entry"><?php echo $f_data['10_total_marks']; ?></div>
                                                                </div>
                                                                <div class="row">
                                                                        <label class="control-label col-lg-3 col-md-3 col-sm-3 namkaran">10th percentage:</label>
                                                                        <div class="col-lg-9 col-md-9 col-sm-9 entry"><?php echo $f_data['10_percent']; ?></div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    <!-- Past Education text version End -->
                                                    <!-- Past Education form start -->
                                                        <div id="comment4" 
                                                             <?php
                                                                if (isset($updated["error_past"])) {
                                                                    echo "style=display:block";

                                                                }
                                                                else {
                                                                    echo "style=display:none";
                                                                }
                                                            ?>
                                                             >
                                                            <?php echo form_open(base_url().'details/submit',$class); ?>
                                                                <div class="form-group">
                                                                        <label class="control-label col-lg-3 col-md-3 col-sm-3 namkaran">AIEEE Rank:</label>
                                                                        <div class="col-lg-8"><?php echo form_input($f_aieee_air); ?></div>
                                                                </div>
                                                                <span style='color: red;text-align: center'> 
                                                                    <b><?php echo form_error('aieee_air','<div class="error">', '</div>')?></b><br>
                                                                </span>
                                                                <div class="form-group">
                                                                        <label class="control-label col-lg-3 col-md-3 col-sm-3 namkaran">Gap between 12th and B.Tech:</label>
                                                                        <div class="col-lg-8"><?php echo form_input($f_gap_12_btech); ?></div>
                                                                </div>
                                                                <span style='color: red;text-align: center'> 
                                                                    <b><?php echo form_error('gap_12_btech','<div class="error">', '</div>')?></b><br>
                                                                </span>
                                                                <div class="form-group">
                                                                        <label class="control-label col-lg-3 col-md-3 col-sm-3 namkaran">12th board name:</label>
                                                                        <div class="col-lg-8"><?php echo form_input($f_12_board); ?></div>
                                                                </div>
                                                                <span style='color: red;text-align: center'> 
                                                                    <b><?php echo form_error('12_board','<div class="error">', '</div>')?></b><br>
                                                                </span>
                                                                <div class="form-group">
                                                                        <label class="control-label col-lg-3 col-md-3 col-sm-3 namkaran">12th School Name:</label>
                                                                        <div class="col-lg-8"><?php echo form_input($f_12_school); ?></div>
                                                                </div>
                                                                <span style='color: red;text-align: center'> 
                                                                    <b><?php echo form_error('12_school','<div class="error">', '</div>')?></b><br>
                                                                </span>
                                                                <div class="form-group">
                                                                        <label class="control-label col-lg-3 col-md-3 col-sm-3 namkaran">12th Passing Year:</label>
                                                                        <div class="col-lg-8"><?php echo form_input($f_12_passing_year); ?></div>
                                                                </div>
                                                                <span style='color: red;text-align: center'> 
                                                                    <b><?php echo form_error('12_passing_year','<div class="error">', '</div>')?></b><br>
                                                                </span>
                                                                <div class="form-group">
                                                                        <label class="control-label col-lg-3 col-md-3 col-sm-3 namkaran">Total marks obtained in 12th:</label>
                                                                        <div class="col-lg-8"><?php echo form_input($f_12_obtained_marks); ?></div>
                                                                </div>
                                                                <span style='color: red;text-align: center'> 
                                                                    <b><?php echo form_error('12_obtained_marks','<div class="error">', '</div>')?></b><br>
                                                                </span>
                                                                <div class="form-group">
                                                                        <label class="control-label col-lg-3 col-md-3 col-sm-3 namkaran">Max marks in 12th:</label>
                                                                        <div class="col-lg-8"><?php echo form_input($f_12_total_marks); ?></div>
                                                                </div>
                                                                <span style='color: red;text-align: center'> 
                                                                    <b><?php echo form_error('12_total_marks','<div class="error">', '</div>')?></b><br>
                                                                </span>
                                                                <div class="form-group">
                                                                        <label class="control-label col-lg-3 col-md-3 col-sm-3 namkaran">12th percentage:</label>
                                                                        <div class="col-lg-8"><?php echo form_input($f_12_percent); ?></div>
                                                                </div>
                                                                <span style='color: red;text-align: center'> 
                                                                    <b><?php echo form_error('12_percent','<div class="error">', '</div>')?></b><br>
                                                                </span>
                                                                <div class="form-group">
                                                                        <label class="control-label col-lg-3 col-md-3 col-sm-3 namkaran">10th board name:</label>
                                                                        <div class="col-lg-8"><?php echo form_input($f_10_board); ?></div>
                                                                </div>
                                                                <span style='color: red;text-align: center'> 
                                                                    <b><?php echo form_error('10_board','<div class="error">', '</div>')?></b><br>
                                                                </span>
                                                                <div class="form-group">
                                                                        <label class="control-label col-lg-3 col-md-3 col-sm-3 namkaran">10th School Name:</label>
                                                                        <div class="col-lg-8"><?php echo form_input($f_10_school); ?></div>
                                                                </div>
                                                                <span style='color: red;text-align: center'> 
                                                                    <b><?php echo form_error('10_school','<div class="error">', '</div>')?></b><br>
                                                                </span>
                                                                <div class="form-group">
                                                                        <label class="control-label col-lg-3 col-md-3 col-sm-3 namkaran">10th Passing Year:</label>
                                                                        <div class="col-lg-8"><?php echo form_input($f_10_passing_year); ?></div>
                                                                </div>
                                                                <span style='color: red;text-align: center'> 
                                                                    <b><?php echo form_error('10_passing_year','<div class="error">', '</div>')?></b><br>
                                                                </span>
                                                                <div class="form-group">
                                                                        <label class="control-label col-lg-3 col-md-3 col-sm-3 namkaran">Total marks obtained in 10th:</label>
                                                                        <div class="col-lg-8"><?php echo form_input($f_10_obtained_marks); ?></div>
                                                                </div>
                                                                <span style='color: red;text-align: center'> 
                                                                    <b><?php echo form_error('10_obtained_marks','<div class="error">', '</div>')?></b><br>
                                                                </span>
                                                                <div class="form-group">
                                                                        <label class="control-label col-lg-3 col-md-3 col-sm-3 namkaran">Max marks in 10th:</label>
                                                                        <div class="col-lg-8"><?php echo form_input($f_10_total_marks); ?></div>
                                                                </div>
                                                                <span style='color: red;text-align: center'> 
                                                                    <b><?php echo form_error('10_total_marks','<div class="error">', '</div>')?></b><br>
                                                                </span>
                                                                <div class="form-group">
                                                                        <label class="control-label col-lg-3 col-md-3 col-sm-3 namkaran">10th percentage:</label>
                                                                        <div class="col-lg-8"><?php echo form_input($f_10_percent); ?></div>
                                                                </div>
                                                                <span style='color: red;text-align: center'> 
                                                                    <b><?php echo form_error('10_percent','<div class="error">', '</div>')?></b><br>
                                                                </span>
                                                                <div>
                                                                        <button type="submit" name = "update_past" value = "update_past" class="btn btn-primary col-lg-offset-2">Update</button>
                                                                        <button type="button" onclick=show('clickmeid4','comment4') value="Cancel" class="btn btn-default right0">Cancel</button>
                                                                </div>
                                                            <?php echo form_close(); ?>
                                                        </div>
                                                    <!-- Past Education form end -->
                                                </div>
                                            </div>	
					</div>
                                        <!-- Past Education End -->
                                        <!-- Personal Info start -->
					<div class="panel panel-default">
                                            <a class="collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseFive" aria-expanded="false" aria-controls="collapseFive">
                                                <div class="panel-heading" role="tab" id="headingFive">
                                                    <h4 class="panel-title">
                                                        Personal Info
                                                    </h4>
                                                </div>
                                            </a>
                                            <div id="collapseFive" class="panel-collapse collapse
                                                 <?php
                                                    if (isset($updated[sha1(md5('success_personal'))]) || isset($updated['error_personal'])) {
                                                        echo "in";
                                                    }
                                                 ?>
                                                 " role="tabpanel" aria-labelledby="headingFive">
                                                    <div class="panel-body saman">
                                                        <?php
                                                            if(isset($updated[sha1(md5("success_personal"))])) {
                                                                echo '<div class="alert alert-success alert-dismissible fade in" style="text-align:center" role="alert">
                                                                    <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">x</span></button>
                                                                    <p>Updated Successfully!</p>
                                                                </div>';
                                                            }
                                                        ?>
                                                        <!-- Personal Info text version start -->
                                                            <div>
                                                                <div align="right">
                                                                    <a  href = "#" id= "clickmeida5" onclick=show('comment5','clickmeid5') data-toggle="tooltip" title="Edit">
                                                                        <span class="glyphicon glyphicon-pencil" aria-hidden="true"></span>
                                                                    </a>
                                                                </div>
                                                                <div id="clickmeid5"
                                                                    <?php
                                                                        if (isset($updated["error_personal"])) {
                                                                            echo "style=display:none";

                                                                        }
                                                                        else {
                                                                            echo "style=display:block";
                                                                        }
                                                                    ?>
                                                                     >
                                                                    <div class="row">
                                                                            <label class="control-label col-lg-3 col-md-3 col-sm-3 namkaran">Father's Name:</label>
                                                                            <div class="col-lg-9 col-md-9 col-sm-9 entry"><?php echo $f_data['father_name']; ?></div>
                                                                    </div>
                                                                    <div class="row">
                                                                            <label class="control-label col-lg-3 col-md-3 col-sm-3 namkaran">Mother's Name:</label>
                                                                            <div class="col-lg-9 col-md-9 col-sm-9 entry"><?php echo $f_data['mother_name']; ?></div>
                                                                    </div>
                                                                    <div class="row">
                                                                            <label class="control-label col-lg-3 col-md-3 col-sm-3 namkaran">Height:</label>
                                                                            <div class="col-lg-9 col-md-9 col-sm-9 entry"><?php echo $f_data['height']; ?></div>
                                                                    </div>
                                                                    <div class="row">
                                                                            <label class="control-label col-lg-3 col-md-3 col-sm-3 namkaran">Weight:</label>
                                                                            <div class="col-lg-9 col-md-9 col-sm-9 entry"><?php echo $f_data['weight']; ?></div>
                                                                    </div>
                                                                    <div class="row">
                                                                            <label class="control-label col-lg-3 col-md-3 col-sm-3 namkaran">Power(Left Eye):</label>
                                                                            <div class="col-lg-9 col-md-9 col-sm-9 entry"><?php echo $f_data['power_left']; ?></div>
                                                                    </div>
                                                                    <div class="row">
                                                                            <label class="control-label col-lg-3 col-md-3 col-sm-3 namkaran">Power(Right Eye):</label>
                                                                            <div class="col-lg-9 col-md-9 col-sm-9 entry"><?php echo $f_data['power_right']; ?></div>
                                                                    </div>
                                                                    <div class="row">
                                                                            <label class="control-label col-lg-3 col-md-3 col-sm-3 namkaran">Disability:</label>
                                                                            <div class="col-lg-9 col-md-9 col-sm-9 entry">
                                                                            	<?php 
                                                                            		if(isset($f_disability[$f_data['disability']])) {
                                                                            			echo $f_disability[$f_data['disability']]; 
                                                                            		}
                                                                            	?>
                                                                            </div>
                                                                    </div>
                                                                    <script>showdisability($f_data['disability'])</script>
                                                                    <div id="disabilityyes" style='display: none'>
                                                                        <div class="row">
                                                                                <label class="control-label col-lg-3 col-md-3 col-sm-3 namkaran">Disability Type:</label>
                                                                                <div class="col-lg-9 col-md-9 col-sm-9 entry"><?php echo $f_data['disability_type']; ?></div>
                                                                        </div>
                                                                        <div class="row">
                                                                                <label class="control-label col-lg-3 col-md-3 col-sm-3 namkaran">Disability Percent:</label>
                                                                                <div class="col-lg-9 col-md-9 col-sm-9 entry"><?php echo $f_data['disability_percent']; ?></div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        <!-- Personal Info text version end -->
                                                        <!-- Personal Info form start -->
                                                            <div id="comment5" 
                                                                <?php
                                                                    if (isset($updated["error_personal"])) {
                                                                        echo "style=display:block";

                                                                    }
                                                                    else {
                                                                        echo "style=display:none";
                                                                    }
                                                                ?>
                                                                 >
                                                                <?php echo form_open(base_url().'details/submit',$class); ?>
                                                                <div class="form-group">
                                                                        <label class="control-label col-lg-3 col-md-3 col-sm-3 namkaran">Father's Name:</label>
                                                                        <div class="col-lg-8"><?php echo form_input($f_father_name); ?></div>
                                                                </div>
                                                                <span style='color: red;text-align: center'> 
                                                                    <b><?php echo form_error('father_name','<div class="error">', '</div>')?></b><br>
                                                                </span>
                                                                <div class="form-group">
                                                                        <label class="control-label col-lg-3 col-md-3 col-sm-3 namkaran">Mother's Name:</label>
                                                                        <div class="col-lg-8"><?php echo form_input($f_mother_name); ?></div>
                                                                </div>
                                                                <span style='color: red;text-align: center'> 
                                                                    <b><?php echo form_error('mother_name','<div class="error">', '</div>')?></b><br>
                                                                </span>
                                                                <div class="form-group">
                                                                        <label class="control-label col-lg-3 col-md-3 col-sm-3 namkaran">Height:</label>
                                                                        <div class="col-lg-8"><?php echo form_input($f_height); ?></div>
                                                                </div>
                                                                <span style='color: red;text-align: center'> 
                                                                    <b><?php echo form_error('height','<div class="error">', '</div>')?></b><br>
                                                                </span>
                                                                <div class="form-group">
                                                                        <label class="control-label col-lg-3 col-md-3 col-sm-3 namkaran">Weight:</label>
                                                                        <div class="col-lg-8"><?php echo form_input($f_weight); ?></div>
                                                                </div>
                                                                <span style='color: red;text-align: center'> 
                                                                    <b><?php echo form_error('weight','<div class="error">', '</div>')?></b><br>
                                                                </span>
                                                                <div class="form-group">
                                                                        <label class="control-label col-lg-3 col-md-3 col-sm-3 namkaran">Power(Left Eye):</label>
                                                                        <div class="col-lg-8"><?php echo form_input($f_power_left); ?></div>
                                                                </div>
                                                                <span style='color: red;text-align: center'> 
                                                                    <b><?php echo form_error('power_left','<div class="error">', '</div>')?></b><br>
                                                                </span>
                                                                <div class="form-group">
                                                                        <label class="control-label col-lg-3 col-md-3 col-sm-3 namkaran">Power(Right Eye):</label>
                                                                        <div class="col-lg-8"><?php echo form_input($f_power_right); ?></div>
                                                                </div>
                                                                <span style='color: red;text-align: center'> 
                                                                    <b><?php echo form_error('power_right','<div class="error">', '</div>')?></b><br>
                                                                </span>
                                                                <div class="form-group">
                                                                        <label class="control-label col-lg-3 col-md-3 col-sm-3 namkaran">Disability:</label>
                                                                        <div class="col-lg-8"><?php echo form_dropdown('disability',$f_disability,$f_data['disability'],'class = "form-control" id = "disability"'); ?></div>
                                                                </div>
                                                                <span style='color: red;text-align: center'> 
                                                                    <b><?php echo form_error('disability','<div class="error">', '</div>')?></b><br>
                                                                </span>
                                                                <div id="disabilityyes1" style='display: none'>
                                                                        <div class="form-group">
                                                                                <label class="control-label col-lg-3 col-md-3 col-sm-3 namkaran">Disability Type:</label>
                                                                                <div class="col-lg-8"><?php echo form_input($f_disability_type); ?></div>
                                                                        </div>
                                                                        <span style='color: red;text-align: center'> 
                                                                            <b><?php echo form_error('disability_type','<div class="error">', '</div>')?></b><br>
                                                                        </span>
                                                                        <div class="form-group">
                                                                                <label class="control-label col-lg-3 col-md-3 col-sm-3 namkaran">Disability Percent:</label>
                                                                                <div class="col-lg-8"><?php echo form_input($f_disability_percent); ?></div>
                                                                        </div>
                                                                        <span style='color: red;text-align: center'> 
                                                                            <b><?php echo form_error('disability_percent','<div class="error">', '</div>')?></b><br>
                                                                        </span>
                                                                </div>
                                                                <div>
                                                                        <button type="submit" name = "update_personal" value = "update_personal" class="btn btn-primary col-lg-offset-2">Update</button>
                                                                        <button type="button" onclick=show('clickmeid5','comment5') value="Cancel" class="btn btn-default right0">Cancel</button>
                                                                </div>
                                                                <?php echo form_close(); ?>
                                                            </div>
                                                        <!-- Personal Info form end -->
                                                    </div>
                                            </div>
					</div>
                                        <!-- Personal Info end -->
                                        <!-- Other info start -->
					<div class="panel panel-default">
                                            <a class="collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseSix" aria-expanded="false" aria-controls="collapseSix">
						<div class="panel-heading" role="tab" id="headingSix">
                                                    <h4 class="panel-title">	
                                                        Other Info
                                                    </h4>
						</div>
                                            </a>
						<div id="collapseSix" class="panel-collapse collapse
                                                     <?php
                                                        if (isset($updated[sha1(md5('success_other'))]) || isset($updated['error_other'])) {
                                                            echo "in";
                                                        }
                                                     ?>
                                                     " role="tabpanel" aria-labelledby="headingSix">
							<div class="panel-body saman">
                                                            <?php
                                                                if(isset($updated[sha1(md5("updated_other"))])) {
                                                                    echo '<div class="alert alert-success alert-dismissible fade in" style="text-align:center" role="alert">
                                                                        <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">x</span></button>
                                                                        <p>Updated Successfully!</p>
                                                                    </div>';
                                                                }
                                                            ?>
                                                            <!-- Other Info text version start -->
								<div>
                                                                    <div align="right">
                                                                        <a  href = "#" id= "clickmeida6" onclick=show('comment6','clickmeid6') data-toggle="tooltip" title="Edit">
                                                                            <span class="glyphicon glyphicon-pencil" aria-hidden="true"></span>
                                                                        </a>
                                                                    </div>
                                                                    <div id="clickmeid6"
                                                                         <?php
                                                                            if (isset($updated["error_other"])) {
                                                                                echo "style=display:none";

                                                                            }
                                                                            else {
                                                                                echo "style=display:block";
                                                                            }
                                                                        ?>
                                                                         >
                                                                            <div class="row">
                                                                                    <label class="control-label col-lg-3 col-md-3 col-sm-3 namkaran">Scholastic Achievements:</label>
                                                                                    <div class="col-lg-9 col-md-9 col-sm-9 entry"><?php echo nl2br($f_data['scholastic_achievements']); ?></div>
                                                                            </div>
                                                                            <div class="row">
                                                                                    <label class="control-label col-lg-3 col-md-3 col-sm-3 namkaran">Academic Projects:</label>
                                                                                    <div class="col-lg-9 col-md-9 col-sm-9 entry"><?php echo nl2br($f_data['academic_projects']); ?></div>
                                                                            </div>
                                                                            <div class="row">
                                                                                    <label class="control-label col-lg-3 col-md-3 col-sm-3 namkaran">Practical Training:</label>
                                                                                    <div class="col-lg-9 col-md-9 col-sm-9 entry"><?php echo nl2br($f_data['practical_training']); ?></div>
                                                                            </div>
                                                                            <div class="row">
                                                                                    <label class="control-label col-lg-3 col-md-3 col-sm-3 namkaran">Skills and Capabilities:</label>
                                                                                    <div class="col-lg-9 col-md-9 col-sm-9 entry"><?php echo nl2br($f_data['skills_capabilities']); ?></div>
                                                                            </div>
                                                                            <div class="row">
                                                                                    <label class="control-label col-lg-3 col-md-3 col-sm-3 namkaran">Position of Responsibility:</label>
                                                                                    <div class="col-lg-9 col-md-9 col-sm-9 entry"><?php echo nl2br($f_data['position_responsibility']); ?></div>
                                                                            </div>
                                                                            <div class="row">
                                                                                    <label class="control-label col-lg-3 col-md-3 col-sm-3 namkaran">Extra Curriculars:</label>
                                                                                    <div class="col-lg-9 col-md-9 col-sm-9 entry"><?php echo nl2br($f_data['extra_curriculars']); ?></div>
                                                                            </div>
                                                                    </div>
                                                                </div>
                                                            <!-- Other Info text version end -->
                                                            <!-- Other Info form start -->
                                                                    <div id="comment6" 
                                                                        <?php
                                                                            if (isset($updated["error_other"])) {
                                                                                echo "style=display:block";

                                                                            }
                                                                            else {
                                                                                echo "style=display:none";
                                                                            }
                                                                        ?>
                                                                        >
                                                                            <?php echo form_open(base_url().'details/submit',$class); ?>
                                                                            <div class="form-group">
                                                                                    <label class="control-label col-lg-3 col-md-3 col-sm-3 namkaran">Scholastic Achievements:</label>
                                                                                    <div class="col-lg-8"><?php echo form_textarea($f_scholastic_achievements); ?></div>
                                                                            </div>
                                                                            <span style='color: red;text-align: center'> 
                                                                                <b><?php echo form_error('scholastic_achievements','<div class="error">', '</div>')?></b><br>
                                                                            </span>
                                                                            <div class="form-group">
                                                                                    <label class="control-label col-lg-3 col-md-3 col-sm-3 namkaran">Academic Projects:</label>
                                                                                    <div class="col-lg-8"><?php echo form_textarea($f_academic_projects); ?></div>
                                                                            </div>
                                                                            <span style='color: red;text-align: center'> 
                                                                                <b><?php echo form_error('academic_projects','<div class="error">', '</div>')?></b><br>
                                                                            </span>
                                                                            <div class="form-group">
                                                                                    <label class="control-label col-lg-3 col-md-3 col-sm-3 namkaran">Practical Training:</label>
                                                                                    <div class="col-lg-8"><?php echo form_textarea($f_practical_training); ?></div>
                                                                            </div>
                                                                            <span style='color: red;text-align: center'> 
                                                                                <b><?php echo form_error('practical_training','<div class="error">', '</div>')?></b><br>
                                                                            </span>
                                                                            <div class="form-group">
                                                                                    <label class="control-label col-lg-3 col-md-3 col-sm-3 namkaran">Skills and Capabilities:</label>
                                                                                    <div class="col-lg-8"><?php echo form_textarea($f_skills_capabilities); ?></div>
                                                                            </div>
                                                                            <span style='color: red;text-align: center'> 
                                                                                <b><?php echo form_error('skills_capabilities','<div class="error">', '</div>')?></b><br>
                                                                            </span>
                                                                            <div class="form-group">
                                                                                    <label class="control-label col-lg-3 col-md-3 col-sm-3 namkaran">Position of Responsibility:</label>
                                                                                    <div class="col-lg-8"><?php echo form_textarea($f_position_responsibility); ?></div>
                                                                            </div>
                                                                            <span style='color: red;text-align: center'> 
                                                                                <b><?php echo form_error('position_responsibility','<div class="error">', '</div>')?></b><br>
                                                                            </span>
                                                                            <div class="form-group">
                                                                                    <label class="control-label col-lg-3 col-md-3 col-sm-3 namkaran">Extra Curriculars:</label>
                                                                                    <div class="col-lg-8"><?php echo form_textarea($f_extra_curriculars); ?></div>
                                                                            </div>
                                                                            <span style='color: red;text-align: center'> 
                                                                                <b><?php echo form_error('extra_curriculars','<div class="error">', '</div>')?></b><br>
                                                                            </span>
                                                                            <div>
                                                                                    <button type="submit" name = "update_other" value = "update_other" class="btn btn-primary col-lg-offset-2">Update</button>
                                                                                    <button type="button" onclick=show('clickmeid6','comment6') value="Cancel" class="btn btn-default right0">Cancel</button>
                                                                            </div>
                                                                            </form>
                                                                    </div>
                                                            <!-- Other Info form end -->
							</div>
						</div>
					</div>
                                        <!-- Other info end -->
                                        <!-- Resume start -->
                                        <div class="panel panel-default">
                                            <a class="collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseSeven" aria-expanded="false" aria-controls="collapseSeven">
                                                    <div class="panel-heading" role="tab" id="headingSeven">
                                                            <h4 class="panel-title">
                                                                    <div>Resume</div>
                                                            </h4>
                                                    </div>
                                            </a>
                                            
                                            
                           <div id="collapseSeven" class="panel-collapse collapse 
                           <?php
                               if (isset($updated[sha1(md5('updated_resume'))])) {
                                    	echo "in";
                               }
                           ?>
                           " role="tabpanel" aria-labelledby="headingSeven">
							<div class="panel-body saman">
								<div>
									<p><b>Your personalised resume</b></p>
									<input id="lecv" type="file" accept=".pdf" <!--style="display:none"-->>
									<div class="input-append">
										<a id="expand" class="btn" onclick=ssh('uploadcv','compress','expand') data-toggle="tooltip" title="Upload Resume"><img src=<?php echo base_url()."static/images/up1.png"; ?> width=50px></a>
										<a id="compress" class="btn" onclick=shh('expand','uploadcv','compress') data-toggle="tooltip" title="Upload Resume" style=display:none><img src=<?php echo base_url()."static/images/up1.png"; ?> width=50px></a>
										<a class="btn" data-toggle="tooltip" title="Download Resume"><img src=<?php echo base_url()."static/images/down1.png"; ?> width=50px></a>
										<a class="btn" data-toggle="tooltip" title="Delete Resume"><img src=<?php echo base_url()."static/images/trash.png"; ?> width=50px></a>
									</div>
									<div id="uploadcv" style=display:none>
										<form id="cvfrm">
											<input id="lecv" type="file" accept=".pdf" style="display:none">
											<div class="input-append">
												<a class="btn btn1 top-down-margin" onclick="$('input[id=lecv]').click();">Choose File</a>
											</div>
											<div>
												<a class="btn btn2">Submit</a>
											</div>
										</form>
										<br><br>
									</div>
								</div>
								<div>
									<p><b>Special Feature</b></p>
									<a href="#"><b>Download your resume in college format</b></a>
								</div>
							</div>
					</div>
                                        <!-- Resume end -->
				</div>
                                <!-- End Data Panels -->
			</div>
			<!-- Start Left Part (Details Part) -->
		</div>
        <!-- Main Body end -->
        <div class="row mainpart">
            <div class="developers">
                <a href=<?php echo base_url()."about"; ?>>About Us</a>
            </div>
        </div>
    </body>
</html>