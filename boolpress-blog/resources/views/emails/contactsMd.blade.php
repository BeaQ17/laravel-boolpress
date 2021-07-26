@component("mail::message")
# Introduction

Name: {{$contact->name}}
Email: {{$contact->email}}
Message Text:
    {{$contact->message}}


@component("mail::button", ["url" => ""])
Button text
@endcomponent

Thanks, {{config("app.name")}}

@endcomponent