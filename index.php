<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link a href="bootstrap-5.1.3\css\bootstrap.css" rel="stylesheet" />
    <link href="bootstrap-5.1.3/css/bootstrap.min.css" rel="stylesheet" />
    <script src="bootstrap-5.1.3/js/bootstrap.js"></script>
    <script src="bootstrap-5.1.3/js/bootstrap.bundle.js"></script>
    <script src="https://ajax.googleapis.com/.../jquery/3.6.0/jquery.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <link href="./App.css" rel="stylesheet" />
    <script src="App.js" type="text/javascript"></script>
    <title>TEST</title>
  </head>
  <body>
    <header style="background: black">
      <b></b>
      <h3 style="color: white">My School</h3>
    </header>

    <aside>
      <div class="img">
        <img src="./notebook.jpg" />
      </div>
    </aside>
    <div class="container">
    <form  action = 'Create.php' method ='post' enctype ='multipart/form-data'>
        <div class="form" style="border-bottom: 2px dotted gray">
          <h5 style="color: rgb(65, 61, 61)">ลงชื่อนักเรียน</h5>
          <div class="input" style="border: 2px solid rgb black">
            <input
              class="row-cols-7"
              type="text"
              name="text"
              id="nameform"
              style="border: 2px solid black; height: 40px"
              placeholder="ลงชื่อนักเรียน...."
            />
            <button
              type="submit"
              name="submit"
              class="btn bg-black row-col-2 text-white"
              style="margin-bottom: 3px"
              id="button"
              onclick="add();"
            >
              <svg
                xmlns="http://www.w3.org/2000/svg"
                width="25"
                height="25"
                fill="currentColor"
                class="bi bi-plus-lg"
                viewBox="0 0 16 16"
              >
                <path
                  fill-rule="evenodd"
                  d="M8 2a.5.5 0 0 1 .5.5v5h5a.5.5 0 0 1 0 1h-5v5a.5.5 0 0 1-1 0v-5h-5a.5.5 0 0 1 0-1h5v-5A.5.5 0 0 1 8 2Z"
                />
              </svg>
            </button>
          </div>
          <br />
        </div>
      </form>

      <div class="list">
        <br />
        <h4><b>รายชื่อ</b></h4>
        <?php



    require "connectTest.php";
    $connect = $conn;
    $sHow =   " SELECT * FROM #TABLE NAME# ORDER BY NAME DESC LIMIT NUMBER  ";
$result = mysqli_query($connect, $sHow); 

  while($row = mysqli_fetch_assoc($result))  {
  
      echo  '<div class="listmember">';
         echo '<ul class="list-group list-group-horizontal">';
            echo '<li class="col-1" style="list-style: none">';
              echo '<h4>'+.$row['No_'].+'</h4>';
           echo '</li>',
            '<li class="col-3" style="list-style: none">',
              '<h4 id="name">'+ .$row['name']. +'</h4>',
            '</li>',
            '<li class="col-4" style="list-style: none">',
              '<p style="font-size: 0.7rem; margin-top: 9px; color: gray">',
              .$row['Date'].,
            '</p>',
            '</li>',
            '<li class="col-3" style="list-style: none; margin-top: 2px">',
             ' <button',
                'class="edit border-0 bg-white"',
                'style="color: gray"',
                'onclick="edit();"',
              '>',
                '<h5>แก้ใข</h5>',
              '</button>';?>
              <?php
            
               
               
           echo  "</li>";
              echo "<form  action = 'Delete.php' method ='post' enctype ='multipart/form-data'>";
              echo '<li class="col-2" style="list-style: none"><input type="text" name="delete" id="delete" hidden />';
              ?>
                <button
                  type="submit"
                  class="delete border-0 bg-white"
                  style="color: gray"
                  onclick="deletename();"
                >
                  <svg
                    xmlns="http://www.w3.org/2000/svg"
                    width="25"
                    height="25"
                    fill="currentColor"
                    class="bi bi-trash"
                    viewBox="0 0 16 16"
                  >
                    <path
                      d="M5.5 5.5A.5.5 0 0 1 6 6v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5Zm2.5 0a.5.5 0 0 1 .5.5v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5Zm3 .5a.5.5 0 0 0-1 0v6a.5.5 0 0 0 1 0V6Z"
                    />
                    <path
                      d="M14.5 3a1 1 0 0 1-1 1H13v9a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V4h-.5a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1H6a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1h3.5a1 1 0 0 1 1 1v1ZM4.118 4 4 4.059V13a1 1 0 0 0 1 1h6a1 1 0 0 0 1-1V4.059L11.882 4H4.118ZM2.5 3h11V2h-11v1Z"
                    />
                  </svg>
                </button>
              </li>
            </form>
            
          </ul>
        </div>
      </div>
    </div>
    <script>
      $(".delete").click(function () {
        $(".listmember").fadeOut();
      });
    </script>
  </body>
</html>