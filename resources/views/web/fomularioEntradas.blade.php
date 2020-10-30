@extends('layouts.acuarius')
@section('content')

    <section class="ftco-section contact-section">
      <div class="container">
        <div class="row d-flex mb-5 contact-info justify-content-center">
        	<div class="col-md-8">
        		<div class="row mb-5">
		          <div class="col-md-4 text-center py-4">
		          	<div class="icon mb-3 d-flex align-items-center justify-content-center">
		          		<span class="icon-map-o"></span>
		          	</div>
		            <p><span>Dirección:</span> Ex fundo Chacra Cerro lt 178, Comas
Altura cuadra 99 de la Av Universitari - Lima - Perú</p>
		          </div>
		          <div class="col-md-4 text-center py-4">
		          	<div class="icon mb-3 d-flex align-items-center justify-content-center">
		          		<span class="icon-mobile-phone"></span>
		          	</div>
		            <p><span>Teléfono:</span> <a href="#">01 543 6228

 <br>01 543 6149</a></p>
		          </div>
		          <div class="col-md-4 text-center py-4">
		          	<div class="icon mb-3 d-flex align-items-center justify-content-center">
		          		<span class="icon-envelope-o"></span>
		          	</div>
		            <p><span>Email:</span> <a href="mailto:info@yoursite.com">info@yoursite.com</a></p>
		          </div>
		        </div>
          </div>
        </div>
        <div  id="pide-una-reserva"></div>
        <div class="row block-9 justify-content-center mb-5" id="main_contact_form">
          <div class="col-md-6 align-items-stretch d-flex">
            <form action="{{ url('sendemail/send') }}#main_contact_form" method="POST" class="bg-light p-5 contact-form">
              <h3>Solicita una Reserva</h3>
              <hr>
              {{ csrf_field() }}

              <div class="row">
                <div class="col-md-6 form-check">
        				  <input class="form-check-input" type="radio" name="particularInstitucion" id="exampleRadios1" value="Familiar/Particular">
        				  <label class="form-check-label" for="exampleRadios1">
        				    Visita Familiar/Particular
        				  </label>
        			  </div>

        			  <div class="col-md-6 form-check">
        				  <input class="form-check-input" type="radio" name="particularInstitucion" id="exampleRadios2" value="Institucional">
        				  <label class="form-check-label" for="exampleRadios2">
        				    Instituciones
        				  </label>
        			  </div>
              </div>
      			  <hr>

              <div class="form-group">
                <input type="text" name="name" class="form-control" placeholder="Nombre / Institución">
              </div>

              <div class="row">
                <div class="col-md-6 form-group">
                  <input type="text" name="email" class="form-control" placeholder="Email">
                </div>
                <div class="col-md-6 form-group">
                  <input type="text" name="telephone" class="form-control" placeholder="Teléfono">
                </div>
              </div>
              
              <div class="row">
                <div class="col-md-6 form-group">
        			    <label for="exampleFormControlSelect1">Adultos</label>
        			    <select class="form-control" name="adultos" id="exampleFormControlSelect1">
        			      <option>0</option>
        			      <option>1</option>
        			      <option>2</option>
        			      <option>3</option>
        			      <option>4</option>
        			      <option>5</option>
        			      <option>6</option>
        			      <option>7</option>
        			      <option>8</option>
        			      <option>9</option>
        			      <option>10</option>
        			      <option>Más de 10</option>
        			    </select>
        			  </div>

                <div class="col-md-6 form-group">
        			    <label for="exampleFormControlSelect1">Niños</label>
        			    <select class="form-control" name="ninos" id="exampleFormControlSelect1">
        			      <option>0</option>
        			      <option>1</option>
        			      <option>2</option>
        			      <option>3</option>
        			      <option>4</option>
        			      <option>5</option>
        			      <option>6</option>
        			      <option>7</option>
        			      <option>8</option>
        			      <option>9</option>
        			      <option>10</option>
        			      <option>Más de 10</option>
        			    </select>
        			  </div>
              </div>
		        			
              <div class="form-group">
                <textarea name="message"  cols="30" rows="7" class="form-control" placeholder="Message"></textarea>
              </div>
              <div class="form-group">
                    <div class="col-md-6">
                        {!! NoCaptcha::display() !!}
                    </div>
                </div>
              <div class="form-group">
                <input type="submit" value="Enviar" class="btn btn-primary py-3 px-5">
              </div>
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
            </form>

            
          </div>

          <div class="col-md-6 align-items-stretch d-flex">
        		<div  class="bg-white border"><iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d1951.992673831285!2d-77.045549!3d-11.906108!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x2d0e1fbf00bf15f2!2sAcuario%20Nautilus!5e0!3m2!1ses!2sus!4v1603970814425!5m2!1ses!2sus" width="600" height="100%" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe></div>
          </div>
        </div>
      </div>
    </section>
@endsection