@extends('layouts.frontend.index.index')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header"><i class="fa fa-users"></i> Users <span id="test"></span></div>
                    <div class="card-body">
                        @foreach($users as $user)
                            <p>This is user {{ $user->id }} {{ $user->email }}</p>
                        @endforeach
                        <button class="btn peach-gradient">Peach</button>
                        <button type="button" class="btn btn-primary btn-rounded">Primary</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection