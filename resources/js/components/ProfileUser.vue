<template>
    <div class="container">
        <div
            class="modal fade"
            id="notiEnviarModal"
            tabindex="-1"
            role="dialog"
            aria-labelledby="enviarModalLabel"
            aria-hidden="true"
        >
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="enviarModalLabel">
                            Notificación de acción
                        </h5>
                        <button
                            type="button"
                            class="close"
                            data-dismiss="modal"
                            aria-label="close"
                        >
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body text-center">
                        <img src="/assets/logo-simanof-1.jpg" alt="" />
                        <br />
                        <h2>
                            Gracias
                            <span class="text-orange">
                                {{ user.first_name }}
                            </span>
                        </h2>
                        <br />
                        <h3>¡Tu pago se proceso con éxito!</h3>
                        <br />
                        <h3>
                            ¡Tus datos de audición se guardaron correctamente!
                        </h3>
                    </div>
                    <div class="modal-footer">
                        <button
                            type="button"
                            class="btn btn-secondary"
                            data-dismiss="modal"
                        >
                            Cerrar
                        </button>
                    </div>
                </div>
            </div>
        </div>

        <div class="row justify-content-center">
            <div class="col-md-12">
                <div
                    class="card d-block  shadow  border-0 bg-white rounded  px-0 mx-0 mt-5"
                >
                    <div class="card-body">
                        <form
                            action=""
                            @submit="checkForm"
                            ref="myForm"
                            id="datos"
                        >
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <input
                                            id="first_name"
                                            v-model="user.first_name"
                                            type="text"
                                            placeholder="First name"
                                            class="form-control col-xs-12 col-sm-12 col-md-12 "
                                            name="first_name"
                                            value=""
                                            required
                                            autocomplete="first_name"
                                            autofocus
                                        />
                                    </div>
                                </div>

                                <div class="col-md-6">
                                    <div class="form-group">
                                        <input
                                            id="last_name"
                                            v-model="user.last_name"
                                            type="text"
                                            placeholder="Last name"
                                            class="form-control col-xs-12 col-sm-12 col-md-12 "
                                            name="last_name"
                                            value=""
                                            required
                                            autocomplete="last_name"
                                            autofocus
                                        />
                                    </div>
                                </div>
                            </div>

                            <div class="form-group row">
                                <div class="col-md-6">
                                    <input
                                        id="email"
                                        v-model="user.email"
                                        type="email"
                                        placeholder="Email"
                                        class="form-control "
                                        name="email"
                                        value=""
                                        required
                                        autocomplete="email"
                                    />
                                </div>

                                <div class="col-md-6">
                                    <input
                                        id="phone"
                                        v-model="user.phone"
                                        type="tel"
                                        placeholder="Phone"
                                        class="form-control "
                                        name="phone"
                                        value=""
                                        required
                                        autocomplete="phone"
                                    />
                                </div>
                            </div>

                            <strong>
                                Birthday
                            </strong>

                            <div class="row">
                                <div class="col-md-3">
                                    <div class="form-group">
                                        <select
                                            aria-label="Month"
                                            v-model="month"
                                            name="birthday_month"
                                            id="month"
                                            title="Month"
                                            class="custom-select custom-select-sm "
                                        >
                                            <option value="0" disabled hidden
                                                >Month</option
                                            >
                                            <option value="01">Jan</option>
                                            <option value="02">Feb</option>
                                            <option value="03">Mar</option>
                                            <option value="04">Apr</option>
                                            <option value="05">May</option>
                                            <option value="06">Jun</option>
                                            <option value="07">Jul</option>
                                            <option value="08">Aug</option>
                                            <option value="09">Sep</option>
                                            <option value="10">Oct</option>
                                            <option value="11">Nov</option>
                                            <option value="12">Dec</option>
                                        </select>
                                    </div>
                                </div>

                                <div class="col-md-3">
                                    <div class="form-group">
                                        <select
                                            aria-label="Day"
                                            v-model="day"
                                            name="birthday_day"
                                            id="day"
                                            title="Day"
                                            class="custom-select custom-select-sm "
                                        >
                                            <option value="0" disabled hidden
                                                >Day</option
                                            >
                                            <option value="1">1</option>
                                            <option value="2">2</option>
                                            <option value="3">3</option>
                                            <option value="4">4</option>
                                            <option value="5">5</option>
                                            <option value="6">6</option>
                                            <option value="7">7</option>
                                            <option value="8">8</option>
                                            <option value="9">9</option>
                                            <option value="10">10</option>
                                            <option value="11">11</option>
                                            <option value="12">12</option>
                                            <option value="13">13</option>
                                            <option value="14">14</option>
                                            <option value="15">15</option>
                                            <option value="16">16</option>
                                            <option value="17">17</option>
                                            <option value="18">18</option>
                                            <option value="19">19</option>
                                            <option value="20">20</option>
                                            <option value="21">21</option>
                                            <option value="22">22</option>
                                            <option value="23">23</option>
                                            <option value="24">24</option>
                                            <option value="25">25</option>
                                            <option value="26">26</option>
                                            <option value="27">27</option>
                                            <option value="28">28</option>
                                            <option value="29">29</option>
                                            <option value="30">30</option>
                                            <option value="31">31</option>
                                        </select>
                                    </div>
                                </div>

                                <div class="col-md-3">
                                    <div class="form-group">
                                        <select
                                            aria-label="Year"
                                            v-model="year"
                                            name="birthday_year"
                                            id="year"
                                            title="Year"
                                            class="custom-select custom-select-sm "
                                        >
                                            <option value="0" disabled hidden
                                                >Year</option
                                            >
                                            <option value="2020">2020</option>
                                            <option value="2019">2019</option>
                                            <option value="2018">2018</option>
                                            <option value="2017">2017</option>
                                            <option value="2016">2016</option>
                                            <option value="2015">2015</option>
                                            <option value="2014">2014</option>
                                            <option value="2013">2013</option>
                                            <option value="2012">2012</option>
                                            <option value="2011">2011</option>
                                            <option value="2010">2010</option>
                                            <option value="2009">2009</option>
                                            <option value="2008">2008</option>
                                            <option value="2007">2007</option>
                                            <option value="2006">2006</option>
                                            <option value="2005">2005</option>
                                            <option value="2004">2004</option>
                                            <option value="2003">2003</option>
                                            <option value="2002">2002</option>
                                            <option value="2001">2001</option>
                                            <option value="2000">2000</option>
                                            <option value="1999">1999</option>
                                            <option value="1998">1998</option>
                                            <option value="1997">1997</option>
                                            <option value="1996">1996</option>
                                            <option value="1995">1995</option>
                                            <option value="1994">1994</option>
                                            <option value="1993">1993</option>
                                            <option value="1992">1992</option>
                                            <option value="1991">1991</option>
                                            <option value="1990">1990</option>
                                            <option value="1989">1989</option>
                                            <option value="1988">1988</option>
                                            <option value="1987">1987</option>
                                            <option value="1986">1986</option>
                                            <option value="1985">1985</option>
                                            <option value="1984">1984</option>
                                            <option value="1983">1983</option>
                                            <option value="1982">1982</option>
                                            <option value="1981">1981</option>
                                            <option value="1980">1980</option>
                                            <option value="1979">1979</option>
                                            <option value="1978">1978</option>
                                            <option value="1977">1977</option>
                                            <option value="1976">1976</option>
                                            <option value="1975">1975</option>
                                            <option value="1974">1974</option>
                                            <option value="1973">1973</option>
                                            <option value="1972">1972</option>
                                            <option value="1971">1971</option>
                                            <option value="1970">1970</option>
                                            <option value="1969">1969</option>
                                            <option value="1968">1968</option>
                                            <option value="1967">1967</option>
                                            <option value="1966">1966</option>
                                            <option value="1965">1965</option>
                                            <option value="1964">1964</option>
                                            <option value="1963">1963</option>
                                            <option value="1962">1962</option>
                                            <option value="1961">1961</option>
                                            <option value="1960">1960</option>
                                            <option value="1959">1959</option>
                                            <option value="1958">1958</option>
                                            <option value="1957">1957</option>
                                            <option value="1956">1956</option>
                                            <option value="1955">1955</option>
                                            <option value="1954">1954</option>
                                            <option value="1953">1953</option>
                                            <option value="1952">1952</option>
                                            <option value="1951">1951</option>
                                            <option value="1950">1950</option>
                                            <option value="1949">1949</option>
                                            <option value="1948">1948</option>
                                            <option value="1947">1947</option>
                                            <option value="1946">1946</option>
                                            <option value="1945">1945</option>
                                            <option value="1944">1944</option>
                                            <option value="1943">1943</option>
                                            <option value="1942">1942</option>
                                            <option value="1941">1941</option>
                                            <option value="1940">1940</option>
                                            <option value="1939">1939</option>
                                            <option value="1938">1938</option>
                                            <option value="1937">1937</option>
                                            <option value="1936">1936</option>
                                            <option value="1935">1935</option>
                                            <option value="1934">1934</option>
                                            <option value="1933">1933</option>
                                            <option value="1932">1932</option>
                                            <option value="1931">1931</option>
                                            <option value="1930">1930</option>
                                            <option value="1929">1929</option>
                                            <option value="1928">1928</option>
                                            <option value="1927">1927</option>
                                            <option value="1926">1926</option>
                                            <option value="1925">1925</option>
                                            <option value="1924">1924</option>
                                            <option value="1923">1923</option>
                                            <option value="1922">1922</option>
                                            <option value="1921">1921</option>
                                            <option value="1920">1920</option>
                                            <option value="1919">1919</option>
                                            <option value="1918">1918</option>
                                            <option value="1917">1917</option>
                                            <option value="1916">1916</option>
                                            <option value="1915">1915</option>
                                            <option value="1914">1914</option>
                                            <option value="1913">1913</option>
                                            <option value="1912">1912</option>
                                            <option value="1911">1911</option>
                                            <option value="1910">1910</option>
                                            <option value="1909">1909</option>
                                            <option value="1908">1908</option>
                                            <option value="1907">1907</option>
                                            <option value="1906">1906</option>
                                            <option value="1905">1905</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <input
                                            id="zip_code"
                                            v-model="identity.zip_code"
                                            type="text"
                                            placeholder="Zip code"
                                            class="form-control col-xs-12 col-sm-12 col-md-12 "
                                            name="zip_code"
                                            value=""
                                            required
                                            autocomplete="zip_code"
                                            autofocus
                                        />
                                    </div>
                                </div>

                                <datalist id="countries">
                                    <div
                                        v-for="(item, index) in countries"
                                        :key="index"
                                    >
                                        <option
                                            v-bind:value="item.name"
                                        ></option>
                                    </div>
                                </datalist>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <input
                                            list="countries"
                                            id="country"
                                            v-model="identity.country"
                                            type="text"
                                            placeholder="Country"
                                            class="form-control col-xs-12 col-sm-12 col-md-12 "
                                            name="country"
                                            value=""
                                            required
                                            autocomplete="country"
                                            autofocus
                                        />
                                    </div>
                                </div>
                            </div>

                            <div class="form-group row">
                                <div class="col-md-6">
                                    <input
                                        id="state"
                                        v-model="identity.state"
                                        type="test"
                                        placeholder="State"
                                        class="form-control "
                                        name="state"
                                        value=""
                                        required
                                        autocomplete="state"
                                    />
                                </div>

                                <div class="col-md-6">
                                    <input
                                        id="city"
                                        v-model="identity.city"
                                        type="text"
                                        placeholder="City"
                                        class="form-control "
                                        name="city"
                                        value=""
                                        required
                                        autocomplete="city"
                                    />
                                </div>
                            </div>

                            <strong>
                                Acount Type
                            </strong>

                            <div class="row">
                                <div class="col-md-3">
                                    <div class="form-group form-check">
                                        <input
                                            type="radio"
                                            required
                                            v-model="user.type_account"
                                            name="type_account"
                                            value="aspirant"
                                            class="form-check-input"
                                            id="exampleCheck1"
                                        />
                                        <label
                                            class="form-check-label"
                                            for="exampleCheck1"
                                            >Aspirant</label
                                        >
                                    </div>
                                </div>

                                <div class="col-md-3">
                                    <div class="form-group form-check">
                                        <input
                                            type="radio"
                                            required
                                            v-model="user.type_account"
                                            name="type_account"
                                            value="tutor"
                                            class="form-check-input"
                                            id="exampleCheck1"
                                        />
                                        <label
                                            class="form-check-label"
                                            for="exampleCheck1"
                                            >Tutor</label
                                        >
                                    </div>
                                </div>
                            </div>
                            <datalist id="instruments">
                                <div
                                    v-for="(item, index) in instruments"
                                    :key="index"
                                >
                                    <option v-bind:value="item.name"></option>
                                </div>
                            </datalist>

                            <div class="form-group row">
                                <div class="col-md-12">
                                    <input
                                        list="instruments"
                                        v-model="identity.instrument"
                                        id="instrument"
                                        type="text"
                                        placeholder="Instrument"
                                        class="form-control "
                                        name="instrument"
                                        value=""
                                        required
                                        autocomplete="instrument"
                                    />
                                </div>
                            </div>

                            <strong>
                                Gerder
                            </strong>

                            <div class="row">
                                <div class="col-md-3">
                                    <div class="form-group form-check">
                                        <input
                                            type="radio"
                                            required
                                            name="gender"
                                            v-model="user.gender"
                                            value="female"
                                            class="form-check-input"
                                            id="radio-fe"
                                        />
                                        <label
                                            class="form-check-label"
                                            for="exampleCheck1"
                                            >Female</label
                                        >
                                    </div>
                                </div>

                                <div class="col-md-3">
                                    <div class="form-group form-check">
                                        <input
                                            type="radio"
                                            required
                                            name="gender"
                                            v-model="user.gender"
                                            value="male"
                                            class="form-check-input"
                                            id="radio-ma"
                                        />
                                        <label
                                            class="form-check-label"
                                            for="exampleCheck1"
                                            >Male</label
                                        >
                                    </div>
                                </div>

                                <div class="col-md-3">
                                    <div class="form-group form-check">
                                        <input
                                            type="radio"
                                            required
                                            name="gender"
                                            value="non-binary"
                                            class="form-check-input"
                                            id="radio-no"
                                        />
                                        <label
                                            class="form-check-label"
                                            for="exampleCheck1"
                                            >Non-binary</label
                                        >
                                    </div>
                                </div>
                            </div>

                            <strong>
                                T-Shirt
                            </strong>
                            <div class="form-group row">
                                <div class="col-sm-12 col-md-6">
                                    <div class="row">
                                        <div class="col-md-2 col-sm-2 col-xs-2">
                                            <div class="form-group form-check">
                                                <input
                                                    type="radio"
                                                    v-model="identity.tshirt"
                                                    required
                                                    name="tshirt"
                                                    value="XS"
                                                    class="form-check-input"
                                                    id="radio-fe"
                                                />
                                                <label
                                                    class="form-check-label"
                                                    for="exampleCheck1"
                                                    >XS</label
                                                >
                                            </div>
                                        </div>
                                        <div class="col-md-2 col-sm-2 col-xs-2">
                                            <div class="form-group form-check">
                                                <input
                                                    type="radio"
                                                    v-model="identity.tshirt"
                                                    required
                                                    name="tshirt"
                                                    value="S"
                                                    class="form-check-input"
                                                    id="radio-fe"
                                                />
                                                <label
                                                    class="form-check-label"
                                                    for="exampleCheck1"
                                                    >S</label
                                                >
                                            </div>
                                        </div>

                                        <div class="col-md-2 col-sm-2 col-xs-2">
                                            <div class="form-group form-check">
                                                <input
                                                    type="radio"
                                                    v-model="identity.tshirt"
                                                    required
                                                    name="tshirt"
                                                    value="M"
                                                    class="form-check-input"
                                                    id="radio-ma"
                                                />
                                                <label
                                                    class="form-check-label"
                                                    for="exampleCheck1"
                                                    >M</label
                                                >
                                            </div>
                                        </div>

                                        <div class="col-md-2 col-sm-2 col-xs-2">
                                            <div class="form-group form-check">
                                                <input
                                                    type="radio"
                                                    v-model="identity.tshirt"
                                                    required
                                                    name="tshirt"
                                                    value="L"
                                                    class="form-check-input"
                                                    id="radio-no"
                                                />
                                                <label
                                                    class="form-check-label"
                                                    for="exampleCheck1"
                                                    >L</label
                                                >
                                            </div>
                                        </div>

                                        <div class="col-md-2 col-sm-2 col-xs-2">
                                            <div class="form-group form-check">
                                                <input
                                                    type="radio"
                                                    v-model="identity.tshirt"
                                                    required
                                                    name="tshirt"
                                                    value="XL"
                                                    class="form-check-input"
                                                    id="radio-no"
                                                />
                                                <label
                                                    class="form-check-label"
                                                    for="exampleCheck1"
                                                    >XL</label
                                                >
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-md-6 ">
                                    <div class="mx-auto text-center">
                                        <img
                                            src="/assets/t-shirt.png"
                                            class=""
                                            width="60%"
                                            alt=""
                                        />
                                    </div>

                                    <br />
                                    <p class="text-center text-regular-medinum">
                                        <span
                                            >El diseño de la playera aun no se
                                            publica esta foto es sólo
                                            ilustrativa
                                        </span>
                                    </p>
                                </div>
                            </div>

                            <!--     <div
                    class="card d-block  shadow  border-0 bg-white rounded  mx-auto mt-5"
                >
                    <div class="card-body"> -->
                            <hr />
                            <br />
                            <div
                                class="text-title text-carbon text-regular text-center"
                            >
                                <span class="text-orange" id="audicion"
                                    >AUDICIÓN SIMANOF TOUR 2021
                                </span>
                            </div>
                            <div
                                class=" text-regular-medinum text-carbon text-regular text-center"
                            >
                                {{
                                    pay_confirm == false
                                        ? "completa tus datos y sube los requerimientos."
                                        : " TU AUDICIÓN SE ENVÍO CON ÉXITO."
                                }}
                            </div>
                            <div
                                v-if="pay_confirm == false"
                                class=" text-regular-medinum text-carbon text-regular text-center"
                            >
                                Ya queremos ver tu habilidad músical en
                                {{
                                    identity.instrument != null
                                        ? "el " +
                                          identity.instrument.toLowerCase()
                                        : " tu instrumento"
                                }}.
                            </div>

                            <div
                                v-if="pay_confirm == true"
                                class=" text-regular-medinum text-carbon text-regular text-center"
                            >
                                TU PAGO HA SIDO PROCESADO CON ÉXITO.
                            </div>

                            <br />

                            <div
                                v-if="pay_confirm == true"
                                class=" text-regular-medinum text-carbon text-regular text-center"
                            >
                                <span class="text-orange">
                                    "YA NO TIENES QUE VOLVER A ENVIARLA A MENOS
                                    QUE QUIERAS CAMBIAR ALGUN DATO"</span
                                >
                            </div>
                            <br />
                            <strong>
                                Carta de autorización (archivo en .pdf o .jpg)
                            </strong>
                            <div class="form-group center row">
                                <div class="col-md-12 mx-auto ">
                                    <label
                                        class="btn   btn-primary btn-sm-purple-radius btn-file"
                                    >
                                        Adjuntar archivo
                                        <input
                                            type="file"
                                            v-on:change="setFileName"
                                            name="url_carta"
                                            style="display: none;"
                                        />
                                    </label>
                                    <span> {{ archivos }} </span>
                                    <!--    <div class="custom-file-1">

                                             <input type="file"  class=" form-control btn btn-file  btn-primary"    v-on:change='setFileName' name="url_carta" id="customFileLang" lang="es">
  <label class="custom-file-label " for="customFileLang">  {{archivos}}</label>



                                    </div>

                        <div class="spinner" v-if="spin" >
                            Cargando ...
                        </div> -->
                                </div>
                            </div>

                            <strong>
                                Link de video en YouTube
                            </strong>
                            <div class="form-group center row">
                                <div class="col-md-12 mx-auto text-center">
                                    <input
                                        id="url_audition"
                                        v-model="identity.url_audition"
                                        type="text"
                                        placeholder="Link de video en YouTube"
                                        class="form-control "
                                        name="url_audition"
                                        value=""
                                        required
                                        autocomplete=""
                                    />
                                </div>
                            </div>

                            <strong>
                                Orquesta o escuela de música
                            </strong>

                            <div class="form-group center row">
                                <div class="col-md-12 mx-auto ">
                                    <input
                                        id="school_orquest"
                                        v-model="identity.school_orquest"
                                        type="text"
                                        placeholder="Orquesta o escuela de música a la que perteneces "
                                        class="form-control "
                                        name="school_orquest"
                                        value=""
                                        required
                                        autocomplete="school_orquest"
                                    />
                                </div>
                                <!--
                             <div class="col-md-5 mx-auto ">
                                <input id="state"   type="test" placeholder="Nombre de tu maestro de música"
                                    class="form-control " name="state"
                                    value="" required autocomplete="state" />


                            </div> -->
                            </div>
                            <strong>
                                Maestro música
                            </strong>
                            <div class="form-group center row">
                                <div class="col-md-12 mx-auto ">
                                    <input
                                        id="master_musical"
                                        v-model="identity.master_musical"
                                        type="text"
                                        placeholder="Nombre de tu maestro de música"
                                        class="form-control "
                                        name="master_musical"
                                        value=""
                                        required
                                        autocomplete="master_musical"
                                    />
                                </div>
                            </div>

                            <div
                                v-if="pay_confirm == false"
                                class=" text-regular-medinum text-carbon text-regular text-center"
                            >
                                Pago de audición: <strong> $ 30.00 USD </strong>
                                <br />

                                Tu audicion se enviara despues efectuarse el
                                pago.
                                <br />
                            </div>

                            <div
                                v-if="pay_confirm == true"
                                class=" text-regular-medinum text-carbon text-regular text-center"
                            >
                                Tu audición se guardo correctamente
                                <br />

                                15 de Septiembre 2020 sera el aviso de admisión
                                al
                                <span class="text-orange">
                                    TOUR SIMANOF ITALIA 2021
                                </span>
                                <br />
                            </div>
                            <div class="form-group row mb-0">
                                <div class="col-md-8 mx-auto ">
                                    <div
                                        v-if="pay_confirm == false"
                                        id="paypal_id"
                                        ref="paypal"
                                    ></div>
                                </div>
                            </div>
                            <div class="form-group row mb-0">
                                <div class="col-md-8 mx-auto ">
                                    <button
                                        v-if="pay_confirm"
                                        type="submit"
                                        class="btn btn-primary btn-block  btn-xl-purple"
                                    >
                                        Guardar
                                        <span v-if="pay_confirm">
                                            y enviar audición</span
                                        >
                                    </button>
                                </div>
                            </div>
                        </form>
                        <br />
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
export default {
    props: ["data"],
    data() {
        return {
            myFormData: {},
            day: 0,
            month: 0,
            year: 0,
            spin: false,
            archivos: "carta de autorización",
            file_aux: "",
            client_id_sandbox:
                "AaXYVG_GhAX17XyDgmFls0b5Pkb-kvxzjVEb1sQFn1H1cW8HL-ctcIMpyEA7A54s3gHeOKabrpixA3EM",
            client_id_prod:"AXHqkxVBYVLuI4qM8OzwSud_b67kMLtc0hp129G-P_zdOjIeKbK6TSZloDlJukh2wmYXQbU4-2JKAiLn",
            pay_confirm: false,
            countries: [
                { name: "México" },
                { name: "Venezuela" },
                { name: "Argentina" },
                { name: "United States" },
                { name: "Colombia" },
                { name: "Italy" },
                { name: "Ecuador" },
                { name: "Panama" },
                { name: "Paraguay" }
            ],
            instruments: [
                { name: "Violin" },
                { name: "Viola" },
                { name: "Violoncello" },
                { name: "Contrabajo" },
                { name: "Flauta" },
                { name: "Oboe" },
                { name: "Clarinete" },
                { name: "Fagot" },
                { name: "Corno frencés" },
                { name: "Trompeta" },
                { name: "Trombon" },
                { name: "Tuba" },
                { name: "Percusión" }
            ],
            user: {},
            identity: {
                zip_code: "",
                country: "",
                state: "",
                city: "",
                instrument: "",
                tshirt: "",
                url_audition: "",
                url_carta: "",
                school_orquest: "",
                master_musical: ""
            },

            profileIcon: "android-chrome-96x96.png",
            loaded: false,
            paidFor: false,
            product: {
                price: 30.0,
                description: "Audition",
                img: "./assets/lamp.jpg"
            }
        };
    },
    methods: {
        setFileName: function(event) {
            //get the file name
            try {
                let files = event.target.files;
                //console.log(files);
                // alert(files.toString());
                this.archivos = "";

                this.identity.url_carta = files[0];

                for (let index = 0; index < files.length; index++) {
                    var fileName = files[index].name;

                    //console.log(fileName);
                    this.archivos = this.archivos + " " + fileName;
                    //alert(this.archivos);
                }
                this.saveFile();
            } catch (error) {
                console.log(error);
            }

            //replace the "Choose a file" label
            // $(this).next('.custom-file-label').html(fileName);
        },

        checkForm: function(e) {
            this.myFormData = new FormData(this.$refs.myForm);
            this.spin = true;
            axios({
                method: "post",
                url: "/user/profile/update",
                data: this.myFormData,
                config: { headers: { "Content-Type": "multipart/form-data" } }
            }).then(response => {
                console.log(response.data);

                this.pay_confirm = true;

                this.spin = false;
                $("#notiEnviarModal").modal("show");
            });
            e.preventDefault();
        },
        saveFile: function(e) {
            this.myFormData = new FormData(this.$refs.myForm);

            axios({
                method: "post",
                url: "/user/profile/update",
                data: this.myFormData,
                config: { headers: { "Content-Type": "multipart/form-data" } }
            }).then(response => {
                // console.log(response.data);
                // this.spin = false;
                //  $("#notiEnviarModal").modal("show");
            });
            e.preventDefault();
        },

        guardar: function() {
            this.myFormData = {
                user_basic: this.user,
                user_identity: this.identity,
                user_year: this.year,
                user_month: this.month,
                user_day: this.day
            };

            // this.spin = true;
            axios({
                method: "post",
                url: "/user/profile/update",
                data: this.myFormData,
                config: { headers: { "Content-Type": "multipart/form-data" } }
            }).then(response => {
                console.log(response.data);
                $("#notiEnviarModal").modal("show");
                // var res=response.data;
                // this.mensaje.file=res.url_pdf;
                //  this.spin = false;
                //    $("#notiGuardarModal").modal("show");

                // alert("OK");
            });
        },
        setLoaded: function() {
            this.loaded = true;
            window.paypal
                .Buttons({
                    createOrder: (data, actions) => {
                        return axios
                            .post("/user/audition/payment/create", {
                                headers: { "content-type": "application/json" }
                            })
                            .then(function(res) {
                                console.log("create");
                                console.log(res.data.result);
                                return res.data.result;
                            })
                            .then(function(orderData) {
                                return orderData.id;
                            });
                    },
                    onApprove: async (data, actions) => {
                        let order = await actions.order.capture();
                        order = axios
                            .post("/user/audition/payment/approve", {
                                headers: {
                                    "content-type": "application/json"
                                },
                                body: { orderID: data.orderID }
                            })
                            .then(function(res) {
                                console.log("approve");
                                console.log(res);
                                return res.data;
                            })
                            .then(function(details) {});

                        this.paidFor = true;
                        this.checkForm();

                        console.log(order);
                    },
                    onError: err => {
                        console.log(`%c ::::${err}::::`,'color:orange');
                    },
                    style: {
                        layout: "vertical",
                        color: "blue",
                        shape: "rect",
                        label: "paypal",
                        fundingicons: "true"
                    },
                    funding: {
                        allowed: [paypal.FUNDING.CARD],
                        disallowed: [paypal.FUNDING.CREDIT]
                    }
                })
                .render(this.$refs.paypal);
        }
    },
    computed: {},
    mounted: function() {
        const script = document.createElement("script");
        let client_id = window.location.hostname == 'tour.simanof.com' || window.location.hostname=='www.tour.simanof.com' ?  this.client_id_prod: this.client_id_sandbox;
        console.log(`%c ${client_id}`,'color:orange');
        script.src =
            "https://www.paypal.com/sdk/js?client-id=" + client_id;
        script.addEventListener("load", this.setLoaded);
        document.body.appendChild(script);
    },
    created() {
        axios.get("/paypal/config").then(res => {
            this.response = res;
            this.client_id = this.response;
            console.log(this.response);
        });

        axios.get("/user/profile").then(res => {
            this.user = res.data.data;

            console.log(this.user);
            var sp = this.user.birthday.split("-");
            this.year = sp[0];
            this.month = sp[1];
            this.day = sp[2];
            console.log("ok");
            if (this.user.identity != null) {
                this.identity = this.user.identity;

                if (this.user.identity.url_carta != null) {
                    var sp = this.user.identity.url_carta.split("-");
                    this.archivos = sp[1];
                }

                if (this.user.payments[0]) {
                    this.pay_confirm = true;
                }
            }
        });

    axios.post("/user/audition/payment/create").then(res => {
    console.log(res);
    });
    }
};
</script>
