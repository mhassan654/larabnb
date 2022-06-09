<template>
    <div class="card">
        <div class="card-body">
<h2 class="card-title">{{title}}</h2>
<p class="card-text">{{description}}</p>
        </div>

    </div>
</template>
<script>
export default{
    props:{
       title: String,
       description:String,
       price:Number,
    }
}
</script>
