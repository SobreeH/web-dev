<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css"
        integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    <title>กรอกข้อมูลส่วนตัว </title>
</head>

<body>
    <div class="container">
        <div class="row">
            <div class="col-3">
                <font size="6">
                    <p>กรอกข้อมูลส่วนตัว :</p>
                </font>
            </div>
        </div><br>
        <div class="row">
            <div class="col-2"></div>
            <div class="col-9">
                <form name="student" method="POST" action="insertSTD.php">
                    <div class="form-row">
                        <div class="form-group col-md-4">
                            <label class="wa" for="inputid">ID :</label>
                            <input type="id" name="id" class="form-control">
                        </div>
                    </div>    
                    <div class="form-row">
                        <div class="form-group col-md-4">
                            <label class="wa" for="inputname">ชื่อ-สกุล :</label>
                            <input type="name" name="name" class="form-control">
                        </div>  
                    </div>
                    <div class="form-row">
                        <div class="form-group col-md-4">
                            <label class="wa" for="inputfac">คณะ :</label>
                            <input type="sername" name="faculty" class="form-control">                          
                        </div>
                        <div class="form-group col-md-4">
                            <label class="wa" for="inputmajor">สาขา :</label><br>
                            <input type="sername" name="major" class="form-control"> 
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="form-group col-md-4">
                            <label class="wa" for="inputage">ปีที่เรียน :</label>
                            <input type="name" name="year" class="form-control">
                        </div>
                        <div class="form-group col-md-4">
                            <label class="wa" for="inputage">อายุ :</label>
                            <input type="name" name="age" class="form-control">
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="form-group col-md-4">
                            <label class="wa" for="inputadress">ที่อยู่ :</label>
                            <textarea name="address" class="form-control" rows="5" cols="10"></textarea>
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="form-group col-md-4">
                            <label class="wa" for="inputadress">เบอร์โทร :</label>
                            <input type="name" name="tel" class="form-control">
                        </div>
                    </div>
        <br><center>
        <input type="submit" name="data" value="submit">
	    <input type="reset" name="data" value="reset"></center>
        <br><center>
        <tr>
    <td></td>
    <td><a href='showww.php'>แสดงข้อมูลนักศึกษา</a></td>
  </tr>
        </center>
        <br><br>
                </form>
            </div>
            <div class="col-1"></div>
        </div>
    </div>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
        integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj"
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"
        integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo"
        crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"
        integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI"
        crossorigin="anonymous"></script>
</body>
</html>
