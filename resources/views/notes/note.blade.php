<div class="card">
    <div class="card-header {{$color}}">                                
        {{$note->title}}
        <div class="float-right">
            {!! Form::open(['method' => 'DELETE','route' => ['notes.destroy', $note->id]]) !!}
                <button class="btn btn-danger border border-white" type="submit"><i class="fa fa-trash "></i></button> 
            {!! Form::close()!!}
        </div>
        <div class="float-right">
            <span type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal{{$note->id}}">
                <i class="fa fa-edit"></i>
            </span>
        </div>
    </div>
	<div class="card-body">
	    {{$note->content}}
	</div>
</div>
<div class="modal fade" id="exampleModal{{$note->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">{{$note->title}}</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
            </div>
            {!!Form::model($note, ['method' => 'PUT','route' => array('notes.update', $note)])!!}
            <div class="modal-body">
                {!!Form::text('title',null,['class' => 'form-control'])!!}
                {!!Form::text('content',null,['class' => 'form-control', 'placeholder'=>'contenu'])!!}
                {!!Form::select('priority', ['1' => 'Imortante', '2' => 'Normale', '3' => 'Faible'],null,['class'=>'form-control custom-select']);!!}
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <button type="submit" class="btn btn-primary">Save changes</button>
            </div>
            {!! Form::close()!!}
        </div>
    </div>
</div>
