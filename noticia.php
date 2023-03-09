<?php

class Noticia {
    private $id;
    private $titulo;
    private $texto;
    private $data_publicacao;

    public function getId() {
        return $this->id;
    }

    public function setId($id) {
        $this->id = $id;
    }

    public function getTitulo() {
        return $this->titulo;
    }

    public function setTitulo($titulo) {
        $this->titulo = $titulo;
    }

    public function getTexto() {
        return $this->texto;
    }

    public function setTexto($texto) {
        $this->texto = $texto;
    }

    public function getData() {
        return $this->data_publicacao;
    }

    public function setData($data) {
        $this->data_publicacao = $data;
    }
}
?>