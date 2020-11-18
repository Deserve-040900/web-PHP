<?php
// upload nhiều file
if(isset($_FILES['hinh'])){
    foreach($_FILES['hinh']['name'] as $key => $value){
        $thong_tin_hinh = './image/'. $_FILES['hinh']['name'][$key];
        move_uploaded_file($_FILES['hinh']['tmp_name'][$key], $thong_tin_hinh);
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Upload nhiều file</title>
    
    <!-- Latest compiled and minified CSS & JS -->
    <link rel="stylesheet" media="screen" href="//netdna.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css">
    <script src="//code.jquery.com/jquery.js"></script>
    <script src="//netdna.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"></script>
    
    <style>
        .list_img img, .hinh_anh img{
            width: 150px;
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="hinh_anh">
            <?php   // mở thư mục image và lưu file theo đường dẫn ./image/...
            $dir = opendir('image');
            while(($file = readdir($dir)) !== false){
                //echo $file . "<br>";
                if($file != '.' && $file != '..'){
                    ?>
                    <img src="./image/<?php echo $file ?>" alt="">
                    <?php
                }
            }
            closedir($dir);
            ?>
        </div>

        <form action="" method="POST" class="form-horizontal" role="form" enctype="multipart/form-data">
            <div class="form-group">
                <legend>SAVE AND OPEN DATA OF BOOK</legend>
            </div>

            <div class="form-group">                
                <div class="col-xs-2 col-sm-2 col-md-2 col-lg-2">Hình</div>
                
                <div class="col-xs-10 col-sm-10 col-md-10 col-lg-10">                    
                    <input type="file" name="hinh[]" id="file" multiple="true" class="form-control">
                </div>  <!--upload nhiều file -> name="hinh[]" multiple="true"-->
            </div>

            <div class="form-group">
                <div class="col-sm-10 col-sm-offset-2">
                    <button type="submit" class="btn btn-primary">Upload</button>
                </div>
            </div>
        </form>

        <script>    // xử lý và lưu ảnh vào thư mục
        $(function(){
            $('#hinh').change(function(){
                var input = this;
                var url = $(this).val();

                console.log(input.files);

                for(var i=0; i<input.files.length; i++){
                    var reader = new FileReader();
                    reader.onload = function(e){
                        console.log(e.target);
                        var img = document.createElement('img');
                        img.src = e.target.result;
                        $('.list_img').append(img);
                    }
                    reader.readAsDataURL(input.files[i]);
                }
            });
        });
        </script>
    </div>
</body>
</html>