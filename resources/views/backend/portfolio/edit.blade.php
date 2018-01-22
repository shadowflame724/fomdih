@extends ('backend.layouts.app')

@section ('title', "Управление портфолио" . ' | ' . "Редактировать портфолио")

@section('content')
    {{ html()->modelForm($portfolio, 'PATCH', route('admin.portfolios.update', $portfolio))->class('form-horizontal')->acceptsFiles()
    ->open() }}
    <div class="card">
        <div class="card-body">
            <div class="row">
                <div class="col-sm-5">
                    <h4 class="card-title mb-0">
                        Управление портфолио
                        <small class="text-muted">Редактировать портфолио</small>
                    </h4>
                </div><!--col-->
            </div><!--row-->
            <!--row-->

            <hr/>

            @include('backend.portfolio._form')

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

                @if($portfolioBlocks)
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
                        @endswitch
                    @endforeach

                @else
                    <div class="block-container">
                        <h6>defaultBlock</h6>
                        <div class="row mt-4">
                            {{ html()->hidden('blocks['.$count.'][type]')
                            ->value('default') }}
                            <div class="col">
                                <div class="form-group row">
                                    {{ html()->label("bg_color")
                                        ->class('col-md-2 form-control-label')
                                        ->for('blocks['.$count.']bg_color') }}

                                    <div class="col-md-10">
                                        {{ html()->text('blocks['.$count.'][bg_color]')
                                            ->class('form-control') }}
                                    </div><!--col-->
                                </div><!--form-group-->

                                <div class="form-group row">
                                    {{ html()->label("color")
                                        ->class('col-md-2 form-control-label')
                                        ->for('blocks['.$count.']color') }}

                                    <div class="col-md-10">
                                        {{ html()->text('blocks['.$count.'][color]')
                                            ->class('form-control') }}
                                    </div><!--col-->
                                </div><!--form-group-->

                                <div class="form-group row">
                                    {{ html()->label("text_align")
                                        ->class('col-md-2 form-control-label')
                                        ->for('blocks['.$count.']text_align') }}

                                    <div class="col-md-10">
                                        {{ html()->text('blocks['.$count.'][text_align]')
                                            ->class('form-control') }}
                                    </div><!--col-->
                                </div><!--form-group-->

                                <div class="form-group row">
                                    {{ html()->label("Контент")
                                        ->class('col-md-2 form-control-label')
                                        ->for('blocks['.$count.']content') }}

                                    <div class="col-md-10">
                                        {{ html()->textarea('blocks['.$count.'][content]')
                                            ->class('form-control blockTextBox')
                                            ->required() }}
                                    </div><!--col-->
                                </div><!--form-group-->

                                <div class="form-group row">
                                    {{ html()->label("order")
                                        ->class('col-md-2 form-control-label')
                                        ->for('blocks['.$count.']order') }}

                                    <div class="col-md-10">
                                        <input id="blocks[{{$count}}]order" type="number" name='blocks[{{$count}}]order'
                                               class="form-control">
                                    </div><!--col-->
                                </div><!--form-group-->
                            </div>
                        </div>
                        <hr>
                    </div>

                @endif


            </div>

        </div><!--card-body-->

        <div class="card-footer">
            <div class="row">
                <div class="col">
                    {{ form_cancel(route('admin.portfolios.index'), __('buttons.general.cancel')) }}
                </div><!--col-->

                <div class="col text-right">
                    {{ form_submit(__('buttons.general.crud.update')) }}
                </div><!--col-->
            </div><!--row-->
        </div><!--card-footer-->
    </div><!--card-->
    {{ html()->closeModelForm() }}
@endsection

@push('after-scripts')
    <script src="/libs/tinymce/tinymce.js"></script>

    <script>
        var count = '{{ $count }}';

        $("#add_block_button").on('click', function () {
            var selectorValue = $('#block_selector').val();
            var neededBlock;
            ++count;
            var defaultBlock = '<div class="block-container">' +
                '                    <h6>' + selectorValue + '</h6>\n' +
                '<div class="row mt-4">\n' +
                '<input type="hidden" name="blocks\[' + count + '\]\[type\]" value="default">\n' +
                '                <div class="col">\n' +
                '<div class="form-group row">\n' +
                '                        <label class="col-md-2 form-control-label" for="blocks\[' + count + '\]\[bg_color\]">bg_color</label>\n' +
                '                        <div class="col-md-10">\n' +
                '                            <input type="text" id="blocks\[' + count + '\]\[bg_color\]" name="blocks\[' + count + '\]\[bg_color\]" class="form-control">\n' +
                '                        </div><!--col-->\n' +
                '                    </div><!--form-group-->\n' +
                '<div class="form-group row">\n' +
                '                        <label class="col-md-2 form-control-label" for="blocks\[' + count + '\]\[color\]">color</label>\n' +
                '                        <div class="col-md-10">\n' +
                '                            <input type="text" id="blocks\[' + count + '\][color]" name="blocks\[' + count + '\][color]" class="form-control">\n' +
                '                        </div><!--col-->\n' +
                '                    </div><!--form-group-->\n' +
                '<div class="form-group row">\n' +
                '                        <label class="col-md-2 form-control-label" for="blocks\[' + count + '\]\[text_align\]">text_align</label>\n' +
                '                        <div class="col-md-10">\n' +
                '                            <input type="text" id="blocks\[' + count + '\][text_align]" name="blocks\[' + count + '\][text_align]" class="form-control">\n' +
                '                        </div><!--col-->\n' +
                '                    </div><!--form-group-->\n' +
                '                    <div class="form-group row">\n' +
                '                        <label class="col-md-2 form-control-label" for="blocks\[' + count + '\]\[content\]">Контент</label>\n' +
                '                        <div class="col-md-10">\n' +
                '                            <textarea name="blocks\[' + count + '\]\[content\]" class="form-control blockTextBox"></textarea>\n' +
                '                        </div><!--col-->\n' +
                '                    </div><!--form-group-->\n' +
                '                    <div class="form-group row">\n' +
                '                        <label class="col-md-2 form-control-label" for="blocks\[' + count + '\]\[order\]">Порядок</label>\n' +
                '                        <div class="col-md-10">\n' +
                '                            <input  type="number"  name="blocks\[' + count + '\]\[order\]" class="form-control">\n' +
                '                        </div><!--col-->\n' +
                '                    </div><!--form-group-->\n' +
                '                </div>\n' +
                '</div>\n' +
                '<hr>\n' +
                '            </div>';


            var imageBlock = '<div class="block-container">' +
                '                    <h6>' + selectorValue + '</h6>\n' +
                '<div class="row mt-4">\n' +
                '<input type="hidden" name="blocks\[' + count + '\]\[type\]" value="image">\n' +
                '                <div class="col">\n' +
                '                    <div class="form-group row">\n' +
                '                        <label class="col-md-2 form-control-label" for="blocks\[' + count + '\]\[content\]">Контент</label>\n' +
                '                        <div class="col-md-10">\n' +
                '                            <textarea name="blocks\[' + count + '\]\[content\]" class="form-control blockTextBox"></textarea>\n' +
                '                        </div><!--col-->\n' +
                '                    </div><!--form-group-->\n' +
                '                    <div class="form-group row">\n' +
                '                        <label class="col-md-2 form-control-label" for="blocks\[' + count + '\]\[order\]">Порядок</label>\n' +
                '                        <div class="col-md-10">\n' +
                '                            <input  type="number"  name="blocks\[' + count + '\]\[order\]" class="form-control">\n' +
                '                        </div><!--col-->\n' +
                '                    </div><!--form-group-->\n' +
                '                </div>\n' +
                '</div>\n' +
                '<hr>\n' +
                '            </div>';

            var twoImageBlock = '<div class="block-container">' +
                '                    <h6>' + selectorValue + '</h6>\n' +
                '<div class="row mt-4">\n' +
                '<input type="hidden" name="blocks\[' + count + '\]\[type\]" value="two_image">\n' +
                '                <div class="col">\n' +
                '                    <div class="form-group row">\n' +
                '                        <label class="col-md-2 form-control-label" for="blocks\[' + count + '\]\[content\]">Контент</label>\n' +
                '                        <div class="col-md-10">\n' +
                '                            <textarea name="blocks\[' + count + '\]\[content\]" class="form-control blockTextBox"></textarea>\n' +
                '                        </div><!--col-->\n' +
                '                    </div><!--form-group-->\n' +
                '                    <div class="form-group row">\n' +
                '                        <label class="col-md-2 form-control-label" for="blocks\[' + count + '\]\[order\]">Порядок</label>\n' +
                '                        <div class="col-md-10">\n' +
                '                            <input  type="number"  name="blocks\[' + count + '\]\[order\]" class="form-control">\n' +
                '                        </div><!--col-->\n' +
                '                    </div><!--form-group-->\n' +
                '                </div>\n' +
                '</div>\n' +
                '<hr>\n' +
                '            </div>';

            var pdfBlock = '<div class="block-container">' +
                '                    <h6>' + selectorValue + '</h6>\n' +
                '<div class="row mt-4">\n' +
                '<input type="hidden" name="blocks\[' + count + '\]\[type\]" value="pdf">\n' +
                '                <div class="col">\n' +
                '                    <div class="form-group row">\n' +
                '                        <label class="col-md-2 form-control-label" for="blocks\[' + count + '\]\[content\]">ID</label>\n' +
                '                        <div class="col-md-10">\n' +
                '                            <input type="text" id="blocks\[' + count + '\]\[content\]" name="blocks\[' + count + '\]\[content\]" class="form-control">\n' +
                '                        </div><!--col-->\n' +
                '                    </div><!--form-group-->\n' +
                '                    <div class="form-group row">\n' +
                '                        <label class="col-md-2 form-control-label" for="blocks\[' + count + '\]\[order\]">Порядок</label>\n' +
                '                        <div class="col-md-10">\n' +
                '                            <input type="number" name="blocks\[' + count + '\]\[order\]" class="form-control">\n' +
                '                        </div><!--col-->\n' +
                '                    </div><!--form-group-->\n' +
                '                </div>\n' +
                '</div>\n' +
                '<hr>\n' +
                '            </div>';

            if (selectorValue === 'imageBlock') {
                neededBlock = imageBlock;
            } else if (selectorValue === 'pdfBlock') {
                neededBlock = pdfBlock;
            } else if (selectorValue === 'twoImageBlock') {
                neededBlock = twoImageBlock;
            } else {
                neededBlock = defaultBlock;
            }

            $('#blocks-management').append(neededBlock);
            init();
        });

        var middle = {
            title: 'Middle',
            description: 'Middle',
            content: '            <div class="middle-container">\n' +
            '                <h2>Дизайн интерьера</h2>\n' +
            '                <p>\n' +
            '                    Приведя к совершенству внешний образ компании, мы принялись за реализацию и внутренней красоты -\n' +
            '                    ОФИСА.\n' +
            '                </p>\n' +
            '                <p>\n' +
            '                    Редко, но все таки некоторые клиенты захаживают и в офис. Потому перед нами стояла задача создать\n' +
            '                    функциональный дизайн, который сохраняет фирменный стиль и в то же время не стоит много денег в\n' +
            '                    реализации.\n' +
            '                </p>\n' +
            '                <p>\n' +
            '                    Предлагаем оценить результат.\n' +
            '                </p>\n' +
            '                <p>\n' +
            '                    Все начиналось с нескольких фотографий офиса и планировки отрисованной владелицей\n' +
            '                    бизнеса на скорую руку. После увиденного результата, ее руки еще долго дрожали от радости.\n' +
            '                </p>\n' +
            '                <h3>Старый дизайн</h3>\n' +
            '        </div>'
        };
        var medium = {
            title: 'Medium',
            description: 'Medium',
            content: '            <div class="medium-container">\n' +
            '                <div class="two-img-cont">\n' +
            '                    <div class="img-cont">\n' +
            '                        <h3>План пола</h3>\n' +
            '                        <img src="/images/portfolio-material/plan-ground.png" alt="portfolio-img">\n' +
            '                    </div>\n' +
            '                    <div class="img-cont">\n' +
            '                        <h3>План потолка</h3>\n' +
            '                        <img src="/images/portfolio-material/plan-roof.jpg" alt="portfolio-img">\n' +
            '                    </div>\n' +
            '                </div>\n' +
            '        </div>'
        };

        var image = {
            title: 'Image',
            description: 'Image',
            content: '<div class="img-cont">\n' +
            '            <img src="/images/portfolio-material/image-12.jpg" alt="portfolio-img">\n' +
            '            </div>'
        };

        var twoImage = {
            title: 'Two Image',
            description: 'Two Image',
            content: '<div class="two-img-cont">\n' +
            '        <div class="img-cont">\n' +
            '            <img src="/images/portfolio-material/image-10.jpg" alt="portfolio-img">\n' +
            '        </div>\n' +
            '        <div class="img-cont">\n' +
            '            <img src="/images/portfolio-material/image-11.jpg" alt="portfolio-img">\n' +
            '        </div>\n' +
            '    </div>'
        };

        function init() {
            tinymce.init({
                menubar: false,
                selector: 'textarea.blockTextBox',
                min_height: 400,
                resize: 'vertical',
                plugins: 'fullscreen link image code lists paste template',
                extended_valid_elements: 'input[id|name|value|type|class|style|required|placeholder|autocomplete|onclick]',
                file_browser_callback: function (field_name, url, type, win) {
                    var x = window.innerWidth || document.documentElement.clientWidth || document.getElementsByTagName('body')[0].clientWidth;
                    var y = window.innerHeight || document.documentElement.clientHeight || document.getElementsByTagName('body')[0].clientHeight;

                    var cmsURL = '/admin/laravel-filemanager?field_name=' + field_name;
                    if (type == 'image') {
                        cmsURL = cmsURL + "&type=Images";
                    } else {
                        cmsURL = cmsURL + "&type=Files";
                    }

                    tinyMCE.activeEditor.windowManager.open({
                        file: cmsURL,
                        title: 'Filemanager',
                        width: x * 0.8,
                        height: y * 0.8,
                        resizable: "yes",
                        close_previous: "no"
                    });
                },
                style_formats: [
                    {
                        title: 'Headers', items: [
                        {title: 'Header 1', format: 'h1'},
                        {title: 'Header 2', format: 'h2'},
                        {title: 'Header 3', format: 'h3'},
                        {title: 'Header 4', format: 'h4'},
                        {title: 'Header 5', format: 'h5'},
                        {title: 'Header 6', format: 'h6'}
                    ]
                    },
                    {
                        title: 'Inline', items: [
                        {title: 'Bold', icon: 'bold', format: 'bold'},
                        {title: 'Italic', icon: 'italic', format: 'italic'},
                        {title: 'Underline', icon: 'underline', format: 'underline'},
                        {title: 'Strikethrough', icon: 'strikethrough', format: 'strikethrough'},
                        {title: 'Superscript', icon: 'superscript', format: 'superscript'},
                        {title: 'Subscript', icon: 'subscript', format: 'subscript'},
                        {title: 'Code', icon: 'code', format: 'code'}
                    ]
                    },
                    {
                        title: 'Blocks', items: [
                        {title: 'Paragraph', format: 'p'},
                        {title: 'Blockquote', format: 'blockquote'},
                        {title: 'Div', format: 'div'}
                    ]
                    },
                    {
                        title: 'Alignment', items: [
                        {title: 'Left', icon: 'alignleft', format: 'alignleft'},
                        {title: 'Center', icon: 'aligncenter', format: 'aligncenter'},
                        {title: 'Right', icon: 'alignright', format: 'alignright'},
                        {title: 'Justify', icon: 'alignjustify', format: 'alignjustify'}
                    ]
                    }
                ],
                toolbar: 'fullscreen styleselect bold italic underline | forecolor backcolor| bullist numlist | link image | code | template',
                image_caption: true,
                image_title: true,
                forced_root_block: false,
                paste_text_sticky: true,
                paste_text_sticky_default: true,
                templates: [
                    middle, medium, image, twoImage
                ],
                content_css: '/css/main.css'
            });
        }

        init();
    </script>
@endpush
