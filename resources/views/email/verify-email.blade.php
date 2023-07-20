<p>Hello {{ $user->name }},</p>
<p>Please click on the following link to verify your email address:</p>
<p>User name: {{$user->username}}</p>
<p>Password: {{$user->password}}</p>
<p><a href="{{ $url }}">{{ $url }}</a></p>
<p>Thank you for using our application!</p>
