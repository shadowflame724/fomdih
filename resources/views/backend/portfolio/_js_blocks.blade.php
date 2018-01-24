<script src="/libs/tinymce/tinymce.js"></script>
<script src="/libs/bootstrap-colorpicker-master/dist/js/bootstrap-colorpicker.js"></script>

<script>
    var count = '{{ $count }}';
    function initColorPicker () {
        $('.color-picker').colorpicker();
    }
    function initDeleteBlock () {
        $('.remove-block').on('click', function(e){
            e.preventDefault();
            var blockId = parseInt($(this)["0"].dataset.id);
            if(blockId !== 0){
                $.ajax({
                    type: "DELETE",
                    url: '/admin/block/' + blockId,
                    headers: {
                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                    },
                    success: function (data) {
                        swal({
                            title: data.message,
                            type: "success"
                        });
                    },
                    error: function (data) {
                        swal({
                            title: data.message,
                            type: "error"
                        });
                    }
                });

            }
            $(this).parent().remove();
        });
    }
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
            '                            <input type="text" id="blocks\[' + count + '\]\[bg_color\]" name="blocks\[' + count + '\]\[bg_color\]" class="form-control color-picker">\n' +
            '                        </div><!--col-->\n' +
            '                    </div><!--form-group-->\n' +
            '<div class="form-group row">\n' +
            '                        <label class="col-md-2 form-control-label" for="blocks\[' + count + '\]\[color\]">color</label>\n' +
            '                        <div class="col-md-10">\n' +
            '                            <input type="text" id="blocks\[' + count + '\][color]" name="blocks\[' + count + '\][color]" class="form-control color-picker">\n' +
            '                        </div><!--col-->\n' +
            '                    </div><!--form-group-->\n' +
            '<div class="form-group row">\n' +
            '                        <label class="col-md-2 form-control-label" for="blocks\[' + count + '\]\[text_align\]">text_align</label>\n' +
            '                        <div class="col-md-10">\n' +
                '<select name="blocks\[' + count + '\]\[text_align\]" class="form-control">\n' +
            '                                                              <option value="left">left</option>\n' +
            '                                                              <option  value="center">center</option>\n' +
            '                                                              <option  value="right">right</option>\n' +
            '                                                          </select>\n' +
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
                '                    <a href="#" style="margin-left: 95%" class="btn btn-danger remove-block" data-id=0><i class="fa fa-trash" data-toggle="tooltip" data-placement="top" title="'+'{{__("buttons.general.crud.delete")}}'+'"></i></a>\n'+
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
            '                    <a href="#" style="margin-left: 95%" class="btn btn-danger remove-block" data-id=0><i class="fa fa-trash" data-toggle="tooltip" data-placement="top" title="'+'{{__("buttons.general.crud.delete")}}'+'"></i></a>\n'+

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
            '                    <a href="#" style="margin-left: 95%" class="btn btn-danger remove-block" data-id=0><i class="fa fa-trash" data-toggle="tooltip" data-placement="top" title="'+'{{__("buttons.general.crud.delete")}}'+'"></i></a>\n'+

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
            '                    <a href="#" style="margin-left: 95%" class="btn btn-danger remove-block" data-id=0><i class="fa fa-trash" data-toggle="tooltip" data-placement="top" title="'+'{{__("buttons.general.crud.delete")}}'+'"></i></a>\n'+

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
        initColorPicker();
        initDeleteBlock();
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
    initColorPicker();
    initDeleteBlock();
</script>