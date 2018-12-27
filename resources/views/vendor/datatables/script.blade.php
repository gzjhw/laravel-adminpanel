console.log('initializing: %1$s');</script>
<script src="{{ asset('assets/js/vendor/mdb/datatables.min.js') }}"></script>
<script>
$(document).ready(function(){
    window.LaravelDataTables=window.LaravelDataTables||{};
    window.LaravelDataTables["%1$s"]=$("#%1$s").DataTable(%2$s);
    let _tt = $("#%1$s_wrapper");
    $(_tt).find('label').each(function () {
        $(this).parent().append($(this).children());
    });
    $('.dataTables_filter',_tt).find('input').each(function () {
        $('input').attr("placeholder", "Search");
        $('input').removeClass('form-control-sm');
    });
    $('.dataTables_length',_tt).addClass('d-flex flex-row');
    $('.dataTables_filter',_tt).addClass('md-form');
    $('select',_tt).removeClass(
    'custom-select custom-select-sm form-control form-control-sm');
    $('select',_tt).addClass('mdb-select');
    $('.mdb-select').materialSelect();
    console.log('removing: '+_tt+' .dataTables_filter - labels');
    $('.dataTables_filter').find('label').remove();
});
