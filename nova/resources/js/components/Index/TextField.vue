<template>
<<<<<<< HEAD
    <span class="whitespace-no-wrap">{{ field.value }}</span>
=======
    <div v-if="field.asHtml" v-html="field.value"></div>
    <span v-else class="whitespace-no-wrap">{{ field.value }}</span>
>>>>>>> 4356d8bf7b1edc7b0c182b9e1a519ff606eac5fb
</template>

<script>
export default {
    props: ['resourceName', 'field'],
}
</script>
