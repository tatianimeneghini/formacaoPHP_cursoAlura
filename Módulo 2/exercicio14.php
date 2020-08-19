<?php

//O PHP traz um servidor web integrado (built-in-web server)
//Para acessar um recurso web, é importante possuir um servidor.
//O <localhost> (máquina local) ou com uma url.
//O servidor serve para fazer testes, executar alguns comandos, verificar
//  se a  aplicação está funcionando e, depois, a mandar para um servidor mais robusto
//  e que vai tratar de questões importantes relacionadas à performance (rodado em ambiente de produção).

//Na linha de comando é só digitar:
//<php -S localhost:8000>

//Para configurar, é importante lembrar que o PHP vai buscar algum arquivo index na pasta selecionada.
//  Então é possível especificar o arquivo para rodar, caso não possua um arquivo index.

//Para uma aplicação, existem diversos componentes de rede (DNS, UDP, TCP, TLS, IP).
//Entre a camada de redes e a web, existe o procolot HTTP.
//A web é composta de HTML, CSS, Web APIs e Javascript.