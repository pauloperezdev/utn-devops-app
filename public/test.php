<?php

echo "<h1>Variables de entorno</h1>";

foreach($_ENV as $varName => $value) {
    echo "<p>$varName: $value</p>"
}
