
<?php
$client = new OAConnection(); // Defaults to an 'empty' configuration
$response = $client->connect(
	        'xwC8GHrbQFqyfXsZdQkvG9ipBkHyRQC5N7foJ6yWzVu',
		        'AZn1WsYMFV6URZNU4Pjrqs9GLtKSaBZMm4wQ6SHPBep',
			        'http://localhost/api/' );       // Make sure the endpoint is the server your account is on
if ( ! $response->success )
{
	        echo $response->error . PHP_EOL;
		        exit;
}
