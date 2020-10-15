         <div class="col-md-4 pl-md-5 sidebar ftco-animate">
            <div class="sidebar-box">
              <form action="#" class="search-form">
                <div class="form-group">
                  <img src="{{asset('assets/images/LOGO ACUARIO3.png')}}">
                  <hr>
                </div>
              </form>
            </div>
            @include('includes.categories')

            <div class="sidebar-box ftco-animate">
              <h3>Filtro por Etiqueta</h3>
              <div class="tagcloud">
                @foreach($plans as $plan)
                <a href="{{route('tag', $plan->slug)}}#acuario-nautilos" class="tag-cloud-link">{{$plan->name}}</a>
                @endforeach
                
              </div>
            </div>
          </div>
