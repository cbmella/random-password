<script setup>
import { Link } from '@inertiajs/inertia-vue3';
import ApplicationLogo from '@/Components/ApplicationLogo.vue';
</script>

<template>
    <nav class="navbar navbar-expand-lg bg-light">
        <div class="container-fluid">
            <Link class="navbar-brand" :href="route('home')">
                <ApplicationLogo width="100" class="img-fluid" />
            </Link>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <Link class="nav-link active" :href="route('home')">
                        Home
                        </Link>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
</template>
