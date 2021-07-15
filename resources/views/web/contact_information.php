@extends('layouts.layout_el_sendero')
@section('content')
<div class="col-md-8">
			<div class="section-row">
				<div class="section-title">
					<h2 class="title">Contact Information</h2>
				</div>
				<p>Malis debet quo et, eam an lorem quaestio. Mea ex quod facer decore, eu nam mazim postea. Eu deleniti pertinacia ius. Ad elitr latine eam, ius sanctus eleifend no, cu primis graecis comprehensam eum. Ne vim prompta consectetuer, etiam signiferumque ea eum.</p>
				<ul class="contact">
					<li><i class="fa fa-phone"></i> 202-555-0194</li>
					<li><i class="fa fa-envelope"></i> <a href="#">callie@email.com</a></li>
					<li><i class="fa fa-map-marker"></i> 123 6th St.Melbourne, FL 32904</li>
				</ul>
			</div>

			<div class="section-row">
				<div class="section-title">
					<h2 class="title">Mail us</h2>
				</div>
				<form>
					<div class="row">
						<div class="col-md-12">
							<div class="form-group">
								<input class="input" type="email" name="email" placeholder="Email">
							</div>
						</div>
						<div class="col-md-12">
							<div class="form-group">
								<input class="input" type="text" name="subject" placeholder="Subject">
							</div>
						</div>
						<div class="col-md-12">
							<div class="form-group">
								<textarea class="input" name="message" placeholder="Message"></textarea>
							</div>
							<button class="primary-button">Submit</button>
						</div>
					</div>
				</form>
			</div>
		</div>

@endsection
