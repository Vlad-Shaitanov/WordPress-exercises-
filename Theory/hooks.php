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