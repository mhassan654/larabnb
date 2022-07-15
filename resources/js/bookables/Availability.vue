<template>
    <div>
        <h6 class="text-uppercase text-secondary font-weight-bolder">
            Check Availability
        </h6>

        <div class="row">
            <div class="form-group col-md-6">
                <label for="from">From</label>
                <input
                    class="form-control form-control-sm"
                    type="text"
                    name="from"
                    placeholder="Start date"
                    v-model="from"
                    @keyup.enter="checkIn"
                />
            </div>

            <div class="form-group col-md-6">
                <label for="to">To</label>
                <input
                    class="form-control form-control-sm"
                    type="text"
                    name="to"
                    placeholder="End date"
                    v-model="to"
                    @keyup.enter="checkIn"
                />
            </div>
        </div>

        <button
            type="button"
            name=""
            id=""
            class="btn btn-secondary mt-1 btn-sm btn-block"
            @click="checkIn"
        >
            Check
        </button>
        <!-- </div> -->
    </div>
</template>
<script>
export default {
    setup() {},
    data() {
        return {
            from: null,
            to: null,
        };
    },
    methods: {
        checkIn() {
            alert("checkinh in");
        },
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
