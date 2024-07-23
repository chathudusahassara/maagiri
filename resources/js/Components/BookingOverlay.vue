<template>
    <Dialog :open="isVisible" @close="closeOverlay" class="fixed inset-0 z-50 flex items-center justify-center">
      <DialogOverlay class="fixed inset-0 bg-mgblack-100 backdrop-blur-md " />
      
      <div class=" p-6 rounded-lg w-full max-w-2xl mx-4 relative">
        <button @click="closeOverlay" class="absolute top-2 right-2">
          <img src="https://maagirihotel.com/images/close-ico.png" width="30" height="30">
        </button>
        <DialogTitle class="text-lg text-gray-50 font-bold ">Booking Enquiry</DialogTitle>
        <form @submit.prevent="handleSubmit" class=" mt-8">
          <div class="mb-4">
            <label class="block text-sm font-medium text-white">NAME*</label>
            <input type="text" v-model="formData.name" class="mt-1 p-2 block w-full border border-gray-300 rounded-md shadow-sm" required />
          </div>
          <div class="mb-4">
            <label class="block text-sm font-medium text-white">EMAIL ADDRESS</label>
            <input type="email" v-model="formData.email" class="mt-1 p-2 block w-full border border-gray-300 rounded-md shadow-sm" required />
            <input type="hidden" v-model="formData.type" />
          </div>
          <div class="mb-4">
            <label class="block text-sm font-medium text-white">MESSAGE</label>
            <textarea v-model="formData.messageBody" rows="4" class="mt-1 p-2 block w-full border border-gray-300 rounded-md shadow-sm"></textarea>
            <input type="hidden" name="_token" value="OQeDR8pitB9eacJXCsr8NzjBpAazRrbod3qyl3Da">
          </div>
          <div class="flex justify-end">
            <button type="submit" class=" bg-mggold-100 text-white py-2 px-4 rounded-md">SEND</button>
          </div>
        </form>
      </div>
    </Dialog>
  </template>
  
  <script>
  import { Dialog, DialogOverlay, DialogTitle } from '@headlessui/vue';
  
  export default {
    components: {
      Dialog,
      DialogOverlay,
      DialogTitle,
    },
    props: {
      isVisible: Boolean,
      type: String
    },
    data() {
      return {
        formData: {
          name: '',
          email: '',
          type: this.type,
          messageBody: ''
        }
      };
    },
    methods: {
      closeOverlay() {
        this.$emit('close');
      },
      handleSubmit() {
        // handle form submission
        console.log(this.formData);
        this.closeOverlay();
      }
    },
    watch: {
      type(newType) {
        this.formData.type = newType;
      }
    }
  };
  </script>
  
  <style scoped>
  </style>
  