		<!-- Всплывающая форма Политики конфиденциальности -->
		<div class="popup-form" id="popupForm">
			<div class="form-content container">
				<div class="row justify-content-center align-items-center">
					<div class="col-md-9">
						<p class="mb-md-0">На на нашем сайте используются cookie-файлы, в том числе сервисов веб-аналитики. Используя сайт, вы соглашаетесь на <a href="/soglasie-na-obrabotku-personalnyh-dannyh.pdf" target="_blank">обработку персональных данных</a> при помощи cookie-файлов. Подробнее об обработке персональных данных вы можете узнать в <a href="/politika-konfidenczialnosti/" target="_blank">Политика конфиденциальности.</a></p>
					</div>
					<div class="col-md-1 text-md-end">
						<button id="closeBtn" class="btn btn-corporate-color-1">Понятно</button>
					</div>
				</div>	
			</div>
		</div>
		<script>
			document.addEventListener('DOMContentLoaded', function() {
				const popupForm = document.getElementById('popupForm');
				const closeBtn = document.getElementById('closeBtn');
				
				// Проверяем нужно ли показывать форму
				function shouldShowPopup() {
					const lastClosed = localStorage.getItem('popupLastClosed');
					
					// Если пользователь никогда не закрывал форму
					if (!lastClosed) return true;
					
					// Если прошло более 1 часа (3600000 миллисекунд) с последнего закрытия
					const now = new Date().getTime();
					return (now - parseInt(lastClosed)) > 3600000;
				}
				
				// Показываем форму если нужно
				if (shouldShowPopup()) {
					setTimeout(() => {
						popupForm.classList.add('active');
					}, 3000);
				}
				
				// Функция закрытия формы
				function closePopup() {
					popupForm.classList.remove('active');
					
					// Сохраняем время закрытия
					localStorage.setItem('popupLastClosed', new Date().getTime().toString());
				}
				
				// Закрытие по кнопке
				closeBtn.addEventListener('click', closePopup);
			});
		</script>
		<!-- /Всплывающая форма Политики конфиденциальности -->
		
		
		<!-- Callback Modal -->
		<div class="modal fade" id="callbackModal" tabindex="-1" aria-labelledby="callbackModalLabel" aria-hidden="true">
			<div class="modal-dialog modal-dialog-centered">
				<form method="post" action="<?php echo get_template_directory_uri(); ?>/mails/get_callback.php" class="modal-content">
					<div class="modal-header">
						<h5 class="modal-title" id="callbackModalLabel">Обратный звонок</h5>
						<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
					</div>
					<div class="modal-body">
						<div class="row">
							<div class="col">
								<p><small>Мы свяжемся с Вами в теченее 10 минут и ответим на все вопросы! Для звонка введите Ваше имя и телефон.</small></p>
							</div>
						</div>
						<div class="row">
							<div class="col-md-6 mb-3 mb-md-0">
								<input type="text" name="name" class="form-control" placeholder="Ваше имя">
							</div>
							<div class="col-md-6">
								<input type="text" name="phone" class="form-control telMask" placeholder="Ваш телефон*" required>
							</div>
						</div>
					</div>
					<div class="modal-footer" style="justify-content: center;">
						<div>
							<div class="form-check">
								<input class="form-check-input" type="checkbox" id="gridCheck" checked>
								<label class="form-check-label" for="gridCheck">
									<p class="mb-0"><small>Даю согласие на обработку персональных данных. Подробнее об обработке персональных данных в <a href="/politika-konfidenczialnosti/" target="_blank">Политике конфиденциальности.</a></small></p>
								</label>
							</div>
						</div>
						<div>
							<input type="hidden" id="g-recaptcha-response-callback" name="g-recaptcha-response">
							<button type="submit" class="btn btn-corporate-color-1 mx-auto">Жду звонка</button>
						</div>
					</div>
				</form>
			</div>
		</div>
		<!-- /Callback Modal -->
		
		
		<!-- Architector Modal -->
		<div class="modal fade" id="arhitectorModal" tabindex="-1" aria-labelledby="arhitectorModalLabel" aria-hidden="true">
			<div class="modal-dialog modal-dialog-centered">
				<form method="post" action="<?php echo get_template_directory_uri(); ?>/mails/get_architector.php" class="modal-content">
					<div class="modal-header">
						<h5 class="modal-title" id="arhitectorModalLabel">Консультация архитектора</h5>
						<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
					</div>
					<div class="modal-body">
						<div class="row">
							<div class="col">
								<p><small>Наш архитектор свяжемся с Вами в ближайшее время и проконсультирует по всем вопросам абсолютно бесплатно! Для консультации с архитектором оставьте Ваше имя и телефон.</small></p>
							</div>
						</div>
						<div class="row">
							<div class="col-md-6 mb-3 mb-md-0">
								<input type="text" name="name" class="form-control" placeholder="Ваше имя">
							</div>
							<div class="col-md-6">
								<input type="text" name="phone" class="form-control telMask" placeholder="Ваш телефон*" required>
							</div>
						</div>
					</div>
					<div class="modal-footer" style="justify-content: center;">
						<div>
							<div class="form-check">
								<input class="form-check-input" type="checkbox" id="gridCheck" checked>
								<label class="form-check-label" for="gridCheck">
									<p class="mb-0"><small>Даю согласие на обработку персональных данных. Подробнее об обработке персональных данных в <a href="/politika-konfidenczialnosti/" target="_blank">Политике конфиденциальности.</a></small></p>
								</label>
							</div>
						</div>
						<div>
							<input type="hidden" id="g-recaptcha-response-architector" name="g-recaptcha-response">
							<button type="submit" class="btn btn-corporate-color-1 mx-auto">Жду звонка</button>
						</div>
					</div>
				</form>
			</div>
		</div>
		<!-- /Architector Modal -->
		
		
		<!-- Ipoteka Modal -->
		<div class="modal fade" id="ipotekaModal" tabindex="-1" aria-labelledby="ipotekaModalLabel" aria-hidden="true">
			<div class="modal-dialog modal-dialog-centered">
				<form method="post" action="<?php echo get_template_directory_uri(); ?>/mails/get_ipoteka.php" class="modal-content">
					<div class="modal-header">
						<h5 class="modal-title" id="ipotekaModalLabel">Консультация по ипотеке</h5>
						<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
					</div>
					<div class="modal-body">
						<div class="row">
							<div class="col">
								<p><small>Наш специалист по ипотеке свяжемся с Вами в ближайшее время и проконсультирует по всем вопросам! Для консультации со специалистом оставьте Ваше имя и телефон.</small></p>
							</div>
						</div>
						<div class="row">
							<div class="col-md-6 mb-3 mb-md-0">
								<input type="text" name="name" class="form-control" placeholder="Ваше имя">
							</div>
							<div class="col-md-6">
								<input type="text" name="phone" class="form-control telMask" placeholder="Ваш телефон*" required>
							</div>
						</div>
					</div>
					<div class="modal-footer justify-content-center">
						<div>
							<div class="form-check">
								<input class="form-check-input" type="checkbox" id="gridCheck" checked>
								<label class="form-check-label" for="gridCheck">
									<p class="mb-0"><small>Даю согласие на обработку персональных данных. Подробнее об обработке персональных данных в <a href="/politika-konfidenczialnosti/" target="_blank">Политике конфиденциальности.</a></small></p>
								</label>
							</div>
						</div>
						<div>
							<input type="hidden" id="g-recaptcha-response-ipoteka" name="g-recaptcha-response">
							<button type="submit" class="btn btn-corporate-color-1 mx-auto">Жду звонка</button>
						</div>
					</div>
				</form>
			</div>
		</div>
		<!-- /Ipoteka Modal -->
		
		
		<!-- Director Modal -->
		<div class="modal fade" id="directorModal" tabindex="-1" aria-labelledby="directorModalLabel" aria-hidden="true">
			<div class="modal-dialog modal-dialog-centered">
				<form method="post" action="<?php echo get_template_directory_uri(); ?>/mails/get_director.php" class="modal-content">
					<div class="modal-header">
						<h5 class="modal-title" id="directorModalLabel">Задать вопрос Александру</h5>
						<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
					</div>
					<div class="modal-body">
						<!--div class="row">
							<div class="col">
								<p><small>Наш архитектор свяжемся с Вами в ближайшее время и проконсультирует по всем вопросам абсолютно бесплатно! Для консультации с архитектором оставьте Ваше имя и телефон.</small></p>
							</div>
						</div-->
						<div class="row">
							<div class="col-md-6 mb-3">
								<input type="text" name="name" class="form-control" placeholder="Ваше имя">
							</div>
							<div class="col-md-6 mb-3">
								<input type="text" name="phone" class="form-control telMask" placeholder="Ваш телефон*" required>
							</div>
						</div>
						<div class="row">
							<div class="col mb-3 mb-md-0">
								<textarea type="text" name="mes" class="form-control" placeholder="Ваш вопрос" required></textarea>
							</div>
						</div>
					</div>
					<div class="modal-footer justify-content-center">
						<div>
							<div class="form-check">
								<input class="form-check-input" type="checkbox" id="gridCheck" checked>
								<label class="form-check-label" for="gridCheck">
									<p class="mb-0"><small>Даю согласие на обработку персональных данных. Подробнее об обработке персональных данных в <a href="/politika-konfidenczialnosti/" target="_blank">Политике конфиденциальности.</a></small></p>
								</label>
							</div>
						</div>
						<div>
							<input type="hidden" id="g-recaptcha-response-director" name="g-recaptcha-response">
							<button type="submit" class="btn btn-corporate-color-1 mx-auto">Отправить</button>
						</div>
					</div>
				</form>
			</div>
		</div>
		<!-- /Director Modal -->
		
		
		<!-- Показываем сообщение об успешной отправки -->
		<div style="display: <?php echo $_SESSION['display']; ?>;" onclick="closeBackground();">
			<div id="background-msg" style="display: <?php echo $_SESSION['display']; ?>;"></div>
			<div id="message">
				<?php echo $_SESSION['recaptcha']; unset($_SESSION['recaptcha']); ?>
			</div> 
		</div>
		
		
		<!-- Bootstrap -->
		<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
		
		
		<!-- Theme scripts -->
		<script src="<?php echo get_template_directory_uri(); ?>/js/theme.js"></script>
		<script src="<?php echo get_template_directory_uri(); ?>/js/quiz.js"></script>
		
		
		<!-- Telephone number mask -->
		<script src="<?php echo get_template_directory_uri(); ?>/js/inputmask.min.js"></script>
		<script>
			var telMask = document.getElementsByClassName("telMask");
			var im = new Inputmask("+7(999)999-99-99");
			im.mask(telMask);
		</script>
		
		
		<!-- Убираем сообщение об успешной отправки -->
		<script>
			function closeBackground () {
				document.getElementById('background-msg').style.display = 'none';
				document.getElementById('message').style.display = 'none';
			}
		</script>
		
		
		<!-- reCaptcha v3 New from Google -->
		<script src='https://www.google.com/recaptcha/api.js?render=6LdV1IcUAAAAADRQAhpGL8dVj5_t0nZDPh9m_0tn'></script>
		<script>
			grecaptcha.ready(function() {
				grecaptcha.execute('6LdV1IcUAAAAADRQAhpGL8dVj5_t0nZDPh9m_0tn', {action: 'action_name'}).then(function(token) {
					document.getElementById('g-recaptcha-response-director').value=token;
					document.getElementById('g-recaptcha-response-ipoteka').value=token;
					document.getElementById('g-recaptcha-response-architector').value=token;
					document.getElementById('g-recaptcha-response-callback').value=token;
					if ( document.getElementById( 'g-recaptcha-response-excursions' ) ) {
						document.getElementById('g-recaptcha-response-excursions').value=token;
					}
				});
			});
		</script>
	</body>
</html>