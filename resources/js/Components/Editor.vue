<template>
  <div>
    <BubbleMenu :editor="editor" :tippy-options="{ duration: 100 }" v-if="editor">
      <div class="btn-group shadow">
        <button @click.prevent="editor.chain().focus().toggleHeading({ level: 1 }).run()" :class="{ 'text-primary': editor.isActive('heading', { level: 1 }) }" class="btn btn-icon bg-white"><i class="ti ti-h-1 icon"></i></button>
        <button @click.prevent="editor.chain().focus().toggleHeading({ level: 2 }).run()" :class="{ 'text-primary': editor.isActive('heading', { level: 2 }) }" class="btn btn-icon bg-white"><i class="ti ti-h-2 icon"></i></button>
        <button @click.prevent="editor.chain().focus().toggleHeading({ level: 3 }).run()" :class="{ 'text-primary': editor.isActive('heading', { level: 3 }) }" class="btn btn-icon bg-white"><i class="ti ti-h-3 icon"></i></button>
        <button @click.prevent="editor.chain().focus().toggleHeading({ level: 4 }).run()" :class="{ 'text-primary': editor.isActive('heading', { level: 4 }) }" class="btn btn-icon bg-white"><i class="ti ti-h-4 icon"></i></button>
        <button @click.prevent="editor.chain().focus().setParagraph().run()" :class="{ 'text-primary': editor.isActive('paragraph') }" class="btn btn-icon bg-white"><i class="ti ti-cursor-text icon"></i></button>

        <button @click.prevent="editor.chain().focus().toggleBold().run()" :class="{ 'text-primary': editor.isActive('bold') }" class="btn btn-icon bg-white"><i class="ti ti-bold icon"></i></button>
        <button @click.prevent="editor.chain().focus().toggleItalic().run()" :class="{ 'text-primary': editor.isActive('italic') }" class="btn btn-icon bg-white"><i class="ti ti-italic icon"></i></button>
        <button @click.prevent="editor.chain().focus().toggleStrike().run()" :class="{ 'text-primary': editor.isActive('strike') }" class="btn btn-icon bg-white"><i class="ti ti-strikethrough icon"></i></button>
        <button @click.prevent="editor.chain().focus().toggleCode().run()" :class="{ 'text-primary': editor.isActive('code') }" class="btn btn-icon bg-white"><i class="ti ti-code icon"></i></button>
        <button @click.prevent="setLink" :class="{ 'text-primary': editor.isActive('link') }" class="btn btn-icon bg-white"><i class="ti ti-link icon"></i></button>
        <button @click.prevent="editor.chain().focus().toggleBulletList().run()" :class="{ 'text-primary': editor.isActive('bulletList') }" class="btn btn-icon bg-white"><i class="ti ti-list icon"></i></button>
        <button @click.prevent="editor.chain().focus().toggleOrderedList().run()" :class="{ 'text-primary': editor.isActive('orderedList') }" class="btn btn-icon bg-white"><i class="ti ti-list-numbers icon"></i></button>
        <button @click.prevent="editor.chain().focus().clearNodes().unsetAllMarks().run()" class="btn btn-icon bg-white"><i class="ti ti-clear-formatting icon"></i></button>

        <button @click.prevent="editor.chain().focus().setTextAlign('left').run()" :class="{ 'text-primary': editor.isActive({ textAlign: 'left' }) }" class="btn btn-icon bg-white"><i class="ti ti-align-left icon"></i></button>
        <button @click.prevent="editor.chain().focus().setTextAlign('center').run()" :class="{ 'text-primary': editor.isActive({ textAlign: 'center' }) }" class="btn btn-icon bg-white"><i class="ti ti-align-center icon"></i></button>
        <button @click.prevent="editor.chain().focus().setTextAlign('right').run()" :class="{ 'text-primary': editor.isActive({ textAlign: 'right' }) }" class="btn btn-icon bg-white"><i class="ti ti-align-right icon"></i></button>
        <button @click.prevent="editor.chain().focus().setTextAlign('justify').run()" :class="{ 'text-primary': editor.isActive({ textAlign: 'justify' }) }" class="btn btn-icon bg-white"><i class="ti ti-align-justified icon"></i></button>
      </div>
    </BubbleMenu>
    <FloatingMenu :editor="editor" :tippy-options="{ duration: 100 }" v-if="editor">
      <div class="btn-group shadow">
        <button @click.prevent="editor.chain().focus().toggleHeading({ level: 1 }).run()" :class="{ 'text-primary': editor.isActive('heading', { level: 1 }) }" class="btn btn-icon bg-white"><i class="ti ti-h-1 icon"></i></button>
        <button @click.prevent="editor.chain().focus().toggleHeading({ level: 2 }).run()" :class="{ 'text-primary': editor.isActive('heading', { level: 2 }) }" class="btn btn-icon bg-white"><i class="ti ti-h-2 icon"></i></button>
        <button @click.prevent="editor.chain().focus().toggleHeading({ level: 3 }).run()" :class="{ 'text-primary': editor.isActive('heading', { level: 3 }) }" class="btn btn-icon bg-white"><i class="ti ti-h-3 icon"></i></button>
        <button @click.prevent="editor.chain().focus().toggleHeading({ level: 4 }).run()" :class="{ 'text-primary': editor.isActive('heading', { level: 4 }) }" class="btn btn-icon bg-white"><i class="ti ti-h-4 icon"></i></button>
        <button @click.prevent="editor.chain().focus().setParagraph().run()" :class="{ 'text-primary': editor.isActive('paragraph') }" class="btn btn-icon bg-white"><i class="ti ti-cursor-text icon"></i></button>

        <button @click.prevent="editor.chain().focus().toggleBold().run()" :class="{ 'text-primary': editor.isActive('bold') }" class="btn btn-icon bg-white"><i class="ti ti-bold icon"></i></button>
        <button @click.prevent="editor.chain().focus().toggleItalic().run()" :class="{ 'text-primary': editor.isActive('italic') }" class="btn btn-icon bg-white"><i class="ti ti-italic icon"></i></button>
        <button @click.prevent="editor.chain().focus().toggleStrike().run()" :class="{ 'text-primary': editor.isActive('strike') }" class="btn btn-icon bg-white"><i class="ti ti-strikethrough icon"></i></button>
        <button @click.prevent="editor.chain().focus().toggleCode().run()" :class="{ 'text-primary': editor.isActive('code') }" class="btn btn-icon bg-white"><i class="ti ti-code icon"></i></button>
        <button @click.prevent="setLink" :class="{ 'text-primary': editor.isActive('link') }" class="btn btn-icon bg-white"><i class="ti ti-link icon"></i></button>
        <button @click.prevent="editor.chain().focus().toggleBulletList().run()" :class="{ 'text-primary': editor.isActive('bulletList') }" class="btn btn-icon bg-white"><i class="ti ti-list icon"></i></button>
        <button @click.prevent="editor.chain().focus().toggleOrderedList().run()" :class="{ 'text-primary': editor.isActive('orderedList') }" class="btn btn-icon bg-white"><i class="ti ti-list-numbers icon"></i></button>
        <button @click.prevent="editor.chain().focus().clearNodes().unsetAllMarks().run()" class="btn btn-icon bg-white"><i class="ti ti-clear-formatting icon"></i></button>

        <button @click.prevent="editor.chain().focus().setTextAlign('left').run()" :class="{ 'text-primary': editor.isActive({ textAlign: 'left' }) }" class="btn btn-icon bg-white"><i class="ti ti-align-left icon"></i></button>
        <button @click.prevent="editor.chain().focus().setTextAlign('center').run()" :class="{ 'text-primary': editor.isActive({ textAlign: 'center' }) }" class="btn btn-icon bg-white"><i class="ti ti-align-center icon"></i></button>
        <button @click.prevent="editor.chain().focus().setTextAlign('right').run()" :class="{ 'text-primary': editor.isActive({ textAlign: 'right' }) }" class="btn btn-icon bg-white"><i class="ti ti-align-right icon"></i></button>
        <button @click.prevent="editor.chain().focus().setTextAlign('justify').run()" :class="{ 'text-primary': editor.isActive({ textAlign: 'justify' }) }" class="btn btn-icon bg-white"><i class="ti ti-align-justified icon"></i></button>
      </div>
    </FloatingMenu>
    <EditorContent :editor="editor" />
  </div>
</template>

<script>
import StarterKit from '@tiptap/starter-kit'
import { Editor, EditorContent, BubbleMenu, FloatingMenu } from '@tiptap/vue-3'
import Link from '@tiptap/extension-link'
import TextAlign from '@tiptap/extension-text-align'

export default {
  components: {
    EditorContent,
    BubbleMenu,
    FloatingMenu,
  },

  props: {
    modelValue: {
      type: String,
      default: '',
    },
  },

  emits: ['update:modelValue'],

  data() {
    return {
      editor: null,
    }
  },

  watch: {
    modelValue(value) {
      // HTML
      const isSame = this.editor.getHTML() === value

      // JSON
      // const isSame = JSON.stringify(this.editor.getJSON()) === JSON.stringify(value)

      if (isSame) {
        return
      }

      this.editor.commands.setContent(value, false)
    },
  },

  mounted() {
    this.editor = new Editor({
      extensions: [
        StarterKit,
        Link.configure({
          openOnClick: false,
        }),
        TextAlign.configure({
          types: ['heading', 'paragraph'],
        }),
      ],
      content: this.modelValue,
      editorProps: {
        attributes: {
          class: 'form-control',
        },
      },
      onUpdate: () => {
        // HTML
        this.$emit('update:modelValue', this.editor.getHTML())

        // JSON
        // this.$emit('update:modelValue', this.editor.getJSON())
      },
    })
  },

  methods: {
    setLink() {
      const previousUrl = this.editor.getAttributes('link').href
      const url = window.prompt('URL', previousUrl)

      // cancelled
      if (url === null) {
        return
      }

      // empty
      if (url === '') {
        this.editor.chain().focus().extendMarkRange('link').unsetLink().run()

        return
      }

      // update link
      this.editor.chain().focus().extendMarkRange('link').setLink({ href: url }).run()
    },
  },

  beforeUnmount() {
    this.editor.destroy()
  },
}
</script>

<style>
.ProseMirror {
  min-height: 50vh;
}
</style>
