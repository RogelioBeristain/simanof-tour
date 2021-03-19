<template>
    <div class="container">
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
                                        <th scope="col">#</th>
                                        <th scope="col">Nombre Completo Titular</th>
                                        <th scope="col">Email</th>
                                        <th scope="col">User ID</th>
                                        <th scope="col">User Name</th>
                                        <th scope="col">Order ID</th>
                                        <th scope="col">Fecha</th>
                                    </tr>
                                </thead>
                                <tbody
                                    v-for="(payment, index) in payments"
                                    :key="index"
                                >
                                    <tr>
                                        <th scope="row">{{ index + 1 }}</th>
                                        <td>{{ payment.full_name }}</td>
                                        <td>{{ payment.paypal_email }}</td>
                                        <td>{{ payment.user_id }}</td>
                                        <td>{{ payment.user.first_name }} {{ payment.user.last_name }}</td>
                                        <td>{{ payment.order_id }}</td>
                                        <td>{{ payment.date_register }}</td>
                                        <td>
                                            <!--<a
                                                v-if="payAudition(user)"
                                                class=" btn btn-success"
                                                id="tooltip-success"
                                                data-toggle="tooltip"
                                                data-placement="top"
                                                title="Ya pago"

                                            ></a>-->


                                            <!--<a v-if="
                                                    fillAudition(user) &&
                                                        payAudition(user) ==
                                                            false
                                                "
                                                class=" btn btn-danger"
                                                id="tooltip-danger"
                                                data-toggle="tooltip"
                                                data-placement="top"
                                                title="Demostro interes pero no pago"
                                            ></a>-->
                                        <!-- <a
                                                v-if="!fillAudition(user)"
                                                class=" btn btn-warning"
                                                id="tooltip-warning"
                                                data-toggle="tooltip"
                                                data-placement="top"
                                                title="No lleno su audición"
                                            ></a>
                                            -->
                                        </td>

                                        <td>
                                            <div
                                                class="btn-group"
                                                role="group"
                                                aria-label="Basic example"
                                            >
                                                <!--<a
                                                    v-if="fillAudition(user)"
                                                    v-on:click="
                                                        auditionShow(user)
                                                    "
                                                    class="btn btn-primary btn-sm "
                                                    rel="noopener noreferrer"
                                                    >Audición</a
                                                >
                                                -->

                                                <!--<a
                                                    v-if="!fillAudition(user)"
                                                    class="btn btn-primary btn-sm disabled"
                                                    rel="noopener noreferrer"
                                                    >Audición</a
                                                >
                                                -->

                                                <!--<a
                                                    href="#"
                                                    class="btn btn-primary btn-sm disabled"
                                                    rel="noopener noreferrer"
                                                    >Pagos</a
                                                >
                                                -->
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
            payment: {
                capture_id: "",
                country_code: "",
                created_at: "",
                currency_code: "",
                date_register: "",
                fee: 0,
                full_name: "",
                id: 0,
                order_id: "",
                payer_id: "",
                paypal_email: "",
                status: "",
                total: 0,
                total_tour: 0,
                type_payment_id: 0,
                updated_at: "",
                user_id: 26,
                zip_code: "",
            },
            payments: [],

            profileIcon: "android-chrome-96x96.png"
        };
    },
    methods: {
     /*    auditionShow: function(user) {
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
        } */
    },

    computed: {},
    mounted: function() {

    },
    created() {
        //$('#tooltip1').tooltip({ boundary: 'viewport' });
        axios.get("/payments").then(res => {
            this.payments = res.data.data;

            console.log(this.payments);
          //  console.log(typeof this.users[8] != undefined);
          //  console.log("ok");

        });
    }
};
</script>
