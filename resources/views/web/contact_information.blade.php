@extends('layouts.layout_el_sendero')
@section('content')
<!-- SECTION -->
  <div class="section" id="informacion-para-contactarnos">
    <!-- container -->
    <div class="container">
      <!-- row -->
      <div class="row">
        <div class="col-md-8">
			<div class="section-row">
				<div class="section-title">
					<h2 class="title">Información de Contacto</h2>
				</div>
				<p>Malis debet quo et, eam an lorem quaestio. Mea ex quod facer decore, eu nam mazim postea. Eu deleniti pertinacia ius. Ad elitr latine eam, ius sanctus eleifend no, cu primis graecis comprehensam eum. Ne vim prompta consectetuer, etiam signiferumque ea eum.</p>
				<ul class="contact">
					<li><i class="fa fa-phone"></i> 202-555-0194</li>
					<li><i class="fa fa-envelope"></i> <a href="#">contactos@revistaelsendero.com.ar</a></li>
					<li><i class="fa fa-map-marker"></i> 123 6th Buenos Aires, Argentina 32904</li>
				</ul>
			</div>

			<div class="section-row">
				<div class="section-title">
					<h2 class="title">Escribinos</h2>
				</div>
				<form action="{{ url('sendemail/send') }}#main_contact_form" method="post" id="main_contact_form">
					<div>
						@if(count( $errors) > 0)
                <div class="alert alert-danger" style="margin-top:10px">
                    <button type="button" class="close" data-dismiss="alert">x</button>
                    <ul>
                        @foreach( $errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif

            @if ($errors->has('g-recaptcha-response'))
                <span class="help-block text-danger" role="alert">
                    <strong>{{ $errors->first('g-recaptcha-response') }}</strong>
                </span>
            @endif

            @if($message = Session::get('success'))
                <div class="alert alert-success alert-block" style="margin-top:10px">
                    <button type="button" class="close" data-dismiss="alert">x</button>
                    <strong>{{ $message }}</strong>
                </div>
            @endif
					</div>
					{{ csrf_field() }}
					<div class="row">
						<div class="col-md-4">
							<div class="form-group">
								<input class="input" type="text" name="name" placeholder="nombre">
							</div>
						</div>
						<div class="col-md-4">
							<div class="form-group">
								<input class="input" type="email" name="email" placeholder="email">
							</div>
						</div>
						<div class="col-md-4">
							<div class="form-group">
								<input class="input" type="text" name="telephone" placeholder="teléfono">
							</div>
						</div>

						<div class="col-md-12">
							<div class="form-group">
								<textarea class="input" name="message" placeholder="Mensage"></textarea>
							</div>

						</div>
						<div class="col-md-12">
                {!! NoCaptcha::display() !!}
            </div>
            <div class="col-md-12" style="margin-top:20px">
							<button class="primary-button">Submit</button>
						</div>	
					</div>
				</form>
			</div>
		</div>

        <div class="col-md-4">
          <!-- ad widget-->
          <!-- <div class="aside-widget text-center">
            <a href="#" style="display: inline-block;margin: auto;">
              <img class="img-responsive" src="./img/ad-3.jpg" alt="">
            </a>
          </div> -->
          <!-- /ad widget -->

          <!-- social widget -->
          <!-- <div class="aside-widget">
            <div class="section-title">
              <h2 class="title">Social Media</h2>
            </div>
            <div class="social-widget">
              <ul>
                <li>
                  <a href="#" class="social-facebook">
                    <i class="fa fa-facebook"></i>
                    <span>21.2K<br>Followers</span>
                  </a>
                </li>
                <li>
                  <a href="#" class="social-twitter">
                    <i class="fa fa-twitter"></i>
                    <span>10.2K<br>Followers</span>
                  </a>
                </li>
                <li>
                  <a href="#" class="social-google-plus">
                    <i class="fa fa-google-plus"></i>
                    <span>5K<br>Followers</span>
                  </a>
                </li>
              </ul>
            </div>
          </div> -->
          <!-- /social widget -->

          <!-- Category widget -->
          @include('includes.category')
          <!-- /category widget -->    
          

          <!-- newsletter widget -->
          <!-- 
          --------------------------------------------
          SUSCRIPCIONES-------------------------------
          --------------------------------------------
          <div class="aside-widget">
            <div class="section-title">
              <h2 class="title">Suscripción</h2>
            </div>
            <div class="newsletter-widget">
              <form>
                <p>Ingresa tus datos y nos contactaremos con vos para finalizar la suscrpción</p>
                <input class="input" name="name" placeholder="Tu Nombre">
                <input class="input" name="telephon" placeholder="Teléfono">
                <input class="input" name="email" placeholder="Email">
                <button class="primary-button">Subscribirme</button>
              </form>
            </div>
          </div> 
          --------------------------------------------
          END SUSCRIPCIONES---------------------------
          --------------------------------------------
          -->
          <!-- /newsletter widget -->

          <!-- galery widget -->
          @include('includes.galery')
          <!-- /galery widget -->
        </div>

      </div>
      <!-- /row -->
    </div>
    <!-- /container -->
  </div>
<!-- /SECTION -->


@endsection
