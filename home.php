<!DOCTYPE html>
  <head>

    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Table</title>

<link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
<link rel="stylesheet" href="css/material.indigo-pink.min.css">

<!-- Table  -->
 <!-- CSS -->
 <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.16/css/jquery.dataTables.min.css">

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

/*Datatables*/
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
    top: 4px;
    left: 0;
    color: #0f00f7 !important;
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
.dataTables_wrapper .dataTables_filter{
  float: right !important;
}


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
                  <div id="piechart"></div>
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
                              <div id="chart_div"></div>

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
                              <div id="piechart2"></div>
                                <!-- <a class="mdl-button mdl-button--colored mdl-js-button mdl-js-ripple-effect">
                                  Get Started
                                </a> -->
                              </div>

                            </div>
                        </div>



<div class="mdl-grid">
  <!-- Table layout -->
<div id="mdl-tab" style="margin-top: 64px;width: 1185px;"> 
<table id="example" class="display" cellspacing="0" width="100%">
        <thead>
            <tr>
                 <th>EMPLOYEE<br>ID</th>
                <th>EMPLOYEE<br>NAME</th>
                <th>DEPT</th>
                <th>TRAVEL DATE</th>
                <th>TRIP NO.</th>
                <th>PENDING<br>DAYS</th>
              <!--   <th>TOTAL CLAIM</th>
                <th>STATUS</th>
                <th>VIEW</th> -->
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
            </tr>
            <tr>
                <td>Garrett Winters</td>
                <td>Accountant</td>
                <td>Tokyo</td>
                <td>63</td>
                <td>2011/07/25</td>
                <td>$170,750</td>
            </tr>
            <tr>
                <td>Ashton Cox</td>
                <td>Junior Technical Author</td>
                <td>San Francisco</td>
                <td>66</td>
                <td>2009/01/12</td>
                <td>$86,000</td>
            </tr>
            <tr>
                <td>Cedric Kelly</td>
                <td>Senior Javascript Developer</td>
                <td>Edinburgh</td>
                <td>22</td>
                <td>2012/03/29</td>
                <td>$433,060</td>
            </tr>
            <tr>
                <td>Airi Satou</td>
                <td>Accountant</td>
                <td>Tokyo</td>
                <td>33</td>
                <td>2008/11/28</td>
                <td>$162,700</td>
            </tr>
            <tr>
                <td>Brielle Williamson</td>
                <td>Integration Specialist</td>
                <td>New York</td>
                <td>61</td>
                <td>2012/12/02</td>
                <td>$372,000</td>
            </tr>
            <tr>
                <td>Herrod Chandler</td>
                <td>Sales Assistant</td>
                <td>San Francisco</td>
                <td>59</td>
                <td>2012/08/06</td>
                <td>$137,500</td>
            </tr>
            <tr>
                <td>Rhona Davidson</td>
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
                <td>$205,500</td>
            </tr>
            <tr>
                <td>Sonya Frost</td>
                <td>Software Engineer</td>
                <td>Edinburgh</td>
                <td>23</td>
                <td>2008/12/13</td>
                <td>$103,600</td>
            </tr>
            <tr>
                <td>Jena Gaines</td>
                <td>Office Manager</td>
                <td>London</td>
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
            </tr>
            <tr>
                <td>Charde Marshall</td>
                <td>Regional Director</td>
                <td>San Francisco</td>
                <td>36</td>
                <td>2008/10/16</td>
                <td>$470,600</td>
            </tr>
            <tr>
                <td>Haley Kennedy</td>
                <td>Senior Marketing Designer</td>
                <td>London</td>
                <td>43</td>
                <td>2012/12/18</td>
                <td>$313,500</td>
            </tr>
            <tr>
                <td>Tatyana Fitzpatrick</td>
                <td>Regional Director</td>
                <td>London</td>
                <td>19</td>
                <td>2010/03/17</td>
                <td>$385,750</td>
            </tr>
            <tr>
                <td>Michael Silva</td>
                <td>Marketing Designer</td>
                <td>London</td>
                <td>66</td>
                <td>2012/11/27</td>
                <td>$198,500</td>
            </tr>
            <tr>
                <td>Paul Byrd</td>
                <td>Chief Financial Officer (CFO)</td>
                <td>New York</td>
                <td>64</td>
                <td>2010/06/09</td>
                <td>$725,000</td>
            </tr>
            <tr>
                <td>Gloria Little</td>
                <td>Systems Administrator</td>
                <td>New York</td>
                <td>59</td>
                <td>2009/04/10</td>
                <td>$237,500</td>
            </tr>
            <tr>
                <td>Bradley Greer</td>
                <td>Software Engineer</td>
                <td>London</td>
                <td>41</td>
                <td>2012/10/13</td>
                <td>$132,000</td>
            </tr>
            <tr>
                <td>Dai Rios</td>
                <td>Personnel Lead</td>
                <td>Edinburgh</td>
                <td>35</td>
                <td>2012/09/26</td>
                <td>$217,500</td>
            </tr>
            <tr>
                <td>Jenette Caldwell</td>
                <td>Development Lead</td>
                <td>New York</td>
                <td>30</td>
                <td>2011/09/03</td>
                <td>$345,000</td>
            </tr>
            <tr>
                <td>Yuri Berry</td>
                <td>Chief Marketing Officer (CMO)</td>
                <td>New York</td>
                <td>40</td>
                <td>2009/06/25</td>
                <td>$675,000</td>
            </tr>
            <tr>
                <td>Caesar Vance</td>
                <td>Pre-Sales Support</td>
                <td>New York</td>
                <td>21</td>
                <td>2011/12/12</td>
                <td>$106,450</td>
            </tr>
            <tr>
                <td>Doris Wilder</td>
                <td>Sales Assistant</td>
                <td>Sidney</td>
                <td>23</td>
                <td>2010/09/20</td>
                <td>$85,600</td>
            </tr>
            <tr>
                <td>Angelica Ramos</td>
                <td>Chief Executive Officer (CEO)</td>
                <td>London</td>
                <td>47</td>
                <td>2009/10/09</td>
                <td>$1,200,000</td>
            </tr>
            <tr>
                <td>Gavin Joyce</td>
                <td>Developer</td>
                <td>Edinburgh</td>
                <td>42</td>
                <td>2010/12/22</td>
                <td>$92,575</td>
            </tr>
            <tr>
                <td>Jennifer Chang</td>
                <td>Regional Director</td>
                <td>Singapore</td>
                <td>28</td>
                <td>2010/11/14</td>
                <td>$357,650</td>
            </tr>
            <tr>
                <td>Brenden Wagner</td>
                <td>Software Engineer</td>
                <td>San Francisco</td>
                <td>28</td>
                <td>2011/06/07</td>
                <td>$206,850</td>
            </tr>
            <tr>
                <td>Fiona Green</td>
                <td>Chief Operating Officer (COO)</td>
                <td>San Francisco</td>
                <td>48</td>
                <td>2010/03/11</td>
                <td>$850,000</td>
            </tr>
            <tr>
                <td>Shou Itou</td>
                <td>Regional Marketing</td>
                <td>Tokyo</td>
                <td>20</td>
                <td>2011/08/14</td>
                <td>$163,000</td>
            </tr>
            <tr>
                <td>Michelle House</td>
                <td>Integration Specialist</td>
                <td>Sidney</td>
                <td>37</td>
                <td>2011/06/02</td>
                <td>$95,400</td>
            </tr>
            <tr>
                <td>Suki Burks</td>
                <td>Developer</td>
                <td>London</td>
                <td>53</td>
                <td>2009/10/22</td>
                <td>$114,500</td>
            </tr>
            <tr>
                <td>Prescott Bartlett</td>
                <td>Technical Author</td>
                <td>London</td>
                <td>27</td>
                <td>2011/05/07</td>
                <td>$145,000</td>
            </tr>
            <tr>
                <td>Gavin Cortez</td>
                <td>Team Leader</td>
                <td>San Francisco</td>
                <td>22</td>
                <td>2008/10/26</td>
                <td>$235,500</td>
            </tr>
            <tr>
                <td>Martena Mccray</td>
                <td>Post-Sales support</td>
                <td>Edinburgh</td>
                <td>46</td>
                <td>2011/03/09</td>
                <td>$324,050</td>
            </tr>
            <tr>
                <td>Unity Butler</td>
                <td>Marketing Designer</td>
                <td>San Francisco</td>
                <td>47</td>
                <td>2009/12/09</td>
                <td>$85,675</td>
            </tr>
            <tr>
                <td>Howard Hatfield</td>
                <td>Office Manager</td>
                <td>San Francisco</td>
                <td>51</td>
                <td>2008/12/16</td>
                <td>$164,500</td>
            </tr>
            <tr>
                <td>Hope Fuentes</td>
                <td>Secretary</td>
                <td>San Francisco</td>
                <td>41</td>
                <td>2010/02/12</td>
                <td>$109,850</td>
            </tr>
            <tr>
                <td>Vivian Harrell</td>
                <td>Financial Controller</td>
                <td>San Francisco</td>
                <td>62</td>
                <td>2009/02/14</td>
                <td>$452,500</td>
            </tr>
            <tr>
                <td>Timothy Mooney</td>
                <td>Office Manager</td>
                <td>London</td>
                <td>37</td>
                <td>2008/12/11</td>
                <td>$136,200</td>
            </tr>
            <tr>
                <td>Jackson Bradshaw</td>
                <td>Director</td>
                <td>New York</td>
                <td>65</td>
                <td>2008/09/26</td>
                <td>$645,750</td>
            </tr>
            <tr>
                <td>Olivia Liang</td>
                <td>Support Engineer</td>
                <td>Singapore</td>
                <td>64</td>
                <td>2011/02/03</td>
                <td>$234,500</td>
            </tr>
            <tr>
                <td>Bruno Nash</td>
                <td>Software Engineer</td>
                <td>London</td>
                <td>38</td>
                <td>2011/05/03</td>
                <td>$163,500</td>
            </tr>
            <tr>
                <td>Sakura Yamamoto</td>
                <td>Support Engineer</td>
                <td>Tokyo</td>
                <td>37</td>
                <td>2009/08/19</td>
                <td>$139,575</td>
            </tr>
            <tr>
                <td>Thor Walton</td>
                <td>Developer</td>
                <td>New York</td>
                <td>61</td>
                <td>2013/08/11</td>
                <td>$98,540</td>
            </tr>
            <tr>
                <td>Finn Camacho</td>
                <td>Support Engineer</td>
                <td>San Francisco</td>
                <td>47</td>
                <td>2009/07/07</td>
                <td>$87,500</td>
            </tr>
            <tr>
                <td>Serge Baldwin</td>
                <td>Data Coordinator</td>
                <td>Singapore</td>
                <td>64</td>
                <td>2012/04/09</td>
                <td>$138,575</td>
            </tr>
            <tr>
                <td>Zenaida Frank</td>
                <td>Software Engineer</td>
                <td>New York</td>
                <td>63</td>
                <td>2010/01/04</td>
                <td>$125,250</td>
            </tr>
            <tr>
                <td>Zorita Serrano</td>
                <td>Software Engineer</td>
                <td>San Francisco</td>
                <td>56</td>
                <td>2012/06/01</td>
                <td>$115,000</td>
            </tr>
            <tr>
                <td>Jennifer Acosta</td>
                <td>Junior Javascript Developer</td>
                <td>Edinburgh</td>
                <td>43</td>
                <td>2013/02/01</td>
                <td>$75,650</td>
            </tr>
            <tr>
                <td>Cara Stevens</td>
                <td>Sales Assistant</td>
                <td>New York</td>
                <td>46</td>
                <td>2011/12/06</td>
                <td>$145,600</td>
            </tr>
            <tr>
                <td>Hermione Butler</td>
                <td>Regional Director</td>
                <td>London</td>
                <td>47</td>
                <td>2011/03/21</td>
                <td>$356,250</td>
            </tr>
            <tr>
                <td>Lael Greer</td>
                <td>Systems Administrator</td>
                <td>London</td>
                <td>21</td>
                <td>2009/02/27</td>
                <td>$103,500</td>
            </tr>
            <tr>
                <td>Jonas Alexander</td>
                <td>Developer</td>
                <td>San Francisco</td>
                <td>30</td>
                <td>2010/07/14</td>
                <td>$86,500</td>
            </tr>
            <tr>
                <td>Shad Decker</td>
                <td>Regional Director</td>
                <td>Edinburgh</td>
                <td>51</td>
                <td>2008/11/13</td>
                <td>$183,000</td>
            </tr>
            <tr>
                <td>Michael Bruce</td>
                <td>Javascript Developer</td>
                <td>Singapore</td>
                <td>29</td>
                <td>2011/06/27</td>
                <td>$183,000</td>
            </tr>
            <tr>
                <td>Donna Snider</td>
                <td>Customer Support</td>
                <td>New York</td>
                <td>27</td>
                <td>2011/01/25</td>
                <td>$112,000</td>
            </tr>
        </tbody>
    </table>


   </div>
</div>



           </div>


            <!-- Below div is for alignment dont remove -->
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
          ['Reimbursed',327],
          ['Business Trips',81]
        ]);

    var options = {
          //title: 'Company Performance',
          chartArea :{left:40,top:'0px',width:'70%',height:'70%'},
          hAxis: {title: 'Year',  titleTextStyle: {color: '#333'}},
          vAxis: {minValue: 0},
         legend:{position: 'bottom'},
         pieSliceText:'value',
         tooltip:'value',
         slices: {
            0: {color: '#2D9CDB'},
            1: { color: '#F2C94C' },
          }


        };

        var chart = new google.visualization.PieChart(document.getElementById('piechart'));

        chart.draw(data, options);
      }
</script> 

<script type="text/javascript">
  
  google.charts.load('current', {
  packages: ['corechart', 'bar']
});
google.charts.setOnLoadCallback(drawStacked);

function drawStacked() {
  var data = google.visualization.arrayToDataTable([
    ['City', 'Reimbursed', 'Approved','Pending',],
    ['', 8175000, 8008000,3792000],
    ['', 3792000, 3694000,3792000],
    ['', 2695000, 2896000,3792000],
    ['', 2099000, 1953000,3792000],
    ['', 1526000, 1517000,3792000],
     ['', 2690320, 2896000,533453],
    ['', 2099000, 1953000,372030],
    ['', 1526000, 1517000,353453],
    
  ]);

  var options = {
    //title: 'Population of Largest U.S. Cities',
    chartArea: {
      width: '50%'
    },
    backgroundColor: { fill:'transparent' },
    hAxis: { textPosition: 'none' },
    isStacked: true,
    format: 'decimal',
         textPosition: 'none',
     colors: ['#23326A', '#4676B5', '#78C4ED'],
    legend:'bottom',
    //legend: {position: 'bottom'},
    hAxis: {
      //title: 'Total Population',
     // minValue: 0,
    },
    vAxis: {
     // title: 'City'
       gridlines: {
        color: 'transparent'
    },    
    }
  };
  var chart = new google.visualization.ColumnChart(document.getElementById('chart_div'));
  chart.draw(data, options);
}
</script>

<script type="text/javascript">
        google.charts.load('current', {'packages':['corechart']});
      google.charts.setOnLoadCallback(drawChart);


      function drawChart() {

        var data = google.visualization.arrayToDataTable([
          ['Task', 'Hours per Day'],
          ['Reimbursed',81],
          ['Approved',21],
          ['Pending',46]
        ]);

    var options = {
          //title: 'Company Performance',
          chartArea :{left:20,top:'0px',width:'70%',height:'70%'},
          hAxis: {title: 'Year',  titleTextStyle: {color: '#333'}},
          vAxis: {minValue: 0},
         legend:{position: 'bottom',textStyle: {fontSize: 9}},
         pieSliceText:'value',
         tooltip:'value',
         slices: {
            0: {color: '#27AE60'},
            1: { color: '#FFA02D' },
            2:{color:'#BD3131'},
          }


        };

        var chart = new google.visualization.PieChart(document.getElementById('piechart2'));

        chart.draw(data, options);
      }
</script> 
</body>
</html>