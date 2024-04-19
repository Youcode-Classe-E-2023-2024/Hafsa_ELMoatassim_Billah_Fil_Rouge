<!DOCTYPE html>
<html>
<head>
    <title>Response</title>
</head>
<body>
<h2>Bonjour {{ $user->first_name }}{{ $user->last_name }},</h2>
<p>Voici la réponse à votre réclamation :</p>
{{--@dd($messagy)--}}
<p>{{ $messagy }}</p>
<p>Merci de nous contacter.</p>
</body>
</html>
