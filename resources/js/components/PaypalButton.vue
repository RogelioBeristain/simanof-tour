<template>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div
                    class="card d-block  shadow  border-0 bg-white rounded  mx-auto mt-5"
                >
                    <div class="card-body"></div>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
export default {
    mounted() {
        console.log("Component mounted.");
    },
    created() {
        this.$loadScript(
            "https://maps.googleapis.com/maps/api/js?key=YOUR_API_KEY"
        )
            .then(() => {
                // Script is loaded, do something
            })
            .catch(() => {
                // Failed to fetch script
            });
    }
};
</script>
