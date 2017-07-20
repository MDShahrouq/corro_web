<?php
/*ob_start("ob_gzhandler");*/  //Enables Gzip compression 

// session_start();
// if($_SESSION['login_reimburse_app'] == 1){

// }else{
//   echo "<script>location='index.php'</script>";
// }

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
<link rel="stylesheet" href="css/material.min.css">
<link rel="stylesheet" href="css/datatable.material.css">
<!-- TABLE CSS AND JS -->
     <link rel="stylesheet" type="text/css" href="http://cdnjs.cloudflare.com/ajax/libs/material-design-lite/1.1.0/material.min.css">
    <link rel="stylesheet" src="https://cdn.datatables.net/1.10.15/css/dataTables.material.min.css">
   
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
<style type="text/css">
	.demo-card-square{
  min-height: 140px !important;
  max-height: 141px !important;
	}
  <style>
body {
  padding: 20px;
  background: #fafafa;
  position: relative;
  overflow: hidden;
}

div.mdl-card {
  width: 440px;
  margin: 0 auto;
}

div.mdl-card__supporting-text {
  font-size: 1.2em;
}

/* Table Sorting */
input + table {
  margin-top: 1em;
}

$sortIndicatorIconColor: #000;
th.sort {
  -webkit-user-select: none;
  -moz-user-select: none;
  -ms-user-select: none;
  user-select: none;

  min-width: 75px; // th "Year" is too small and sort icon needs extra room

  &:hover {
    cursor: pointer;
    text-decoration: none;
  }

  &:focus {
    outline:none;
  }

  &:after {
    display:inline-block;
    width: 0;
    height: 0;
    border-left: 5px solid transparent;
    border-right: 5px solid transparent;
    border-bottom: 5px solid transparent;
    content:"";
    position: relative;
    top:-10px;
    right:-5px;
  }
  &.asc:after {
    width: 0;
    height: 0;
    border-left: 5px solid transparent;
    border-right: 5px solid transparent;
    border-top: 5px solid $sortIndicatorIconColor;
    content:"";
    position: relative;
    top:4px;
    right:-5px;
  }
  &.desc:after {
    width: 0;
    height: 0;
    border-left: 5px solid transparent;
    border-right: 5px solid transparent;
    border-bottom: 5px solid $sortIndicatorIconColor;
    content:"";
    position: relative;
    top:-4px;
    right:-5px;
  }

}
</style>
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
	<div class=" mdl-layout mdl-js-layout mdl-layout--fixed-header">
  <header style="background-color:#3f51b5;" class="mdl-layout__header mdl-layout__header--transparent mdl-shadow--4dp ">
    	<div class="mdl-layout__header-row">
        <span class=" mdl-layout-title">Corro</span>
        <div class="mdl-layout-spacer"></div>
        <a href="logout.php"><img id="logout" style="" src="images/logout_btn.png"></img></a> 
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
					    <p>B-TRIPS <span style="font-weight:bold;font-size:21px"><?php echo $arr_get_a_org['total_trips']; ?></span></p>
					    <p>MADE</p>
					          </div>
					</div>

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
					    <p>B-TRIPS <span style="font-weight:bold;font-size:21px"><?php echo $arr_get_a_org['total_trips']; ?></span></p>
					    <p>MADE</p>
					          </div>
					</div>

				</div>



				<div class="mdl-components mdl-js-components mdl-cell mdl-cell--2-col mdl-cell--2-col-tablet mdl-cell--2-col-desktop">
				

				</div>
	</div>
<!-- =============================================================================== -->

	<div class="mdl-grid">
		<div class="mdl-components mdl-js-components mdl-cell mdl-cell--2-col mdl-cell--2-col-tablet mdl-cell--2-col-desktop">
					

		</div>
		<div class="mdl-components mdl-js-components mdl-cell mdl-cell--6-col mdl-cell--6-col-tablet mdl-cell--6-col-desktop">
				

		</div>
		<div class="mdl-components mdl-js-components mdl-cell mdl-cell--2-col mdl-cell--2-col-tablet mdl-cell--2-col-desktop">
			 
			<button  class="mdl-button mdl-js-button mdl-button--raised mdl-button--colored">
			Download
			</button>
		</div>
		<div class="mdl-components mdl-js-components mdl-cell mdl-cell--2-col mdl-cell--2-col-tablet mdl-cell--2-col-desktop">
				

		</div>
	</div>
	<!-- ========================================================= -->
	<div class="mdl-grid">
					<div class="mdl-components mdl-js-components mdl-cell mdl-cell--2-col mdl-cell--2-col-tablet mdl-cell--2-col-desktop">
				</div>


				<div class="mdl-components mdl-js-components mdl-cell mdl-cell--8-col mdl-cell--8-col-tablet mdl-cell--8-col-desktop">
        <center>
        <!-- <div class="mdl-table">
        <table id="example" class="mdl-data-table mdl-shadow--2dp" style="min-width:100%!important" > -->
     <!--    <div class="mdl-card mdl-shadow--2dp mdl-color--green-300"> -->
        <div class="mdl-card__title">
        </div>
        <div class="mdl-card__supporting-text">
        </div>
        <div class="mdl-card__actions mdl-card--border">
            <div id="mdl-table">
                <div class="mdl-textfield mdl-js-textfield mdl-textfield--expandable is-upgraded is-focused">
                    <label class="mdl-button mdl-js-button mdl-button--icon" for="sample6">
                        <i class="material-icons">search</i>
                    </label>
                    <div class="mdl-textfield__expandable-holder">
                        <input class="mdl-textfield__input search" type="text" id="sample6">
                        <label class="mdl-textfield__label" for="sample-expandable">Expandable Input</label>
                    </div>
                </div>

                <table id='mdl-table' class="mdl-data-table mdl-js-data-table mdl-shadow--2dp">
                    <thead>
                        <!-- <tr>
                            <th class="mdl-data-table__cell--non-numeric sort" data-sort="material">Material</th>
                            <th class="sort" data-sort="quantity">Quantity</th>
                            <th class="sort" data-sort="price">Unit price</th>
                        </tr> -->
                    <!-- </thead> -->
                    
            <tr>
                <th class="mdl-data-table__cell--non-numeric material">EMPLOYEE<br>ID</th>
                <th class="mdl-data-table__cell--non-numeric material">EMPLOYEE<br>NAME</th>
                <th class="mdl-data-table__cell--non-numeric material">DEPT</th>
                <th class="mdl-data-table__cell--non-numeric material">TRAVEL DATE</th>
                <th class="mdl-data-table__cell--non-numeric material">TRIP NO.</th>
                <th class="mdl-data-table__cell--non-numeric material">PENDING<br>DAYS</th>
                <th class="mdl-data-table__cell--non-numeric material">TOTAL CLAIM</th>
                <th class="mdl-data-table__cell--non-numeric material">STATUS</th>
                <th class="mdl-data-table__cell--non-numeric material">VIEW</th>
            </tr>

        </thead>
        <tbody class="list">


            <tr>
                                                                       <td class="mdl-data-table__cell--non-numeric material">Tiger Njkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkixon</td>
                <td class="mdl-data-table__cell--non-numeric material">System Architect</td>
                 <td class="mdl-data-table__cell--non-numeric material">Edinhgssssssssssssssfjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjdburgh</td>
                <td class="mdl-data-table__cell--non-numeric material">61</td>
                <td class="mdl-data-table__cell--non-numeric material">2011/04/25</td>
                <td class="mdl-data-table__cell--non-numeric material">$320,800</td>
                <td class="mdl-data-table__cell--non-numeric material">Edinbuhrgh</td>
                <td class="mdl-data-table__cell--non-numeric material">61</td>
                <td class="mdl-data-table__cell--non-numeric material">
              <form method="post" action="profile.php?pk=<?php echo $arr_get_a_org['user and trip details'][$x]['user details']['pk']; ?>&trip_id=<?php echo $arr_get_a_org['user and trip details'][$x]['trip_details']['pk']; ?>">
              <button type="submit">View</button>
              </form>
            </tr>
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
				<div class="mdl-components mdl-js-components mdl-cell mdl-cell--2-col mdl-cell--2-col-tablet mdl-cell--2-col-desktop">

				</div>
	</div>
</div>
</main>

<!-- Scripts -->
<script defer src="https://code.getmdl.io/1.3.0/material.min.js"></script>
 <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
    <script src="https://cdn.datatables.net/1.10.15/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.10.15/js/dataTables.material.min.js"></script>
</body>




</html>