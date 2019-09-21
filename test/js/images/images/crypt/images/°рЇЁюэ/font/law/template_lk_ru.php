<?php
defined('ACCESS') or die();
if(cfgSET('cfgOnOff') == "off" && $status != 1) {
	include "includes/errors/tehwork.php";
	exit();
} elseif(cfgSET('cfgOnOff') == "off" && $status == 1) {
	print '<p align="center" class="warn">Сайт отключен и недоступен для остальных пользователей!</p>';
}


?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Site Title-->
    <title>CABINET</title>
    <meta name="format-detection" content="telephone=no">
    <meta name="viewport" content="width=device-width, height=device-height, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
    <meta http-equiv="X-UA-Compatible" content="IE=Edge">
    <link rel="icon" href="assets/img/favicon.ico" type="image/x-icon">
    <!-- Stylesheets-->
    <link rel="stylesheet" type="text/css" href="/css/fullcalendar.css">
    <link rel="stylesheet" type="text/css" href="/css/admin-forms.css">
    <link rel="stylesheet" type="text/css" href="//fonts.googleapis.com/css?family=Arimo:400,700%7CRoboto:400,300,500,700">
    <link rel="stylesheet" type="text/css" href="/css/theme.css">
	
	
<script language="javascript" src="/files/scripts.js"></script>
<meta name="viewport" content="initial-scale=0.9, width=700, maximum-scale=1">
<!--js -->
<script type="text/javascript" src="/js/jquery-1.11.2.min.js">
</script>
<script type="text/javascript" src="js/jquery-ui-1.10.3.custom.min.js">
</script>
<script>
function sel() {$('select').styler();};$(document ).ready(function() {sel();});setInterval(sel, 1);
</script>
<link media="screen" href="/styles_acc.css" type="text/css" rel="stylesheet">
</head>
  <body class="dashboard-page">
    <!-- Start: Main-->
    <div id="main">
      <!--
      ---------------------------------------------------------------+
      "#sidebar_left" Helper Classes:
      -------------------------------------------------------------------+
      * Positioning Classes:
      '.affix' - Sets Sidebar Left to the fixed position
      * Available Skin Classes:
      .sidebar-dark (default no class needed)
      .sidebar-light
      .sidebar-light.light
      -------------------------------------------------------------------+
      Example: <aside id="sidebar_left" class="affix sidebar-light">
      Results: Fixed Left Sidebar with light/white background
      -----------------------------------------------------------------
      -->
      <!-- Start: Sidebar-->
      <aside id="sidebar_left" class="nano nano-light affix">
        <!--Navbar Branding-->
        <div class="navbar-branding"><a class="navbar-brand"><span class="text-white">Personal</span> Cabinet</a><span id="toggle_sidemenu_l" class="ad ad-lines"></span></div>
        <!-- Start: Sidebar Left Content-->
        <div class="sidebar-left-content nano-content">
          <!-- Start: Sidebar Header-->
          <header class="sidebar-header">
            <!-- Sidebar Widget - Author-->
            <div class="sidebar-widget author-widget">
              <div class="media"><a href="" class="media-left"><img src="/images/3.jpg" class="img-responsive"></a>
                <div class="media-body">
                  <div class="media-links"></div>
                  <div class="media-author"><?php print $login; ?></div><a href="/profile">Profile</a><a href="/exit.php" style="padding-left: 10px;">Exit</a>
				  <br/><b>Your balance: </b><?php print"$balance"; ?> $
                </div>
              </div>
            </div>
          </header>
          <!-- Start: Sidebar Menu-->
          <ul class="nav sidebar-menu">
            <li class="sidebar-label pt30">Menu</li>
            <li><a href="/deposit"><span class="fa">&nbsp</span><span class="sidebar-title">Make a contribution</span></a></li>
            <li><a href="/enter"><span class="fa">&nbsp</span><span class="sidebar-title">Refill</span></a></li>
			<li><a href="/deposits"><span class="fa">&nbsp</span><span class="sidebar-title">Deposit</span></a></li>
		
            <li><a href="/stat"><span class="fa">&nbsp</span><span class="sidebar-title">Operations</span></a></li>
			<li><a href="/withdrawal"><span class="fa">&nbsp</span><span class="sidebar-title">Withdrawa</span></a></li>
			<li><a href="/ref"><span class="fa">&nbsp</span><span class="sidebar-title">Ref.system</span></a></li>
			<li><a href="/exit.php"><span class="fa">&nbsp</span><span class="sidebar-title">Exit</span></a></li>
          </ul>
        </div>
      </aside>
      <section id="content_wrapper">
			<?php
	defined('ACCESS') or die();
	if(!$page) {
		include "includes/index.php";
	} elseif(file_exists("../".$page."/index.php")) {
     
		include "../".$page."/".$page."_ru.php";
	} else {
		include "includes/errors/404.php";
	}
?>
        <footer id="content-footer" class="affix">
          <div class="row">
            <div class="col-md-6"><span class="footer-legal">&copy; 2017.</span></div>
            <div class="col-md-6 text-right"></div>
          </div>
        </footer>
      </section>
    </div>
    <!-- core scripts-->
    <script src="/js/core.min2.js"></script>
    <!-- Theme Javascript-->
    <script src="/js/utility.js"></script>
    <script src="/js/demo.js"></script>
    <script src="/js/main.js"></script>
    <!-- Widget Javascript-->
    <script src="/js/widgets.js"></script>
    <script type="text/javascript">
      jQuery(document).ready(function () {
        "use strict";
        // Init Demo JS
        Demo.init();
        // Init Theme Core
        Core.init();
        $(document).ready(function () {
          demoHighCharts.init();
          runVectorMaps();
          $(window).trigger('resize');
        });
        // Init plugins for ".calendar-widget"
        // plugins: FullCalendar
        //
        $('#calendar-widget').fullCalendar({
          contentHeight: 460
        });
        // Init plugins for ".task-widget"
        // plugins: Custom Functions + jQuery Sortable
        //
        var taskWidget = $('div.task-widget');
        var taskItems = taskWidget.find('li.task-item');
        var currentItems = taskWidget.find('ul.task-current');
        var completedItems = taskWidget.find('ul.task-completed');
        // Init jQuery Sortable on Task Widget
        taskWidget.sortable({
          items: taskItems, // only init sortable on list items (not labels)
          handle: '.task-menu',
          axis: 'y',
          connectWith: ".task-list",
          update: function (event, ui) {
            var Item = ui.item;
            var ParentList = Item.parent();
            // If item is already checked move it to "current items list"
            if (ParentList.hasClass('task-current')) {
              Item.removeClass('item-checked').find('input[type="checkbox"]').prop('checked', false);
            }
            if (ParentList.hasClass('task-completed')) {
              Item.addClass('item-checked').find('input[type="checkbox"]').prop('checked', true);
            }
          }
        });
        // Custom Functions to handle/assign list filter behavior
        taskItems.on('click', function (e) {
          e.preventDefault();
          var This = $(this);
          var Target = $(e.target);
          if (Target.is('.task-menu') && Target.parents('.task-completed').length) {
            This.remove();
            return;
          }
          if (Target.parents('.task-handle').length) {
            // If item is already checked move it to "current items list"
            if (This.hasClass('item-checked')) {
              This.removeClass('item-checked').find('input[type="checkbox"]').prop('checked', false);
            }
            // Otherwise move it to the "completed items list"
            else {
              This.addClass('item-checked').find('input[type="checkbox"]').prop('checked', true);
            }
          }
        });
        var highColors = [bgWhite, bgWhite, bgWarningL, bgWhite];
        // Chart data
        var seriesData = [{
          name: 'Phones',
          data: [5.0, 9, 17, 22, 19, 11.5, 5.2, 9.5, 11.3, 15.3, 19.9, 24.6],
          marker: {
            fillColor: '#ffc841'
          }
        }, {
          name: 'Notebooks',
          data: [2.9, 3.2, 4.7, 5.5, 8.9, 12.2, 17.0, 16.6, 14.2, 10.3, 6.6, 4.8],
          marker: {
            fillColor: '#e27d7f'
          }
        }];
        var ecomChart = $('#ecommerce_chart1');
        if (ecomChart.length) {
          ecomChart.highcharts({
            credits: false,
            colors: highColors,
            chart: {
              backgroundColor: 'transparent',
              className: '',
              type: 'line',
              zoomType: 'x',
              panning: true,
              panKey: 'shift',
              marginTop: 45,
              marginRight: 0,
              spacingRight: 0,
            },
            title: {
              text: null
            },
            xAxis: {
              gridLineColor: "rgba(255, 255, 255, 0)",
              lineColor: "rgba(255, 255, 255, 0)",
              tickColor: "rgba(255, 255, 255, 0)",
              categories: ['JAN', 'FEB', 'MAR', 'APR',
                'MAY', 'JUN', 'JUL', 'AUG',
                'SEP', 'OCT', 'NOV', 'DEC'
              ],
              labels: {
                style: {
                  color: 'rgba(255, 255, 255,0.4)',
                  fontWeight: 'normal',
                  fontSize: '12px'
                }
              }
            },
            yAxis: {
              gridLineColor: "rgba(255, 255, 255, 0)",
              lineColor: "rgba(255, 255, 255, 0)",
              tickColor: "rgba(255, 255, 255, 0)",
              title: {
                text: null
              },
              min: 0,
              tickInterval: 5,
              labels: {
                style: {
                  color: 'rgba(255, 255, 255,0.4)',
                  fontWeight: 'normal',
                  fontSize: '12px'
                }
              }
            },
            legend: {
              enabled: true,
              floating: true,
              symbol: 'circle',
              align: 'left',
              verticalAlign: 'top',
              padding: 10,
              x: 25,
              y: 10,
              itemStyle: {
                color: '#fff',
                fontWeight: 'normal',
                fontFamily: 'Arimo',
                fontSize: '14px',
                hover: {
                  enabled: false,
                  fill: '#a288d5'
                }
              }
            },
            plotOptions: {
              spline: {
                lineWidth: 2
              },
              series: {
                marker: {
                  enabled: true,
                  symbol: 'circle',
                  radius: 5,
                  lineColor: "#fff",
                  fillColor: '#ffc841',
                  lineWidth: 2
                }
              },
              line: {
                lineWidth: 2,
                marker: {
                  enabled: true,
                  symbol: 'circle',
                  radius: 5,
                  states: {
                    hover: {
                      enabled: true
                    }
                  }
                },
                states: {
                  hover: {
                    lineWidth: 2
                  }
                },
                threshold: null
              }
            },
            series: seriesData
          });
      
        }
        // Widget VectorMap
        function runVectorMaps() {
          // Jvector Map Plugin
          var runJvectorMap = function () {
            // Data set
            var mapData = [900, 700, 350, 500];
            // Init Jvector Map
            $('#WidgetMap').vectorMap({
              map: 'us_lcc_en',
              backgroundColor: 'transparent',
              series: {
                markers: [{
                  attribute: 'r',
                  scale: [3, 7],
                  values: mapData
                }]
              },
              regionStyle: {
                initial: {
                  fill: '#E8E8E8'
                },
                hover: {
                  "fill-opacity": 0.3
                }
              },
              markerStyle: {
                initial: {
                  fill: '#a288d5',
                  stroke: '#b49ae0',
                  "fill-opacity": 1,
                  "stroke-width": 10,
                  "stroke-opacity": 0.3,
                  r: 3
                },
                hover: {
                  stroke: 'black',
                  "stroke-width": 2
                },
                selected: {
                  fill: 'blue'
                },
                selectedHover: {}
              },
            });
            // Manual code to alter the Vector map plugin to
            // allow for individual coloring of countries
            var states = ['US-CA', 'US-TX', 'US-MO',
              'US-NY'
            ];
            var colors = [bgSmalt, bgPrimary, bgInfo, bgTwilight];
            $.each(states, function (i, e) {
              $("#WidgetMap path[data-code=" + e + "]").css({
                fill: colors[i]
              });
            });
          }
          if ($('#WidgetMap').length) {
            runJvectorMap();
          }
        }
        var dbSelect = $(".rd-mailform-select"), i = 0;
        if (dbSelect.length) {
          for (i = 0; i < dbSelect.length; i++) {
            var dropdownSelectItem = dbSelect[i];
            $(dropdownSelectItem).RDSelectMenu();
          }
        }
      });
    </script>
  </body>
</html>