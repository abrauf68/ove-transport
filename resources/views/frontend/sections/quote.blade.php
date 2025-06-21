<style>
    :root {
        --primary: #6366f1;
        --primary-hover: #4f46e5;
        --success: #22c55e;
    }

    /* body {
        background-color: #f8fafc;
        font-family: 'Inter', sans-serif;
    }

    .container {
        max-width: 800px;
        margin: 2rem auto;
    } */

    .form-section {
        background: #fff;
        padding: 2.5rem;
        border-radius: 16px;
        border: 1px solid #e2e8f0;
        box-shadow: 0 1px 3px rgba(0, 0, 0, 0.03);
    }

    h3 {
        color: #1e293b;
        font-weight: 600;
        font-size: 1.5rem;
        margin-bottom: 2rem;
    }

    .form-label {
        font-weight: 500;
        color: #64748b;
        font-size: 0.875rem;
        margin-bottom: 0.5rem;
    }

    .form-control,
    .form-select {
        border-radius: 8px;
        padding: 0.75rem 1rem;
        border: 1px solid #cbd5e1;
        font-size: 0.9375rem;
        transition: all 0.2s ease;
    }

    .form-control:focus,
    .form-select:focus {
        border-color: var(--primary);
        box-shadow: 0 0 0 3px rgba(99, 102, 241, 0.15);
    }

    .progress-tracker {
        position: relative;
        display: flex;
        justify-content: space-between;
        margin: 3rem 0 2rem;
    }

    .progress-step {
        position: relative;
        width: 48px;
        height: 48px;
        border-radius: 50%;
        background: #fff;
        border: 2px solid #e2e8f0;
        display: flex;
        align-items: center;
        justify-content: center;
        font-weight: 600;
        color: #94a3b8;
        z-index: 2;
        transition: all 0.3s ease;
    }

    .progress-step::before {
        content: '';
        position: absolute;
        top: 50%;
        left: -44px;
        width: 44px;
        height: 2px;
        background: #e2e8f0;
        transform: translateY(-50%);
    }

    .progress-step:first-child::before {
        display: none;
    }

    .progress-step.active {
        border-color: var(--primary);
        color: var(--primary);
        background: #eef2ff;
    }

    .progress-step.completed {
        border-color: var(--success);
        background: var(--success);
        color: white;
    }

    .form-step {
        display: none;
        animation: fadeIn 0.3s ease;
    }

    @keyframes fadeIn {
        from {
            opacity: 0;
            transform: translateY(10px);
        }

        to {
            opacity: 1;
            transform: translateY(0);
        }
    }

    .form-step.active {
        display: block;
    }

    .btn-primary {
        background: linear-gradient(to right, var(--primary), #818cf8);
        border: none;
        padding: 0.75rem 1.5rem;
        font-weight: 500;
        font-size: 0.9375rem;
        border-radius: 8px;
        transition: all 0.2s ease;
    }

    .btn-primary:hover {
        background: linear-gradient(to right, var(--primary-hover), #6366f1);
        transform: translateY(-1px);
        box-shadow: 0 4px 6px rgba(99, 102, 241, 0.15);
    }

    .btn-secondary {
        background: #fff;
        border: 1px solid #cbd5e1;
        color: #64748b;
        padding: 0.75rem 1.5rem;
    }

    .btn-secondary:hover {
        background: #f8fafc;
        border-color: #94a3b8;
    }

    .card {
        border: 1px solid #e2e8f0;
        border-radius: 12px;
        background: #f8fafc;
    }

    .form-check-input {
        width: 1.1em;
        height: 1.1em;
        margin-top: 0.15em;
    }

    .suggestions-container {
        border-radius: 8px;
        box-shadow: 0 4px 6px rgba(0, 0, 0, 0.05);
        border: 1px solid #e2e8f0;
    }

    .suggestion-item:hover {
        background: #f1f5f9;
    }

    .navigation-buttons {
        margin-top: 2rem;
        display: flex;
        justify-content: flex-end;
        gap: 1rem;
    }
</style>

<!-- Get A Quote Section -->
<section id="get-a-quote" class="get-a-quote section">
    <div class="container">
        <div class="row g-0" data-aos="fade-up" data-aos-delay="100">

            <div class="col-lg-5 quote-bg" style="background-image: url({{ asset('frontAssets/img/quote-bg.jpg') }});">
            </div>

            <div class="col-lg-7" data-aos="fade-up" data-aos-delay="200">
                <div class="form-section">

                    <form id="shippingForm" action="{{ route('frontend.get-a-quote.submit') }}" method="post">
                        @csrf
                        <!-- Step 1: Zip Codes + Transport Type -->
                        <div class="form-step active" data-step="1">
                            <h5>Get an instant quote</h5>
                            <p>or call now (888) 666-8929</p>
                            <div class="row g-3">
                                <div class="col-md-12">
                                    <label class="form-label">Transport Car FROM (ZIP)</label>
                                    <div class="zip-suggestions">
                                        <input type="text" name="pickup_location" class="form-control" id="pickupZip"
                                            placeholder="ZIP or City" required>
                                        <div class="invalid-feedback">Please enter a valid pickup ZIP code.</div>
                                        <div class="suggestions-container" id="pickupSuggestions"></div>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <label class="form-label">Transport Car TO (ZIP)</label>
                                    <div class="zip-suggestions">
                                        <input type="text" name="delivery_location" class="form-control"
                                            id="deliveryZip" placeholder="ZIP or City" required>
                                        <div class="invalid-feedback">Please enter a valid pickup ZIP code.</div>
                                        <div class="suggestions-container" id="deliverySuggestions"></div>
                                    </div>
                                </div>
                                <div class="col-12 mt-3">
                                    <label class="form-label">Transport Type</label><br>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="transport_type"
                                            value="open" required checked>
                                        <label class="form-check-label">Open</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="transport_type"
                                            value="enclosed" required>
                                        <label class="form-check-label">Enclosed</label>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Step 2: Vehicle Details -->
                        <div class="form-step" data-step="2">
                            <div class="row g-3">
                                <div class="col-md-12">
                                    <label class="form-label">Vehicle Year</label>
                                    <select class="form-select" name="vehicle_year" required id="vehicleYear">
                                        <option value="" selected disabled>Select Year</option>
                                        <!-- Year Options -->
                                        <script>
                                            const currentYear = new Date().getFullYear();
                                            for (let y = currentYear; y >= 1900; y--) {
                                                document.write(`<option value="${y}">${y}</option>`);
                                            }
                                        </script>
                                    </select>
                                    <div class="invalid-feedback">Please select year.</div>
                                </div>
                                <div class="col-md-12">
                                    <label class="form-label">Vehicle Make</label>
                                    <select class="form-select" name="vehicle_make" required id="vehicleMake">
                                        <option value="" selected disabled>Select Make</option>
                                        @if (count(\App\Helpers\Helper::getCarBrands()) > 0)
                                            @foreach (\App\Helpers\Helper::getCarBrands() as $brand)
                                                <option value="{{ $brand->name }}" data-brand_id="{{ $brand->id }}"
                                                    {{ old('vehicle_make') == $brand->name ? 'selected' : '' }}>
                                                    {{ $brand->name }}</option>
                                            @endforeach
                                        @endif
                                    </select>
                                    <div class="invalid-feedback">Please select make.</div>
                                </div>
                                <div class="col-md-12">
                                    <label class="form-label">Vehicle Model</label>
                                    <select class="form-select" name="vehicle_model" required id="vehicleModel">
                                        <option value="" selected disabled>Select Model</option>
                                    </select>
                                    <div class="invalid-feedback">Please select model.</div>
                                </div>
                                <div class="col-12 mt-3">
                                    <label class="form-label">Is it Operable?</label><br>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="condition" value="running"
                                            required checked>
                                        <label class="form-check-label">Yes</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="condition"
                                            value="non-running" required>
                                        <label class="form-check-label">No</label>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Step 3: Contact Info -->
                        <div class="form-step" data-step="3">
                            <div class="row g-3">
                                <div class="col-md-12">
                                    <label class="form-label">Full Name</label>
                                    <input type="text" name="name" class="form-control" required
                                        id="fullName">
                                    <div class="invalid-feedback">Full Name field is required.</div>
                                </div>
                                <div class="col-md-12">
                                    <label class="form-label">Email</label>
                                    <input type="email" name="email" class="form-control" required
                                        id="email">
                                    <div class="invalid-feedback">Email field is required.</div>
                                </div>
                                <div class="col-md-12">
                                    <label class="form-label">Phone Number</label>
                                    <input type="tel" name="phone" class="form-control" required
                                        id="phone">
                                    <div class="invalid-feedback">Phone Number field is required.</div>
                                </div>
                            </div>
                        </div>

                        <!-- Step 4: Review -->
                        <div class="form-step" data-step="4">
                            <h3 class="mb-4">Review Details</h3>
                            <div class="card">
                                <div class="card-body">
                                    <dl class="row">
                                        <dt class="col-sm-4">Pickup Location</dt>
                                        <dd class="col-sm-8" id="reviewPickup"></dd>

                                        <dt class="col-sm-4">Delivery Location</dt>
                                        <dd class="col-sm-8" id="reviewDelivery"></dd>

                                        <dt class="col-sm-4">Transport Type</dt>
                                        <dd class="col-sm-8" id="reviewTransportType"></dd>

                                        <dt class="col-sm-4">Vehicle</dt>
                                        <dd class="col-sm-8" id="reviewVehicle"></dd>

                                        <dt class="col-sm-4">Operable</dt>
                                        <dd class="col-sm-8" id="reviewOperable"></dd>

                                        <dt class="col-sm-4">Contact Info</dt>
                                        <dd class="col-sm-8" id="reviewContact"></dd>

                                        <dt class="col-sm-4">Estimated Distance</dt>
                                        <dd class="col-sm-8" id="reviewDistance">Calculating...</dd>
                                        <input type="text" hidden name="distance" id="reviewDistanceInput">
                                    </dl>
                                </div>
                            </div>
                        </div>

                        <!-- Navigation Buttons -->
                        <div class="d-flex justify-content-between mt-4">
                            <button type="button" class="btn btn-primary w-100" id="nextBtn">Vehicle Details <i
                                    class="fa fa-arrow-right"></i></button>
                        </div>
                    </form>

                    <div class="d-flex justify-content-between mt-4" id="progressBar">
                        <div>
                            <div class="progress-step active" data-step="1">1</div>
                            <p>Destination</p>
                        </div>
                        <div>
                            <div class="progress-step" data-step="2">2</div>
                            <p>Vehicle</p>
                        </div>
                        <div>
                            <div class="progress-step" data-step="3">3</div>
                            <p>User Info</p>
                        </div>
                        <div>
                            <div class="progress-step" data-step="4">4</div>
                            <p>Review</p>
                        </div>
                    </div>
                </div>
            </div><!-- End Quote Form -->

        </div>
    </div>
</section>
<!-- /Get A Quote Section -->

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js"
        integrity="sha512-v2CJ7UaYy4JwqLDIrZUI/4hqeoQieOmAZNXBeQyjo21dadnwR+8ZaIJVT8EE2iyI61OV8e6M8PP2/4hpQINQ/g=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script>
        $(document).ready(function () {
            $('#vehicleMake').on('change', function () {
                var brandId = $(this).find(':selected').data('brand_id');

                if (brandId) {
                    $.ajax({
                        url: '{{ route("frontend.get.models", ":id") }}'.replace(':id', brandId),
                        type: 'GET',
                        dataType: 'json',
                        success: function (response) {
                            $('#vehicleModel').empty().append('<option value="" disabled selected>Select Model</option>');

                            if (response.success && response.models.length > 0) {
                                $.each(response.models, function (key, model) {
                                    $('#vehicleModel').append('<option value="' + model.name + '">' + model.name + '</option>');
                                });
                            }
                        },
                        error: function () {
                            alert('Failed to fetch vehicle models.');
                        }
                    });
                } else {
                    $('#vehicleModel').empty().append('<option value="" disabled selected>Select Model</option>');
                }
            });
        });
        let currentStep = 1;
        const totalSteps = 4;

        function setupZipAutocomplete(inputId, suggestionsId) {
            const $input = $('#' + inputId);
            const $suggestions = $('#' + suggestionsId);

            $input.on('input', function () {
                const zip = $(this).val().trim();
                if (zip.length === 5 && /^\d+$/.test(zip)) {
                    $.getJSON(`https://api.zippopotam.us/us/${zip}`)
                        .done(function (data) {
                            const items = data.places.map(place => `
                                <div class="suggestion-item" data-value="${place['place name']}, ${place['state abbreviation']} ${zip}">
                                    ${place['place name']}, ${place['state abbreviation']} ${zip}
                                </div>
                            `).join('');
                            $suggestions.html(items).show();
                        })
                        .fail(function () {
                            $suggestions.html('<div class="suggestion-item">No locations found</div>').show();
                        });
                } else {
                    $suggestions.hide();
                }
            });

            $suggestions.on('click', '.suggestion-item', function () {
                $input.val($(this).data('value'));
                $suggestions.hide();
            });
        }

        function showStep(step) {
            $('.form-step').removeClass('active');
            $(`[data-step="${step}"]`).addClass('active');

            $('.progress-step').each(function (index) {
                $(this).toggleClass('active', index < step);
            });

            const buttonLabels = {
                1: 'Vehicle Details  <i class="fa fa-arrow-right"></i>',
                2: 'Confirmation Details  <i class="fa fa-arrow-right"></i>',
                3: 'Review Details  <i class="fa fa-arrow-right"></i>',
                4: 'Calculate Cost'
            };
            $('#nextBtn').html(buttonLabels[step]);
        }

        function validateStep(step) {
            let isValid = true;

            // Clear previous invalid classes
            $(`[data-step="${step}"] .form-control, [data-step="${step}"] .form-select`).removeClass('is-invalid');

            // Validate required fields
            $(`[data-step="${step}"] [required]`).each(function () {
                if (!this.checkValidity() || !$(this).val()) {
                    $(this).addClass('is-invalid');
                    isValid = false;
                }
            });

            // Special validation for step 1: ZIPs must be different
            if (step === 1) {
                const from = $('#pickupZip').val().trim();
                const to = $('#deliveryZip').val().trim();

                const fromZip = from.match(/\d{5}/)?.[0];
                const toZip = to.match(/\d{5}/)?.[0];

                if (fromZip && toZip && fromZip === toZip) {
                    $('#pickupZip, #deliveryZip').addClass('is-invalid');
                    $('#pickupZip').next('.invalid-feedback').text('Pickup and Delivery ZIPs must be different.');
                    $('#deliveryZip').next('.invalid-feedback').text('Pickup and Delivery ZIPs must be different.');
                    isValid = false;
                }
            }

            return isValid;
        }

        function updateReview() {
            const transportType = $('input[name="transport_type"]:checked').val() || '';
            const operable = $('input[name="condition"]:checked').val() || '';

            const pickup = $('#pickupZip').val();
            const delivery = $('#deliveryZip').val();

            $('#reviewPickup').text($('#pickupZip').val());
            $('#reviewDelivery').text($('#deliveryZip').val());
            $('#reviewTransportType').text(transportType);

            const year = $('#vehicleYear').val();
            const make = $('#vehicleMake').val();
            const model = $('#vehicleModel').val();
            $('#reviewVehicle').text(`${year} ${make} ${model}`);
            $('#reviewOperable').text(operable);

            const name = $('#fullName').val();
            const email = $('#email').val();
            const phone = $('#phone').val();
            $('#reviewContact').html(`${name} <br> ${email} <br> ${phone}`);

            // Fetch coordinates and calculate distance
            const pickupZip = pickup.match(/\d{5}/)?.[0];
            const deliveryZip = delivery.match(/\d{5}/)?.[0];

            if (pickupZip && deliveryZip) {
                Promise.all([
                    $.getJSON(`https://api.zippopotam.us/us/${pickupZip}`),
                    $.getJSON(`https://api.zippopotam.us/us/${deliveryZip}`)
                ])
                    .then(([pickupData, deliveryData]) => {
                        const [lat1, lon1] = [parseFloat(pickupData.places[0].latitude), parseFloat(pickupData.places[0].longitude)];
                        const [lat2, lon2] = [parseFloat(deliveryData.places[0].latitude), parseFloat(deliveryData.places[0].longitude)];

                        const distance = haversineDistance(lat1, lon1, lat2, lon2);
                        $('#reviewDistance').text(`${distance.toFixed(1)} miles`);
                        $('#reviewDistanceInput').val(`${distance.toFixed(1)} miles`);
                    })
                    .catch(() => {
                        $('#reviewDistance').text('Distance unavailable');
                        $('#reviewDistanceInput').val(`0 miles`);
                    });
            } else {
                $('#reviewDistance').text('Invalid ZIPs');
            }
        }

        // Haversine formula
        function haversineDistance(lat1, lon1, lat2, lon2) {
            function toRad(x) {
                return x * Math.PI / 180;
            }

            const R = 3958.8; // Radius of the Earth in miles
            const dLat = toRad(lat2 - lat1);
            const dLon = toRad(lon2 - lon1);
            const a = Math.sin(dLat / 2) * Math.sin(dLat / 2) +
                Math.cos(toRad(lat1)) * Math.cos(toRad(lat2)) *
                Math.sin(dLon / 2) * Math.sin(dLon / 2);
            const c = 2 * Math.atan2(Math.sqrt(a), Math.sqrt(1 - a));
            return R * c;
        }

        $('#nextBtn').on('click', function () {
            if (validateStep(currentStep)) {
                if (currentStep < totalSteps) {
                    currentStep++;
                    showStep(currentStep);
                    if (currentStep === totalSteps) {
                        updateReview();
                    }
                } else if (currentStep === totalSteps) {
                    $('#shippingForm').submit();
                }
            }
            // if (currentStep < totalSteps && validateStep(currentStep)) {
            //     currentStep++;
            //     showStep(currentStep);
            //     if (currentStep === totalSteps) updateReview();
            // } else if (currentStep === totalSteps) {
            //     alert("Form submitted!");
            //     $('#shippingForm')[0].reset();
            //     location.reload();
            // }
        });

        $('.progress-step').on('click', function () {
            const step = parseInt($(this).data('step'));
            if (step < currentStep) {
                currentStep = step;
                showStep(currentStep);
            }
        });

        // Initialize autocompletes
        setupZipAutocomplete('pickupZip', 'pickupSuggestions');
        setupZipAutocomplete('deliveryZip', 'deliverySuggestions');
    </script>
