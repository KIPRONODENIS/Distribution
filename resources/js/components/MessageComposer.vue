<template>
	          <div class="type_msg">
            <div class="input_msg_write">
              <input type="text" class="write_msg" name="smg" placeholder="Type a message" v-model='message'/>

              <button class="msg_send_btn" type="button"  @click="send"><i class="fa fa-paper-plane-o" aria-hidden="true"  >send</i></button>
            </div>
          </div>
</template>

<script type="text/javascript">
	export default {
		data() {
  return {
      message:''
		};
  },
  methods: {
    send(e) {
    	e.preventDefault();
    	if(this.message=='') {
    		return;
    	}
    		
    		this.$emit('send',this.message);

    		this.message='';
    	
    }
  }

	}
</script>