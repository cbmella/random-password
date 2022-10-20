<script setup>
import { Head, Link } from '@inertiajs/inertia-vue3';
import Navbar from '@/Components/B5/Navbar.vue';

</script>

<template>

  <Head title="Welcome" />

  <Navbar />

  <div class="container text-center">
    <div class="row">
      <div class="col-12">
        <h1>HERRAMIENTA DE GENERACIÓN DE CONTRASEÑAS</h1>
        <p>Genere una contraseña segura</p>
        <p>Utilice nuestro generador de contraseñas en línea para crear de forma instantánea una contraseña aleatoria y
          segura.</p>
      </div>
      <div class="col-12">
        <form>
          <div class="row">
            <div class="col">
              <input type="text" class="form-control" placeholder="First name" aria-label="First name">
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
