<div id="popup" class="foo animate__animated animate__fadeInLeftBig">
		<div class="text-center" style="margin-top:10%" class="pt-5">
	    	<h2 >Antes de Suscribirte<br> Contanos:<br> Cómo Supiste de La Revista El Sendero</h1>
	    	<form id="encuesta" action="{{route('store.encuesta')}}">
	    		<div class="form-group">
					<h3>Responder:</h3>

					<ul>
						<li><input class="inputradio" type="radio" name="encuesta" value="radio" onClick="AgregarClase()">
						<strong>Por la radio</strong></li>


						<li>
						<input class="inputradio" type="radio" name="encuesta" value="Televisión" onClick="AgregarClase()"> <strong>Por Televisión</strong>
						</li>

						<li>
						<input class="inputradio" type="radio" name="encuesta" value="Google" onClick="AgregarClase()"> <strong>Por Google</strong>
						</li>

						<li>
						<input class="inputradio" type="radio" name="encuesta" value="Facebook" onClick="AgregarClase()"> <strong>Por Facebook</strong>
						</li>

					    <li>
						<input class="inputradio" type="radio" name="encuesta" value="otros" onClick="AgregarClase()"> <strong>Otros</strong>
						</li>
					</ul>
					<div class="form-group">
						<!-- <button onclick="removeClase()" class="btn btn-sm btn-primary">No Gracias</button> -->
						<button id="dis" class="btn btn-lg btn-success">Completar Suscripción</button>
					</div>
				</div>
	    	</form>
	    </div>
	 </div>