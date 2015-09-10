@if (count($errors) > 0)
    <div class="alert alert-danger">
        <i class="glyphicon glyphicon-warning-sign"></i>
        <strong>Whoops!</strong> There were some problems with your input.<br><br>
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
