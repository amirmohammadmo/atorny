@if($file && count($file) >0)
    @foreach($file as $fil)

        <div class="card accordion-item">
            <h2 class="accordion-header" id="headingOne">
                <button type="button" class="accordion-button collapsed" data-bs-toggle="collapse" data-bs-target="#accordionOne" aria-expanded="false" aria-controls="accordionOne">
                    {{$fil->category->name}}              </button>
            </h2>

            <div id="accordionOne" class="accordion-collapse collapse" data-bs-parent="#accordionExample" style="">
                <div class="accordion-body">

                    <a href="{{Route('user.download',$fil->id)}}"><button type="button" class="btn btn-success">دانلود</button></a>
                </div>
            </div>
        </div>

    @endforeach
@else <div class="alert alert-primary" role="alert">هنوز فایلی برای شما بارگزاری نشده</div>@endif
