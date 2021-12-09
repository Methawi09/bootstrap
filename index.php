<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <title>Hello, world!</title>
    <style>
        .bg1{
            background-image: url(https://us-fbcloud.net/quiz/data/25/25949.image1.jpg);
            background-size: cover;
            background-position:top;
        }
        .bg1 h1{
            font-size: 40px;
        }
        .fheader{
            color: black;
            text-align: center;
            padding: 150px;
        }
        .footer{
            font-size: 20px;
            text-align: center;
            background-color: lightpink;
        }
    </style>
  </head>
  <body >
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
                <div class="col-4"><img src="https://image.sistacafe.com/images/uploads/content_image/image/980486/1585118318-q46zw69n4T3EHxOkbfS-o.jpg"class="rounded float-left" height="250" width="390"></div>
                <div class="col-5"><img src="https://w2c2p4b2.stackpathcdn.com/wp-content/uploads/2019/12/PicsArt_12-20-05.21.01.jpg" height="250" width="390" class="rounded float-right"></div>
            </div>
        </div>
<br>
    <script>
            function LoadPosts() {
        $("#main").show();
        $("#detail").hide();
        $("main2").hide();
        var url = "https://jsonplaceholder.typicode.com/posts"
        $.getJSON(url)
            .done((data) => {
                $.each(data, (k, item) => {
                    var line = "<tr>";
                    line += "<td>" + item.id + "</td>"
                    line += "<td><b>" + item.title + "</b><br/>"
                    line += item.body + "</td>"
                    line += "<td><button onClick='showDetails(" + item.id + ");'>Link</button></td>"
                    line += "</tr>";
                    $("#tblPost").append(line);
                    if (i==10){
                        LoadPosts().stop();
                    };
                });
                $("#main").show();
            })
            .fail((xhr, err, status) => {
            })
    }
    </script>
        <div class="table">
           <tr>
               <th>ID</th><th></th>
           </tr>
        </div>
  
      <footer>
          <div class="footer">
              Nema : Methawi Tantiyavut
              <br> ID : 63108518
          </div>
      </footer>
    </body>
</html>


