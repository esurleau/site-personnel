@extends('../layouts.app')

@section('content')
<div class="container-fluid">
    <div class="row justify-content-center">
        <div class="col-md-3">
            <div class="card">
                <div class="card-header">
                    Ingrédients
                    <br>
                </div>
                <ul class="list-group list-group-flush">
                    @foreach ($ingredients as $ingredient)
                    
                    <li class="list-group-item">
                        {{$ingredient['quantity']}} {{$ingredient->ingredient['name']}}
                    </li>
                    @endforeach
                </ul>
            </div>
        </div>
        <div class="col-md-9">
            <div class=row>
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header">
                            {{$recipe->title}}
                        </div>
                        <div class="card-body">
                            {{$recipe->description}}
                        </div>
                    </div>
                </div>
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header">
                            Étapes
                        </div>
                        <ul class="list-group list-group-flush">
                            @foreach ($recipe->steps as $step)
                                <li class="list-group-item">
                                    <h4>Étape {{$loop->iteration." : ".$step['title']}}</h4>
                                    {{$step['content']}}
                                </li>
                            @endforeach
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
