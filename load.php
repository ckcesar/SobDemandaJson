<?php

$db = new PDO('mysql:host=192.168.115.1; dbname=rede_solidaria1', 'weblz', 'rj45812');

$qtd = 16;

$page = $_GET['page'];

$inicio = ($page * $qtd);    

$db->query("SET NAMES UTF8");

$sel = $db->query("select id_foto, titulo_foto, data_cadastro from galeriaassociadas  order by id_foto desc limit $inicio,$qtd");

$t = $sel->fetchAll(PDO::FETCH_ASSOC);
echo json_encode($t);