<template>
    <div class="container">
        <div
            class="modal fade"
            id="auditionShowModal"
            tabindex="-1"
            role="dialog"
            aria-labelledby="auditionModalLabel"
            aria-hidden="true"
        >
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="auditionModalLabel">
                            Audición
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
                        <div>
                            <h2>URL:</h2>
                            <input
                                type="text"
                                class="form-control"
                                v-bind:value="user.identity.url_audition"
                            />
                        </div>
                        <div>
                            <h2>INSTRUMENTO:</h2>
                            <input
                                type="text"
                                class="form-control"
                                v-bind:value="user.identity.instrument"
                            />
                        </div>
                        <div>
                            <h2>PROFESOR:</h2>
                            <input
                                type="text"
                                class="form-control"
                                v-bind:value="user.identity.master_musical"
                            />
                        </div>
                        <div>
                            <h2>ORIGEN:</h2>
                            <input
                                type="text"
                                class="form-control"
                                v-bind:value="user.identity.country"
                            />
                        </div>
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
                    class="card d-block  shadow  border-0 bg-white rounded  mx-auto mt-5"
                >
                    <div class="card-body">
                        <div
                            class="table-responsive table-alto rounded border-0  "
                        >
                            <table
                                class="table table-striped  rounded shadow  table-dark"
                            >
                                <thead>
                                    <tr>
                                        <th scope="col">#1</th>
                                        <th scope="col">Nombre</th>
                                        <th scope="col">Apellido</th>
                                        <th scope="col">Genero</th>
                                        <th scope="col">Tipo de cuenta</th>
                                        <th scope="col">Correo</th>
                                        <th scope="col">Telefono</th>
                                        <th scope="col">Status</th>
                                        <th scope="col">Acciones</th>
                                    </tr>
                                </thead>
                                <tbody
                                    v-for="(user, index) in users"
                                    :key="index"
                                >
                                    <tr>
                                        <th scope="row">{{ index + 1 }}</th>
                                        <td>{{ user.first_name }}</td>
                                        <td>{{ user.last_name }}</td>
                                        <td>{{ user.gender }}</td>
                                        <td>{{ user.type_account }}</td>
                                        <td>
                                            {{ user.email
                                            }}<a class="btn btn-success"></a>
                                        </td>
                                        <td>{{ user.phone }}</td>
                                        <td>
                                            <a
                                                v-if="payAudition(user)"
                                                class=" btn btn-success"
                                                id="tooltip-success"
                                                data-toggle="tooltip" 
                                                data-placement="top" 
                                                title="Ya pago"
                                                
                                            ></a>
                                            

                                            <a v-if="
                                                    fillAudition(user) &&
                                                        payAudition(user) ==
                                                            false
                                                "
                                                class=" btn btn-danger"
                                                id="tooltip-danger"
                                                data-toggle="tooltip" 
                                                data-placement="top" 
                                                title="Demostro interes pero no pago"
                                            ></a>
                                            <a
                                                v-if="!fillAudition(user)"
                                                class=" btn btn-warning"
                                                id="tooltip-warning"
                                                data-toggle="tooltip" 
                                                data-placement="top" 
                                                title="No lleno su audición"
                                            ></a>
                                        </td>

                                        <td>
                                            <div
                                                class="btn-group"
                                                role="group"
                                                aria-label="Basic example"
                                            >
                                                <a
                                                    v-if="fillAudition(user)"
                                                    v-on:click="
                                                        auditionShow(user)
                                                    "
                                                    class="btn btn-primary btn-sm "
                                                    rel="noopener noreferrer"
                                                    >Audición</a
                                                >

                                                <a
                                                    v-if="!fillAudition(user)"
                                                    class="btn btn-primary btn-sm disabled"
                                                    rel="noopener noreferrer"
                                                    >Audición</a
                                                >

                                                <a
                                                    href="#"
                                                    class="btn btn-primary btn-sm disabled"
                                                    rel="noopener noreferrer"
                                                    >Pagos</a
                                                >
                                            </div>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
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
            user: {
                first_name: "",
                identity: {
                    url_audition: "",
                    instrument: "",
                    master_musical: "",
                    country: ""
                }
            },
            users: [],

            profileIcon: "android-chrome-96x96.png"
        };
    },
    methods: {
        auditionShow: function(user) {
            this.user = user;
            $("#auditionShowModal").modal("show");
            
        },

        payAudition(user) {
            var valor = false;
            if (typeof user.payments != undefined) {
                user.payments.forEach(payment => {
                    if (payment.id >= 1) {
                        valor = true;
                    }
                });

                //  alert(valor);
            } else {
            }
            return valor;
        },
        fillAudition(user) {
            var valor = false;
            if (typeof (user.identity) != undefined && user.identity != null) {
                if (typeof (user.identity.url_audition) != undefined) {
                    valor = true;
                }
            } else {
            }
            return valor;
        }
    },

    computed: {},
    mounted: function() {
        if (this.user != null) {
        }
    },
    created() {
        $('#tooltip1').tooltip({ boundary: 'viewport' });
        axios.get("/users").then(res => {
            this.users = res.data.data;

            console.log(this.users);
          //  console.log(typeof this.users[8] != undefined);
          //  console.log("ok");
            
        });
    }
};
</script>
