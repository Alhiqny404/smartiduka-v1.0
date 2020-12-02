@component('mail::message')
# Peninjauan poting lowongan kerja

Postingan lowongan kerja anda telah disetujui...

@component('mail::button', ['url' => ''])
Button Text
@endcomponent

Thanks,<br>
{{ config('app.name') }}
@endcomponent
