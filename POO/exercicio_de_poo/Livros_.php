<?php
class invoice {
    private float $_preco;
    public int $_qtdc;
    public string $_descricao;
    public int $_nif;

    function __construct($_preco, $_qtdc, $_descricao, $_nif){
        $this->_preco = $_preco;
        $this->_qtdc= $_qtdc;
        $this->_descricao = $_descricao;
        $this->_nif= $_nif;
    }
   

    public function __set($preco, $valor)
    {
      $this->$preco = $valor;
    }
    public function __get($preco)
    {
      return $this->$preco;
    }
    
?>