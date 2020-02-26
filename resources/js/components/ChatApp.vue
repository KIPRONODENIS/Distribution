<template>
<div class="chat-app  w-100 mx-auto">
    <Conversation :contact="selectedContact" :messages="messages" v-on:new="saveNewMessage"/>
   
</div>
</template>

<script>
import Conversation from './Conversation';


    export default {
        props: {
            user:{
                type:Object,
                required:true
            },
         contact: {
          type:Object
         }
        },
        mounted() {

         
         //get the contacts 

  //        Echo.private(`messages${this.user.id}`)
  //        .listen("NewMessage",(e)=>{
  // this.handleIncoming(e.message);
  //        });


         axios.get('/contacts')
              .then((response)=>{
                console.log(this.user);
                console.log(response.data);
                this.contacts=response.data;

                this.startconversationWith(this.contact);
              });
        },
       methods:{
startconversationWith(contact) {
      axios.get(`/conversation/${contact.id}`)
         .then((response)=>{
    
            this.selectedContact=contact;
            this.messages=response.data;

         })
},

saveNewMessage(message) {

    this.messages.push(message);
},

handleIncoming(message) {

  if(this.selectedContact && message.sender_id==this.selectedContact.id) {
    this.saveNewMessage(message);
  }else  {
    alert(message.message);
  }
}
       },

       data(){
        return {
            selectedContact:null,
            messages:[],
            contacts:[]
        }
       },

       components:{Conversation}
    }
</script>


<style lang="scss"  scoped>
.chat-app {
    display:flex;
}

</style>