<!-- top tiles -->
<div class="row tile_count">
<div class="col-md-2 col-sm-4 col-xs-6 tile_stats_count">
<span class="count_top"><i class="fa fa-user"></i> Total Users</span>
<div class="count"><?php echo count($totaluser); ?></div>
</div>
<div class="col-md-2 col-sm-4 col-xs-6 tile_stats_count">
<span class="count_top"><i class="fa fa-clock-o"></i> Total Orders</span>
<div class="count"><?php echo count($totalorder); ?></div>
</div>
<div class="col-md-2 col-sm-4 col-xs-6 tile_stats_count">
<span class="count_top"><i class="fa fa-user"></i> Total Packages</span>
<div class="count"><?php echo count($totalpackage); ?></div>
</div>
<div class="col-md-2 col-sm-4 col-xs-6 tile_stats_count">
<span class="count_top"><i class="fa fa-user"></i> Total Industries</span>
<div class="count"><?php echo count($totalindustry); ?></div>
</div>
<div class="col-md-2 col-sm-4 col-xs-6 tile_stats_count">
<span class="count_top"><i class="fa fa-user"></i> Total Themes</span>
<div class="count"><?php echo count($totaltheme); ?></div>
</div>
<?php foreach ($totalamnt as $totalamount) {
		$total_collection[] = $totalamount['amount_paid'];
}
?>
<div class="col-md-2 col-sm-4 col-xs-6 tile_stats_count">
<span class="count_top"><i class="fa fa-user"></i> Total Collections</span>
<div class="count"><?php echo array_sum($total_collection); ?></div>
</div>
</div>
<!-- /top tiles -->
<div class="row">
<div class="col-md-12 col-sm-12 col-xs-12">
<div class="dashboard_graph">
<div class="row x_title">
<div class="col-md-6">
<h3>Network Activities</h3>
</div>
<div class="col-md-6">
<div id="reportrange" class="pull-right" style="background: #fff; cursor: pointer; padding: 5px 10px; border: 1px solid #ccc">
<i class="glyphicon glyphicon-calendar fa fa-calendar"></i>
<span>December 30, 2014 - January 28, 2015</span> <b class="caret"></b>
</div>
</div>
</div>
<div class="col-md-9 col-sm-9 col-xs-12">
<div id="chart_plot_01" class="demo-placeholder"></div>
</div>
<div class="col-md-3 col-sm-3 col-xs-12 bg-white">
<div class="x_title">
<h2>Performance</h2>
<div class="clearfix"></div>
</div>

<div class="col-md-12 col-sm-12 col-xs-6">
<div>
<p>Users</p>
<div class="">
<div class="progress progress_sm" style="width: 76%;">
<div class="progress-bar bg-green" role="progressbar" data-transitiongoal="80"></div>
</div>
</div>
</div>
<div>
<p>Packages</p>
<div class="">
<div class="progress progress_sm" style="width: 76%;">
<div class="progress-bar bg-green" role="progressbar" data-transitiongoal="60"></div>
</div>
</div>
</div>
</div>
<div class="col-md-12 col-sm-12 col-xs-6">
<div>
<p>WebApp Orders</p>
<div class="">
<div class="progress progress_sm" style="width: 76%;">
<div class="progress-bar bg-green" role="progressbar" data-transitiongoal="40"></div>
</div>
</div>
</div>
<div>
<p>Payments</p>
<div class="">
<div class="progress progress_sm" style="width: 76%;">
<div class="progress-bar bg-green" role="progressbar" data-transitiongoal="50"></div>
</div>
</div>
</div>
</div>
</div>
<div class="clearfix"></div>
</div>
</div>
</div>
<br />
<div class="col-md-6 col-sm-6 col-xs-12">
<div class="x_panel tile fixed_height_320">
<div class="x_title">
<h2>Manage</h2>
<ul class="nav navbar-right panel_toolbox">
<li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
</li>
<li><a class="close-link"><i class="fa fa-close"></i></a>
</li>
</ul>
<div class="clearfix"></div>
</div>
<div class="x_content">
<div class="dashboard-widget-content">
<ul class="quick-list">
<li><i class="fa fa-calendar-o"></i><a href="<?= base_url(); ?>admin/users">Users</a>
</li>
<li><i class="fa fa-bars"></i><a href="<?= base_url(); ?>admin/industry">Industries</a>
</li>
<li><i class="fa fa-bar-chart"></i><a href="<?= base_url(); ?>admin/packages">Packages</a> </li>
<li><i class="fa fa-line-chart"></i><a href="<?= base_url(); ?>admin/category">Theme Category</a>
</li>
<li><i class="fa fa-bar-chart"></i><a href="<?= base_url(); ?>admin/themes">Theme</a> </li>
<li><i class="fa fa-line-chart"></i><a href="<?= base_url(); ?>admin/webapp">WebApp</a>
</li>
<li><i class="fa fa-area-chart"></i><a href="<?= base_url(); ?>admin/payments">Payment</a>
</li>
</ul>

<div class="sidebar-widget">
<h4>Profile Completion</h4>
<canvas width="150" height="80" id="chart_gauge_01" class="" style="width: 160px; height: 100px;"></canvas>
<div class="goal-wrapper">
<span id="gauge-text" class="gauge-value pull-left">0</span>
<span class="gauge-value pull-left">%</span>
<span id="goal-text" class="goal-value pull-right">100%</span>
</div>
</div>
</div>
</div>
</div>
</div>
<div class="col-md-6 col-sm-6 col-xs-12">
<div class="x_panel">
<div class="x_title">
<h2>Weather<small>Sessions</small></h2>
<ul class="nav navbar-right panel_toolbox">
<li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
</li>
<li><a class="close-link"><i class="fa fa-close"></i></a>
</li>
</ul>
<div class="clearfix"></div>
</div>
<div class="x_content">
<div class="row">
<div class="col-sm-12">
<div class="temperature"><b>Monday</b>, 07:30 AM
<span>F</span>
<span><b>C</b></span>
</div>
</div>
</div>
<div class="row">
<div class="col-sm-4">
<div class="weather-icon">
<canvas height="84" width="84" id="partly-cloudy-day"></canvas>
</div>
</div>
<div class="col-sm-8">
<div class="weather-text">
<h2>Texas <br><i>Partly Cloudy Day</i></h2>
</div>
</div>
</div>
<div class="col-sm-12">
<div class="weather-text pull-right">
<h3 class="degrees">23</h3>
</div>
</div>

<div class="clearfix"></div>

<div class="row weather-days">
<div class="col-sm-2">
<div class="daily-weather">
<h2 class="day">Mon</h2>
<h3 class="degrees">25</h3>
<canvas id="clear-day" width="32" height="32"></canvas>
<h5>15 <i>km/h</i></h5>
</div>
</div>
<div class="col-sm-2">
<div class="daily-weather">
<h2 class="day">Tue</h2>
<h3 class="degrees">25</h3>
<canvas height="32" width="32" id="rain"></canvas>
<h5>12 <i>km/h</i></h5>
</div>
</div>
<div class="col-sm-2">
<div class="daily-weather">
<h2 class="day">Wed</h2>
<h3 class="degrees">27</h3>
<canvas height="32" width="32" id="snow"></canvas>
<h5>14 <i>km/h</i></h5>
</div>
</div>
<div class="col-sm-2">
<div class="daily-weather">
<h2 class="day">Thu</h2>
<h3 class="degrees">28</h3>
<canvas height="32" width="32" id="sleet"></canvas>
<h5>15 <i>km/h</i></h5>
</div>
</div>
<div class="col-sm-2">
<div class="daily-weather">
<h2 class="day">Fri</h2>
<h3 class="degrees">28</h3>
<canvas height="32" width="32" id="wind"></canvas>
<h5>11 <i>km/h</i></h5>
</div>
</div>
<div class="col-sm-2">
<div class="daily-weather">
<h2 class="day">Sat</h2>
<h3 class="degrees">26</h3>
<canvas height="32" width="32" id="cloudy"></canvas>
<h5>10 <i>km/h</i></h5>
</div>
</div>
<div class="clearfix"></div>
</div>
</div>
</div>

</div>