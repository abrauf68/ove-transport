@extends('layouts.master')

@section('title', __('Edit Prices'))

@section('css')
@endsection


@section('breadcrumb-items')
    <li class="breadcrumb-item active">{{ __('Prices') }}</li>
@endsection
@section('content')
    <div class="container-xxl flex-grow-1 container-p-y">
        <div class="card mb-6">
            <!-- Account -->
            <div class="card-body pt-4">
                <form method="POST" action="{{ route('dashboard.prices.store') }}" enctype="multipart/form-data">
                    @csrf

                    <div class="row p-5">
                        <h3>{{ __('Edit Prices') }}</h3>
                        <div class="mb-4 col-md-12">
                            <label for="transport_price" class="form-label">{{ __('Transport Price') }}</label><span
                                class="text-danger">*</span>
                            <small>(Add transport price of vehicle per mile in {{ \App\Helpers\Helper::getCurrencySymbol() }})</small>
                            <input class="form-control @error('transport_price') is-invalid @enderror" type="number" step="any" id="transport_price"
                                name="transport_price" required value="{{ old('transport_price', $prices->transport_price) }}" autofocus />
                            @error('transport_price')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        <div class="mb-4 col-md-12">
                            <label for="enclosed_price" class="form-label">{{ __('Enclosed Price') }}</label><span
                                class="text-danger">*</span>
                            <small>(Add extra price for enclosed transportation of vehicle per mile in {{ \App\Helpers\Helper::getCurrencySymbol() }})</small>
                            <input class="form-control @error('enclosed_price') is-invalid @enderror" type="number" step="any" id="enclosed_price"
                                name="enclosed_price" required value="{{ old('enclosed_price', $prices->enclosed_price) }}" autofocus />
                            @error('enclosed_price')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        <div class="mb-4 col-md-12">
                            <label for="non_running_price" class="form-label">{{ __('Non Running Price') }}</label><span
                                class="text-danger">*</span>
                            <small>(Add extra price for a non running vehicle in {{ \App\Helpers\Helper::getCurrencySymbol() }})</small>
                            <input class="form-control @error('non_running_price') is-invalid @enderror" type="number" step="any" id="non_running_price"
                                name="non_running_price" required value="{{ old('non_running_price', $prices->non_running_price) }}" autofocus />
                            @error('non_running_price')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>
                    <div class="mt-2">
                        <button type="submit" class="btn btn-primary me-3">{{ __('Update Prices') }}</button>
                    </div>
                </form>
            </div>
            <!-- /Account -->
        </div>
    </div>
@endsection

@section('script')
    <script>
        $(document).ready(function() {
            //
        });
    </script>


@endsection
