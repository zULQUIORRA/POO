<?php
  include("livros_.php");

  $Invoice = new Invoice(10,4,"quantidade comprada",54);
  $Invoice->_preco = 49.99 ;
  $Invoice->_qtdc = 50;
  $Invoice->_descricao = "livro capa dura, 150 paginas, algumas ilustrações.";



  echo "<p> Descrição do produto: " . $Invoice->_descricao . "<p>";
  echo "<p> Quantidade comprada: " . $Invoice->_qtdc . "<p>"; 
  echo "<p> Preço Unitário: R$".$Invoice->_preco."</p>";
?>