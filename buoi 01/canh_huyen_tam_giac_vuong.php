<?php
if(isset($_POST["canhA"]) && isset($_POST["canhB"])){
    $canh_huyen = sqrt(pow($_POST["canhA"],2) + pow($_POST["canhB"],2));
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta http-equiv="X-UA-Compatible" content="ie=edge">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.3.1/css/bootstrap.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0-11/css/all.min.css">
<link rel="stylesheet" href="style.css">
<title>Cạnh huyền tam giác vuông</title>
</head>
<body>
<div class="container">
    
    <form action="" method="POST" class="form-horizontal" role="form">
            <div class="form-group">
                <legend>CẠNH HUYỀN TAM GIÁC VUÔNG</legend>
            </div>

            <div class="form-group">                
                <div class="col-xs-2 col-sm-2 col-md-2 col-lg-2">Cạnh A</div>                
                
                <div class="col-xs-10 col-sm-10 col-md-10 col-lg-10">                    
                    <input type="number" name="canhA" id="" class="form-control" value="<?php if(isset($_POST["canhA"])) echo $_POST["canhA"] ?>" required="required">                   
                </div>                
            </div>

            <div class="form-group">                
                <div class="col-xs-2 col-sm-2 col-md-2 col-lg-2">Cạnh B</div>                
                
                <div class="col-xs-10 col-sm-10 col-md-10 col-lg-10">                    
                    <input type="number" name="canhB" id="" class="form-control" value="<?php if(isset($_POST["canhB"])) echo $_POST["canhB"] ?>" required="required">                   
                </div>                
            </div>

            <div class="form-group">                
                <div class="col-xs-2 col-sm-2 col-md-2 col-lg-2">Cạnh huyền</div>                
                
                <div class="col-xs-10 col-sm-10 col-md-10 col-lg-10">                    
                    <input type="number" name="canh huyen" id="" class="form-control" value="<?php echo $canh_huyen ?>">                   
                </div>                
            </div>

            <div class="form-group">
                <div class="col-sm-10 col-sm-offset-2">
                    <button type="submit" class="btn btn-primary">Tính</button>
                </div>
            </div>
    </form>
    
</div>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.slim.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.15.0/umd/popper.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.3.1/js/bootstrap.min.js"></script>
</body>
</html>