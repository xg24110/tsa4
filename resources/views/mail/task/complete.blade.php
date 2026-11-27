<x-mail::message>
# Congratulations!

You completed your task!
The task will now be removed from the list.

<x-mail::button :url="'/task'">
View Email
</x-mail::button>

Thanks,<br>
{{ config('app.name') }}
</x-mail::message>
