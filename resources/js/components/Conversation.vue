<template>
	<div class="conversation">
		<h1>{{contact ? contact.name :"Select a contact"}}</h1>
		<MessagesFeed :contact="contact" :messages="messages" />
		<MessageComposer @send="sendMessage"/>
	</div>
</template>

<script>
import MessagesFeed from './MessagesFeed'; 
import MessageComposer from './MessageComposer'; 
		
	export default {

		props: {
			contact: {
				type:Object,
				default:null

			},
			messages: {
				type:Array,
				default:[]
			}
		},
		methods: {
			sendMessage(message) {
    if(!this.contact) {
    	return;
    }
//lest post the data
    axios.post('conversation/send',{
    	contact_id:this.contact.id,
    	message:message
    }).then((response)=>{
    	this.$emit("new",response.data);
    })
			}
		},

		components:{MessagesFeed,MessageComposer}
	}
</script>


<style lang="scss"  scoped>
.conversation {

  flex:5;
  display:flex;
  flex-direction:column;
  justify-content:space-between;
}

</style>