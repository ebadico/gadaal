<template>
    <default-field :field="field">
        <template slot="field">
            <date-time-picker
                class="w-full form-control form-input form-input-bordered"
<<<<<<< HEAD
                :name="field.name"
                :field="field"
=======
                :field="field"
                :name="field.name"
>>>>>>> 4356d8bf7b1edc7b0c182b9e1a519ff606eac5fb
                :value="value"
                dateFormat="Y-m-d"
                :placeholder="placeholder"
                :enable-time="false"
                :enable-seconds="false"
                @change="handleChange"
            />

            <p v-if="hasError" class="my-2 text-danger">
                {{ firstError }}
            </p>
        </template>
    </default-field>
</template>

<script>
import DateTimePicker from '../DateTimePicker'
import { Errors, FormField, HandlesValidationErrors, InteractsWithDates } from 'laravel-nova'

export default {
    mixins: [HandlesValidationErrors, FormField, InteractsWithDates],
    components: { DateTimePicker },

    computed: {
        placeholder() {
            return moment().format('YYYY-MM-DD')
        },
    },
}
</script>
