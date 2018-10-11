$(function () {
    loaddatatable();
});

function loaddatatable() {
    var table = $('#srch_res_products').DataTable({
        "pagingType": "full_numbers",
        "lengthMenu": [[20, 40, 60, -1], [20, 40, 60, "All"]]
    });
    $('#srch_res_products tbody').on('click', 'tr', function () {
        var data = table.row(this).data();
        window.location.href = URL +
                'Search/view_product_details?p_id=' + data[0];
    });
}

function go_to__main() {
    window.location.href = URL + 'Search/search_products';
}

