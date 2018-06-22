<!-- start: Main Menu -->
<div id="sidebar-left" class="span2">
	<div class="nav-collapse sidebar-nav">
		<ul class="nav nav-tabs nav-stacked main-menu">
			<li><a href="{{ route('admin.pages.survey')}}"><i class="icon-bar-chart"></i><span class="hidden-tablet"> Dashboard</span></a></li>	
			<li><a href="{{route('admin.users.getList')}}"><i class="fa fa-user-circle-o" aria-hidden="true"></i><span class="hidden-tablet"> Quản lý tài khoản</span></a></li>
			<li>
				<a class="dropmenu" href="#"><i class="fa fa-refresh fa-5x" aria-hidden="true"></i>
				<span class="hidden-tablet"> Quản lý chỉ số</span></a>
				<ul>
					<li><a class="submenu" href="#"><i class="fa fa-product-hunt" aria-hidden="true"></i><span class="hidden-tablet">AQI</span></a></li>
					<li><a class="submenu" href="#"><i class="fa fa-product-hunt" aria-hidden="true"></i><span class="hidden-tablet">Nồng độ</span></a></li>
				</ul>	
			</li>
			<li>
				<a class="dropmenu" href="#"><i class="fa fa-refresh fa-5x" aria-hidden="true"></i>
				<span class="hidden-tablet"> Quản lý danh mục</span></a>
				<ul>
					<li><a class="submenu" href="#"><i class="fa fa-product-hunt" aria-hidden="true"></i><span class="hidden-tablet">Địa điểm</span></a></li>
				</ul>	
			</li>
			<li><a href="{!! route('admin.pages.calendar') !!}"><i class="icon-calendar"></i><span class="hidden-tablet"> Lịch</span></a></li>
		</ul>
	</div>

</div>
<!-- end: Main Menu -->