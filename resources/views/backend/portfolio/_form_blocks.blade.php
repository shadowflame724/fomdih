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
                    <a href="#" style="margin-left: 95%" class="btn btn-danger remove-block" data-id="{{ $block['id'] }}"><i class="fa fa-trash" data-toggle="tooltip" data-placement="top" title="{{__('buttons.general.crud.delete')}}"></i></a>
                    <hr>
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
                    <a href="#" style="margin-left: 95%" class="btn btn-danger remove-block" data-id="{{ $block['id'] }}"><i class="fa fa-trash" data-toggle="tooltip" data-placement="top" title="{{__('buttons.general.crud.delete')}}"></i></a>
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
                    <a href="#" style="margin-left: 95%" class="btn btn-danger remove-block" data-id="{{ $block['id'] }}"><i class="fa fa-trash" data-toggle="tooltip" data-placement="top" title="{{__('buttons.general.crud.delete')}}"></i></a>
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
                                                       <label class="col-md-2 form-control-label" for="blocks[{{$count}}][bg_color]">bg_color</label>
                                                      <div class="col-md-10">
                                                              <input type="text" id="blocks[{{$count}}][bg_color]" name="blocks[{{$count}}][bg_color]" value="{{ $block['bg_color'] }}" class="form-control color-picker">
                                                          </div><!--col-->
                                                  </div><!--form-group-->
                            <div class="form-group row">
                                                      <label class="col-md-2 form-control-label" for="blocks[{{$count}}][color]">color</label>
                                                      <div class="col-md-10">
                                                              <input type="text" id="blocks[{{$count}}][color]" name="blocks[{{$count}}][color]" value="{{ $block['color'] }}" class="form-control color-picker">
                                                          </div><!--col-->
                                                  </div><!--form-group-->
                            <div class="form-group row">
                                                      <label class="col-md-2 form-control-label" for="blocks[{{$count}}][text_align]">text_align</label>
                                                      <div class="col-md-10">
                                                          <select name="blocks[{{$count}}][text_align]" class="form-control">
                                                              <option {{ $block['text_align'] == "left" ? 'selected' : '' }} value="left">left</option>
                                                              <option {{ $block['text_align'] == "center" ? 'selected' : '' }}  value="center">center</option>
                                                              <option {{ $block['text_align'] == "right" ? 'selected' : '' }}  value="right">right</option>
                                                          </select>
                                                          </div><!--col-->
                                                  </div><!--form-group-->
                            
                            
                            
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
                    <a href="#" style="margin-left: 95%" class="btn btn-danger remove-block" data-id="{{ $block['id'] }}"><i class="fa fa-trash" data-toggle="tooltip" data-placement="top" title="{{__('buttons.general.crud.delete')}}"></i></a>
                    <hr>
                </div>
                @php($count++)
                @break
            @endswitch
        @endforeach
    @endif
</div>