<x-bootlayout>
   <div class="row">
      <div class="col-8 offset-2">
         <div class="card">
            <div class="card-body">
               <div  id="imageCarousel" class="carousel slide" data-bs-ride="carousel">
                  <div class="carousel-inner">
                     @php
                        $images = json_decode($note->images, true);
                     @endphp
                     @foreach ($images as $key => $image)
                     <div class="carousel-item {{$key == 0 ? 'active' : ''}}">
                        <img src="{{asset('storage/uploads') . '/' . $image}}" class="d-block w-100" alt="...">
                     </div>
                     @endforeach
                  </div>
                  <button class="carousel-control-prev" type="button" data-bs-target="#imageCarousel" data-bs-slide="prev">
                     <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                     <span class="visually-hidden">Previous</span>
                  </button>
                  <button class="carousel-control-next" type="button" data-bs-target="#imageCarousel" data-bs-slide="next">
                     <span class="carousel-control-next-icon" aria-hidden="true"></span>
                     <span class="visually-hidden">Next</span>
                  </button>
               </div>
               <h5 class="card-title">{{$note->title}}</h5>
               <p class="card-text">{{$note->note}}</p>
               <div class="card-items">
                  <div class="card-item">
                     <a class="btn btn-primary" href="{{route('notes.index')}}"> Back </a>
                     <a class="btn btn-success" href="{{route('notes.edit', $note)}}"> Edit </a>
                     <a class="btn btn-danger"> Delete </a>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </div>

</x-bootlayout>