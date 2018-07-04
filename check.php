<?php
// Esse arquivo verifica se o usuário está logado. Se não estiver, redireciona para o formulario de login.
require_once 'init.php';

if (!isLoggedIn())
{
    header('Location: ../index.php');
}