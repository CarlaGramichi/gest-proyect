<div class="col-12" style="flex: 0!important;">

    @if(count($errors))

        <div class="alert alert-danger" role="alert">

            <ul>
                @foreach($errors->all() as $error)

                    <li>{{ $error }}</li>

                @endforeach

            </ul>

        </div>

    @endif

    @if(session('success'))
        <div class="alert alert-success" role="alert">
            {!! session('success') !!}
        </div>

    @endif

</div>