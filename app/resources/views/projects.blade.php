<div class='mt-24'>
@if ($projects)
    @foreach($projects as $project)
    <project :data='@json($project)'></project>
    @endforeach
@endif
</div>
