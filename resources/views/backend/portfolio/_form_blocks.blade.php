<div id="blocks-management">
    <div class="row mt-4">
        <h4 class="card-title col-mb-12">
            Управление блоками
        </h4>

        <div class="col-md-11">
            <select id="block_selector" class="form-control">
                <option value="defaultBlock">Стандарный</option>
                <option value="imageBlock">Full screen image</option>
                <option value="twoImageBlock">Two image</option>
                <option value="pdfBlock">PDF</option>
            </select>
        </div><!--col-->
        <div class="col-md-1">
            <div class="btn-toolbar float-right" role="toolbar" aria-label="Toolbar with button groups">
                <a id="add_block_button" href="#" class="btn btn-success ml-1" data-toggle="tooltip"
                   title="Новый блок"><i class="fa fa-plus-circle"></i></a>
            </div>
        </div>
    </div>
    @php( $count = 0 )

    @if(isset($portfolioBlocks))
        @foreach($portfolioBlocks as $block)
            @switch($block['type'])
                @case('image')
                <div class="block-container">
                    <h6>imageBlock</h6>
                    <div class="row mt-4">
                        <input type="hidden" name="blocks[{{$count}}][id]" value="{{ $block['id'] }}">

                        <input type="hidden" name="blocks[{{$count}}][type]" value="image">
                        <div class="col">
                            <div class="form-group row">
                                <label class="col-md-2 form-control-label"
                                       for="blocks[{{$count}}][content]">Контент</label>
                                <div class="col-md-10">
                                                <textarea name="blocks[{{$count}}][content]"
                                                          class="form-control blockTextBox">{!! $block['content'] !!}</textarea>
                                </div><!--col-->
                            </div><!--form-group-->
                            <div class="form-group row">
                                <label class="col-md-2 form-control-label" for="blocks[{{$count}}][order]">Порядок</label>
                                <div class="col-md-10">
                                    <input type="number" name="blocks[{{$count}}][order]"
                                           value="{{ $block['order'] }}" class="form-control">
                                </div><!--col-->
                            </div><!--form-group-->
                        </div>
                    </div>
                    <hr><a href="'.route('admin.portfolios.destroy', $this).'"
                           data-method="delete"
                           data-trans-button-cancel="'.__('buttons.general.cancel').'"
                           data-trans-button-confirm="'.__('buttons.general.crud.delete').'"
                           data-trans-title="'.__('strings.backend.general.are_you_sure').'"
                           class="btn btn-danger"><i class="fa fa-trash" data-toggle="tooltip" data-placement="top" title="'.__('buttons.general.crud.delete').'"></i></a>
                </div>
                @php($count++)
                @break

                @case('two_image')
                <div class="block-container">
                    <h6>twoImageBlock</h6>
                    <div class="row mt-4">
                        <input type="hidden" name="blocks[{{$count}}][id]" value="{{ $block['id'] }}">

                        <input type="hidden" name="blocks[{{$count}}][type]" value="two_image">
                        <div class="col">
                            <div class="form-group row">
                                <label class="col-md-2 form-control-label"
                                       for="blocks[{{$count}}][content]">Контент</label>
                                <div class="col-md-10">
                                                <textarea name="blocks[{{$count}}][content]"
                                                          class="form-control blockTextBox">{!! $block['content'] !!}</textarea>
                                </div><!--col-->
                            </div><!--form-group-->
                            <div class="form-group row">
                                <label class="col-md-2 form-control-label" for="blocks[{{$count}}][order]">Порядок</label>
                                <div class="col-md-10">
                                    <input type="number" name="blocks[{{$count}}][order]"
                                           value="{{ $block['order'] }}" class="form-control">
                                </div><!--col-->
                            </div><!--form-group-->
                        </div>
                    </div>
                    <hr>
                </div>
                @php($count++)
                @break

                @case('pdf')
                <div class="block-container">
                    <h6>pdfBlock</h6>
                    <div class="row mt-4">
                        <input type="hidden" name="blocks[{{$count}}][id]" value="{{ $block['id'] }}">

                        <input type="hidden" name="blocks[{{$count}}][type]" value="pdf">
                        <div class="col">
                            <div class="form-group row">
                                <label class="col-md-2 form-control-label"
                                       for="blocks[{{$count}}][content]">Контент</label>
                                <div class="col-md-10">
                                    <input type="text" name="blocks[{{$count}}][content]"
                                           class="form-control" value="{{ $block['content'] }}">
                                </div><!--col-->
                            </div><!--form-group-->
                            <div class="form-group row">
                                <label class="col-md-2 form-control-label" for="blocks[{{$count}}][order]">Порядок</label>
                                <div class="col-md-10">
                                    <input type="number" name="blocks[{{$count}}][order]"
                                           value="{{ $block['order'] }}" class="form-control">
                                </div><!--col-->
                            </div><!--form-group-->
                        </div>
                    </div>
                    <hr>
                </div>
                @php($count++)
                @break

                @default
                <div class="block-container">
                    <h6>defaultBlock</h6>
                    <div class="row mt-4">
                        <input type="hidden" name="blocks[{{$count}}][id]" value="{{ $block['id'] }}">

                        <input type="hidden" name="blocks[{{$count}}][type]" value="default">
                        <div class="col">
                            <div class="form-group row">
                                <label class="col-md-2 form-control-label"
                                       for="blocks[{{$count}}][content]">Контент</label>
                                <div class="col-md-10">
                                                <textarea name="blocks[{{$count}}][content]"
                                                          class="form-control blockTextBox">{!! $block['content'] !!}</textarea>
                                </div><!--col-->
                            </div><!--form-group-->
                            <div class="form-group row">
                                <label class="col-md-2 form-control-label" for="blocks[{{$count}}][order]">Порядок</label>
                                <div class="col-md-10">
                                    <input type="number" name="blocks[{{$count}}][order]"
                                           value="{{ $block['order'] }}" class="form-control">
                                </div><!--col-->
                            </div><!--form-group-->
                        </div>
                    </div>
                    <hr>
                </div>
                @php($count++)
                @break
            @endswitch
        @endforeach

    {{--@else--}}
        {{--<div class="block-container">--}}
            {{--<h6>defaultBlock</h6>--}}
            {{--<div class="row mt-4">--}}
                {{--{{ html()->hidden('blocks['.$count.'][type]')--}}
                {{--->value('default') }}--}}
                {{--<div class="col">--}}
                    {{--<div class="form-group row">--}}
                        {{--{{ html()->label("bg_color")--}}
                            {{--->class('col-md-2 form-control-label')--}}
                            {{--->for('blocks['.$count.']bg_color') }}--}}

                        {{--<div class="col-md-10">--}}
                            {{--{{ html()->text('blocks['.$count.'][bg_color]')--}}
                                {{--->class('form-control') }}--}}
                        {{--</div><!--col-->--}}
                    {{--</div><!--form-group-->--}}

                    {{--<div class="form-group row">--}}
                        {{--{{ html()->label("color")--}}
                            {{--->class('col-md-2 form-control-label')--}}
                            {{--->for('blocks['.$count.']color') }}--}}

                        {{--<div class="col-md-10">--}}
                            {{--{{ html()->text('blocks['.$count.'][color]')--}}
                                {{--->class('form-control') }}--}}
                        {{--</div><!--col-->--}}
                    {{--</div><!--form-group-->--}}

                    {{--<div class="form-group row">--}}
                        {{--{{ html()->label("text_align")--}}
                            {{--->class('col-md-2 form-control-label')--}}
                            {{--->for('blocks['.$count.']text_align') }}--}}

                        {{--<div class="col-md-10">--}}
                            {{--{{ html()->text('blocks['.$count.'][text_align]')--}}
                                {{--->class('form-control') }}--}}
                        {{--</div><!--col-->--}}
                    {{--</div><!--form-group-->--}}

                    {{--<div class="form-group row">--}}
                        {{--{{ html()->label("Контент")--}}
                            {{--->class('col-md-2 form-control-label')--}}
                            {{--->for('blocks['.$count.']content') }}--}}

                        {{--<div class="col-md-10">--}}
                            {{--{{ html()->textarea('blocks['.$count.'][content]')--}}
                                {{--->class('form-control blockTextBox')--}}
                                {{--->required() }}--}}
                        {{--</div><!--col-->--}}
                    {{--</div><!--form-group-->--}}

                    {{--<div class="form-group row">--}}
                        {{--{{ html()->label("order")--}}
                            {{--->class('col-md-2 form-control-label')--}}
                            {{--->for('blocks['.$count.']order') }}--}}

                        {{--<div class="col-md-10">--}}
                            {{--<input id="blocks[{{$count}}]order" type="number" name='blocks[{{$count}}]order'--}}
                                   {{--class="form-control">--}}
                        {{--</div><!--col-->--}}
                    {{--</div><!--form-group-->--}}
                {{--</div>--}}
            {{--</div>--}}
            {{--<hr>--}}
        {{--</div>--}}

    @endif
</div>