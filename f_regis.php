<?phprequire("conndb.php");if (isset($_POST['submit'])) {    $user = $_POST['user'];    $passwd = $_POST['passw'];    $name = $_POST['firstname'];    $lastname = $_POST['lastname'];    $tel = $_POST['tel'];    $nohouse = $_POST['nohouse'];    $village = $_POST['village'];    $district = $_POST['district'];    $sql = "insert into customer (first_name,Last_name,vill_add,dist_add,no_house,phone,user_cus,password_cus ) values ('$name','$lastname','$village','$district','$nohouse','$tel','$user','$passwd')";    $result = $mysqli->query($sql);    if ($result) {        header("Location: index.php");    } else {        echo "<script type='text/javascript'>alert('failed!')</script>";    }}?><html><head>    <title>ລົງທະບຽນ</title>    <head>        <meta charset="utf-8">        <meta name="viewport" content="width=device-width, initial-scale=1">        <link rel="stylesheet" href="./bootstrap/css/bootstrap.min.css">        <script src="./bootstrap/js/jquery.min.js" type="text/javascript"></script>        <script src="./bootstrap/js/bootstrap.min.js" type="text/javascript"></script>        <style type="text/css">            body {                padding-top: 25px;            }            .form1 {                border: 2px solid black;                padding: 20px 40px;                margin-top: 40px;                background-color: #e5e5cc;            }            .bg {                background-color: #e5e5cc;                background-repeat: no-repeat;                width: 100%;                height: 100%;            }            #log {                border: 2px solid black;                padding: 20px 40px;                margin-top: 40px;                font-family: Phetsarath OT;                color: #5f0f28;            }        </style>    </head><body><form class="form-group row col-lg-4"></form><form method="POST" class="form-group row col-lg-4 form1" style="text-alight:center" id="log">        <legend style="font-family:Phetsarath OT; color:blue; font-size:40px ; text-align:center;">ລົງທະບຽນ</legend>        <div class="form-group">            <label for="exampleInputusername">ຊື່ ຜູ້ໃຊ້</label>            <input class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" type="text"                   placeholder="Enter User Name" name="user">            <small class="form-text text-muted" id="emailHelp">We'll never share your email with anyone else.</small>        </div>        <div class="form-group">            <label for="exampleInputPassword1">ລະຫັດ</label>            <input class="form-control" type="password" placeholder="Password" name="passw">        </div>        <div class="form-group">            <label>ຊື່</label>            <input class="form-control" type="text" placeholder="First Name" name="firstname">        </div>        <div class="form-group">            <label>ນາມສະກຸນ </label>            <input class="form-control" type="text" placeholder="Last Name" name="lastname">        </div>        <div class="form-group" style="font-family:Phetsarath OT; color:#5f0f28">            <label>ເບີໂທລະສັບ</label>            <input class="form-control" type="text" placeholder="Put your number" name="tel">            <label>ເຮືອນເລກທີ່</label>            <input class="form-control" type="text" placeholder="Put your NO_house" name="nohouse">        </div>        <div class="form-group">            <label>ບ້ານ</label>            <input class="form-control" type="text" placeholder="Put your Village" name="village">        </div>        <div class="form-group">            <label>ເມືອງ</label>            <select class="form-control" name="district">                <option values="ໄຊເສດຖາ">ໄຊເສດຖາ</option>                <option values="ຈັນທະບູລີ">ຈັນທະບູລີ</option>                <option values="ສີສັດຕະນາກ">ສີສັດຕະນາກ</option>                <option values="ໄຊທານີ">ໄຊທານີ</option>                <option values="ສີໂຄດຕະບອງ">ສີໂຄດຕະບອງ</option>                <option values="ຫາດຊາຍຟອງ">ຫາດຊາຍຟອງ</option>                <option values="ສັງທອງ">ສັງທອງ</option>                <option values="ນາຊາຍທອງ">ນາຊາຍທອງ</option>                <option values="ປາກງື່ມ">ປາກງື່ມ</option>            </select>        </div>        <div class="form-group">            <button class="btn btn-primary" type="submit" name="submit" onclick="alert();">ຍອມຮັບ                <span class="glyphicon glyphicon-ok"></span>            </button>            <a href="index.php" class="btn btn-danger" name="cancel" type="submit">ຍົກເລີກ                <span class="glyphicon glyphicon-remove"></a>        </div></form></body></html>