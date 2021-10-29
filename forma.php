<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="public/styles/style1.css">
</head>
<body>
    <div class="forma"  class=" col-10">
        <form  action="validation.php"  method="GET">
   
            <label class="form-label fs-2 mb-3"> Ostavite svoje podatke ovde...</label> <br>
            <div class="row mb-3">
                <label class="col-sm-3 col-form-label fs-2 "> E-mail</label>
                    <div class="col-sm-7">
                        <input class="form-control-lg " type="text" name="email" placeholder="Upišite Vaš imejl"/> <br />
                    </div>
            </div>
                <div class="row mb-3">   
                 <label class="col-sm-3 col-form-label fs-2 "> Korisnićko ime</label>
                    <div class="col-sm-7">
                        <input  class="form-control-lg mb-3" type="text" name="username" placeholder="Upišite Vaše korisnićko ime"/> <br />
                    </div>
                </div>
                <div class="row mb-3">
                  <label class="col-sm-3 col-form-label fs-2 "> Lozinka</label>
                    <div class="col-sm-7">
                        <input class="form-control-lg mb-3" type="text" name="pass" placeholder="Upišite Vašu lozinku"/> <br />
                    </div>
                </div>
                <div class="row mb-3">
                  <label class="col-sm-3 col-form-label fs-2 "> Ponovna lozinka</label>
                    <div class="col-sm-7">
                        <input class="form-control-lg mb-3" type="text" name="passConfirm" placeholder="Potvrdite Vašu lozinku"/> <br />
                    </div>
                </div>
            <input class=" btn-danger btn-lg" type="button" name="btn"  value="submit" /> <br />
        </form>
    </div>
</body>
</html>