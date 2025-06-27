<?php
function time_elapsed_string($datetime, $full = false) {
    $now = new DateTime;
    $ago = new DateTime($datetime);
    $diff = $now->diff($ago);

    // Convert days into weeks without modifying $diff
    $weeks = floor($diff->d / 7);
    $days = $diff->d % 7;

    $string = [
        'y' => $diff->y . ' an(s)',
        'm' => $diff->m . ' mois',
        'w' => $weeks . ' semaine(s)',
        'd' => $days . ' jour(s)',
        'h' => $diff->h . ' heure(s)',
        'i' => $diff->i . ' minute(s)',
        's' => $diff->s . ' seconde(s)',
    ];

    foreach ($string as $k => $v) {
        // Supprimer les éléments à zéro
        if (preg_match('/^0/', $v)) {
            unset($string[$k]);
        }
    }

    if (!$full) $string = array_slice($string, 0, 1);

    return $string ? 'il y a ' . implode(', ', $string) : 'à l’instant';
}
