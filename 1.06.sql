use sakila;

-- Вся таблица film
SELECT * FROM film;

SELECT last_name, first_name
	FROM actor
    ORDER BY last_name;


SELECT last_name, first_name
	FROM actor
    ORDER BY last_name, first_name;

-- Таблица film, но с фильтром на продолжительность фильма до 60 минут
SELECT * 
	FROM film
    -- Для добавления фильтра к запросу указываем команду WHERE
    WHERE length < 60 AND rating = 'NC-17'
    -- Сортировка `field1` [ASC|DESC], `field2` [ASC|DESC], `field3` [ASC|DESC], ... `field_N` [ASC|DESC]  | где `field_i` - это название поля(столбца) по которому мы хотим произвеси сортировку
    -- field1 > field2 > field3 > ... > field_N
    -- ASC - возрастание | DESC - убывание
    ORDER BY replacement_cost DESC;
    
-- Функции агрегирования
-- FUNC - Функция агрегирования | FUNC(`field`), FUNC(`field`), FUNC(`field`), FUNC(`field`)
/*
	FUNC = {
		max - поиск максимального
        min - поиск минимального
        sum - рассчёт суммы элемент столбца
        avg - рассчёт среднего значения элементов столбца
        count - количества записей
    }
*/
SELECT 
	max(replacement_cost) as `Максимальная стоимость`, 
    min(replacement_cost) as `Минимальная стоимость`,
    max(length) as `Максимальная продолжительность`, 
    min(length) as `Минимальная продолжительность`
	FROM film;
    
SELECT 
	max(replacement_cost) as `Максимальная стоимость`, 
    min(replacement_cost) as `Минимальная стоимость`,
    max(length) as `Максимальная продолжительность`, 
    min(length) as `Минимальная продолжительность`
	FROM film
	WHERE length < 60 AND rating = 'NC-17';
    
-- Группировка
-- минимальное и максимально значение продолжительности фильмов для каждого рейтинга
-- GROUP BY `field`	| `field` - название поля, по которому производим группировку
SELECT 
	rating,
    max(length) as `Максимальная продолжительность`, 
    min(length) as `Минимальная продолжительность`,
    avg(length) as `Средняя продолжительность`
	FROM film
    GROUP BY rating
-- HAVING ~ WHERE | HAVING - фильтры, накладываемые на результат группировки
    HAVING `Средняя продолжительность` > 115;
    
    
/*
	SELECT
    FROM
    WHERE
    ORDER BY
    GROUP BY
    HAVING
*/


-- Пример
/*
	Найти рейтинги среди фильмов, которые сняты на англиском языке, 
    и такое чтоб минимальная продолжительность всех фильмов среди рейтинга была не меньше 45
*/
SELECT rating
	FROM film
    WHERE language_id = 1
    GROUP BY rating
    HAVING min(length) >= 45;
    
-- Найти id актеров, которые снимались более чем в 30 фильмах
SELECT actor_id, 
	count(film_id) as `Стаж` -- count(*)
	FROM film_actor
    GROUP BY actor_id
    HAVING `Стаж` > 30;
    
-- Запрос к двум и более таблицам
-- 		Подзапросы
-- Найти имена актеров, которые снимались более чем в 30 фильмах
SELECT last_name, first_name
	FROM actor
    WHERE actor_id in (
		SELECT actor_id
			FROM film_actor
			GROUP BY actor_id
			HAVING count(film_id) > 30
    );
    
SELECT *
	FROM actor
    WHERE actor_id in (1, 10, 100);

-- 		JOIN
-- 	`table1` JOIN `table2` ON `table1`.`foregen_key` = `table2`.`primary_key` 
SELECT 
	country,
    group_concat(city separator ', ') as `Список городов`
	FROM (
		city INNER JOIN country ON city.country_id = country.country_id
    )
    GROUP BY country;
    
    
-- =========================================

/*
	UPDATE - обновление/изменение данных в таблице
*/
SELECT *
	FROM actor;

/*
	UPDATE `table`
		SET `field` = НОВОЕ_ЗНАЧЕНИЕ
        WHERE ...
	
*/
UPDATE actor
	SET first_name = concat(first_name, 'D')
    WHERE actor_id = 3;
    
SELECT *
	FROM address;

UPDATE address
	SET phone = concat('+', phone)
    WHERE phone LIKE '7%';

-- плохие примеры, так как в них мы меняем значения внешних и первичных ключи
UPDATE address
	SET 
		city_id = 999999,
		address_id = -address_id
    WHERE address_id > 0;

SELECT *
	FROM actor
    WHERE actor_id = 30000;

UPDATE film_actor
	SET actor_id = 30000
    WHERE actor_id = 5;

UPDATE actor
	SET actor_id = 30000
    WHERE actor_id = 5;
    
    