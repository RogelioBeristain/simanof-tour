<template>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div
                    class="card d-block  shadow  border-0 bg-white rounded  mx-auto mt-5"
                >
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-striped table-dark">
                                <thead>
                                    <tr>
                                        <th scope="col">#</th>
                                        <th scope="col">Nombre</th>
                                        <th scope="col">Apellido</th>
                                        <th scope="col">Genero</th>
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
                                        <th scope="row">{{ index }}</th>
                                        <td>{{ user.first_name }}</td>
                                        <td>{{ user.last_name }}</td>
                                        <td>{{ user.gender }}</td>
                                        <td>
                                            {{ user.email
                                            }}<a class="btn btn-success"></a>
                                        </td>
                                        <td>{{ user.phone }}</td>
                                        <td><a class="btn btn-success"></a></td>

                                        <td>
                                            <div
                                                class="btn-group"
                                                role="group"
                                                aria-label="Basic example"
                                            >
                                                <a
                                                    href="#"
                                                    class="btn btn-primary btn-sm disabled"
                                                    target="_blank"
                                                    rel="noopener noreferrer"
                                                    >audición</a
                                                >
                                                <a
                                                    href="#"
                                                    class="btn btn-primary btn-sm disabled"
                                                    target="_blank"
                                                    rel="noopener noreferrer"
                                                    >pagos</a
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
            user: null,
            users: [],

            profileIcon: "android-chrome-96x96.png"
        };
    },
    methods: {},
    computed: {},
    mounted: function() {
        if (this.user != null) {
            alert("ok");
        }
    },
    created() {
        axios.get("/aspirants").then(res => {
            this.users = res.data.data;

            console.log(this.users);
            console.log("ok");
        });
    }
};
</script>
