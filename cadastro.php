<?php

$login = $_POST['login'];
$senha = MD5($_POST['senha']);
$connect = mysql_connect('nome_do_servidor','nome_de_usuario','senha');
$db = mysql_select_db('nome_do_banco_de_dados');
$query_select = "SELECT login FROM usuarios WHERE login = '$login'";
$select = mysql_query($query_select,$connect);
$array = mysql_fetch_array($select);
$logarray = $array['login'];

if($login== || $login== null){
    echo"<script language='javascript' type='text/javascript'>
    alert('O campo login deve ser preenchido');window.lcation.href='
    cadastro.html';</scrip>";

    }else{
      if($logarray == $login){