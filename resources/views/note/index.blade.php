<x-bootlayout>
   <div class="row">


      @foreach($notes as $note)
      <div class="col-4">
         <div class="card mb-2">
            <h3 class="card-title">{{$note->title}}</h3>
            <div class="card-body">
               <p>{{Str::limit($note->note, 86)}}</p>
            </div>
            <div class="card-items">
               <div class="card-item">
                  <a class="btn btn-primary" href="{{route('notes.show', $note)}}"> View </a>
                  <a class="btn btn-success" href="{{route('notes.edit', $note)}}"> Edit </a>
                  <form action="{{route('notes.destroy', $note)}}" method="post">
                     @csrf
                     @method('DELETE')
                     <button class="btn btn-danger"> Delete </button>
                  </form>

               </div>
            </div>
         </div>
      </div>
      @endforeach
   </div>
</x-bootlayout>