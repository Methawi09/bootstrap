<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <script src="https://code.jquery.com/jquery-3.6.0.js"
        integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <title>Hello, world!</title>
    <style>
        .bg1 {
            background-image: url(https://us-fbcloud.net/quiz/data/25/25949.image1.jpg);
            background-size: cover;
            background-position: top;
        }

        .bg1 h1 {
            font-size: 40px;
        }

        .bg2 {
            background-color: rgb(211, 240, 248);
        }

        .fheader {
            color: black;
            text-align: center;
            padding: 150px;
        }

        .footer {
            font-size: 20px;
            text-align: center;
            background-color: lightskyblue;
        }
    </style>
</head>

<body class="bg2">
    <div class="container bg1">
        <div class="fheader">
            <h1>k-pop</h1>
            <p>seventeen </p>
        </div>
    </div>
    <br>
    <div class="container">
        <div class="row">
            <div class="col-3"></div>
            <div class="col-4">
                <img src="https://image.sistacafe.com/images/uploads/content_image/image/980486/1585118318-q46zw69n4T3EHxOkbfS-o.jpg"class="rounded float-left" height="250" >
                <br>ชื่อในวงการ : Jun (จุน) 
                <br> ชื่อจริง : Wen Junhui (เหวิน จวิ้นฮุย)
                <br> วันเกิด : 10 มิถุนายน 1996
                <br> สัญชาติ : จีน
                <br> ตำแหน่งในวง : อยู่ในยูนิตการแสดง มีตำแหน่งเต้นหลัก และร้องเสริม
            </div>
            <div class="col-5">
                <img src="https://w2c2p4b2.stackpathcdn.com/wp-content/uploads/2019/12/PicsArt_12-20-05.21.01.jpg" height="250" >
                <br> ชื่อในวงการ : Jeonghan (จองฮัน)
                <br> ชื่อจริง : Yoon Jeong Han (ยุนจองฮัน)
                <br> วันเกิด : 4 ตุลาคม 1995
                <br> สัญชาติ : เกาหลี
                <br> ตำแหน่งในวง : อยู่ในยูนิตเสียงร้อง มีตำแหน่งเป็นร้องนำ และภาพลักษณ์ของวง
            </div>
        </div>
    </div>
<br>
    <div class="container">
        <div class="row">
            <div class="col-3"></div>
            <div class="col-9 pull-right ">
                <button id="btnBack"> back </button>
                <div id="main">
                    <table class="table table-primary table-hover">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>Title</th>
                                <th>Author</th>
                            </tr>
                        </thead>
                        <tbody id="tblPost">
                        </tbody>
                    </table>
                </div>
                <div id="detail">
                    <table class="table table-primary table-hover">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>Title</th>
                                <th>UserID</th>
                            </tr>
                        </thead>
                        <tbody id="tblDetails">
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</body>
<script>
    function showDetails(id) {
        $("#main").hide();
        $("#detail").show();

        var url = "https://jsonplaceholder.typicode.com/posts/" + id
        $.getJSON(url)
            .done((data) => {
                console.log(data);
                var line = "<tr id='detailROW'";
                line += "><td>" + data.id + "</td>"
                line += "<td><b>" + data.title + "</b><br/>"
                line += data.body + "</td>"
                line += "<td>" + data.userId + "</td>"
                line += "</tr>";
                $("#tblDetails").append(line);
            })
            .fail((xhr, err, status) => {
            })
    }
    function LoadPosts() {
        var url = "https://jsonplaceholder.typicode.com/posts"
        var i = 0;
        $.getJSON(url)
            .done((data) => {
                $.each(data, (k, item) => {

                    i++;
                    var line = "<tr>";
                    line += "<td>" + item.id + "</td>"
                    line += "<td><b>" + item.title + "</b><br/>"
                    line += item.body + "</td>"
                    line += "<td><button onClick='showDetails(" + item.id + ");'>Link</button></td>"
                    line += "</tr>";
                    $("#tblPost").append(line);
                    if (i == 10) {
                        loadPost().stop();
                    };
                });
                $("#main").show();
            })
            .fail((xhr, err, status) => {
            })
    }
    $(() => {
        LoadPosts();
        $("#detail").hide();
        $("#btnBack").click(() => {
            $("#main").show();
            $("#detail").hide();
            $("#detailROW").remove();
        });
    })
</script>
<div>
    <footer>
        <div class="footer">
            Nema : Methawi Tantiyavut
            <br>ID : 63108518
        </div>
    </footer>
</div>

</body>

</html>

