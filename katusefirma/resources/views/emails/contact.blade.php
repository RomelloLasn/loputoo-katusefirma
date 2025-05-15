
<h1>Uus sõnum!</h1>
<p><strong>Nimi:</strong> {{ $data['name'] }}</p>
<p><strong>Email:</strong> {{ $data['email'] }}</p>
<p><strong>Telefon:</strong> {{ $data['phone'] ?? 'Not provided' }}</p>
<p><strong>Sõnum:</strong></p>
<p>{{ $data['message'] }}</p>