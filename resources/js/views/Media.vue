<template>
<div>
    <div class="breadcrumbs">
        <a href="/admin">Dashboard</a><span class="sep">/</span>Articles
    </div>
    <div class="text-center mb-3">
        <b-button variant="secondary" @click="resetModal, modalShow= true">Add article</b-button>
    </div>

    <b-table :items="cMedia" :fields="fields" stacked="md" show-empty sort-icon-left striped hover borderless responsive>
        <template v-slot:cell(index)="vol">
            {{ vol.index + 1}}
        </template>
        <template v-slot:cell(view)="vol">
            <a class="btn btn-outline-primary" @click="modalShow = true, form = copy(vol.item)">Edit</a>
        </template>
    </b-table>
    <b-modal modal-class="modal-details" size="xl" no-close-on-backdrop no-fade centered v-model="modalShow" @hidden="closeModal">
        <template #modal-header="{ close }">
            <h4 v-if="form.hasOwnProperty('id')" class="mb-0">Edit article</h4>
            <h4 v-else class="mb-0">Add article</h4>
            <button class="close" aria-label="Close" @click="close()">&times;</button>
        </template>
        <b-form-group label="Title DE:" label-for="title_de">
            <b-form-input v-model="form.title_de" id="title_de" type="text" ></b-form-input>
            <span v-if=" errors != null && errors.hasOwnProperty('title_de')" class="text-danger text-small">{{ errors.title_de[0] }}</span>
        </b-form-group>
        <b-form-group label="Title EN:" label-for="title_en">
            <b-form-input v-model="form.title_en" id="title_en" type="text" ></b-form-input>
            <span v-if=" errors != null && errors.hasOwnProperty('title_en')" class="text-danger text-small">{{ errors.title_en[0] }}</span>
        </b-form-group>
        <!-- <b-form-group label="Link Cover Video:" label-for="url">
            <b-form-input v-model="form.cover_video" id="url" type="text" ></b-form-input>
            <span v-if=" errors != null && errors.hasOwnProperty('cover_video')" class="text-danger text-small">{{ errors.cover_video[0] }}</span>
        </b-form-group> -->
        <b-form-group label="Cover Image:" label-for="plan" class="">
            <img  class="admin-modal-img img-fluid" v-if="form.cover_image != null" :src="'/storage/articles/'+form.slug+'/'+form.cover_image">
            <b-form-file v-else id="plan" v-model="file" placeholder="Choose a file or drag and drop here..." drop-placeholder="Drag the file here..."></b-form-file>
            <span v-if=" errors != null && errors.hasOwnProperty('file')" class="text-danger text-small">{{ errors.file[0] }}</span>
        </b-form-group>
        <div class="text-center">
            <b-button v-if="form.cover_image != null" variant="link" class="text-danger" @click="form.cover_image = null,file = null">Delete cover photo</b-button>
        </div>
        <b-form-group label="Content DE:" label-for="body" >
            <vue-editor v-model="form.body_de" :editorOptions="editorSettings" @focus="onEditorFocus" id="body" />
            <span v-if=" errors != null && errors.hasOwnProperty('body_de')" class="text-danger text-small">{{ errors.body_de[0] }}</span>
        </b-form-group>
        <b-form-group label="Content EN:" label-for="body_en" >
            <vue-editor v-model="form.body_en" :editorOptions="editorSettings" @focus="onEditorFocus" id="body_en" />
            <span v-if=" errors != null && errors.hasOwnProperty('body_en')" class="text-danger text-small">{{ errors.body_en[0] }}</span>
        </b-form-group>
        <!-- <my-drop-zone v-if="form.hasOwnProperty('id')"  :csrf ="csrf" :store_url="'/admin/articles/images'" :storage_path="'/storage/articles/'+form.slug+'/'" :id="form.id"></my-drop-zone> -->
        <template #modal-footer>
            <div class="d-flex flex-fill align-items-center">
                <b-button v-if="form.hasOwnProperty('id')" variant="link" class="text-danger" @click="handleDelete">Delete Article</b-button>
                <b-button v-if="form.hasOwnProperty('id')" variant="success" class="ml-auto" @click="handleUpdate">Update</b-button>
                <b-button v-else variant="success" class="ml-auto" @click="handleSubmit">Save</b-button>
            </div>
        </template>
    </b-modal>
</div>
</template>

<script>
import moment from "moment";
import MyDropZone from "../components/MyDropZone";
export default {
    name: "Media",
    components: {MyDropZone},
    props: {
        media: Array,
        csrf: String,
    },
    data() {
        return {
            file: null,
            editorSettings: {
                modules: {
                    toolbar: {
                        container: [
                            [{ header: [false, 1, 2, 3, 4, 5, 6] }],
                            ["bold", "italic", "underline", "strike"], // toggled buttons
                            [
                                { align: "" },
                                { align: "center" },
                                { align: "right" },
                                { align: "justify" }
                            ],
                            ["blockquote", "code-block"],
                            [{ list: "ordered" }, { list: "bullet" }, { list: "check" }],
                            [{ indent: "-1" }, { indent: "+1" }], // outdent/indent
                            [{ color: [] }, { background: [] }], // dropdown with defaults from theme
                            ["image", "link", "video"],
                            ["clean"], // remove formatting button
                            ['undo' , 'redo' ],
                        ],
                        handlers: {
                            'undo': this.onEditorUndo,
                            'redo': this.onEditorRedo
                        }
                    },
                    imageCompress: {
                        quality: 0.7, // default
                        maxWidth: 1000, // default
                        maxHeight: 1000, // default
                        imageType: 'image/jpeg', // default
                        debug: false, // default
                        suppressErrorLogging: false, // default
                        insertIntoEditor: undefined, // default
                    },
                    history: true,
                    imageResize: true,
                }
            },
            cMedia: this.media,
            form: {
                title_en: null,
                title_de: null,
                intro_en: null,
                intro_de: null,
                body_en: null,
                body_de: null,
                cover_image: null,
                cover_video: null,
                start_date: null,
                end_date: null,
                event_date: null,
            },
            fields: [
                {key: 'index', label: 'Nr.'},
                {key: 'title_de', label: 'Title DE', sortable: true, sortDirection: 'desc'},
                {key: 'title_en', label: 'Title EN', sortable: true, sortDirection: 'desc'},
                // {key: 'cover_image', label: 'Cover'},
                {key: 'view', label: 'Actions'},
            ],
            modalShow: false,
            errors: null
        }
    },
    methods: {
        copy(data) {
            return JSON.parse(JSON.stringify(data));
        },
        getFormattedDate(value) {
            moment.locale('de');
            return moment(value).format('LL');
        },
        resetModal() {
            this.form = {
                title_en: null,
                title_de: null,
                intro_en: null,
                intro_de: null,
                body_en: null,
                body_de: null,
                cover_image: null,
                cover_video: null,
                start_date: null,
                end_date: null,
                event_date: null,
            },
                this.errors = null;
                this.file = null;
        },
        closeModal() {
            this.resetModal();
        },
        handleSubmit() {
            var formData = new FormData();
            Object.keys(this.form).forEach(key => {
                if (this.form[key] != null && this.form[key]!= ''){
                    formData.append(key, this.form[key]);
                }
            });
            if (this.file != null) {
                formData.append('file', this.file);
            }
            formData.append('_method', 'POST');
            axios.post('/admin/articles', formData, {
                headers: {
                    'Content-Type': 'multipart/form-data',
                    'X-Requested-With': 'XMLHttpRequest',
                }
            }).then(response => {
                this.errors = false;
                this.cMedia = response.data.media;
                this.$bvToast.toast(response.data.msg, {title: 'Success!', variant: 'success', solid: true, toaster: 'b-toaster-bottom-right'});
                this.modalShow = !this.modalShow;
            }).catch(error => {
                this.errors = error.response.data.errors;
            });
        },
        handleUpdate() {
            var formData = new FormData();
            Object.keys(this.form).forEach(key => {
                if (this.form[key] != null && this.form[key]!= ''){
                    formData.append(key, this.form[key]);
                }
            });
            if (this.file != null) {
                formData.append('file', this.file);
            }
            formData.append('_method', 'PATCH');
            axios.post('/admin/articles/'+this.form.slug, formData, {
                headers: {
                    'Content-Type': 'multipart/form-data',
                    'X-Requested-With': 'XMLHttpRequest',
                }
            }).then(response => {
                this.errors = false;
                this.cMedia = response.data.media;
                this.$bvToast.toast(response.data.msg, {title: 'Succes!', variant: 'success', solid: true, toaster: 'b-toaster-bottom-right'});
                this.modalShow = !this.modalShow;
            }).catch(error => {
                this.errors = error.response.data.errors;
            });
        },
        handleDelete() {
            var url = '/admin/articles/'+this.form.slug;
            var result = confirm("Warning! Article will be permanently deleted!");
            if (result) {
                axios.delete(url)
                    .then(response => {
                        this.cMedia = response.data.media;
                        this.$bvToast.toast(response.data.msg, {title: 'Success!', variant: 'success', solid: true, toaster: 'b-toaster-bottom-right'});
                        this.modalShow = !this.modalShow;
                    }).catch(error => {
                    this.errors = error.response.data.errors;
                });
            }
        },
        onEditorFocus(quill) {    
            this.editorFocused = quill;
        },
        onEditorUndo() {
            if (this.editorFocused) {
                this.editorFocused.history.undo();
            }
        },
        onEditorRedo() {
            if (this.editorFocused) {
                this.editorFocused.history.redo();
            }
        },
    }
}
</script>

<style scoped>

</style>
