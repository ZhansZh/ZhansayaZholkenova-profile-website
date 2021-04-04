Hello {{$demo->receiver}},
THis is a demo email for testing purposes! Also, it's the html version.

Demo object values:

Demo One: {{ $demo->demo_one }}
Demo Two: {{ $demo->demo_two }}

Values passed by With method:


testVarOne: {{ $testVarOne }}
testVarTwo: {{ $testVarTwo }}

Thank you,
{{ $demo->sender }}