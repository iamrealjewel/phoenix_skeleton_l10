@if(auth()->check())
    <footer class="footer position-absolute">
        <div class="row g-0 justify-content-between align-items-center h-100 footer-row">
            <div class="col-12 col-sm-auto text-center footer-text">
                <p class="mb-0 mt-2 mt-sm-0 text-body">Application developed & maintained by IT Department of M. M. Ispahani Limited.</p>
            </div>
        </div>
    </footer>

    <style>
        .footer-text{
            font-size: 0.8rem;
        }
    </style>
    {{-- <footer class="footer position-absolute">
        <div class="row g-0 justify-content-between align-items-center h-100">
          <div class="col-12 col-sm-auto text-center">
            <p class="mb-0 mt-2 mt-sm-0 text-body">Thank you for creating with Phoenix<span class="d-none d-sm-inline-block"></span><span class="d-none d-sm-inline-block mx-1">|</span><br class="d-sm-none" />2024 &copy;<a class="mx-1" href="https://themewagon.com">Themewagon</a></p>
          </div>
          <div class="col-12 col-sm-auto text-center">
            <p class="mb-0 text-body-tertiary text-opacity-85">v1.17.0</p>
          </div>
        </div>
      </footer> --}}
@endif

