

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Thank you') }}</div>

                <div class="card-body">
                    Thank you for registring please verify your email. <a href="{{ env('APP_URL').'/verify-email/'.$pass_code.'/'.$id }}">Verify Email</a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
