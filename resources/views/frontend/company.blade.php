@extends ('frontend.layouts.app')
@section ('title', $page->seo_title)
@section ('seo_description', $page->seo_description)
@section ('seo_keywords', $page->seo_keywords)

@section('content')
    @include('frontend.template.header-white')
    <!-- start of company-page -->
    <section id="company-page">
        <div class="main-top-container">
            <div class="container">
                <div class="page-head">
                    <div class="bread-crumbs">
                        <a href="{{ route('frontend.index') }}">главная</a>
                        <span class="active">
                        @include('frontend.template-svg.breadcrumps-company')
                            <span>кто мы</span>
                    </span>
                    </div>
                    <h1 class="page-title">кто <span class="yellow-color">мы</span></h1>
                </div>
            </div>
        </div>

        <!-- start of our-team -->
        <div class="our-team">
            <div class="container">
                <div class="img-cont team-img-cont">
                    <img class="team-img" src="/images/company/svg/team-image.svg" alt="team-image">

                    <div class="team-members-cont">
                        <div class="team-member member-1">
                            <div class="member-photo">
                                <img src="/images/company/photo-team-1.png" alt="member-photo">
                            </div>
                            <div class="member-info">
                                <p class="name">
                                    Кирилл <span style="background-image: url('images/company/svg/fominov-blot.svg')">Фоминов</span>
                                </p>
                                <p class="position">CEO / lead designer</p>
                            </div>
                        </div>
                        <div class="team-member member-2">
                            <div class="member-photo">
                                <img src="/images/company/photo-team-2.png" alt="member-photo">
                            </div>
                            <div class="member-info">
                                <p class="name">
                                    Алексей <span style="background-image: url('images/company/svg/fominov-blot.svg')">Глаголев</span>
                                </p>
                                <p class="position">Senior Lev Tolstoy Developer</p>
                            </div>
                        </div>
                        <div class="team-member member-3">
                            <div class="member-photo">
                                <img src="/images/company/photo-team-3.png" alt="member-photo">
                            </div>
                            <div class="member-info">
                                <p class="name">
                                    Александр <span
                                            style="background-image: url('images/company/svg/fominov-blot.svg')">Дихтярук</span>
                                </p>
                                <p class="position">CEO / project maneger</p>
                            </div>
                        </div>
                        <div class="team-member member-4">
                            <div class="member-photo">
                                <img src="/images/company/photo-team-4.png" alt="member-photo">
                            </div>
                            <div class="member-info">
                                <p class="name">
                                    Анна <span
                                            style="background-image: url('images/company/svg/slez-blot.svg')">Слез</span>
                                </p>
                                <p class="position">creative marketer</p>
                            </div>
                        </div>
                        <div class="team-member member-5">
                            <div class="member-photo">
                                <img src="/images/company/photo-team-5.png" alt="member-photo">
                            </div>
                            <div class="member-info">
                                <p class="name">
                                    Владимир <span
                                            style="background-image: url('images/company/svg/kovalenko-blot.svg')">Коваленко</span>
                                </p>
                                <p class="position">Film director</p>
                            </div>
                        </div>
                        <div class="team-member member-6">
                            <div class="member-photo">
                                <img src="/images/company/photo-team-6.png" alt="member-photo">
                            </div>
                            <div class="member-info">
                                <p class="name">
                                    Андрей <span style="background-image: url('images/company/svg/muravskiy-blot.svg')">Муравский</span>
                                </p>
                                <p class="position">software engineer</p>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="info-block-cont">
                    <div class="title-cont">
                        <h2 class="section-header">
                            О нас
                        </h2>

                        <div class="img-cont">
                            <img class="services-underlining" src="/images/general/svg/services-underlining.svg"
                                 alt="services-underlining">
                        </div>
                    </div>
                    <div class="text-cont">
                        <p>
                            <span>Наша история началась</span> не в далеком 199… году. Все гораздо прозаичней.
                            <span class="yellow-color">FomDih</span> появился на свет 19 июня 2017 года. Да, мы молоды,
                            но <span>опыта у нас достаточно.</span>
                        </p>
                        <p>
                            <span>29 лет</span> – суммарный стаж нашей команды в сфере маркетинга. Мы работали
                            в больших <span>рекламных</span> и <span>брендинговых</span> агентствах: <span>внедряли стратегии, рисовали
                        дизайны, создавали сайты…</span> И вдруг поняли, что и сил и опыта хватает. Хватает
                            для создания креативного агентства <span class="yellow-color">FomDih</span>.
                        </p>
                        <p>
                            Прошу вас, не нужно скепсиса. <span>Вы начинали так же.</span> У вас родилась идея бизнеса.
                            Хватило смелости, чтобы ее реализовать. Хватило трудолюбия, чтобы стать успешным.
                            Но сейчас не хватает парочки креативных идей, чтобы стать лучшим.
                        </p>
                        <p>
                            <span class="yellow-color">FomDih</span> создает идеи, которые разрушают границы.
                        </p>
                        <p>
                            <span>Давайте же разрушим их вместе!</span>
                        </p>
                    </div>
                </div>

                <a href="{{ route('frontend.portfolio') }}" class="gl-yellow-btn more-portfolio-btn">
                    @include('frontend.template-svg.button-more-works')
                    <span>посмотреть наши работы</span>
                </a>
            </div>

        </div>
        <!-- end of our-team -->
    </section>
    <!-- end of company-page -->
@endsection
@push('after-scripts')
    <script src="/js/company.js"></script>
@endpush