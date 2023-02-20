<?php

$discord_url = "https://discord.com/api/oauth2/authorize?client_id=1063762405013848156&permissions=8&redirect_uri=https%3A%2F%2Fhubyp.github.io%2FPalmaWebsite%2Fadmin%2Fprocess-oauth.php&response_type=code&scope=identify%20bot";
header("Location: $discord_url");
exit();

?>
