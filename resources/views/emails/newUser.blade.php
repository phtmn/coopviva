

@component('mail::message')


    <p>Um novo usuário foi cadastrado no sistema.</p>

    Nome: {{$user->name}}
    Email: {{$user->email}}
    Estado: {{$user->uf}}
    Tipo Perfil: {{$user->tipo_usuario}}
    Tipo : {{$user->tipo}}

@endcomponent



