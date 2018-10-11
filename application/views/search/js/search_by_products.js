$(function () {
});

//Check Option.
function check_option() {
    document.getElementById("product_name").style.display = 'none';
    var option = $('#p_option').val();
    if (option !== '0') {
        if (option === '3') {
            load_product_ids();
        }
    } else {
        swal("WARNING", "SELECT A OPTION", "error");
    }
}

//Get data according to the selected search option.
function load_product_ids() {
    document.getElementById("product_name").style.display = 'inline';
    $.ajax({
        type: 'POST',
        url: URL + 'Search/load_product_ids',
        data: {
        },
        success: function (data) {
            var agency = JSON.parse(data);
            var rows = ['<option value="0" >SELECT A PRODUCT { About ' + agency.length + ' results }</option>'];
            for (var x = 0; x < agency.length; x++) {
                rows.push('<option value="' + agency[x].ProductID + '">' + agency[x].Name + '</option>');
            }
            $('#p_id').empty().append(rows);
        },
        error: function () {
        }
    });
}



function search_by_option() {
    var option = $('#p_option').val();
    var p_id = $('#p_id').val();
    if (option !== '0') {
        if (option !== '3') {
            window.location.href = URL + 'Search/search_by_option?option=' + option + '&p_id=' + p_id;
        } else {
            if (p_id !== '0') {
                window.location.href = URL + 'Search/search_by_option?option=' + option + '&p_id=' + p_id;
            } else {
                swal("WARNING", "SELECT A PRODUCT", "error");
            }
        }

    } else {
        swal("WARNING", "SELECT A OPTION", "error");
    }
}

function go_to_sch_result_back() {
    window.history.back();
}


function go_to_edit() {
    var p_name = $('#p_name').val();
    var p_id = $('#p_id').val();
    $.ajax({
        type: 'POST',
        url: URL + 'Search/go_to_edit',
        data: {
            p_id: p_id,
            p_name: p_name
        },
        success: function (data) {
            console.log(data.length);
            if (data.length > 0) {
                swal('Good job!', 'RECORD IS UPDATED !', 'success');
            } else {
                swal("WARNING", "RETRY", "error");
            }
        },
        error: function () {
        }
    });
}