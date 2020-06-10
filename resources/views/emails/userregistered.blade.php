@component('mail::message')
@component('mail::panel')
# Olá, {{ $user->usuario }}!
 
<p>
  Recebemos sua solicitação para recuperação de senha.<br>
  Clique no botão para criar uma nova senha.
</p>
 
@component('mail::button', ['url' => $url, 'color' => 'success'])
  Criar nova senha
@endcomponent 
 
Atenciosamente,<br>
{{ config('app.name') }}
@endcomponent
@endcomponent

{{-- 
<h1>Obrigado pelo contato!</h1>
<p>Retornaremos assim que possível.</p>
<hr>
<p>Email enviado em {{date("d/m/Y H:i:s")}}</p> --}}