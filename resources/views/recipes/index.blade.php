@extends('../layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <div class="row">
                        <div class="col-md-8">
                            <h2 class="card-title m-0">Recettes</h2>
                        </div>
                        <div class="col-md-4">
                        <a href="{{ route('recipes.create') }}" class="btn btn-success float-right"><i class="fa fa-plus"></i></a>
                        </div>
                    </div>
                </div>
                <div class="card-body table-responsive p-0">
                    <table class="table table-bordered table-hover m-0">
                        <thead class="thead-dark">
                            <tr>
                                <th>Titre</th>
                                <th>Description</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($recipes as $recipe)
                            <tr>
            
                                <td>{{ $recipe->title }}</td>
                                <td>{{ $recipe->description }}</td>
                                <td width="320px">
            
                                    <a class="btn btn-info" href="{{ route('recipes.show',$recipe->id) }}"><i class="fa fa-eye "></i></a>
            
                                    <a class="btn btn-primary" href="{{ route('recipes.edit',$recipe->id) }}"><i class="fa fa-edit "></i></a>
                                    {!! Form::open(['method'=> 'DELETE','route' => ['recipes.destroy', $recipe->id],'style'=>'display:inline']) !!}
                                        <button class="btn btn-danger border border-white" type="submit"><i class="fa fa-trash "></i></button>
                                    {!! Form::close() !!}
                                </td>
            
                            </tr>
            
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
        

    </div>
</div>
@endsection
