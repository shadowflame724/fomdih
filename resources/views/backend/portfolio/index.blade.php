@extends ('backend.layouts.app')

@section ('title', "Управление портфолио")

@section('content')
<div class="card">
    <div class="card-body">
        <div class="row">
            <div class="col-sm-5">
                <h4 class="card-title mb-0">
                    Управление портфолио
                </h4>
            </div><!--col-->

            <div class="col-sm-7 pull-right">
                @include('backend.portfolio.includes.header-buttons')
            </div><!--col-->
        </div><!--row-->

        <div class="row mt-4">
            <div class="col">
                <div class="table-responsive">
                    <table class="table">
                        <thead>
                        <tr>
                            <th>Категория</th>
                            <th>Название</th>
                            <th>Компания</th>
                            <th>Порядок</th>
                            <th>{{ __('labels.general.actions') }}</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach ($portfolios as $portfolio)
                            <tr>
                                <td>{{ $portfolio->category->name }}</td>
                                <td>{!! ucfirst($portfolio->name) !!}</td>
                                <td>{!! ucfirst($portfolio->company_name) !!}</td>
                                <td>{{ $portfolio->order }}</td>
                                <td>{!! $portfolio->action_buttons !!}</td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>
            </div><!--col-->
        </div><!--row-->
        <div class="row">
            <div class="col-7">
                <div class="float-left">
{{--                    {!! $roles->total() !!} {{ trans_choice('labels.backend.access.roles.table.total', $roles->total()) }}--}}
                </div>
            </div><!--col-->

            <div class="col-5">
                <div class="float-right">
{{--                    {!! $roles->render() !!}--}}
                </div>
            </div><!--col-->
        </div><!--row-->
    </div><!--card-body-->
</div><!--card-->
@endsection
