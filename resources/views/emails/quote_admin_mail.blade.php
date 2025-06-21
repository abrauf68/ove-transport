@extends('layouts.mails.master')

@section('title', 'New Quote Submission')

@section('css')
@endsection

@section('content')
    <p>{{ __('Hi') }} <strong>Admin</strong>,</p>

    <p>You have received a new quote submission. Please find the details below:</p>

    <hr>

    <h4 style="margin-bottom: 10px;">🚚 Shipment Details</h4>
    <p><strong>Quote ID:</strong> {{ $quote->quoteId }}</p>
    <p><strong>Pickup Location:</strong> {{ $quote->pickup_location }}</p>
    <p><strong>Delivery Location:</strong> {{ $quote->delivery_location }}</p>
    <p><strong>Transport Type:</strong> {{ ucfirst($quote->transport_type) }}</p>
    <p><strong>Distance:</strong> {{ $quote->distance }}</p>

    <hr>

    <h4 style="margin-bottom: 10px;">🚗 Vehicle Information</h4>
    <p><strong>Vehicle Year:</strong> {{ $quote->vehicle_year }}</p>
    <p><strong>Vehicle Make:</strong> {{ $quote->vehicle_make }}</p>
    <p><strong>Vehicle Model:</strong> {{ $quote->vehicle_model }}</p>
    <p><strong>Condition:</strong> {{ ucfirst($quote->condition) }}</p>

    <hr>

    <h4 style="margin-bottom: 10px;">👤 User Information</h4>
    <p><strong>Name:</strong> {{ $quote->name }}</p>
    <p><strong>Email:</strong> {{ $quote->email }}</p>
    <p><strong>Phone:</strong> {{ $quote->phone }}</p>

    @if (!empty($quote->message))
        <p><strong>Message:</strong> {{ $quote->message }}</p>
    @endif

    <hr>

    <p>You can respond to this email directly, or log into the admin panel for further actions and follow-up.</p>

    <a href="{{ route('dashboard') }}" class="cta-button" style="display:inline-block; padding:10px 20px; background:#007BFF; color:#fff; text-decoration:none; border-radius:5px;">Go to Dashboard</a>
@endsection

@section('script')
@endsection
