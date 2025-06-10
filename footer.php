
<section id="eligenos" class="py-60">
    <div class="container">
        <div class="row" data-aos="fade-up"
        data-aos-duration="1000"
        data-aos-delay="100">
            <div
                class="col-6 offset-3 col-md-3 offset-md-2 mb-4 my-md-auto text-center"
            >
                <a href="#">
                    <img
                        src="<?php echo esc_url(
                            get_template_directory_uri()
                        ); ?>/assets/images/logo-carnemart@2x.png"
                        alt=""
                        class="img-fluid"
                    />
                </a>
            </div>
            <div
                class="col-md-6 offset-md-1 my-auto text-center text-md-start"
            >
                <h1>
                    Elígenos como tu<br />
                    proveedor
                </h1>
                <a href="javascript:void(0)" class="btn btn-lg rounded-pill" data-bs-toggle="modal" data-bs-target="#contactoModal">Conoce más aquí</a
                >
            </div>
        </div>
    </div>
</section>

<footer class="py-60">
    <div class="container">
        <div class="row">
            <div class="col-md-3">
                <h4>Mapa del sitio</h4>
                <nav>
                    <ul class="list-unstyled">
                        <li>
                            <a href="<?php echo esc_url(
                                home_url()
                            ); ?>">Inicio</a>
                        </li>
                        <li>
                            <a href="<?php echo esc_url(
                                get_permalink(8)
                            ); ?>">Productos</a>
                        </li>
                        <li>
                            <a href="<?php echo esc_url(
                                get_permalink(6)
                            ); ?>">Beneficios</a>
                        </li>
                        <li>
                            <a href="<?php echo esc_url(
                                home_url()
                            ); ?>/recetas">Recetas</a>
                        </li>
                        <li>
                            <a href="#">Contacto</a>
                        </li>
                    </ul>
                </nav>
            </div>
            <div class="col-md-4">
                <h4>Términos y condiciones</h4>
                <ul class="list-unstyled">
                    <li>
                        <a href="<?php echo esc_url(
                            get_permalink(24)
                        ); ?>">Saber más</a>
                    </li>
                </ul>
            </div>
            <div class="col-md-4 offset-md-1 my-auto text-center">
                <ul class="social list-inline mb-0">
                    <li class="list-inline-item">
                        <a
                            href="https://www.instagram.com/carnemart"
                            target="_blank"
                        >
                            <i class="fa-brands fa-instagram"></i>
                        </a>
                    </li>
                    <li class="list-inline-item">
                        <a
                            href="https://www.facebook.com/CarneMartOficial"
                            target="_blank"
                        >
                            <i class="fa-brands fa-facebook"></i>
                        </a>
                    </li>
                    <li class="list-inline-item">
                        <a
                            href="https://www.tiktok.com/@carnemartoficial"
                            target="_blank"
                        >
                            <i class="fa-brands fa-tiktok"></i>
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</footer>


<!-- Modal -->
<div class="modal fade" id="contactoModal" tabindex="-1" aria-labelledby="contactoModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg modal-dialog-centered">
        <div class="modal-content">
        <!-- Modal header -->
        <div class="modal-header">
            <h5 class="modal-title" id="contactoModalLabel">Formulario de contacto</h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Cerrar"></button>
        </div>

        <!-- Modal body -->
        <div class="modal-body">
            <div id="form-messages"></div>

            <form
                action="./mailer.php"
                method="POST"
                class="row g-3 needs-validation contact-form mb-4 mb-lg-0"
                id="ajax-contact"
                novalidate
                data-aos="fade-up"
                data-aos-duration="1000"
                data-aos-delay="300"
            >
                <div class="col-md-6 form-floating">
                    <input
                        type="text"
                        class="form-control shadow-none"
                        id="nombre"
                        name="nombre"
                        placeholder="Nombre*"
                        pattern=".{5,50}"
                        required
                    />
                    <label for="nombre" class="form-label"
                        >Nombre*</label
                    >
                    <div class="valid-feedback">¡Luce bien!</div>
                    <div class="invalid-feedback">
                        Por favor introduce tu nombre.
                    </div>
                </div>
                <div class="col-md-6 form-floating">
                    <input
                        type="text"
                        class="form-control shadow-none"
                        id="apellido"
                        name="apellido"
                        placeholder="Apellido*"
                        pattern=".{5,50}"
                        required
                    />
                    <label for="apellido" class="form-label"
                        >Apellido*</label
                    >
                    <div class="valid-feedback">¡Luce bien!</div>
                    <div class="invalid-feedback">
                        Por favor introduce tu apellido.
                    </div>
                </div>
                <div class="col-md-6 form-floating">
                    <input
                        type="email"
                        class="form-control shadow-none"
                        id="correo"
                        name="correo"
                        placeholder="Email*"
                        required
                    />
                    <label for="correo" class="form-label"
                        >Correo*</label
                    >
                    <div class="valid-feedback">¡Luce bien!</div>
                    <div class="invalid-feedback">
                        Por favor introduce un correo electrónico
                        válido.
                    </div>
                </div>
                <div class="col-md-6 form-floating">
                    <input
                        type="tel"
                        class="form-control shadow-none"
                        id="telefono"
                        name="telefono"
                        placeholder="Phone*"
                        required
                    />
                    <label for="telefono" class="form-label"
                        >Teléfono*</label
                    >
                    <div class="valid-feedback">¡Luce bien!</div>
                    <div class="invalid-feedback">
                        Por favor introduce un número de teléfono
                        válido.
                    </div>
                </div>
                <div class="col-md-4 form-floating">
                    <input
                        type="number"
                        min="0"
                        max="999999"
                        maxlength="6"
                        class="form-control shadow-none"
                        id="cp"
                        name="cp"
                        placeholder="Código postal*"
                        oninput="if(this.value.length > 6) this.value=this.value.slice(0,6)"
                        required
                    />
                    <label for="cp" class="form-label"
                        >Código postal*</label
                    >
                    <div class="valid-feedback">¡Luce bien!</div>
                    <div class="invalid-feedback">
                        Por favor introduce tu un código postal
                        válido.
                    </div>
                </div>
                <div class="col-md-4 form-floating">
                    <select
                        class="form-control"
                        name="estado"
                        required
                    >
                        <option value="">
                            Seleccione uno...
                        </option>
                        <option value="Aguascalientes">
                            Aguascalientes
                        </option>
                        <option value="Baja California">
                            Baja California
                        </option>
                        <option value="Baja California Sur">
                            Baja California Sur
                        </option>
                        <option value="Campeche">Campeche</option>
                        <option value="Chiapas">Chiapas</option>
                        <option value="Chihuahua">Chihuahua</option>
                        <option value="CDMX">
                            Ciudad de México
                        </option>
                        <option value="Coahuila">Coahuila</option>
                        <option value="Colima">Colima</option>
                        <option value="Durango">Durango</option>
                        <option value="Estado de México">
                            Estado de México
                        </option>
                        <option value="Guanajuato">
                            Guanajuato
                        </option>
                        <option value="Guerrero">Guerrero</option>
                        <option value="Hidalgo">Hidalgo</option>
                        <option value="Jalisco">Jalisco</option>
                        <option value="Michoacán">Michoacán</option>
                        <option value="Morelos">Morelos</option>
                        <option value="Nayarit">Nayarit</option>
                        <option value="Nuevo León">
                            Nuevo León
                        </option>
                        <option value="Oaxaca">Oaxaca</option>
                        <option value="Puebla">Puebla</option>
                        <option value="Querétaro">Querétaro</option>
                        <option value="Quintana Roo">
                            Quintana Roo
                        </option>
                        <option value="San Luis Potosí">
                            San Luis Potosí
                        </option>
                        <option value="Sinaloa">Sinaloa</option>
                        <option value="Sonora">Sonora</option>
                        <option value="Tabasco">Tabasco</option>
                        <option value="Tamaulipas">
                            Tamaulipas
                        </option>
                        <option value="Tlaxcala">Tlaxcala</option>
                        <option value="Veracruz">Veracruz</option>
                        <option value="Yucatán">Yucatán</option>
                        <option value="Zacatecas">Zacatecas</option>
                    </select>
                    <label for="estado" class="form-label"
                        >Estado*</label
                    >
                    <div class="valid-feedback">¡Luce bien!</div>
                    <div class="invalid-feedback">
                        Por favor selecciona un Estado.
                    </div>
                </div>
                <div class="col-md-4 form-floating">
                    <input
                        type="text"
                        class="form-control shadow-none"
                        id="municipio"
                        name="municipio"
                        placeholder="Municipio*"
                        pattern=".{5,50}"
                        required
                    />
                    <label for="municipio" class="form-label"
                        >Municipio*</label
                    >
                    <div class="valid-feedback">¡Luce bien!</div>
                    <div class="invalid-feedback">
                        Por favor introduce tu municipio.
                    </div>
                </div>
                <div class="col-md-12 form-floating">
                    <select
                        class="form-control"
                        name="pais"
                        required
                    >
                        <option value="">
                            Seleccione uno...
                        </option>
                        <option value="Afganistán">
                            Afganistán
                        </option>
                        <option value="Albania">Albania</option>
                        <option value="Alemania">Alemania</option>
                        <option value="Andorra">Andorra</option>
                        <option value="Angola">Angola</option>
                        <option value="Anguila">Anguila</option>
                        <option value="Antillas Neerlandesas">
                            Antillas Neerlandesas
                        </option>
                        <option value="Arabia Saudita">
                            Arabia Saudita
                        </option>
                        <option value="Argelia">Argelia</option>
                        <option value="Argentina">Argentina</option>
                        <option value="Armenia">Armenia</option>
                        <option value="Aruba">Aruba</option>
                        <option value="Australia">Australia</option>
                        <option value="Austria">Austria</option>
                        <option value="Azerbaiyán">
                            Azerbaiyán
                        </option>
                        <option value="Bahamas">Bahamas</option>
                        <option value="Bahrein">Bahrein</option>
                        <option value="Bangladesh">
                            Bangladesh
                        </option>
                        <option value="Barbados">Barbados</option>
                        <option value="Bélgica">Bélgica</option>
                        <option value="Belice">Belice</option>
                        <option value="Benín">Benín</option>
                        <option value="Bermudas">Bermudas</option>
                        <option value="Bielorrusia">
                            Bielorrusia
                        </option>
                        <option value="Bolivia">Bolivia</option>
                        <option value="Bosnia y Herzegovina">
                            Bosnia y Herzegovina
                        </option>
                        <option value="Botsuana">Botsuana</option>
                        <option value="Brasil">Brasil</option>
                        <option value="Brunéi">Brunéi</option>
                        <option value="Bulgaria">Bulgaria</option>
                        <option value="Burkina Faso">
                            Burkina Faso
                        </option>
                        <option value="Burundi">Burundi</option>
                        <option value="Bután">Bután</option>
                        <option value="Cabo Verde">
                            Cabo Verde
                        </option>
                        <option value="Camboya">Camboya</option>
                        <option value="Camerún">Camerún</option>
                        <option value="Canadá">Canadá</option>
                        <option value="Chad">Chad</option>
                        <option value="Chile">Chile</option>
                        <option value="China">China</option>
                        <option value="Chipre">Chipre</option>
                        <option value="Ciudad del Vaticano">
                            Ciudad del Vaticano
                        </option>
                        <option value="Colombia">Colombia</option>
                        <option value="Comoras">Comoras</option>
                        <option value="Congo">Congo</option>
                        <option value="Corea del Norte">
                            Corea del Norte
                        </option>
                        <option value="Corea del Sur">
                            Corea del Sur
                        </option>
                        <option value="Costa de Marfil">
                            Costa de Marfil
                        </option>
                        <option value="Costa Rica">
                            Costa Rica
                        </option>
                        <option value="Croacia">Croacia</option>
                        <option value="Cuba">Cuba</option>
                        <option value="Dinamarca">Dinamarca</option>
                        <option value="Dominica">Dominica</option>
                        <option value="Ecuador">Ecuador</option>
                        <option value="Egipto">Egipto</option>
                        <option value="El Salvador">
                            El Salvador
                        </option>
                        <option value="Emiratos Árabes Unidos">
                            Emiratos Árabes Unidos
                        </option>
                        <option value="Eritrea">Eritrea</option>
                        <option value="Eslovaquia">
                            Eslovaquia
                        </option>
                        <option value="Eslovenia">Eslovenia</option>
                        <option value="España">España</option>
                        <option value="Estados Unidos">
                            Estados Unidos
                        </option>
                        <option value="Estonia">Estonia</option>
                        <option value="Etiopía">Etiopía</option>
                        <option value="Filipinas">Filipinas</option>
                        <option value="Finlandia">Finlandia</option>
                        <option value="Fiyi">Fiyi</option>
                        <option value="Francia">Francia</option>
                        <option value="Gabón">Gabón</option>
                        <option value="Gambia">Gambia</option>
                        <option value="Georgia">Georgia</option>
                        <option
                            value="Georgia del Sur e Islas Sandwich del Sur"
                        >
                            Georgia del Sur e Islas Sandwich del Sur
                        </option>
                        <option value="Ghana">Ghana</option>
                        <option value="Gibraltar">Gibraltar</option>
                        <option value="Granada">Granada</option>
                        <option value="Grecia">Grecia</option>
                        <option value="Groenlandia">
                            Groenlandia
                        </option>
                        <option value="Guadalupe">Guadalupe</option>
                        <option value="Guam">Guam</option>
                        <option value="Guatemala">Guatemala</option>
                        <option value="Guayana Francesa">
                            Guayana Francesa
                        </option>
                        <option value="Guinea">Guinea</option>
                        <option value="Guinea Ecuatorial">
                            Guinea Ecuatorial
                        </option>
                        <option value="Guinea-Bissau">
                            Guinea-Bissau
                        </option>
                        <option value="Guyana">Guyana</option>
                        <option value="Haití">Haití</option>
                        <option value="Honduras">Honduras</option>
                        <option value="Hong Kong">Hong Kong</option>
                        <option value="Hungría">Hungría</option>
                        <option value="India">India</option>
                        <option value="Indonesia">Indonesia</option>
                        <option value="Irán">Irán</option>
                        <option value="Iraq">Iraq</option>
                        <option value="Irlanda">Irlanda</option>
                        <option value="Isla Bouvet">
                            Isla Bouvet
                        </option>
                        <option value="Isla de Navidad">
                            Isla de Navidad
                        </option>
                        <option value="Isla Norfolk">
                            Isla Norfolk
                        </option>
                        <option value="Islandia">Islandia</option>
                        <option value="Islas Caimán">
                            Islas Caimán
                        </option>
                        <option value="Islas Cocos">
                            Islas Cocos
                        </option>
                        <option value="Islas Cook">
                            Islas Cook
                        </option>
                        <option value="Islas Feroe">
                            Islas Feroe
                        </option>
                        <option value="Islas Heard y McDonald">
                            Islas Heard y McDonald
                        </option>
                        <option value="Islas Malvinas">
                            Islas Malvinas
                        </option>
                        <option value="Islas Marianas del Norte">
                            Islas Marianas del Norte
                        </option>
                        <option value="Islas Marshall">
                            Islas Marshall
                        </option>
                        <option
                            value="Islas Menores de Estados Unidos"
                        >
                            Islas Menores de Estados Unidos
                        </option>
                        <option value="Islas Salomón">
                            Islas Salomón
                        </option>
                        <option value="Islas Turcas y Caicos">
                            Islas Turcas y Caicos
                        </option>
                        <option value="Islas Vírgenes Británicas">
                            Islas Vírgenes Británicas
                        </option>
                        <option
                            value="Islas Vírgenes de los Estados Unidos"
                        >
                            Islas Vírgenes de los Estados Unidos
                        </option>
                        <option value="Israel">Israel</option>
                        <option value="Italia">Italia</option>
                        <option value="Jamaica">Jamaica</option>
                        <option value="Japón">Japón</option>
                        <option value="Jordania">Jordania</option>
                        <option value="Kazajistán">
                            Kazajistán
                        </option>
                        <option value="Kenia">Kenia</option>
                        <option value="Kirguistán">
                            Kirguistán
                        </option>
                        <option value="Kiribati">Kiribati</option>
                        <option value="Kuwait">Kuwait</option>
                        <option value="Laos">Laos</option>
                        <option value="Lesoto">Lesoto</option>
                        <option value="Letonia">Letonia</option>
                        <option value="Líbano">Líbano</option>
                        <option value="Liberia">Liberia</option>
                        <option value="Libia">Libia</option>
                        <option value="Liechtenstein">
                            Liechtenstein
                        </option>
                        <option value="Lituania">Lituania</option>
                        <option value="Luxemburgo">
                            Luxemburgo
                        </option>
                        <option value="Macao">Macao</option>
                        <option value="Macedonia del Norte">
                            Macedonia del Norte
                        </option>
                        <option value="Madagascar">
                            Madagascar
                        </option>
                        <option value="Malasia">Malasia</option>
                        <option value="Malawi">Malawi</option>
                        <option value="Maldivas">Maldivas</option>
                        <option value="Malí">Malí</option>
                        <option value="Malta">Malta</option>
                        <option value="Marruecos">Marruecos</option>
                        <option value="Martinica">Martinica</option>
                        <option value="Mauricio">Mauricio</option>
                        <option value="Mauritania">
                            Mauritania
                        </option>
                        <option value="Mayotte">Mayotte</option>
                        <option value="México">México</option>
                        <option value="Micronesia">
                            Micronesia
                        </option>
                        <option value="Moldavia">Moldavia</option>
                        <option value="Mónaco">Mónaco</option>
                        <option value="Mongolia">Mongolia</option>
                        <option value="Montserrat">
                            Montserrat
                        </option>
                        <option value="Mozambique">
                            Mozambique
                        </option>
                        <option value="Myanmar">Myanmar</option>
                        <option value="Namibia">Namibia</option>
                        <option value="Nauru">Nauru</option>
                        <option value="Nepal">Nepal</option>
                        <option value="Nicaragua">Nicaragua</option>
                        <option value="Níger">Níger</option>
                        <option value="Nigeria">Nigeria</option>
                        <option value="Niue">Niue</option>
                        <option value="Noruega">Noruega</option>
                        <option value="Nueva Caledonia">
                            Nueva Caledonia
                        </option>
                        <option value="Nueva Zelanda">
                            Nueva Zelanda
                        </option>
                        <option value="Omán">Omán</option>
                        <option value="Países Bajos">
                            Países Bajos
                        </option>
                        <option value="Pakistán">Pakistán</option>
                        <option value="Palau">Palau</option>
                        <option value="Panamá">Panamá</option>
                        <option value="Papúa Nueva Guinea">
                            Papúa Nueva Guinea
                        </option>
                        <option value="Paraguay">Paraguay</option>
                        <option value="Perú">Perú</option>
                        <option value="Pitcairn">Pitcairn</option>
                        <option value="Polinesia Francesa">
                            Polinesia Francesa
                        </option>
                        <option value="Polonia">Polonia</option>
                        <option value="Portugal">Portugal</option>
                        <option value="Puerto Rico">
                            Puerto Rico
                        </option>
                        <option value="Qatar">Qatar</option>
                        <option value="Reino Unido">
                            Reino Unido
                        </option>
                        <option value="República Centroafricana">
                            República Centroafricana
                        </option>
                        <option value="República Checa">
                            República Checa
                        </option>
                        <option
                            value="República Democrática del Congo"
                        >
                            República Dominicana
                        </option>
                        <option value="Reunión">Reunión</option>
                        <option value="Ruanda">Ruanda</option>
                        <option value="Rumania">Rumania</option>
                        <option value="Rusia">Rusia</option>
                        <option value="Sahara Occidental">
                            Sahara Occidental
                        </option>
                        <option value="Samoa">Samoa</option>
                        <option value="Samoa Americana">
                            Samoa Americana
                        </option>
                        <option value="San Cristóbal y Nieves">
                            San Cristóbal y Nieves
                        </option>
                        <option value="San Marino">
                            San Marino
                        </option>
                        <option value="San Pedro y Miquelón">
                            San Pedro y Miquelón
                        </option>
                        <option
                            value="San Vicente y las Granadinas"
                        >
                            San Vicente y las Granadinas
                        </option>
                        <option value="Santa Helena">
                            Santa Helena
                        </option>
                        <option value="Santa Lucía">
                            Santa Lucía
                        </option>
                        <option value="Santo Tomé y Príncipe">
                            Santo Tomé y Príncipe
                        </option>
                        <option value="Senegal">Senegal</option>
                        <option value="Seychelles">
                            Seychelles
                        </option>
                        <option value="Sierra Leona">
                            Sierra Leona
                        </option>
                        <option value="Singapur">Singapur</option>
                        <option value="Siria">Siria</option>
                        <option value="Somalia">Somalia</option>
                        <option value="Sri Lanka">Sri Lanka</option>
                        <option value="Suazilandia">
                            Suazilandia
                        </option>
                        <option value="Sudáfrica">Sudáfrica</option>
                        <option value="Sudán">Sudán</option>
                        <option value="Suecia">Suecia</option>
                        <option value="Suiza">Suiza</option>
                        <option value="Surinam">Surinam</option>
                        <option value="Svalbard y Jan Mayen">
                            Svalbard y Jan Mayen
                        </option>
                        <option value="Tailandia">Tailandia</option>
                        <option value="Taiwán">Taiwán</option>
                        <option value="Tanzania">Tanzania</option>
                        <option value="Tayikistán">
                            Tayikistán
                        </option>
                        <option
                            value="Territorios Australes Franceses"
                        >
                            Territorios Australes Franceses
                        </option>
                        <option
                            value="Territorio Británico del Océano Índico"
                        >
                            Territorio Británico del Océano Índico
                        </option>
                        <option value="Togo">Togo</option>
                        <option value="Tokelau">Tokelau</option>
                        <option value="Tonga">Tonga</option>
                        <option value="Trinidad y Tobago">
                            Trinidad y Tobago
                        </option>
                        <option value="Túnez">Túnez</option>
                        <option value="Turkmenistán">
                            Turkmenistán
                        </option>
                        <option value="Turquía">Turquía</option>
                        <option value="Tuvalu">Tuvalu</option>
                        <option value="Ucrania">Ucrania</option>
                        <option value="Uganda">Uganda</option>
                        <option value="Uruguay">Uruguay</option>
                        <option value="Uzbekistán">
                            Uzbekistán
                        </option>
                        <option value="Vanuatu">Vanuatu</option>
                        <option value="Venezuela">Venezuela</option>
                        <option value="Vietnam">Vietnam</option>
                        <option value="Wallis y Futuna">
                            Wallis y Futuna
                        </option>
                        <option value="Yemen">Yemen</option>
                        <option value="Yibuti">Yibuti</option>
                        <option value="Zambia">Zambia</option>
                        <option value="Zimbabue">Zimbabue</option>
                    </select>
                    <label for="pais" class="form-label"
                        >País*</label
                    >
                    <div class="valid-feedback">¡Luce bien!</div>
                    <div class="invalid-feedback">
                        Por favor selecciona un país.
                    </div>
                </div>
                <div class="col-md-12 form-floating">
                    <p>¿Eres dueño de un negocio?</p>
                    <div class="form-check">
                        <input
                            type="radio"
                            id="negocio_si"
                            class="form-check-input"
                            name="negocio"
                            value="si"
                            required
                        />
                        <label
                            class="form-check-label"
                            for="negocio_si"
                            >Si, soy dueño</label
                        >
                        <br />
                        <input
                            type="radio"
                            id="negocio_no"
                            class="form-check-input"
                            name="negocio"
                            value="no"
                            required
                        />
                        <label
                            class="form-check-label"
                            for="negocio_no"
                            >No, no tengo negocio</label
                        >
                        <div class="valid-feedback">
                            ¡Luce bien!
                        </div>
                        <div class="invalid-feedback">
                            Por favor selecciona una opción.
                        </div>
                    </div>
                </div>
                <div id="campos-negocio" style="display: none;">
                    <div class="row">
                        <div class="col-md-6 form-floating">
                            <input
                                type="text"
                                class="form-control shadow-none"
                                id="nombre-negocio"
                                name="nombre-negocio"
                                placeholder="Nombre de tu negocio*"
                                pattern=".{3,100}"
                            />
                            <label for="nombre-negocio" class="form-label">Nombre de tu negocio*</label>
                            <div class="valid-feedback">¡Luce bien!</div>
                            <div class="invalid-feedback">
                                Por favor introduce el nombre de tu negocio.
                            </div>
                        </div>

                        <div class="col-md-6 form-floating">
                            <select
                                class="form-control"
                                id="giro-negocio"
                                name="giro-negocio"
                            >
                                <option value="">Seleccione uno...</option>
                                <option value="Banquetes">Banquetes</option>
                                <option value="Barcos">Barcos</option>
                                <option value="Bares y cantinas">Bares y cantinas</option>
                                <option value="Birrieria o Barbacoa">Birrieria o Barbacoa</option>
                                <option value="Burreros">Burreros</option>
                                <option value="Cafeterias">Cafeterías</option>
                                <option value="Carniceria">Carnicería</option>
                                <option value="Carnitas">Carnitas</option>
                                <option value="Comedores Industriales">Comedores Industriales</option>
                                <option value="Cooperativas">Cooperativas</option>
                                <option value="Dependencia de Gobierno">Dependencia de Gobierno</option>
                                <option value="Distribuidor">Distribuidor</option>
                                <option value="Eloteros">Eloteros</option>
                                <option value="Expendio de Pescados y Mariscos">Expendio de Pescados y Mariscos</option>
                                <option value="Ferias">Ferias</option>
                                <option value="Fondas o Cocinas">Fondas o Cocinas</option>
                                <option value="Gorditas">Gorditas</option>
                                <option value="Guarderias">Guarderías</option>
                                <option value="Hamburguesas">Hamburguesas</option>
                                <option value="Hospitales">Hospitales</option>
                                <option value="Hot dogs">Hot dogs</option>
                                <option value="Hoteles">Hoteles</option>
                                <option value="Menuderia">Menudería</option>
                                <option value="Minisuper">Minisuper</option>
                                <option value="Pizzas">Pizzas</option>
                                <option value="Pollerias">Pollerías</option>
                                <option value="Restaurante">Restaurante</option>
                                <option value="Restaurante de Mariscos">Restaurante de Mariscos</option>
                                <option value="Snack">Snack</option>
                                <option value="Sushi">Sushi</option>
                                <option value="Tamales">Tamales</option>
                                <option value="Taqueria">Taquería</option>
                                <option value="Tendero o Cremerias">Tendero o Cremerías</option>
                                <option value="Tianguis">Tianguis</option>
                                <option value="Tortas">Tortas</option>
                            </select>
                            <label for="giro-negocio" class="form-label">Giro de tu negocio*</label>
                            <div class="valid-feedback">¡Luce bien!</div>
                            <div class="invalid-feedback">
                                Por favor selecciona el giro de tu negocio.
                            </div>
                        </div>
                    </div>

                </div>
                <div class="col-md-12 form-check">
                    <input
                        type="checkbox"
                        id="de-acuerdo"
                        class="form-check-input"
                        name="de-acuerdo"
                        required
                    />
                    <label class="form-check-label" for="de-acuerdo"
                        >Estoy de acuerdo con los <a href="https://wacarnemart.com/terminos-condiciones" target="_blank"">términos y condiciones</a>.</label
                    >
                    <div class="valid-feedback">
                        Aceptaste los términos y condiciones.
                    </div>
                    <div class="invalid-feedback">
                        Debes de estar de acuerdo con los términos y
                        condiciones para enviar el formulario.
                    </div>
                </div>
                <div class="col-md-12 mb-5">
                    <button
                        type="submit"
                        class="btn btn-primary btn-lg btn-block rounded-pill"
                    >
                        <i class="fa-solid fa-paper-plane"></i>
                        Enviar
                    </button>
                    <div id="hold-on-a-sec">
                        <i
                            id="contact-spinner"
                            class="fas fa-spinner fa-spin"
                        ></i>
                        Enviando tu información, por favor espera un
                        momento....
                    </div>
                </div>
            </form>
        </div>

        </div>
    </div>
</div>

<!-- a href="https://wa.me/52614?text=Hola%20FOO%20BAR,%20necesito%20información." class="whatsapp" target="_blank">
<i class="fab fa-whatsapp whatsapp-icon"></i>
</a -->

<?php wp_footer(); ?>

<script
    src="https://code.jquery.com/jquery-3.7.1.min.js"
    integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo="
    crossorigin="anonymous"
></script>
<script src="https://tympanus.net/Development/Arctext/js/jquery.arctext.js"></script>
<script src="<?php echo esc_url(
    get_template_directory_uri()
); ?>/assets/js/app.bundle.js"></script>

<script>
    $(document).ready(function () {
        const h1Element = $("#quesos-100 h1");

        if (h1Element.length > 0) {
            h1Element.arctext({ radius: 600 });
        }
    });
</script>

<!-- Google tag (gtag.js) -->
<script
    async
    src="https://www.googletagmanager.com/gtag/js?id=G-0HXFZR3VJ3"
></script>
<script>
    window.dataLayer = window.dataLayer || [];
    function gtag() {
        dataLayer.push(arguments);
    }
    gtag("js", new Date());

    gtag("config", "G-0HXFZR3VJ3");
</script>
</body>
</html>
