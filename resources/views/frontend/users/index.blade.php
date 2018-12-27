@extends('layouts.frontend.index.index')
@push('styles')
    <link href="{{ asset('assets/js/vendor/css/datatable.css') }}" rel="stylesheet">
@endpush
@section('content')
    <div class="container">
        <section class="mt-5 wow fadeIn">
            <div class="card">
                <div class="card-body">
                    {!! $html->table() !!}
                </div>
            </div>
        </section>
    </div>
@endsection
@push('scripts')
    {!! $html->scripts() !!}
@endpush