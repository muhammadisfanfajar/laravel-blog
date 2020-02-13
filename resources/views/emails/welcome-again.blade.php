@component('mail::message')
# Introduction

Thanks so much for registering!

@component('mail::button', ['url' => 'https://google.com'])
Google it!
@endcomponent

@component('mail::panel', ['url' => ''])
Hei hei!
@endcomponent

Thanks,<br>
{{ config('app.name') }}
@endcomponent
