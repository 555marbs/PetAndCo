<div class="card">
    <div class="card-header p-0">
        <h3 class="card-title">{{ __('CreateTitle', ['name' => __('Adoption') ]) }}</h3>
        <div class="px-2 mt-4">
            <ul class="breadcrumb mt-3 py-3 px-4 rounded">
                <li class="breadcrumb-item"><a href="@route(getRouteName().'.home')" class="text-decoration-none">{{ __('Dashboard') }}</a></li>
                <li class="breadcrumb-item"><a href="@route(getRouteName().'.adoption.read')" class="text-decoration-none">{{ __(\Illuminate\Support\Str::plural('Adoption')) }}</a></li>
                <li class="breadcrumb-item active">{{ __('Create') }}</li>
            </ul>
        </div>
    </div>

    <form class="form-horizontal" wire:submit.prevent="create" enctype="multipart/form-data">

        <div class="card-body">
                        <!-- Title Input -->
            <div class='form-group'>
                <label for='input-title' class='col-sm-2 control-label '> {{ __('Title') }}</label>
                <input type='text' id='input-title' wire:model.lazy='title' class="form-control  @error('title') is-invalid @enderror" placeholder='' autocomplete='on'>
                @error('title') <div class='invalid-feedback'>{{ $message }}</div> @enderror
            </div>
            <!-- Content Input -->
            <div class='form-group'>
                <label for='input-content' class='col-sm-2 control-label '> {{ __('Content') }}</label>
                <input type='text' id='input-content' wire:model.lazy='content' class="form-control  @error('content') is-invalid @enderror" placeholder='' autocomplete='on'>
                @error('content') <div class='invalid-feedback'>{{ $message }}</div> @enderror
            </div>
            <!-- Contact Input -->
            <div class='form-group'>
                <label for='input-contact' class='col-sm-2 control-label '> {{ __('Contact') }}</label>
                <input type='text' id='input-contact' wire:model.lazy='contact' class="form-control  @error('contact') is-invalid @enderror" placeholder='' autocomplete='on'>
                @error('contact') <div class='invalid-feedback'>{{ $message }}</div> @enderror
            </div>

        </div>

        <div class="card-footer">
            <button type="submit" class="btn btn-info ml-4">{{ __('Create') }}</button>
            <a href="@route(getRouteName().'.adoption.read')" class="btn btn-default float-left">{{ __('Cancel') }}</a>
        </div>
    </form>
</div>
