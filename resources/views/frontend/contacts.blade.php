@extends ('frontend.layouts.app')
@section ('title', $page->seo_title)
@section ('seo_description', $page->seo_description)
@section ('seo_keywords', $page->seo_keywords)


@section('content')
    @include('frontend.template.header-transparent')
    <!-- start of contacts-page -->
    <section id="contacts-page">
        <div class="main-top-container">
            <div class="container">
                <div class="mix-cont">
                    <div class="page-head">
                        <div class="bread-crumbs">
                            <a href="{{ route('frontend.index') }}">главная</a>
                            <span class="active">
                                @include('frontend.template-svg.breadcrumps-contacts')
                                <span>контакты</span>
                            </span>
                        </div>
                        <h1 class="page-title">контакты</h1>
                    </div>

                    <div class="cta-col">
                        <p class="cta-big">Свяжитесь с нами</p>
                        <p class="cta-small">начните свой проект сегодня</p>
                    </div>
                </div>

                <div class="contacts-cont">
                    <div class="left-cont">
                        <div class="img-cont">
                            <img class="icon-phone" src="/images/contacts/svg/contacts-icon-phone.svg" alt="icon-phone">
                        </div>
                        <p class="fomdih-contact fomdih-phone">
                            <a href="tel:+38(098)8171519"><span>+ 38</span> (098) 817 15 19</a>
                        </p>
                    </div>
                    <div class="right-cont">
                        <div class="img-cont">
                            <img class="icon-mail" src="/images/contacts/svg/contacts-icon-mail.svg" alt="icon-mail">
                        </div>
                        <p class="fomdih-contact fomdih-email">
                            <a href="mailto:fomdih@gmail.com">fomdih<span>@</span>gmail.com</a>
                        </p>
                    </div>
                </div>
            </div>
        </div>

        <div class="contacts-forms">
            <img class="contacts-border" src="/images/contacts/svg/contacts-border.svg" alt="contacts-border">

            <div class="container">

                <div class="tab-panel form-limits">
                    <div class="form-headers-cont">
                        <p class="form-header request-header active">
                            <span class="yellow-color">Заявка</span> на услуги
                        </p>
                        <p class="form-header tender-header">
                            <span class="yellow-color">Пригласить</span> к участию в тендере
                        </p>
                    </div>

                    <ul class="form-switch">
                        <li class="active">Заявка</li>
                        <li>Тендер</li>
                    </ul>
                </div>
                <!-- start of request-form -->
                <form class="contact-form request-form active" name="request-form">
                    <div class="form-cont form-limits">
                        <div class="inputs-cont">
                            <div class="input-col">
                                <input type="text" name="user-name" required="required" class="user-input" placeholder="Ваше имя *" tabindex="1">
                            </div>
                            <div class="input-col">
                                <input type="tel" name="user-tel" required="required" class="user-input" placeholder="Ваш телефон *" tabindex="2">
                            </div>
                            <div class="input-col">
                                <input type="email" name="user-email" required="required" class="user-input" placeholder="Ваш email *" tabindex="3">
                            </div>
                        </div>

                        <div class="text-field-cont">
                            <textarea name="text" placeholder="Комментарий..." class="user-input"></textarea>
                        </div>

                        <div class="add-file-cont">
                            <input type="file" name="user-file" id="user-file-2"
                                   multiple data-multiple-caption="{count} files selected"
                                   class="inputfile inputfile-2"
                                   style="display: none">
                            <label for="user-file-2">
                                <i class="plus-icon">
                                    @include('frontend.template-svg.contacts-add-file-icon')
                                </i>
                                <span>Добавить файл</span>
                            </label>
                        </div>
                        <div class="g-recaptcha" data-sitekey="6LcX7UIUAAAAADRSQ3FHK5-E4Ul9kEYBSUNq018O"></div>

                        <button type="g-recaptcha submit" class="gl-yellow-btn submit-btn" tabindex="4">
                            @include('frontend.template-svg.button-brief')
                            <span>отправить</span>
                        </button>
                    </div>
                </form>
                <!-- end of request-form -->

                <!-- start of tender-form -->
                <form class="contact-form tender-form" name="tender-form">
                    <div class="form-cont form-limits">
                        <div class="inputs-cont">
                            <div class="input-col">
                                <input type="text" name="user-name" required="required" class="user-input" placeholder="Ваше имя *" tabindex="1">
                            </div>
                            <div class="input-col">
                                <input type="tel" name="user-tel" required="required" class="user-input" placeholder="Ваш телефон *" tabindex="2">
                            </div>
                            <div class="input-col">
                                <input type="email" name="user-email" required="required" class="user-input" placeholder="Ваш email *" tabindex="3">
                            </div>
                        </div>

                        <div class="text-field-cont">
                            <textarea name="text" placeholder="Опишите условия тендера или укажите ссылку на документацию ..." class="user-input"></textarea>
                        </div>

                        <div class="add-file-cont">
                            <input type="file" name="user-file" id="user-file-3"
                                   multiple data-multiple-caption="{count} files selected"
                                   class="inputfile inputfile-2"
                                   style="display: none">
                            <label for="user-file-3">
                                <i class="plus-icon">
                                    @include('frontend.template-svg.contacts-add-file-icon')
                                </i>
                                <span>Добавить файл</span>
                            </label>
                        </div>
                        <div class="g-recaptcha" data-sitekey="6LcX7UIUAAAAADRSQ3FHK5-E4Ul9kEYBSUNq018O"></div>

                        <button type="g-recaptcha submit" class="gl-yellow-btn submit-btn" tabindex="4">
                            @include('frontend.template-svg.button-brief')
                            <span>отправить</span>
                        </button>
                    </div>
                </form>
                <!-- end of tender-form -->
            </div>
        </div>
    </section>
    <!-- end of contacts-page -->
@endsection

@push('after-scripts')
<script src="/js/contacts.js"></script>
@endpush