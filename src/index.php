<? include 'templates/header.php'; ?>

    <section class="banner" id="banner">
        <div class="container">
            <div class="banner__wrapper row">
                <div class="banner__text col">
                    <svg class="banner__line line">
                        <use xlink:href="<?= $target; ?>/img/icons.svg#line1"/>
                    </svg>
                    <div class="banner__kv banner__kv--1"></div>
                    <div class="banner__circle"></div>
                    <div class="banner__text-inner">
                        <div class="banner__subtitle j-wow j-wow-top" data-delay=".2">— Заснована в Одесі —</div>
                        <h1 class="banner__title j-wow j-wow-left">Нова музична школа</h1>
                        <div class="banner__desc j-wow j-wow-bottom" data-delay=".2">
                            <p>Навчись співати чи грати на будь-якому музичному інструменті</p>
                        </div>
                        <form class="banner__form form-phone j-form" novalidate>
                            <div class="phone j-phone">
                                <div class="phone__label">
                                    <div class="phone__item j-phone-bl active">
                                        <input name="your_phone" type="tel" class="phone__input j-phone-mask" placeholder="Телефон" required>
                                    </div>
                                    <div class="phone__item j-phone-bl">
                                        <input name="your_telegram" type="tel" class="phone__input" placeholder="Telegram">
                                    </div>
                                    <div class="phone__item j-phone-bl">
                                        <input name="your_viber" type="tel" class="phone__input" placeholder="Viber">
                                    </div>
                                </div>
                                <div class="phone__arrow" data-target="#phone-list1">
                                    <svg>
                                        <use xlink:href="<?= $target; ?>/img/icons.svg#arrow"/>
                                    </svg>
                                </div>
                                <ul class="phone__list" id="phone-list1">
                                    <li class="phone__list-li">
                                        <div class="phone__list-item phone__list-item--phone j-phone-item active">
                                            <div class="phone__list-icon">
                                                <svg>
                                                    <use xlink:href="<?= $target; ?>/img/icons.svg#phone"/>
                                                </svg>
                                            </div>
                                            <div class="phone__list-title">
                                                Телефон
                                            </div>
                                        </div>
                                    </li>
                                    <li class="phone__list-li">
                                        <div class="phone__list-item phone__list-item--telegram j-phone-item">
                                            <div class="phone__list-icon">
                                                <svg>
                                                    <use xlink:href="<?= $target; ?>/img/icons.svg#telegram"/>
                                                </svg>
                                            </div>
                                            <div class="phone__list-title">
                                                Telegram
                                            </div>
                                        </div>
                                    </li>
                                    <li class="phone__list-li">
                                        <div class="phone__list-item phone__list-item--viber j-phone-item">
                                            <div class="phone__list-icon">
                                                <svg>
                                                    <use xlink:href="<?= $target; ?>/img/icons.svg#viber"/>
                                                </svg>
                                            </div>
                                            <div class="phone__list-title">
                                                Viber
                                            </div>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                            <button type="submit" class="form-phone__btn">
                                Записатись
                            </button>
                        </form>
                    </div>
                </div>
                <div class="banner__imgs col">
                    <div class="banner-imgs">
                        <div class="banner__kv banner__kv--2"></div>
                        <div class="banner__kv banner__kv--3"></div>
                        <svg class="banner-imgs__line line">
                            <use xlink:href="<?= $target; ?>/img/icons.svg#line1"/>
                        </svg>
                        <div class="banner-imgs__bl banner-imgs__bl--1 j-wow j-wow-bottom">
                            <picture class="banner-imgs__picture">
                                <img src="<?= $target; ?>/img/banner__img1.jpg" srcset="<?= $target; ?>/img/banner__img1@2x.jpg 2x" alt="">
                            </picture>
                        </div>
                        <div class="banner-imgs__bl banner-imgs__bl--2 j-wow j-wow-bottom" data-delay=".1">
                            <picture class="banner-imgs__picture">
                                <img src="<?= $target; ?>/img/banner__img2.jpg" srcset="<?= $target; ?>/img/banner__img2@2x.jpg 2x" alt="">
                            </picture>
                        </div>
                        <div class="banner-imgs__bl banner-imgs__bl--3 j-wow j-wow-bottom" data-delay=".2">
                            <picture class="banner-imgs__picture">
                                <img src="<?= $target; ?>/img/banner__img3.jpg" srcset="<?= $target; ?>/img/banner__img3@2x.jpg 2x" alt="">
                            </picture>
                        </div>
                        <div class="banner-imgs__bl banner-imgs__bl--4 j-wow j-wow-bottom" data-delay=".3">
                            <a href="#contacts" class="banner-imgs__address j-scroll">
                                <svg class="banner-imgs__address-svg">
                                    <use xlink:href="<?= $target; ?>/img/icons.svg#marker"/>
                                </svg>
                                <div class="banner-imgs__address-how">
                                    Як нас знайти
                                    <svg>
                                        <use xlink:href="<?= $target; ?>/img/icons.svg#play"/>
                                    </svg>
                                </div>
                                <div class="banner-imgs__address-title">
                                    Odesa
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="services" id="services">
        <div class="container">
            <svg class="services__line1 line">
                <use xlink:href="<?= $target; ?>/img/icons.svg#line2"/>
            </svg>
            <svg class="services__line2 line">
                <use xlink:href="<?= $target; ?>/img/icons.svg#line2"/>
            </svg>
            <svg class="services__line3 line">
                <use xlink:href="<?= $target; ?>/img/icons.svg#line2"/>
            </svg>
            <div class="title-sec">Шо взагалі є?</div>
            <div class="services__wrapper">
                <? $services = [
                    1 => [
                        'img' => $target . '/img/services/1.jpg',
                        'img2x' => $target . '/img/services/1@2x.jpg',
                        'title' => 'Барабани',
                        'desc' => '<p>Тут дуже короткий опис послуги. Тут дуже короткий опис послуги. Тут дуже короткий опис послуги. Тут дуже короткий опис послуги. Тут дуже короткий опис послуги. Тут дуже короткий опис послуги. Тут дуже короткий опис послуги.</p><p>Тут дуже короткий опис послуги. Тут дуже короткий опис послуги. Тут дуже короткий опис послуги. </p>',
                    ],
                    2 => [
                        'img' => $target . '/img/services/2.jpg',
                        'img2x' => $target . '/img/services/2@2x.jpg',
                        'title' => 'Вокал',
                        'desc' => '<p>Тут дуже короткий опис послуги. Тут дуже короткий опис послуги. Тут дуже короткий опис послуги. Тут дуже короткий опис послуги. Тут дуже короткий опис послуги. Тут дуже короткий опис послуги. Тут дуже короткий опис послуги.</p><p>Тут дуже короткий опис послуги. Тут дуже короткий опис послуги. Тут дуже короткий опис послуги. </p>',
                    ],
                    3 => [
                        'img' => $target . '/img/services/3.jpg',
                        'img2x' => $target . '/img/services/3@2x.jpg',
                        'title' => 'Клавішні',
                        'desc' => '<p>Тут дуже короткий опис послуги. Тут дуже короткий опис послуги. Тут дуже короткий опис послуги. Тут дуже короткий опис послуги. Тут дуже короткий опис послуги. Тут дуже короткий опис послуги. Тут дуже короткий опис послуги.</p><p>Тут дуже короткий опис послуги. Тут дуже короткий опис послуги. Тут дуже короткий опис послуги. </p>',
                    ],
                    4 => [
                        'img' => $target . '/img/services/4.jpg',
                        'img2x' => $target . '/img/services/4@2x.jpg',
                        'title' => 'Гітара',
                        'desc' => '<p>Тут дуже короткий опис послуги. Тут дуже короткий опис послуги. Тут дуже короткий опис послуги. Тут дуже короткий опис послуги. Тут дуже короткий опис послуги. Тут дуже короткий опис послуги. Тут дуже короткий опис послуги.</p><p>Тут дуже короткий опис послуги. Тут дуже короткий опис послуги. Тут дуже короткий опис послуги. </p>',
                    ],
                    5 => [
                        'img' => $target . '/img/services/5.jpg',
                        'img2x' => $target . '/img/services/5@2x.jpg',
                        'title' => 'Укулеле',
                        'desc' => '<p>Тут дуже короткий опис послуги. Тут дуже короткий опис послуги. Тут дуже короткий опис послуги. Тут дуже короткий опис послуги. Тут дуже короткий опис послуги. Тут дуже короткий опис послуги. Тут дуже короткий опис послуги.</p><p>Тут дуже короткий опис послуги. Тут дуже короткий опис послуги. Тут дуже короткий опис послуги. </p>',
                    ],
                    6 => [
                        'img' => $target . '/img/services/6.jpg',
                        'img2x' => $target . '/img/services/6@2x.jpg',
                        'title' => 'Саксофон',
                        'desc' => '<p>Тут дуже короткий опис послуги. Тут дуже короткий опис послуги. Тут дуже короткий опис послуги. Тут дуже короткий опис послуги. Тут дуже короткий опис послуги. Тут дуже короткий опис послуги. Тут дуже короткий опис послуги.</p><p>Тут дуже короткий опис послуги. Тут дуже короткий опис послуги. Тут дуже короткий опис послуги. </p>',
                    ],
                ];
                foreach($services as $i => $item) { 
                    $img = $item['img'];
                    $img2x = $item['img2x'];
                    $title = $item['title'];
                    $desc = $item['desc'];   
                ?>
                    <div class="services-item">
                        <div class="services-item__wrapper">
                            <div class="services-item__img">
                                <div class="services-item__img-inner">
                                    <div class="services-item__number"><?= $i; ?>.</div>
                                    <picture class="services-item__picture j-wow j-wow-class">
                                        <img src="<?= $img; ?>" srcset="<?= $img2x; ?> 2x" alt="" loading="lazy">
                                    </picture>
                                </div>
                            </div>
                            <div class="services-item__text">
                                <h2 class="services-item__title j-wow j-wow-right"><?= $title; ?></h2>
                                <div class="services-item__desc">
                                    <?= $desc; ?>
                                </div>
                                <button type="button" data-fancybox data-src="#modal" class="services-item__link" data-theme="<?= $title; ?>">
                                    <div class="services-item__link-title">
                                        <b>Записатись</b> на пробне заняття
                                    </div>
                                    <div class="services-item__link-arrow">
                                        <svg>
                                            <use xlink:href="<?= $target; ?>/img/icons.svg#arrow2"/>
                                        </svg>
                                    </div>
                                </button>
                            </div>
                        </div>
                    </div>
                <? } ?>
            </div>
        </div>
    </section>

    <section class="cost" id="cost">
        <svg class="cost__line1 line">
            <use xlink:href="<?= $target; ?>/img/icons.svg#line2"/>
        </svg>
        <svg class="cost__line2 line">
            <use xlink:href="<?= $target; ?>/img/icons.svg#line2"/>
        </svg>
        <div class="container">
            <h3 class="title-sec">Вартість</h3>
            <div class="cost__desc desc-sec">
                <p>Оберіть напрямок, в якому цікаво зараз розвиватись:</p>
            </div>
            <div class="tabs">
                <ul class="tabs__list">
                    <? $tabs = [
                        'Барабани',
                        'Вокал',
                        'Клавішні',
                        'Гітара',
                        'Укулеле',
                        'Саксофон',
                    ];
                    foreach($tabs as $i => $item) { 
                        if($i == 0) {
                            $class = 'active';
                        } else {
                            $class = '';
                        }
                    ?>
                        <li class="tabs__li j-wow j-wow-right" data-delay="<?= $i * .1; ?>">
                            <div class="tabs__item <?= $class; ?>" data-tab="#tab1-<?= $i; ?>">
                                <?= $item; ?>
                            </div>
                        </li>
                    <? } ?>
                </ul>
            </div>
            <label class="cost-checkbox">
                <input type="checkbox" class="j-cost-checkbox">
                <div class="cost-checkbox__bl">
                    <div class="cost-checkbox__title">Для дорослих</div>
                    <div class="cost-checkbox__toggle">
                        <div class="cost-checkbox__toggle-circle"></div>
                    </div>
                    <div class="cost-checkbox__title">Для дітей</div>
                </div>
            </label>
            <div class="cost__wrapper j-wow j-wow-bottom">
                <? $tabs = [
                    'Барабани',
                    'Вокал',
                    'Клавішні',
                    'Гітара',
                    'Укулеле',
                    'Саксофон',
                ];
                foreach($tabs as $i => $item) { 
                    if($i == 0) {
                        $class = 'active';
                    } else {
                        $class = '';
                    }    
                ?>
                    <div class="cost__tab j-tab-wrapper <?= $class; ?>" id="tab1-<?= $i; ?>">
                        <div class="row">
                            <? $cart = [
                                0 => [
                                    'promo' => '20% OFF',
                                    'price' => '2 200',
                                    'promo_price' => '1 700',
                                    'count' => 'за 4 заняття',
                                    'type' => 'Індивідуальні',
                                    'age' => 'adults',
                                ],
                                1 => [
                                    'promo' => '20% OFF',
                                    'price' => '3 800',
                                    'promo_price' => '3 200',
                                    'count' => 'за 8 заняття',
                                    'type' => 'Індивідуальні',
                                    'age' => 'adults',
                                ],
                                2 => [
                                    'price' => '1 400',
                                    'count' => 'за 4 заняття',
                                    'type' => 'Групові',
                                    'age' => 'adults',
                                ],
                                3 => [
                                    'promo' => '20% OFF',
                                    'price' => '1 400',
                                    'promo_price' => '1 100',
                                    'count' => 'за 4 заняття',
                                    'type' => 'Індивідуальні',
                                    'age' => 'children',
                                ],
                                4 => [
                                    'promo' => '20% OFF',
                                    'price' => '2 600',
                                    'promo_price' => '2 100',
                                    'count' => 'за 8 заняття',
                                    'type' => 'Індивідуальні',
                                    'age' => 'children',
                                ],
                                5 => [
                                    'price' => '1 100',
                                    'count' => 'за 4 заняття',
                                    'type' => 'Групові',
                                    'age' => 'children',
                                ],
                            ];
                            foreach($cart as $i => $item) { 
                                $promo = $item['promo'];
                                $price = $item['price'];
                                $promo_price = $item['promo_price'];
                                $count = $item['count'];
                                $type = $item['type'];
                                $age = $item['age'];

                                if($age == 'adults') {
                                    $class = 'age-adults';
                                } else {
                                    $class = 'age-children';
                                }
                            ?>
                                <div class="col">
                                    <div class="cost-item j-cost-item <?= $class; ?>">
                                        <? if($promo) { ?>
                                            <div class="cost-item__promo"><?= $promo; ?></div>
                                        <? } ?>
                                        <div class="cost-item__price">
                                            ₴
                                            <span>
                                                <? if($promo_price) {
                                                    echo $promo_price;
                                                } else {
                                                    echo $price;
                                                } ?>
                                            </span>
                                        </div>
                                        <? if($promo_price) { ?>
                                            <div class="cost-item__promo-price">₴<?= $price; ?></div>
                                        <? } ?>
                                        <div class="cost-item__count"><?= $count; ?></div>
                                        <div class="cost-item__bottom">
                                            <div class="cost-item__type"><?= $type; ?></div>
                                            <div class="cost-item__btn">
                                                <button type="button" class="btn" data-src="#modal" data-fancybox data-theme="Назва пакета та інфо">Придбати</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            <? } ?>
                        </div>
                    </div>
                <? } ?>
            </div>
        </div>
    </section>

    <section class="gift" id="gift">
        <svg class="gift__line1 line">
            <use xlink:href="<?= $target; ?>/img/icons.svg#line2"/>
        </svg>
        <svg class="gift__line2 line">
            <use xlink:href="<?= $target; ?>/img/icons.svg#line2"/>
        </svg>
        <div class="container">
            <div class="title-sec">Подарунковий сертифікат</div>
            <div class="gift__desc desc-sec">
                <p>Вартість сертифікату така сама як і в абонімента. Тож оберіть той напрямок, який вас цікавить, або зателефонуйте / напішіть нам і ми з радістю допоможемо зробити вибір 🙂</p>
            </div>
            <div class="gift__sert">
                <svg class="gift__sert-line1 line">
                    <use xlink:href="<?= $target; ?>/img/icons.svg#line2"/>
                </svg>
                <svg class="gift__sert-line2 line">
                    <use xlink:href="<?= $target; ?>/img/icons.svg#line2"/>
                </svg>
                <div class="gift__imgs">
                    <? $services = [
                        1 => [
                            'img' => $target . '/img/services/6.jpg',
                            'img2x' => $target . '/img/services/6@2x.jpg',
                        ],
                        2 => [
                            'img' => $target . '/img/services/7.jpg',
                            'img2x' => $target . '/img/services/7@2x.jpg',
                        ],
                        3 => [
                            'img' => $target . '/img/services/3.jpg',
                            'img2x' => $target . '/img/services/3@2x.jpg',
                        ],
                        4 => [
                            'img' => $target . '/img/services/4.jpg',
                            'img2x' => $target . '/img/services/4@2x.jpg',
                        ],
                        5 => [
                            'img' => $target . '/img/services/5.jpg',
                            'img2x' => $target . '/img/services/5@2x.jpg',
                        ],
                        6 => [
                            'img' => $target . '/img/services/2.jpg',
                            'img2x' => $target . '/img/services/2@2x.jpg',
                        ],
                    ];
                    foreach($services as $i => $item) { 
                        $img = $item['img'];
                        $img2x = $item['img2x']; 
                    ?>
                        <div class="gift__img gift__img--<?= $i; ?> j-wow j-wow-bottom" data-delay="<?= $i * .2; ?>">
                            <img src="<?= $img; ?>" srcset="<?= $img2x; ?> 2x" alt="" loading="lazy">
                        </div>
                    <? } ?>
                </div>
                <div class="gift__inner">
                    <div class="gift__logo">
                        <img src="<?= $target; ?>/img/logo-white.png" srcset="<?= $target; ?>/img/logo-white@2x.png 2x" alt="" loading="lazy">        
                    </div>
                    <div class="gift__title j-wow j-wow-bottom">
                        Подарунковий сертифікат
                    </div>
                    <div class="gift__btn">
                        <button type="button" class="btn btn--green" data-fancybox data-src="#modal" data-theme="Подарунковий сертифікат">ПРИДБАТИ</button>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="reviews j-reviews-slider" id="reviews">
        <svg class="reviews__line1 line">
            <use xlink:href="<?= $target; ?>/img/icons.svg#line2"/>
        </svg>
        <div class="container">
            <div class="reviews__top">
                <div class="title-sec j-wow j-wow-left">
                    Що кажуть про нас наші учні
                </div>
                <div class="reviews__arrows">
                    <div class="arrow arrow--prev j-prev">
                        <svg>
                            <use xlink:href="<?= $target; ?>/img/icons.svg#arrow3"/>
                        </svg>
                    </div>
                    <div class="arrow arrow--next j-next">
                        <svg>
                            <use xlink:href="<?= $target; ?>/img/icons.svg#arrow3"/>
                        </svg>
                    </div>
                </div>
            </div>
            <div class="reviews__slider">
                <div class="reviews__slider-wrapper">
                    <? for($i = 0; $i < 8; $i++) { ?>
                        <div class="reviews__slider-slide">
                            <a href="#" class="reviews-item">
                                <div class="reviews-item__img">
                                    <img src="<?= $target; ?>/img/banner__img2@2x.jpg" alt="" loading="lazy">
                                </div>
                                <div class="reviews-item__title">
                                    <svg>
                                        <use xlink:href="<?= $target; ?>/img/icons.svg#twitter"/>
                                    </svg>
                                    @Ralph_Keller
                                </div>
                            </a>
                        </div>
                    <? } ?>
                </div>
            </div>
            <div class="reviews__video" data-fancybox data-src="https://www.youtube.com/watch?v=vWJa5gnhEg4">
                <img src="<?= $target; ?>/img/services/6@2x.jpg" alt="" loading="lazy">
                <div class="reviews__play">
                    <svg>
                        <use xlink:href="<?= $target; ?>/img/icons.svg#play2"/>
                    </svg>
                </div>
            </div>
        </div>
    </section>

    <section class="trial" id="trial">
        <div class="container">
            <div class="trial__wrapper">
                <div class="trial__img">
                    <div class="trial__bg">
                        <img src="<?= $target; ?>/img/trial.jpg" srcset="<?= $target; ?>/img/trial@2x.jpg 2x" alt="" loading="lazy">
                    </div>
                    <div class="trial__bl trial__bl--1 j-wow j-wow-top">
                        <div class="trial__title">
                            60% OFF
                        </div>
                        <div class="trial__subtitle">
                            <span>на перше</span>
                            індивідуальне
                            заняття
                        </div>
                    </div>
                    <div class="trial__bl trial__bl--2 j-wow j-wow-bottom">
                        <div class="trial__title">
                            Free
                        </div>
                        <div class="trial__subtitle">
                            <span>перше</span>
                            групове
                            заняття
                        </div>
                    </div>
                    <form class="trial__form-tablet form-phone j-form" novalidate>
                        <div class="phone j-phone">
                            <div class="phone__label">
                                <div class="phone__item j-phone-bl active">
                                    <input name="your_phone" type="tel" class="phone__input j-phone-mask" placeholder="Телефон" required>
                                </div>
                                <div class="phone__item j-phone-bl">
                                    <input name="your_telegram" type="tel" class="phone__input" placeholder="Telegram">
                                </div>
                                <div class="phone__item j-phone-bl">
                                    <input name="your_viber" type="tel" class="phone__input" placeholder="Viber">
                                </div>
                            </div>
                            <div class="phone__arrow" data-target="#phone-list2">
                                <svg>
                                    <use xlink:href="<?= $target; ?>/img/icons.svg#arrow"/>
                                </svg>
                            </div>
                            <ul class="phone__list" id="phone-list2">
                                <li class="phone__list-li">
                                    <div class="phone__list-item phone__list-item--phone j-phone-item active">
                                        <div class="phone__list-icon">
                                            <svg>
                                                <use xlink:href="<?= $target; ?>/img/icons.svg#phone"/>
                                            </svg>
                                        </div>
                                        <div class="phone__list-title">
                                            Телефон
                                        </div>
                                    </div>
                                </li>
                                <li class="phone__list-li">
                                    <div class="phone__list-item phone__list-item--telegram j-phone-item">
                                        <div class="phone__list-icon">
                                            <svg>
                                                <use xlink:href="<?= $target; ?>/img/icons.svg#telegram"/>
                                            </svg>
                                        </div>
                                        <div class="phone__list-title">
                                            Telegram
                                        </div>
                                    </div>
                                </li>
                                <li class="phone__list-li">
                                    <div class="phone__list-item phone__list-item--viber j-phone-item">
                                        <div class="phone__list-icon">
                                            <svg>
                                                <use xlink:href="<?= $target; ?>/img/icons.svg#viber"/>
                                            </svg>
                                        </div>
                                        <div class="phone__list-title">
                                            Viber
                                        </div>
                                    </div>
                                </li>
                            </ul>
                        </div>
                        <button type="submit" class="form-phone__btn">
                            Записатись
                        </button>
                    </form>
                </div>
                <form class="trial__form form j-form j-wow j-wow-right" novalidate>
                    <div class="title-sec">Пробне заняття</div>
                    <div class="desc-sec">
                        <p>Для новачків в музиці, або тих хто сумнівається для якого напрямку хоче придбати абонемент, є варіанти пробного заняття:</p>
                    </div>
                    <div class="trial__form-form">
                        <label class="input">
                            <input name="your_name" type="text" placeholder="Ім’я" required>
                            <div class="input__icon">
                                <svg width="18" height="20">
                                    <use xlink:href="<?= $target; ?>/img/icons.svg#user"/>
                                </svg>
                            </div>
                        </label>
                        <label class="input">
                            <input name="your_email" type="email" placeholder="E-mail" required>
                            <div class="input__icon">
                                <svg width="22" height="18">
                                    <use xlink:href="<?= $target; ?>/img/icons.svg#email"/>
                                </svg>
                            </div>
                        </label>
                        <div class="form__btn">
                            <button type="submit" class="btn">Записатись</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </section>

    <section class="contacts" id="contacts">
        <div class="container">
            <div class="title-sec">Контакти</div>
        </div>
        <div class="contacts__map">
            <div class="contacts__iframe">
                <iframe class="contacts__iframe-inner" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2747.7862076040365!2d30.73357337270823!3d46.47274256862513!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x40c63182e89f1339%3A0x52a5175530c1ef29!2z0YPQuy4g0JHQvtC70YzRiNCw0Y8g0JDRgNC90LDRg9GC0YHQutCw0Y8sINCe0LTQtdGB0YHQsCwg0J7QtNC10YHRgdC60LDRjyDQvtCx0LvQsNGB0YLRjCwgNjUwMDA!5e0!3m2!1sru!2sua!4v1676044073442!5m2!1sru!2sua" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div>
            <div class="container">
                <div class="contacts__bl j-wow j-wow-bottom">
                    <div class="contacts__item">
                        <div class="contacts__item-title">Адреса:</div>
                        <div class="contacts__item-val">м. Одеса, вул. Велика Арнаутська</div>
                    </div>
                    <div class="contacts__item">
                        <div class="contacts__item-title">Графік роботи:</div>
                        <div class="contacts__item-val">Понеділок — Субота (9:00–21:00)</div>
                    </div>
                    <ul class="contacts__phones">
                        <li>
                            <a href="tel:+380 00 000 00 00">+380 00 000 00 00</a>
                        </li>
                        <li>
                            <a href="tel:+380 00 000 00 00">+380 00 000 00 00</a>
                        </li>
                    </ul>
                    <div class="contacts__social">
                        <div class="social">
                            <ul class="social__list">
                                <li class="social__li">
                                    <a href="#" class="social__a social__a--instagram" target="_blank">
                                        <svg>
                                            <use xlink:href="<?= $target; ?>/img/icons.svg#instagram"/>
                                        </svg>
                                    </a>
                                </li>
                                <li class="social__li">
                                    <a href="#" class="social__a social__a--facebook" target="_blank">
                                        <svg>
                                            <use xlink:href="<?= $target; ?>/img/icons.svg#facebook"/>
                                        </svg>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

<? include 'templates/footer.php'; ?>