<template>
	<div class="contact-list">
		<ul>
			<li v-for="(contact,index) in contacts" :key="contact.id" @click="selectContact(index,contact)" 
			:class="{'selected':index==selected}">
				<div class="contact">
					<p class="bg-white text-gray-500">Email {{contact.name}}</p>
						<p>Email {{contact.email}}</p>
				</div>
			</li>
		</ul>
	</div>
</template>

<script>
	export default {


  props: {
  	contacts: {
  		type:Array,
  		default:[]
  	}
  },
  data() {
   return {
   	selected:0,

   }
  },
  methods: {
  selectContact(index,contact){

this.selected=index;
this.$emit("selected",contact);
  }
  }
	}
</script>


<style lang="scss"  scoped>
.contact-list {
    flex:2;

    ul  {
    	list-style:none;
    	padding-left:0;

    	li {
    		padding:0px;
    		border-bottom:1px solid #aaaaaa;
    		height:80px;
    		position:relative;
    		cursor:pointer;

    		&.selected {
    			background-color:#111;
    			color:white;
    		}
    	}
    }
}



</style>