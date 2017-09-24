<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>VCare - Infographics</title>
  <link rel="stylesheet" href="css/style.css"> <!-- Resource style -->
  <!-- Template CSS -->
  <!-- Bootstrap 3.3.7 -->
  <link rel="stylesheet" href="bower_components/bootstrap/dist/css/bootstrap.min.css">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="bower_components/font-awesome/css/font-awesome.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="bower_components/Ionicons/css/ionicons.min.css">
  <!-- jvectormap -->
  <link rel="stylesheet" href="bower_components/jvectormap/jquery-jvectormap.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="dist/css/AdminLTE.min.css">
  
  <link rel="stylesheet" href="bower_components/morris.js/morris.css">
  <!-- AdminLTE Skins. Choose a skin from the css/skins
       folder instead of downloading all of them to reduce the load. -->
  <link rel="stylesheet" href="dist/css/skins/_all-skins.min.css">
  <!-- Template CSS -->
  
  <!-- Slide show css-->
		<link rel="stylesheet" type="text/css" href="leaf7/css/demo.css" />
        <link rel="stylesheet" type="text/css" href="leaf7/css/style.css" />
		<script type="text/javascript" src="leaf7/js/modernizr.custom.04022.js"></script>
		
  <!-- Slide show css-->
  
  <!-- Timeline CSS -->
	<link rel="stylesheet" href="leaf2/bower_components/bootstrap/dist/css/bootstrap.min.css">
	<link rel="stylesheet" href="css/reset.css"> <!-- CSS reset -->
	
	<script src="js/modernizr.js"></script> <!-- Modernizr -->
	<script src="leaf1/js/modernizr.custom.72111.js"></script>
  <!-- Timeline CSS -->
  
  <!--Rotating Word CSS-->
        <link rel="stylesheet" type="text/css" href="leaf1/css/demo.css" />
        <link rel="stylesheet" type="text/css" href="leaf1/css/style5.css" />
  <!--Rotating Word CSS-->
  
  <!--Swatch Book CSS-->
		<link rel="stylesheet" type="text/css" href="leaf8/css/demo.css" />
        <link rel="stylesheet" type="text/css" href="leaf8/css/style4.css" />
		<script type="text/javascript" src="leaf8/js/modernizr.custom.79639.js"></script> 
  <!--Swatch Book CSS-->
  
  <style>
			.no-cssanimations .rw-words span:first-child{
				opacity: 1;
				color: #fff;
				text-shadow: none;
			}
			
.cd-timeline-img img {
  display: block;
  width: 24px;
  height: 24px;
  position: relative;
  left: 35%;
  top: 35%;
  margin-left: -12px;
  margin-top: -12px;
}

.h1{
	font-family: 'Source Sans Pro',sans-serif;
}
		</style>
  	
		
</head>
<body class="hold-transition skin-blue sidebar-mini">
<div class="wrapper">

  <header class="main-header" style="max-height: 50px !important;">

    <!-- Logo -->
    <a href="#" class="logo">
      <!-- mini logo for sidebar mini 50x50 pixels -->
      <span class="logo-mini"><b>VC</b></span>
      <!-- logo for regular state and mobile devices -->
      <span class="logo-lg"><b>VCare </b>- Infographics</span>
    </a>

       <!-- Header Navbar: style can be found in header.less -->
    <nav class="navbar navbar-static-top">
      <!-- Sidebar toggle button-->
      <a href="#" class="sidebar-toggle" data-toggle="push-menu" role="button">
        <span class="sr-only">Toggle navigation</span>
      </a>
     </nav>
  </header>
  <!-- Left side column. contains the logo and sidebar -->
  <aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
      
      <!-- sidebar menu: : style can be found in sidebar.less -->
      <ul class="sidebar-menu" data-widget="tree">
        <li class="header">MAIN NAVIGATION</li>
        <li>
          <a href="index.php">
            <i class="fa fa-dashboard"></i> <span>Personal Care</span>
           </a>
        </li>
        <li class="active">
          <a href="around_my_country.php">
            <i class="fa fa-info-circle"></i> <span>Around My Country</span>
          </a>
        </li>
      </ul>
    </section>
    <!-- /.sidebar -->
  </aside>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Non Communicable Diseases Infographics
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">Around My Country</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
		 
     
	<section id="cd-timeline" class="cd-container">
		<div class="cd-timeline-block">
			<div class="cd-timeline-img cd-picture">
				<img src="img/leaf1.png" style="height:40px; width:40px;"alt="Picture1">
			</div> <!-- cd-timeline-img -->

			<div class="cd-timeline-content">
				<h2></h2>
			
				<div class="container-leaf1">
				<section class="rw-wrapper">
				<h2 class="rw-sentence">
					<span>Non-Communicable diseases (NCDs)</span>
					<span>A growing burden of India</span>
					<div class="rw-words">
						<span>Cardiovascular Diseases</span>
						<span>Diabetes</span>
						<span>Cancer</span>
					</div>
				</h2>
			</section>
			
			</div>
			<p>&nbsp;</p>
				
			</div> <!-- cd-timeline-content -->
		</div> <!-- cd-timeline-block -->
<div class="cd-timeline-block">
			<div class="cd-timeline-img cd-picture">
				<img src="img/leaf2.png" style="height:40px; width:40px;"alt="Picture2">
			</div> <!-- cd-timeline-img -->

			<div class="cd-timeline-content">
				<h2>Percentage of people deceased every year</h2>
            <div class="box-body">
			<div class="row">
                <div class="col-md-8">
              <canvas id="pieChart" style="height:250px; width:250px;"></canvas>
            </div>
			<div class="col-md-4">
                  <ul class="chart-legend clearfix">
                    <li><i class="fa fa-circle-o text-red"></i> Cardiovascular Diseases</li>
                    <li><i class="fa fa-circle-o text-green"></i> Cancer</li>
                    <li><i class="fa fa-circle-o text-yellow"></i> Diabetes</li>
                  </ul>
                </div>
				</div>
				</div>
            <!-- /.box-body -->
          
			</div> <!-- cd-timeline-content -->
		</div> <!-- cd-timeline-block -->

		<div class="cd-timeline-block">
			<div class="cd-timeline-img cd-location">
				<img src="img/leaf3.png" style="height:40px; width:40px;"alt="Picture3">
			</div> <!-- cd-timeline-img -->

			<div class="cd-timeline-content">
				<h2>Diabetes Symptoms</h2>
				<div class="row">
				<div class="col-md-12">
          <!-- LINE CHART -->
          
            <div class="box-body">
              <div class="chart">
                <canvas id="lineChart" style="height:250px"></canvas>
              </div>
            </div>
            <!-- /.box-body -->
          
		  </div>
		  <div class="row">
		  <div class="col-md-6">
		  <ul class="chart-legend clearfix">
                    <li><i class="fa fa-circle-o" style="background-color:rgba(220,220,220,1)"></i> % you may be afected by disease</li>
                    
           </ul>
		  </div>
		  <div class="col-md-6">
		  <ul class="chart-legend clearfix">
                    <li><i class="fa fa-circle-o"  style="background-color:rgba(60,141,188,1)"></i> % you can be cured at this stage</li>
				</ul>
		  </div>
		  </div>
		 
		  </div>
				
			</div> <!-- cd-timeline-content -->
		</div> <!-- cd-timeline-block -->
		
		<div class="cd-timeline-block">
			<div class="cd-timeline-img cd-location">
				<img src="img/leaf4.png" style="height:40px; width:40px;"alt="Picture3">
			</div> <!-- cd-timeline-img -->

			<div class="cd-timeline-content"  style="background-color: #D7F2ED">
				<h2>Leading Causes Of NCDs</h2>
				<img src="leaf2/causes.jpg" alt="Mountain View" style="width:450px;height:228px;">
			</div> <!-- cd-timeline-content -->
		</div> <!-- cd-timeline-block -->
		
		
		
		<div class="cd-timeline-block">
			<div class="cd-timeline-img cd-location">
				<img src="img/leaf3.png" style="height:40px; width:40px;"alt="Picture3">
			</div> <!-- cd-timeline-img -->

			<div class="cd-timeline-content">
				<h2>Deceased due to NCDs</h2>
				<div class="row">
				
		  <div class="col-md-12">
		  <!--- bar chart-->
		  
              <div class="box-body">
              <div class="chart">
                <canvas id="barChart" style="height:230px"></canvas>
              </div>
            </div>
          </div>
		  
		  <div class="row">
		  <div class="col-md-4">
		  <ul class="chart-legend clearfix">
                    <li><i class="fa fa-circle-o" style="background-color:rgba(220,220,220,1);"></i> Cancer</li>
                    
           </ul>
		  </div>
		  <div class="col-md-4">
		  <ul class="chart-legend clearfix">
                    <li><i class="fa fa-circle-o" style="background-color:rgba(0,128,128,1);"></i> Diabetes</li>
				</ul>
		  </div>
		  <div class="col-md-4">
		  <ul class="chart-legend clearfix">
                    <li><i class="fa fa-circle-o" style="background-color:#3b8bba;"></i> Cardiovascular Diseases</li>
				</ul>
		  </div>
		  </div>
		  </div>
				
			</div> <!-- cd-timeline-content -->
		</div> <!-- cd-timeline-block -->


		<div class="cd-timeline-block">
			<div class="cd-timeline-img cd-picture">
				<img src="img/leaf5.png" style="height:40px; width:40px;"alt="Picture3">
			</div> <!-- cd-timeline-img -->

			<div class="cd-timeline-content">
			<h2>Sadest part of NCDs</h2>
			<div class="sp-slideshow" style="width:400px; height:400px;">
			
				<input id="button-1" type="radio" name="radio-set" class="sp-selector-1" checked="checked" />
				<label for="button-1" class="button-label-1"></label>
				
				<input id="button-2" type="radio" name="radio-set" class="sp-selector-2" />
				<label for="button-2" class="button-label-2"></label>
				
				<input id="button-3" type="radio" name="radio-set" class="sp-selector-3" />
				<label for="button-3" class="button-label-3"></label>
				
				
				<label for="button-1" class="sp-arrow sp-a1"></label>
				<label for="button-2" class="sp-arrow sp-a2"></label>
				<label for="button-3" class="sp-arrow sp-a3"></label>
				
				<div class="sp-content">
					<div class="sp-parallax-bg"></div>
					<ul class="sp-slider clearfix">
						<li><img src="leaf7/images/1.jpg" alt="image01" style="width:100%; height:150%;"/></li>
						<li><img src="leaf7/images/2.jpg" alt="image02" style="width:100%; height:150%;"/></li>
						<li><img src="leaf7/images/3.jpg" alt="image03" style="width:100%; height:150%;"/></li>
					</ul>
				</div><!-- sp-content -->
				
			</div>
			</div> <!-- cd-timeline-content -->
		</div> <!-- cd-timeline-block -->

		
		<div class="cd-timeline-block">
			<div class="cd-timeline-img cd-location">
				<img src="img/leaf6.png" style="height:40px; width:40px;"alt="Picture3">
			</div> <!-- cd-timeline-img -->
		</div> 
		
		
		
			<section class="main">
			
				<div id="sb-container" class="sb-container">
				
					<div>
						<img src="alcohol.png"  alt="Drug Usage" style="height:75px; width:75px;">
						<h4><span>Reduce Drug Usage</span></h4>
					</div>
					<div>
						<img src="diet.png"  alt="Healthy Diet" style="height:75px; width:75px;">
						<h4><span>Follow Healthy Diet</span></h4>
					</div>	
					<div>
						<img src="checkup.png"  alt="Health Checkup" style="height:75px; width:75px;">
						<h4><span>Preventive Health Checkups</span></h4>
					</div>	
					<div>
						<img src="exercise.png"  alt="Excercise" style="height:75px; width:75px;">
						<h4><span>Regular Excercises</span></h4>
					</div>	
					<div>
						<img src="sleep.png"  alt="Sleep" style="height:75px; width:75px;">
						<h4><span>Get enough sleep</span></h4>											
					</div>	

					<div>
						<h4><span>Preventions</span></h4>
						<h5><span>NCD</span></h5>											
					</div>
					
					
				</div><!-- sb-container -->
				
			</section>
				<!--<h2>Title of section 4</h2>
				<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Iusto, optio, dolorum provident rerum aut hic quasi placeat iure tempora laudantium ipsa ad debitis unde? Iste voluptatibus minus veritatis qui ut.</p>
				<a href="#0" class="cd-read-more">Read more</a>-->
		

		
		<div class="cd-timeline-block">
			<div class="cd-timeline-img cd-location">
				<img src="img/leaf7.png" style="height:40px; width:40px;"alt="Picture3">
			</div> <!-- cd-timeline-img -->

			<div class="cd-timeline-content">
				<h2>Thank You!</h2>
				<p>We hope you now have some knowledge about origin and prevention of NCDs from above presentation!</p>
			</div> <!-- cd-timeline-content -->
		</div> <!-- cd-timeline-block -->
		<div class="chart">
                <canvas id="areaChart" style="height:2px"></canvas>
              </div>
	</section> <!-- cd-timeline -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

  <footer class="main-footer">
    <div class="pull-right hidden-xs">
      <b>Version</b> 2.4.0
    </div>
    <strong>Copyright &copy; 2017 <a href="#">Team 13</a>.</strong> All rights reserved.
  </footer>

  
</div>


<!-- JS for timelines-->

<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
<script src="js/main.js"></script> <!-- Resource jQuery -->
<!-- jQuery 3 -->
<script src="leaf2/bower_components/jquery/dist/jquery.min.js"></script>
<!-- Bootstrap 3.3.7 -->
<script src="leaf2/bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
<!-- ChartJS -->
<script src="leaf2/bower_components/Chart.js/Chart.js"></script>
<!-- FastClick -->
<script src="leaf2/bower_components/fastclick/lib/fastclick.js"></script>
<!-- AdminLTE App -->
<script src="leaf2/dist/js/adminlte.min.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="leaf2/dist/js/demo.js"></script>
<script type="text/javascript" src="leaf8/js/jquery.swatchbook.js"></script>
<!-- JS for timelines end-->
<script>
$(function () {
var areaChartCanvas = $('#areaChart').get(0).getContext('2d')
    // This will get the first returned node in the jQuery collection.
    var areaChart       = new Chart(areaChartCanvas)

var areaChartData = {
      labels  : ['Increased Thirst', 'Frequent Urination', 'Hunger', 'Fatigue', 'Blurred Vision'],
      datasets: [
        {
          label               : '% you may be afected by disease',
          fillColor           : 'rgba(210, 214, 222, 1)',
          strokeColor         : 'rgba(210, 214, 222, 1)',
          pointColor          : 'rgba(210, 214, 222, 1)',
          pointStrokeColor    : '#c1c7d1',
          pointHighlightFill  : '#fff',
          pointHighlightStroke: 'rgba(220,220,220,1)',
          data                : [65, 59, 80, 81, 56]
        },
        {
          label               : '% you can be cured',
          fillColor           : 'rgba(60,141,188,0.9)',
          strokeColor         : 'rgba(60,141,188,0.8)',
          pointColor          : '#3b8bba',
          pointStrokeColor    : 'rgba(60,141,188,1)',
          pointHighlightFill  : '#fff',
          pointHighlightStroke: 'rgba(60,141,188,1)',
          data                : [28, 48, 40, 19, 86]
        }
      ]
    }

	
	
	var areaChartDeceasedData = {
      labels  : ['2012', '2012', '2013', '2014', '2015'],
      datasets: [
        {
          label               : 'Diabetes',
          fillColor           : 'rgba(210, 214, 222, 1)',
          strokeColor         : 'rgba(210, 214, 222, 1)',
          pointColor          : 'rgba(210, 214, 222, 1)',
          pointStrokeColor    : '#c1c7d1',
          pointHighlightFill  : '#fff',
          pointHighlightStroke: 'rgba(220,220,220,1)',
          data                : [65000, 58090, 55227, 49097, 42000]
        },
        {
          label               : 'Cancer',
          fillColor           : 'rgba(60,141,188,0.9)',
          strokeColor         : 'rgba(60,141,188,0.8)',
          pointColor          : '#3b8bba',
          pointStrokeColor    : 'rgba(60,141,188,1)',
          pointHighlightFill  : '#fff',
          pointHighlightStroke: 'rgba(60,141,188,1)',
          data                : [15634, 7141, 10753, 6739, 5076]
        },
        {
          label               : 'Cardiovascular Diseases',
          fillColor           : 'rgba(60,141,188,0.9)',
          strokeColor         : 'rgba(60,141,188,0.8)',
          pointColor          : '#3b8bba',
          pointStrokeColor    : 'rgba(60,141,188,1)',
          pointHighlightFill  : '#fff',
          pointHighlightStroke: 'rgba(0,128,128,1)',
          data                : [18976, 18326, 16936, 12974, 10865]
        }
      ]
    }

	
    var areaChartOptions = {
      //Boolean - If we should show the scale at all
      showScale               : true,
      //Boolean - Whether grid lines are shown across the chart
      scaleShowGridLines      : false,
      //String - Colour of the grid lines
      scaleGridLineColor      : 'rgba(0,0,0,.05)',
      //Number - Width of the grid lines
      scaleGridLineWidth      : 1,
      //Boolean - Whether to show horizontal lines (except X axis)
      scaleShowHorizontalLines: true,
      //Boolean - Whether to show vertical lines (except Y axis)
      scaleShowVerticalLines  : true,
      //Boolean - Whether the line is curved between points
      bezierCurve             : true,
      //Number - Tension of the bezier curve between points
      bezierCurveTension      : 0.3,
      //Boolean - Whether to show a dot for each point
      pointDot                : false,
      //Number - Radius of each point dot in pixels
      pointDotRadius          : 4,
      //Number - Pixel width of point dot stroke
      pointDotStrokeWidth     : 1,
      //Number - amount extra to add to the radius to cater for hit detection outside the drawn point
      pointHitDetectionRadius : 20,
      //Boolean - Whether to show a stroke for datasets
      datasetStroke           : true,
      //Number - Pixel width of dataset stroke
      datasetStrokeWidth      : 2,
      //Boolean - Whether to fill the dataset with a color
      datasetFill             : true,
      //String - A legend template
      legendTemplate          : '<ul class="<%=name.toLowerCase()%>-legend"><% for (var i=0; i<datasets.length; i++){%><li><span style="background-color:<%=datasets[i].lineColor%>"></span><%if(datasets[i].label){%><%=datasets[i].label%><%}%></li><%}%></ul>',
      //Boolean - whether to maintain the starting aspect ratio or not when responsive, if set to false, will take up entire container
      maintainAspectRatio     : true,
      //Boolean - whether to make the chart responsive to window resizing
      responsive              : true
    }

    //Create the line chart
    //areaChart.Line(areaChartData, areaChartOptions)

    //-------------
    //- LINE CHART -
    //--------------
    var lineChartCanvas          = $('#lineChart').get(0).getContext('2d')
    var lineChart                = new Chart(lineChartCanvas)
    var lineChartOptions         = areaChartOptions
    lineChartOptions.datasetFill = false
    lineChart.Line(areaChartData, lineChartOptions)
	
	//------------------------------------------
//	var lineChart1Canvas          = $('#lineChart1').get(0).getContext('2d')
  //  var lineChart1               = new Chart(lineChart1Canvas)
  //  var lineChart1Options         = areaChartOptions
  //  lineChart1Options.datasetFill = false
  //  lineChart1.Line(areaChartData, lineChart1Options)
 //-------------
    //- PIE CHART -
    //-------------
    // Get context with jQuery - using jQuery's .get() method.
    var pieChartCanvas = $('#pieChart').get(0).getContext('2d')
    var pieChart       = new Chart(pieChartCanvas)
    var PieData        = [
      {
        value    : 60,
        color    : '#f56954',
        highlight: '#f56954',
        label    : 'Cardiovascular Disease'
      },
      {
        value    : 17,
        color    : '#00a65a',
        highlight: '#00a65a',
        label    : 'Cancer'
      },
      {
        value    : 23,
        color    : '#f39c12',
        highlight: '#f39c12',
        label    : 'Diabetes'
      }
    ]
    var pieOptions     = {
      //Boolean - Whether we should show a stroke on each segment
      segmentShowStroke    : true,
      //String - The colour of each segment stroke
      segmentStrokeColor   : '#fff',
      //Number - The width of each segment stroke
      segmentStrokeWidth   : 2,
      //Number - The percentage of the chart that we cut out of the middle
      percentageInnerCutout: 50, // This is 0 for Pie charts
      //Number - Amount of animation steps
      animationSteps       : 100,
      //String - Animation easing effect
      animationEasing      : 'easeOutBounce',
      //Boolean - Whether we animate the rotation of the Doughnut
      animateRotate        : true,
      //Boolean - Whether we animate scaling the Doughnut from the centre
      animateScale         : false,
      //Boolean - whether to make the chart responsive to window resizing
      responsive           : true,
      // Boolean - whether to maintain the starting aspect ratio or not when responsive, if set to false, will take up entire container
      maintainAspectRatio  : true,
      //String - A legend template
      legendTemplate       : '<ul class="<%=name.toLowerCase()%>-legend"><% for (var i=0; i<segments.length; i++){%><li><span style="background-color:<%=segments[i].fillColor%>"></span><%if(segments[i].label){%><%=segments[i].label%><%}%></li><%}%></ul>'
    }
    //Create pie or douhnut chart
    // You can switch between pie and douhnut using the method below.
    pieChart.Doughnut(PieData, pieOptions)
	
	 //-------------
    //- BAR CHART -
    //-------------
    var barChartCanvas                   = $('#barChart').get(0).getContext('2d')
    var barChart                         = new Chart(barChartCanvas)
    var barChartData                     = areaChartDeceasedData 
    barChartData.datasets[1].fillColor   = '#00a65a'
    barChartData.datasets[1].strokeColor = '#00a65a'
    barChartData.datasets[1].pointColor  = '#00a65a'
    var barChartOptions                  = {
      //Boolean - Whether the scale should start at zero, or an order of magnitude down from the lowest value
      scaleBeginAtZero        : true,
      //Boolean - Whether grid lines are shown across the chart
      scaleShowGridLines      : true,
      //String - Colour of the grid lines
      scaleGridLineColor      : 'rgba(0,0,0,.05)',
      //Number - Width of the grid lines
      scaleGridLineWidth      : 1,
      //Boolean - Whether to show horizontal lines (except X axis)
      scaleShowHorizontalLines: true,
      //Boolean - Whether to show vertical lines (except Y axis)
      scaleShowVerticalLines  : true,
      //Boolean - If there is a stroke on each bar
      barShowStroke           : true,
      //Number - Pixel width of the bar stroke
      barStrokeWidth          : 2,
      //Number - Spacing between each of the X value sets
      barValueSpacing         : 5,
      //Number - Spacing between data sets within X values
      barDatasetSpacing       : 1,
      //String - A legend template
      legendTemplate          : '<ul class="<%=name.toLowerCase()%>-legend"><% for (var i=0; i<datasets.length; i++){%><li><span style="background-color:<%=datasets[i].fillColor%>"></span><%if(datasets[i].label){%><%=datasets[i].label%><%}%></li><%}%></ul>',
      //Boolean - whether to make the chart responsive
      responsive              : true,
      maintainAspectRatio     : true
    }

    barChartOptions.datasetFill = false
    barChart.Bar(barChartData, barChartOptions)
	 })
</script>
		<script type="text/javascript">
			$(function() {
			
				$( '#sb-container' ).swatchbook( {
					speed : 500,
					easing : 'ease-out',
					// index of initial centered item
					center : 7,
					// number of degrees that is between each item
					angleInc : 14,
					// amount in degrees for the opened item's next sibling
					proximity : 40,
					// amount in degrees between the opened item's next siblings
					neighbor : 2
				} );
			
			});
		</script>
		
		
</body>
</html>
