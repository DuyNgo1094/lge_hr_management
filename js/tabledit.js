$("#edit-enable").change(function() {
    if ($(this).is(':checked')) {
        console.log("check");
        $(".inputName").removeAttr("disabled");
        $(".selectName").removeAttr("disabled");
    } else {
        $(".inputName").attr('disabled', '');
        $(".selectName").attr('disabled', '');
    }
});

// $(".inputName").on('click', function() {
//     console.log($(this).closest("tr").attr('id'));
//     console.log($(this).closest("td").attr('colunm-name'));
// })
// $(".selectName").on('click', function() {
//     console.log($(this).closest("tr").attr('id'));
//     console.log($(this).closest("td").attr('colunm-name'));
// })

$("#save").on('click', function() {
    let empId = $(".inputName").closest("tr").attr('id');
    let firstNameVal = $(".inputName").val();
    let firstNameId = $(".inputName").closest("td").attr('colunm-name');
    let lastNameVal = $(".selectName").val();
    let lastNameId = $(".selectName").closest("td").attr('colunm-name');
    var emp = {};
    emp['id'] = empId;
    emp['fnameid'] = firstNameId;
    emp['fname'] = firstNameVal;
    emp['lnameid'] = lastNameId;
    emp['lname'] = lastNameVal;

    console.log(emp);
});

$("#add").on('click', function() {

});