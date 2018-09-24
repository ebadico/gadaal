<template>
    <default-field :field="field">
        <template slot="field">
            <checkbox
                class="py-2"
                @input="toggle"
<<<<<<< HEAD
                :id="field.name"
=======
                :id="field.attribute"
>>>>>>> 4356d8bf7b1edc7b0c182b9e1a519ff606eac5fb
                :name="field.name"
                :checked="checked"
            />

            <p v-if="hasError" class="my-2 text-danger" v-html="firstError" />
        </template>
    </default-field>
</template>

<script>
import { Errors, FormField, HandlesValidationErrors } from 'laravel-nova'

export default {
    mixins: [HandlesValidationErrors, FormField],

    data: () => ({
        value: false,
    }),

    mounted() {
        this.value = this.field.value || false

        this.field.fill = formData => {
            formData.append(this.field.attribute, this.trueValue)
        }
    },

    methods: {
        toggle() {
            this.value = !this.value
        },
    },

    computed: {
        checked() {
            return Boolean(this.value)
        },

        trueValue() {
            return +this.checked
        },
    },
}
</script>
