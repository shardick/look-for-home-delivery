@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">{{ __('common.register_your_store') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('stores.register.action') }}">
                        @csrf

                        <div class="form-group row">
                            <label for="store_category_id" class="col-md-4 col-form-label text-md-right">{{ __('common.category') }} *</label>

                            <div class="col-md-6">
                                <select id="store_category_id" class="form-control @error('store_category_id') is-invalid @enderror" name="store_category_id" value="{{ old('store_category_id') }}" required>
                                    @foreach ($categories as $cat)
                                        <option value="{{ $cat->id }}">{{ $cat->name }}</option>
                                    @endforeach
                                </select>

                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>


                        <div class="form-group row">
                            <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('common.name') }} *</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('common.email') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" autocomplete="email">

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="website" class="col-md-4 col-form-label text-md-right">{{ __('common.website') }}</label>

                            <div class="col-md-6">
                                <input id="website" type="url" class="form-control @error('website') is-invalid @enderror" name="website" value="{{ old('website') }}" autocomplete="website">

                                @error('website')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="telephone_number" class="col-md-4 col-form-label text-md-right">{{ __('common.telephone') }} *</label>

                            <div class="col-md-6">
                                <input id="telephone_number" type="text" class="form-control @error('telephone_number') is-invalid @enderror" name="telephone_number" value="{{ old('telephone_number') }}" required>

                                @error('telephone_number')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="address" class="col-md-4 col-form-label text-md-right">{{ __('common.address') }} *</label>

                            <div class="col-md-6">
                                <input id="address" type="text" class="form-control @error('address') is-invalid @enderror" value="{{ old('address') }}" name="address" required>

                                @error('address')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="locality" class="col-md-4 col-form-label text-md-right">{{ __('common.locality') }} *</label>

                            <div class="col-md-6">
                                <input id="locality" type="text" class="form-control @error('locality') is-invalid @enderror" value="{{ old('locality') }}" name="locality" required>

                                @error('locality')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="zipcode" class="col-md-4 col-form-label text-md-right">{{ __('common.postalcode') }} *</label>

                            <div class="col-md-6">
                                <input id="zipcode" type="text" class="form-control @error('zipcode') is-invalid @enderror" value="{{ old('zipcode') }}" name="zipcode" required>

                                @error('zipcode')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="province" class="col-md-4 col-form-label text-md-right">{{ __('common.province') }} *</label>

                            <div class="col-md-6">
                                <select id="province" class="form-control @error('province') is-invalid @enderror" name="province" value="{{ old('province') }}" required>
                                    @foreach ($provinces as $p)
                                        <option value="{{ $p->code }}">{{ $p->name }}</option>
                                    @endforeach
                                </select>

                                @error('province')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="home_delivery_enabled" class="col-md-4 col-form-label text-md-right">{{ __('common.home_delivery_enabled') }} *</label>

                            <div class="col-md-6">
                                <select name="home_delivery_enabled" id="home_delivery_enabled" class="form-control" required>
                                    <option value="1">{{ __('common.yes') }}</option>
                                    <option value="0">{{ __('common.no') }}</option>
                                </select>
                        
                                @error('home_delivery_enabled')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="pickup_in_store_enabled" class="col-md-4 col-form-label text-md-right">{{ __('common.pickup_in_store') }} *</label>

                            <div class="col-md-6">
                            <select name="pickup_in_store_enabled" id="pickup_in_store_enabled" class="form-control" required>
                                    <option value="1">{{ __('common.yes') }}</option>
                                    <option value="0">{{ __('common.no') }}</option>
                                </select>

                                @error('pickup_in_store_enabled')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="comments" class="col-md-4 col-form-label text-md-right">{{ __('common.contact_information') }}</label>

                            <div class="col-md-6">
                                <textarea id="comments" class="form-control @error('comments') is-invalid @enderror" name="comments">{{ old('comments') }}</textarea>

                                @error('province')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        <div class="form-group row">
                            <div class="col-md-4">&nbsp;</div>
                            <div class="col-md-6">
                                {{ __("common.mandatory_fields") }}
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('common.register') }}
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
