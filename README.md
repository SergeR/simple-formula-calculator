[![License](https://img.shields.io/badge/license-MIT-blue.svg?style=flat-square)](LICENSE)

Простой калькулятор
===================

Очень простой, тривиальный калькулятор. Быстрый, без внешних зависимостей. Поддерживаются только четыре арифметических
действия (без приоритетов!) и вычисление процентов. Можно использовать для вычисления простых наценок, например, для
начисления налогов.

Примеры
-------

````php
Calculator::calc("5+5"); // 10

Calculator::calc("10-2"); // 8

Calculator::calc("5*2"); // 10

Calculator::calc("5+5*2"); // 20. Внимание! приоритеты не поддерживаются!

Calculator::calc("5%", 200); // 10

Calculator::calc("10+5%", 200); // 20

Calculator::calc("10+5%+20%"); // 60 

````

©2023, Serge Rodovnichenko, sergerod@gmail.com
