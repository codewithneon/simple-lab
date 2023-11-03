jQuery('.toggle-password').click(function () {
    const parent = jQuery(this).parents('.input-group');
    const icon = parent.find('.fa-regular');
    const input = parent.find('input');
    if (input.attr('type') !== 'password') {
        icon.toggleClass('fa-eye-slash fa-eye');
        input.attr('type', 'password');
    } else {
        input.attr('type', 'text');
        icon.toggleClass('fa-eye fa-eye-slash');
    }
});
