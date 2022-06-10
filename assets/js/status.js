function deleteData(id) {
    Swal.fire({
        title: 'آیا مطمئن هستید؟',
        text: "ایا این کالا را غیر فعال می کنید؟",
        icon: 'warning',
        showCancelButton: true,
        confirmButtonColor: '#3085d6',
        cancelButtonColor: '#d33',
        confirmButtonText: 'غیرفعال کردن',
        cancelButtonText:"لغو"
    }).then((result) => {
        if (result.isConfirmed) {
            $.ajax({
                type: 'POST',
                url: 'deleteProduct.php',
                data: {id: id, action: "deActive"},
                success: function (data) {
                    $('#productStatus' + id).text("غیر فعال");
                    $('#btnStatus').text("فعال");
                    $('#btnStatus').attr("onclick","activeData("+id+");");
                }
            });
            Swal.fire({
                title:'فعال شد!',
                text:'کالا مورد نظر باموفقیت فعال گردید',
                icon:'success',
                confirmButtonText:"باشه"
            })
        }
    })


}
function activeData(id) {
    Swal.fire({
        title: 'آیا مطمئن هستید؟',
        text: "ایا این کالا را مجداداً فعال می کنید؟",
        icon: 'warning',
        showCancelButton: true,
        confirmButtonColor: '#3085d6',
        cancelButtonColor: '#d33',
        confirmButtonText: 'فعال کردن',
        cancelButtonText:"لغو"
    }).then((result) => {
        if (result.isConfirmed) {
            $.ajax({
                type: 'POST',
                url: 'deleteProduct.php',
                data: {id: id, action: "Active"},
                success: function (data) {
                    $('#productStatus' + id).text("فعال");
                    $('#btnStatus').text("غیر فعال");
                    $('#btnStatus').attr("onclick", "deleteData(" + id + ");");
                }
            });
            Swal.fire({
                    title:'فعال شد!',
                    text:'کالا مورد نظر باموفقیت فعال گردید',
                    icon:'success',
                    confirmButtonText:"باشه"
            })
        }
    })

}

