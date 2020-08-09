@extends('layouts.app') 
@section('content')
<div class="main-access">
                <div class="access-text --blue">{{ __('Recordatorio') }}</div>

                    {{ __('Recuerde que utilizamos Cookies') }} 
                    <br><br>

                    <div class="access-btn">
                        <a href="{{ url('/Trailers') }}" class="btn btn-log">Admin</a>
                        <a href="{{url('Trailers/users')}}" class="btn btn-log">User</a>
                    </div>
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif


                </div>
            </div>
        </div>
    </div>
</div>
@endsection
