<template>
  <div>
    <nav class="navbar navbar-expand navbar-light bg-light">
        <a class="navbar-brand" href="#">Boolpress</a>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item active">
                    <router-link :to="{name: 'home'}">Home</router-link>
                </li>
                <li class="nav-item">
                    <router-link :to="{name: 'about'}">Chi siamo</router-link>
                </li>
                <li class="nav-item">
                    <router-link :to="{name: 'contact'}">Contatti</router-link>
                </li>
            </ul>
        </div>
    </nav>
  </div>
</template>

<script>
export default {
    name:'Header'

}
</script>

<style>

</style>