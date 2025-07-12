<script setup>
defineProps({ boards: Array })
</script>

<template>
    <div class="max-w-3xl mx-auto mt-10">
        <h1 class="text-2xl font-bold mb-4">Ваши доски</h1>
        <ul class="space-y-2">
            <li v-for="board in boards" :key="board.id" class="p-4 bg-gray-100 rounded shadow">
                {{ board.name }}
            </li>
        </ul>
    </div>
</template>
