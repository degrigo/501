<?php

echo "<pre>";

// Classe final não permite herança para os filhos
// Classe final bloqueia polimorfismo

final class Foo { protected $foo; }
class Bar extends Foo { }

$foo = new Foo();