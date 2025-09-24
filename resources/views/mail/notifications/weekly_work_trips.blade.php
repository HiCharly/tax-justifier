<x-mail::message>
# Rappel : Saisissez vos déplacements professionnels

Bonjour,

Nous vous rappelons de saisir vos déplacements en présentiels de la semaine.

<x-mail::button :url="$url">
Saisir mes déplacements
</x-mail::button>

Bonne journée,<br>
L'équipe {{ config('app.name') }}
</x-mail::message>
