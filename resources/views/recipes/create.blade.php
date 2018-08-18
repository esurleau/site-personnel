@extends('../layouts.app')

@section('content')
<div class="container-fluid">
    {!! Form::open(['route' => 'recipes.store', 'method' => 'POST']) !!}
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class=row>
                    <div class="col-md-12 mb-3">
                        <div class="card">
                            <div class="card-header">
                                {!!Form::text('title',null,['class' => 'form-control', 'placeholder'=>'Titre','required'=>'required'])!!}
                            </div>
                            <div class="card-body">
                                {!!Form::textarea('description',null,['class' => 'form-control','rows'=>'4', 'placeholder'=>'Description courte de la recette','required'=>'required'])!!}
                            </div>
                        </div>
                    </div>
                    <div class="col-md-12">
                        <div class="card">
                            <div class="card-header">
                                Étapes
                            </div>
                            <div class="card-body">
                                <div class="row">
                                    <div class="col text-center">
                                        <span class="btn btn-success" id="addStepFieldButton">Autre étape</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="row mb-3">
                    <div class="col-md-12">
                        <div class="card">
                            <div class="card-header">
                                Ingrédients
                                <br>
                            </div>
                            <div class="card-body">
                                <span class="btn btn-success w-100" id="addIngedientFieldButton">Autre ingrédient</span>
                            </div>
                            <!--
                            <div class="card-footer">
                                <form id="addIngredient">
                                    <div class="input-group">
                                        <input type="text" class="form-control" id="name">
                                        <div class="input-group-append">
                                            <button class="btn btn-success">+</button>
                                        </div>
                                    </div>
                        
                                </form>
                            </div>-->
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <div class="card">
                            <div class="card-header">
                                <div class="card-title">
                                    Valider la recette
                                </div>
                            </div>
                            <div class="card-body">
                                <button class="btn btn-success" type="submit">Valider la recette</button>
                            </div>
                        </div>
                    </div>
                </div>
                
            </div>
        </div>
    {!! Form::close() !!}
</div>

@endsection
@section('footer')
<script>
        var nbIngredients=0;
        var nbEtapes=0;
        $(document).ready(function(){
            /*$('#addIngredient').click(function(e){
                var token= $('meta[name="csrf-token"]').attr('content');
                e.preventDefault();
                $.ajaxSetup({
                    headers: {
                        'X-CSRF-TOKEN': token
                    }
                });
                $.ajax({
                    url: "{{ route('ingredients.store') }}",
                    method: 'post',
                    data: {
                        name: $('#name').val()
                    },
                    success: function(result){
                        console.log(result);
                    }
                });
            });*/
            $('#addIngedientFieldButton').click(function(e){
                nbIngredients=nbIngredients+1;
                $("<div class='form-row'><div class='col'><input placeholder='Ingrédient' class='form-control' name='ingredient["+nbIngredients+"]' required></div><div class='col'><input placeholder='Quantité' class='form-control' name='quantity["+nbIngredients+"]' required></div></div>").insertBefore('#addIngedientFieldButton');
            });
            $('#addStepFieldButton').click(function(e){ 
                nbEtapes=nbEtapes+1; 
                $("<input placeholder='Étape "+nbEtapes+" : titre' class='form-control' name='steptitle["+nbEtapes+"]' required><textarea placeholder='Description de cette étape' class='form-control' name='stepcontent["+nbEtapes+"]' required></textarea><br>").insertBefore('#addStepFieldButton'); });
        });
    </script>
@endsection
