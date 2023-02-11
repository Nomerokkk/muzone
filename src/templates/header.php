<? include 'vars.php'; ?>

<!DOCTYPE html>
<html lang="ru">
<head>
	<meta charset="UTF-8">
	<title>Muzone</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,400;0,700;0,900;1,300;1,400&display=swap" rel="stylesheet">

	<link rel="stylesheet" href="<?= $target; ?>/css/style.css">
</head>
<body>
	<div class="wrapper">
		<header class="header j-header">
			<div class="container">
				<div class="header__wrapper">
					<a href="/" class="header__logo">
						<img src="<?= $target; ?>/img/logo.png" srcset="<?= $target; ?>/img/logo@2x.png" alt="">
					</a>
					<div class="header__menu" id="menu">
						<div class="header__menu-inner">
							<nav class="header__nav">
								<ul class="header__nav-list">
									<? foreach($menu as $item) {
										$url = $item['url'];
										$title = $item['title'];
									?>
										<li class="header__nav-li">
											<a href="<?= $url; ?>" class="header__nav-a j-scroll">
												<?= $title; ?>
											</a>
										</li>
									<? } ?>
								</ul>
							</nav>
							<div class="header__info">
								<a href="#contacts" class="header__address j-scroll">
									<svg>
										<use xlink:href="<?= $target; ?>/img/icons.svg#marker"/>
									</svg>
									як нас знайти
								</a>
								<a href="tel:<?= $phone; ?>" class="header__phone">
									<?= $phone; ?>
								</a>
							</div>
							<div class="header__social">
								<div class="social">
									<ul class="social__list">
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
					<div class="header__toggle" data-target="#menu">
						<span></span><span></span><span></span>
					</div>
				</div>
			</div>
		</header>