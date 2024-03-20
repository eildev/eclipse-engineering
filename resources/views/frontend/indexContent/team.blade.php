@php
$teams = App\Models\ManagingTeams::orderBy('id', 'DESC')->limit(3)->get();
@endphp
<!--=========== Team Section Start =========-->
<section class="tj-team-section">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="team-content-area">
                    <div class="tj-sec-heading">
                        <span class="sub-title">Our Team</span>
                        <h2 class="sec-title">
                            Inspiring Interiors Exceptional <br />
                            <span>Of Experiences</span>
                        </h2>
                    </div>
                    <div class="right-content">
                        <p>
                        A Cohesive Force of Innovation, Passion, and Expertise, Pioneering Solutions for Tomorrow's Challenges.
                        </p>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            @if ($teams->count() > 0)
                @foreach ($teams as $team)
                    <div class="col-lg-4 col-md-6 col-sm-6">
                        <a href="">
                            <div class="tj-team-item">
                                <div class="team-image">
                                    <img src="{{ $team->image ? asset('uploads/managing_team/' . $team->image) : asset('frontend/assets/images/team/team-1.jpg') }}"
                                        alt="Team Image">
                                    {{-- <img src="{{ asset('frontend') }}/assets/images/team/team-1.jpg" alt="Image" /> --}}
                                </div>
                                <div class="team-content">
                                    <div class="team-auother">
                                        <h5 class="title">{{ $team->name ?? 'Albert Flores' }}</h5>
                                        <span class="sub-title">{{ $team->designation ?? 'Technician' }}</span>
                                    </div>
                                    <div class="team-share">
                                        <ul class="dot-style team-social">
                                            <li>
                                                <i class="fa-regular fa-share-nodes"></i>
                                                <ul class="dot-style team-social-icon">
                                                    <li>
                                                        <a href="{{ $team->facebook ?? '#' }}"><i
                                                                class="fab fa-facebook-f"></i></a>
                                                    </li>
                                                    <li>
                                                        <a href="{{ $team->linkedin ?? '#' }}"><i
                                                                class="fab fa-linkedin-in"></i></a>
                                                    </li>
                                                    <li>
                                                        <a href="{{ $team->twitter ?? '#' }}"><i
                                                                class="fab fa-twitter"></i></a>
                                                    </li>
                                                    <li>
                                                        <a href="{{ $team->instagram ?? '#' }}"><i
                                                                class="fab fa-instagram"></i></a>
                                                    </li>
                                                </ul>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                @endforeach
            @else
                <div class="col-lg-3 col-md-6 col-sm-6">
                    <div class="tj-team-item">
                        <div class="team-image">
                            <img src="{{ asset('frontend') }}/assets/images/team/team-1.jpg" alt="Image" />
                        </div>
                        <div class="team-content">
                            <div class="team-auother">
                                <h5 class="title">Albert Flores</h5>
                                <span class="sub-title">Technician</span>
                            </div>
                            <div class="team-share">
                                <ul class="dot-style team-social">
                                    <li>
                                        <i class="fa-regular fa-share-nodes"></i>
                                        <ul class="dot-style team-social-icon">
                                            <li>
                                                <a href="#"><i class="fab fa-facebook-f"></i></a>
                                            </li>
                                            <li>
                                                <a href="#"><i class="fab fa-linkedin-in"></i></a>
                                            </li>
                                            <li>
                                                <a href="#"><i class="fab fa-twitter"></i></a>
                                            </li>
                                            <li>
                                                <a href="#"><i class="fab fa-instagram"></i></a>
                                            </li>
                                        </ul>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6">
                    <div class="tj-team-item">
                        <div class="team-image">
                            <img src="{{ asset('frontend') }}/assets/images/team/team-2.jpg" alt="Image" />
                        </div>
                        <div class="team-content">
                            <div class="team-auother">
                                <h5 class="title">Leslie Alexan</h5>
                                <span class="sub-title">Solar Expert</span>
                            </div>
                            <div class="team-share">
                                <ul class="dot-style team-social">
                                    <li>
                                        <i class="fa-regular fa-share-nodes"></i>
                                        <ul class="dot-style team-social-icon">
                                            <li>
                                                <a href="#"><i class="fab fa-facebook-f"></i></a>
                                            </li>
                                            <li>
                                                <a href="#"><i class="fab fa-linkedin-in"></i></a>
                                            </li>
                                            <li>
                                                <a href="#"><i class="fab fa-twitter"></i></a>
                                            </li>
                                            <li>
                                                <a href="#"><i class="fab fa-instagram"></i></a>
                                            </li>
                                        </ul>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6">
                    <div class="tj-team-item">
                        <div class="team-image">
                            <img src="{{ asset('frontend') }}/assets/images/team/team-3.jpg" alt="Image" />
                        </div>
                        <div class="team-content">
                            <div class="team-auother">
                                <h5 class="title">Sony Miltar</h5>
                                <span class="sub-title">Solar Expert</span>
                            </div>
                            <div class="team-share">
                                <ul class="dot-style team-social">
                                    <li>
                                        <i class="fa-regular fa-share-nodes"></i>
                                        <ul class="dot-style team-social-icon">
                                            <li>
                                                <a href="#"><i class="fab fa-facebook-f"></i></a>
                                            </li>
                                            <li>
                                                <a href="#"><i class="fab fa-linkedin-in"></i></a>
                                            </li>
                                            <li>
                                                <a href="#"><i class="fab fa-twitter"></i></a>
                                            </li>
                                            <li>
                                                <a href="#"><i class="fab fa-instagram"></i></a>
                                            </li>
                                        </ul>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6">
                    <div class="tj-team-item">
                        <div class="team-image">
                            <img src="{{ asset('frontend') }}/assets/images/team/team-4.jpg" alt="Image" />
                        </div>
                        <div class="team-content">
                            <div class="team-auother">
                                <h5 class="title">Marko Daniel</h5>
                                <span class="sub-title">Wind Expert</span>
                            </div>
                            <div class="team-share">
                                <ul class="dot-style team-social">
                                    <li>
                                        <i class="fa-regular fa-share-nodes"></i>
                                        <ul class="dot-style team-social-icon">
                                            <li>
                                                <a href="#"><i class="fab fa-facebook-f"></i></a>
                                            </li>
                                            <li>
                                                <a href="#"><i class="fab fa-linkedin-in"></i></a>
                                            </li>
                                            <li>
                                                <a href="#"><i class="fab fa-twitter"></i></a>
                                            </li>
                                            <li>
                                                <a href="#"><i class="fab fa-instagram"></i></a>
                                            </li>
                                        </ul>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            @endif
        </div>
    </div>
</section>
<!--=========== Team Section End =========-->
