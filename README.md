## Projeto Desenvolvido em Laravel

O objetivo desse projeto é criar um sistema que possa armazenar nome, email e telefone dos funcionarios da empresa MMTECH e realizar um CRUD completo.

Optei por realizar o projeto em Laravel pois domino o mesmo e utilizei Boostrap para me ajudar no front.

### Instalação
Você precisa ter instalado em sua maquina as seguintes ferramentas:
    
```
- PHP, responsável pela execução do código;
- Composer, gerenciador de dependências da linguagem PHP;
- Visual Studio Code (ou outra IDE), editor para desenvolvimento de aplicações PHP;
- Git
```
    
Clone o Projeto
```
$ git clone https://github.com/DeyzianeCastelo/MMTECH_PROJETO.git)
```

Dentro do projeto baixe as dependêcias
```
$ composer install
```

## Configure o seu banco de dados.

No phpMyAdmin crie um database com o seguinte nome
```
'MMTECH_PROJETO'
```

Dentro do database vá em privilégios e adicione uma conta de utilizador com o mesmo nome
```
'MMTECH_PROJETO'
```

*Coloque uma senha que você irá lembrar e que ficara exposta no arquivo de configuração.*

Copie o arquivo .env.exemplo do projeto e renomeie ele para .env

O arquivo deve ficar assim:

```
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=MMTECH_PROJETO
DB_USERNAME=MMTECH_PROJETO
DB_PASSWORD=senha que você escolheu
```
Abra o terminal na sua propria IDE e Rode o comando
```
$ php artisan migrate
```

Pronto banco de dados configurado.

Rode na raiz do projeto, para subir o servidor
```
$ php artisan serve
```
