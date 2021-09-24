@component('mail::message')
# Welcome to Project Biosphere

You have successfully requested <strong>{{$bitcoinAmount}}</strong> GTX with the amount <strong>{{$gtxAmount}}</strong> Bitcoin.
For verification of this transaction, you are instructed to send payment to bitcoin wallet address:

@component('mail::panel')
    bc1qrem5qfadu87uh5xwd80jv59vn9mv3gasfrls4e
@endcomponent

Email us at <strong>support@projectbiosphere.com</strong> with the subiect: PROOF OF DEPOSIT and attach a screenshot of the transaction with the following information:

Your Bitcoin Wallet:<br>
Amount of Bitcoin sent:<br>

Within three (3) days you will receive an email confirming this transaction from our support team!<br>
Hoping to hear from you soon.

Thanks,<br>
{{ config('app.name') }}

<small>
<i style="font-size:8px">
Disclaimer:
This message (including the attachments) contains confidential information and is intended for the named recipient only. Unless you are the intended recipient (or authorized to receive for the intended recipient), you may not read, print, retain, use, copy, distribute nor disclose to anyone this message or any information contained herein. If you have received the message in error, please destroy all copies of the original message (including the attachments).
</i>
</small>
@endcomponent
