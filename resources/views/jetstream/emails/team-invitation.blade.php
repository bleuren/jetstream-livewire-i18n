@component('mail::message')
{{ __('jetstream.invitation.email.greeting', ['team' => $invitation->team->name]) }}

@if (Laravel\Fortify\Features::enabled(Laravel\Fortify\Features::registration()))
{{ __('jetstream.invitation.email.register_description') }}

@component('mail::button', ['url' => route('register')])
{{ __('jetstream.invitation.email.create_account') }}
@endcomponent

{{ __('jetstream.invitation.email.existing_account') }}

@else
{{ __('jetstream.invitation.email.body') }}
@endif

@component('mail::button', ['url' => $acceptUrl])
{{ __('jetstream.invitation.email.accept') }}
@endcomponent

{{ __('jetstream.invitation.email.ignore') }}
@endcomponent
