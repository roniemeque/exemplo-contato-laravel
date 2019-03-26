# Projeto de Teste

## Configurando
* Instalar dependências
* Copiar .env.example para .env
* Colocar banco *blank* (para MySQL, preferencialmente usar charset utf8mb4)
* Configurar driver de email (no desenvolvimento foi usado Mailtrap)
* Gerar chave com `php artisan key:generate`
* Para efeitos de desenvolvimento somente, deixar sem cache com `php artisan config:clear`

## Database
Com o banco configurado, rodar migrations com:
`php artisan migrate`

## Aplicação

### Rodando
Para Mac é recomendável usar *valet*, para outros, a forma mais rápida para testar é usando o server embutido para desenvolvimento do Laravel: `php artisan serve`

## Notas
* O formulário está em /contato mas / redireciona para lá
* Para guardar a data de envio, está sendo o usando o campo padrão created_at, que é formatado devidamente quando necessário, como no corpo do email
* Para o email está sendo usado markdown

## Testando
Para testar a aplicação por um todo, e não só units ou features, foi criado um teste com Laravel Dusk.
Para rodar o teste, executar `php artisan dusk`. Se algo der errado, confirmar que `__DIR__.'/pdf_exemplo.pdf'` remete corretamente para o arquivo .pdf de exemplo dentro da pasta /tests/Browser
