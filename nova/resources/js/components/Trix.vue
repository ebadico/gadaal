<<<<<<< HEAD
<script>
import 'trix'
=======
<template>
    <trix-editor
        ref="theEditor"
        @trix-change="handleChange"
        @trix-initialize="initialize"
        @trix-attachment-add="handleAddFile"
        @trix-attachment-remove="handleRemoveFile"
        @trix-file-accept="handleFileAccept"
        :value="value"
        :placeholder="placeholder"
        class="trix-content"
    />
</template>

<script>
import Trix from 'trix'
>>>>>>> 4356d8bf7b1edc7b0c182b9e1a519ff606eac5fb
import 'trix/dist/trix.css'

export default {
    name: 'trix-vue',
<<<<<<< HEAD
    props: ['name', 'value', 'placeholder'],
    methods: {
        onInitialize() {
            this.$refs.theEditor.editor.insertHTML(this.value)
        },
        onChange() {
            this.$emit('change', this.$refs.theEditor.value)
        },
    },
}
</script>

<template>
    <trix-editor
        ref="theEditor"
        @trix-change="onChange"
        @trix-initialize="onInitialize"
        @trix-file-accept="e => e.preventDefault()"
        :value="value"
        :placeholder="placeholder"
    />
</template>
=======

    props: {
        name: { type: String },
        value: { type: String },
        placeholder: { type: String },
        withFiles: { type: Boolean, default: true },
    },

    methods: {
        initialize() {
            this.$refs.theEditor.editor.insertHTML(this.value)
        },

        handleChange() {
            this.$emit('change', this.$refs.theEditor.value)
        },

        handleFileAccept(e) {
            if (!this.withFiles) {
                e.preventDefault()
            }
        },

        handleAddFile(event) {
            this.$emit('file-add', event)
        },

        handleRemoveFile(event) {
            this.$emit('file-remove', event)
        },
    },
}
</script>
>>>>>>> 4356d8bf7b1edc7b0c182b9e1a519ff606eac5fb
