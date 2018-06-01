
<img src="https://idconfirm.io/logo.svg" width="200" />

##Example
-------------
###How it work?
####1. Generate uniq code:
You can do it via POST on https://idconfirm.io/api/ server
with parameters:

| Parameter | Value                    | 
| ------------- | ------------------------------ |
| action*     | verfication_push_init |
| id*   | IDCONFIRM_ID |
| key*   | IDCONFIRM_KEY |
| labe   | IDCONFIRM_LABEL |
*nessesary
####2. JS ready integration
```javascript
<div id="idconfirm">
</div>
<script src="https://ajax.aspnetcdn.com/ajax/jQuery/jquery-3.3.1.min.js"></script>
<script>
	$(document).ready(function() {
		$('#idconfirm').load('https://idconfirm.io/addon/index.html');
	});

</script>

```


####Based on JS & PHP
You can find on this repository example writen in PHP called ***php-exemple.php***

###Way of charging
The backend code generates the variable $code based on private api data, then this code is used for the process of photo verification and whole proccess. To protect your account from excessive use of the add-on, we recommend restricting access.We would also like to remind you that we do not charge for incorrect verification.





##Documentation
-------------
Full documentation with all steps https://idconfirm.docs.apiary.io/ , it contains:

####Step by step verfication
                
6 step instruction how to upload files
####Geting documents
				
Return  encrypted data from our server
####Geting account information
				
Get basic information about account such as balances and basic metrics
####Setting webooks
				
Menaging accesses to your account and 
####Menaging keys etc
				
Menaging accesses to your account and keys .


##Have any questions or doubt
Mail as at hello@idconfirm.io