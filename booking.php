<!DOCTYPE html>
<html>
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Booking</title>
    <script src="https://code.getmdl.io/1.3.0/material.min.js"></script>
<!--     <link rel="stylesheet" href="https://code.getmdl.io/1.3.0/material.indigo-pink.min.css">
 -->
<link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
<link rel="stylesheet" href="css/material.indigo-pink.min.css">

<!-- <link rel="stylesheet" type="text/css" href="css/profile.css">
 -->

<!--  <link rel="stylesheet" href="https://cdn.datatables.net/buttons/1.3.1/css/buttons.dataTables.min.css"> -->
   <!-- DATA TABLE CSS -->
  <!--  <link rel="stylesheet" type="text/css" href="http://cdnjs.cloudflare.com/ajax/libs/material-design-lite/1.1.0/material.min.css"> -->
<!--   <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.16/css/jquery.dataTables.min.css"> -->

<!-- Table js -->

<!-- <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
<script src="cdn.datatables.net/1.10.16/js/jquery.dataTables.min.js
"></script>
 -->

<!-- <script src="https://cdn.datatables.net/buttons/1.3.1/js/dataTables.buttons.min.js"></script>
<script src="//cdn.datatables.net/buttons/1.3.1/js/buttons.flash.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js"></script>
<script src="//cdn.rawgit.com/bpampuch/pdfmake/0.1.27/build/pdfmake.min.js"></script>
<script src="//cdn.rawgit.com/bpampuch/pdfmake/0.1.27/build/vfs_fonts.js"></script>
<script src="//cdn.datatables.net/buttons/1.3.1/js/buttons.html5.min.js"></script>
<script src="//cdn.datatables.net/buttons/1.3.1/js/buttons.print.min.js"></script> -->

</head>
<body>

 <div class="demo-layout mdl-layout mdl-js-layout mdl-layout--fixed-drawer mdl-layout--fixed-header">
     <header class="demo-header mdl-layout__header mdl-color--grey-100 mdl-color-text--grey-600">

        <div class="mdl-layout__header-row" style="background-color: #ffffff;">
          <span class="mdl-layout-title" style="color: black;">corro</span>
          <div class="mdl-layout-spacer"></div>

       <button class="mdl-button mdl-js-button mdl-js-ripple-effect mdl-button--icon" id="hdrbtn">
            <i class="material-icons">more_vert</i>
          </button>
          <ul class="mdl-menu mdl-js-menu mdl-js-ripple-effect mdl-menu--bottom-right" for="hdrbtn">
            <li class="mdl-menu__item">Logout</li>
          </ul>
        </div>

<!--           <hr style="background-color: #ccc;">
 -->          <span style="    background-color: #ffffff;
    border-top: thin solid;
    border-top-color: #efefef;" >Overview</span>
      </header>


			<div class="demo-drawer mdl-layout__drawer mdl-color--blue-grey-900 mdl-color-text--blue-grey-50" style="width: 7%;background-color: #4ab8c9 !important;">
			        <header class="demo-drawer-header">
			    	<nav class="demo-navigation mdl-navigation mdl-color--blue-grey-800" style="background-color: #4ab8c9 !important;overflow-x:hidden;overflow-y: hidden;">
			          <a class="mdl-navigation__link" href="#" style="padding-left: 30px;"><i class="material-icons">home</i>Overview</a>
			          <a class="mdl-navigation__link" href="#" style="padding-left: 30px;"><i class="mdl-color-text--blue-grey-400 material-icons" role="presentation">inbox</i>Expense Report</a>
			          <a class="mdl-navigation__link" href="#" style="padding-left: 30px;"><i class="mdl-color-text--blue-grey-400 material-icons" role="presentation">delete</i>Travel Requests</a>
			          <a class="mdl-navigation__link" href="#" style="padding-left: 30px;"><i class="mdl-color-text--blue-grey-400 material-icons" role="presentation">report</i>Booking</a>
			          <a class="mdl-navigation__link" href="#" style="padding-left: 30px;"><i class="mdl-color-text--blue-grey-400 material-icons" role="presentation">settings</i>Settings</a>
			          
			        </nav>
			        </header>

			 </div>
			 <!-- Side Bar and Header -->

			   <main class="mdl-layout__content mdl-color--grey-100" style="margin-left:83px;">
        <div class="mdl-grid demo-content">
        
          <div class="mdl-components mdl-js-components mdl-cell mdl-cell--12-col mdl-cell--12-col-tablet mdl-cell--12-col-desktop">

              <div class="mdl-card mdl-shadow--2dp layer2-middle-card" style="width: 100%;">
                              <div class="mdl-card__title" style="padding: 0px;">
                              <div class="mdl-layout__tab-bar mdl-js-ripple-effect" style="background-color: unset;height: unset;padding: unset;">
                              	
					                 <a href="#fixed-tab-1" class="mdl-layout__tab is-active" style="color: #000;">Tab 1</a>
          <a href="#fixed-tab-2" class="mdl-layout__tab" style="color: #000;">Tab 2</a>
          <a href="#fixed-tab-3" class="mdl-layout__tab" style="color: #000;">Tab 3</a>
					          </div>
                              </div>
                            <!-- ======================================================= -->
                              <div class="mdl-card__actions mdl-card--border">
                                <!-- <a class="mdl-button mdl-button--colored mdl-js-button mdl-js-ripple-effect">
                                  Get Started
                                </a> -->
                              </div>
                              <!-- ~```````````````````````````````~~~~~~~~~~~ -->
                               <div class="mdl-layout__content">
						        <section class="mdl-layout__tab-panel is-active" id="fixed-tab-1">
          <div class="page-content"><p>text1</p></div>
        </section>
        <section class="mdl-layout__tab-panel" id="fixed-tab-2">
          <div class="page-content"><p>text2</p></div>
        </section>
        <section class="mdl-layout__tab-panel" id="fixed-tab-3">
          <div class="page-content"><!-- Your content goes here --></div>
        </section>
        						</div>
			<!-- |||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||| -->
                            </div>

        </div>
        </div>
        </div>
        </main>


<!--  <script defer src="https://code.getmdl.io/1.3.0/material.min.js"></script>
 -->      
</body>
</html>