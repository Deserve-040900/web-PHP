<?php
include_once('../model/xu_ly_loai_sach.php');
$loai_sach = new xu_ly_loai_sach();

?>

<div class="title_page">
    Thêm sách
</div>

<div class="include_form_process">
    <form action="" method="POST" class="form-horizontal" role="form">
            <div class="form-group">
                <div class="col-sm-2 title_input">
                    Tên sách
                </div>
                <div class="col-sm-10">                    
                    <input type="text" name="ten_sach" id="" class="form-control" value="" required="required" title="">
                </div>
            </div>

            <div class="form-group">
                <div class="col-sm-2 title_input">
                    Loại sách
                </div>
                <div class="col-sm-10">                    
                    <select name="id_loai_sach" id="input" class="form-control" required="required">
                        <option value=""></option>
                    </select>
                </div>
            </div>

            <div class="form-group">
                <div class="col-sm-10 col-sm-offset-2">
                    <input type="submit" name="btn_add_sach" class="btn btn-primary" value="them_sach">
                </div>
            </div>
    </form>
</div>