## Projeto controle de seriados

 Projeto tem com intuito gerenciar as series do usuários e conforme o mesmo quiser, podendo adicionar, excluir e alterar as series como desejar.


## Requisitos para aplicação 

 A estrutura do Lumen tem alguns requisitos de sistema para o seu funcionamento.

 * PHP >= 7.3
 * OpenSSL PHP Extension
 * PDO PHP Extension
 * Mbstring PHP Extension

## Instalação da aplicação
 
 Para que possa subir a aplicação para utilização da mesma será necessário a configuração do framework Laravel.

 O Laravel utiliza o Composer para gerenciar suas dependências. Portanto, antes de usar o Lumen, certifique-se de ter o Composer instalado em sua máquina. 

 * Encontrará o mesmo no seguinte dependências https://getcomposer.org/.

 * Para subir a aplicação laravel será necessário rodar o comando em seu terminal.
  
 * composer create-project --prefer-dist laravel/laravel "Nome do projeto" 8.*


## Servidor para testes
 
 * Para rodar o seu projeto localmente, você pode usar a máquina virtual Laravel Homestead, Laravel Valet ou o servidor de desenvolvimento PHP embutido:

 * php -S localhost:8080 -t public

 Também podendo usar o Artisan para subir um server local.

 * php artisan server 
 
 O servidor irá ficar alocado no link: http://localhost:8000/

## Configurações. 

 Todas as opções de configuração para a estrutura do Laravel são armazenadas no arquivo .env. Depois de instalar o Laravel, você também deve configurar seu ambiente local.


## Sistemas operacionais
 
 A aplicação esta disponivel nos sistemas operacionais, Linux , Windows e IOS (MAC).


## Documentação oficial Laravel
 
 Caso tenha duvidas, pode acessar a documentação oficional do Laravel para verificação dos processos de integração e ferramentas do framework.

 * https://laravel.com/docs/8.x