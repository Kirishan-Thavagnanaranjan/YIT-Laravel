<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  @vite('resources/css/app.css')
  <title>@yield('title')</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" />
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/jquery-validation@1.19.5/dist/jquery.validate.min.js"></script>
  <link rel="stylesheet" href="https://cdn.datatables.net/2.3.5/css/dataTables.dataTables.css" />
  <style>
    body {
      display: flex;
      height: 100vh;
      /*overflow: hidden;*/
    }

    /* Sidebar styling */
    .sidebar {
      width: 250px;
      background-color: #0E03A0;
      color: white !important;
      height: 100vh;
    }

    .sidebar .nav-link {
      color: white;
      font-weight: 500;
    }

    .sidebar .nav-link:hover {
      color: white;
      font-weight: 500;
      border-bottom: 1px solid #fff;
    }

    .main-content {
      flex-grow: 1;
      background-color: #F8F9FA;
      display: flex;
      flex-direction: column;
    }

    header {
      background-color: #FFFFFF;
      border-bottom: 1px solid #DEE2E6;
      padding: 15px 20px;
      font-weight: bold;
      font-size: 1.3rem;
      display: flex;
      justify-content: space-between;
    }
  </style>
</head>

<body>
  <div class="sidebar d-flex flex-column p-3">
    <h4 class="text-center mb-4">Main Page
      <hr>
    </h4>
  </div>
  <div class="main-content">
    <header class="sticky-top">
      <ul class="nav mb-auto mx-auto">
        <li class="nav-item" id="grade">
          <a href="" class="nav-link fs-6 text-secondary"> Home</a>
        </li>
        <li class="nav-item" id="grade">
          <a href="" class="nav-link fs-6 text-secondary"> About</a>
        </li>
        <li class="nav-item" id="subject">
          <a href="" class="nav-link fs-6 text-secondary"> Gallery</a>
        </li>
        <li class="nav-item" id="subject">
          <a href="" class="nav-link fs-6 text-secondary"> Contact</a>
        </li>
        <li class="nav-item" id="subject">
          <a href="" class="nav-link fs-6 text-secondary"> Services</a>
        </li>
      </ul>
    </header>
    <div class="content">
      @yield('content')
    </div>
  </div>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
  <script src="https://cdn.datatables.net/2.3.5/js/dataTables.min.js"></script>
  <script src="/DataTables/datatables.js"></script>
</body>

</html>