@extends('../layouts.app')

@section('content')
<div class="container-fluid">
    <div class="row justify-content-center">
        <div class="col-md-3">
            <div class="card">
                {!! Form::open(['route' => 'notes.store', 'method' => 'POST']) !!}
                    <div class="card-header bg-success">                                
                        {!!Form::text('title',null,['class' => 'form-control', 'placeholder'=>'Titre'])!!}
                    </div>
                    <div class="card-body">
                        {!!Form::text('content',null,['class' => 'form-control', 'placeholder'=>'contenu'])!!}
                        <label>Priorité : </label>
                        {!!Form::select('priority', ['1' => 'Imortante', '2' => 'Normale', '3' => 'Faible'], '2',['class'=>'form-control custom-select']);!!}
                        <br>
                        {!! Form::submit('Valider', ['class' => 'btn btn-success form-control mt-3']) !!}
                    </div> 

                {!! Form::close() !!}   

            </div> 
        </div>
        <div class="col-md-3">
            @foreach($notes as $note)
                @if($note->priority==1)
                    @include('notes.note', ['note'=>$note,'color'=>'bg-danger'])
                @endif
           @endforeach
        </div>
        <div class="col-md-3">
            @foreach($notes as $note)
                @if($note->priority==2)
                    @include('notes.note', ['note'=>$note,'color'=>'bg-warning'])
                @endif
           @endforeach
        </div>
        <div class="col-md-3">
            @foreach($notes as $note)
                @if($note->priority==3)
                    @include('notes.note', ['note'=>$note,'color'=>'bg-secondary'])
                @endif
           @endforeach
        </div>
    </div>
</div>
@endsection
