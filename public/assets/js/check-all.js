const allPermissionsCheckbox = document.getElementById('checkAll');
const permissionsCheckboxes = document.querySelectorAll('.individual-checkbox');

// Add event listener to the "Select All" checkbox
allPermissionsCheckbox.addEventListener('change', function() {
    permissionsCheckboxes.forEach(function(checkbox) {
        checkbox.checked = allPermissionsCheckbox.checked;
    });
});

// Add event listener to individual permission checkboxes
permissionsCheckboxes.forEach(function(checkbox) {
    checkbox.addEventListener('change', function() {
        // Uncheck "Select All" checkbox if any individual checkbox is unchecked
        if (!this.checked) {
            allPermissionsCheckbox.checked = false;
        }
        else {
            // Check "Select All" checkbox if all individual checkboxes are checked
            allPermissionsCheckbox.checked = Array.from(permissionsCheckboxes).every(function (checkbox) {
                return checkbox.checked;
            });
        }
    });
});

