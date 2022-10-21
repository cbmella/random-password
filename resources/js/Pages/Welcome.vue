<script setup>
import { Head, useForm } from '@inertiajs/inertia-vue3';
import Navbar from '@/Components/B5/Navbar.vue';

defineProps({
  rand_password: String,
});

const form = useForm();

const submit = () => {
  form.get(route('home'));
};
</script>

<template>

  <Head title="Home" />

  <Navbar />

  <div class="container text-center">
    <div class="row">
      <div class="col-12 mt-5">
        <h1>HERRAMIENTA DE GENERACIÓN DE CONTRASEÑAS</h1>
        <p>Genere una contraseña segura</p>
        <p>Utilice nuestro generador de contraseñas en línea para crear de forma instantánea una contraseña aleatoria y
          segura.</p>
      </div>
      <div class="col-12">
        <form @submit.prevent="submit">
          <div class="row">
            <div class="col">
              <input v-if="rand_password" type="text" class="form-control" v-model="rand_password">
            </div>
          </div>
          <div class="col-12 d-grid gap-2 mt-5">
            <button type="submit" class="btn btn-primary">GENERAR</button>
          </div>
        </form>
      </div>
    </div>
  </div>

</template>
