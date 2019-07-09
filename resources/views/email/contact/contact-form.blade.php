@component('mail::message')
# Thank you for your message
<p><strong>Name : </strong> {{$data['firstname']. ' ' .$data['surname']}}</p>
<p><strong>Email: </strong>{{$data['email']}}}</p>
<p><strong>Subject: </strong>{{$data['subject']}}</p>
<p><strong>Message: </strong></p>
<p>{{$data['message']}}</p>
@endcomponent
