// DOM Ready
$(function() {
	
	// SVG fallback
	// toddmotto.com/mastering-svg-use-for-a-retina-web-fallbacks-with-png-script#update
	if (!Modernizr.svg) {
		var imgs = document.getElementsByTagName('img');
		var dotSVG = /.*\.svg$/;
		for (var i = 0; i != imgs.length; ++i) {
			if(imgs[i].src.match(dotSVG)) {
				imgs[i].src = imgs[i].src.slice(0, -3) + "png";
			}
		}
	}

});
//
jQuery(function ($) {
	$('area').click(function (e) {

		var curId = event.target.id;

		if (curId == 'st1'){
			mName = "Сокольническая";}
		else if (curId == 'st10'){
			mName = "Люблинская";}
		else if (curId == 'st100'){
			mName = "Юго-западная";}
		else if (curId == 'st101'){
			mName = "Проспект Вернадского";}
		else if (curId == 'st102'){
			mName = "Новые Черемушки";}
		else if (curId == 'st103'){
			mName = "Теплый стан";}
		else if (curId == 'st104'){
			mName = "Профсоюзная";}
		else if (curId == 'st105'){
			mName = "Коньково";}
		else if (curId == 'st106'){
			mName = "Калужская";}
		else if (curId == 'st107'){
			mName = "Беляево";}
		else if (curId == 'st108'){
			mName = "Новоясеневская";}
		else if (curId == 'st109'){
			mName = "Ясенево";}
		else if (curId == 'st11'){
			mName = "Каховская";}
		else if (curId == 'st110'){
			mName = "Южная";}
		else if (curId == 'st111'){
			mName = "Пражская";}
		else if (curId == 'st112'){
			mName = "Чертановская";}
		else if (curId == 'st113'){
			mName = "Коломенская";}
		else if (curId == 'st114'){
			mName = "Каширская";}
		else if (curId == 'st115'){
			mName = "Нагатинская";}
		else if (curId == 'st116'){
			mName = "Улица Подбельского";}
		else if (curId == 'st117'){
			mName = "Черкизовская";}
		else if (curId == 'st118'){
			mName = "Бабушкинская";}
		else if (curId == 'st119'){
			mName = "Медведково";}
		else if (curId == 'st12'){
			mName = "Бутовская";}
		else if (curId == 'st120'){
			mName = "Ботанический сад";}
		else if (curId == 'st121'){
			mName = "Свиблово";}
		else if (curId == 'st122'){
			mName = "Площадь Ильича";}
		else if (curId == 'st123'){
			mName = "Римская";}
		else if (curId == 'st124'){
			mName = "Преображенская площадь";}
		else if (curId == 'st125'){
			mName = "Красносельская";}
		else if (curId == 'st126'){
			mName = "Сокольники";}
		else if (curId == 'st127'){
			mName = "Семеновская";}
		else if (curId == 'st128'){
			mName = "Бауманская";}
		else if (curId == 'st129'){
			mName = "Электрозаводская";}
		else if (curId == 'st13'){
			mName = "Курская";}
		else if (curId == 'st130'){
			mName = "Авиамоторная";}
		else if (curId == 'st131'){
			mName = "Щелковская";}
		else if (curId == 'st132'){
			mName = "Измайловская";}
		else if (curId == 'st133'){
			mName = "Первомайская";}
		else if (curId == 'st135'){
			mName = "Перово";}
		else if (curId == 'st136'){
			mName = "Новогиреево";}
		else if (curId == 'st137'){
			mName = "Шоссе Энтузиастов";}
		else if (curId == 'st138'){
			mName = "Рязанский проспект";}
		else if (curId == 'st139'){
			mName = "Текстильщики";}
		else if (curId == 'st14'){
			mName = "Чкаловская";}
		else if (curId == 'st140'){
			mName = "Выхино";}
		else if (curId == 'st141'){
			mName = "Кузьминки";}
		else if (curId == 'st142'){
			mName = "Волжская";}
		else if (curId == 'st143'){
			mName = "Братиславская";}
		else if (curId == 'st144'){
			mName = "Марьино";}
		else if (curId == 'st145'){
			mName = "Люблино";}
		else if (curId == 'st146'){
			mName = "Печатники";}
		else if (curId == 'st147'){
			mName = "Кантемировская";}
		else if (curId == 'st148'){
			mName = "Орехово";}
		else if (curId == 'st149'){
			mName = "Красногвардейская";}
		else if (curId == 'st15'){
			mName = "Фрунзенская";}
		else if (curId == 'st150'){
			mName = "Царицыно";}
		else if (curId == 'st151'){
			mName = "Домодедовская";}
		else if (curId == 'st152'){
			mName = "Театральная";}
		else if (curId == 'st153'){
			mName = "Белорусская";}
		else if (curId == 'st154'){
			mName = "Каширская";}
		else if (curId == 'st155'){
			mName = "Курская";}
		else if (curId == 'st156'){
			mName = "Арбатская";}
		else if (curId == 'st157'){
			mName = "Смоленская";}
		else if (curId == 'st158'){
			mName = "Киевская";}
		else if (curId == 'st16'){
			mName = "Шаболовская";}
		else if (curId == 'st160'){
			mName = "Киевская";}
		else if (curId == 'st161'){
			mName = "Парк культуры";}
		else if (curId == 'st162'){
			mName = "Октябрьская";}
		else if (curId == 'st163'){
			mName = "Китай-город";}
		else if (curId == 'st164'){
			mName = "Третьяковская";}
		else if (curId == 'st165'){
			mName = "Дубровка";}
		else if (curId == 'st167'){
			mName = "Крестьянская застава";}
		else if (curId == 'st169'){
			mName = "Воробьевы горы";}
		else if (curId == 'st17'){
			mName = "Добрынинская";}
		else if (curId == 'st170'){
			mName = "Парк Победы";}
		else if (curId == 'st171'){
			mName = "Кунцевская";}
		else if (curId == 'st172'){
			mName = "Крылатское";}
		else if (curId == 'st173'){
			mName = "Партизанская";}
		else if (curId == 'st174'){
			mName = "Славянский бульвар";}
		else if (curId == 'st175'){
			mName = "Молодежная";}
		else if (curId == 'st176'){
			mName = "Строгино";}
		else if (curId == 'st178'){
			mName = "Трубная";}
		else if (curId == 'st179'){
			mName = "Сретенский бульвар";}
		else if (curId == 'st18'){
			mName = "Автозаводская";}
		else if (curId == 'st181'){
			mName = "Улица академика Янгеля";}
		else if (curId == 'st182'){
			mName = "Аннино";}
		else if (curId == 'st183'){
			mName = "Бульвар Дмитрия Донского";}
		else if (curId == 'st184'){
			mName = "Международная";}
		else if (curId == 'st185'){
			mName = "Выставочная";}
		else if (curId == 'st186'){
			mName = "Улица Старокачаловская";}
		else if (curId == 'st187'){
			mName = "Улица Скобелевская";}
		else if (curId == 'st188'){
			mName = "Бульвар адмирала Ушакова";}
		else if (curId == 'st189'){
			mName = "Улица Горчакова";}
		else if (curId == 'st19'){
			mName = "Тульская";}
		else if (curId == 'st190'){
			mName = "Бунинская аллея";}
		else if (curId == 'st191'){
			mName = "Волоколамская";}
		else if (curId == 'st192'){
			mName = "Митино";}
		else if (curId == 'st193'){
			mName = "Мякинино";}
		else if (curId == 'st194'){
			mName = "Достоевская";}
		else if (curId == 'st195'){
			mName = "Марьина Роща";}
		else if (curId == 'st2'){
			mName = "Замоскворецкая";}
		else if (curId == 'st20'){
			mName = "Серпуховская";}
		else if (curId == 'st21'){
			mName = "Кожуховская";}
		else if (curId == 'st22'){
			mName = "Волгоградский проспект";}
		else if (curId == 'st23'){
			mName = "Библиотека им. Ленина";}
		else if (curId == 'st24'){
			mName = "Площадь Революции";}
		else if (curId == 'st25'){
			mName = "Александровский сад";}
		else if (curId == 'st26'){
			mName = "Китай-город";}
		else if (curId == 'st27'){
			mName = "Таганская";}
		else if (curId == 'st28'){
			mName = "Пролетарская";}
		else if (curId == 'st29'){
			mName = "Марксистская";}
		else if (curId == 'st3'){
			mName = "Арбатско-Покровская";}
		else if (curId == 'st30'){
			mName = "Таганская";}
		else if (curId == 'st31'){
			mName = "Павелецкая";}
		else if (curId == 'st32'){
			mName = "Павелецкая";}
		else if (curId == 'st33'){
			mName = "Третьяковская";}
		else if (curId == 'st34'){
			mName = "Новокузнецкая";}
		else if (curId == 'st35'){
			mName = "Октябрьская";}
		else if (curId == 'st36'){
			mName = "Полянка";}
		else if (curId == 'st37'){
			mName = "Парк культуры";}
		else if (curId == 'st38'){
			mName = "Киевская";}
		else if (curId == 'st39'){
			mName = "Кропоткинская";}
		else if (curId == 'st4'){
			mName = "Студенческая";}
		else if (curId == 'st40'){
			mName = "Арбатская";}
		else if (curId == 'st406'){
			mName = "Киевская";}
		else if (curId == 'st41'){
			mName = "Смоленская";}
		else if (curId == 'st42'){
			mName = "Боровицкая";}
		else if (curId == 'st43'){
			mName = "Чистые пруды";}
		else if (curId == 'st44'){
			mName = "Охотный ряд";}
		else if (curId == 'st45'){
			mName = "Красные Ворота";}
		else if (curId == 'st46'){
			mName = "Лубянка";}
		else if (curId == 'st47'){
			mName = "Маяковская";}
		else if (curId == 'st48'){
			mName = "Тверская";}
		else if (curId == 'st49'){
			mName = "Тургеневская";}
		else if (curId == 'st5'){
			mName = "Кольцевая";}
		else if (curId == 'st50'){
			mName = "Сухаревская";}
		else if (curId == 'st51'){
			mName = "Кузнецкий мост";}
		else if (curId == 'st52'){
			mName = "Пушкинская";}
		else if (curId == 'st53'){
			mName = "Чеховская";}
		else if (curId == 'st54'){
			mName = "Цветной бульвар";}
		else if (curId == 'st55'){
			mName = "Речной вокзал";}
		else if (curId == 'st56'){
			mName = "Планерная";}
		else if (curId == 'st57'){
			mName = "Отрадное";}
		else if (curId == 'st58'){
			mName = "Бибирево";}
		else if (curId == 'st59'){
			mName = "Алтуфьево";}
		else if (curId == 'st6'){
			mName = "Калужско-Рижская";}
		else if (curId == 'st60'){
			mName = "Водный стадион";}
		else if (curId == 'st61'){
			mName = "Краснопресненская";}
		else if (curId == 'st62'){
			mName = "Динамо";}
		else if (curId == 'st626'){
			mName = "Борисово";}
		else if (curId == 'st627'){
			mName = "Шипиловская";}
		else if (curId == 'st628'){
			mName = "Зябликово";}
		else if (curId == 'st63'){
			mName = "Белорусская";}
		else if (curId == 'st631'){
			mName = "Новокосино";}
		else if (curId == 'st636'){
			mName = "Пятницкое шоссе";}
		else if (curId == 'st637'){
			mName = "Алма-Атинская";}
		else if (curId == 'st64'){
			mName = "Беговая";}
		else if (curId == 'st641'){
			mName = "Лермонтовский проспект";}
		else if (curId == 'st642'){
			mName = "Жулебино";}
		else if (curId == 'st65'){
			mName = "Баррикадная";}
		else if (curId == 'st66'){
			mName = "Улица 1905 года";}
		else if (curId == 'st67'){
			mName = "Алексеевская";}
		else if (curId == 'st68'){
			mName = "ВДНХ";}
		else if (curId == 'st69'){
			mName = "Петровско-Разумовская";}
		else if (curId == 'st7'){
			mName = "Новослободская";}
		else if (curId == 'st70'){
			mName = "Дмитровская";}
		else if (curId == 'st71'){
			mName = "Тимирязевская";}
		else if (curId == 'st72'){
			mName = "Савеловская";}
		else if (curId == 'st73'){
			mName = "Владыкино";}
		else if (curId == 'st74'){
			mName = "Войковская";}
		else if (curId == 'st75'){
			mName = "Сокол";}
		else if (curId == 'st76'){
			mName = "Аэропорт";}
		else if (curId == 'st77'){
			mName = "Щукинская";}
		else if (curId == 'st78'){
			mName = "Октябрьское поле";}
		else if (curId == 'st8'){
			mName = "Калининская";}
		else if (curId == 'st81'){
			mName = "Сходненская";}
		else if (curId == 'st82'){
			mName = "Тушинская";}
		else if (curId == 'st83'){
			mName = "Фили";}
		else if (curId == 'st84'){
			mName = "Филевский парк";}
		else if (curId == 'st85'){
			mName = "Кунцевская";}
		else if (curId == 'st87'){
			mName = "Пионерская";}
		else if (curId == 'st88'){
			mName = "Багратионовская";}
		else if (curId == 'st9'){
			mName = "Рижская";}
		else if (curId == 'st90'){
			mName = "Полежаевская";}
		else if (curId == 'st91'){
			mName = "Спортивная";}
		else if (curId == 'st92'){
			mName = "Варшавская";}
		else if (curId == 'st93'){
			mName = "Университет";}
		else if (curId == 'st94'){
			mName = "Каховская";}
		else if (curId == 'st95'){
			mName = "Академическая";}
		else if (curId == 'st96'){
			mName = "Ленинский проспект";}
		else if (curId == 'st97'){
			mName = "Нагорная";}
		else if (curId == 'st98'){
			mName = "Севастопольская";}
		else if (curId == 'st99'){
			mName = "Нахимовский проспект";}
		else {
			mName = "Не указано";};
		
		$('#metroitem').val(mName);
		$('#basic-modal-content').modal();
		return false;
	});
});