$( document ).ready(function() {
    
    //btn-submit
    $('#btn-submit').click(function(){
        
        let firstname = $('#firstname').val();
        let lastname = $('#lastname').val();
        let sex = $('#sex').val();
        let age = $('#age').val();
        let address = $('#address').val();
        let rank = $('#rank').val();

        if(firstname == ''){
            Swal.fire({
                icon: 'error',
                title: 'Oops...',
                text: 'กรุณากรอกชื่อ',
            });
            return false;
        }

        if(lastname == ''){

            swal.fire({
                icon: 'error',
                title: 'Oops...',
                text: 'กรุณากรอกนามสกุล',
            });
            return false;
        }

        if(sex == 'null'){

            swal.fire({
                icon: 'error',
                title: 'Oops...',
                text: 'กรุณาเลือกเพศ',
            });
            return false;
        }

        if(age == ''){
            swal.fire({
                icon: 'error',
                title: 'Oops...',
                text: 'กรุณากรอกอายุ',
            });
            return false;
        }

        if(address == ''){
            swal.fire({
                icon: 'error',
                title: 'Oops...',
                text: 'กรุณากรอกที่อยู่',
            });
            return false;
        }

        if(rank == ''){
            swal.fire({
                icon: 'error',
                title: 'Oops...',
                text: 'กรุณากรอกตำแหน่ง',
            });
            return false;
        }

        

       Swal.fire({
            icon: 'info',
            title: 'ยืนยันการบันทึกข้อมูล',
            text: 'ต้องการบันทึกข้อมูลหรือไม่',
            showCancelButton: true,
            confirmButtonText: 'ยืนยัน',
            cancelButtonText: 'ยกเลิก',
        }).then((result) => {
            if (result.isConfirmed) {
                $.ajax({
                    url: 'php/insert.php',
                    type: 'POST',
                    data: {
                        firstname: firstname,
                        lastname: lastname,
                        sex: sex,
                        age: age,
                        address: address,
                        rank: rank,
                    },
                    success: function(data){
                        
                        if(data == 'true'){
                            Swal.fire({
                                icon: 'success',
                                title: 'บันทึกข้อมูลสำเร็จ',
                                showConfirmButton: false,
                                timer: 1500
                            });
                        }
                        else{
                            Swal.fire({
                                icon: 'error',
                                title: 'Oops...',
                                text: 'บันทึกข้อมูลไม่สำเร็จ',
                            });
                        }
                        
                    }
                });
            }
        });



    });

    

});