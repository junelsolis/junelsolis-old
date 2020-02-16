<section class='mt-24' id='projects'>
<in-viewport section='Projects'></in-viewport>
@if ($projects)
    @foreach($projects as $project)
    <project :data='@json($project)'></project>
    @endforeach
@endif
</section>
