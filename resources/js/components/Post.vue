<template>
    <div class="card justify-content-center">
        <div class="card-body">
            <h2 class="card-title">{{title}}</h2>
            <h4 class="card-text">{{category.name}}</h4>
            <p class="card-text">{{ truncateText}}</p>
            <router-link class="btn btn-primary" :to="{name:'single-post', params:{slug: slug}}">Vedi articolo completo</router-link>
        </div>
    </div>
</template>

<script>
export default {
    name:'Post',
    props: ['title','content','slug','category','tags'],
    

    computed: {
        truncateText() {

           return this.content.substring(0, 50) + '...';

        }
    }

}
</script>

<style>

</style>