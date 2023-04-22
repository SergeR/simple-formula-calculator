[![License](https://img.shields.io/badge/license-MIT-blue.svg?style=flat-square)](LICENSE)

Simple Calculator
=================

A very simple, trivial calculator. Fast, without external dependencies. Only four arithmetic operations (no priorities!) 
and percentage calculation are supported. It can be used to calculate simple markups, for example, to calculate taxes.

Examples
--------

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
