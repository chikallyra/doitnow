<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="icon" href="/img/logo_d.png">
  <title>Doitnow Stat</title>
  <!-- Bootstrap CSS -->
  <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" rel="stylesheet">
  <!-- DataTables CSS -->
  <link rel="stylesheet" href="https://cdn.datatables.net/1.10.24/css/dataTables.bootstrap4.min.css">
</head>
<body>
  <style>
    /* Custom CSS for card colors */
    .card-company {
      background-color: #C70039;
      color: white;
    }
    .card-user {
      background-color: #FF6969;
      color: white;
    }
  </style>

  <!-- Navbar -->
  <nav class="navbar navbar-expand-lg navbar-light bg-light">
    <a class="navbar-brand" href="/">
      <img src="/img/logo.png" class="d-inline-block align-top" alt="Doitnow">
    </a>
  </nav>
  <!-- end Navbar -->

  <div class="container mt-5">
    <h2 class="mb-4">Login and Signup Report</h2>
    <div class="row">
      <!-- Card for User Type 1 -->
      <div class="col-md-6 mb-4">
        <div class="card card-company">
          <div class="card-body d-flex justify-content-between align-items-center">
            <div>
              <h5 class="card-title">Total Companies</h5>
              <p class="card-text">
                <span id="total-users-type-1">{{ $t_com }}</span>
              </p>
            </div>
            <i class="fas fa-user-tie fa-2x"></i>
          </div>
        </div>
      </div>

      <div class="col-md-6 mb-4">
        <div class="card card-user">
          <div class="card-body d-flex justify-content-between align-items-center">
            <div>
              <h5 class="card-title">Total Missionaries</h5>
              <p class="card-text">
                <span id="total-users-type-0">{{ $t_miss }}</span>
              </p>
            </div>
            <i class="fas fa-users fa-2x"></i>
          </div>
        </div>
      </div>
    </div>

    <div class="row">
      <!-- Card for Missionary Table -->
      <div class="col-md-12 mb-4">
        <div class="card">
          <div class="card-header card-user">
            Missionary Details
          </div>
          <div class="card-body">
            <div class="table-responsive">
              <table id="missionaryTable" class="table table-bordered">
                <thead class="thead">
                  <tr>
                    <th>#</th>
                    <th>ID</th>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Signup Date</th>
                  </tr>
                </thead>
                @php
                    $no = 1;
                @endphp
                <tbody>
                  @foreach ($missionaries as $miss)
                  <tr>
                    <td>{{ $no++ }}</td>
                    <td>{{ $miss->id }}</td>
                    <td>{{ $miss->name }}</td>
                    <td>{{ $miss->email }}</td>
                    <td>{{ $miss->created_at }}</td>
                  </tr>
                  @endforeach
                </tbody>
              </table>
            </div>
          </div>
        </div>
      </div>
    </div>
      
    <div class="row">
      <!-- Card for Company Table -->
      <div class="col-md-12 mb-4">
        <div class="card">
          <div class="card-header card-company">
            Company Details
          </div>
          <div class="card-body">
            <div class="table-responsive">
              <table id="companyTable" class="table table-bordered">
                <thead class="thead">
                  <tr>
                    <th>#</th>
                    <th>ID</th>
                    <th>Company Name</th>
                    <th>Email</th>
                    <th>Signup Date</th>
                  </tr>
                </thead>
                @php
                    $no = 1;
                    // echo "bisa di push euyyy"
                @endphp
                <tbody>
                  @foreach ($companies as $com)
                  <tr>
                    <td>{{ $no++ }}</td>
                    <td>{{ $com->id }}</td>
                    <td>{{ $com->name }}</td>
                    <td>{{ $com->email }}</td>
                    <td>{{ $com->created_at }}</td>
                  </tr>
                  @endforeach
                </tbody>
              </table>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <!-- Bootstrap JS and dependencies -->
  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.3/dist/umd/popper.min.js"></script>

  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
  <!-- DataTables JS -->
  <script src="https://cdn.datatables.net/1.10.24/js/jquery.dataTables.min.js"></script>
  <script src="https://cdn.datatables.net/1.10.24/js/dataTables.bootstrap4.min.js"></script>
  <script>
    $(document).ready(function() {
      $('#missionaryTable').DataTable();
      $('#companyTable').DataTable();
    });
  </script>
</body>
</html>
