@php
    $footer = App\Models\FooterSetting::all()->first();
    $social = App\Models\SocialIcon::all()->take(4);
@endphp
<div class="tj-header-topbar-area">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="header-content-area">
                    <div class="header-info">
                        <ul>
                            <li><i class="flaticon-back-in-time"></i>Sun - Thu - (9AM - 6PM)</li>
                            <li>
                                <i class="flaticon-phone"></i><a
                                    href="{{ $footer->phone ?? '(1234)-567-8900' }}">{{ $footer->phone ?? '(1234)-567-8900' }}</a>
                            </li>
                        </ul>
                    </div>
                    <div class="header-share">
                        <ul>
                            <li>
                                @if ($social->count() > 0)
                                    @foreach ($social as $data)
                                        <a href="{{ $data->link }}"><i class="fa-brands {{ $data->icon }}"></i></a>
                                    @endforeach
                                @else
                                    <a href="#"><i class="fa-brands fa-x-twitter"></i></a>
                                    <a href="#"><i class="fa-brands fa-whatsapp"></i></a>
                                    <a href="#"><i class="fa-brands fa-instagram"></i></a>
                                    <a href="#"><i class="fa-brands fa-facebook-f"></i></a>
                                @endif
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
