## Base Inicial dos Sistemas em CI 3.0.2 + HMVC

1. [CodeIgniter 3.0.2](http://www.codeigniter.com/)
2. [HMVC para CodeIgniter 3x](https://bitbucket.org/wiredesignz/codeigniter-modular-extensions-hmvc)
3. [PHP IDE - PhpStorm 9.0.2](https://www.jetbrains.com/phpstorm/)

Não foi feita nenhuma alteração extra a não ser a implementação do HMVC, as configurações para remover o index.php e
foi modificado a language para Português do Brasil.

## Configurações

- Já está configurado o .htaccess e o arquivo config.php para que não exiba o index.php na barra de navegação.
- Está configurado também um arquivo autocomplete.php dentro da pasta application/config para facilitar o
auto complete da IDE PhpStorm.
- Caso use essa IDE recomendo que abra o arquivo autocomplete.php para entender e poder colocar seus models, libraries,
Helpers para a IDE auto completar seu projeto.

## Padrão

Por padrão utilizo um model Sistema_model.php que serve para fazer os gets e os CRUDs no sistema para não ter a 
necessidade de estar criando vários models com os gets e cruds sempre.

## Contribuição

Caso alguém queira contribuir com alguma coisa, esteja a vontade.

## Futuramente

Pretendo colocar também alguns modulos como login, upload de fotos, interação com o facebook, etc...
