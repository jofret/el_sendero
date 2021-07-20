<div class="section-title">
    <h2 class="title">Comentá</h2>
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