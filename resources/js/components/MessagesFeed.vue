<template>
<div>
   
    <div class="messaging">
      <div class="inbox_msg">
        <div class="mesgs">
          <div class="msg_history"  v-if="contact">
          

 

           
            <div  v-for="message in messages "   >
            	 <div class="outgoing_msg"  v-if="message.sender_id == contact.id">
              
              <div class="sent_msg"  >
              <p>{{message.message}}</p>
                <span class="time_date"> 11:01 AM    |    June 9</span>
               </div>
           </div>

              <div  class="incoming_msg"  v-else="message.sender_id == contact.id">
              <div class="incoming_msg_img"> <img src="https://ptetutorials.com/images/user-profile.png" alt="sunil"> </div>
              <div class="received_msg">
                <div class="received_withd_msg">
                  <p>{{message.message}}</p>
                  <span class="time_date"> 11:01 AM    |    June 9</span></div>
              </div>
            </div>

            </div>





          </div>

        </div>
      </div>
      
      
    
      
    </div>
</div>

</template>

<script >
	export default {

		mounted() {
		},
		props: {
			contact: {
				type:Object
			},
			messages:{
				type:Array,
				required:true
			}
		},
		data() {
         return {
         	message:'Hallo'
         }
		},
		methods: {
			send(e) {
				this.$emit('send',this.message);


			}
		}
	}
</script>