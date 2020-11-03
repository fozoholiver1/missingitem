<div class="mx-lg-5 mt-lg-3">
    <div class="jumbotron p-4 p-md-5 text-white rounded bg-dark ">
        <div class="col-md-12 px-0">
            <h1 class="display-4 font-italic"> hellow {{ $item->owner }} You just found your missing item</h1>
            <p class="lead my-3"> in order to contact the person who found your item after reading the details below click
                the contact button
                to connect</p>
            <p class="lead mb-0"><a href="#" class="text-white font-weight-bold">Continue reading...</a></p>
        </div>
    </div>

    <div class="row mb-2 mt-lg-5 my-lg-3 my-2">
        <div class="col-md-12">
            <div
                class="row no-gutters border rounded overflow-hidden flex-md-row mb-4 shadow-sm h-md-250 position-relative">
                <div class="col p-4 d-flex flex-column position-static">
                    <strong class="d-inline-block mb-2 text-primary">{{$item->owner}}</strong>
                    <h3 class="mb-0"> This was uploaded by  {{$item->connectyu_username}}</h3>
                    <div class="mb-1 text-muted">on the {{$item->created_at}}</div>
                    <p class="card-text mb-auto">{{$item->description}}</p>

                </div>
                <img src="{{asset('app/'.$item->image)}}" alt="crazy">
                <div class="col-auto d-none d-lg-block">
                </div>
            </div>
        </div>

    </div>

</div>
