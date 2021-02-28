@extends('layouts.paraFormularioClientes')
@section('content')
    <div class="site-section">
      <div class="container">
        <div class="row">
          <div class="col-md-5 pr-md-5 mr-auto">
            <h2 class="line-bottom">Cuéntenos Su Experiencia</h2>
            <p>Lo principal para nosotros es que nuestros clientes estén satisfechos con nuestros trabajo. <strong>Su comentario es muy importante para nosotros.</strong></p>
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
          </div>
          <div class="col-md-6">
            <div class="quick-contact-form bg-white" id="main_contact_form">
                <h2>Ayúdenos a Seguir Mejorando</h2>

                <form action="{{ route('create.message') }}#main_contact_form" method="POST">
                  {{ csrf_field() }}

                  <div class="form-group">
                    <input name="name" type="text" class="form-control" placeholder="Nombre">
                  </div>

<div class="form-group">
<select class="form-control" name="city">
<option>Ciudad</option>
<option value="CABA">CABA</option>
<option value="Adolfo Alsina">Adolfo Alsina</option>
<option value="Adolfo Gonzales Chaves">Adolfo Gonzales Chaves</option>
<option value="Alberti">Alberti</option>
<option value="Almirante Brown">Almirante Brown</option>
<option value="Arrecifes">Arrecifes</option>
<option value="Avellaneda">Avellaneda</option>
<option value="Ayacucho">Ayacucho</option>
<option value="Azul">Azul</option>
<option value="Bahía Blanca">Bahía Blanca</option>
<option value="Balcarce">Balcarce</option>
<option value="Baradero">Baradero</option>
<option value="Benito Juárez">Benito Juárez</option>
<option value="Berazategui">Berazategui</option>
<option value="Berisso">Berisso</option>
<option value="Bolívar">Bolívar</option>
<option value="Bragado">Bragado</option>
<option value="Brandsen">Brandsen</option>
<option value="Campana">Campana</option>
<option value="Cañuelas">Cañuelas</option>
<option value="Capitán Sarmiento">Capitán Sarmiento</option>
<option value="Carlos Casares">Carlos Casares</option>
<option value="Carlos Tejedor">Carlos Tejedor</option>
<option value="Carmen de Areco">Carmen de Areco</option>
<option value="Castelli">Castelli</option>
<option value="Chacabuco">Chacabuco</option>
<option value="Chascomús">Chascomús</option>
<option value="Chivilcoy">Chivilcoy</option>
<option value="Colón">Colón</option>
<option value="Coronel Dorrego">Coronel Dorrego</option>
<option value="Coronel de Marina Leonardo Rosales">Coronel de Marina Leonardo Rosales</option>
<option value="Coronel Pringles">Coronel Pringles</option>
<option value="Coronel Suárez">Coronel Suárez</option>
<option value="Daireaux">Daireaux</option>
<option value="Dolores">Dolores</option>
<option value="Ensenada">Ensenada</option>
<option value="Escobar">Escobar</option>
<option value="Esteban Echeverría">Esteban Echeverría</option>
<option value="Exaltación de la Cruz">Exaltación de la Cruz</option>
<option value="Ezeiza">Ezeiza</option>
<option value="Florencio Varela">Florencio Varela</option>
<option value="Florentino Ameghino">Florentino Ameghino</option>
<option value="General Alvarado">General Alvarado</option>
<option value="General Alvear">General Alvear</option>
<option value="General Arenales">General Arenales</option>
<option value="General Belgrano">General Belgrano</option>
<option value="General Guido">General Guido</option>
<option value="General La Madrid">General La Madrid</option>
<option value="General Las Heras">General Las Heras</option>
<option value="General Lavalle">General Lavalle</option>
<option value="General Juan Madariaga">General Juan Madariaga</option>
<option value="General Paz">General Paz</option>
<option value="General Pinto">General Pinto</option>
<option value="General Pueyrredón">General Pueyrredón</option>
<option value="General Rodríguez">General Rodríguez</option>
<option value="General San Martín">General San Martín</option>
<option value="General Viamonte">General Viamonte</option>
<option value="General Villegas">General Villegas</option>
<option value="Guaminí">Guaminí</option>
<option value="Hipólito Yrigoyen">Hipólito Yrigoyen</option>
<option value="Hurlingham">Hurlingham</option>
<option value="Ituzaingó">Ituzaingó</option>
<option value="José C. Paz">José C. Paz</option>
<option value="Junín">Junín</option>
<option value="La Costa">La Costa</option>
<option value="La Matanza">La Matanza</option>
<option value="La Plata">La Plata</option>
<option value="Lanús">Lanús</option>
<option value="Laprida">Laprida</option>
<option value="Las Flores">Las Flores</option>
<option value="Leandro N. Alem">Leandro N. Alem</option>
<option value="Lezama">Lezama</option>
<option value="Lincoln">Lincoln</option>
<option value="Lobería">Lobería</option>
<option value="Lobos">Lobos</option>
<option value="Lomas de Zamora">Lomas de Zamora</option>
<option value="Luján">Luján</option>
<option value="Magdalena">Magdalena</option>
<option value="Maipú">Maipú</option>
<option value="Malvinas Argentinas">Malvinas Argentinas</option>
<option value="Mar Chiquita">Mar Chiquita</option>
<option value="Marcos Paz">Marcos Paz</option>
<option value="Mercedes">Mercedes</option>
<option value="Merlo">Merlo</option>
<option value="Monte">Monte</option>
<option value="Monte Hermoso">Monte Hermoso</option>
<option value="Moreno">Moreno</option>
<option value="Morón">Morón</option>
<option value="Navarro">Navarro</option>
<option value="Necochea">Necochea</option>
<option value="Nueve de Julio">Nueve de Julio</option>
<option value="Olavarría">Olavarría</option>
<option value="Patagones">Patagones</option>
<option value="Pehuajó">Pehuajó</option>
<option value="Pellegrini">Pellegrini</option>
<option value="Pergamino">Pergamino</option>
<option value="Pila">Pila</option>
<option value="Pilar">Pilar</option>
<option value="Pinamar">Pinamar</option>
<option value="Presidente Perón">Presidente Perón</option>
<option value="Puan">Puan</option>
<option value="Punta Indio">Punta Indio</option>
<option value="Quilmes">Quilmes</option>
<option value="Ramallo">Ramallo</option>
<option value="Rauch">Rauch</option>
<option value="Rivadavia">Rivadavia</option>
<option value="Rojas">Rojas</option>
<option value="Roque Pérez">Roque Pérez</option>
<option value="Saavedra">Saavedra</option>
<option value="Saladillo">Saladillo</option>
<option value="Salliqueló">Salliqueló</option>
<option value="Salto">Salto</option>
<option value="San Andrés de Giles">San Andrés de Giles</option>
<option value="San Antonio de Areco">San Antonio de Areco</option>
<option value="San Cayetano">San Cayetano</option>
<option value="San Fernando">San Fernando</option>
<option value="San Isidro">San Isidro</option>
<option value="San Miguel">San Miguel</option>
<option value="San Nicolás">San Nicolás</option>
<option value="San Pedro">San Pedro</option>
<option value="San Vicente">San Vicente</option>
<option value="Suipacha">Suipacha</option>
<option value="Tandil">Tandil</option>
<option value="Tapalqué">Tapalqué</option>
<option value="Tigre">Tigre</option>
<option value="Tordillo">Tordillo</option>
<option value="Tornquist">Tornquist</option>
<option value="Trenque Lauquen">Trenque Lauquen</option>
<option value="Tres Arroyos">Tres Arroyos</option>
<option value="Tres de Febrero">Tres de Febrero</option>
<option value="Tres Lomas">Tres Lomas</option>
<option value="Veinticinco de Mayo">Veinticinco de Mayo</option>
<option value="Vicente López">Vicente López</option>
<option value="Villa Gesell">Villa Gesell</option>
<option value="Villarino">Villarino</option>
<option value="Zárate">Zárate</option>
</select>
</div>

                  <div class="form-group">
                    <input  name="email"  type="email" class="form-control" placeholder="Email">
                  </div>


                  <div class="form-group">
                    <input  name="telephone"  type="telephone" class="form-control" placeholder="Teléfono">
                  </div>

                  <div class="form-group">
                    <h5>Cumpleaños</h5>
                    <div class="row">
                      <div class="col-md-4">
                        <select class="form-control" name="birthday">
                          <option>Día</option>
                          <option value="1">1</option>
                          <option value="2">2</option>
                          <option value="3">3</option>
                          <option value="4">4</option>
                          <option value="5">5</option>
                          <option value="6">6</option>
                          <option value="7">7</option>
                          <option value="8">8</option>
                          <option value="9">9</option>
                          <option value="10">10</option>
                          <option value="11">11</option>
                          <option value="12">12</option>
                          <option value="13">13</option>
                          <option value="14">14</option>
                          <option value="15">15</option>
                          <option value="16">16</option>
                          <option value="17">17</option>
                          <option value="18">18</option>
                          <option value="19">19</option>
                          <option value="20">20</option>
                          <option value="21">21</option>
                          <option value="22">22</option>
                          <option value="23">23</option>
                          <option value="24">24</option>
                          <option value="25">25</option>
                          <option value="26">26</option>
                          <option value="27">27</option>
                          <option value="28">28</option>
                          <option value="29">29</option>
                          <option value="30">30</option>
                          <option value="31">31</option>
                        </select>
                      </div>
                      <div class="col-md-4">
                        <select class="form-control" name="birthmonth">
                          <option>Mes</option>
                          <option value="January">Enero</option>
                          <option value="Febuary">Febrero</option>
                          <option value="March">Marzo</option>
                          <option value="April">Abril</option>
                          <option value="May">Mayo</option>
                          <option value="June">Junio</option>
                          <option value="July">Julio</option>
                          <option value="August">Agosto</option>
                          <option value="September">Septiembre</option>
                          <option value="October">Octubre</option>
                          <option value="November">Noviembre</option>
                          <option value="December">Diciembre</option>
                          </select>
                      </div>
                    </div>
                  </div> 

                  <div class="form-group">
                    <textarea name="message" class="form-control" id="" cols="30" rows="5" placeholder="Cuéntenos su Experiencia"></textarea>
                  </div>

                  <div class="form-group">
                    <div class="col-md-6" id="gwd-reCAPTCHA_2">
                        {!! NoCaptcha::display() !!}
                    </div>
                  </div>

                  <div class="form-group">
                    <input type="submit" value="Enviar Mensaje" class="btn btn-primary px-5">
                  </div>
                
                </form>
              </div>
          </div>
        </div>
      </div>
    </div>

@endsection

@section('scripts')
<script src="{{ asset('assets/ckeditor/ckeditor.js') }}"></script>
<script>
  $(document).ready(function(){
    
    CKEDITOR.config.height = 200;
    CKEDITOR.config.width  = 'auto';

    CKEDITOR.replace('message');
  });
</script>
@endsection