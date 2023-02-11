		<footer class="footer">
			<div class="container">
				<div class="footer__wrapper">
					<a href="/" class="footer__logo">
						<img src="<?= $target; ?>/img/logo-white.png" srcset="<?= $target; ?>/img/logo-white@2x.png 2x" alt="" loading="lazy">
					</a>
					<div class="footer__menu">
						<ul class="footer__menu-list">
							<? foreach($menu as $item) {
								$url = $item['url'];
								$title = $item['title'];
							?>
								<li class="footer__menu-li">
									<a href="<?= $url; ?>" class="footer__menu-a j-scroll">
										<?= $title; ?>
									</a>
								</li>
							<? } ?>
						</ul>
					</div>
					<div class="footer__social">
						<div class="social social--green">
                            <ul class="social__list">
								<li class="social__li">
                                    <a href="#" class="social__a social__a--linkedin" target="_blank">
                                        <svg>
                                            <use xlink:href="<?= $target; ?>/img/icons.svg#linkedin"/>
                                        </svg>
                                    </a>
                                </li>
								<li class="social__li">
                                    <a href="#" class="social__a social__a--twitter" target="_blank">
                                        <svg>
                                            <use xlink:href="<?= $target; ?>/img/icons.svg#twitter"/>
                                        </svg>
                                    </a>
                                </li>
                                <li class="social__li">
                                    <a href="#" class="social__a social__a--instagram" target="_blank">
                                        <svg>
                                            <use xlink:href="<?= $target; ?>/img/icons.svg#instagram"/>
                                        </svg>
                                    </a>
                                </li>
                            </ul>
                        </div>
					</div>
				</div>
			</div>
		</footer>
	
	</div><!--end .wrapper-->
	
	<div class="modal" id="ok">
		<div class="modal__inner">
			<div class="modal__title j-wow-modal j-wow-bottom">
				Спасибо!
			</div>
			<div class="modal__desc j-wow-modalj-wow-bottom" data-delay=".2">
				Ваше сообщение успешно отправлено!
			</div>
		</div>
	</div>

	<div class="modal" id="modal">
		<div class="modal__inner">
			<div class="modal__title j-wow-modal j-wow-bottom">
				Замовити
			</div>
			<div class="modal__desc">
				Для замовлення заповніть форму нижче
			</div>
			<form class="modal__form form j-form" novalidate>
				<input name="theme" type="hidden" class="j-theme">
				<div class="phone j-phone">
					<div class="phone__label">
						<label class="phone__item input2 j-phone-bl active">
							<input name="your_phone" type="tel" class="phone__input j-phone-mask" placeholder="Телефон" required>
						</label>
						<label class="phone__item input2 j-phone-bl">
							<input name="your_telegram" type="tel" class="phone__input" placeholder="Telegram">
						</label>
						<label class="phone__item input2 j-phone-bl">
							<input name="your_viber" type="tel" class="phone__input" placeholder="Viber">
						</label>
					</div>
					<div class="phone__arrow" data-target="#phone-list3">
						<svg>
							<use xlink:href="<?= $target; ?>/img/icons.svg#arrow"/>
						</svg>
					</div>
					<ul class="phone__list" id="phone-list3">
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
				<label class="input2">
					<input name="your_count" type="text" placeholder="Кількість занять">
				</label>
				<div class="form__btn">
					<button type="submit" class="btn">Замовити</button>
				</div>
			</form>
		</div>
	</div>

	<script>
		const target = '<?= $target; ?>',
			lang = 'ua';
	</script>
	
	<script src="<?= $target; ?>/libs/jquery.min.js"></script>
	<script src="<?= $target; ?>/libs/gsap/gsap.min.js"></script>
	<script src="<?= $target; ?>/libs/gsap/ScrollTrigger.min.js"></script>
	<script src="<?= $target; ?>/libs/gsap/ScrollToPlugin.min.js"></script>
	<script src="<?= $target; ?>/libs/scroll.js"></script>
	<script src="<?= $target; ?>/libs/swiper/swiper.min.js"></script>
	<script src="<?= $target; ?>/libs/lazy/jquery.lazy.min.js"></script>
	<script src="<?= $target; ?>/libs/lazy/plugins/jquery.lazy.picture.min.js"></script>
	<script src="<?= $target; ?>/libs/jquery.maskedinput.min.js"></script>
	<script src="<?= $target; ?>/libs/fancybox/jquery.fancybox.min.js"></script>
	<script src="<?= $target; ?>/libs/svg4everybody.min.js"></script>
	<script src="<?= $target; ?>/js/common.js"></script>
	<script src="<?= $target; ?>/js/animation.js"></script>
	<script src="<?= $target; ?>/libs/form/jbvalidate.min.js"></script>
	<script src="<?= $target; ?>/js/form.js"></script>
</body>
</html>