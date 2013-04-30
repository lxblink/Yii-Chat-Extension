<div id='chatWidget' class='chat-widget js-chat-widget' 
     data-delay="<?php echo isset($this->options['delay']) ? $this->options['delay'] : $this->_options['delay']; ?>"
     data-maxmsglength="<?php echo isset($this->options['maxMsgLegth']) ? $this->options['maxMsgLegth'] : $this->_options['maxMsgLegth']; ?>">
    <div class='chatInner'>
        <div class='chat-toggle js-chat-toggle'><div class='chat-toogle-icon js-chat-toogle-icon'><</div></div>
        <div class='chat-content js-chat-content'>
            <ul class='chat-messages js-chat-messages'></ul>
        </div>
        <div class='chtat-inputs'>
            <div class="chat-error js-chat-error"></div>
            <form action="/index.php/site/chat" method="POST" class="chat-form js-chat-form">
                <input type='text' class='chat-msg js-chat-msg' 
                       maxlength="<?php echo isset($this->options['maxMsgLegth']) ? $this->options['maxMsgLegth'] : $this->_options['maxMsgLegth']; ?>" 
                       placeholder='type message here...'/>
                <input type='hidden' name="action" value="post"/>
                <input type='submit' class='js-chat-submit chat-submit' value='send'/>
            </form>
        </div>
    </div>
</div>