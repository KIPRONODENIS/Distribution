<div>
    {{-- Knowing others is intelligence; knowing yourself is true wisdom. --}}

    <div class="messaging">
      <div class="inbox_msg">
        <div class="mesgs">
          <div class="msg_history">
          @if(count($all)>0) 

@foreach($all as $msg)
 @if($msg["sender_id"]==1)
            <div class="incoming_msg">
              <div class="incoming_msg_img"> <img src="https://ptetutorials.com/images/user-profile.png" alt="sunil"> </div>
              <div class="received_msg">
                <div class="received_withd_msg">
                  <p>{{$msg["message"]}}</p>
                  <span class="time_date"> 11:01 AM    |    June 9</span></div>
              </div>
            </div>
    @else
            <div class="outgoing_msg">
              <div class="sent_msg">
 <p>{{$msg["message"]}}</p>
                <span class="time_date"> 11:01 AM    |    June 9</span> </div>
            </div>

 @endif


@endforeach
@endif
{{$message}}
          </div>
          <div class="type_msg">
            <div class="input_msg_write">
              <input type="text" class="write_msg" name="smg" placeholder="Type a message" wire:model='message'/>

              <button class="msg_send_btn" type="button"><i class="fa fa-paper-plane-o" aria-hidden="true" wire:click="sending()">send</i></button>
            </div>
          </div>
        </div>
      </div>
      
      
    
      
    </div>
</div>
