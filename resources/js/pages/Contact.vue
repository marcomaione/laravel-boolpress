<template>
<div class="container">
    <div class="row">
        <div class="col-12">
            <form @submit.prevent="sendForm">

                <div class="form-group">
                    <label for="name">Inserisci il tuo nome</label>
                    <input type="text" class="form-control" id="name" name="name" v-model="name">
                </div>
                 <div class="form-group">
                    <label for="email">Inserisci la tua email</label>
                    <input type="email" class="form-control" id="email" name="email" v-model="email">
                </div>
                <div class="form-group">
                    <label for="message">Inserisci la tua richiesta</label>
                    <textarea type="text" class="form-control" id="message" name="message" rows="5" v-model="message"></textarea>

                    <button type="submit" class="btn btn-primary">Invia</button>
                </div>

            </form>
        </div>
    </div>
</div>
</template>

<script>
export default {
    name:'Contact',
    data() {
        return {
            name:'',
            email:'',
            message:''
        }
    },
    methods: {
        sendForm() {

            axios.post('/api/contacts', {
                'name': this.name,
                'email': this.email,
                'message': this.message,

            }) .then(response => {
                console.log(response);

            })
            
        }
    }

}
</script>

<style>

</style>