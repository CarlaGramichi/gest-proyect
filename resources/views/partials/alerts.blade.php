<div class="col-12" style="flex: 0!important;">

    @if(count($errors))

            <ul class="list-unstyled">
                @foreach($errors->all() as $error)

                    <li>
                        <div class="alert alert-danger" role="alert">
                            <b>{{ $error }}</b>
                        </div>
                    </li>

                @endforeach

            </ul>

    @endif

    @if(session('success'))
        <div class="alert alert-success" role="alert">
            {!! session('success') !!}
        </div>

    @endif

</div>
