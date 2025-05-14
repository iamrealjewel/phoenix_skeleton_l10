<div class="position-fixed top-0 end-0 p-3 mt-7" style="z-index: 5">
    <!-- Success Toast -->
    @if ($message = Session::get('success'))
        <div class="toast fade show bg-success-subtle slide-in" id="successToast" role="alert" data-bs-autohide="false" aria-live="assertive" aria-atomic="true">
            <div class="toast-header">
                <strong class="me-auto text-success-emphasis"><span class="fas fa-check-circle me-2"></span> Success</strong>
                <button class="btn ms-2 p-0" type="button" aria-label="Close" onclick="closeToast(this)"><span class="uil uil-times fs-7"></span></button>
            </div>
            <div class="toast-body text-success-emphasis">
                {{ $message }}
            </div>
        </div>
    @endif

<!-- Error Toast -->
    @if ($message = Session::get('error'))
        <div class="toast fade show bg-danger-subtle slide-in" id="errorToast" role="alert" data-bs-autohide="false" aria-live="assertive" aria-atomic="true">
            <div class="toast-header">
                <strong class="me-auto text-danger-emphasis"><span class="fas fa-times-circle me-2"></span> Error</strong>
                <button class="btn ms-2 p-0" type="button" aria-label="Close" onclick="closeToast(this)"><span class="uil uil-times fs-7"></span></button>
            </div>
            <div class="toast-body text-danger-emphasis">
                {{ $message }}
            </div>
        </div>
    @endif

<!-- Warning Toast -->
    @if ($message = Session::get('warning'))
        <div class="toast fade show bg-warning-subtle slide-in" id="warningToast" role="alert" data-bs-autohide="false" aria-live="assertive" aria-atomic="true">
            <div class="toast-header">
                <strong class="me-auto text-warning-emphasis"><span class="fas fa-exclamation-circle me-2"></span> Warning</strong>
                <button class="btn ms-2 p-0" type="button" aria-label="Close" onclick="closeToast(this)"><span class="uil uil-times fs-7"></span></button>
            </div>
            <div class="toast-body text-warning-emphasis">
                {{ $message }}
            </div>
        </div>
    @endif

<!-- Info Toast -->
    @if ($message = Session::get('info'))
        <div class="toast fade show bg-info-subtle slide-in" id="infoToast" role="alert" data-bs-autohide="false" aria-live="assertive" aria-atomic="true">
            <div class="toast-header">
                <strong class="me-auto text-info-emphasis"><span class="fas fa-info-circle me-2"></span> Info</strong>
                <button class="btn ms-2 p-0" type="button" aria-label="Close" onclick="closeToast(this)"><span class="uil uil-times fs-7"></span></button>
            </div>
            <div class="toast-body text-info-emphasis">
                {{ $message }}
            </div>
        </div>
    @endif

<!-- Trashed Toast -->
    @if ($message = Session::get('trashed'))
        <div class="toast fade show bg-danger-subtle slide-in" id="trashedToast" role="alert" data-bs-autohide="false" aria-live="assertive" aria-atomic="true">
            <div class="toast-header">
                <strong class="me-auto text-danger-emphasis"><span class="far fa-trash-alt me-2"></span> Trashed</strong>
                <button class="btn ms-2 p-0" type="button" aria-label="Close" onclick="closeToast(this)"><span class="uil uil-times fs-7"></span></button>
            </div>
            <div class="toast-body text-danger-emphasis">
                {{ $message }}
            </div>
        </div>
    @endif

<!-- Validation Errors Toast -->
    @if ($errors->any())
        <div class="toast fade show bg-danger-subtle slide-in" id="errorToast" role="alert" data-bs-autohide="false" aria-live="assertive" aria-atomic="true">
            <div class="toast-header">
                <strong class="me-auto text-danger-emphasis"><span class="fas fa-times-circle me-2"></span> Error</strong>
                <button class="btn ms-2 p-0" type="button" aria-label="Close" onclick="closeToast(this)"><span class="uil uil-times fs-7"></span></button>
            </div>
            <div class="toast-body">
                Please fix the following errors:
                @foreach($errors->all() as $error)
                    <br>{{ $error }}
                @endforeach
            </div>
        </div>
    @endif
</div>

<style>
    @keyframes slideInRight {
        0% {
            transform: translateX(100%);
            opacity: 0;
        }
        100% {
            transform: translateX(0);
            opacity: 1;
        }
    }

    @keyframes slideOutRight {
        0% {
            transform: translateX(0);
            opacity: 1;
        }
        100% {
            transform: translateX(100%);
            opacity: 0;
        }
    }

    .toast{
        width: 450px;
    }

    .toast-body{
        font-size: 14px;
    }

    .toast.slide-in {
        animation: slideInRight 0.5s forwards;
        display: block !important; /* Ensure it is displayed */
    }

    .toast.slide-out {
        animation: slideOutRight 0.5s forwards;
    }
</style>

<script>
    function closeToast(button) {
        const toast = button.closest('.toast');
        toast.classList.remove('slide-in'); // Remove the slide-in class if it exists
        toast.classList.add('slide-out'); // Add slide-out class to trigger the animation

        // Delay the removal to allow the slide-out animation to finish
        setTimeout(() => {
            toast.remove();
        }, 500); // Duration matches the CSS animation timing
    }

    document.addEventListener('DOMContentLoaded', function() {
        const toastElements = document.querySelectorAll('.toast');

        toastElements.forEach(function(toastElement) {
            // Show the toast
            toastElement.classList.add('slide-in');

            // Auto-hide the toast after 4 seconds with a slide-out effect
            setTimeout(() => {
                toastElement.classList.remove('slide-in'); // Remove the slide-in class
                toastElement.classList.add('slide-out'); // Trigger slide-out animation

                // Remove the toast after the slide-out animation completes
                setTimeout(() => {
                    toastElement.remove();
                }, 500); // Delay matches the duration of slide-out animation
            }, 5000); // Trigger the slide-out after 4 seconds
        });
    });

</script>






