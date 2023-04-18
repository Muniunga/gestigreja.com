@component('mail::message')
Ola{{$user->name}},

<p>lorem lorem fgdfdd</p>

@component('mail::button', ['url' => url('reset/'.$user->remember_token)])
recuperar password
@endcomponent

Obrigado <br/>
{{config('app.name') }}
@endcomponent
