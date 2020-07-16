@component('mail::message')
# {{$enquiry['name']}} | New Enquiry
Hi ,<br/>
    Hope you are doing great. You have a new enquiry<br/>
Name: {{$enquiry['name']}}<br/>
Email: {{$enquiry['email']}}<br/>
Phone:  {{$enquiry['phone']}}<br/>
Message: {{$enquiry['message']}}

Thanks,<br>
Your, Web Team
@endcomponent
