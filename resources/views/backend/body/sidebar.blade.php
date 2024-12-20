<div class="vertical-menu">

    <div data-simplebar class="h-100">

        <!-- User details -->
        <div class="user-profile text-center mt-3">
            <div class="">
                <img src="{{ !empty($adminData->photo) ? url('admin_image/profile/' . Illuminate\Support\Facades\Auth::user()->photo) : url('admin_image/profile/no_images.png') }}"
                    alt="" class="avatar-md rounded-circle">
            </div>
            <div class="mt-3">
                <h4 class="font-size-16 mb-1">{{ Illuminate\Support\Facades\Auth::user()->name ?? 'John Doe' }}</h4>
                <span class="text-muted"><i class="ri-record-circle-line align-middle font-size-14 text-success"></i>
                    Online</span>
            </div>
        </div>

        <!--- Sidemenu -->
        <div id="sidebar-menu">
            <!-- Left Menu Start -->
            <ul class="metismenu list-unstyled" id="side-menu">
                <li class="menu-title">Main</li>
                @php
                    $message = App\Models\Contact::all();
                @endphp
                <li>
                    <a href="{{ route('admin.dashboard') }}" class="waves-effect">
                        <i class="ri-dashboard-line"></i><span
                            class="badge rounded-pill bg-success float-end">{{ count($message) }}</span>
                        <span>Dashboard</span>
                    </a>
                </li>
                <li class="menu-title">Home</li>
                <li>
                    <a href="javascript: void(0);" class="has-arrow waves-effect">
                        <i class="ri-mail-send-line"></i>
                        <span>Home Slider</span>
                    </a>
                    <ul class="sub-menu" aria-expanded="false">
                        <li><a href="{{ route('add.slider') }}">Add Home Slider</a></li>
                        <li><a href="{{ route('slider.view') }}">Manage Home Slider</a></li>
                    </ul>
                </li>
                <li>
                    <a href="javascript: void(0);" class="has-arrow waves-effect">
                        <i class="ri-mail-send-line"></i>
                        <span>About Settings</span>
                    </a>
                    <ul class="sub-menu" aria-expanded="false">
                        <li><a href="{{ route('about.add') }}">Add About Settings</a></li>
                        <li><a href="{{ route('about.view') }}">Manage About Settings</a></li>
                    </ul>
                </li>
                <li>
                    <a href="javascript: void(0);" class="has-arrow waves-effect">
                        <i class="ri-mail-send-line"></i>
                        <span>Our Services</span>
                    </a>
                    <ul class="sub-menu" aria-expanded="false">
                        <li><a href="{{ route('service.add') }}">Add Services Title</a></li>
                        <li><a href="{{ route('service.view') }}">Manage Services Title</a></li>
                        <li>
                            <a href="javascript: void(0);" class="has-arrow waves-effect">
                                <i class="ri-mail-send-line"></i>
                                <span>Services Details</span>
                            </a>
                            <ul class="sub-menu" aria-expanded="false">
                                <li><a href="{{ route('service.details.add') }}">Add Services Details</a></li>
                                <li><a href="{{ route('service.details.view') }}">Manage Services Details</a></li>
                            </ul>
                        </li>
                    </ul>
                </li>
                <li>
                    <a href="javascript: void(0);" class="has-arrow waves-effect">
                        <i class="ri-mail-send-line"></i>
                        <span>Why Choose Us</span>
                    </a>
                    <ul class="sub-menu" aria-expanded="false">
                        <li><a href="{{ route('why-choose-us') }}">Add Why Choose Us</a></li>
                        <li><a href="{{ route('manage.why-choose-us') }}">Manage Why Choose Us</a></li>
                        <li>
                            <a href="javascript: void(0);" class="has-arrow waves-effect">
                                <i class="ri-mail-send-line"></i>
                                <span>Why Choose Us Details</span>
                            </a>
                            <ul class="sub-menu" aria-expanded="false">
                                <li><a href="{{ route('why-choose-us-details') }}">Add Why Choose Us Details</a></li>
                                <li><a href="{{ route('manage.why-choose-us-details') }}">Manage Why Choose Us
                                        Details</a></li>
                            </ul>
                        </li>
                    </ul>
                </li>
                <li>
                    <a href="javascript: void(0);" class="has-arrow waves-effect">
                        <i class="ri-mail-send-line"></i>
                        <span>Overview</span>
                    </a>
                    <ul class="sub-menu" aria-expanded="false">
                        <li><a href="{{ route('overview') }}">Add Overview</a></li>
                        <li><a href="{{ route('manage.overview') }}">Manage Overview</a></li>
                    </ul>
                </li>
                <li class="menu-title">Projects</li>
                <li>
                    <a href="javascript: void(0);" class="has-arrow waves-effect">
                        <i class="ri-mail-send-line"></i>
                        <span>Project Managment</span>
                    </a>
                    <ul class="sub-menu" aria-expanded="false">
                        <li><a href="{{ route('project.category') }}">Project Category Manage</a></li>
                        <li><a href="{{ route('add.project.details') }}">Add Project</a></li>
                        <li><a href="{{ route('view.project.details') }}">Manage Project</a></li>
                        <li><a href="{{ route('view.projects') }}">Manage Projects Heading </a></li>
                    </ul>
                </li>
                <li class="menu-title">Team</li>
                <li>
                    <a href="javascript: void(0);" class="has-arrow waves-effect">
                        <i class="ri-mail-send-line"></i>
                        <span>Managment Team</span>
                    </a>
                    <ul class="sub-menu" aria-expanded="false">
                        <li><a href="{{ route('managing.team.add') }}">Add Managment Team</a></li>
                        <li><a href="{{ route('managing.team.view') }}">Manage Managment team</a></li>
                    </ul>
                </li>
                <li>
                    <a href="javascript: void(0);" class="has-arrow waves-effect">
                        <i class="ri-mail-send-line"></i>
                        <span>Sister Concerns</span>
                    </a>
                    <ul class="sub-menu" aria-expanded="false">
                        <li><a href="{{ route('sister') }}">Add Sister Concerns</a></li>
                        <li><a href="{{ route('view.sister') }}">Manage Sister Concerns</a></li>
                    </ul>
                </li>
                <li class="menu-title">Blog</li>
                <li>
                    <a href="javascript: void(0);" class="has-arrow waves-effect">
                        <i class="ri-mail-send-line"></i>
                        <span>News</span>
                    </a>
                    <ul class="sub-menu" aria-expanded="false">
                        <li><a href="{{ route('news') }}">Add News</a></li>
                        <li><a href="{{ route('manage.news') }}">Manage News</a></li>
                    </ul>
                </li>
                <li class="menu-title">Social</li>
                <li>
                    <a href="javascript: void(0);" class="has-arrow waves-effect">
                        <i class="ri-mail-send-line"></i>
                        <span>Social Settings</span>
                    </a>
                    <ul class="sub-menu" aria-expanded="false">
                        <li><a href="{{ route('social.icon') }}">Add Social Settings</a></li>
                        <li><a href="{{ route('manage.social.icon') }}">Manage Social Settings</a></li>
                    </ul>
                </li>
                <li class="menu-title">Other</li>
                <li>
                    <a href="javascript: void(0);" class="has-arrow waves-effect">
                        <i class="ri-mail-send-line"></i>
                        <span>Value</span>
                    </a>
                    <ul class="sub-menu" aria-expanded="false">
                        <li><a href="{{ route('value') }}">Add Value</a></li>
                        <li><a href="{{ route('view.value') }}">Manage Value</a></li>
                    </ul>
                </li>
                <li>
                    <a href="javascript: void(0);" class="has-arrow waves-effect">
                        <i class="ri-mail-send-line"></i>
                        <span>CSR Activities</span>
                    </a>
                    <ul class="sub-menu" aria-expanded="false">
                        <li><a href="{{ route('csr') }}">Add CSR Activities</a></li>
                        <li><a href="{{ route('view.csr') }}">Manage CSR Activities</a></li>
                    </ul>
                </li>
                <li>
                    <a href="javascript: void(0);" class="has-arrow waves-effect">
                        <i class="ri-mail-send-line"></i>
                        <span>FAQ</span>
                    </a>
                    <ul class="sub-menu" aria-expanded="false">
                        <li><a href="{{ route('faq') }}">Add FAQ</a></li>
                        <li><a href="{{ route('view.faq') }}">Manage FAQ</a></li>
                    </ul>
                </li>


                <li>
                    <a href="javascript: void(0);" class="has-arrow waves-effect">
                        <i class="ri-mail-send-line"></i>
                        <span>Gallery Settings</span>
                    </a>
                    <ul class="sub-menu" aria-expanded="false">
                        <li><a href="{{ route('gallery.add') }}">Add Gallery</a></li>
                        <li><a href="{{ route('gallery.view') }}">Manage Gallery</a></li>
                    </ul>
                </li>

                <li>
                    <a href="javascript: void(0);" class="has-arrow waves-effect">
                        <i class="ri-mail-send-line"></i>
                        <span>Career</span>
                    </a>
                    <ul class="sub-menu" aria-expanded="false">
                        <li><a href="{{ route('carrier.add') }}">Add Career</a></li>
                        <li><a href="{{ route('view.carrier') }}">Manage Career</a></li>
                    </ul>
                </li>
                {{-- <li>
                    <a href="javascript: void(0);" class="has-arrow waves-effect">
                        <i class="ri-mail-send-line"></i>
                        <span>Testimonial</span>
                    </a>
                    <ul class="sub-menu" aria-expanded="false">
                        <li><a href="{{ route('testimonial') }}">Add Testimonial</a></li>
                        <li><a href="{{ route('manage.testimonial') }}">Manage Testimonial</a></li>
                    </ul>
                </li> --}}
                {{-- <li>
                    <a href="javascript: void(0);" class="has-arrow waves-effect">
                        <i class="ri-mail-send-line"></i>
                        <span>Our Partner</span>
                    </a>
                    <ul class="sub-menu" aria-expanded="false">
                        <li><a href="{{ route('our-partner') }}">Add Our Partner</a></li>
                        <li><a href="{{ route('manage.our-partner') }}">Manage Our Partner</a></li>
                    </ul>
                </li> --}}
                <li class="menu-title">View Subscriber</li>
                <li>
                    <a href="{{ route('subscribe.list') }}" class="has-arrow waves-effect">
                        <i class="ri-layout-3-line"></i>
                        <span>All Subscribe</span>
                    </a>

                </li>
                <li>
                    <a href="{{ route('contact.list') }}" class="has-arrow waves-effect">
                        <i class="ri-layout-3-line"></i>
                        <span>All Contact Message</span>
                    </a>
                </li>
                <li class="menu-title">Footer</li>
                <li>
                    <a href="javascript: void(0);" class="has-arrow waves-effect">
                        <i class="ri-share-line"></i>
                        <span>Footer Manage</span>
                    </a>
                    <ul class="sub-menu" aria-expanded="true">
                        <li><a href="{{ route('add.footer') }}">Add Footer</a></li>
                        <li><a href="{{ route('view.footer') }}" class="has-arrow">Footer info Check</a>

                        </li>
                    </ul>
                </li>

            </ul>
        </div>
        <!-- Sidebar -->
    </div>
</div>
