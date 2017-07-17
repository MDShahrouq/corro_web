<!DOCTYPE html>
<html lang="en">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Profile</title>

<link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
<link rel="stylesheet" href="https://code.getmdl.io/1.3.0/material.indigo-pink.min.css">
    </head>

<style type="text/css">
.demo-card-square.mdl-card {
    width: 100%;
    min-height: 129px !important;
    max-height: 150px !important;
  background-color: #fff;
  color: black; 
}
.demo-list-two {
  width: 100%;
}
.mdl-list__item-secondary-info{
	font-size: 17px !important;
}

.image-card-square{
	
}

.demo-card-image.mdl-card {
 width: 100%;
	height: auto;
/*  background: url('http://lorempixel.com/1024/768/') center / cover;
*/}

</style>




<body>

<?php
session_start();
$pk="1";
$trip_id="558";

  $url_get_a_user = 'https://reimburse.herokuapp.com/get_details_of_org_user/';
  $options_get_a_user = array(
    'http' => array(
      'header'  => array(
                  'PK: '.$pk,
                  'TRIP-ID: '.$trip_id,
                  'ACCOUNT-TOKEN: '.$_SESSION['account_token']
                ),
      'method'  => 'GET',
    ),
  );
  $context_get_a_user = stream_context_create($options_get_a_user);
  $output_get_a_user = file_get_contents($url_get_a_user, false,$context_get_a_user);
/*  echo $output_get_a_user;*/
  $arr_get_a_user = json_decode($output_get_a_user,true);
/*  echo $arr_get_a_user;*/
  
?>
	
<!-- <div class="mdl-layout__container">
 -->
<div class="mdl-layout mdl-js-layout">
	<main class="mdl-layout__content">    
 	<div class="mdl-grid">
		<div class="mdl-components mdl-js-components mdl-cell mdl-cell--3-col mdl-cell--3-col-tablet mdl-cell--3-col-desktop">
		<!-- 	<div class="">
				<p>
				Donec id elit non mi porta gravida at eget metus. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus. Etiam porta sem malesuada magna mollis euismod. Donec sed odio dui.
			</p>

			</div> -->
			<aside class="mdl-components__nav docs-text-styling mdl-shadow--4dp">
			<div style="text-align: center;">
			<a href="#" ><img src="boy.png" alt="" width="100px" height="100px" style="-moz-border-radius: 50px;-webkit-border-radius: 50px;border-radius: 50px; margin-top: 20px;" /></a>
			</div>

       <div style="overflow-x:auto;overflow-y: auto;height: 498px;" >
       <div style="display: inline-block;">
        <ul class=" mdl-list">
		  <li class="mdl-list__item">
		    <span class="mdl-list__item-primary-content">
		      <b>Employee ID : </b></span>
		        <span class="mdl-list__item-secondary-content">
			  <span class="mdl-list__item-secondary-info"><?php echo $arr_get_a_user['user_details']['uid']; ?></span>  
			  </span>
		    </span>
		    </li>

		    <li class="mdl-list__item">
		    <span class="mdl-list__item-primary-content">
		      <b>Designation :</b></span>
		        <span class="mdl-list__item-secondary-content">
			  <span class="mdl-list__item-secondary-info"><?php echo $arr_get_a_user['user_details']['designation']; ?></span>  
			  </span>
		    </li>
		    <li class="mdl-list__item">
		    <span class="mdl-list__item-primary-content">
		      <b>Department :</b></span>
		        <span class="mdl-list__item-secondary-content">
			  <span class="mdl-list__item-secondary-info"><?php echo $arr_get_a_user['user_details']['department']; ?></span>  
			  </span>
		    </li>
		<!-- <li class="mdl-list__item">
		    <span class="mdl-list__item-primary-content">
		      <b>Approver : </b></span>
		        <span class="mdl-list__item-secondary-content">
			  <span class="mdl-list__item-secondary-info">Prashant</span>  
			  </span>
		    </li> -->
		<li class="mdl-list__item">
		    <span class="mdl-list__item-primary-content">
		      <b>Mobile No : </b></span>
		      <span class="mdl-list__item-secondary-content">
			  <span class="mdl-list__item-secondary-info"><?php echo $arr_get_a_user['user_details']['mobile']; ?></span>  
			  </span>
		    </li>
		<li class="mdl-list__item">
		    <span class="mdl-list__item-primary-content">
		      <b>Email ID : </b></span>
		      <span class="mdl-list__item-secondary-content">
			  <span class="mdl-list__item-secondary-info"><?php echo $arr_get_a_user['user_details']['email']; ?></span>  
			  </span>
		    </li>		    
		  <li class="mdl-list__item">
		  	<button href="home.php" class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect">
  				View History
			</button>
		  </li>
		   <li class="mdl-list__item">
		  	<button href="home.php" class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect">
			Cancel
			</button>
		  </li>

		</ul>
		</div>
		</div>
	</aside>

		<!-- End of Aside bar -->
		</div>
		<div class="mdl-cell mdl-cell--4-col mdl-cell--4-col-tablet mdl-cell--4-col-desktop">

		<div class="demo-card-square mdl-card mdl-shadow--2dp" style="text-align: center;">
            <div class="mdl-card__supporting-text">
              <span>TRIP NO :<?php echo $arr_get_a_user['trip']['pk']; ?></span>
              <div><span><?php echo $arr_get_a_user['trip']['category']; ?></span></div>
              <div><span><?php echo $arr_get_a_user['trip']['start_date']; ?> - <?php echo $arr_get_a_user['trip']['end_date']; ?></span></div>
              <div><span>&#8377; <?php echo $arr_get_a_user['total']; ?></span></div>
          </div>
		</div>

			<div style="overflow-y: auto; max-height: 451px;">
				 <ul class="demo-list-two mdl-list mdl-js-ripple-effect">

			<?php for($t=0; $t< count($arr_get_a_user['categories']);$t++){?>
				  <li class="mdl-list__item mdl-list__item--two-line ">
				    <a class="mdl-list__item-primary-content " href="#!">
				      <span><?php echo $arr_get_a_user['categories'][$t]['trip_details']['name']; ?></span>
				      <span class="mdl-list__item-sub-title"><i><?php echo $arr_get_a_user['categories'][$t]['trip_details']['category']; ?></i></span>
				    </a>
				    <span class="mdl-list__item-secondary-content">
				      <span class="mdl-list__item-secondary-info">&#8377;<?php echo $arr_get_a_user['categories'][$t]['trip_details']['amount']; ?></span>
				      
				    </span>
				  </li>
            <?php }?>
				 </ul>
<!--           </div>
 -->		</div>
			 

		
	</div>

		<div class="mdl-cell mdl-cell--5-col mdl-cell--5-col-tablet mdl-cell--5-col-desktop">
		 
		 <div class="demo-card-image mdl-card mdl-shadow--2dp">
			 <table><tr><td> <span >Catergory : FOOD</span>
	       <div></div><span >Amt:4800</span></td></tr></table>
	      
	       <div class="mdl-card__actions mdl-card--border"></div>
<!--          <span class="demo-card-image__filename">Image.jpg</span>
           <div class=" mdl-card--expand"></div>-->
			  <div class="mdl-card__actions">
			  <div><a href="#!"><img src="http://lorempixel.com/1024/768/nature" style="width: 100%"></a></div>
			  </div>
		</div>
		</div>
	</div>
	</main>
</div>






<!-- Scripts -->
<script defer src="https://code.getmdl.io/1.3.0/material.min.js"></script>

</body>
</html>