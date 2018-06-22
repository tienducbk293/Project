@extends('admin.master')
@section('content')
<ul class="breadcrumb">
  <li>
      <i class="icon-home"></i>
      <a href="{{ url ('/')}}">Trang chủ</a>
      <i class="icon-angle-right"></i> 
  </li>
  <li>
      <i class="fa fa-th" aria-hidden="true"></i>
      <a href="{{ route('admin.users.getList')}}">Danh sách tài khoản </a>
  </li>
</ul>
<div class="row-fluid sortable">
<div class="box span12">
    @include('admin.blocks.errors')
    <div class="box-header" data-original-title>
        <h2><i class="icon-plus-sign-alt"></i> <span class="break"></span>Thông tin thành viên</h2>
        <div class="box-icon">
            <a href="#" class="btn-setting"><i class="halflings-icon white wrench"></i></a>
            <a href="#" class="btn-minimize"><i class="halflings-icon white chevron-up"></i></a>
            <a href="#" class="btn-close"><i class="halflings-icon white remove"></i></a>
        </div>
    </div>
    <div class="box-content">
        <form class="form-horizontal" action="" method="POST" enctype="multipart/form-data">
          <input type="hidden" name="_token" value="{!! csrf_token() !!}">
          <fieldset>
          <legend style="font-size: 18px;">Thông tin tài khoản</legend>
          @if($user_current == $user['id'])
            <div class="control-group">
                <label class="control-label" for="focusedInput">Tên đăng nhập </label>
                <div class="controls">
                  <input class="input-xlarge focused" id="focusedInput" type="text" name="txtUserName" value="{{ old('txtUserName',isset($user) ? $user['name'] :null)}}" >
                </div>
            </div>
            <div class="control-group">
                <label class="control-label" for="focusedInput">Email</label>
                <div class="controls">
                  <input class="input-xlarge focused" id="focusedInput" type="text" name="txtEmail" value="{{ old ('txtEmail',isset($user) ? $user['email'] : null)}}" >
                </div>
            </div>
            <div class="control-group">
                <label class="control-label" for="focusedInput">Mật khẩu</label>
                <div class="controls">
                  <input class="input-xlarge focused" id="focusedInput" type="password" name="txtPass" value="">
                </div>
            </div>
            <div class="control-group">
                <label class="control-label" for="focusedInput">Xác nhận mật khẩu</label>
                <div class="controls">
                  <input class="input-xlarge focused" id="focusedInput" type="password" name="txtRePass" value="">
                </div>
            </div>
          @else 
            <div class="control-group">
                <label class="control-label" for="focusedInput">Tên đăng nhập </label>
                <div class="controls">
                  <input class="input-xlarge focused" id="focusedInput" type="text" name="txtUserName" value="{{ old('txtUserName',isset($user) ? $user['name'] :null)}}" disabled >
                </div>
            </div>
            <div class="control-group">
                <label class="control-label" for="focusedInput">Email</label>
                <div class="controls">
                  <input class="input-xlarge focused" id="focusedInput" type="text" name="txtEmail" value="{{ old ('txtEmail',isset($user) ? $user['email'] : null)}}" disabled="">
                </div>
            </div>
          @endif
          @if($user_current != $user['id'])
              <div class="control-group">
              <label class="control-label">Level</label>
              @if($user_level == 3)
                <div class="controls" >
                  <label class="radio" style="float: left;" >
                  <input type="radio" name="rdoLevel" id="optionsRadios1" value="1" checked=""
                    checked="checked"> 
                  Nhân viên
                  </label>
                </div>
                <div class="controls">
                  <label class="radio" style="float: left;">
                    <input type="radio" name="rdoLevel" id="optionsRadios2" value="2"
                      checked="checked">
                    Thành viên
                  </label>
                </div>
              @else
                <div class="controls">
                  <label class="radio" style="float: left;">
                    <input type="radio" name="rdoLevel" id="optionsRadios2" value="2"
                      checked="checked">
                    Thành viên
                  </label>
                </div> 
              @endif             
              </div>
              <div class="control-group">
              @if($user_level > $user['level'])
              <label class="control-label">Trạng thái tài khoản</label>
                <div class="controls" >
                  <label class="radio" style="float: left;" >
                  <input type="radio" name="rdoStatus" id="optionsRadios1" value="1" checked=""
                  @if($user['status'] ==1)
                    checked="checked"
                  @endif
                  > Hoạt động
                  </label>
                </div>
                <div class="controls">
                  <label class="radio" style="float: left;">
                    <input type="radio" name="rdoStatus" id="optionsRadios2" value="2"
                    @if($user['status'] ==2)
                      checked="checked"
                    @endif
                    > Khóa
                  </label>
                </div>
              @endif
              </div>
          @endif
          </fieldset>
          <div class="form-actions">
            <button type="submit" class="btn btn-primary">Lưu thông tin</button>
            <button type="reset" class="btn">Hủy</button>
          </div>
        </form>  
    </div>
</div><!--/span-->
</div><!--/row-->
@endsection