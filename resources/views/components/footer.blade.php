<button class="btn btn-primary btn-icon scroll-top" type="button"><i data-feather="arrow-up"></i></button>
<script src="{{ asset('app-assets') }}/vendors/js/vendors.min.js"></script>
<script src="{{ asset('app-assets') }}/vendors/js/charts/apexcharts.min.js"></script>
<script src="{{ asset('app-assets') }}/vendors/js/extensions/toastr.min.js"></script>
<script src="{{ asset('app-assets') }}/js/core/app-menu.js"></script>
<script src="{{ asset('app-assets') }}/js/core/app.js"></script>
<script src="{{ asset('app-assets') }}/js/scripts/pages/dashboard-ecommerce.js"></script>
<script>
    $(window).on('load', function() {
        if (feather) {
            feather.replace({
                width: 14,
                height: 14
            });
        }
    })
</script>
