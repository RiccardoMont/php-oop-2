<?php

class Articolo {

    public function __construct(protected string $title, protected string $img, protected int $price)
    {
        $this->title = $title;
        $this->img = $img;
        $this->price = $price;
    }

    public function getTitle(){
        return $this->title;
    }

    public function getImg(){
        return $this->img;
    }

    public function getPrice(){
        return $this->price;
    }

}


class Categoria {

    public function __construct(protected string $category){

        $this->category = $category;

    }

    public function getCategory(){
        return $this->category;
    }

}



class Tipologia {

    public function __construct(protected string $type, protected string $description){
        
        $this->type = $type;
        $this->description = $description;
    }

    public function getType(){
        return $this->type;
    }

    public function getDescription(){
        return $this->description;
    }

}




class DetailedArticolo extends Articolo {

    protected $categoria;
    protected $tipologia;

    public function __construct($title, $img, $price, Categoria $categoria, Tipologia $tipologia)
    {
        parent::__construct($title, $img, $price);
        $this->categoria = $categoria;
        $this->tipologia = $tipologia;
        
    }

    public function getCategoria(){
        return $this->categoria->getCategory();
    }

    public function getTipologia(){
        return $this->tipologia->getType();
    }

    public function getCDescrizione(){
        return $this->tipologia->getDescription();
    }

}



?>