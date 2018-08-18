<template>
    <div class="card">
        <div class="card-header">
            Ingrédients
            <br>
        </div>
        <div class="card-body">
            {!! Form::open(['method' => 'POST','route' => ['ingredients.store'],'style'=>'display:inline']) !!}
                {!!Form::text('name',null,['class' => 'form-control', 'placeholder'=>'Nom'])!!}
                {!! Form::submit('Ajouter', ['class' => 'btn btn-success']) !!}
            {!! Form::close() !!}
        </div>
    </div>
</template>

