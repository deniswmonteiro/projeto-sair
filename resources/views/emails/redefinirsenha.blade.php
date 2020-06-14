@component('mail::message')
@component('mail::panel')
# Olá!
 
<p>
  Recebemos sua solicitação para redefinição de senha.<br>
  Clique no botão para criar uma nova senha.
</p>
 
@component('mail::button', ['url' => $url, 'color' => 'success'])
  Redefinir Senha
@endcomponent

<p>Desconsidere esse email se você não solicitou redefinição de senha.</p>
 
Atenciosamente,<br>
{{config('app.name')}}
@endcomponent
@endcomponent