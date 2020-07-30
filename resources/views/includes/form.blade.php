    <!--? Services Ara Start -->
    <div class="services-area section-padding3" id="contactenos" style="background:#ffffff">
        <div class="container">
            <div class="row">
                    <div class="col-12">
                        <h2 class="contact-title">Cuéntanos Tu caso</h2>
                    </div>
                    <div class="col-lg-8">
                        <form class="form-contact contact_form" action="{{ url('sendemail/send') }}#main_contact_form" method="post" id="main_contact_form" novalidate="novalidate">
                        {{ csrf_field() }}
                            <div class="row">
                                <div class="col-12">
                                    <div class="form-group">
                                        <textarea class="form-control w-100" name="message" id="message" cols="30" rows="9"  placeholder="Mensaje"></textarea>
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <input class="form-control valid" name="name" id="name" type="text" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter your name'" placeholder="Ingrese su nombre">
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <input class="form-control valid" name="email" id="email" type="email" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter email address'" placeholder="Email">
                                    </div>
                                </div>
                                <div class="col-6">
                                    <div class="form-group">
                                        <input class="form-control" name="telephone" id="telephone" type="text" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter Subject'" placeholder="Ingrese su Teléfono">
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                            <div class="col-md-6">
                                                {!! NoCaptcha::display() !!}
                                            </div>
                                        </div>
                            <div class="form-group mt-3">
                                <button type="submit" class="button button-contactForm boxed-btn">Enviar</button>
                            </div>
                        </form>
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
                    <div class="col-lg-3 offset-lg-1">
                        <div class="media contact-info">
                            <span class="contact-info__icon"><i class="ti-home"></i></span>
                            <div class="media-body">
                                <h3>Calle Porta 170 Oficina 409</h3>
                                <p>Miraflores – Lima - Lima</p>
                            </div>
                        </div>
                        <div class="media contact-info">
                            <span class="contact-info__icon"><i class="ti-home"></i></span>
                            <div class="media-body">
                                <h3>Av. Abancay N° 210 Auditorio 701</h3>
                                <p>Lima – Lima - Lima</p>
                            </div>
                        </div>
                        <div class="media contact-info">
                            <span class="contact-info__icon"><i class="ti-tablet"></i></span>
                            <div class="media-body">
                                <h3>5417506</h3>
                                <h3>948428132</h3>
                                <p>Lun a Vier 9am a 6pm</p>
                            </div>
                        </div>

                        <div class="media contact-info">
                            <span class="contact-info__icon"><i class="ti-email"></i></span>
                            <div class="media-body">
                                <h3>consultas@problemas-con-sunat.com</h3>
                                <p>Será un placer atenderlo!</p>
                            </div>
                        </div>
                    </div>
                </div>
        </div>
    </div>
    <!-- Services Ara End -->