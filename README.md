# ozon_test

Задание:

`XIX` Задача о поиске элемента ⭐⭐

Дан упорядоченный массив чисел размером `N`
Нужно реализовать алгоритм поиска вхождения упорядоченного подмассива размера `M`, где `M << N`

```
func isInclude(array int[], subarray []int) bool

assert(isInclude([1, 2, 3, 5, 7, 9, 11], []) == true) 
assert(isInclude([1, 2, 3, 5, 7, 9, 11], [3, 5, 7]) == true) 
assert(isInclude([1, 2, 3, 5, 7, 9, 11], [4, 5, 7]) == false) 
``` 

Что хочется увидеть:

1. Алгоритм со сложностью быстрее чем `O(N)` по времени

Для установки пакетов вызвать

```bash
composer install
```

Для запуска тестов необходимо из корневого каталога проекта вызвать

```bash
./vendor/phpunit/phpunit/phpunit ./tests/FunctionsTest.php
```
