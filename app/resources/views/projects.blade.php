@if ($projects)
    @foreach($projects as $project)
    <project :data='@json($project)'></project>
    @endforeach
@endif