<?php
/*ob_start("ob_gzhandler");*/  //Enables Gzip compression 

session_start();
if($_SESSION['login_reimburse_app'] == 1){

}else{
  echo "<script>location='index.php'</script>";
}

?>
<html>
  <head>
    <!-- Material Design Lite -->
    <script src="https://code.getmdl.io/1.3.0/material.min.js"></script>
    <link rel="stylesheet" href="css/material.min.css">
    <link rel="stylesheet" href="css/home.css">
    <link rel="stylesheet" href="css/table.css">
    <link rel="stylesheet" href="css/new_user.css">
    <link rel="stylesheet" href="css/datatable.material.css">
    <!-- Material Design icon font -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
    <!-- TABLE CSS AND JS -->
     <script src="https://code.getmdl.io/1.3.0/material.min.js"></script>
   <!--  <link rel="stylesheet" src="https://cdn.datatables.net/1.10.15/css/dataTables.material.min.css"> -->
    <script src="//code.jquery.com/jquery-1.12.4.js"></script>
    <script src="https://cdn.datatables.net/1.10.15/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.10.15/js/dataTables.material.min.js"></script>
<script defer src="https://code.getmdl.io/1.3.0/material.min.js"></script>
<script type="text/javascript">
        $(document).ready(function() {
    $('#example').DataTable( {
        columnDefs: [
            {
                targets: [ 0, 1, 2 ],
                className: 'mdl-data-table__cell--non-numeric'
            }
        ]
    } );
} );
    </script>
  </head>
  <body>
    <!-- Always shows a header, even in smaller screens. -->
    <html>
  <head>
    <!-- Material Design Lite -->

    <!-- <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
>>>>>>> landing page alignment working in firefix
    <script src="https://cdn.datatables.net/1.10.7/js/jquery.dataTables.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.0/js/materialize.min.js"></script> -->
    <!-- Material Design icon font -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
    <style type="text/css">
      body {
  background: #e2e1e0;
  text-align: center;
}

    </style>
  </head>
  <body>

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
     <!-- Always shows a header, even in smaller screens. -->
  
    <div class="demo-layout-transparent mdl-layout mdl-js-layout">
    <header style="background-color:#3f51b5;height:100px;" class="mdl-layout__header mdl-layout__header--transparent">

        <div class="mdl-layout__header-row">
           <!-- Title -->
          <span class="mdl-layout-title">CORRO</span>
          <a href="logout.php"><img id="logout" style="" src="images/logout_btn.png"></img></a> 
          <!-- Add spacer, to align navigation to the right -->
          <div class="mdl-layout-spacer"></div>
          <!-- Navigation. We hide it in small screens. -->
        </div>
      </header>
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
      <div class="page-content">

        <div class="mdl-grid">
 <div class="mdl-cell mdl-cell--2-col">
    <!-- add content here -->
 <!--    card -->
 </div>

  <div class="card">
    <p>TOTAL</p>
    <p>B-TRIPS <span style="font-weight:bold;font-size:21px"><?php echo $arr_get_a_org['total_trips']; ?></span></p>
    <p>MADE</p>
  </div>

<div class="card card-1">
  <p>TOTAL</p>
    <p>REIMBURSEMENT <span style="font-weight:bold;font-size:21px"><?php echo $arr_get_a_org['reimbursed_trips']; ?></span></p>
    <p>FIELD</p>
</div>

<div class="card card-2">
  <p>TOTAL</p>
    <p>APPROVED <span style="font-weight:bold;font-size:21px"><?php echo $arr_get_a_org['approved_trips']; ?></span></p>
</div>

<div class="card card-3">
  <p>TOTAL</p>
    <p>PENDING <span style="font-weight:bold;font-size:21px"><?php echo $arr_get_a_org['pending_trips']; ?></span></p>
</div>
        <!-- Your content goes here --></div>
<!-- <div class="mdl-grid" style="margin-top: 5px"> -->
        <!-- Colored raised button -->
<button style="margin-left:69%;margin-top: 38px;" class="mdl-button mdl-js-button mdl-button--raised mdl-button--colored">
Download
</button>

        <table id="example" class="mdl-data-table" cellspacing="0" width="100%" style="width:80%">
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
  </div>
</div>
      </main>
    </div>
  </body>
</html>