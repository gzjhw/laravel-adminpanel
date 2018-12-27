@extends('layouts.frontend.index.index')

@push('styles')
    <link href="{{ asset('assets/css/datatable.css') }}" rel="stylesheet">
@endpush
@section('content')
    <div class="container">
        <div class="card">
            <div class="card-body">
                {!! $html->table() !!}
            </div>
        </div>
    </div>
@endsection
@push('scripts')
    <script src="{{ asset('assets/js/datatable.js') }}"></script>
    {!! $html->scripts() !!}
@endpush