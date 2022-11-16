<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Tuyển Dụng</title>
  <link rel="stylesheet" href="<?php echo asset('css/style.css') ?>" type="text/css">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Oswald:wght@300;400;500;600;700&display=swap" rel="stylesheet">
</head>

<body>
  <div class="wrap">
    <div class="post-job">
      <h2 class="dangtintuyendung">Đăng tin tuyển dụng</h2>
      <div class="form-tuyen-dung">
        <form action="{{url('/user/create')}}" method="POST">
          <div class="form-input">
            <label for="input-name">Tên công việc</label>
            <input type="text" placeholder="Nhập tên công việc">
          </div>
          <div class="form-input">
            <label for="input-level">Cấp bậc tuyển dụng</label>
            <input type="text" placeholder="Nhập cấp bậc tuyển dụng">
          </div>
          <div class="form-input">
            <label for="input-name">Yêu cầu độ tuổi</label>
            <input type="text" placeholder="Nhập độ tuổi">
          </div>
      </div>
      <div class="form-group">
        <label class="control-label col-sm-2" for="level">Cấp bậc tuyển dụng <span class="text-danger">(*)</span>:</label>
        <div class="col-sm-6">
          <input type="level" name="level" class="form-control" id="level" placeholder="Enter level">
        </div>
      </div>
      <div class="form-group">
        <label class="control-label col-sm-2" for="age">Độ tuổi <span class="text-danger">(*)</span>:</label>
        <div class="col-sm-6">
          <input type="age" name="age" class="form-control" id="age" placeholder="Enter age">
        </div>
      </div>
      <div class="form-group">
        <label class="control-label col-sm-2" for="quantity">Số lượng <span class="text-danger">(*)</span>:</label>
        <div class="col-sm-6">
          <input type="quantity" name="quantity" class="form-control" id="quantity" placeholder="Enter quantity">
        </div>
      </div>
      <div class="form-group">
        <label class="control-label col-sm-2" for="work">Ngành nghề <span class="text-danger">(*)</span>:</label>
        <div class="col-sm-6">
          <input type="work" name="work" class="form-control" id="work" placeholder="Enter work">
        </div>
      </div>

      </form>
    </div>
    <button type="submit">Save</button>
  </div>
  </div>
</body>


</html>