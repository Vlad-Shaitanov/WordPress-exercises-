/*===== ХУКИ-СОБЫТИЯ =====*/


//Пример простого кастомного хука
<?php
	function print_hello(){
		echo "Hello world<br>";
	}


	add_action("my_hook", "print_hello");

	do_action("my_hook");

?>


//Кодному хуку можно цеплять сразу несколько действий:
<?php
	function print_hello(){
		echo "Hello world";
	}
	function print_hello_1(){
		echo "Hello world_1";
	}
	function print_hello_2(){
		echo "Hello world_2";
	}

	add_action("my_hook", "print_hello");
	add_action("my_hook", "print_hello_1");
	add_action("my_hook", "print_hello_2");

	do_action("my_hook");

?>


/*Установка последовательности действий.
Чем больше аргумент, тем позже выполнится действие*/
<?php
	function print_hello(){
		echo "Hello world";
	}
	function print_hello_1(){
		echo "Hello world_1";
	}
	function print_hello_2(){
		echo "Hello world_2";
	}

	add_action("my_hook", "print_hello", 5);
	add_action("my_hook", "print_hello_1", 10);
	add_action("my_hook", "print_hello_2", 7);

	do_action("my_hook");

?>


//Передача аргументов в функцию
<?php
	function print_hello($text, $name){
		echo "Hello world" . $text . " " . $name;
	}
	

	add_action("my_hook", "print_hello", 10, 2);//Последний аргумент - число передаваемых аргументов

	do_action("my_hook", "dear customer", "Vladislav");

?>


/*===== ХУКИ-ФИЛЬТРЫ =====*/


//Пример простого хука-фильтра
<?php
    function my_filter_function($str){
            return "Hello" . $str;
        }

        add_filter("my_filter", "my_filter_function");

        echo apply_filters("my_filter", "Great World");
?>


//Пример хука-фильтра для проекта childhood
<?php
    add_filter("nav_menu_link_attributes", "filter_nav_menu_link_attributes", 10, 3);//(имя|функция|приоритет|число агрументов )

    function filter_nav_menu_link_attributes($atts, $item, $args){

		//Если мое меню имеет название Main
        if($args->menu === "Main"){
			/*Мы берем аттрибуты у всех ссылок в этом меню,
			берем их классы и добавляем еще один класс*/
            $atts["class"] = "header__nav-item";

			//Если мы находимся на активной странице
            if($item->current){
				//Берем у этой активной ссылки класс и добавляем к нему еще один класс активности
                 $atts["class"] .= " header__nav-item-active";
            }

			//Если страница подпадает под определенные категории, то добавляем класс
            if($item->ID === 106 && (in_category("soft_toys") || in_category("edu_toys"))){
				$atts["class"] .= " header__nav-item-active";
			}
        }
		return $atts;//Возвращаем отфильтрованные атрибуты
    }
?>

/*Как избавиться от хука, который уже выполнил свою задачу*/
<?php
    function my_filter_function($str){
            return "Hello" . $str;
        }

        add_filter("my_filter", "my_filter_function", 15);//Добавление фильтра

        echo apply_filters("my_filter", "Great World");//Вызов хука с фильтром

		remove_filter("my_filter", "my_filter_function", 15);//Удаление прикрепленной функции

        echo apply_filters("my_filter", "Great World");//Вызов хука уже без функции(неотфильтрованное значение)

		// remove_action();//Удаление прикрепленной функции для хуков-событий

?>