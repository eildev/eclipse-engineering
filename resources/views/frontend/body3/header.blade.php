<!-- start: Header Area -->
<header class="tj-header-area header-sticky header-2">
    <div class="tj-top-content-area">
        <div class="logo-area">
            <a href="{{ route('/') }}"><img src="{{ asset('frontend') }}/assets/images/logos/eel-white-logo.png"
                    alt="Logo" /></a>
        </div>
        <div class="tj-menu-area d-lg-block d-none" id="main-menu">
            <nav id="mobile-menu">
                <ul>
                    <li id="li-1" class="">
                        <a href="{{ route('/') }}">Home</a>
                    </li>
                    <li id="li-2">
                        <a href="{{ route('frontend.about') }}">About Us</a>
                    </li>
                    <li id="li-3">
                        <a href="{{ route('all.service') }}">Services</a>
                    </li>
                    <li id="li-4">
                        <a href="{{ route('all.project') }}">Projects</a>
                    </li>
                    <li id="li-5" class="has-dropdown">
                        <a href="javascript:void(0)">Pages</a>
                        <ul class="sub-menu">
                            <li>
                                <a href="{{ route('all.team') }}">Team</a>
                            </li>
                            <li>
                                <a href="{{ route('blog') }}">Blog</a>
                            </li>
                            <li>
                                <a href="{{ route('sister.concern') }}">Sister Concern</a>
                            </li>
                            <li>
                                <a href="{{ route('csr.activities') }}">CSR Activities</a>
                            </li>
                            <li>
                                <a href="{{ route('contact.us') }}">Contact Us</a>
                            </li>
                        </ul>
                    </li>
                </ul>
            </nav>
        </div>
        <div class="info-item d-none d-lg-block">
            <a class="tj-header-btn btn" href="{{ route('contact.us') }}">Contact Us <i
                    class="flaticon-right-arrow"></i></a>
        </div>
        <div class="hamburger_menu d-lg-none">
            <a class="canva_expander nav-menu-link menu-button" href="#"><i class="flaticon-menu"></i></a>
        </div>
    </div>
</header>

<script>
    $(document).ready(function() {
        const first_lis = document.querySelectorAll('#mobile-menu ul li');
        first_lis.forEach((el) => {
            el.classList.remove('current-menu-item');
        });
        item.classList.add('current-menu-item');
        localStorage.setItem(storageKey, item.id);
    });

    function handleLiClick(items, storageKey) {
        items.forEach((item) => {
            item.addEventListener('click', function(e) {
                items.forEach((el) => {
                    el.classList.remove('current-menu-item');
                });
                item.classList.add('current-menu-item');
                localStorage.setItem(storageKey, item.id);
            })
        });
    }

    handleLiClick(first_lis, 'current');

    function restoreActiveState(items, storageKey) {
        const activeLiId = localStorage.getItem(storageKey);
        if (activeLiId) {
            const activeLi = document.getElementById(activeLiId);
            if (activeLi) {
                activeLi.classList.add('current-menu-item');
            }
        }
    }
    restoreActiveState(first_lis, 'current');
</script>

<!-- end: Header Area -->
