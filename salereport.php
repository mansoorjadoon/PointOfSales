<!DOCTYPE html>
<head>
<title>Sales Report</title>

    <!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" 
    <style type="text/css">
        
    </style>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.1.4/Chart.bundle.min.js"></script>
</head>
<body>
<nav class="navbar navbar-default">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="#">Admin Dashboard</a>
    </div> 
    <ul class="nav navbar-nav">
      <li ><a href="http://localhost/sale/dashboard.php">Dashboard</a></li>
      <li><a href="employee.php">Manage Employees </a></li>
      <li class="active"><a href = "salereport.php">Sales Report </a></li>
      <li><a href = "users.php">Users </a></li>
    </ul>
    <ul class="nav navbar-nav navbar-right">
      <li  class="btn btn-danger" ><a style="color: white;" href="logout.php"><span class=" glyphicon glyphicon-user"></span> Logout</a></li>
    </ul>
  </div>
</nav>



</head>


<div style="width: 400px; height:400px; float: left">
<canvas id="myChart" width="400" height="400"></canvas>
</div>
	
<div style="width:400px; height:400px; float: left">
<canvas id="myChart1" width="400" height="400"></canvas>
</div>


<script type="text/javascript">
	
	var ctx = document.getElementById("myChart");
	var myChart = new Chart(ctx, {
    type: 'line',
    data: {
        labels: ["January", "Feberuary", "March", "April", "May", "June"],
        datasets: [
        {
            label: "Sales in this year",
            fill: true,
            lineTension: 0,
            backgroundColor: "rgba(75,192,192,0.4)",
            borderColor: "rgba(75,192,192,1)",
            borderCapStyle: 'butt',
            borderDash: [],
            borderDashOffset: 0.0,
            borderJoinStyle: 'miter',
            pointBorderColor: "rgba(75,192,192,1)",
            pointBackgroundColor: "#fff",
            pointBorderWidth: 1,
            pointHoverRadius: 5,
            pointHoverBackgroundColor: "rgba(75,192,192,1)",
            pointHoverBorderColor: "rgba(220,220,220,1)",
            pointHoverBorderWidth: 2,
            pointRadius: 1,
            pointHitRadius: 10,
            data: [65, 59, 80, 81, 56, 55, 40],
            spanGaps: false,
        }
    ]
    },
    options: {
        scales: {
            yAxes: [{
                ticks: {
                    beginAtZero:true
                }
            }]
        }
    }
});

	var ctx = document.getElementById("myChart1");
	var myChart1 = new Chart(ctx, {
    type: 'bar',
    data: {
        labels: ["January", "Feberuary", "March", "April", "May", "June"],
        datasets: [{
            label: '# of Sales',
            data: [12, 19, 3, 5, 2, 3],
            backgroundColor: [
                'rgba(255, 99, 132, 0.2)',
                'rgba(54, 162, 235, 0.2)',
                'rgba(255, 206, 86, 0.2)',
                'rgba(75, 192, 192, 0.2)',
                'rgba(153, 102, 255, 0.2)',
                'rgba(255, 159, 64, 0.2)'
            ],
            borderColor: [
                'rgba(255,99,132,1)',
                'rgba(54, 162, 235, 1)',
                'rgba(255, 206, 86, 1)',
                'rgba(75, 192, 192, 1)',
                'rgba(153, 102, 255, 1)',
                'rgba(255, 159, 64, 1)'
            ],
            borderWidth: 1
        }]
    },
    options: {
        scales: {
            yAxes: [{
                ticks: {
                    beginAtZero:true
                }
            }]
        }
    }
});
</script>

<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/core.js"></script>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/1.0.2/Chart.js"></script>
</body>
</html>