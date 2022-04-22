<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <!-- <script>
        src = "jquery-3.6.0.min.js" >
    </script> -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <!-- sai lầm khi copy y từ bootstrap cdn
nó lại dùng slide của jquery-> ko có ajax -->
    <!-- <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script> -->
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.7/dist/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <script type="text/javascript">
        // delete
        $(document).ready(function() {
            $("#insert_data").on('click', function() {
                let hoten = $('#hoten').val();
                let sdt = $('#sdt').val();
                if (hoten == "" || sdt == "") {
                    alert("Khong duoc bo trong truong");
                } else {
                    $.ajax({
                        url: "ajax_action.php",
                        type: "post",
                        data: {
                            hoten: hoten,
                            sdt: sdt
                        },
                        success: function(data) {
                            alert("Insert data thanh cong");
                        }
                    })
                }
            });


            $("#button1").click(function() {
                alert('click button1');
                $.post("test3.php", {
                        hoten: "hoten1"
                    },
                    function(data, status) {
                        $("#test").html(data);
                        alert(status);
                    })

            });

        });
    </script>
</head>

<body>
    <div class="container">
        <div class="col-md-12">
            <form method="post" id="insert_data_form">
                <h2>Insert dữ liệu form</h2>
                <label>Họ và tên</label>
                <input type='text' class="form-control" id="hoten" placeholder="Điền họ và tên..">
                <label>Số phone</label>
                <input type='text' class="form-control" id="sdt" placeholder="Điền sđt..">
                <br>
                <button type="button" id="insert_data" class="btn btn-primary" value="insert">insert</button>
            </form>
            <button id="button1">click</button>
            <p id="test"></p>
        </div>
    </div>

</body>

</html>