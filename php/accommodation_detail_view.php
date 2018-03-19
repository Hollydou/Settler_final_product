<?php
/**
 * Created by PhpStorm.
 * User: izzy
 * Date: 16/10/17
 * Time: 7:43 AM
 */

include_once 'connection.php';
$connection=db_connect();

$AID = $_POST["AID"];
echo $AID;


$sql = "SELECT * FROM Accommodation WHERE AID = '$AID'";
$result = mysqli_query($connection,$sql);
$count = mysqli_num_rows($result);

if ($count > 0){
    while ($row = mysqli_fetch_array($result, MYSQLI_ASSOC)){
        $AID = $row['AID'];
        $ALocation = $row['ALocation'];
        $ASuburb = $row['ASuburb'];
        $APostcode = $row['APostcode'];
        $PropertyType = $row['PropertyType'];
        $NoPeople = $row['NoPeople'];
        $RentalperWeek = $row['RentalperWeek'];
        $NoBathroom = $row['NoBathroom'];
        $NoBedroom = $row['NoBedroom'];
        $NoCarpark = $row['NoCarpark'];
        $Email = $row['Email'];
        $Phone = $row['Phone'];
        $Description = $row['Description'];
        $Time = $row['Time'];

        echo' 
             <h3>Address: '. $ALocation.', '. $ASuburb.', '. $APostcode .' </h3>
                                    <br>
                                    <div class="row">
                                        <div class="col-lg-6">
                                            <h4>Accommodation Type</h4>
                                            <p>'. $PropertyType .'</p>
                                            <hr/>
                                            <h4>Number of Person Staying</h4>
                                            <p>'. $NoPeople .'</p>
                                            <hr/>
                                            <h4>Number of Bedrooms/Bathrooms/Car Parks</h4>
                                            <p>'. $NoBedroom .' <i class="fa fa-bed"></i>&nbsp;'. $NoBathroom .' <i class="fa fa-bath"></i>&nbsp;'. $NoCarpark .' <i class="fa fa-car"></i></p>
                                            <hr/>
                                            <h4>Rental per Week</h4>
                                            <p>'. $RentalperWeek .'</p>
                                            <hr/>
                                        </div>
                                        <div class = "col-lg-6">
                                            <img src="images/gallery/1.jpg" alt class="img-responsive"/>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-lg-6">
                                            <h4>Contact</h4><address><strong>Loop, Inc.</strong><br/>7275 Crescent Canyon St<br/><abbr title="Phone">P: &nbsp;</abbr>'. $Phone .'</address><address class="mbxl"><strong>Email</strong><br/><a href="mailto:#">'. $Email .' </a></address>
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
                                    </div>';
        


    }
}
?>