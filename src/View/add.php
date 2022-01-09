<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.2/font/bootstrap-icons.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

</head>
<body>
    <main>
        <div class="container">
                <h5 class="text-center text-primary mt-5" >Thêm nhân viên mới</h5>
                <form method="post" action="index.php?controller=employees&action=add">
        
            <div class="form-group">
                <label for="txtHoTen">Họ và tên</label>
                <input type="text" class="form-control" id="" name="hovaten" placeholder="" value="">
            </div>
            <div class="form-group">
                <label for="txtHoTen">Chức vụ</label>
                <input type="text" class="form-control" id="" name="chucvu" placeholder="" value="">
            </div>
            <div class="form-group">
                <label for="">Phòng ban</label>
                <input type="text" class="form-control" id="" name="phongban" placeholder="" value="">
            </div>
            <div class="form-group">
                <label for="">Lương</label>
                <input type="text" class="form-control" id="" name="luong" placeholder="" value="">
            </div>
            <div class="form-group">
                <label for="">Ngày vào làm</label>
                <input type="text" class="form-control" id="" name="ngayvaolam" placeholder="" value="">
            </div>
          
            <button type="submit" name="submit" class="btn btn-primary">Lưu Lại</button>
            </form>
            </div>
    
    </main>
</body>
</html>