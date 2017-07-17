<html>
  <head>
    <!-- Material Design Lite -->
    <script src="https://code.getmdl.io/1.3.0/material.min.js"></script>
    <link rel="stylesheet" href="css/material.min.css">
    <link rel="stylesheet" href="css/home.css">
    <link rel="stylesheet" href="css/table.css">
    <!-- Material Design icon font -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
  </head>
  <body>
    <!-- Always shows a header, even in smaller screens. -->
    <html>
  <head>
    <!-- Material Design Lite -->
    <script src="https://code.getmdl.io/1.3.0/material.min.js"></script>
    <link rel="stylesheet" href="css/material.min.css">
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
     <!-- Always shows a header, even in smaller screens. -->
  
    <div class="demo-layout-transparent mdl-layout mdl-js-layout">
    <header style="background-color:#3f51b5;height:100px;" class="mdl-layout__header mdl-layout__header--transparent">

        <div class="mdl-layout__header-row">
           <!-- Title -->
          <span class="mdl-layout-title">CORRO</span>
          <!-- Add spacer, to align navigation to the right -->
          <div class="mdl-layout-spacer"></div>
          <!-- Navigation. We hide it in small screens. -->
        </div>
      </header>
      <div class="mdl-layout__drawer">
        <span class="mdl-layout-title">CORRO</span>
        <nav class="mdl-navigation">
          <a class="mdl-navigation__link" href="">OVERVIEW</a>
          <a class="mdl-navigation__link" href="">EXPENSE REPORT</a>
          <a class="mdl-navigation__link" href="">BOOKING</a>
          <a class="mdl-navigation__link" href="">SITTING's</a>
          <a class="mdl-navigation__link" href="">REPORT</a>
        </nav>
      </div>

    <main class="mdl-layout__content">
      <div class="page-content">

        <div class="mdl-grid">
 <div class="mdl-cell mdl-cell--2-col">
    <!-- add content here -->
 </div>

  <div class="card">
    <p>TOTAL</p>
    <p>B-TRIPS 180</p>
    <p>MADE</p>
  </div>

<div class="card card-1">
  <p>TOTAL</p>
    <p>REIMBURSEMENT</p>
    <p>FIELD</p>
</div>

<div class="card card-2">
  <p>TOTAL</p>
    <p>APPROVED</p>
</div>

<div class="card card-3">
  <p>TOTAL</p>
    <p>PENDING</p>
</div>
        <!-- Your content goes here --></div>
        <div class="row">
  <div id="admin" class="col s12">
    <div class="cards material-table">
      <div class="table-header">
        <span class="table-title">Material Datatable</span>
        <div class="actions">
          <a href="#" class="search-toggle waves-effect btn-flat nopadding"><i class="material-icons">search</i></a>
        </div>
      </div>
      <table id="datatable">
        <thead>
          <tr>
            <th>Employee ID</th>
            <th>Employee Name</th>
            <th>Dept</th>
            <th>Travel Date</th>
            <th>Pending Days</th>
            <th>Total Claim</th>
            <th>Status</th>
            <th>View</th>
          </tr>
        </thead>
      </table>
    </div>
  </div>
</div>
      </main>
    </div>
  </body>
</html>