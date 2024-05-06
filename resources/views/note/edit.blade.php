<x-bootlayout>
   <div class="row">
      <div class="col-8 offset-2">
         <form action="{{route('notes.update', $note)}}" method="post" enctype="multipart/form-data">
            @csrf
            @method('PUT')
            <div class="mb-3">
               <label for="exampleFormControlInput1" class="form-label">Note Title</label>
               <input type="text" class="form-control" value="{{$note->title}}" name="title" placeholder="name@example.com">
            </div>
            <div class="mb-3">
               <label for="exampleFormControlTextarea1" class="form-label">Note Body</label>
               <textarea class="form-control" name="note" rows="3">{{$note->note}}</textarea>
            </div>
            <div class="mb-3">
               <label for="formFile" class="form-label">upload many images</label>
               <input class="form-control" type="file" name="images[]" multiple>
            </div>
            <div class="col-auto">
               <button type="submit" class="btn btn-primary mb-3"> Update </button>
            </div>
         </form>
      </div>
   </div>
</x-bootlayout>