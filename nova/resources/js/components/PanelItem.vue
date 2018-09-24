<template>
    <div class="flex border-b border-40">
        <div class="w-1/4 py-4">
            <slot>
                <h4 class="font-normal text-80">
                    {{ label }}
                </h4>
            </slot>
        </div>
        <div class="w-3/4 py-4">
            <slot name="value">
<<<<<<< HEAD
                <p v-if="field.value" class="text-90">{{ field.value }}</p>
=======
                <p v-if="field.value && !field.asHtml" class="text-90">{{ field.value }}</p>
                <div v-else-if="field.value && field.asHtml" v-html="field.value"></div>
>>>>>>> 4356d8bf7b1edc7b0c182b9e1a519ff606eac5fb
                <p v-else>&mdash;</p>
            </slot>
        </div>
    </div>
</template>

<script>
export default {
    props: {
        field: {
            type: Object,
            required: true,
        },
        fieldName: {
            type: String,
            default: '',
        },
    },
    computed: {
        label() {
            return this.fieldName || this.field.name
        },
    },
}
</script>
