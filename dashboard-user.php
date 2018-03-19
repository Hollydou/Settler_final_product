<?php
include ("php/session.php");
include("php/user_header.php");
$pageTitle = 'dashboard-user';
?>
<head>
  <!-- leaflet library -->
  <link rel="stylesheet" type="text/css" href="//cdnjs.cloudflare.com/ajax/libs/leaflet/0.7.3/leaflet.css"> 
  <link rel="stylesheet" type="text/css" href="Map/MapStyle.css">
</head>
          <?php
          $sql1 = "SELECT * FROM offeror_location Where Type = 'accommodation'";
          $result1 = mysqli_query($connection, $sql1);
          $queryResults1 = mysqli_num_rows($result1);
          $uid_array1 =array();
          $latitude_array1 = array();
          $longitude_array1 = array();
              while($row = mysqli_fetch_assoc($result1)) {
                  $JUID = $row['JUID'];
                  $latitude = $row['latitude'];
                  $longitude = $row['longitude'];
                  if ($latitude != 0 && $longitude != 0){
                        array_push($uid_array1, $JUID);
                        array_push($latitude_array1, $latitude); 
                        array_push($longitude_array1, $longitude); 
                  }
              }
			?>
		  <?php
          $sql2 = "SELECT * FROM offeror_location Where Type = 'job'";
          $result2 = mysqli_query($connection, $sql2);
          $queryResults2 = mysqli_num_rows($result2);
          $uid_array2 =array();
          $latitude_array2 = array();
          $longitude_array2 = array();
              while($row = mysqli_fetch_assoc($result2)) {
                  $JUID = $row['JUID'];
                  $latitude = $row['latitude'];
                  $longitude = $row['longitude'];
                  if ($latitude != 0 && $longitude != 0){
                        array_push($uid_array2, $JUID);
                        array_push($latitude_array2, $latitude); 
                        array_push($longitude_array2, $longitude); 
                  }
              }
			?> 
			<?php
          $sql3 = "SELECT * FROM offeror_location Where Type = 'course'";
          $result3 = mysqli_query($connection, $sql3);
          $queryResults3 = mysqli_num_rows($result3);
          $uid_array3 =array();
          $latitude_array3 = array();
          $longitude_array3 = array();
              while($row = mysqli_fetch_assoc($result3)) {
                  $JUID = $row['JUID'];
                  $latitude = $row['latitude'];
                  $longitude = $row['longitude'];
                  if ($latitude != 0 && $longitude != 0){
                        array_push($uid_array3, $JUID);
                        array_push($latitude_array3, $latitude); 
                        array_push($longitude_array3, $longitude); 
                  }
              }
			?>
            <!--END SIDEBAR MENU-->
            <!--BEGIN PAGE WRAPPER-->
            <div id="page-wrapper">
                <!--BEGIN TITLE & BREADCRUMB PAGE-->
                <div id="title-breadcrumb-option-demo" class="page-title-breadcrumb">
                    <div class="page-header pull-left">
                        <div class="page-title">Dashboard</div>
                    </div>
                    <div class="clearfix"></div>
                </div>
                <!--END TITLE & BREADCRUMB PAGE-->
                <!--BEGIN CONTENT-->
                <div class="page-content">
                    <div id="tab-general">
                        <div id="sum_box" class="row mbl">
                            <div class="col-sm-8 col-md-6" >
                                <a href="notification-user.php" target="_blank">
                                <div class="panel profit db mbm">
                                    <div class="panel-body">
                                        <p class="icon"><i class="icon fa fa-bell"></i>
                                        </p>
                                        <h2 class="value"><span>0</span></h2>
                                        <p class="description">Notifications</p>
                                    </div>
                                </div>
                                </a>
                            </div>
                            <div class="col-sm-8 col-md-6">
                                <a href="my_application.php" target="_blank">
                                <div class="panel income db mbm">
                                    <div class="panel-body">
                                        <p class="icon"><i class="icon fa fa-list-ul"></i>
                                        </p>
                                        <h2 class="value"><span>0</span></h2>
                                        <p class="description">Applications</p>
                                    </div>
                                </div>
                                </a>
                            </div>
                        </div>
                        <div id="row-mbl">
                            <div class="col-lg-14">
                                <div class="panel">
                                    <div class = "panel-body">
                                        <h3 class="caption"> 
                                        Where are the offerors?
                                        </h3>
                                        <div class="map" id='map'>
											<div id="legend">
												<img alt='Annotation' src='Map/Annotation.png' height='120'/>
											</div>
										</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!--END CONTENT-->
            </div>
    <!--END PAGE WRAPPER-->
    </div>
    </div>
    <script src="js/jquery-1.10.2.min.js"></script>
    <script src="js/jquery-migrate-1.2.1.min.js"></script>
    <script src="js/jquery-ui.js"></script>
    <!--loading bootstrap js-->
    <script src="vendors/bootstrap/js/bootstrap.min.js"></script>
    <script src="vendors/bootstrap-hover-dropdown/bootstrap-hover-dropdown.js"></script>
    <script src="js/html5shiv.js"></script>
    <script src="js/respond.min.js"></script>
    <script src="vendors/metisMenu/jquery.metisMenu.js"></script>
    <script src="vendors/slimScroll/jquery.slimscroll.js"></script>
    <script src="vendors/jquery-cookie/jquery.cookie.js"></script>
    <script src="vendors/iCheck/icheck.min.js"></script>
    <script src="vendors/iCheck/custom.min.js"></script>
    <script src="vendors/jquery-notific8/jquery.notific8.min.js"></script>
    <script src="vendors/jquery-highcharts/highcharts.js"></script>
    <script src="js/jquery.menu.js"></script>
    <script src="vendors/holder/holder.js"></script>
    <script src="vendors/responsive-tabs/responsive-tabs.js"></script>
    <script src="vendors/jquery-news-ticker/jquery.newsTicker.min.js"></script>
    <script src="vendors/moment/moment.js"></script>
    <script src="vendors/bootstrap-datepicker/js/bootstrap-datepicker.js"></script>
    <script src="vendors/bootstrap-daterangepicker/daterangepicker.js"></script>
    <!--CORE JAVASCRIPT-->
    <script src="js/main.js"></script>
    <!--LOADING SCRIPTS FOR PAGE-->
    <script src="vendors/intro.js/intro.js"></script>
    <script src="vendors/calendar/zabuto_calendar.min.js"></script>
    <script src="vendors/sco.message/sco.message.js"></script>
    <script src="vendors/intro.js/intro.js"></script>
	<script type="text/javascript" src='Map/leaflet.js'></script>
	<script type="text/javascript" src='//cdnjs.cloudflare.com/ajax/libs/jquery/2.1.1/jquery.min.js'></script> 
    <script>
        $(document).ready(function () {
            $.post("php/msg_count.php", function (data) {
                $(".value").text(data);
            })
        })
    </script>
	<!-- leaflet library -->
	
		  <script>
				(function() {
				  var map = L.map('map', {
					  attributionControl: false
				  });

				  L.tileLayer('http://{s}.tile.stamen.com/{style}/{z}/{x}/{y}.png', { 
					  style: 'toner-background'
				  }).addTo(map);
				  $.getJSON("Map/Aus.states.suburb.geojson", function(data) {
					  var info = L.control();
					  info.update = function (props) {
					  this._div.innerHTML = (props ? '<b>' + props['SA4_NAME11'] + '</b>' : ' ');
				  };
				  info.onAdd = function (map) {
					  this._div = L.DomUtil.create('div', 'info'); 
					  this.update();
					  return this._div;
				  };
				  info.addTo(map);
				  var geojson = L.geoJson(data, {
					  style: function (feature) {
						  return {
							  color: '#ffa64d',
							  weight: 2,
							  fillOpacity: 0.5
						  };
					  },
					  onEachFeature: function (feature, layer) {
						  layer.on('mouseover', function(e) {
							  layer.setStyle({
								  weight: 4,
								  fillOpacity: 0.8
							  });
							  info.update(layer.feature.properties);
						  })
						  .on('mouseout', function(e) {
							  geojson.resetStyle(layer);
							  info.update();
						  });
					  }
				  });
					geojson.addTo(map);
					var boundsLayer = geojson.getBounds();
					map.fitBounds(boundsLayer);
					map.options.maxBounds = boundsLayer;
					map.options.minZoom = map.getZoom();
					console.log(map.getZoom());
		// Maker pin
			var offerorPointlat1 = <?php echo json_encode($latitude_array1);?>;
			var offerorPointlong1 = <?php echo json_encode($longitude_array1);?>;
			var offerorPoints1 = [];
			
			var offerorPointlat2 = <?php echo json_encode($latitude_array2);?>;
			var offerorPointlong2 = <?php echo json_encode($longitude_array2);?>;
			var offerorPoints2 = [];
			
			var offerorPointlat3 = <?php echo json_encode($latitude_array3);?>;
			var offerorPointlong3 = <?php echo json_encode($longitude_array3);?>;
			var offerorPoints3 = [];
			
			for (var i = 0; i < offerorPointlat1.length; i++) {
				var arr11 = offerorPointlat1[i];
				var arr12 = offerorPointlong1[i];
				offerorPoints1.push(arr11);
				offerorPoints1.push(arr12);
			}
			for (var i = 0; i < offerorPointlat2.length; i++) {
				var arr2 = offerorPointlat2[i];
				var arr3 = offerorPointlong2[i];
				offerorPoints2.push(arr2);
				offerorPoints2.push(arr3);
			}
			for (var i = 0; i < offerorPointlat3.length; i++) {
				var arr31 = offerorPointlat3[i];
				var arr32 = offerorPointlong3[i];
				offerorPoints3.push(arr31);
				offerorPoints3.push(arr32);
			}
			//console.log('Accommodations:'+ offerorPoints1);
			//console.log('Jobs:'+ offerorPoints2);
			//console.log('Courses:'+ offerorPoints3);
			for (var i = 0; i < offerorPoints1.length;  i=i+2) {
				circle1 = new L.circle([offerorPoints1[i],offerorPoints1[i+1]],
						10000,{
						color:' #ff4d4d',
						fillColor: ' #ff4d4d',
						fillOpacity: 1
					}
				).bindPopup('Accommodations')
				.addTo(map);
				circle1.on('mouseover', function (e) { this.openPopup();  });
				circle1.on('mouseout', function (e) { this.closePopup(); });
			}
			
			for (var i = 0; i < offerorPoints2.length;  i=i+2) {
				circle = new L.circle([offerorPoints2[i],offerorPoints2[i+1]],
						10000,{
						color:'#0d78f2',
						fillColor: '#0d78f2',
						fillOpacity: 10
					}
				).bindPopup('Jobs')
				.addTo(map);
				circle.on('mouseover', function (e) { this.openPopup();  });
				circle.on('mouseout', function (e) { this.closePopup(); });
			}
			for (var i = 0; i < offerorPoints3.length;  i=i+2) {
				circle3 = new L.circle([offerorPoints3[i],offerorPoints3[i+1]],
						10000,{
						color:'#009933',
						fillColor: '#009933',
						fillOpacity: 10
					}
				).bindPopup('Courses')
				.addTo(map);
				circle3.on('mouseover', function (e) { this.openPopup();  });
				circle3.on('mouseout', function (e) { this.closePopup(); });
			}
		});
		})();

  </script>
</body>

</html>