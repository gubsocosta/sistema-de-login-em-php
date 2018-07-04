# Sistema de Login em PHP com PDO
Sistema de login em PHP 7.1 e MySQL, utlizando sessoes, PDO e criptografia de senha (criando o hash da senha, usando MD5 e SHA-1).

O sistema possui uma tela de login e uma pagina de acesso restrito. Somente usuarios autenticados conseguem acessa-la.

O arquivo /auth/init.php posssui as constantes com as credenciais de acesso ao banco MySQL.
- DB_HOST - local onde o banco esta hospedado
- DB_USER - usuario do banco
- DB_PASS - senha do usuario do banco
- DB_NAME - nome da tabela


O arquivo /auth/funcoes.php possui tres funcoes:
- db_connect() - conecta com o banco MySql usando PDO, utilizando as credenciais definidas em /auth/init.php
- make_hash() - cria o hash da senha, usando MD5 e SHA-1
- isLoggedIn() - verifica se o usuário está logado

O arquivo /auth/check.php verifica se ha usuarios logados, utilizando a funcao isLoggedIn(), do arquivo /auth/funcoes.php. Nao havendo usuarios logados, destroi a sessao e redireciona o acesso a pagina de login.

O arquivo /auth/logon.php faz as autentificacao do usuario no sistema. Caso os dados submetidos estejam incorretos ou nulos, ele redireciona o acesso a pagina de login, informando uma mensagem de erro.

O arquivo /auth/logout.php encerra a sessao e desloga o usuario, redirecionando-o para a pagina inicial.



