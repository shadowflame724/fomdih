<div class="row mt-4">
    <div class="col">
        <div class="form-group row">
            {{ html()->label("SEO Title")
                ->class('col-md-2 form-control-label')
                ->for('seo_title') }}

            <div class="col-md-10">
                {{ html()->text('seo_title')
                    ->class('form-control')
                    ->placeholder("SEO Title")
                    ->attribute('maxlength', 191) }}
            </div><!--col-->
        </div><!--form-group-->
    </div><!--col-->
</div><!--row-->

<div class="row mt-4">
    <div class="col">
        <div class="form-group row">
            {{ html()->label("SEO Description")
                ->class('col-md-2 form-control-label')
                ->for('seo_description') }}

            <div class="col-md-10">
                {{ html()->textarea('seo_description')
                    ->class('form-control')
                    ->placeholder("SEO Description")
                    ->attribute('maxlength', 500) }}
            </div><!--col-->
        </div><!--form-group-->
    </div><!--col-->
</div><!--row-->

<div class="row mt-4">
    <div class="col">
        <div class="form-group row">
            {{ html()->label("SEO Keywords")
                ->class('col-md-2 form-control-label')
                ->for('seo_keywords') }}

            <div class="col-md-10">
                {{ html()->textarea('seo_keywords')
                    ->class('form-control')
                    ->placeholder("SEO Keywords")
                    ->attribute('maxlength', 500) }}
            </div><!--col-->
        </div><!--form-group-->
    </div><!--col-->
</div><!--row-->