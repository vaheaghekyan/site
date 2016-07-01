<?php
/* Add any update or error notices to the top of the admin page */
function EWD_UFAQ_Error_Notices(){
    global $ewd_otp_message;
		if (isset($ewd_otp_message)) {
			  if (isset($ewd_otp_message['Message_Type']) and $ewd_otp_message['Message_Type'] == "Update") {echo "<div class='updated'><p>" . $ewd_otp_message['Message'] . "</p></div>";}
				if (isset($ewd_otp_message['Message_Type']) and $ewd_otp_message['Message_Type'] == "Error") {echo "<div class='error'><p>" . $ewd_otp_message['Message'] . "</p></div>";}
		}
}

?>