<template>
    <panel-item :field="field">
        <p slot="value" class="text-90">
            <span
                class="inline-block rounded-full w-2 h-2 mr-1"
                :class="{'bg-success': field.value, 'bg-danger': !field.value}"
            />
            <span>{{ label }}</span>
        </p>
    </panel-item>
</template>

<script>
export default {
    props: ['resource', 'resourceName', 'resourceId', 'field'],

    computed: {
        label() {
<<<<<<< HEAD
            return this.field.value == true ? 'True' : 'False'
=======
            return this.field.value == true ? this.__('Yes') : this.__('No')
>>>>>>> 4356d8bf7b1edc7b0c182b9e1a519ff606eac5fb
        },
    },
}
</script>
