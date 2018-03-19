<?php
/**
 * Created by PhpStorm.
 * User: izzy
 * Date: 16/10/17
 * Time: 11:38 AM
 */


include_once 'connection.php';
$connection=db_connect();

$CID = $_POST["CID"];


$sql = "SELECT * FROM Course WHERE CID = '$CID'";
$result = mysqli_query($connection,$sql);
$count = mysqli_num_rows($result);

if ($count > 0){
    while ($row = mysqli_fetch_array($result, MYSQLI_ASSOC)){

        $CID = $row['CID'];
        $Name = $row['Name'];
        $Fee = $row['Fee'];
        $Certificate = $row['Certificate'];
        $Language = $row['Language'];
        $StartDate = $row['StartDate'];
        $EndDate = $row['EndDate'];
        $Location = $row['Location'];
        $Suburb = $row['Suburb'];
        $Postcode = $row['Postcode'];
        $Length = $row['Length'];
        $DayOfCourse = $row['DayOfCourse'];
        $Email = $row['Email'];
        $Phone = $row['Phone'];
        $Description = $row['Description'];
        $UID = $row['UID'];
        $Date = $row['Date'];





        echo' 

                                    <h3>'. $Name .' </h3>
                                    <br>
                                    <div class="row">
                                        <div class="col-lg-6">
                                            <div class="row">
                                                <div class="col-lg-6">
                                                    <h4>Starting Date</h4>
                                                    <p>'. $StartDate .' </p>
                                                </div>
                                                <div class="col-lg-6">
                                                    <h4>Length of Course</h4>
                                                    <p>'. $Length .' </p>
                                                </div>
                                            </div>
                                            <hr/>
                                            <h4>Day of Course</h4>
                                            <p>'. $DayOfCourse .' </p>
                                            <hr/>
                                            <h4>Teaching Language</h4>
                                            <p>'. $Language .' </p>
                                            <hr/>
                                            <h4>Certificate Provided</h4>
                                            <p>'. $Certificate .' </p>
                                            <hr/>
                                            <h4>Fees</h4>
                                            <p>$ '. $Fee .' </p>
                                            <hr/>
                                            <h4>Description</h4>
                                            <p>'. $Description .' </p>
                                            <hr/>

                                        </div>
                                        <div class = "col-lg-6">
                                            <img src="images/gallery/1.jpg" alt class="img-responsive"/>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-lg-6">
                                            <h4>Contact</h4><address><strong></strong><br/>'. $Location .', '. $Postcode .' <br/><abbr title="Phone">P: &nbsp;</abbr>'. $Phone .' </address><address class="mbxl"><strong>Email</strong><br/><a href="mailto:#">'. $Email .' </a></address>
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

                                    </div>
                                    <div class="row">
                                        <div class="col-lg-10 col-lg-offset-1 text-center">
                                            <button type="submit" class="btn btn-info btn-block">Apply</button>
                                        </div>
                                    </div>

            
                                    
        
			   
            ';

    }
}

?>



