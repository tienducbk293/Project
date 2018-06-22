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
  <i class="icon-angle-right"></i>
</li>
<li>
	<i class="icon-plus-sign"></i>
	<a href="{{URL::route('admin.users.getAdd')}}">Thêm mới tài khoản </a>
</li>
</ul>
<div class="row-fluid sortable">	
<div class="box span12">
	<div class="box-header">
		<h2 id="txtName"><i class="fa fa-info-circle" aria-hidden="true"></i><span class="break"></span>Thông tin chi tài khoản : {{ old('txtName',isset($data) ? $data['name'] : nul)}}</h2>
		<div class="box-icon">
			<a href="#" class="btn-setting"><i class="halflings-icon white wrench"></i></a>
			<a href="#" class="btn-minimize"><i class="halflings-icon white chevron-up"></i></a>
			<a href="#" class="btn-close"><i class="halflings-icon white remove"></i></a>
		</div>
	</div>
	<div class="box-content">
		<fieldset>
			<table class="table table-bordered table-striped table-condensed">
				  <thead>
					  <tr>
						  <th>Tên tài khoản</th>
						  <th>Email</th>
						  <th style="text-align: center;">Level</th>
						  <th style="text-align: center;">Trạng thái</th>                                              
					  </tr>
				  </thead>   
				  <tbody>
					<tr>
						<td id="txtName">{{ old('txtName',isset($data) ? $data['name'] : nul)}}</td>
						<td class="center" id="txtEmail">
							{{ old('txtEmail',isset($data) ? $data['email'] : nul)}}
						</td>
						<td class="center" id="rdoLevel" style="text-align: center;">
							@if( ($data['level'] == 4) && ($data['id'] ==4) )
								<span class="label label-warning">SuperAdmin</span>
							@elseif($data['level'] == 3 || $data['level'] == 2)
								<span class="label label-info">Admin</span>
							@else
								Member
							@endif
						</td>
						<td class="center" id="rdoStatus" style="text-align: center;">
							@if($data['status'] == 1)
								<span class="label label-success">Hoạt động</span>
							@else 
								<span class="label label-danger" style="background: red;">Đã khóa</span>
							@endif
						</td>          
				  </tbody>
			 </table>  
		 	<form action="" class="form-group" >
          </form>
		</fieldset>

	</div>
</div><!--/span-->
</div><!--/row-->
@endsection