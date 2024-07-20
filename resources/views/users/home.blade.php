@extends('layouts.app')
@section('content')
    <div class="tour container">
        <div class="tour-head !my-4">
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
        <div class="my-2">
            <marquee class="text-gray-500" behavior="scroll">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud</marquee>
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
                            <form class="bg-white px-2 pt-4 pb-4 mb-4 appointment-form" method="POST" action="{{ url('book-now') }}">
                                @csrf
                                <div class="mb-4">
                                    <label for="name" class="block text-gray-700 text-sm font-bold mb-2">Name <span class="text-red-700">*</span></label>
                                    <input type="text" id="name" name="name" placeholder="Enter your name" required
                                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white">
                                </div>
                                <div class="mb-4">
                                    <label for="dob" class="block text-gray-700 text-sm font-bold mb-2" max="{{ date('Y-m-d') }}">Date of
                                        Birth</label>
                                    <input type="date" id="dob" name="dob"
                                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white">
                                </div>
                                <div class="mb-4">
                                    <label for="phone" class="block text-gray-700 text-sm font-bold mb-2">Phone <span class="text-red-700">*</span></label>
                                    <input type="tel" id="phone" name="phone" placeholder="+919876543210" required
                                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white">
                                        <span class="text-red-600 text-sm phone-error"></span>
                                </div>
                                <div class="mb-4">
                                    <label for="email" class="block text-gray-700 text-sm font-bold mb-2">Email </label>
                                    <input type="text" id="email" name="email" placeholder="example@mail.com"
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
                                    <label for="datetime" class="block text-gray-700 text-sm font-bold mb-2" min="{{ date('Y-m-d') }}">Preferred
                                        Date & Time</label>
                                    <input type="datetime-local" id="datetime" name="datetime"
                                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white">
                                </div>
                                <div class="mb-4">
                                    <label for="message" class="block text-gray-700 text-sm font-bold mb-2" min="{{ date('Y-m-d') }}">Message <span class="text-gray-500 italic font-medium">(optional)</span></label>
                                    <textarea id="message" name="message" rows="4" cols=""
                                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white"></textarea>
                                </div>
                                <div class="flex justify-center mt-6">
                                    <button type="button" class="cursor-pointer book-now tour-reserve">Book Now</button>
                                    <button style="display: none " type="button" class="cursor-pointer tour-reserve !bg-green-400">Booked</button>
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
            $('.appointment-form').validate({
                messages:{
                    name:'Name is required',
                    phone:'Phone is required'
                }
            });
            $('.book-now').on('click',function(){
                let elem=this;
                if($('.appointment-form').valid()){
                    let val=$('.appointment-form').serialize();
                    $.ajax({
                        url:"{{ url('book-now') }}",
                        type:"POST",
                        data:val,
                        success:function(res){
                            if(res.success){
                                $(elem).hide();
                                $(elem).next().show();
                            }else{
                                $('.phone-error').text(res.message);
                            }
                        }
                    })
                }
            })
        </script>
    @endpush
@endsection
