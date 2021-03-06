<style>
    .image-preview {
        max-width: 100%;
    }
</style>
<div class="row mt-4">
    <div class="col">

        <div class="form-group row">
            {{ html()->label('Категория *')
            ->class('col-md-2 form-control-label')
            ->for('category_id') }}

            <div class="col-md-10">
                <select multiple name="categories[]" id="category_id" class="form-control" required="required">
                    @foreach ($categories as $category)
                        @if(isset($portfolio))
                            <option value="{{ $category->id }}" @foreach($portfolio->categories as $cat) {{ $cat->id == $category->id ? 'selected' : '' }} @endforeach>{{ $category->name }}</option>
                        @else
                            <option value="{{ $category->id }}">{{ $category->name }}</option>
                        @endif
                    @endforeach
                </select>
            </div><!--col-->
        </div><!--form-group-->

        <div class="form-group row">
            {{ html()->label('Тип *')
            ->class('col-md-2 form-control-label')
            ->for('type') }}

            <div class="col-md-10">
                <select name="type" id="type" class="form-control" required="required">
                    @if(isset($portfolio))
                        <option value="small" {{ $portfolio->type == 'small' ? 'selected' : '' }}>Small</option>
                        <option value="big" {{ $portfolio->type == 'big' ? 'selected' : '' }}>Big</option>
                    @else
                        <option value="small">Small</option>
                        <option value="big">Big</option>
                    @endif
                </select>
            </div><!--col-->
        </div><!--form-group-->

        <div class="form-group row">
            {{ html()->label('Тип шапки *')
            ->class('col-md-2 form-control-label')
            ->for('header_type') }}

            <div class="col-md-10">
                <select name="header_type" id="header_type" class="form-control" required="required">
                    @if(isset($portfolio))
                        <option value="white" {{ $portfolio->header_type == 'white' ? 'selected' : '' }}>White</option>
                        <option value="black" {{ $portfolio->header_type == 'black' ? 'selected' : '' }}>Black</option>
                    @else
                        <option value="white">White</option>
                        <option value="black">Black</option>
                    @endif
                </select>
            </div><!--col-->
        </div><!--form-group-->

        <div class="form-group row">
            {{ html()->label("Цвет описания шапки *")
                ->class('col-md-2 form-control-label')
                ->for('page_head_color') }}

            <div class="col-md-10">
                {{ html()->text('page_head_color')
                    ->class('form-control color-picker')
                    ->placeholder("#313131")->required() }}
            </div><!--col-->
        </div><!--form-group-->

        <div class="form-group row">
            {{ html()->label("Цвет хлебных крошек текста *")
                ->class('col-md-2 form-control-label')
                ->for('page_head_bread_color') }}

            <div class="col-md-10">
                {{ html()->text('page_head_bread_color')
                    ->class('form-control color-picker')
                    ->placeholder("#313131")->required() }}
            </div><!--col-->
        </div><!--form-group-->

        <div class="form-group row">
            {{ html()->label("Цвет хлебных крошек текста (наведение) *")
                ->class('col-md-2 form-control-label')
                ->for('page_head_bread_active_color') }}

            <div class="col-md-10">
                {{ html()->text('page_head_bread_active_color')
                    ->class('form-control color-picker')
                    ->placeholder("#313131")->required() }}
            </div><!--col-->
        </div><!--form-group-->

        <div class="form-group row">
            {{ html()->label("Название *")
                ->class('col-md-2 form-control-label')
                ->for('name') }}

            <div class="col-md-10">
                {{ html()->text('name')
                    ->class('form-control')
                    ->placeholder("фирменный стиль для")
                    ->attribute('maxlength', 191)
                    ->required() }}
            </div><!--col-->
        </div><!--form-group-->

        <div class="form-group row">
            {{ html()->label("Название компании *")
                ->class('col-md-2 form-control-label')
                ->for('company_name') }}

            <div class="col-md-10">
                {{ html()->text('company_name')
                    ->class('form-control')
                    ->placeholder("LOGISTIC LINE")
                    ->attribute('maxlength', 191)
                     ->required()}}
            </div><!--col-->
        </div><!--form-group-->


        <div class="form-group row">
            {{ html()->label("Slug")
                ->class('col-md-2 form-control-label')
                ->for('slug') }}

            <div class="col-md-10">
                {{ html()->text('slug')
                    ->class('form-control')
                    ->placeholder("logistic-line")
                    ->attribute('maxlength', 191) }}
            </div><!--col-->
        </div><!--form-group-->


        <div class="form-group row">
            {{ html()->label("Описание")
                ->class('col-md-2 form-control-label')
                ->for('description') }}

            <div class="col-md-10">
                {{ html()->textarea('description')
                    ->class('form-control')
                    ->placeholder("РЕБРЕНДИНГ ТОРГОВОЙ МАРКИ “LOGISTIC LINE”")
                    ->required() }}
            </div><!--col-->
        </div><!--form-group-->


        <div class="form-group row">
            {{ html()->label("Основной цвет *")
                ->class('col-md-2 form-control-label')
                ->for('main_color') }}

            <div class="col-md-10">
                {{ html()->text('main_color')
                    ->class('form-control color-picker')
                    ->placeholder("#313131")->required() }}
            </div><!--col-->
        </div><!--form-group-->

        <div class="form-group row">
            {{ html()->label("Blot цвет *")
                ->class('col-md-2 form-control-label')
                ->for('blot_color') }}

            <div class="col-md-10">
                {{ html()->text('blot_color')
                    ->class('form-control color-picker')
                    ->placeholder("#313131")->required() }}
            </div><!--col-->
        </div><!--form-group-->


        <div class="form-group row">
            {{ html()->label("SVG *")
                ->class('col-md-2 form-control-label')
                ->for('svg') }}

            <div class="col-md-10">
                {{ html()->textarea('svg')
                    ->class('form-control')
                    ->placeholder("m0 100.")
                    ->required() }}
            </div><!--col-->
        </div><!--form-group-->


        <div class="form-group row">
            {{ html()->label("Фоновое изображение *")
                ->class('col-md-2 form-control-label')
                ->for('main_image') }}

            <div class="col-md-10">
                {{ html()->file('main_image')
                    ->class('form-control') }}
            </div><!--col-->
        </div><!--form-group-->

        @if(isset($portfolio))
            <div class="form-group row">

                <div class="col-md-2">

                </div><!--col-->
                <div class="col-md-10">
                    <img class="image-preview" src="/storage/portfolio/{{  $portfolio->main_image }}" alt="">
                </div><!--col-->
            </div>
        @endif


        <div class="form-group row">
            {{ html()->label("Header изображение *")
                ->class('col-md-2 form-control-label')
                ->for('header_image') }}

            <div class="col-md-10">
                {{ html()->file('header_image')
                    ->class('form-control') }}
            </div><!--col-->
        </div><!--form-group-->

        @if(isset($portfolio))
            <div class="form-group row">

                <div class="col-md-2">

                </div><!--col-->
                <div class="col-md-10">
                    <img class="image-preview" src="/storage/portfolio/{{ $portfolio->header_image }}" alt="">
                </div><!--col-->
            </div>
        @endif

        <div class="form-group row">
            {{ html()->label("Preview изображение (small) *")
                ->class('col-md-2 form-control-label')
                ->for('thumb_image') }}

            <div class="col-md-10">
                {{ html()->file('thumb_image')
                    ->class('form-control') }}
            </div><!--col-->
        </div><!--form-group-->

        @if(isset($portfolio))
            <div class="form-group row">

                <div class="col-md-2">

                </div><!--col-->
                <div class="col-md-10">
                    <img class="image-preview" src="/storage/portfolio/{{  $portfolio->thumb_image }}" alt="">
                </div><!--col-->
            </div>
        @endif

        <div class="form-group row">
            <label class="col-md-2 form-control-label" for="order">Порядок</label>
            <div class="col-md-10">
                <input type="number" name="order"
                       value="{{ isset($portfolio) ? $portfolio->order : 0 }}" class="form-control">
            </div><!--col-->
        </div><!--form-group-->

        <div class="form-group row">
            {{ html()->label("Цвет 'Спасибо за внимание' *")
                ->class('col-md-2 form-control-label')
                ->for('thx_attention_color') }}

            <div class="col-md-10">
                {{ html()->text('thx_attention_color')
                    ->class('form-control color-picker')
                    ->placeholder("#313131")->required() }}
            </div><!--col-->
        </div><!--form-group-->

        <div class="form-group row">
            {{ html()->label("Цвет THX кнопки*")
                ->class('col-md-2 form-control-label')
                ->for('thx_text_color') }}

            <div class="col-md-10">
                {{ html()->text('thx_text_color')
                    ->class('form-control color-picker')
                    ->placeholder("#313131")->required() }}
            </div><!--col-->
        </div><!--form-group-->

        <div class="form-group row">
            {{ html()->label("Цвет THX кнопки (наведение) *")
                ->class('col-md-2 form-control-label')
                ->for('thx_text_color_hv') }}

            <div class="col-md-10">
                {{ html()->text('thx_text_color_hv')
                    ->class('form-control color-picker')
                    ->placeholder("#313131")->required() }}
            </div><!--col-->
        </div><!--form-group-->

        <div class="form-group row">
            {{ html()->label("Цвет THX текста *")
                ->class('col-md-2 form-control-label')
                ->for('thx_but_color') }}

            <div class="col-md-10">
                {{ html()->text('thx_but_color')
                    ->class('form-control color-picker')
                    ->placeholder("#313131")->required() }}
            </div><!--col-->
        </div><!--form-group-->

        <div class="form-group row">
            {{ html()->label("Цвет THX текста (наведение) *")
                ->class('col-md-2 form-control-label')
                ->for('thx_but_color_hv') }}

            <div class="col-md-10">
                {{ html()->text('thx_but_color_hv')
                    ->class('form-control color-picker')
                    ->placeholder("#313131")->required() }}
            </div><!--col-->
        </div><!--form-group-->


    </div><!--col-->
</div><!--row-->


@include('backend.includes._seo_form')