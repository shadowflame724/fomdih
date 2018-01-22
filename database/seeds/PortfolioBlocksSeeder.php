<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PortfolioBlocksSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $nowDatetime = \Carbon\Carbon::now('	Europe/Kiev')->toDateTimeString();
        $portfolioBlocks = [
            [
                'type' => 'default',
                'bg_color' => '#313131',
                'color' => '#fff',
                'text_align' => 'left',
                'content' => '<div class="middle-container">
            <p><strong>Цели:</strong> Создание фирменного стиля компании</p>
            <p><strong>Для чего все это было нужно?</strong> Logistic Line выходил на новый уровень - начал сотрудничество
                с крупными брендами. Чтобы выделиться в конкурентной среде и повысить статусность,
                требовались решения по созданию и улучшению авторитета.</p>
            <p><strong>Результаты проекта:</strong> разработаны Редизайн логотипа, Фирменный стиль, Брендбук, Гайдбук,
                Дизайн интерьера офиса компании.</p>
            <p><strong>Команда:</strong> Фоминов Кирилл, Дихтярук Александр</p>
        </div>'
            ],
            [
                'type' => 'default',
                'bg_color' => '#fff',
                'color' => '#000',
                'text_align' => 'center',
                'content' => '<div class="middle-container">
            <h2>Создание бренда</h2>
            <p>
                Как мы все знаем Бренд строится на 3 основных вещах: логотип, фирменные шрифты,
                цвета и паттерны использования всей этой красоты.
            </p>
            <p>Потому... сначала был</p>
            <h3>Логотип</h3>
            <p>
                Старый логотип был неплох, но требовалось вдохнуть в него новую жизнь.
                Анализ рынка, 22 чашки кофе и много часов спустя со всех этих вариантов мы пришли к
                тому единственному и неповтроримому. И именно после определения логотипа мы приступили
                к цветам, шрифтам и т.д. Он стал первой ласточкой и путеводной звездой.
            </p>
        </div>'
            ],
            [
                'type' => 'default',
                'bg_color' => '#fff',
                'color' => '#000',
                'text_align' => 'center',
                'content' => '<div class="medium-container">
            <div class="two-img-cont">
                <div class="img-cont">
                    <h4>Старый логотип</h4>
                    <img src="/images/portfolio-material/logo-old.png" alt="portfolio-img">
                </div>
                <div class="img-cont">
                    <h4>Новый логотип</h4>
                    <img src="/images/portfolio-material/svg/logistic-line-logo-grey.svg" alt="portfolio-img">
                </div>
            </div>
        </div>'
            ],
            [
                'type' => 'default',
                'bg_color' => '#fff',
                'color' => '#000',
                'text_align' => 'center',
                'content' => '<div class="middle-container">
            <h3>Как мы к этому пришли</h3>
            <p>
                Наброски разных вариантов...
            </p>
        </div>'

            ],
            [
                'type' => 'image',
                'bg_color' => '',
                'color' => '',
                'text_align' => '',
                'content' => '<div class="img-cont">
        <img src="/images/portfolio-material/image-1.jpg" alt="portfolio-img">
    </div>'

            ],
            [
                'type' => 'default',
                'bg_color' => '#313131',
                'color' => '#fff',
                'text_align' => 'center',
                'content' => '<div class="middle-container">
            <p>
                Показали заказчикам варианты и было решено кардинально внешний вид и концепцию
                старого логотипа не менять, а просто “освежить” его и сделать современным.
            </p>
            <p>
                Итак мы приступили к новым наброскам...
            </p>
        </div>'

            ],
            [
                'type' => 'image',
                'bg_color' => '',
                'color' => '',
                'text_align' => '',
                'content' => '<div class="img-cont">
        <img src="/images/portfolio-material/image-2.jpg" alt="portfolio-img">
    </div>'
            ],
            [
                'type' => 'default',
                'bg_color' => '#313131',
                'color' => '#fff',
                'text_align' => 'center',
                'content' => '<div class="middle-container">
            <p>
                Клиенты выбрали понравившийся вариант логотипа и теперь нужно было утвердится с цветовым решением
            </p>
        </div>'
            ],
            [
                'type' => 'image',
                'bg_color' => '',
                'color' => '',
                'text_align' => '',
                'content' => '<div class="img-cont">
        <img src="/images/portfolio-material/image-3.jpg" alt="portfolio-img">
    </div>'
            ],
            [
                'type' => 'default',
                'bg_color' => '#313131',
                'color' => '#fff',
                'text_align' => 'center',
                'content' => '<div class="middle-container">
            <p>
                Далее мы приступили к построению логотипа!
            </p>

            <div class="img-cont">
                <img src="/images/portfolio-material/logo-structure.png" alt="portfolio-img">
            </div>

            <div class="img-cont">
                <img src="/images/portfolio-material/svg/logistic-line-logo-white.svg" alt="portfolio-img">
            </div>

            <p>
                Логотип выстроен по модульной сетке. Также был применен принцип Фибоначчи
            </p>
        </div>'
            ],
            [
                'type' => 'default',
                'bg_color' => '#313131',
                'color' => '#fff',
                'text_align' => 'center',
                'content' => '<div class="middle-container">
            <h3>Шрифты и корпоративные цвета</h3>
            <p>
                С логотипом закончили. Далее приступаем к выбору шрифтов. Определяем основные и второстепенные фирменные цвета.
            </p>

            <div class="img-cont">
                <img src="/images/portfolio-material/svg/gotham-pro.svg" alt="portfolio-img">
            </div>

            <div class="img-cont">
                <img src="/images/portfolio-material/svg/text-identity.svg" alt="portfolio-img">
            </div>
        </div>'
            ],
            [
                'type' => 'default',
                'bg_color' => '#313131',
                'color' => '#fff',
                'text_align' => 'center',
                'content' => '<div class="middle-container">
            <p>
                Теперь нужно было утвердить единые основные и второстепенные корпоративные цвета.
                Подобрать карты цветов для цифрового и печатного отображения.
            </p>

            <div class="img-cont">
                <img src="/images/portfolio-material/svg/colours-code.svg" alt="portfolio-img">
            </div>

            <h2>Брендбук</h2>

            <p>
                Далее пишем историю компании, ценности, позиционирование и вместе со всеми графическими
                елементами бренда оформляем все в брендбук.
            </p>
        </div>'
            ],
            [
                'type' => 'image',
                'bg_color' => '',
                'color' => '',
                'text_align' => '',
                'content' => '<div class="img-cont">
        <img src="/images/portfolio-material/brandbook-image.jpg" alt="portfolio-img">
    </div>'
            ],
            [
                'type' => 'pdf',
                'bg_color' => '',
                'color' => '',
                'text_align' => '',
                'content' => '32020661/57209191'
            ],
            [
                'type' => 'default',
                'bg_color' => '#fff',
                'color' => '#000',
                'text_align' => 'center',
                'content' => '<div class="middle-container">
            <p>
                Так родился наш первый Брендбук
            </p>
            <p>
                После этого дело было за малым - Гайдбук.
            </p>
            <p>
                Работая в B2B сегменте компания в первую очередь коммуницирует со своими клиентами
                через визитки, письма (брендированнная подпись) и КП. Потому они делались в первую очередь:
            </p>

            <h2>Фирменный стиль</h2>
            <h3>Визитки и корпоративная атрибутика</h3>

            <p>
                Своих клиентов нужно жалеть, любить и баловать. Для этого было решено предоставлять
                близким партнерам <strong>качественную атрибутику</strong> которую они не забросят на балкон или
                завезут на дачу, а будут использовать каждый день.
            </p>
            <p>
                Футболки и чашки стали не только хорошим сувениром в переговорах, но у помогли укрепить корпоративную культуру.
            </p>

        </div>'
            ],
            [
                'type' => 'image',
                'bg_color' => '',
                'color' => '',
                'text_align' => '',
                'content' => '<div class="img-cont">
        <img src="/images/portfolio-material/image-4.jpg" alt="portfolio-img">
    </div>'
            ],
            [
                'type' => 'image',
                'bg_color' => '',
                'color' => '',
                'text_align' => '',
                'content' => '<div class="img-cont">
        <img src="/images/portfolio-material/image-5.jpg" alt="portfolio-img">
    </div>'
            ],
            [
                'type' => 'image',
                'bg_color' => '',
                'color' => '',
                'text_align' => '',
                'content' => '<div class="img-cont">
        <img src="/images/portfolio-material/image-6.jpg" alt="portfolio-img">
    </div>'
            ],
            [
                'type' => 'default',
                'bg_color' => '#313131',
                'color' => '#fff',
                'text_align' => 'center',
                'content' => '<div class="middle-container">
            <h3>Коммерческое предложение</h3>
        </div>'
            ],
            [
                'type' => 'image',
                'bg_color' => '',
                'color' => '',
                'text_align' => '',
                'content' => '<div class="img-cont">
        <img src="/images/portfolio-material/image-7.jpg" alt="portfolio-img">
    </div>'
            ],
            [
                'type' => 'default',
                'bg_color' => '#313131',
                'color' => '#fff',
                'text_align' => 'center',
                'content' => '<div class="middle-container">
            <h3>Подпись в почте</h3>
        </div>'
            ],
            [
                'type' => 'image',
                'bg_color' => '',
                'color' => '',
                'text_align' => '',
                'content' => '<div class="img-cont">
        <img src="/images/portfolio-material/image-8.jpg" alt="portfolio-img">
    </div>'
            ],
            [
                'type' => 'default',
                'bg_color' => '#313131',
                'color' => '#fff',
                'text_align' => 'center',
                'content' => '<div class="middle-container">
            <h3>Оформление грузовых автомобилей</h3>
        </div>'
            ],
            [
                'type' => 'image',
                'bg_color' => '',
                'color' => '',
                'text_align' => '',
                'content' => '<div class="img-cont">
        <img src="/images/portfolio-material/image-9.jpg" alt="portfolio-img">
    </div>'
            ],
            [
                'type' => 'default',
                'bg_color' => '#313131',
                'color' => '#fff',
                'text_align' => 'center',
                'content' => '<div class="middle-container">
            <h3>Корпоративная одежда</h3>
        </div>'
            ],
            [
                'type' => 'two_image',
                'bg_color' => '',
                'color' => '',
                'text_align' => '',
                'content' => '<div class="img-cont">
            <img src="/images/portfolio-material/image-10.jpg" alt="portfolio-img">
        </div>
        <div class="img-cont">
            <img src="/images/portfolio-material/image-11.jpg" alt="portfolio-img">
        </div>'
            ],
            [
                'type' => 'default',
                'bg_color' => '#313131',
                'color' => '#fff',
                'text_align' => 'center',
                'content' => '<div class="middle-container">
            <h2>Гайдбук</h2>

            <p>
                Далее состовляем правила по использованию графических елементов бренда и все это
                оформляем в книгу под названием “Гайдбук”. С помощью этого мануала клиенты смогут
                сотрудничать с рекламными агентствами не боясь что будут допущены ошибки при использовании
                фирменного стиля
            </p>
        </div>'
            ],
            [
                'type' => 'image',
                'bg_color' => '',
                'color' => '',
                'text_align' => '',
                'content' => '<div class="img-cont">
        <img src="/images/portfolio-material/image-12.jpg" alt="portfolio-img">
    </div>'
            ],
            [
                'type' => 'pdf',
                'bg_color' => '',
                'color' => '',
                'text_align' => '',
                'content' => '32020661/57209191'
            ],
            [
                'type' => 'default',
                'bg_color' => '#313131',
                'color' => '#fff',
                'text_align' => 'center',
                'content' => '<div class="middle-container">
            <p>
                Гайдбук - путеводитель по использованию бренда.
                Каждый элемент Гайдбука должен работать на запечатление,
                чтобы не только вызывать ассоциации у потенциальных клиентов, но у укреплять образ
                у текущих клиентов. Сарафан в XXI веке никто не отменял.
            </p>
        </div>'
            ],
            [
                'type' => 'default',
                'bg_color' => '#313131',
                'color' => '#fff',
                'text_align' => 'center',
                'content' => '<div class="middle-container">
            <h2>Дизайн интерьера</h2>
            <p>
                Приведя к совершенству внешний образ компании, мы принялись за реализацию и внутренней красоты - ОФИСА.
            </p>
            <p>
                Редко, но все таки некоторые клиенты захаживают и в офис. Потому перед нами стояла задача создать
                функциональный дизайн, который сохраняет фирменный стиль и в то же время не стоит много денег в реализации.
            </p>
            <p>
                Предлагаем оценить результат.
            </p>
            <p>
                Все начиналось с нескольких фотографий офиса и планировки отрисованной владелицей
                бизнеса на скорую руку. После увиденного результата, ее руки еще долго дрожали от радости.
            </p>
            <h3>Старый дизайн</h3>
        </div>'
            ],
            [
                'type' => 'two_image',
                'bg_color' => '',
                'color' => '',
                'text_align' => '',
                'content' => '<div class="img-cont">
            <img src="/images/portfolio-material/image-14.jpg" alt="portfolio-img">
        </div>
        <div class="img-cont">
            <img src="/images/portfolio-material/image-13.jpg" alt="portfolio-img">
        </div>'
            ],
            [
                'type' => 'default',
                'bg_color' => '#313131',
                'color' => '#fff',
                'text_align' => 'center',
                'content' => '<div class="middle-container">
            <h3>Новый дизайн</h3>
        </div>'
            ],
            [
                'type' => 'two_image',
                'bg_color' => '',
                'color' => '',
                'text_align' => '',
                'content' => '<div class="img-cont">
            <img src="/images/portfolio-material/image-15.jpg" alt="portfolio-img">
        </div>
        <div class="img-cont">
            <img src="/images/portfolio-material/image-16.jpg" alt="portfolio-img">
        </div>'
            ],
            [
                'type' => 'default',
                'bg_color' => '#313131',
                'color' => '#fff',
                'text_align' => 'center',
                'content' => '<div class="medium-container">
            <div class="two-img-cont">
                <div class="img-cont">
                    <h3>План пола</h3>
                    <img src="/images/portfolio-material/plan-ground.png" alt="portfolio-img">
                </div>
                <div class="img-cont">
                    <h3>План потолка</h3>
                    <img src="/images/portfolio-material/plan-roof.jpg" alt="portfolio-img">
                </div>
            </div>
        </div>'
            ],
            [
                'type' => 'default',
                'bg_color' => '#313131',
                'color' => '#fff',
                'text_align' => 'center',
                'content' => '<div class="middle-container">
            <h3>Выводы</h3>
            <p>
                Все это начиналось с короткого брифа записанного в блокнот на кухне у владелицы бизнеса.
                В итоге это переросло в наш первый кейс. Таня, спасибо за то, что поверила в <strong>FomDih.</strong>
            </p>
            <p>Отправить лучи добра или свою заявку можете к нам на почту. Мы готовы встретиться
                и с Вами за чашкой кофе, чтобы обсудить Ваш проект.
            </p>
            <p>Все начиналось с нескольких фотографий офиса и планировки отрисованной владелицей
                бизнеса на скорую руку. После увиденного результата, ее руки еще долго дрожали от радости.
            </p>
        </div>'
            ]
        ];

        foreach ($portfolioBlocks as $key => &$block){
            $block['created_at'] = $nowDatetime;
            $block['updated_at'] = $nowDatetime;
            $block['order'] = $key;
        }
        foreach (\App\Models\Portfolio::all() as $portfolio){
            $portfolio->portfolioBlocks()->createMany($portfolioBlocks);
        }

    }
}
