<template>

</template>

<script setup>
const props = defineProps({
    question: Object,
    index: Number
});

const emit = defineEmits(['change', 'addQuestion', 'deleteQuestion']);

</script>