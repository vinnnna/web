<?php

abstract class Product
{
    public $nama;
    /* syarat abstract class :
        1. memiliki atribut / abstract
        2. memiliki function yang bersifat abstract
        3. tidak contain body pada function */

    abstract public function title(string $nama):void;
}

class Book extends Product
{
    public $nama;

    public function __construct(string $nama = "House of Leaves")
    {
        $this->nama = $nama;
    }

    public function getName():string
    {
        return $this->nama;
    }

    public function title(string $nama) :void
    {
        echo $this->getName();
    }
}
$book = new Book;
echo $book->title("wee");
