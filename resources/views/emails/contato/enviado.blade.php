@component('mail::message')
# Contato Enviado!

@component('mail::table')
| Dados       |          |
| ------------- |:-------------:|
| Nome     | {{$contato->nome}}      |
| Email      | {{$contato->email}}      |
| Telefone      | {{$contato->telefone}}      |
| Mensagem      | {{$contato->mensagem}} |
| IP      | {{$contato->ip_acesso}} |
| Enviado em:      | {{$contato->created_at->format('d/m/Y - H:i')}} |
@endcomponent

@endcomponent
