<?php

require __DIR__ . '/vendor/autoload.php';

use JacobDeKeizer\Ccv\CcvShopClient;

echo "<pre>CCV Shop Client test page\n\n";

// In a real-world scenario, set your CCV Shop API key in Render as an environment variable.
// For now, we can just use a placeholder:
$apiKey = getenv('CCVSHOP_API_KEY') ?: 'DUMMY_API_KEY';

// Create the client
$client = new CcvShopClient($apiKey);

// Confirm it loaded
if ($client instanceof CcvShopClient) {
    echo "SUCCESS: The CcvShopClient class was instantiated!\n";
} else {
    echo "ERROR: Could not instantiate CcvShopClient.\n";
}

echo "\nYou can now expand this page to test actual endpoints, e.g.:\n";
echo "\$client->products->all();\n";
echo "</pre>";
