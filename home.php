<?php
/*ob_start("ob_gzhandler");*/  //Enables Gzip compression 

session_start();
if($_SESSION['login_reimburse_app'] == 1){

}else{
  echo "<script>location='index.php'</script>";
}

?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Profile</title>

<link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
<link rel="stylesheet" href="https://code.getmdl.io/1.3.0/material.indigo-pink.min.css">
<!-- <link rel="stylesheet" href="css/button.css"> -->
<link rel="stylesheet" href="https://cdn.datatables.net/buttons/1.3.1/css/buttons.dataTables.min.css">
   <!-- DATA TABLE CSS -->
  <!--  <link rel="stylesheet" type="text/css" href="http://cdnjs.cloudflare.com/ajax/libs/material-design-lite/1.1.0/material.min.css"> -->
<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.15/css/dataTables.material.min.css">

<!-- Table js -->

<script src="https://code.jquery.com/jquery-1.12.4.js"></script>
<script src="https://cdn.datatables.net/1.10.15/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.10.15/js/dataTables.material.min.js"></script>


<script src="https://cdn.datatables.net/buttons/1.3.1/js/dataTables.buttons.min.js"></script>
<script src="//cdn.datatables.net/buttons/1.3.1/js/buttons.flash.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js"></script>
<script src="//cdn.rawgit.com/bpampuch/pdfmake/0.1.27/build/pdfmake.min.js"></script>
<script src="//cdn.rawgit.com/bpampuch/pdfmake/0.1.27/build/vfs_fonts.js"></script>
<script src="//cdn.datatables.net/buttons/1.3.1/js/buttons.html5.min.js"></script>
<script src="//cdn.datatables.net/buttons/1.3.1/js/buttons.print.min.js"></script>


<script type="text/javascript">
var $ = jQuery.noConflict();


$.fn.dataTable.ext.buttons.alert = {
    className: 'buttons-alert',
 
    action: function ( e, dt, node, config ) {
    $('#example').dataTable().fnFilter('');
    }
};

$(document).ready(function() {
    $('#example').DataTable( {
      "order" : [[3,"desc"]],
      "oLanguage": {
        "sSearch": "Filter:"
      },
      "lengthMenu": [[10,25,50,-1], [10,25,50,"All"]],
        dom: 'Bfrtip',
        
        buttons: [
          'pageLength',
         {
            extend: 'excel',
            text: 'Download',
            footer: true,
            exportOptions: {
                columns: [0,1,2,3,4,5,6,7]
            },
        },

          {
                extend: 'alert',
                text: 'Clear Filter'
            }
           

        ]
    });
});

</script>


<style type="text/css">
  .demo-card-square{
  min-height: 140px !important;
  max-height: 141px !important;
  }
 @media screen and (max-width: 1024px) {
  div.dataTables_wrapper 
  div.mdl-grid.dt-table {
    padding-top: 0;
    /* margin: auto; */
    margin-left: -4%!important;
    /* width: 5% !important; */
    padding-bottom: 0;
}
#mdl-tab{
  padding-left: 0px;
  padding-right: 0px;
}

.mdl-components.mdl-js-components.mdl-cell.mdl-cell--12-col.mdl-cell--12-col-tablet.mdl-cell--12-col-desktop 
{
  padding-left: 0px !important;
  padding-right: 0px !important;
}

}
.mdl-layout__drawer-button {
    top: 21px;
    left: 0;
    color: rgb(255,255,255);
    z-index: 4;
}

     body {
  background: #e2e1e0;
}

div.dataTables_wrapper div.dataTables_filter {
    text-align: left !important;
}

div.dt-buttons {
    position: relative;
    float: right;
}

.canvasjs-chart-credit{
  color: white !important;
}

/*Buttons css*/

/*button.dt-button, div.dt-button, a.dt-button {
  color: white ! important;
}
a.dt-button{
  background-color: red !important;
}*/

.dt-buttons a:nth-child(1){
    background-color:#3f51b5;
}
button.dt-button, div.dt-button, a.dt-button{
  background-color: #3f51b5;
}
button.dt-button, div.dt-button, a.dt-button
{
  background-image:none;
color: white !important;
box-shadow:12px 42px -1px 3px rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19)
}
button.dt-button:hover:not(.disabled),div.dt-button:hover:not(.disabled),a.dt-button:hover:not(.disabled){
      background-color:#3f51b5;
      background-image:none

}

</style>

</head>

<body >

<?php
session_start();

  $url_get_a_org = 'https://reimburse.herokuapp.com/get_details_of_org/';
  $options_get_a_org = array(
    'http' => array(
      'header'  => array(
                  'ACCOUNT-TOKEN: '.$_SESSION['account_token']
                ),
      'method'  => 'GET',
    ),
  );
  $context_get_a_org = stream_context_create($options_get_a_org);
  $output_get_a_org = file_get_contents($url_get_a_org, false,$context_get_a_org);
 /* echo $output_get_a_org;*/
  $arr_get_a_org = json_decode($output_get_a_org,true);
/*  echo $arr_get_a_org;*/
  
?>
  <div class=" mdl-layout mdl-js-layout mdl-layout--fixed-header">
  <header style="background-color:#3f51b5;height: 100px;" class="mdl-layout__header mdl-layout__header--transparent mdl-shadow--4dp ">
      <div class="mdl-layout__header-row">
        <span class=" mdl-layout-title" style="margin-top: 49px;">Corro</span>
        <div class="mdl-layout-spacer"></div>
        <a href="logout.php"><img id="logout" style="margin-top: 49px;" src="images/logout_btn.png"></img></a> 
      </div>
</header>
      <!-- NAv bar -->
      <div class="mdl-layout__drawer">
        <span class="mdl-layout-title">CORRO</span>
        <nav class="mdl-navigation">
          <a class="mdl-navigation__link" href="#!">OVERVIEW</a>
          <a class="mdl-navigation__link" href="home.php">EXPENSE REPORT</a>
          <a class="mdl-navigation__link" href="#!">BOOKING</a>
          <a class="mdl-navigation__link" href="new_user.php">SETTING's</a>
          <a class="mdl-navigation__link" href="#!">REPORT</a>
        </nav>
      </div>

      <main class="mdl-layout__content">    
      <div class="mdl-grid">
          <div class="mdl-components mdl-js-components mdl-cell mdl-cell--2-col mdl-cell--2-col-tablet mdl-cell--2-col-desktop">
        </div>
        <div class="mdl-components mdl-js-components mdl-cell mdl-cell--8-col mdl-cell--8-col-tablet mdl-cell--8-col-desktop" style="display: inherit;">
      <div class="demo-card-square mdl-card mdl-shadow--2dp" style="text-align: center;">
            <div class="mdl-card__supporting-text">
              <p>TOTAL</p>
              <p>B-TRIPS <span style="font-weight:bold;font-size:21px"><?php echo $arr_get_a_org['total_trips']; ?></span></p>
              <p>MADE</p>
                    </div>
      </div>

        <div class="demo-card-square mdl-card mdl-shadow--2dp" style="text-align: center;">
            <div class="mdl-card__supporting-text">
              <p>TOTAL</p>
              <p>REIMBURSEMENT <span style="font-weight:bold;font-size:21px"><?php echo $arr_get_a_org['reimbursed_trips']; ?></span></p>
              <p>FILED</p>
                    </div>
          </div>

            <div class="demo-card-square mdl-card mdl-shadow--2dp" style="text-align: center;">
            <div class="mdl-card__supporting-text">
              <p>TOTAL</p>
              <p>APPROVED <span style="font-weight:bold;font-size:21px"><?php echo $arr_get_a_org['approved_trips']; ?></span></p>
                    </div>
          </div>

            <div class="demo-card-square mdl-card mdl-shadow--2dp" style="text-align: center;">
            <div class="mdl-card__supporting-text">
              <p>TOTAL</p>
              <p>PENDING <span style="font-weight:bold;font-size:21px"><?php echo $arr_get_a_org['pending_trips']; ?></span></p>
                    </div>
          </div>


<!--           <canvas id="myChart" width="400" height="400"></canvas>
 -->
        


        </div>
  </div>


<!-- =============================================================================== -->

<!--===================================================================-->
    <div class="mdl-grid">
    <div class="mdl-components mdl-js-components mdl-cell mdl-cell--2-col mdl-cell--2-col-tablet mdl-cell--2-col-desktop"></div>
    <div class="mdl-components mdl-js-components mdl-cell mdl-cell--4-col mdl-cell--4-col-tablet mdl-cell--4-col-desktop">
    <div id="piechart" style="width: 500px; height:500px;"></div>
    </div>
      <div class="mdl-components mdl-js-components mdl-cell mdl-cell--4-col mdl-cell--4-col-tablet mdl-cell--4-col-desktop">
    <div id="piechart1" style="width: 500px; height:500px;"></div>
    </div>

     <div class="mdl-components mdl-js-components mdl-cell mdl-cell--2-col mdl-cell--2-col-tablet mdl-cell--2-col-desktop"></div>
     </div>

  <!-- ========================================================= -->
  <div class="mdl-grid" style="margin-top: -276px;z-index:2;position:relative;">
          <!-- <div class="mdl-components mdl-js-components mdl-cell mdl-cell--2-col mdl-cell--2-col-tablet mdl-cell--2-col-desktop">
          <p>jsbksdjbvljdsbvljsd</p>

        </div> -->


        <div id="mdl-tab" class="mdl-components mdl-js-components mdl-cell mdl-cell--12-col mdl-cell--12-col-tablet mdl-cell--12-col-desktop " style="padding-left: 100px;padding-right: 100px;">

        <table id="example" class="mdl-data-table" cellspacing="0" width="100%">
        <thead>
            <tr>
                <th>EMPLOYEE<br>ID</th>
                <th>EMPLOYEE<br>NAME</th>
                <th>DEPT</th>
                <th>TRAVEL DATE</th>
                <th>TRIP NO.</th>
                <th>PENDING<br>DAYS</th>
                <th>TOTAL CLAIM</th>
                <th>STATUS</th>
                <th>VIEW</th>
            </tr>
        </thead>


        <!-- <tfoot>
            <tr>
                <th>EMPLOYEE<br>ID</th>
                <th>EMPLOYEE<br>NAME</th>
                <th>DEPT</th>
                <th>TRAVEL DATE</th>
                <th>TRIP NO.</th>
                <th>PENDING<br>DAYS</th>
                <th>TOTAL CLAIM</th>
                <th>STATUS</th>
                <th>VIEW</th>
            </tr>
        </tfoot> -->


        <tbody>

        <?php for($x=0;$x<count($arr_get_a_org['user and trip details']);$x++){?>
            <tr>
              <td><?php echo $arr_get_a_org['user and trip details'][$x]['user details']['uid']; ?></td>
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
        </tbody>
      </table> 

        </div>
      <!--  <div class="mdl-components mdl-js-components mdl-cell mdl-cell--2-col mdl-cell--2-col-tablet mdl-cell--2-col-desktop">
          <p>jsbksdjbvljdsbvljsd</p>

        </div> -->
  </div>
</div>
</main>

<!-- Scripts -->
<script defer src="https://code.getmdl.io/1.3.0/material.min.js"></script>
<script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
<script type="text/javascript">
        google.charts.load('current', {'packages':['corechart']});
      google.charts.setOnLoadCallback(drawChart);

      function drawChart() {

        var data = google.visualization.arrayToDataTable([
          ['Task', 'Hours per Day'],
          ['B-TRIPS',     <?php echo $arr_get_a_org['total_trips']; ?>],
          ['Reimbursed',      <?php echo $arr_get_a_org['reimbursed_trips']; ?>],
          ['Approved',  <?php echo $arr_get_a_org['approved_trips']; ?>],
          ['Pending', <?php echo $arr_get_a_org['pending_trips']; ?>]
         // ['Sleep',    <?php echo $arr_get_a_org['total_trips']; ?>]
        ]);

        var options = {
          title: 'OVERVIEW',
          backgroundColor:'#e2e1e0',
          pieSliceText:'value',
          sliceVisibilityThreshold :0,
          legend:{position: 'center'},
          chartArea:{top:0,width:"500px",height:"500px"},
          tooltip:'value'


        };

        var chart = new google.visualization.PieChart(document.getElementById('piechart'));

        chart.draw(data, options);
      }
</script>
<script type="text/javascript">
        google.charts.load('current', {'packages':['corechart']});
      google.charts.setOnLoadCallback(drawChart);

      function drawChart() {

        var data = google.visualization.arrayToDataTable([
          ['Task', 'Hours per Day'],
          ['Approved',  <?php echo $arr_get_a_org['approved_trips']; ?>],
          ['Pending', <?php echo $arr_get_a_org['pending_trips']; ?>]
         // ['Sleep',    <?php echo $arr_get_a_org['total_trips']; ?>]
        ]);

        var options = {
          title: 'OVERVIEW',
          backgroundColor:'#e2e1e0',
          pieSliceText:'value',
          sliceVisibilityThreshold :0,
          legend:{position: 'center'},
          chartArea:{top:0,width:"500px",height:"500px"},
          tooltip:'value'


        };

        var chart1 = new google.visualization.PieChart(document.getElementById('piechart1'));

        chart1.draw(data, options);
      }
</script>
<!-- 
<script src="//ajax.googleapis.com/ajax/libs/jquery/2.2.4/jquery.min.js">
</script>
<script src="//cdn.rawgit.com/rainabba/jquery-table2excel/1.1.0/dist/jquery.table2excel.min.js">
  
</script>
<script type="text/javascript">
var $d = jQuery.noConflict();

$d("#download").click(function(){ 
 $d("#example").table2excel({    
  // exclude CSS class    
  
   // exclude: ".noExl",
          name: "corro Document Name",
         filename: "corro.xls",
          fileext: ".xls",
          exclude_img: true,
          exclude_links: true,
          exclude_inputs: true,
   }); 
   });</script>

 -->

</body>




</html>