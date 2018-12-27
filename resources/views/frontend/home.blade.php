@extends('layouts.frontend.index.index')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Dashboard <span id="test"></span></div>
                    <div class="card-body">
                        @if (session('status'))
                            <div class="alert alert-success" role="alert">
                                {{ session('status') }}
                            </div>
                        @endif You are logged in!

                        @foreach($users as $user)
                            <p>This is user {{ $user->id }} {{ $user->email }}</p>
                        @endforeach

                        <i class="fa fa-users"></i>
                        <button class="btn peach-gradient">Peach</button>
                        <button type="button" class="btn btn-primary btn-rounded">Primary</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
@push('scripts')
    <script>
        $(function () {
            console.log('home.blade.script loadet');
        });
    </script>
@endpush