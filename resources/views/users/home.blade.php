@extends('layouts.app')
@section('content')
    <div class="tour container">
        <div class="tour-head">
            <div class="tour-head-left">
                <div class="tour-title">
                    Book your Appointment and Feel Free
                </div>
                <div class="tour-overview">
                    <div class="tour-overview-item">
                        Around <span>Chennai</span>
                    </div>
                    {{-- <div class="tour-overview-item"><span>9</span> days</div> --}}
                    <div class="tour-overview-item">
                        <span class="material-icons-outlined"> star </span>
                        <span>4.7</span> (55 reviews)
                    </div>
                </div>
            </div>
        </div>
        <!-- tour head -->

        <div class="tour-wrapper">
            <div class="tour-content">
                <div class="tour-hero">
                    <div class="tour-image">
                        <img src="{{ asset('assets/doctors-8852331_1280.png') }}" alt="">
                    </div>
                </div>
                <!-- tour hero -->

                <div class="tour-content-block">
                    <div class="tour-description">
                        Welcome to our state-of-the-art general clinic, where your health and well-being are our top
                        priorities. At "{{ env('APP_NAME') }}", we provide a wide range of medical services designed to
                        cater to your entire family’s needs. Whether you require routine check-ups, vaccinations, or
                        treatment for common illnesses, our experienced team of doctors and healthcare professionals is here
                        to assist you.
                    </div>
                </div>
                <!-- block -->
                <div class="tour-content-block">
                    <div class="tour-content-title">Customer Reviews</div>
                    <div class="tour-reviews">
                        <div class="tour-reviews-feedback">
                            <div class="tour-reviews-feedback-item">
                                <div class="tour-reviews-feedback-content">
                                    <div class="tour-reviews-feedback-icon">
                                        <span class="material-icons-outlined">
                                            earbuds
                                        </span>
                                    </div>
                                    <div class="tour-reviews-feedback-content-inner">
                                        <div class="tour-reviews-feedback-title">
                                            Doctors
                                        </div>
                                        <div class="tour-reviews-feedback-text">
                                            Excellent
                                        </div>
                                    </div>
                                </div>
                                <div class="tour-reviews-feedback-rating">4.8</div>
                            </div>

                            <div class="tour-reviews-feedback-item">
                                <div class="tour-reviews-feedback-content">
                                    <div class="tour-reviews-feedback-icon">
                                        <span class="material-icons-outlined">
                                            record_voice_over
                                        </span>
                                    </div>
                                    <div class="tour-reviews-feedback-content-inner">
                                        <div class="tour-reviews-feedback-title">
                                            Consultation
                                        </div>
                                        <div class="tour-reviews-feedback-text">
                                            Excellent
                                        </div>
                                    </div>
                                </div>
                                <div class="tour-reviews-feedback-rating">4.9</div>
                            </div>

                            <div class="tour-reviews-feedback-item">
                                <div class="tour-reviews-feedback-content">
                                    <div class="tour-reviews-feedback-icon">
                                        <span class="material-icons-outlined">
                                            directions_bus
                                        </span>
                                    </div>
                                    <div class="tour-reviews-feedback-content-inner">
                                        <div class="tour-reviews-feedback-title">
                                            Ambulance
                                        </div>
                                        <div class="tour-reviews-feedback-text">
                                            Excellent
                                        </div>
                                    </div>
                                </div>
                                <div class="tour-reviews-feedback-rating">4.9</div>
                            </div>

                            <div class="tour-reviews-feedback-item">
                                <div class="tour-reviews-feedback-content">
                                    <div class="tour-reviews-feedback-icon">
                                        <span class="material-icons-outlined">
                                            hotel
                                        </span>
                                    </div>
                                    <div class="tour-reviews-feedback-content-inner">
                                        <div class="tour-reviews-feedback-title">
                                            Bed Facility
                                        </div>
                                        <div class="tour-reviews-feedback-text">
                                            Excellent
                                        </div>
                                    </div>
                                </div>
                                <div class="tour-reviews-feedback-rating">4.5</div>
                            </div>
                        </div>
                        <div class="tour-reviews-overall">
                            <div class="tour-reviews-content">
                                <div class="tour-reviews-overall-title">
                                    Overall Rating
                                </div>
                                <div class="tour-reviews-overall-text">
                                    Excellent
                                </div>
                                <div class="tour-reviews-overall-rating">4.7</div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- block -->

                <div class="tour-content-block">
                    <div class="tour-help">
                        <div class="tour-help-inner">
                            <div class="tour-help-content">
                                <div class="tour-help-title">Need Help Booking?</div>
                                <div class="tour-help-text">
                                    Call our customer services team on the number
                                    below to speak to one of our advisors who will
                                    help you with all of your holiday needs.
                                </div>
                            </div>
                            <div class="tour-help-call">
                                <span class="material-icons-outlined"> call </span>
                                <div class="tour-help-call-text">
                                   <a href="tel:+917339158045">7339158045</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- block -->
            </div>
            <!-- content -->

            <div class="tour-sidebar">
                <div class="tour-receipt">
                    <div class="">
                        <div class="max-w-md mx-auto">
                            <form class="bg-white px-2 pt-4 pb-4 mb-4 apointment-form" method="POST" action="{{ url('book-now') }}">
                                @csrf
                                <div class="mb-4">
                                    <label for="name" class="block text-gray-700 text-sm font-bold mb-2">Name</label>
                                    <input type="text" id="name" name="name" placeholder="Enter your name"
                                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white">
                                </div>
                                <div class="mb-4">
                                    <label for="dob" class="block text-gray-700 text-sm font-bold mb-2">Date of
                                        Birth</label>
                                    <input type="date" id="dob" name="dob"
                                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white">
                                </div>
                                <div class="mb-4">
                                    <label for="phone" class="block text-gray-700 text-sm font-bold mb-2">Phone
                                        Number</label>
                                    <input type="tel" id="phone" name="phone" placeholder="+919876543210"
                                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white">
                                </div>
                                <div class="mb-4">
                                    <label for="category"
                                        class="block text-gray-700 text-sm font-bold mb-2">Category</label>
                                    <select id="category" name="category"
                                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white">
                                        <option value="general">General</option>
                                        <option value="specialist">Specialist</option>
                                        <option value="emergency">Emergency</option>
                                    </select>
                                </div>
                                <div class="mb-4">
                                    <label for="datetime" class="block text-gray-700 text-sm font-bold mb-2">Preferred
                                        Date & Time</label>
                                    <input type="datetime-local" id="datetime" name="datetime"
                                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white">
                                </div>
                                <div class="flex justify-center mt-6">
                                    <button type="button" class="cursor-pointer book-now tour-reserve">Book Now</button>
                                </div>
                            </form>
                        </div>

                    </div>
                </div>
            </div>
            <!-- sidebar -->
        </div>
    </div>
    @push('scripts')
        <script>
            $('.appointment-form').validate();
            $('.book-now').on('click',function(){
                if($('.appointment-form').valid()){
                    alert()
                }
            })
        </script>
    @endpush
@endsection