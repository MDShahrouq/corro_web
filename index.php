<!DOCTYPE html>
<html>
  <head>

    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Profile</title>

<link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
<link rel="stylesheet" href="css/material.indigo-pink.min.css">
<!-- <link rel="stylesheet" type="text/css" href="css/profile.css">
 -->

 <link rel="stylesheet" href="https://cdn.datatables.net/buttons/1.3.1/css/buttons.dataTables.min.css">
   <!-- DATA TABLE CSS -->
  <!--  <link rel="stylesheet" type="text/css" href="http://cdnjs.cloudflare.com/ajax/libs/material-design-lite/1.1.0/material.min.css"> -->
  <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.16/css/jquery.dataTables.min.css">

<!-- Table js -->

<script src="https://code.jquery.com/jquery-1.12.4.js"></script>
<script src="cdn.datatables.net/1.10.16/js/jquery.dataTables.min.js
"></script>


<script src="https://cdn.datatables.net/buttons/1.3.1/js/dataTables.buttons.min.js"></script>
<script src="//cdn.datatables.net/buttons/1.3.1/js/buttons.flash.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js"></script>
<script src="//cdn.rawgit.com/bpampuch/pdfmake/0.1.27/build/pdfmake.min.js"></script>
<script src="//cdn.rawgit.com/bpampuch/pdfmake/0.1.27/build/vfs_fonts.js"></script>
<script src="//cdn.datatables.net/buttons/1.3.1/js/buttons.html5.min.js"></script>
<script src="//cdn.datatables.net/buttons/1.3.1/js/buttons.print.min.js"></script>
<script type="text/javascript">
//var $ = jQuery.noConflict();
$(document).ready(function() {
    $('#example').DataTable();
} );

// $.fn.dataTable.ext.buttons.alert = {
//     className: 'buttons-alert',
 
//     action: function ( e, dt, node, config ) {
//     $('#example').dataTable().fnFilter('');
//     }
// };

// $(document).ready(function() {
//     $('#example').DataTable( {
//       "order" : [[3,"desc"]],
//       "oLanguage": {
//         "sSearch": "Filter:"
//       },
//       "lengthMenu": [[10,25,50,-1], [10,25,50,"All"]],
//         dom: 'Bfrtip',
        
//         buttons: [
//           'pageLength',
//          {
//             extend: 'excel',
//             text: 'Download',
//             footer: true,
//             exportOptions: {
//                 columns: [0,1,2,3,4,5,6,7]
//             },
//         },

//           {
//                 extend: 'alert',
//                 text: 'Clear Filter'
//             }
           

//         ]
//     });
// });

</script>
 <!-- CSS -->
<style type="text/css">
	mdl-layout--fixed-drawer.is-upgraded:not(.is-small-screen)>.mdl-layout__header {
    margin-left: 103px !important;
    width: calc(100% - 106px) !important;
}

  .demo-card-square{
  min-height: 89px !important;
  max-height: 90px !important;
  min-width: 101%;
  max-width: 102%;
  }
  .layer2-card-square{
  min-width: 101%;
  max-width: 102%;

  }

.layer2-middle-card{
  min-width: 101%;
  max-width: 102%;
}
</style>
</head>
<body>

 <div class="demo-layout mdl-layout mdl-js-layout mdl-layout--fixed-drawer mdl-layout--fixed-header">
     <header class="demo-header mdl-layout__header mdl-color--grey-100 mdl-color-text--grey-600">

        <div class="mdl-layout__header-row" style="background-color: #ffffff;padding: 4px;">
<span class="mdl-layout-title" style="font-family: Ubuntu;font-style: normal;font-weight: 500;line-height: normal;font-size: 50px;color: #000000;">corro</span>
          <div class="mdl-layout-spacer"></div>
          <span class="android-title mdl-layout-title">
            <img class="android-logo-image" src="http://lorempixel.com/150/40/sports">
          </span>
       <button class="mdl-button mdl-js-button mdl-js-ripple-effect mdl-button--icon" id="hdrbtn">
            <i class="material-icons">more_vert</i>
          </button>
          <ul class="mdl-menu mdl-js-menu mdl-js-ripple-effect mdl-menu--bottom-right" for="hdrbtn">
            <li class="mdl-menu__item">Logout</li>
          </ul>
        </div>
<div class="mdl-card__actions mdl-card--border" style="background-color: white;color: #000000;">
<b>Overview</b>
</div> 
      </header>
<div class="demo-drawer mdl-layout__drawer mdl-color--blue-grey-900 mdl-color-text--blue-grey-50" style="width: 7%;background-color: #4ab8c9 !important;">
        <header class="demo-drawer-header">
          <nav class="demo-navigation mdl-navigation mdl-color--blue-grey-800" style="background-color: #4ab8c9 !important;overflow-x:hidden;overflow-y: hidden;">
          <a class="mdl-navigation__link" href="#" style="padding-left: 30px;
"><i class="material-icons">home</i>Overview</a>
          <a class="mdl-navigation__link" href="#" style="padding-left: 30px;
"><i class="mdl-color-text--blue-grey-400 material-icons" role="presentation">inbox</i>Expense Report</a>
          <a class="mdl-navigation__link" href="#" style="padding-left: 30px;
"><i class="mdl-color-text--blue-grey-400 material-icons" role="presentation">delete</i>Travel Requests</a>
          <a class="mdl-navigation__link" href="#" style="padding-left: 30px;
"><i class="mdl-color-text--blue-grey-400 material-icons" role="presentation">report</i>Booking</a>
          <a class="mdl-navigation__link" href="#" style="padding-left: 30px;
"><i class="mdl-color-text--blue-grey-400 material-icons" role="presentation">settings</i>Settings</a>
          
          <div class="mdl-layout-spacer"></div>
          
          <a class="mdl-navigation__link" href=""><i class="mdl-color-text--blue-grey-400 material-icons" role="presentation">help_outline</i><span class="visuallyhidden">Help</span></a>
        </nav>
        </header>

      </div>


      <main class="mdl-layout__content mdl-color--grey-100" style="margin-left:83px;">
        <div class="mdl-grid demo-content">
        
          <div class="mdl-components mdl-js-components mdl-cell mdl-cell--3-col mdl-cell--3-col-tablet mdl-cell--3-col-desktop">
          <div class="demo-card-square mdl-card mdl-shadow--2dp" style="text-align: center;">
            <div class="mdl-card__supporting-text">
              <p>Total Bussiness Trips</p>
              <p><b>408</b><!--  <span style="font-weight:bold;font-size:21px"><?php echo $arr_get_a_org['total_trips']; ?></span> --></p>
             
                    </div>
      </div>

        </div>
         <div class="mdl-components mdl-js-components mdl-cell mdl-cell--3-col mdl-cell--3-col-tablet mdl-cell--3-col-desktop">
         <div class="demo-card-square mdl-card mdl-shadow--2dp" style="text-align: center;">
            <div class="mdl-card__supporting-text">
              <p>Most fequently visited place</p>
              <p><b>Mumbai</b> <!-- <span style="font-weight:bold;font-size:21px"><?php echo $arr_get_a_org['total_trips']; ?></span> --></p>
                    </div>
      </div>

        </div>

        <div class="mdl-components mdl-js-components mdl-cell mdl-cell--3-col mdl-cell--3-col-tablet mdl-cell--3-col-desktop">
        <div class="demo-card-square mdl-card mdl-shadow--2dp" style="text-align: center;">
            <div class="mdl-card__supporting-text">
              <p>Average money spent per trip</p>
              <p><b>2190</b> <!-- <span style="font-weight:bold;font-size:21px"><?php echo $arr_get_a_org['total_trips']; ?></span> --></p>
                    </div>
      </div>

        </div> 
         <div class="mdl-components mdl-js-components mdl-cell mdl-cell--3-col mdl-cell--3-col-tablet mdl-cell--3-col-desktop">
         <div class="demo-card-square mdl-card mdl-shadow--2dp" style="text-align: center;">
            <div class="mdl-card__supporting-text">
              <p>Maximum spend</p>
              <p><b>Food</b> <!-- <span style="font-weight:bold;font-size:21px"><?php echo $arr_get_a_org['total_trips']; ?></span> --></p>
                    </div>
      </div>

        </div> 




        <div class="demo-graphs mdl-shadow--2dp mdl-color--white mdl-cell mdl-cell--3-col mdl-cell--3-col-tablet mdl-cell--3-col-desktop" style="min-height: 200px; max-height: 200px;">
            <!-- Layer 2 cards of Graphs(1) -->
                <div class="mdl-card mdl-shadow--2dp layer2-card-square">
                  <div class="mdl-card__title" style="padding: 6px;">
                    <h4 class="mdl-card__title-text">Title 1</h4>
                  </div>

                <!--   <div class="mdl-card__supporting-text">
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                    Mauris sagittis pellentesque lacus eleifend lacinia...
                  </div> -->
                  <div class="mdl-card__actions mdl-card--border">
                  <div id="piechart" style="width: 100px;max-height: 145px;"></div>
                    <!-- <a class="mdl-button mdl-button--colored mdl-js-button mdl-js-ripple-effect">
                      Get Started
                    </a> -->
                  </div>

                </div>
            </div>
<!-- Layer 2 Middile card !-->
              <div class=" mdl-shadow--2dp mdl-color--white mdl-cell mdl-cell--6-col mdl-cell--6-col-tablet mdl-cell--6-col-desktop" style="min-height: 200px; max-height: 200px;">
                            <div class="mdl-card mdl-shadow--2dp layer2-middle-card">
                              <div class="mdl-card__title" style="padding: 6px;">
                                <h4 class="mdl-card__title-text">Title 2</h4>
                              </div>
                            
                              <div class="mdl-card__actions mdl-card--border">
                                <!-- <a class="mdl-button mdl-button--colored mdl-js-button mdl-js-ripple-effect">
                                  Get Started
                                </a> -->
                              </div>

                            </div>
                        </div>


      <!-- Layer 2 last card !-->
  <div class=" mdl-shadow--2dp mdl-color--white mdl-cell mdl-cell--3-col mdl-cell--3-col-tablet mdl-cell--3-col-desktop" style="min-height: 200px; max-height: 200px;">
                        <div class="mdl-card mdl-shadow--2dp layer2-middle-card">
                              <div class="mdl-card__title" style="padding: 6px;">
                                <h4 class="mdl-card__title-text">Title 3</h4>
                              </div>
                            
                              <div class="mdl-card__actions mdl-card--border">
                                <!-- <a class="mdl-button mdl-button--colored mdl-js-button mdl-js-ripple-effect">
                                  Get Started
                                </a> -->
                              </div>

                            </div>
                        </div>

<script>
 function printDiv() {
      var elements = $('input[type=search]');
      /*alert(elements.val());*/
      if(elements.val() == ""){
       var divToPrint = document.getElementById('hidden_table');
       /*alert("hi");*/
      }
      else{
       var divToPrint = document.getElementById('example');
       /*alert("hello");*/
      }
      newWin = window.open("");
      newWin.document.write(divToPrint.outerHTML);
      newWin.print();
      newWin.close();
   }
</script>


  <!-- Table layout -->
<div class=" mdl-shadow--2dp mdl-color--white mdl-cell mdl-cell--12-col mdl-cell--12-col-tablet mdl-cell--12-col-desktop">
  <!--  <button style="margin-left:25%;position:relative;margin-top:0.2%" id="print1" class="dt-button buttons-collection buttons-page-length" onclick="printDiv()">Print</button>
   <div> -->
     
<table id="example" class="mdl-data-table" cellspacing="0" style="white-space: pre;
">
        <thead>
        <!-- <tr> <th>         
<button style="margin-left:25%;position:relative;margin-top:0.2%" id="print1" class="dt-button buttons-collection buttons-page-length" onclick="printDiv()">Print</button>
   <div>
        </th></tr> -->

            <tr style="background-color: #5eb8c8;">
                <th>EMPLOYEE ID</th>
                <th>EMPLOYEE NAME</th>
                <th>DEPT</th>
                <th>TRAVEL DATE</th>
                <th>TRIP NO.</th>
                <th>PENDING DAYS</th>
                <th>TOTAL CLAIM</th>
                <th>STATUS</th>
                <th>VIEW</th>
            </tr>
        </thead>


        <tbody>
          
           <tr>
                <td>Tiger Nixon</td>
                <td>System Architect</td>
                <td>Edinburgh</td>
                <td>61</td>
                <td>2011/04/25</td>
                <td>$320,800</td>
                 <td>Charde Marshall</td>
                <td>Regional Director</td>
                <td>San Francisco</td>
            </tr>
            <tr>
                <td>Garrett Winters</td>
                <td>Accountant</td>
                <td>Tokyo</td>
                <td>63</td>
                 <td>Charde Marshall</td>
                <td>Regional Director</td>
                <td>San Francisco</td>
                <td>2011/07/25</td>
                <td>$170,750</td>
            </tr>
            <tr>
                <td>Ashton Cox</td>
                <td>Junior Technical Author</td>
                 <td>Charde Marshall</td>
                <td>Regional Director</td>
                <td>San Francisco</td><td>San Francisco</td>
                <td>66</td>
                <td>2009/01/12</td>
                <td>$86,000</td>
            </tr>
            <tr>
                <td>Cedric Kelly</td>
                <td>Senior Javascript Developer</td>
                <td>Edinburgh</td>
                <td>22</td>
                 <td>Charde Marshall</td>
                <td>Regional Director</td>
                <td>San Francisco</td>
                <td>2012/03/29</td>
                <td>$433,060</td>
            </tr>
            <tr>
                <td>Airi Satou</td>
                <td>Accountant</td>
                 <td>Charde Marshall</td>
                <td>Regional Director</td>
                <td>San Francisco</td>
                <td>Tokyo</td>
                <td>33</td>
                <td>2008/11/28</td>
                <td>$162,700</td>
            </tr>
            <tr>
                <td>Brielle Williamson</td>
                <td>Integration Specialist</td>
                <td>New York</td>
                 <td>Charde Marshall</td>
                <td>Regional Director</td>
                <td>San Francisco</td>
                <td>61</td>
                <td>2012/12/02</td>
                <td>$372,000</td>
            </tr>
            <tr>
                <td>Herrod Chandler</td>
                <td>Sales Assistant</td>
                <td>San Francisco</td>
                <td>59</td>
                 <td>Charde Marshall</td>
                <td>Regional Director</td>
                <td>San Francisco</td>
                <td>2012/08/06</td>
                <td>$137,500</td>
            </tr>
            <tr>
                <td>Rhona Davidson</td>
                 <td>Charde Marshall</td>
                <td>Regional Director</td>
                <td>San Francisco</td>
                <td>Integration Specialist</td>
                <td>Tokyo</td>
                <td>55</td>
                <td>2010/10/14</td>
                <td>$327,900</td>
            </tr>
            <tr>
                <td>Colleen Hurst</td>
                <td>Javascript Developer</td>
                <td>San Francisco</td>
                <td>39</td>
                <td>2009/09/15</td>
                 <td>Charde Marshall</td>
                <td>Regional Director</td>
                <td>San Francisco</td>
                <td>$205,500</td>
            </tr>
            <tr>
                <td>Sonya Frost</td>
                <td>Software Engineer</td>
                <td>Edinburgh</td>
                 <td>Charde Marshall</td>
                <td>Regional Director</td>
                <td>San Francisco</td>
                <td>23</td>
                <td>2008/12/13</td>
                <td>$103,600</td>
            </tr>
            <tr>
                <td>Jena Gaines</td>
                <td>Office Manager</td>
                <td>London</td>
                 <td>Charde Marshall</td>
                <td>Regional Director</td>
                <td>San Francisco</td>
                <td>30</td>
                <td>2008/12/19</td>
                <td>$90,560</td>
            </tr>
            <tr>
                <td>Quinn Flynn</td>
                <td>Support Lead</td>
                <td>Edinburgh</td>
                <td>22</td>
                <td>2013/03/03</td>
                <td>$342,000</td>
                 <td>Charde Marshall</td>
                <td>Regional Director</td>
                <td>San Francisco</td>
            </tr>
            <tr>
                <td>Charde Marshall</td>
                <td>Regional Director</td>
                <td>San Francisco</td>
                <td>36</td>
                <td>2008/10/16</td>
                <td>$470,600</td>
                 <td>Charde Marshall</td>
                <td>Regional Director</td>
                <td>San Francisco</td>
            </tr>
 


        </tbody>
<!-- 
        <tbody>

        <?php for($x=0;$x<count($arr_get_a_org['user and trip details']);$x++){?>
            <tr>
              <td><?php 
              if($_SESSION['account_token'] == "open_account"){
               echo $arr_get_a_org['user and trip details'][$x]['user details']['pk']; 
              }else{
               echo $arr_get_a_org['user and trip details'][$x]['user details']['uid']; 
              }
              ?></td>
              <td><?php echo $arr_get_a_org['user and trip details'][$x]['user details']['name']; ?></td>
              <td><?php echo $arr_get_a_org['user and trip details'][$x]['user details']['department']; ?></td>
              <td><?php echo ($arr_get_a_org['user and trip details'][$x]['trip_details']['start_date']." - ".$arr_get_a_org['user and trip details'][$x]['trip_details']['start_date']); ?></td>
              <td><?php echo ($arr_get_a_org['user and trip details'][$x]['trip_details']['pk']); ?></td>
              <td>Pending</td>
              <td><?php echo $arr_get_a_org['user and trip details'][$x]['total']; ?></td>
              <td><?php echo $arr_get_a_org['user and trip details'][$x]['trip_details']['status']; ?></td>
              <td>
              <form method="post" action="profile.php?pk=<?php echo $arr_get_a_org['user and trip details'][$x]['user details']['pk']; ?>&trip_id=<?php echo $arr_get_a_org['user and trip details'][$x]['trip_details']['pk']; ?>">
              <button type="submit">View</button>
              </form>

              </td>
            </tr>
        <?php }?>
        </tbody> -->
      </table> 


   </div>
        



           </div>


            <!-- Below div is for alignment dont remove -->
          </div> 
      </main>


<!-- <div class="mdl-layout__container">
<div class="demo-layout mdl-layout mdl-js-layout mdl-layout--fixed-drawer mdl-layout--fixed-header has-drawer is-upgraded">
<div class=" mdl-layout mdl-js-layout mdl-layout--fixed-header">

<div class="mdl-components mdl-js-components mdl-cell mdl-cell--12-col">
	  <aside class="mdl-components__nav docs-text-styling mdl-shadow--4dp" style="    position: fixed;
    width: 82px;
    z-index: 5;
    background-color: #4ab8c9;">
<a href="#badges-section" class="mdl-components__link mdl-component badges">
      <div class="mdl-components__link-image"
           style="background-image: url('../assets/comp_badges.png')">
      </div>
      <span class="mdl-components__link-text">Badges</span>
    </a>
    <a href="#badges-section" class="mdl-components__link mdl-component badges">
      <div class="mdl-components__link-image"
           style="background-image: url('../assets/comp_badges.png')">
      </div>
      <span class="mdl-components__link-text">Badges</span>
    </a><a href="#badges-section" class="mdl-components__link mdl-component badges">
      <div class="mdl-components__link-image"
           style="background-image: url('../assets/comp_badges.png')">
      </div>
      <span class="mdl-components__link-text">Badges</span>
    </a><a href="#badges-section" class="mdl-components__link mdl-component badges">
      <div class="mdl-components__link-image"
           style="background-image: url('../assets/comp_badges.png')">
      </div>
      <span class="mdl-components__link-text">Badges</span>
    </a><a href="#badges-section" class="mdl-components__link mdl-component badges">
      <div class="mdl-components__link-image"
           style="background-image: url('../assets/comp_badges.png')">
      </div>
      <span class="mdl-components__link-text">Badges</span>
    </a><a href="#badges-section" class="mdl-components__link mdl-component badges">
      <div class="mdl-components__link-image"
           style="background-image: url('../assets/comp_badges.png')">
      </div>
      <span class="mdl-components__link-text">Badges</span>
    </a><a href="#badges-section" class="mdl-components__link mdl-component badges">
      <div class="mdl-components__link-image"
           style="background-image: url('../assets/comp_badges.png')">
      </div>
      <span class="mdl-components__link-text">Badges</span>
    </a><a href="#badges-section" class="mdl-components__link mdl-component badges">
      <div class="mdl-components__link-image"
           style="background-image: url('../assets/comp_badges.png')">
      </div>
      <span class="mdl-components__link-text">Badges</span>
    </a><a href="#badges-section" class="mdl-components__link mdl-component badges">
      <div class="mdl-components__link-image"
           style="background-image: url('../assets/comp_badges.png')">
      </div>
      <span class="mdl-components__link-text">Badges</span>
    </a><a href="#badges-section" class="mdl-components__link mdl-component badges">
      <div class="mdl-components__link-image"
           style="background-image: url('../assets/comp_badges.png')">
      </div>
      <span class="mdl-components__link-text">Badges</span>
    </a><a href="#badges-section" class="mdl-components__link mdl-component badges">
      <div class="mdl-components__link-image"
           style="background-image: url('../assets/comp_badges.png')">
      </div>
      <span class="mdl-components__link-text">Badges</span>
    </a>
</aside>
</div>



	<header style="background-color:#3f51b5;" class="mdl-layout__header mdl-layout__header--transparent mdl-shadow--4dp ">
			    	<div class="mdl-layout__header-row">
			        <span class=" mdl-layout-title">Corro</span>
			        <div class="mdl-layout-spacer"></div>
			        <a href="logout.php"><img id="logout" style="" src="images/logout_btn.png"></img></a> 
			      </div>
			</header>
	      <!-- NAv bar
	    <!--   <div class="mdl-layout__drawer">
	        <span class="mdl-layout-title">CORRO</span>
		        <nav class="mdl-navigation">
		          <a class="mdl-navigation__link" href="#!">OVERVIEW</a>
		          <a class="mdl-navigation__link" href="home.php">EXPENSE REPORT</a>
		          <a class="mdl-navigation__link" href="#!">BOOKING</a>
		          <a class="mdl-navigation__link" href="new_user.php">SETTINGS</a>
		          <a class="mdl-navigation__link" href="#!">REPORT</a>
		        </nav>
	        </div> 
	-->



<!-- First div end -->
	<!-- </div>
</div>
</div>  -->

<!-- Scripts -->
<script defer src="https://code.getmdl.io/1.3.0/material.min.js"></script>
<script data-require="jquery" data-semver="2.1.1" src="//cdnjs.cloudflare.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
<script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
<script type="text/javascript">
        google.charts.load('current', {'packages':['corechart']});
      google.charts.setOnLoadCallback(drawChart);

      function drawChart() {

        var data = google.visualization.arrayToDataTable([
          ['Task', 'Hours per Day'],
          ['Work',     11],
          ['Eat',      2],
          ['Commute',  2],
          ['Watch TV', 2],
          ['Sleep',    7]
        ]);

    var options = {
          title: 'Company Performance',
          chartArea :{left:60,width:'70%',height:'50%'},
          hAxis: {title: 'Year',  titleTextStyle: {color: '#333'}},
          vAxis: {minValue: 0}
        };

        var chart = new google.visualization.PieChart(document.getElementById('piechart'));

        chart.draw(data, options);
      }
</script> 
</body>
</html>