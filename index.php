
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Document</title>
        <link  rel="stylesheet" href="css/all.css" >
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
        <link rel="stylesheet" href="public/styles/style1.css">
       
    </head>
    
    <body>
    
         <div class=" position-relative has-bg-img background-image">

        <!-- 
            Pregledao sam. Jedina zamerka vezana za kod je to što bi trebala background image učitaš kroz tag sliku, 
            ili na ovaj način kako si uradila, ali da umesto inline css koristiš neku klasu.

            Ovo iznad je komentar sa trela koji nije najsrećnije sročen kada malo bolje pogledam...
            Uglavnom probala si sa slikom i preko boostrapa i to je ok. Elem dalje u tekstu sam napisao da je tvoje rešenje ok, 
            samo što si umesto inline css trebala da prepišeš tvoju stilizaciju u css i onda pozoveš tu klasu u divu.
            Ja sam dodao klasu background-image i na nju sam bukvalno prekopirao tvoja podešavanja, uz promenu putanje slike pošto se css
            nalazi na drugom mestu. INLINE CSS GLEDAJ DA NE KORISTIŠ!

         -->
        <!-- 
        <div class=" position-relative has-bg-img" style="
            background-image: url('public/images/background.jpg') ;
            background-repeat: no-repeat;
            background-size: cover;
            background-position: center;
            height: 50vh; 
        "> -->



        <div class="wrapper">
            <!-- <img class="img-fluid" src="public/images/background.jpg"/> -->
            <a href="novastranica.php"><button class="position-absolute top-0 end-0 m-3 btn btn-danger btn-lg">Uči kroz igru</button></a>   
        </div>

                <div class="stubovi" class="container position-absolute top-80 start-50 translate-middle">
                    <div  class="row">
                        <div class=" col-3 bg-primary p-4 d-block text-white">
                            <span class="d-block mx-auto bg-white text-center align-middle rounded-circle fa-3x" style="width: 80px; height:80px;"><i class="fas fa-school"></i></span><br>
                            <!--<img class="d-block mx-auto p-3 bg-white rounded-circle" src="icons8-e-learning-50.png"/><br>-->
                            <h3 class="text-center">nesto</h3>
                            <p class="text-center p-3">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Ex adipisci tenetur voluptas deserunt facere sunt sed voluptate dolore veniam corrupti, porro facilis aspernatur. Cumque adipisci omnis enim necessitatibus similique totam.</p>
                        </div>

                        <div class=" col-3 bg-danger p-4 d-block text-white">
                            <span class="d-block mx-auto bg-white text-center align-middle rounded-circle fa-3x" style="width: 80px; height:80px;"><i class="fas fa-chalkboard-teacher"></i></span><br>
                        <!-- <img  class="d-block mx-auto p-3 bg-white rounded-circle" src="icons8-homework-50.png" /><br>-->
                            <h3 class="text-center">nesto</h3>
                            <p class="text-center p-3" >Lorem ipsum dolor sit, amet consectetur adipisicing elit. Delectus ea, laborum minus sapiente harum cupiditate earum tenetur praesentium deleniti at quia magnam deserunt placeat sequi, consequatur quisquam quae iure molestiae?</p>
                        </div>

                        <div class="col-3 bg-warning  p-4 d-block text-white">
                            <span class="d-block mx-auto bg-white text-center align-middle rounded-circle fa-3x" style="width: 80px; height:80px;"><i class="fas fa-graduation-cap"></i></span><br>
                        <!-- <img class="d-block mx-auto p-3 bg-white rounded-circle" src="icons8-learning-50.png"/><br>-->
                            <h3 class="text-center">nesto</h3>
                            <p class="text-center p-3">Lorem ipsum dolor sit amet consectetur adipisicing elit. Doloremque cumque, exercitationem incidunt adipisci ea quia et dicta mollitia nobis harum ullam nisi quam aliquam neque officia ipsum, debitis nesciunt iusto!</p>
                        </div>

                        <div class=" col-3 bg-success p-4 d-block text-white">
                            <span class="d-block mx-auto bg-white text-center align-middle rounded-circle fa-3x" style="width: 80px; height:80px;"><i class="fas fa-book-open"></i></span><br>
                        <!-- <img class="d-block mx-auto p-3 bg-white rounded-circle" src="icons8-prepositions-over-50.png"/><br>-->
                            <h3 class="text-center">nesto</h3>
                            <p class="text-center p-3">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Accusamus sed, quo amet omnis quae quisquam! Voluptatum accusamus consequuntur ex iusto, deserunt eius fugiat! Praesentium voluptatum rerum ut, quas sint ratione?</p>
                        </div>
                    </div>
                </div>
            
    </body>
</html>
