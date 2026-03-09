<template>
    <div>
        <h5 class="mb-0">Images:</h5>
        <div class="row my-4">
            <div v-for="(image, index) in images" :key="index" class="col-6 col-md-4 col-lg-3 mb-3">
                <b-img :src="storage_path + image.filename" fluid class="mb-2"></b-img>
                <a class="mr-3 text-danger" @click.prevent="deleteImage(image.id)" href="#">Delete</a>
            </div>
        </div>
        <h5 class="mb-3">Upload Gallery Photos:</h5>
        <vue-dropzone  class="mb-3" v-on:vdropzone-success="remove_thumb" v-on:vdropzone-success-multiple="upload_complete" ref="dropzone" id="dropzone" :options="dropzoneOptions"></vue-dropzone>
    </div>

</template>

<script>
    import vue2Dropzone from 'vue2-dropzone'
    import 'vue2-dropzone/dist/vue2Dropzone.min.css'
    export default {
        name: "MyDropZone",
        components: {
            vueDropzone: vue2Dropzone
        },

        props: {
            csrf: String,
            store_url: String,
            storage_path: String,
            id: Number,
        },

        mounted: function() {
            axios.get(this.store_url + '/' + this.id).then(response => {
                this.errors = false;
                this.images = response.data.images;
            }).catch(error => {
                this.errors = error.response.data.errors;
            });
            this.dropzoneOptions.headers['X-CSRF-TOKEN'] = this.csrf;
            this.dropzoneOptions.url = this.store_url;
            this.dropzoneOptions.params.id = this.id;
        },

        data: function () {
            return {
                images: [],
                currentInput:null,
                caption: null,
                errors: null,
                dropzoneOptions: {
                    url: this.store_url,
                    // autoProcessQueue: false,
                    uploadMultiple: true,
                    parallelUploads: 20,
                    maxFiles: null,
                    acceptedFiles: 'image/*',
                    resizeQuality: .8,
                    resizeWidth: 1920,
                    resizeHeight: 1920,
                    maxFilesize: 15, //MB
                    resizeMimeType: 'image/jpeg', //force to JPG
                    addRemoveLinks: true,
                    headers: {
                        'X-CSRF-TOKEN': null,
                    },
                    params: {
                        id : null,
                    },
                    // forceFallback: true,
                    //Custom Messages:
                  dictDefaultMessage: 'Drag images here or click to upload',
                  dictRemoveFile: '&times; Remove',
                  dictFileTooBig: 'The file size ({{filesize}}MB) is too large. Maximum {{maxFilesize}}MB!',
                  dictInvalidFileType: 'This type of file is unsupported. Image files only!',
                  dictMaxFilesExceeded: 'Maximum {{maxFiles}} files'
                }
            }
        },

        methods: {
            remove_thumb: function (file) {
                this.$refs.dropzone.removeFile(file);
            },
            upload_complete: function () {
                var vm =this;
                axios.get(this.store_url + '/' + this.id).then(response => {
                    vm.errors = false;
                    vm.images = response.data.images;
                    this.$bvToast.toast('Image(s) uploaded successfully.', {title: 'Success!', variant: 'success', solid: true, toaster: 'b-toaster-bottom-right'});
                }).catch(error => {
                    vm.errors = error.response.data.errors;
                });
            },
            deleteImage: function (id ) {
                axios.defaults.headers.common = {
                    'X-Requested-With': 'XMLHttpRequest',
                    'X-CSRF-TOKEN': this.csrf
                };
                var vm =this;
                var result = confirm("Are you sure?");
                if (result) {
                    axios.delete(this.store_url + '/' + id ).then(response => {
                        this.$bvToast.toast(response.data.msg, {title: 'Success!', variant: 'success', solid: true, toaster: 'b-toaster-bottom-right'});
                        vm.images = response.data.images;
                    }).catch(errors => {
                        this.errors = errors.response.data.errors;
                    });
                }
            },
        },

    }
</script>

<style scoped>
.dropzone {
    background: white;
    border-radius: 5px;
    border: 2px dashed #133557;
    border-image: none;
    margin-left: auto;
    margin-right: auto;
    padding: 0;
}

.dropzone .dz-preview:hover .dz-image img {
    -webkit-transform: none;
    -moz-transform: none;
    -ms-transform: none;
    -o-transform: none;
    transform: none;
    -webkit-filter: none;
    filter: none;
}
</style>
