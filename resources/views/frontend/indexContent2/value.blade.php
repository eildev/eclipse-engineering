<!--=========== Value Section Start =========-->
@php
    $values = App\Models\Value::take(2)->get();
    // dd($values);
@endphp
<section class="tj-value-section">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="tj-sec-heading-two text-center">
                    <span class="sub-title">Our Value</span>
                    <h2 class="title">
                        The Better Source of Energy for the <br />
                        <span>Better Tomorrow</span>
                    </h2>
                </div>
            </div>
        </div>
        <div class="row">
            @if ($values->count() > 0)
                @foreach ($values as $value)
                    <div class="col-md-6">
                        <div class="tj-value-item">
                            <div class="value-top-content">
                                <div class="value-icon">
                                    <i class="flaticon-{{ $value->icon ?? 'targeting' }}"></i>
                                </div>
                                <div class="value-number">
                                    <span class="number">01</span>
                                </div>
                            </div>
                            <h3 class="title">{{ $value->title ?? 'Our Vision' }}</h3>
                            <div class="desc">
                                <p>
                                    {{ $value->description ??
                                        'It is a long established fact that a reader will be distracted by the readable
                                                                        content of a page when looking at its layout. The point of using Lorem Ipsum is
                                                                        that it has a more-or-less.' }}

                                </p>
                            </div>
                        </div>
                    </div>
                @endforeach
            @else
                <div class="col-md-6">
                    <div class="tj-value-item">
                        <div class="value-top-content">
                            <div class="value-icon">
                                <i class="flaticon-targeting"></i>
                            </div>
                            <div class="value-number">
                                <span class="number">01</span>
                            </div>
                        </div>
                        <h3 class="title">Our Vision</h3>
                        <div class="desc">
                            <p>
                                It is a long established fact that a reader will be distracted by the readable
                                content of a page when looking at its layout. The point of using Lorem Ipsum is
                                that it has a more-or-less.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="tj-value-item">
                        <div class="value-top-content">
                            <div class="value-icon">
                                <i class="flaticon-leadership"></i>
                            </div>
                            <div class="value-number">
                                <span class="number">02</span>
                            </div>
                        </div>
                        <h3 class="title">Our Mission</h3>
                        <div class="desc">
                            <p>
                                It is a long established fact that a reader will be distracted by the readable
                                content of a page when looking at its layout. The point of using Lorem Ipsum is
                                that it has a more-or-less.
                            </p>
                        </div>
                    </div>
                </div>
            @endif

        </div>
    </div>
</section>
<!--=========== Value Section End =========-->
