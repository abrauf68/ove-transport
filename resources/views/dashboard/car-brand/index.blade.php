@extends('layouts.master')

@section('title', __('Car Brands'))

@section('css')
@endsection


@section('breadcrumb-items')
    <li class="breadcrumb-item active">{{ __('Car Brands') }}</li>
@endsection
@section('content')
    <div class="container-xxl flex-grow-1 container-p-y">
        <!-- Car Brands List Table -->
        <div class="card">
            <div class="card-header">
                @canany(['create car brand'])
                    <a href="{{route('dashboard.car-brands.create')}}" class="add-new btn btn-primary waves-effect waves-light">
                        <i class="ti ti-plus me-0 me-sm-1 ti-xs"></i><span
                            class="d-none d-sm-inline-block">{{ __('Add New Car Brand') }}</span>
                    </a>
                @endcan
            </div>
            <div class="card-datatable table-responsive">
                <table class="datatables-users table border-top custom-datatables">
                    <thead>
                        <tr>
                            <th>{{ __('Sr.') }}</th>
                            <th>{{ __('Name') }}</th>
                            <th>{{ __('Status') }}</th>
                            @canany(['delete car brand', 'update car brand','view car model'])<th>{{ __('Action') }}</th>@endcan
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($carBrands as $index => $brand)
                            <tr>
                                <td>{{ $index + 1 }}</td>
                                <td>{{ $brand->name }}</td>
                                <td>
                                    <span class="badge me-4 bg-label-{{ $brand->is_active == 'active' ? 'success' : 'danger' }}">{{ ucfirst($brand->is_active) }}</span>
                                </td>
                                @canany(['delete car brand', 'update car brand','view car model'])
                                    <td class="d-flex">
                                        @canany(['delete car brand'])
                                            <form action="{{ route('dashboard.car-brands.destroy', $brand->id) }}" method="POST">
                                                @method('DELETE')
                                                @csrf
                                                <a href="#" type="submit"
                                                    class="btn btn-icon btn-text-danger waves-effect waves-light rounded-pill delete-record delete_confirmation"
                                                    data-bs-toggle="tooltip" data-bs-placement="top"
                                                    title="{{ __('Delete Car Brand') }}">
                                                    <i class="ti ti-trash ti-md"></i>
                                                </a>
                                            </form>
                                        @endcan
                                        @canany(['update car brand'])
                                            <span class="text-nowrap">
                                                <a href="{{ route('dashboard.car-brands.edit', $brand->id) }}"
                                                    class="btn btn-icon btn-text-primary waves-effect waves-light rounded-pill me-1"
                                                    data-bs-toggle="tooltip" data-bs-placement="top"
                                                    title="{{ __('Edit Car Brand') }}">
                                                    <i class="ti ti-edit ti-md"></i>
                                                </a>
                                            </span>
                                            <span class="text-nowrap">
                                                <a href="{{ route('dashboard.car-brands.status.update', $brand->id) }}"
                                                    class="btn btn-icon btn-text-primary waves-effect waves-light rounded-pill me-1"
                                                    data-bs-toggle="tooltip" data-bs-placement="top"
                                                    title="{{ $brand->is_active == 'active' ? __('Deactivate Car Brand') : __('Activate Car Brand') }}">
                                                    @if ($brand->is_active == 'active')
                                                        <i class="ti ti-toggle-right ti-md text-success"></i>
                                                    @else
                                                        <i class="ti ti-toggle-left ti-md text-danger"></i>
                                                    @endif
                                                </a>
                                            </span>
                                        @endcan
                                        @canany(['view car model'])
                                            <span class="text-nowrap">
                                                <a href="{{ route('dashboard.car-models.index', $brand->id) }}"
                                                    class="btn btn-icon btn-text-warning waves-effect waves-light rounded-pill me-1"
                                                    data-bs-toggle="tooltip" data-bs-placement="top"
                                                    title="{{ __('Car Models') }}">
                                                    <i class="ti ti-car ti-md"></i>
                                                </a>
                                            </span>
                                        @endcan
                                    </td>
                                @endcan
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection

@section('script')
    {{-- <script src="{{asset('assets/js/app-user-list.js')}}"></script> --}}
    <script>
        $(document).ready(function() {
            //
        });
    </script>
@endsection
