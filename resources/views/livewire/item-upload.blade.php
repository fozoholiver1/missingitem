
    <div class="mt-lg-5">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">

                    <div class="card-header  "><h5 class="display-6"> Upload Your Missing Item</h5>
                        <div class="card-body">
                            <form class="needs-validation" wire:submit.prevent="submit"  enctype="multipart/form-data" en>
                                <div class="row g-3">

                                    <div class="col-sm-6">
                                        <label for="country" class="form-label"> Country</label>
                                        <input type="text" class="form-control" wire:model="country" placeholder=" your country" value="" >
                                        @error('country') <span class="text-danger alert-danger">{{ $message }}</span> @enderror
                                    </div>

                                    <div class="col-sm-6">
                                        <label for="city" class="form-label">city</label>
                                        <input type="text" class="form-control" wire:model="city" placeholder="your city" >
                                        @error('city') <span class="text-danger alert-danger">{{ $message }}</span> @enderror

                                    </div>

                                    <div class="col-12">
                                        <label for="username" class="form-label">Your ConnectYu Username</label>
                                        <div class="input-group">
                                            <span class="input-group-text bg-success"> <i class="align-bo "></i> </span>
                                            <input type="text" wire:model="connectyu_username" class="form-control" placeholder=" ConnectYU Username" >
                                            @error('connectyu_username') <span class="text-danger alert-danger">{{ $message }}</span> @enderror
                                        </div>
                                    </div>

                                    <div class="col-12">
                                        <label for="owner" class="form-label"> <span
                                                class="text-muted">Names On the Item</span></label>
                                        <input type="text" class="form-control"  placeholder="names here" wire:model="owner" >
                                        @error('owner') <span class="text-danger alert-danger">{{ $message }}</span> @enderror

                                    </div>

                                    <div class="col-12">

                                        @if ($image)
                                            Photo Preview:
                                            <img class="w-20" src="{{ $image->temporaryUrl() }}" >
                                        @endif
                                        <label for="owner" class="form-label"> <span
                                                class="text-muted">image</span></label>
{{--                                            <div wire:loading wire:target="image">Uploading...</div>--}}
                                            <div
                                            x-data="{ isUploading: false, progress: 0 }"
                                            x-on:livewire-upload-start="isUploading = true"
                                            x-on:livewire-upload-finish="isUploading = true"
                                            x-on:livewire-upload-error="isUploading = true"
                                            x-on:livewire-upload-progress="progress = $event.detail.progress"
                                            >
                                                <!-- File Input -->
{{--                                                <input type="file" wire:model="photo">--}}
                                                <input type="file" class="form-control"  wire:model="image" >

                                                <!-- Progress Bar -->
                                                <div x-show="isUploading">
                                                    <progress max="100" x-bind:value="progress"></progress>
                                                </div>
                                            </div>
                                        @error('image') <span class="text-danger alert-danger">{{ $message }}</span> @enderror

                                    </div>

                                    <div class="col-12">
                                        <label for="description" class="form-label">description</label>
                                        <textarea class="form-control" wire:model="description" rows="3"></textarea>
                                        @error('description') <span class="text-danger alert-danger">{{ $message }}</span> @enderror
                                    </div>


                                    <hr class="my-4">

                                    <button class="btn btn-primary btn-lg btn-block" type="submit">Continue to submit</button>
                            </form>

                        </div>
                    </div>
                </div>
            </div>






        </div>


