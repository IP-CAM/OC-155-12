Тестовый модуль для OpenCart 15.5.5.1.2 oc_mod_hello_world!

Для того что бы создать свой первый модуль, нам необходимо как минимум 6 файлов. 
Пускай наш новый модуль будет иметь название  «helloworld» 
и для его работы нам понадобятся следующие файлы: 

1. файл представления модуля:
	> catalog\view\theme\default\template\module\helloworld.tpl
	
2. Kонтроллер модуля:
	> catalog\controller\module\helloworld.php

3. языковой файл:
	> catalog\language\russian\module\helloworld.php
	
4. файл представления модуля для админпанели:
	> admin\view\template\module\helloworld.tpl
	
5. контроллер модуля для админпанели:
	> admin\controller\module\helloworld.php
	
6. языковой файл модуля для админпанели:
	> admin\language\russian\module\helloworld.php
	
7. Модель :
	> catalog\model\catalog\mytest.php
	
8. Дириктория для изображений:
	> image\module_image\module_hello_world_image\

Реализовывать файлы  будем в порядке нумерации.

[Руководство_Разработчика](https://docs.ocstore.com/index.php?title=%D0%A0%D1%83%D0%BA%D0%BE%D0%B2%D0%BE%D0%B4%D1%81%D1%82%D0%B2%D0%BE_%D0%A0%D0%B0%D0%B7%D1%80%D0%B0%D0%B1%D0%BE%D1%82%D1%87%D0%B8%D0%BA%D0%B0)
[Создаем модуль в OpenCart](http://s-engineer.ru/sozdaem-modul-v-opencart/)
[OpenCart, прикручиваем представление к контроллеру](http://s-engineer.ru/opencart-prikruchivaem-predstavlenie-k-kontrolleru/)
[OpenCart, прикручиваем модель к контроллеру](http://s-engineer.ru/opencart-prikruchivaem-model-k-kontrolleru/)
[Справочник по MySQL](http://www.spravkaweb.ru/mysql/sql/createtable)
