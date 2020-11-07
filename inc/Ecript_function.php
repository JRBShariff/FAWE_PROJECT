<?php
//disable all error
error_reporting(0);
try{
	

// This simple example PHP code helps illustrate how to encrypt and decrypt data.
// This uses openssl_encrypt() and openssl_decrypt() for the encryption and decryption process respectively.
// Detailed information on these can be found at https://www.php.net/manual/en/function.openssl-encrypt.php and
// https://www.php.net/manual/en/function.openssl-decrypt.php
//
// The use of encryption is important when you have sensitive information to protect. For example,
// you may have a web store that collects customer's name, address and other personal information. Having this type of
// data stolen from a database breach can have serious consequences.
//
// This example PHP code only serve to illustrate the process of encrypting and decrypting data is not as hard
// to implement as one may believe. Do you own homework to find the best implementation for your application.

// BEGIN: Define some variable(s)
// INSTRUCTION: Specify your own key (password) and algorithm to use
$ENCRYPTION_KEY = 'Fawe2020Secure';
$ENCRYPTION_ALGORITHM = 'AES-256-CBC';


// BEGIN FUNCTIONS ***************************************************************** 
function EncryptThis($ClearTextData) {
    // This function encrypts the data passed into it and returns the cipher data with the IV embedded within it.
    // The initialization vector (IV) is appended to the cipher data with 
    // the use of two colons serve to delimited between the two.
    global $ENCRYPTION_KEY;
    global $ENCRYPTION_ALGORITHM;
    $EncryptionKey = base64_decode($ENCRYPTION_KEY);
    $InitializationVector  = openssl_random_pseudo_bytes(openssl_cipher_iv_length($ENCRYPTION_ALGORITHM));
    $EncryptedText = openssl_encrypt($ClearTextData, $ENCRYPTION_ALGORITHM, $EncryptionKey, 0, $InitializationVector);
    return base64_encode($EncryptedText . '::' . $InitializationVector);
}

function DecryptThis($CipherData) {
    // This function decrypts the cipher data (with the IV embedded within) passed into it 
    // and returns the clear text (unencrypted) data.
    // The initialization vector (IV) is appended to the cipher data by the EncryptThis function (see above).
    // There are two colons that serve to delimited between the cipher data and the IV.
    global $ENCRYPTION_KEY;
    global $ENCRYPTION_ALGORITHM;
    $EncryptionKey = base64_decode($ENCRYPTION_KEY);
    list($Encrypted_Data, $InitializationVector ) = array_pad(explode('::', base64_decode($CipherData), 2), 2, null);
    return openssl_decrypt($Encrypted_Data, $ENCRYPTION_ALGORITHM, $EncryptionKey, 0, $InitializationVector);
}
// END FUNCTIONS ***************************************************************** 

// *** No more configurable options below this point for this code to function on most servers ***
//if ((isset($_POST["MM_update"])) && ($_POST["MM_update"] == "form_encryption")) {
    // Once clear text data is encrypted, it can be saved to a database table.
    // This example will only echo the result to the screen.
    //$Before = $_POST['ClearTextDataInput'];
  //  $After = EncryptThis($_POST['ClearTextDataInput']); 
//}
//if ((isset($_POST["MM_update"])) && ($_POST["MM_update"] == "form_decryption")) {
    // Cipher text can be from your MySQL data or from a user input via a web form.
    // This example will use user input cipher text to decrypt.
   // $Before = $_POST['CipherDataInput'];
    //$After = DecryptThis($_POST['CipherDataInput']); 
//}

}catch (Exception $e){
	?>
		<script>
			 $(document).ready(function(){
				$.notify("Opps! Something Went Wrong, Please Contact Administrator",
					
				{
					
					animate: {
						enter: 'animated zoomInDown',
						exit: 'animated zoomOutUp'
					}
				});
			});
		</script>
		<?php
}
?>
<!--<hr/>
<p>This example code uses the following:</p>
<ul>
<li>Encryption Key (Password): <span style="font-weight: bold"><?php// echo $ENCRYPTION_KEY;?></span> </li>
<li>Cipher Method: <span style="font-weight: bold"><?php //echo $ENCRYPTION_ALGORITHM;?></span> </li>
</ul>
<hr/>
<form action="" method="post" name="form_encryption">
    Type YourPlain Text Data to Encrypt: 
    <textarea name="ClearTextDataInput" id="textaClearTextDataInputrea" cols="45" rows="5"></textarea>
    <input type="hidden" name="MM_update" value="form_encryption" />
    <button type="submit" name="submit" id="Submit" value="Encrypt">Encrypt This</button>
    </form>
    
<form action="" method="post" name="form_decryption">
    Or Type Your Cipher Data to Decrypt: 
    <textarea name="CipherDataInput" id="CipherDataInput" cols="45" rows="5"></textarea>
    <input type="hidden" name="MM_update" value="form_decryption" />
    <button type="submit" name="submit" id="Submit" value="Decrypt">Decrypt This</button>
</form>
<hr/>
<div style="width:600px; overflow-wrap: break-word">
    The result of your encryption/decryption is shown below:<br />
    <p>Before:<br /><strong><?php //echo $Before; ?></strong></p>
    <p>After:<br /><strong><?php //echo $After; ?></strong></p>
</div>-->
