@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <img src="{{ asset('storage/'.$user->photo ) }}" alt="Photo Profile" class="rounded mx-auto d-block mb-3" style="width:200px">   
                    <h3 class="text-center">{{ $user->name }}</h3>                 
                    <h4 class="text-center">{{ $user->email }}</h4>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
