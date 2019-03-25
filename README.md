# Laboratório Laravel e Vue

Neste repositório estão todas as dicas e tdo mais que vou estudando sobre o laravel e tbm sobre vue

## Autenticação do laravel.

* Fontes:
** https://laravel.com/docs/5.7/authentication#introduction


### Introtução 

* O arquivo que define todos os parâmetros sobre a autenticação ficam em `config/auth.php`
* Dentro do arquivo temos o array "default" nele são guardados: O modo de autendicação (chave: guard) e o modo de recuperação de senha chave password
** O guard tipo web pode usar tanto o session storage quando os cookies para gerir a autenticação dos usuários
* Os providers guardam a maneira com que os dados serão recuperados do repositorio. Atualmente podem acontecer vua eloquent ou direto da base de dados. Novos providers podem ser criados

### Considerações sobre a base de dados
* Por padrão utiliza-se o providers via eloquent
* A coluna de password deve ter no minimos tamanha 60, bom mesmo eria usar o tamanho total de 255.
* a coluna de remember_token deve permitir valore nulos

### Autenticação
* Existem uma série de autenticadores pre construídos,  Todos na pasta `Http/Controllers/Auth`
* Cada um tem uma responsabilidade bem definida, e para maioria das aplicações não precisam de modificação.
* use o comando `php artisan make:auth` para ativar todas as rotas, views necessárias e também um homeController (Muita coisa)

# Exercicios e tópicos
* Criar uma autenticação modelo
* Uso do session storage como autenticação?
* Uso do cookie na autenticação?
* Como utilizar novos providers?
* fazer um exemplo detalhado para cada um dos `Http/Controllers/Auth`
* como funciona a função Hash::make utilizada dentro de `Http/Controllers/Auth/RegisterController`
* Transformar o login do laravel para o vue
* Criar autenticação com jwt

# Models
* Criar models e alimenta-los via tinker ($fillable)
* usar os $casts, $hiddens

# Envido de E-mails
* Como configurar...

# middleweres
* Como configurar...

# Controlers
* Como configurar validatos como em `Http/Controllers/Auth/RegisterController`






