<!DOCTYPE html>
<html>
<head>
    <title>Add inventory</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" >
</head>
<body>



<div class="container">
<div class="col-md-4">
    
</div>
<div class="col-md-4">
<form  class="form-group" id="addinvent" name="addinvent" method="POST" action="addinginventory.php" >
    <fieldset>

        <H3 class="text-center" >Product Info.</H3>
      

                    <label for="pcode">Product Code </label>
                    <input  class="form-control" type="text" name="pcode">
                
                    <label for="gname">Gen_Name</label>
                    <input class="form-control" type="text" name="gname">
              
                    <label for="pname">Product Name</label>
                    <input class="form-control" type="text" name="pname">
                
                    <label for="cost">Cost Price </label>
                    <input class="form-control" type="text" name="cost">
                
                    <label for="price">Price</label>
                    <input class="form-control" type="text" name="price">
                
                     <label for="supp">Supplier</label>
                    <input class="form-control" type="text" name="supp">
                
                     <label for="qty">Quantity</label>
                    <input class="form-control" type="text" name="qty">
                
                    <label for="exp">Expiry Date</label>
                    <input class="form-control" type="date" name="exp">
                
                    <input class="btn btn-primary" type="submit" name="submit">
                <br>
           

    </fieldset>
</form> 
</div>
</div>
<div class="col-md-4"> </div>
</body>
</html>