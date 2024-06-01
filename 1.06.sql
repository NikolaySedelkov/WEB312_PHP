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
    GROUP BY rating;