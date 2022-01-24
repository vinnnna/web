<?php
    class Father
    {
        public $nama;
        public $marga;
        public $status;

        public function __construct(string $nama = "R", string $marga = "Y", string $status = "Main")
        {
            $this-> nama = $nama;
            $this-> marga = $marga;
            $this-> status = $status;
        }

        public function getNama():string
        {
            return $this->nama;
        }

        public function getMarga():string
        {
            return $this->marga;
        }

        public function getStatus():string
        {
            return $this->status;
        }

        public function display():void
        {
            echo $this->judul()."<br>";
            echo "Nama = " .$this->getNama(). "<br>";
            echo "Marga = " .$this->getMarga(). "<br>";
            echo "Status = " .$this->getStatus();
        }

        public function judul()
        {
            echo "Ini dari class ". $this->getStatus();
        }

    }

    class Child1 extends Father
    {
        public $role;

        public function __construct(string $nama = "A", string $marga = "L", string $status = "Cabang_1", string $role = "Murid")
        {
            parent::__construct($nama, $marga, $status);
            $this->role = $role;
        }

        public function displayChild(): void
        {
            echo parent::display();
            echo "<br> Role = " .$this->getRole();
        }

        public function getRole() : string
        {
            return $this->role;
        }
    }

    class Child2 extends Child1
    {
        public function __construct(string $nama = "W", string $marga = "W", string $status = "Cabang_2", string $role = "Murid")
        {
            parent::__construct($nama, $marga, $status, $role);
        }

        public function displayChild2(): void
        {
            echo parent::display();
            echo "<br> Role = " .$this->getRole();
        }

        public function getRole() : string
        {
            return $this->role;
        }
    }

    $dad = new Father();

    $child1 = new Child1();
    $child2 = new Child2();

    echo $dad->display();

    echo "<hr>";
    echo $child1->displayChild();

    echo "<hr>";
    echo $child2->displayChild2();
?>