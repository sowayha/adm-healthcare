<!-- start Simple Custom CSS and JS -->
<script type="text/javascript">
jQuery(document).ready(function($) {
    // Check if the URL contains the specified query parameter
    var urlParams = new URLSearchParams(window.location.search);
    if (urlParams.has('cstmsrch_submit_all_type')) {
        // Check if the value of the query parameter is "Search"
        if (urlParams.get('cstmsrch_submit_all_type') === 'Search') {
            // Modify the value of the query parameter to "Search"
            urlParams.set('cstmsrch_submit_all_type', 'Search');
            // Replace the current URL with the modified one
            var newUrl = window.location.pathname + '?' + urlParams.toString();
            window.history.replaceState({}, '', newUrl);
        }
    }
});

</script>
<!-- end Simple Custom CSS and JS -->
