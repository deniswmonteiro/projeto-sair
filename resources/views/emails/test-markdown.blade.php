@component('mail::message')

{{-- # Olá {{ $user->name }}! --}}
 
<p>Esse é um e-mail de teste! =D</p>
 
@component('mail::button', ['url' => $url])
Visite o nosso site
@endcomponent
 
Obrigado,<br>
{{ config('app.name') }}
@endcomponent