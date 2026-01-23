function nextQuostion( curQuo ) {
	let currentQuostion = curQuo; // Текущий вопрос
	
	switch( currentQuostion ) {
		
		/* 1/6 */
		case 'question-1': // Первый вопрос
			/* Проверяем что выбрана одна из планировок */
			if ( ( document.getElementById( 'answer-1-1' ).checked == false ) && ( document.getElementById( 'answer-1-2' ).checked == false ) && ( document.getElementById( 'answer-1-3' ).checked == false ) ) {
				alert( 'Для продолжения выберите этажность' );
				return false;
			}
			
			// Получаем ответ на первый вопрос и добавляем в input в форме обратной связи
			let answer1 = document.querySelector( 'input[name="quostion-1"]:checked' ).value;
			document.getElementById( 'answer-1' ).value = answer1;
			
			// Скрываем блок текущего вопроса и открываем блок следующего
			document.getElementById( 'question-1' ).style.display = 'none';
			document.getElementById( 'question-2' ).style.display = 'block';
		break;
		/* END ПЕРВЫЙ ВОПРОС */
		
		
		/* 2/6 */
		case 'question-2':
			if ( ( document.getElementById( 'answer-2-1' ).checked == false ) && ( document.getElementById( 'answer-2-2' ).checked == false ) && ( document.getElementById( 'answer-2-3' ).checked == false ) && ( document.getElementById( 'answer-2-4' ).checked == false ) && ( document.getElementById( 'answer-2-5' ).checked == false ) ) {
				alert( 'Для продолжения выберите желаемую площадь дома' );
				return false;
			}
			
			/* Получаем и записываем первый ответ в переменную*/
			let answer2 = document.querySelector( 'input[name="quostion-2"]:checked' ).value;
			document.getElementById( 'answer-2' ).value = answer2;
			
			// Скрываем блок текущего вопроса и открываем блок следующего
			document.getElementById( 'question-2' ).style.display = 'none';
			document.getElementById( 'question-3' ).style.display = 'block';
		break;
		
		/* 3/6 */
		case 'question-3':
			/* Проверяем что выбрана планировка кухни */
			if ( ( document.getElementById( 'answer-3-1' ).checked == false ) && ( document.getElementById( 'answer-3-2' ).checked == false ) && ( document.getElementById( 'answer-3-3' ).checked == false ) && ( document.getElementById( 'answer-3-4' ).checked == false ) && ( document.getElementById( 'answer-3-5' ).checked == false ) && ( document.getElementById( 'answer-3-6' ).checked == false ) ) {
				alert( 'Для продолжения выберите фундамент' );
				return false;
			}
			
			/* Получаем и записываем первый ответ в переменную*/
			let answer3 = document.querySelector( 'input[name="quostion-3"]:checked' ).value;
			document.getElementById( 'answer-3' ).value = answer3;
			
			// Скрываем блок текущего вопроса и открываем блок следующего
			document.getElementById( 'question-3' ).style.display = 'none';
			document.getElementById( 'question-4' ).style.display = 'block';
		break;
		
		/* 4/6 */
		case 'question-4':
			/* Проверяем что выбрана планировка кухни */
			if ( ( document.getElementById( 'answer-4-1' ).checked == false ) && ( document.getElementById( 'answer-4-2' ).checked == false ) && ( document.getElementById( 'answer-4-3' ).checked == false ) && ( document.getElementById( 'answer-4-4' ).checked == false ) && ( document.getElementById( 'answer-4-5' ).checked == false ) ) {
				alert( 'Для продолжения выберите тип кровли' );
				return false;
			}
			
			/* Получаем и записываем первый ответ в переменную*/
			let answer4 = document.querySelector( 'input[name="quostion-4"]:checked' ).value;
			document.getElementById( 'answer-4' ).value = answer4;
			
			// Скрываем блок текущего вопроса и открываем блок следующего
			document.getElementById( 'question-4' ).style.display = 'none';
			document.getElementById( 'question-5' ).style.display = 'block';
		break;
		
		/* 5/6 */
		case 'question-5':
			/* Проверяем что выбрана планировка кухни */
			if ( ( document.getElementById( 'answer-5-1' ).checked == false ) && ( document.getElementById( 'answer-5-2' ).checked == false ) && ( document.getElementById( 'answer-5-3' ).checked == false ) && ( document.getElementById( 'answer-5-4' ).checked == false ) && ( document.getElementById( 'answer-5-5' ).checked == false ) && ( document.getElementById( 'answer-5-6' ).checked == false ) ) {
				alert( 'Для продолжения выберите в какой бюджет Вы хотели бы уложиться' );
				return false;
			}
			
			/* Получаем и записываем первый ответ в переменную*/
			let answer5 = document.querySelector( 'input[name="quostion-5"]:checked' ).value;
			document.getElementById( 'answer-5' ).value = answer5;
			
			// Скрываем блок текущего вопроса и открываем блок следующего
			document.getElementById( 'question-5' ).style.display = 'none';
			document.getElementById( 'question-6' ).style.display = 'block';
		break;
		
		case 'question-6':
			if ( ( document.getElementById( 'answer-6-1' ).checked == false ) && ( document.getElementById( 'answer-6-2' ).checked == false ) && ( document.getElementById( 'answer-6-3' ).checked == false ) && ( document.getElementById( 'answer-6-4' ).checked == false ) && ( document.getElementById( 'answer-6-5' ).checked == false ) ) {
				alert( 'Для продолжения укажите когда хотите начать строить' );
				return false;
			}
			
			/* Получаем и записываем первый ответ в переменную*/
			let answer6 = document.querySelector( 'input[name="quostion-6"]:checked' ).value;
			document.getElementById( 'answer-6' ).value = answer6;
			
			// Скрываем блок текущего вопроса и открываем блок следующего
			document.getElementById( 'question-6' ).style.display = 'none';
			document.getElementById( 'question-7' ).style.display = 'block';
		break;
		/* END ВОПРОСЫ */
	}
}


function previousQuostion( curQuo ) {

	let currentQuostion = curQuo; // Текущий вопрос
	switch( currentQuostion ) {
		
		case 'question-2':
			document.getElementById( 'question-2' ).style.display = 'none';
			document.getElementById( 'question-1' ).style.display = 'block';
		break;
		
		case 'question-3':
			document.getElementById( 'question-3' ).style.display = 'none';
			document.getElementById( 'question-2' ).style.display = 'block';
		break;
		
		case 'question-4':
			document.getElementById( 'question-4' ).style.display = 'none';
			document.getElementById( 'question-3' ).style.display = 'block';
		break;
		
		case 'question-5':
			document.getElementById( 'question-5' ).style.display = 'none';
			document.getElementById( 'question-4' ).style.display = 'block';
		break;
		
		case 'question-6':
			document.getElementById( 'question-6' ).style.display = 'none';
			document.getElementById( 'question-5' ).style.display = 'block';
		break;

		case 'question-7':
			document.getElementById( 'question-7' ).style.display = 'none';
			document.getElementById( 'question-6' ).style.display = 'block';
		break;
	}
}