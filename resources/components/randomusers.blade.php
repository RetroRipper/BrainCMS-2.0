<div class="card">
    <div class="card-body">
        <div class="card-top">Random Users</div>
        @foreach ($randomUsers as $users)
            <div class="randomusers">
            <img class="randomusersavatar" src="https://www.habbo.nl/habbo-imaging/avatarimage?figure={{$users->look}}&amp;head_direction=3&amp;gesture=sml&amp;size=m&amp;headonly=1" data-toggle="tooltip" data-placement="top" title="{{$users->username}}">
            </div>
        @endforeach
    </div>
</div>