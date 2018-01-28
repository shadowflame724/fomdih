<!-- start of order-form -->
<form class="fomdih-form order-form" name="order-form">
    <div class="form-wrapper">
        <div class="container">
            <div class="right-cont">
                <div class="form-top-cont outer-cont">
                    <div class="form-cols-cont">
                        <div class="form-col card-col">
                            <p class="form-header desktop-hidden">
                                Хотите быть<br> <span class="yellow-color">здесь?</span>
                                <i class="icon arrow-form-order">
                                    @include('frontend.template-svg.arrow-form-order')
                                </i>
                            </p>

                            <div class="portfolio-item form-card">
                                <a href="{{ route('frontend.portfolio.show',['slug' => $portfolio->slug]) }}"
                                   style="color: #ffcd00" target="_blank">
                                    <div class="img-cont">
                                        <img src="/images/general/portfolio-image-empty.png" alt="portfolio-image">
                                    </div>
                                    @include('frontend.template-svg.question')
                                    <div class="portfolio-info" style="color: #ffcd00">
                                        @include('frontend.template-svg.portfolio-small-blot')
                                        <p class="portfolio-name" style="color: #000">
                                            <span>ваш проект</span>
                                        </p>
                                    </div>
                                </a>
                            </div>
                        </div>
                        <div class="form-col cta-col">
                            <p class="form-header desktop-visible">
                                Хотите быть<br> <span class="yellow-color">здесь?</span>
                                <i class="icon arrow-form-order">
                                    @include('frontend.template-svg.arrow-form-order')
                                </i>
                            </p>
                            <p class="form-header-small">Заполните <span class="yellow-color">заявку</span></p>
                            <div class="close-btn">
                                <i class="icon close-icon-form-order">
                                    @include('frontend.template-svg.close-icon-form-order')
                                </i>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="form-cont outer-cont">
                    <div class="inputs-cont">
                        <div class="input-col">
                            <input type="text" name="user-name" required="required" class="user-input"
                                   placeholder="Ваше имя *" tabindex="1">
                        </div>
                        <div class="input-col">
                            <input type="tel" name="user-tel" required="required" class="user-input"
                                   placeholder="Ваш телефон *" tabindex="2">
                        </div>
                        <div class="input-col">
                            <input type="email" name="user-email" required="required" class="user-input"
                                   placeholder="Ваш email *" tabindex="3">
                        </div>
                    </div>

                    <div class="text-field-cont">
                        <textarea name="text" placeholder="Комментарий ..." class="user-input"></textarea>
                    </div>

                    <div class="add-file-cont">
                        <input type="file" name="user-file" id="user-file"
                               multiple data-multiple-caption="{count} files selected"
                               class="inputfile inputfile-1"
                               style="display: none">
                        <label for="user-file">
                            <i class="plus-icon">
                                @include('frontend.template-svg.contacts-add-file-icon')
                            </i>
                            <span>Добавить файл</span>
                        </label>
                    </div>

                    <div class="g-recaptcha" data-sitekey="6LcX7UIUAAAAADRSQ3FHK5-E4Ul9kEYBSUNq018O"></div>
                    <button class="gl-yellow-btn submit-btn g-recaptcha" type="submit" tabindex="4">
                        @include('frontend.template-svg.button-brief')
                        <span>отправить</span>
                    </button>

                </div>
            </div>
        </div>
    </div>
</form>
<!-- end of order-form -->

<!-- start of success-form pop-up -->
<div class="fomdih-form success-form">
    <div class="form-wrapper">
        <div class="container">
            <div class="full-cont outer-cont">
                <div class="left-cont">
                    <div class="success-form-headers">
                        <p class="header-1">Терпение, <span class="yellow-color">мой друг</span>,</p>
                        <p class="header-2">и Ваша щетина превратится в <span class="yellow-color">золото!</span></p>
                        <p class="header-3 desktop-visible">Мы скоро ответим на Ваше обращение</p>

                        <div class="desktop-hidden">
                            <div class="spec-cont">
                                <div class="spec-left">
                                    <p class="header-3">Мы скоро ответим на Ваше обращение</p>
                                </div>
                                <div class="spec-right">
                                    <div class="img-cont success-img-cont">
                                        <img src="/images/general/svg/cat-form.svg" alt="success-img">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <a href="/" class="gl-yellow-btn success-close-btn">
                        @include('frontend.template-svg.button-brief')
                        <span>перейти к сайту</span>
                    </a>
                </div>
                <div class="right-cont desktop-visible">
                    <div class="img-cont success-img-cont">
                        <img src="/images/general/svg/cat-form.svg" alt="success-img">
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- end of success-form pop-up-->