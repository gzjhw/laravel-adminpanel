@extends('layouts.backend.index.index')
@section('content')
    <section class="mb-5">


        <!--Card-->
        <div class="card card-cascade narrower">

            <!--Card header-->
            <div class="view view-cascade py-3 gradient-card-header info-color-dark mx-4 d-flex justify-content-between align-items-center">

                <div>
                    <button type="button" class="btn btn-outline-white btn-rounded btn-sm px-2">
                        <i class="fa fa-fw fa-th-large mt-0"></i>
                    </button>
                    <button type="button" class="btn btn-outline-white btn-rounded btn-sm px-2">
                        <i class="fa fa-fw fa-columns mt-0"></i>
                    </button>
                </div>

                <a href="" class="white-text mx-3">Users</a>

                <div>
                    <button type="button" class="btn btn-outline-white btn-rounded btn-sm px-2">
                        <i class="fa fa-pen fa-fw mt-0"></i>
                    </button>
                    <button type="button" class="btn btn-outline-white btn-rounded btn-sm px-2" data-toggle="modal"
                            data-target="#modalConfirmDelete">
                        <i class="fa fa-fw fa-times mt-0"></i>
                    </button>
                    <button type="button" class="btn btn-outline-white btn-rounded btn-sm px-2">
                        <i class="fa fa-fw fa-info-circle mt-0"></i>
                    </button>
                </div>

            </div>
            <!--/Card header-->

            <!--Card content-->
            <div class="card-body">

                {!! $html->table() !!}

            </div>
            <!--/.Card content-->

        </div>
        <!--/.Card-->

    </section>
@endsection
@push('scripts')
    {!! $html->scripts() !!}
@endpush