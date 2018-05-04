@extends('master')
@section('content')
<!-- Start information Area -->
<section class="category-area section-gap">
	<div class="container">
		<div style="float: left; width: 40%">
			<div>
				<h2 class="stitle" style="width: 440px;">ĐỒ THỊ</h2>
			</div>
			<div class="row">
				<div class="col-md-6">
					<span class="dailyAQI">AQI 77</span>
				</div>
				<div class="col-md-6">
					<span class="indicatorAQI">Nồng độ</span>
				</div>
			</div>
			<hr class="none_border">
			<div>
				<ul>
					<li style="float: top">
						<div>
							{!! $chart1->html() !!}
						</div>  
						{!! Charts::scripts() !!}
    					{!! $chart1->script() !!}
					</li>
					<hr class="none_border">              
					<li style="float: center">
						<div>
							{!! $chart2->html() !!}
						</div>
						{!! Charts::scripts() !!}
    					{!! $chart2->script() !!}
					</li>
					<hr class="none_border">
					<li style="float: bottom">
						<div>
							{!! $chart3->html() !!}
						</div>
						{!! Charts::scripts() !!}
    					{!! $chart3->script() !!}
					</li>
				</ul>
			</div>	
		</div>
		<div style="float: right; width: 60%; height: 340px">
			<div>
				<h2 class="stitle">BẢN ĐỒ</h2>
			</div>
			{!! Mapper::render() !!}
			<hr style="border: none">
			<div>
				<h2 class="stitle">Bảng quy đổi giá trị AQI</h2>
				<table class="table table-bordered" style="background-color: white">
					<tbody>
						<tr class="active">
							<th style="width: 100px">Giá trị AQI</th>
							<th>Đánh giá</th>
							<th>Ảnh hưởng sức khỏe</th>
							<th>Màu sắc</th>
						</tr>
						<tr>
							<td>0-50</td>
							<td>TỐT</td>
							<td>Không ảnh hưởng đến sức khỏe</td>
							<td>
								<label class="color" style="background-color: blue">XANH</label>
							</td>
						</tr>
						<tr>
							<td>51-100</td>
							<td>TRUNG BÌNH</td>
							<td>Nhóm nhạy cảm nên hạn chế thời gian ở ngoài</td>
							<td>
								<label class="color" style="background-color: yellow">VÀNG</label>
							</td>
						</tr>
						<tr>
							<td>101-200</td>
							<td>KÉM</td>
							<td>Nhóm nhạy cảm cần hạn chế thời gian ở ngoài</td>
							<td>
								<label class="color" style="background-color: orange">DA CAM</label>
							</td>
						</tr>
						<tr>
							<td>201-300</td>
							<td>XẤU</td>
							<td>Nhóm nhạy cảm tránh ra ngoài, những người khác hạn chế ở ngoài</td>
							<td>
								<label class="color" style="background-color: red">ĐỎ</label>
							</td>
						</tr>
						<tr>
							<td>Từ 301</td>
							<td>NGUY HẠI</td>
							<td>Mọi người nên ở trong nhà</td>
							<td>
								<label class="color" style="background-color: brown">NÂU</label>
							</td>
						</tr>
						<tr>
							<td colspan="4" style="text-align: center;">
								<p>
									<strong>(*)</strong>
								 	 Nhóm nhạy cảm bao gồm, người già và những người mắc bệnh hô hấp
								</p>
							</td>
						</tr>
					</tbody>
				</table>
			</div>
		</div>
	</div>
					
</section>
@endsection