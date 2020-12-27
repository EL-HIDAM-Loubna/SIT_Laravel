@component('mail::message')
# new Project {{ $project->title }}

{{$project->description}}

@component('mail::button', ['url' => url('/projects/'.$project->id)])
view project
@endcomponent

Thanks,<br>
{{ config('app.name') }}
@endcomponent
