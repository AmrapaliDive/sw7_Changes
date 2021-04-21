<p>
Hello {{$orders->name}} ,<br>
Your Order on Date: {{ $orders->created_at->format('d/m/Y') }}<br> 
Order status: {{$status}}<br>
Reason : {{$reason}}<br><br>

From,<br>
 sw7.com
