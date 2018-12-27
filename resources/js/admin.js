// SideNav Button Initialization
$(".button-collapse").sideNav();

// SideNav Scrollbar Initialization
const sideNavScrollbar = document.querySelector('.custom-scrollbar');

$(document).ready(function () {
    Ps.initialize(sideNavScrollbar);
    $('.mdb-select').material_select();
    $('[data-toggle="tooltip"]').tooltip();
});

$('.datepicker').pickadate();