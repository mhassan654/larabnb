<template>
    <div class="row">
        <div class="col-md-8">
            <div class="card">
                <div class="card-body">
                    <h2>{{ bookable.title }}</h2>
                    <hr />
                    <article>
                        {{ bookable.description }}
                    </article>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <AvailabilityVue />
        </div>
    </div>
</template>
<script>
import AvailabilityVue from "./Availability.vue";
export default {
    components: {
        AvailabilityVue,
    },
    data() {
        return {
            bookable: null,
            from: null,
            to: null,
        };
    },

    created() {
        axios
            .get(`/api/bookables/${this.$route.params.id}`)
            .then((response) => {
                // console.log(response.data.payload)
                this.bookable = response.data.payload;
            })
            .catch((err) => {
                console.log(err);
            });
    },
};
</script>
<style scoped>
label {
    font-size: 0.7rem;
    text-transform: uppercase;
    color: gray;
}
</style>
