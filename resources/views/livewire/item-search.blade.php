<div class="row justify-content-center">

    <div class="col-8">
        <div class="pricing-header px-3 py-3 pt-md-5 pb-md-4 mx-auto text-center ">
            <h1 class="display-4">Search</h1>
            <p class="lead"> Start typing your name in the input box immidiatle below and get instant sort. click on the
                click on the name to get details on how to contact the " good Samarita "</p>
            <div class="">

                <div class=" mt-5 form-inline d-flex justify-content-center md-form form-sm active-cyan-2 mt-2">
                    <input  wire:model="search" class="form-control " type="text" placeholder="type your name here">

                </div>
                @if ($search)

                    <div class=" list-group pt-5 justify-content-center pb-3">
                        @foreach($items as $item)
                            <a href="/items/{{$item->id}}" class="">
                            <div class="d-flex justify-content-between">
                                <p CLASS="pr-lg-5">Name: {{$item->owner}}</p>
                                <p  CLASS="pr-lg-5">Country: {{$item->country}}</p>
                                <p  CLASS=""> City: {{$item->city}}</p>

                              </div>
                                </a>


                    @endforeach
                    </div>
                @endif
            </div>
        </div>
    </div>


</div>
