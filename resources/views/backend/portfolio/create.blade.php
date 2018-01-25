@extends ('backend.layouts.app')

@section ('title', "Управление портфолио" . ' | ' . "Создать портфолио")
@push('after-styles')
        <link href="/libs/bootstrap-colorpicker-master/dist/css/bootstrap-colorpicker.css" rel="stylesheet">
    <style>
        .mce-fullscreen header {
            display: none;
        }
    </style>
@endpush
@section('content')
    {{ html()->form('POST', route('admin.portfolios.store'))->class('form-horizontal')->acceptsFiles()->attributes(['novalidate'])->open() }}
    <div class="card">
        <div class="card-body">
            <div class="row">
                <div class="col-sm-5">
                    <h4 class="card-title mb-0">
                        Управление портфолио
                        <small class="text-muted">Создать портфолио</small>
                    </h4>
                </div><!--col-->
            </div><!--row-->

            <hr/>

            @include('backend.portfolio._form')

            @include('backend.portfolio._form_blocks')

        </div>
        <div class="card-footer">
            <div class="row">
                <div class="col">
                    {{ form_cancel(route('admin.portfolios.index'), __('buttons.general.cancel')) }}
                </div><!--col-->

                <div class="col text-right">
                    {{ form_submit(__('buttons.general.crud.create')) }}
                </div><!--col-->
            </div><!--row-->
        </div><!--card-footer-->
    </div><!--card-->
    {{ html()->form()->close() }}

@endsection
