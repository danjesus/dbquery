<?php
use core\data\dbquery\SqlCriteria;
use core\data\dbquery\SqlSelect;

//Estância a classe SqlCriteria para definir o limit
$criteria = new SqlCriteria();
//Define a propriedade limit com o valor 10
$criteria->setProperty('limit', 10);

//Estância a classe SqlSelect para definir o Select
$select = new SqlSelect();
//Define a tabela a ser utilizada
$select->setEntity('usuario');
//Adiciona as colunas para retorno
$select->addColumn('*');

//Acrescenta o critério de seleção ao select
$select->setCriteria($criteria);
//Retorna a string com o select montado
echo $select->getInstruction();

