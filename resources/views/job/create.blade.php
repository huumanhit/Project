@extends('layout.master')

@section('title', 'Create Job')

@section('content')
<h2>Create Job</h2>
<form action="/admin/create/write" method="post" enctype="multipart/form-data" class="form-horizontal"
  id="createForm">
  {{ csrf_field()}}
  <div class="form-group">
    <label class="control-label col-sm-2" for="recruitment">Tin tuyển dụng <span class="text-danger">(*)</span>:</label>
    <div class="col-sm-6">
      <input type="text" name="recruitment" class="form-control" id="recruitment" placeholder="Enter recruitment">
    </div>
  </div>
  <div class="form-group">
    <label class="control-label col-sm-2" for="namework">Tên công việc <span class="text-danger">(*)</span>:</label>
    <div class="col-sm-6">
      <input type="text" name="namework" class="form-control" id="namework" placeholder="Enter namework">
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

  <div class="form-group">
    <label class="control-label col-sm-2" for="phone">Số điện thoại <span class="text-danger">(*)</span>:</label>
    <div class="col-sm-6">
      <input type="phone" name="phone" class="form-control" id="phone" placeholder="Enter phone">
    </div>
  </div>

  <div class="form-group">
    <label class="control-label col-sm-2" for="email">Email <span class="text-danger">(*)</span>:</label>
    <div class="col-sm-6">
      <input type="email" name="email" class="form-control" id="email" placeholder="Enter email">
    </div>
  </div>
  <div class="form-group">
    <label class="control-label col-sm-2" for="address">Địa chỉ <span class="text-danger">(*)</span>:</label>
    <div class="col-sm-6">
      <input type="address" name="address" class="form-control" id="address" placeholder="Enter address">
    </div>
  </div>
  <div class="form-group">
    <div class="col-sm-offset-2 col-sm-10">
      <button type="submit" class="btn btn-default">Submit</button>
    </div>
  </div>
</form>
</body>

</html>
@stop
