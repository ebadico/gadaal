<template>
    <default-field :field="field">
        <template slot="field">
            <input
<<<<<<< HEAD
                :id="field.name"
=======
                :id="field.attribute"
>>>>>>> 4356d8bf7b1edc7b0c182b9e1a519ff606eac5fb
                :dusk="field.attribute"
                type="password"
                v-model="value"
                class="w-full form-control form-input form-input-bordered"
                :class="errorClasses"
                :placeholder="field.name"
            />

            <p v-if="hasError" class="my-2 text-danger">
                {{ firstError }}
            </p>
        </template>
    </default-field>
</template>

<script>
import { FormField, HandlesValidationErrors } from 'laravel-nova'

export default {
    mixins: [HandlesValidationErrors, FormField],
}
</script>
