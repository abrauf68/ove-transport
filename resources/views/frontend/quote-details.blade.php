@extends('frontend.layouts.master')

@section('title', 'Quote Details')
@section('meta_description', '')
@section('meta_keywords', '')

@section('css')
    <style>
        .price-box {
            border: 1px solid #ccc;
            border-radius: 8px;
            padding: 20px;
            min-height: 220px;
            text-align: center;
        }

        .price-box.selected {
            border: 2px solid #28a745;
            box-shadow: 0 0 10px rgba(40, 167, 69, 0.2);
        }

        .price {
            font-size: 36px;
            font-weight: bold;
        }

        .detail-label {
            font-weight: bold;
        }

        .detail-value {
            float: right;
        }

        .highlight-box {
            border: 1px solid #007bff;
            background-color: #e9f5ff;
            padding: 15px;
            border-radius: 6px;
            margin-bottom: 20px;
        }

        .due-now {
            color: #28a745;
            font-size: 24px;
            font-weight: bold;
        }
    </style>
@endsection

<!-- Page Title -->
@section('page_title')
    @include('frontend.layouts.partials.page_title', [
        'title' => 'Quote Details',
        'description' =>
            'Request a customized quote by providing your shipment details and we’ll get back to you promptly.',
        'breadcrumbs' => [['name' => 'Home', 'url' => route('frontend.home')], ['name' => 'Quote Details']],
    ])
@endsection
<!-- End Page Title -->

@section('content')
    <!-- Get A Quote Section -->
    <section id="get-a-quote" class="get-a-quote section">
        <div class="container">
            <h4 class="fw-bold mb-3">Ta-da!</h4>

            <div class="highlight-box">
                <p class="mb-0">Your quote has been e-mailed to you.<br>
                    Ready to book? Hooray! <strong>NO PAYMENT REQUIRED</strong> to book your shipment.</p>
            </div>

            <div class="row">
                <div class="col-md-8">
                    <div class="mb-3">
                        <span class="me-3"><strong>Service type</strong> <span class="text-muted">Door to
                                door</span></span>
                        <span><strong>Insurance</strong> <span class="text-muted">Included</span></span>
                    </div>
                    <div class="row mb-4">
                        <div class="col-md-12">
                            <div class="price-box selected">
                                <div class="text-success mb-2">
                                    <i class="bi bi-check-circle-fill"></i> Regular price
                                </div>
                                <div class="price text-dark">{{ \App\Helpers\Helper::formatCurrency($quote->price) }}</div>
                                <p class="mt-2 text-muted small">
                                    Once the order is assigned to a carrier, one-time payment in full by using your credit
                                    card or debit card will be charged.
                                </p>
                            </div>
                        </div>
                        {{-- <div class="col-md-6">
                            <div class="price-box">
                                <div class="mb-2 fw-bold">Discounted cash price</div>
                                <div class="price text-dark">$819</div>
                                <p class="mt-2 text-muted small">
                                    Once the order is assigned to a carrier, a partial payment will be charged, the balance
                                    will be due in cash on delivery.
                                </p>
                            </div>
                        </div> --}}
                    </div>

                    {{-- <button class="btn btn-danger w-100 mb-3">Continue to booking details</button> --}}
                    <p class="text-muted small">Don’t know the exact day? That’s ok! You can change at any time.<br>
                        You will be still able to review your order.</p>
                    <p class="text-muted small">— OR —</p>
                    <p class="text-muted small">
                        Book with one of our friendly Customer Service Agents!<br>
                        <a href="tel:+18886668929" class="fw-bold">(888) 666-8929</a>
                    </p>
                </div>

                <div class="col-md-4">
                    <div class="card p-3">
                        <h6 class="fw-bold">Details</h6>
                        <ul class="list-unstyled mb-0">
                            <li class="mb-2">
                                <span class="detail-label">Distance:</span>
                                <span class="detail-value">{{ $quote->distance }}</span>
                            </li>
                            <li class="mb-2">
                                <span class="detail-label">Vehicle:</span>
                                <span class="detail-value">{{ $quote->vehicle_year }} {{ $quote->vehicle_make }}
                                    {{ $quote->vehicle_model }}</span>
                            </li>
                            <li class="mb-2">
                                <span class="detail-label">Ship from:</span>
                                <span class="detail-value">{{ $quote->pickup_location }}</span>
                            </li>
                            <li class="mb-2">
                                <span class="detail-label">Ship to:</span>
                                <span class="detail-value">{{ $quote->delivery_location }}</span>
                            </li>
                            <li class="mb-2"><span class="detail-label">Vehicle condition:</span>
                                <div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" id="running" type="radio"
                                            data-id="{{ $quote->id }}" name="condition"
                                            {{ $quote->condition == 'running' ? 'checked' : '' }} value="running">
                                        <label for="running" class="form-check-label">Running</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" id="non-running" type="radio"
                                            data-id="{{ $quote->id }}" name="condition"
                                            {{ $quote->condition == 'non-running' ? 'checked' : '' }} value="non-running">
                                        <label for="non-running" class="form-check-label">Non-running (+{{ \App\Helpers\Helper::getNonRunningPrice($quote->distance) }})</label>
                                    </div>
                                </div>
                            </li>
                            <li class="mb-2"><span class="detail-label">Transport type:</span>
                                <div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" id="open" type="radio"
                                            data-id="{{ $quote->id }}" name="transport_type"
                                            {{ $quote->transport_type == 'open' ? 'checked' : '' }} value="open">
                                        <label for="open" class="form-check-label">Open</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" id="enclosed" type="radio"
                                            data-id="{{ $quote->id }}" name="transport_type"
                                            {{ $quote->transport_type == 'enclosed' ? 'checked' : '' }} value="enclosed">
                                        <label for="enclosed" class="form-check-label">Enclosed
                                            (+{{ \App\Helpers\Helper::getEnclosedPrice($quote->distance) }})</label>
                                    </div>
                                </div>
                            </li>
                            <li class="mb-2">
                                <span class="detail-label">Service type:</span>
                                <span class="detail-value">Door to door</span>
                            </li>
                            <li class="mb-2">
                                <span class="detail-label">Insurance:</span>
                                <span class="detail-value">Included</span>
                            </li>
                            <li class="mb-2"><span class="detail-label">Transit time:</span> <span
                                    class="detail-value">2–4 days</span></li>
                            <li class="mt-3">
                                <span class="fw-bold">Due now</span> <span class="due-now">$0</span><br>
                                <small class="text-muted">Don’t worry – you won’t pay until your pickup is
                                    scheduled.</small>
                            </li>
                            <li class="mt-2"><span class="fw-bold">Price option:</span> <br>
                                {{ \App\Helpers\Helper::formatCurrency($quote->price) }} Regular price</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- /Get A Quote Section -->

@endsection

@section('script')
    {!! NoCaptcha::renderJs() !!}
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js"
        integrity="sha512-v2CJ7UaYy4JwqLDIrZUI/4hqeoQieOmAZNXBeQyjo21dadnwR+8ZaIJVT8EE2iyI61OV8e6M8PP2/4hpQINQ/g=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script>
        $(document).ready(function() {
            $('input[name="condition"], input[name="transport_type"]').on('change', function() {
                let quoteId = $(this).data('id');
                let condition = $('input[name="condition"]:checked').val();
                let transportType = $('input[name="transport_type"]:checked').val();

                $.ajax({
                    url: '{{ route("frontend.get-a-quote.update", ":id") }}'.replace(':id', quoteId),
                    method: 'POST',
                    data: {
                        condition: condition,
                        transport_type: transportType,
                    },
                    headers: {
                        'X-CSRF-TOKEN': '{{ csrf_token() }}'
                    },
                    success: function(response) {
                        console.log('Quote updated successfully:', response);
                        window.location.reload();
                    },
                    error: function(xhr) {
                        console.error('Error updating quote:', xhr.responseText);
                    }
                });
            });
        });
    </script>
@endsection
