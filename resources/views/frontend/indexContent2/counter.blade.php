<!--=========== Counter Section Start =========-->
@php
    $overview = App\Models\Overview::all()->take(4);
@endphp
<section class="tj-counter-section-two">
    <div class="container">
        <div class="row">
            @if ($overview->count() > 0)
                @foreach ($overview as $data)
                    <div class="col-xl-3 col-lg-6 col-md-6 col-sm-6">
                        <div class="counter-item-three">
                            <div class="counter-icon">
                                <i class="flaticon-{{ $data->icon_name ?? 'experience' }}"></i>
                            </div>
                            <div class="counter-number">
                                <div class="tj-count"><span class="odometer" data-count="{{$data->experience ?? '7'}}">0</span>+</div>
                                <span class="sub-title">{{$data->title ?? 'Years Experience'}}</span>
                            </div>
                        </div>
                    </div>
                @endforeach
            @else
                <div class="col-xl-3 col-lg-6 col-md-6 col-sm-6">
                    <div class="counter-item-three">
                        <div class="counter-icon">
                            <i class="flaticon-experience"></i>
                        </div>
                        <div class="counter-number">
                            <div class="tj-count"><span class="odometer" data-count="13">0</span>+</div>
                            <span class="sub-title">Years Experience</span>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-6 col-md-6 col-sm-6">
                    <div class="counter-item-three">
                        <div class="counter-icon">
                            <i class="flaticon-completed-task"></i>
                        </div>
                        <div class="counter-number">
                            <div class="tj-count"><span class="odometer" data-count="70">0</span>+</div>
                            <span class="sub-title">Projects Completed</span>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-6 col-md-6 col-sm-6">
                    <div class="counter-item-three">
                        <div class="counter-icon">
                            <i class="flaticon-customer-service"></i>
                        </div>
                        <div class="counter-number">
                            <div class="tj-count"><span class="odometer" data-count="50">0</span>+</div>
                            <span class="sub-title">Happy Customers</span>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-6 col-md-6 col-sm-6">
                    <div class="counter-item-three">
                        <div class="counter-icon">
                            <i class="flaticon-timeline"></i>
                        </div>
                        <div class="counter-number">
                            <div class="tj-count"><span class="odometer" data-count="15">0</span>+</div>
                            <span class="sub-title">Active Projects</span>
                        </div>
                    </div>
                </div>
            @endif
        </div>
    </div>
</section>
<!--=========== Counter Section End =========-->
