<script setup>
import Layout from '@/Layouts/AuthenticatedLayout.vue'
import { Link, Head } from '@inertiajs/vue3'
import { ref } from 'vue'

defineProps({ users: Array })

const count = ref(0)
</script>

<template>
    <Layout>
        <Head title="Users" />
        <div v-for="user in users" :key="user.id">
            <Link :href="`/users/${user.id}`">
                {{ user.name }}
            </Link>
            <div>{{ user.email }}</div>
        </div>

        <div class="mt-4">
            <h2>Vue Counter: {{ count }}</h2>
            <button @click="count++">+1</button>
        </div>
    </Layout>
</template>
