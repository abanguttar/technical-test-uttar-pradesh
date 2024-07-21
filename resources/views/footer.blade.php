<footer id="footer" class="container-fluid ps-0 pe-0 border-top pt-5 pb-5" style="background-color: #1A1A1A">
    <div
        class="container-lg pb-lg-3 pt-lg-2 ps-4  d-flex gap-3 gap-md-3 gap-lg-5 flex-column flex-md-row justify-content-md-center justify-content-lg-between justify-content-start">
        <div class="">
            <a href="/" class="d-flex align-items-center link-body-emphasis text-decoration-none">
                <img src="/cache-img/footer/footer-logo.png" alt="footer">
            </a>
            <p class="text-white fw-light footer-text mt-3"><span style="font-size: 10px" class="text-light">©</span>
                2021
                Landify UI Kit.
                All rights reserved
            </p>
        </div>


        @foreach ($footer as $item)
            <div>
                <p class="fw-bold text-white footer-bold-text">{{ $item->title }}</p>
                <ul class="nav flex-column">
                    @foreach ($item->content as $i)
                        <li class="nav-item mb-1"><a href="{{ $i }}"
                                class="link-light footer-text link-offset-2 link-underline-opacity-0 link-underline-opacity-100-hover p-0 text-white fw-light">{{ $i }}</a>
                        </li>
                    @endforeach
                </ul>
            </div>
        @endforeach
    </div>

</footer>
