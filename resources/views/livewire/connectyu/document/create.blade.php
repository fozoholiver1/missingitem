<div class="mt-lg-5">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">

                <div class="card-header  "><h5 class="display-6"> Upload Your Missing Item</h5>
                    <div class="card-body">
                        <form class="needs-validation" wire:submit.prevent="submit" enctype="multipart/form-data" en>
                            <div class="row g-3">


                                <div class="col-12">
                                    <label for="username" class="form-label">Your title</label>
                                    <div class="input-group">
                                        <span class="input-group-text bg-success"> <i class="align-bo "></i> </span>
                                        <input type="text" wire:model="title" class="form-control"
                                               placeholder="  your title">
                                        @error('title') <span
                                            class="text-danger alert-danger">{{ $message }}</span> @enderror
                                    </div>
                                </div>



                                <div class="col-12">
                                    <label for="body" class="form-label">body</label>
                                    <textarea class="form-control" wire:model="body" rows="9"></textarea>
                                    @error('body') <span
                                        class="text-danger alert-danger">{{ $message }}</span> @enderror
                                </div>


                                <hr class="my-4">

                                <button class="btn btn-primary btn-lg btn-block" type="submit">Continue to submit
                                </button>
                        </form>

                    </div>
                </div>
            </div>
        </div>


    </div>


