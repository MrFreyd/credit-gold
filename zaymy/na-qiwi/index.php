<!DOCTYPE html>
<html>
<head>
	<title>work</title>
	<meta charset = "utf-8">
	<link rel="stylesheet" type="text/css" href="./css/style.css">
	<link rel="stylesheet" type="text/css" href="./css/modification.css">
	<meta name = "viewport" content = "width=device-width, initial-scale=1.0">
	
</head>
<body>

	<header>
		<div class="headerCenter">
			<div class="logo">
				<a href="/"><img class="logo__img" src="./img/logo.png" alt=""></a>
			</div>
			<div class="headerCenter__menu desktop">
				<ul class="headerCenter__ul">
					<li class="headerCenter__li"><a class="headerCenter__link" href="/error.html">Оформить кредит</a></li>
					<li class="headerCenter__li"><a class="headerCenter__link" href="/zaymy">Оформить займ</a></li>
					<li class="headerCenter__li"><a class="headerCenter__link" href="/error.html">Дебетовые карты</a></li>
					<li class="headerCenter__li"><a class="headerCenter__link" href="/error.html">Открыть счет для бизнеса</a></li>
					<li class="headerCenter__li"><a class="headerCenter__link" href="/error.html">Статьи</a></li>
					<li class="headerCenter__li"><a class="headerCenter__link" href="/">О нас</a></li>
				</ul>
			</div>
				
			</div>
			<div class="headerCenter__clickBlock mobile">
				<div class="headerCenter__click" id="click">
				
				</div>
			</div>
		
		
	</header>
	<nav class="navigation">
		<ul class="navigation__ul">
			<li class="navigation__li"><a class="navigation__link" href="/error.html">Оформить кредит</a></li>
			<li class="navigation__li"><a class="navigation__link" href="/zaymy">Оформить займ</a></li>
			<li class="navigation__li"><a class="navigation__link" href="/error.html">Дебетовые карты</a></li>
			<li class="navigation__li"><a class="navigation__link" href="/error.html">Открыть счет для бизнеса</a></li>
			<li class="navigation__li"><a class="navigation__link" href="/error.html">Статьи</a></li>
			<li class="navigation__li"><a class="navigation__link" href="/">О нас</a></li>
		</ul>
	</nav>
	<section class="list">
		<div class="list__text">
			<h1 class="list__title first">Заголовок из сяяяя ся ся ся ся сяяяяя</h1>
			<p class="list__p">
				Как принято считать, диаграммы связей освещают чрезвычайно интересные особенности картины в целом,
				однако конкретные выводы, разумеется, обнародованы. 
				В своём стремлении повысить качество жизни, они забывают,
				что понимание сути ресурсосберегающих технологий однозначно фиксирует необходимость поэтапного и последовательного развития общества.
				Предварительные выводы неутешительны: современная методология разработки играет определяющее значение для поставленных обществом задач.
				Прежде всего, убеждённость некоторых оппонентов требует от нас анализа системы обучения кадров, соответствующей насущным потребностям!
				Являясь всего лишь частью общей картины, акционеры крупнейших компаний призывают нас к новым свершениям, которые, в свою очередь,
				должны быть объединены в целые кластеры себе подобных. Значимость этих проблем настолько очевидна, 
				что социально-экономическое развитие однозначно фиксирует необходимость экспериментов, 
				поражающих по своей масштабности и грандиозности.
			</p>
		</div>
		<div class="list__block">
			<aside class="list__aside">
				<h2 class="list__title">Условия</h2>
				<a href="/zaymy/na-qiwi/bez-karty/"><p class="list__p">Без карты</p></a>
				<a href="/zaymy/na-qiwi/bez-pasporta/"><p class="list__p">Без паспорта</p></a>
				<a href="/zaymy/na-qiwi/po-pasportu/"><p class="list__p">По паспорту</p></a>
				<a href="/zaymy/na-qiwi/bystro/"><p class="list__p">Быстро</p></a>
				<a href="/zaymy/na-qiwi/bez-proverok/"><p class="list__p">Без проверок</p></a>
				<a href="/zaymy/na-qiwi/s-plohoy-kreditnoy-istoriey/"><p class="list__p">С плохой кредитной историей</p></a>
				
			</aside>
			<div class="list__content">
				<div class="list__filter">
					<a href="/zaymy" class="list__button">Все займы</a>
					<a href="/zaymy/na-kartu/" class="list__button">На карту</a>
					<a href="/zaymy/nalichnymi/" class="list__button">Наличными</a>
					<a href="/zaymy/na-qiwi/" class="list__button">На киви кошелек</a>
					<a href="/zaymy/na-yandex-dengi/" class="list__button">На яндекс деньги</a>
					<a href="/zaymy/pod-zalog/" class="list__button">Под залог</a>
					<a href="/zaymy/luchshie/" class="list__button">Лучшее</a>
					<a href="/zaymy/do-zarplaty/" class="list__button">До зарплаты</a>
				</div>
				<div class="list__general">
					<div class="name desktop">
						<div class="name__element">
							<p class="name__p">Мфо</p>
						</div>
						<div class="name__element">
							<p class="name__p">Дневная ставка</p>
						</div>
						<div class="name__element">
							<p class="name__p">Сумма</p>
						</div>
						<div class="name__element">
							<p class="name__p">Срок</p>
						</div>
						<div class="name__element">
							<p class="name__p">Заявки</p>
						</div>
					</div>
					<div class="list__catalog block">

						<?php
						$conect = mysqli_connect('localhost','root','','credit-gold');
						$elements = mysqli_query($conect,"SELECT `name`,`img`,`term_ot`,`term_do`, `sum`, `procent`, `link` FROM `zaymy` WHERE `na_qiwi` = 'on'");
							while ($result_elements  = mysqli_fetch_array($elements)){	
								echo 
								'<div class="list__row">
									<div class="list__element">
										<img class="list__img" src="'.str_replace('.', '', $result_elements['img']).'.jpg">
									</div>
									<div class="list__element">
										<p class="list__pElement">'.$result_elements['procent'].'%</p>
									</div>
									<div class="list__element">
										<p class="list__pElement">до '.$result_elements['sum'].'</p>
									</div>
									<div class="list__element">
										<p class="list__pElement">от '.$result_elements['term_ot'].' до '.$result_elements['term_do'].' дней</p>
									</div>
									<div class="list__element">
										<a href = "'.$result_elements['link'].'"class="list__button getButton">оформить</a>
									</div>
									
								</div>';
								
							}
						?>
					</div>
					<div class="top none">
						<div class="top__block">
							<?php
								$conect = mysqli_connect('localhost','root','','credit-gold');
								$elements = mysqli_query($conect,"SELECT `name`,`img`,`term_ot`,`term_do`, `sum`, `procent`, `link` FROM `zaymy` WHERE `na_qiwi` = 'on'");
									while ($result_elements  = mysqli_fetch_array($elements)){	
										echo 
										'<div class="top__element">
											<img class="top__img" src="'.str_replace('.', '', $result_elements['img']).'.jpg">
											<div class="top__text">
												<h4 class="top__titleText">'.$result_elements['name'].'</h4>
												<p class="top__p">Срок: от '.$result_elements['term_ot'].' до '.$result_elements['term_do'].'</p>
												<p class="top__p">Сумма: до '.$result_elements['sum'].'</p>
												<p class="top__p">Процент: '.$result_elements['procent'].'% сутки</p>
												<a class="top__button" href="'.$result_elements['link'].'">Оформить</a>
											</div>
										</div>';
										
									}
								?>

						</div>
					</div>
			</div>
			<div class="recommendations">
					
					<div class="nameSection">
						<center>
							<h2 class="nameSection__title blue">Лучшие предложения</h2>
						</center>
					</div>
					<div class="recommendations__block">
						<div class="recommendations__element">
							<img class="recommendations__img" src="./img/dengiSrazu.png">
							<div class="recommendations__text">
								<h3 class="recommendations__title">Быстро деньги</h3>
								<p class="recommendations__p">Срок: 12 лет</p>
								<p class="recommendations__p">Сумма: до 300 рублей</p>
								<p class="recommendations__p">Процент: 1% сутки</p>
								<p class="recommendations__p">Возвраст: от 10 лет</p>
								<a href="#" class="recommendations__button">Оформить</a>
							</div>
						</div>
						<div class="recommendations__element">
							<img class="recommendations__img" src="./img/dengiSrazu.png">
							<div class="recommendations__text">
								<h3 class="recommendations__title">Быстро деньги</h3>
								<p class="recommendations__p">Срок: 12 лет</p>
								<p class="recommendations__p">Сумма: до 300 рублей</p>
								<p class="recommendations__p">Процент: 1% сутки</p>
								<p class="recommendations__p">Возвраст: от 10 лет</p>
								<a href="#" class="recommendations__button">Оформить</a>
							</div>
						</div>
						<div class="recommendations__element">
							<img class="recommendations__img" src="./img/dengiSrazu.png">
							<div class="recommendations__text">
								<h3 class="recommendations__title">Быстро деньги</h3>
								<p class="recommendations__p">Срок: 12 лет</p>
								<p class="recommendations__p">Сумма: до 300 рублей</p>
								<p class="recommendations__p">Процент: 1% сутки</p>
								<p class="recommendations__p">Возвраст: от 10 лет</p>
								<a href="#" class="recommendations__button">Оформить</a>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	
	</section>
	<footer class="footer">
		<div class="footer__center">
			<p class="footer__p">Все права защишены</p>
			<div class="footer__contact">
				<p class="footer__p">Email: gold.credit@mail.ru</p>
			</div>
		</div>
	</footer>
<script src="./js/jquery-3.3.1.js"></script>
<script src="./js/index.js"></script>
</body>
</html>