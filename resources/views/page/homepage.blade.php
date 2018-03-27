@extends('master')
@section('content')
<!-- start banner Area -->
<section class="banner-area relative" id="home" data-parallax="scroll" data-image-src="source/assets/img/banner-city.jpg">
                <div class="overlay-bg overlay"></div>
                <div class="container">
                    <div class="row fullscreen justify-content-center align-items-center d-flex ">
                        <div class="col-lg-8">
                            <div id="imaginary_container"> 
                                <div class="input-group stylish-input-group">
                                    <input type="text" class="form-control"  placeholder="Addictionwhen gambling" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Addictionwhen gambling '" required="">
                                    <span class="input-group-addon">
                                        <button type="submit">
                                            <span class="lnr lnr-magnifier"></span>
                                        </button>  
                                    </span>
                                </div>
                            </div> 
                            <p class="mt-20 text-center text-white">169 results found for “Addictionwhen gambling”</p>
                        </div>
                    </div>
                </div>  
            </section>
<!-- End banner Area -->	
	
<!-- Start information Area -->
<section class="travel-area section-gap" id="chart">
	<div class="container">
		<center>
            {!! $chart->html() !!}
        </center>
	</div>
	{!! Charts::scripts() !!}
    {!! $chart->script() !!}					
</section>
<!-- End information Area -->

<!-- Start category Area -->
<section class="category-area section-gap" id="maps">
	<div class="container">
		<div style="width: 100%; height: 500px;">
		{!! Mapper::render() !!}
		</div>											
	</div>	
</section>
<!-- End category Area -->
	
<!-- Start team Area -->
<section class="team-area section-gap" id="team"<div class="container"></div>	
</section>
<!-- End team Area -->
@endsection