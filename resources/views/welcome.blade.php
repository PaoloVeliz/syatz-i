@extends('layouts.app')

    @section('content')

        <div class="item3">
            <div class="text-center">
                <h1 style="font-size: 100px">Somos Syatz'i'</h1>
            </div>
            <div class="d-flex justify-content-around">
                <div class="card-deck row justify-content-center" style="background: #FEFAE0; border: 0">
                    <div class="card" style="width: 400px; border: 0; background: #FEFAE0">
                        <div class="card-body" style="background: #FEFAE0; border: 0">
                            <h3 class="card-title" style="text-align:center">Misión</h3>
                            <p class="card-text" style="text-align:justify; text-justify:inter-word">Somos un sitio web que da a conocer sobre lugares que pueden llegar a brindar un refugio para aquellas mascotas sin hogar, donde aquellos voluntarios o lugares que tenga la capacidad de dar un lugar que los llene de seguridad, amor y que vele por su seguridad. Donde no solo la busqueda de un lugar sea la importante si no el estar informados de cualquier evento o actividad relevante sea comunicada para todos aquellos amantes de los animales.</p>
                        </div>
                        <img src="/assets/images/cat.jpg" alt="dog" class="card-img-bottom" style="height: 350px">
                    </div>
                    <div class="card" style="width: 400px; border: 0; background: #FEFAE0">
                        <div class="card-body" style="background: #FEFAE0; border: 0">
                            <h3 class="card-title" style="text-align:center">Visión</h3>
                            <p class="card-text" style="text-align:justify; text-justify:inter-word">Nuestra visión es ser reconocidos como un sitio web referente en brindar a una persona o grupo la oportunidad de cuidar, proteger y adoptar a una mascota creando así un sitio en el que cada animal pueda encontrar un hogar lleno de amor y compasión. El esfuerzo que se da por parte de las instituciones y personas será un modelo a seguir para toda la población quetzalteca para que todos puedan colaborar y lograr así un cambio positivo en la vida de las mascotas.</p>
                        </div>
                        <img src="/assets/images/maltipoo.jpg" alt="dog" class="card-img-bottom" style="height: 350px">
                    </div>
                </div>
                <!-- <div class="m-0 row justify-content-center h-auto d-inline-block card" style="width: 350px; background: #FEFAE0; border: 0">
                    <img src="/assets/images/friends.png" alt="dog" class="card-img opacity-50" style="height: 350px">
                    <div class="card-img-overlay">
                        <h2 class="text-center">Misión</h2><br />
                        <p style="text-align:justify; text-justify:inter-word">Somos un sitio web que da a conocer sobre lugares que pueden llegar a brindar un refugio para aquellas mascotas sin hogar, donde aquellos voluntarios o lugares que tenga la capacidad de dar un lugar que los llene de seguridad, amor y que vele por su seguridad. Donde no solo la busqueda de un lugar sea la importante si no el estar informados de cualquier evento o actividad relevante sea comunicada para todos aquellos amantes de los animales.</p>
                    </div>
                </div>
                <div class="m-0 row justify-content-center h-auto d-inline-block card" style="width: 350px; background: #FEFAE0; border: 0">
                    <img src="/assets/images/happy.png" alt="dog" class="card-img opacity-50" style="height: 350px">
                    <div class="card-img-overlay">
                        <h2 class="text-center">Visión</h2><br />
                        <p style="text-align:justify; text-justify:inter-word">Nuestra visión es ser reconocidos como un sitio web referente en brindar a una persona o grupo la oportunidad de cuidar, proteger y adoptar a una mascota creando así un sitio en el que cada animal pueda encontrar un hogar lleno de amor y compasión. El esfuerzo que se da por parte de las instituciones y personas será un modelo a seguir para toda la población quetzalteca para que todos puedan colaborar y lograr así un cambio positivo en la vida de las mascotas.</p>
                    </div>
                </div> -->
            </div>
            <div >
                <h2 class="text-center" style="margin-top: 30px">¿Qué Buscamos?</h2>
                <div class="row" style="width: 100%; display: flex; align-items: center; justify-content: center; margin-bottom: 50px">
                    <div class="col-4" style="width: 20%">
                        <div class="list-group" id="list-tab" role="tablist">
                            <a class="list-group-item list-group-item-action" id="list-walfare-list" data-bs-toggle="list" href="#list-walfare" role="tab" aria-controls="walfare">Bienestar animal</a>
                            <a class="list-group-item list-group-item-action" id="list-adoption-list" data-bs-toggle="list" href="#list-adoption" role="tab" aria-controls="adoption">Adopción exitosa</a>
                            <a class="list-group-item list-group-item-action" id="list-education-list" data-bs-toggle="list" href="#list-education" role="tab" aria-controls="education">Educación y concientización</a>
                            <a class="list-group-item list-group-item-action" id="list-collaboration-list" data-bs-toggle="list" href="#list-collaboration" role="tab" aria-controls="collaboration">Colaboración y alianzas estrategicas</a>
                            <a class="list-group-item list-group-item-action" id="list-inspiration-list" data-bs-toggle="list" href="#list-inspiration" role="tab" aria-controls="inspiration">Inspirar a la comunidad</a>
                        </div>
                    </div>
                    <div class="col-8" style="width: 40%; justify-content:">
                        <div class="tab-content" id="nav-tabContent" style="text-align:justify; text-justify:inter-word">
                            <div class="tab-pane fade show active" id="list-walfare" role="tabpanel" aria-labelledby="list-walfare-list">Brindamos un sitio para que las instituciones o personas logren encontrar un sitio donde se asegure el bienestar físico, emocional y social de todas las mascotas bajo el cuidado los hogares. Nuestro objetivo es ser un sitio donde personas que buscan adoptar una mascota tengan la oportunidad de brindar una vida plena, libre de sufrimiento y enriquecida con amor y atención constante.</div>
                            <div class="tab-pane fade" id="list-adoption" role="tabpanel" aria-labelledby="list-adoption-list">Nos esforzamos por facilitar el arduo trabajo de instituciones que buscan dar hogares amorosos y permanentes para todas las mascotas que llegan a sus centros. Apoyando a la causa aumentando las tasas de adopción exitosas y por ser el punto de referencia para la pobalción quetzalteca para encontrar la mascota perfecta.</div>
                            <div class="tab-pane fade" id="list-education" role="tabpanel" aria-labelledby="list-education-list">Buscamos educar y concientizar sobre la responsabilidad de tener una mascota. Mediante la publicación de distintas actividades brindando un espacio para que aquellas instituciones que realizan programas de educación, campañas de sensibilización y eventos comunitarios, promueven la adopción responsable, el trato ético hacia los animales y la importancia de esterilización y castración.</div>
                            <div class="tab-pane fade" id="list-collaboration" role="tabpanel" aria-labelledby="list-collaboration-list">Nos esforzamos por generar un medio con el cual se generen alianzas sólidas entre organizaciones, veterinarios, rescatistas y voluntarios que compartan nuestra visión y valores. Juntos, podemos ampliar nuestro impacto, aumentar la capacidad de ayuda y trabajar de manera más efectiva en beneficio de los animales.</div>
                            <div class="tab-pane fade" id="list-inspiration" role="tabpanel" aria-labelledby="list-inspiration-list">Buscamos inspirar a las personas a ver a los animales como seres valiosos y a tratarlos con respeto y compasión. Buscamos cambiar las actitudes y comportamientos hacia los animales, fomentando una comunidad que se preocupe por su bienestar y se comprometa a protegerlos.</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

@endsection
