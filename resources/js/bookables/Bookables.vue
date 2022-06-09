<template>
    <div>
        Rows is : {{ rows }}
        <div v-if="isLoading">Data is loading...</div>
        <div v-else>
            <div class="row mb-4" v-for="row in rows" :key="'row' + row">

                <div
                    class="col d-flex align-items-stretch"
                    v-for="(bookable, column) in bookablesInRow(row)"
                    :key="'row' + row + column"
                >
                    <bookable-list-item
                        :title="bookable.title"
                        :description="bookable.description"
                        v-bind:price="1000"
                    ></bookable-list-item>
                </div>
                <div class="col" v-for="p in placeholdersInRow(row)" :key="'placeholder' + row + p"></div>
            </div>
        </div>
    </div>
</template>

<script>
import BookableListItem from "./BookableListItem";
export default {
    components: {
        BookableListItem,
    },
    data() {
        return {
            isLoading: false,
            bookables: null,
            columns: 3,
        };
    },

    created() {
        this.isLoading = true;

        const p = new Promise((resolve, reject)=>{
            console.log(resolve);
            console.log(reject);
            setTimeout(()=>resolve("hello"),300);
        }).then(result => console.log(`Success ${result}`))
        .catch(result => console.log(`Error ${result}`));
        console.log(p);

         axios.get('/api/bookables')
        .then(response =>
        {
            this.bookables = response.data.payload;
            this.isLoading = false;
        });


    },

    methods:{
        bookablesInRow(row){
            return this.bookables.slice((row - 1) * this.columns,row * this.columns);
        },

        placeholdersInRow(row){
            return  this.columns - this.bookablesInRow(row).length;
        }
    },
    computed: {
        rows() {
            return this.bookables === null
                ? 0
                : Math.ceil(this.bookables.length / this.columns);
        },
    },
};
</script>
