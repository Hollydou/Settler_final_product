<?php
include_once 'connection.php';
$connection=db_connect();

$JID = $_POST["JID"];


$sql = "SELECT * FROM Job WHERE JID = '$JID'";
$result = mysqli_query($connection,$sql);
$count = mysqli_num_rows($result); 

if ($count > 0){
	while ($row = mysqli_fetch_array($result, MYSQLI_ASSOC)){
    	$JID = $row['JID'];
        $JName = $row['JName'];
		$JLocation = $row['JLocation'];
		$JSalary = $row['JSalary'];
		$JPostTime = $row['JPostTime'];
		$JDescription = $row['JDescription'];
		$Jcategories = $row['Jcategories'];
		$JLang = $row['JLang'];
		$JSkill = $row['JSkill'];
		$JType = $row['JType'];
		$companyName = $row['companyName'];
		$companyEmail = $row['companyEmail'];
		$suburb = $row['suburb'];
		$postcode = $row['postcode'];
		$companyPhone = $row['companyPhone'];
		
		echo' 
        
			<h3>'. $JName .'</h3>
            <h5>'. $companyName .'</h5>
            <div class="row">
            	<div class="col-lg-6">
                    <h4>Job Description</h4>
                    <p>'.$JDescription.'</p>
					<hr/>
					<h4>Job Requirement</h4>
					<p>'. $JSkill .'</p>
					<hr/>
					<h4>Job Salary</h4>
					<p>'. $JSalary .'</p>
					<hr/>
				</div>
                <div class = "col-lg-6">
                	<img src="images/gallery/1.jpg" alt class="img-responsive"/>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-6">
				<h4>Address</h4><address><strong>Loop, Inc.</strong><br/>'. $JLocation .'<br/><abbr title="Phone">P: &nbsp;</abbr>'.$companyPhone.'</address><address class="mbxl"><strong>Email</strong><br/><a href="mailto:#">'. $companyEmail .'</a></address>
				<ul class="social-icons list-unstyled list-inline">
                <li><a href="#" data-hover="tooltip" data-original-title="facebook" class="facebook"><i class="fa fa-facebook">&nbsp;</i></a>
                </li>
            	<li><a href="#" data-hover="tooltip" data-original-title="github" class="github"><i class="fa fa-github"></i></a>
                </li>
                <li><a href="#" data-hover="tooltip" data-original-title="google Plus" class="googleplus"><i class="fa fa-google-plus"></i></a>
                </li>
                <li><a href="#" data-hover="tooltip" data-original-title="linkedin" class="linkedin"><i class="fa fa-linkedin"></i></a>
				</li>
				<li><a href="#" data-hover="tooltip" data-original-title="rss" class="rss"><i class="fa fa-rss"></i></a>
                </li>
                <li><a href="#" data-hover="tooltip" data-original-title="skype" class="skype"><i class="fa fa-skype"></i></a>
                </li>
                <li><a href="#" data-hover="tooltip" data-original-title="twitter" class="twitter"><i class="fa fa-twitter"></i></a>
            	</li>
                <li><a href="#" data-hover="tooltip" data-original-title="youtube" class="youtube"><i class="fa fa-youtube"></i></a>
                </li>
                </ul>
            </div>
            <div class="row">
                <div class="col-lg-10 col-lg-offset-1 text-center">
                    <button type="submit" class="btn btn-info btn-block" onClick="document.location.href=\'job_application.php?jid='.$JID.'\'">Apply</button>
                </div>
            </div>    
            ';

         }
	}

?>