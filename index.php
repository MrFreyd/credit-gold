
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
					<li class="headerCenter__li"><a class="headerCenter__link" href="/zaymy/">Все займы</a></li>
					<li class="headerCenter__li"><a class="headerCenter__link" href="/zaymy/na-kartu/">Займы на карту</a></li>
					<li class="headerCenter__li"><a class="headerCenter__link" href="/zaymy/na-qiwi/">Займы на киви кошелек</a></li>					
					<li class="headerCenter__li"><a class="headerCenter__link" href="/zaymy/pod-zalog/">Займ под залог</a></li>
					<li class="headerCenter__li"><a class="headerCenter__link" href="/error.html">Статьи</a></li>
					<li class="headerCenter__li"><a class="headerCenter__link" href="#" id="about">О нас</a></li>
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
			<li class="navigation__li"><a class="navigation__link" href="/zaymy/">Все займы</a></li>
			<li class="navigation__li"><a class="navigation__link" href="/zaymy/na-kartu/">Займы на карту</a></li>
			<li class="navigation__li"><a class="navigation__link" href="/zaymy/na-qiwi/">Займы на киви кошелек</a></li>
			<li class="navigation__li"><a class="navigation__link" href="/zaymy/pod-zalog/">Займ под залог</a></li>
			<li class="navigation__li"><a class="navigation__link" href="/error.html">Статьи</a></li>
			<li class="navigation__li"><a class="navigation__link" href="#" id="aboutMobile">О нас</a></li>
		</ul>
	</nav>
	<section>
		<div class="general">
			<div class="general__block left">
				<h1 class="general__title">Возьми кредит получи печеньку</h1>
				<p class="general__p">печеька на дороге не валяется</p>
				<p class="general__p">печеньку можно сьесть с чаем</p>
				<p class="general__p" >Нет денег на чай? Возьми кредит!</p>
				<a href="./zaymy/"><div class="general__button">Оформить кредит</div></a>
			</div>
		</div>		
	</section>
	<section class="greenBlock">
		<div class="nameSection">
			<center>
				<h2 class="nameSection__title blue">Мы собрали все предложения в одном месте</h2>
				<div class="nameSection__line">
				</div>
			</center>
		</div>
		<div class="description">
			<div class="description__block">
				<img class="description__img" src="./img/procent.png">
				<p class="description__p">Самые низкие проценты</p>
			</div>
			<div class="description__block">
				<img class="description__img" src="./img/home.png">
				<p class="description__p">Оформление кредита не выходя из дома</p>
			</div>
			<div class="description__block">
				<img class="description__img" src="./img/moment.png">
				<p class="description__p">Получение денег в кротчайщие сроки</p>
			</div>
		</div>
	</section>
	<section class="whiteBlock">
		<div class="nameSection">
			<center>
				<h2 class="nameSection__title blue">Лучшие займы</h2>
				<div class="nameSection__line">
				</div>
			</center>
		</div>
		<div class="top">
			<div class="top__block">
				<?php
				$conect = mysqli_connect('localhost','root','','credit-gold');
				$elements = mysqli_query($conect,"SELECT `name`,`img`,`term_ot`,`term_do`, `sum`, `procent`, `link` FROM `zaymy` WHERE id>17 and id<22 ORDER BY `pay` ASC  LIMIT 4");
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
			<div class="top__block">
				
				<?php
				$conect = mysqli_connect('localhost','root','','credit-gold');
				$elements = mysqli_query($conect,"SELECT `name`,`img`,`term_ot`,`term_do`, `sum`, `procent`, `link` FROM `zaymy` WHERE id>21 and id<26 LIMIT 4");
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
	</section>
	<section class="greenBlock">
		<div class="nameSection">
			<center>
				<h2 class="nameSection__title blue">Финансовые новости</h2>
				<div class="nameSection__line">
				</div>
			</center>
		</div>
		<div class="news">
			<div class="news__row">
				<a href="/error.html" class="news__element">
					<img class="news__img" src="./img/nalogi.png">
					<p class="news__p">Банки начнут передачу в ФНС данных о кошельках</p>
					<p class="news__p time">23.12.2020</p>
				</a>
				<a href="/error.html" class="news__element">
					<img class="news__img" src="./img/bugalter.png">
					<p class="news__p">Банк России не стал снижать ставку</p>
					<p class="news__p time">21.12.2020</p>
				</a>
				<a href="/error.html" class="news__element">
					<img class="news__img" src="./img/gangsters.png">
					<p class="news__p">Как не стать жертвой мошенников при продаже квартиры</p>
					<p class="news__p time">20.12.2020</p>
				</a>
			</div>
			<div class="news__row">
				<a href="/error.html" class="news__element">
					<img class="news__img" src="./img/storm.png">
					<p class="news__p">Что ждет бизнес в новом году</p>
					<p class="news__p time">19.12.2020</p>
				</a>
				<a href="/error.html" class="news__element">
					<img class="news__img" src="./img/zdelka.png">
					<p class="news__p">Аналитики оценили чистый отток средств россиян из банков</p>
					<p class="news__p time">19.12.2020</p>
				</a>
				<a href="/error.html" class="news__element">
					<img class="news__img" src="./img/zp.png">
					<p class="news__p">Юрист посоветовала россиянам погасить долги до Нового года</p>
					<p class="news__p time">18.12.2020</p>
				</a>
			</div>
		</div>
	</section>
	<section class="whiteBlock">
		<div class="nameSection">
			<center>
				<h2 class="nameSection__title blue">О нас</h2>
				<div class="nameSection__line">
				</div>
			</center>
		</div>
		<div class="about">
			<p class="about__p">
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