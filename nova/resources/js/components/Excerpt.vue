<template>
    <div>
<<<<<<< HEAD
        <div v-if="expanded" class="markdown" v-html="content" />
=======
        <div v-if="expanded" class="markdown leading-normal" v-html="content" />
>>>>>>> 4356d8bf7b1edc7b0c182b9e1a519ff606eac5fb

        <a
            @click="toggle"
            class="cursor-pointer dim inline-block text-primary font-bold"
            :class="{ 'mt-6': expanded }"
            aria-role="button"
        >
            {{ showHideLabel }}
        </a>
    </div>
</template>

<script>
export default {
    props: {
        content: {
            type: String,
        },
    },

    data: () => ({ expanded: false }),

    methods: {
        toggle() {
            this.expanded = !this.expanded
        },
    },

    computed: {
        showHideLabel() {
<<<<<<< HEAD
            return !this.expanded ? 'Show Content' : 'Hide Content'
=======
            return !this.expanded ? this.__('Show Content') : this.__('Hide Content')
>>>>>>> 4356d8bf7b1edc7b0c182b9e1a519ff606eac5fb
        },
    },
}
</script>
