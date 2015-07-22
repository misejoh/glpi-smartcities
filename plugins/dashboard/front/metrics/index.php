<?php
	include "metrics.inc.php";
?>

<!DOCTYPE html>
<html lang="en"><head>
<meta http-equiv="content-type" content="text/html; charset=UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta charset="utf-8">
    <meta http-equiv="refresh" content= "120"/>  
    <title>GLPI  -  <?php echo __('Metrics','dashboard'); ?></title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link href="../css/bootstrap.css" rel="stylesheet">
    <link href="controlfrog.css" rel="stylesheet" media="screen">   
	<!-- <link href="http://leapfrogui.com/controlfrog-v1.4/cf/favicon.ico" rel="shortcut icon" type="image/x-icon">-->
	<link rel="icon" href="../img/dash.ico" type="image/x-icon" />
   <link rel="shortcut icon" href="../img/dash.ico" type="image/x-icon" />
	
	<script src="../js/jquery.js"></script>    
	<script src="moment.js"></script>	
	<script src="jquery.easypiechart.js"></script>
	<script src="gauge.js"></script>	
	<script src="chart.js"></script>
	<script src="jquery-sparkline.js"></script>			
   <script src="../js/bootstrap.min.js"></script>
   <script src="controlfrog-plugins.js"></script>
	<link href="../css/font-awesome.css" type="text/css" rel="stylesheet" /> 
	
	<script src="../js/highcharts.js" type="text/javascript" ></script>
	<script src="../js/highcharts-3d.js" type="text/javascript" ></script>
	<script src="../js/themes/dark-unica.js" type="text/javascript" ></script>
	
	<script src="../js/modules/no-data-to-display.js" type="text/javascript" ></script>
    
    <!--[if lt IE 9]>
		<script src="../../js/respond.min.js"></script>
		<script src="../../js/excanvas.min.js"></script>
	<![endif]-->
        
	<script>
		var themeColour = 'black';
	</script>
    <script src="controlfrog.js"></script>
<style type="text/css">.jqstooltip { position: absolute;left: 0px;top: 0px;visibility: hidden;background: rgb(0, 0, 0) transparent;background-color: rgba(0,0,0,0.6);filter:progid:DXImageTransform.Microsoft.gradient(startColorstr=#99000000, endColorstr=#99000000);-ms-filter: "progid:DXImageTransform.Microsoft.gradient(startColorstr=#99000000, endColorstr=#99000000)";color: white;font: 10px arial, san serif;text-align: left;white-space: nowrap;padding: 5px;border: 1px solid white;z-index: 10000;}.jqsfield { color: white;font: 10px arial, san serif;text-align: left;}</style></head>

<body class="black" onload="initSpark('<?php echo $quantm2; ?>'); initSparkDay('<?php echo $quantd2; ?>'); initGauge('0','100','<?php echo $gauge_val; ?>'); initPie('<?php echo $res_days; ?>'); initFunnel('<?php echo $sta_values; ?>','<?php echo $sta_labels; ?>'); initRag('<?php echo $types; ?>','<?php echo $rag_labels; ?>'); initSingle1('<?php echo $satisf; ?>');">
	
	<div class="cf-nav cf-nav-state-min">
		<a href="" class="cf-nav-toggle">
			<span class="icon-bar"></span>
			<span class="icon-bar"></span>
			<span class="icon-bar"></span>
		</a>
		
		<ul>
			<li class="cf-nav-shortcut">
				<a href="../index.php">
					<span class="cf-nav-min"><i class="fa fa-home"></i></span>
					<span class="cf-nav-max">Home</span>
				</a>
			</li>
			<li class="current cf-nav-shortcut">
				<a href="index.php" class="current active">
					<span class="cf-nav-min">B</span>
					<span class="cf-nav-max">Black</span>
				</a>
			</li>
			<li class="cf-nav-shortcut">
				<a href="indexw.php">
					<span class="cf-nav-min">W</span>
					<span class="cf-nav-max">White</span>
				</a>
			</li>
		</ul>
	</div> 
	
	
<div class="container-fluid">	
<div class="cf-container cf-nav-active">

<div class="row-fluid" style="margin-top: 25px;">
<div class="col-lg-12" role="main">

	<div class="row-status" >
		<div style="min-heightx: 100px;" class="col-lg-5 cf-item-status tickets new">
			<header>
				<p><span></span><?php echo _x('status','New');?></p>
			</header>
			<div class="content" >
				<div class="metric5"><?php echo $new;?></div>
				<div class="metric-small5"><?php  percent($new,$newy); ?></div>
			</div>
		</div>
		
		<div style="min-height: 100px;" class="col-lg-5 cf-item-status tickets assign">
			<header>
				<p><span></span><?php echo __('Assigned');?></p>
			</header>
			<div class="content">
				<div class="metric5"><?php echo $assigned;?></div>
				<div class="metric-small5"><?php percent($assigned,$assignedy); ?></div>
			</div>
		</div>

		<div style="min-height: 100px;" class="col-lg-5 cf-item-status tickets pending">
			<header>
				<p><span></span><?php echo __('Pending');?></p>
			</header>
			<div class="content">
				<div class="metric5"><?php echo $pend;?></div>
				<div class="metric-small5"><?php percent($pend,$pendy); ?></div>
			</div>
		</div>

		<div style="min-height: 100px;" class="col-lg-5 cf-item-status tickets closed">
			<header>
				<p><span></span><?php echo __('Solved','dashboard');?></p>
			</header>
			<div class="content">
				<div class="metric5"><?php echo $solved;?></div>
				<div class="metric-small5"><?php percent($solved,$solvedy); ?></div>	
			</div>
		</div>

		<div style="min-height: 100px;" class="col-lg-5 cf-item-status tickets all">
			<header>
				<p><span></span><?php echo __('Total');?></p>
			</header>
			<div class="content">
				<div class="metric5"><?php echo $total;?></div>
				<div class="metric-small5"><?php percent($total,$totaly); ?></div>			
			</div>
		</div>
</div> <!-- fim row1 -->


<div class="row" style="margin-top: 10px;">	
		<div style="min-heightx: 300px;" class="col-lg-3 cf-item">
				<!--Display the time and date. For 12hr clock add class 'cf-td-12' to the 'cf-td' div -->
			<header>
				<p><span></span><?php echo __('Time')." &amp; ". __('Date'); ?> </p>
			</header>
			<div class="content">
				<div class="cf-td">
				<!-- <div class="cf-td cf-td-12"> -->
					<div class="cf-version metric"><?php echo 'GLPI '.$CFG_GLPI['version']; ?></div>
					<div class="cf-td-time metric hora"></div>
					<div class="cf-td-dd">
						<p class="cf-td-day metric-small" ></p>
						<p class="cf-td-date metric-small" ></p>
					</div>					
				</div>
			</div>
			</div> <!-- //end cf-item -->


		<div style="min-heightx: 300px;" class="col-lg-3 cf-item">
				<header>
					<p><span></span><?php echo __('Tickets Total','dashboard');?></p>
				</header>
				<div class="content">
					<div class="cf-svmc-sparkline">
					<div class="cf-svmc">
						<div class="metric total"></div>
						<div class="change metric-small">
							<div id="arrow"></div>
							<span class="large"></span><!-- <span class="small">.45%</span> -->
						</div>
					</div>
					<div class="cf-sparkline clearfix" style="margin-top:15px;">
						<div id="spark-1" class="sparkline">
							<canvas height="90" width="235" style="display: inline-block; width: 235px; height: 90; vertical-align: top;"></canvas>
						</div>
						<div style="height: 117px;" class="sparkline-value">
							<div class="metric-small"></div>
						</div>
					</div>
					</div>					
				</div>
			</div> <!-- //end cf-item -->
		
			
			<div style="min-heightx: 300px;" class="col-lg-3 cf-item">
				<header>
					<p><span></span><?php echo _n('Ticket','Tickets',2)." ".__('By day');?> </p>
				</header>
				<div class="content">
							
				 <div class="cf-svmc-sparkline">
						<div class="cf-svmc">
							<div class="metric total-month"></div>
							<div class="change metric-small daily">
								<div id="arrow-2"></div>
								<span class="large large-2"></span><!-- <span class="small">.45%</span> -->
							</div>
						</div>
						<div class="cf-sparkline clearfix" style="margin-top:15px;">
							<div id="spark-2" class="sparkline">
								<canvas height="90" width="235" style="display: inline-block; width: 235px; height: 90; vertical-align: top;"></canvas>
							</div>
							<div style="height: 117px;" class="sparkline-value">
								<div class="metric-small"></div>
							</div>
						</div>
					</div>					
				</div>
			</div> <!-- //end cf-item -->
								

			<div style="min-heightx: 290px;" class="col-lg-3 cf-item">
				<header>
					<p><span></span><?php echo _n('Ticket','Tickets',2)." ".__('Within','dashboard');?> - %</p>
				</header>				
				<div class="content cf-gauge" id="cf-gauge-1">
				
					<div class="val-current">
						<div class="metric" id="cf-gauge-1-m"></div>
					</div>
					<div class="canvas">
						<canvas height="180" width="285" id="cf-gauge-1-g"></canvas>
					</div>
					<div class="val-min">
						<div class="metric-small"></div>
					</div>
					<div class="val-max">
						<div class="metric-small"></div>						
					</div>
					
				</div>
			</div> <!-- //end cf-item -->										
		</div> <!-- //end row 1 -->
		

	
	<div class="row row-fluid" style="margin-top:40px;">					
									
						
			<div style="min-heightx: 300px;" class="col-lg-3 cf-item">
				<header>
					<p><span></span><?php echo __('Tickets by Source','dashboard') ;?></p>
				</header>
				<div class="content">
					<div id="cf-funnel-1" class="cf-funnelx" style="margin-top: -10px;">
						<?php include ("grafpie_origem.inc.php");  ?>
					</div>
				</div>
			</div> <!-- //end cf-item -->
			
			<div style="min-heightx: 300px;" class="col-lg-3 cf-item">
					<header>
						<p><span></span><?php echo _n('Ticket','Tickets',2)." ". __('by Type','dashboard') ;?></p>
					</header>
					<div class="content" >					
						<div id="cf-rag-1" class="cf-rag">
						<?php //include ("grafpie_tipo.inc.php");  ?>
						<div class="cf-bars"></div>
							<div class="cf-figs "></div>
								<div class="cf-txts "></div> 
						</div>
					</div>				
			</div> 	<!-- //end cf-item -->	

			
			<div style="min-heightx: 300px;" class="col-lg-3 cf-item">
				<header>
					<p><span></span><?php echo __('Resolution time') ;?></p>
				</header>
				<div class="content cf-piex" id="cf-pie-1" style="margin-left:0px;">
					<!-- <canvas style="width: 155px; height: 246px;" id="cf-pie-1-c" width="155" height="236"></canvas> -->
					<?php include ("grafpie_time_geral.inc.php");  ?>
				</div>
			</div> <!-- //end cf-item -->	
					

			<div style="min-heightx: 300px;" class="col-lg-3 cf-item">
				<header>
					<p><span></span><?php echo __('Satisfaction') ;?></p>
				</header>
				<div class="content cf-svp clearfix" id="svp-1">
					<div class="chart" data-percent="<?php echo $satisf; ?>" > <!--  data-layout="lg-3x"> -->
						<span class="percent"><?php echo $satisf; ?></span><sup></sup>
					</div>
				</div>
			</div> <!-- //end cf-item -->				
			
	</div> <!-- //end row -->
</div> <!-- //end main --> 
 	
</div> <!-- //end row -->		
		
</div> <!-- //end container -->

</div>

</body>
</html>
