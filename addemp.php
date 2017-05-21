<head>
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.0.0-alpha/css/bootstrap.css">
    <style type="text/css">
        li{
            list-style: none;
        }
    </style>
</head>

<body>
<div>
    <div class="container">
    <div class=" text-center jumbotron">
        <h3>Add Employee Details</h3>
    </div>
    <div class="col-md-4"></div>
    <div class="col-md-4">
    <form id="addemp" name="addemp" method="POST" action="addingEmp.php"  >
     <div class="form-group">
    <fieldset>
    <ul>
                <li>

                    <label for="fname">First Name </label>
                    <input class="form-control" type="text" name="fname">
                </li>
                <li>
                    <label for="lname">Last Name</label>
                    <input  class="form-control" type="text" name="lname">
                </li>
                <li>
                    <label for="email">Email</label>
                    <input class="form-control" type="text" name="email">
                </li>
                <li>
                    <label for="phone">Contact No. </label>
                    <input class="form-control" type="text" name="phone">
                </li>
                <li>
                    <label for="add">Address</label>
                    <input class="form-control" type="text" name="add">
                </li>
                <li>
                     <label for="city">City </label>
                    <input class="form-control" type="text" name="city">
                </li>
                <li>
                     <label for="state">State</label>
                    <input class="form-control" type="text" name="state">
                </li>
                <li>
                    <label for="Des">Description</label>
                    <input class="form-control" type="text" name="Des">
                </li>
                <li>
                    <input class="btn btn-primary" type="submit" name="submit">
                </li>
            </ul>

    </fieldset>
    </div>


</form>
</div>
<div class="col-md-4"></div>
</div> 
</div>

</body>