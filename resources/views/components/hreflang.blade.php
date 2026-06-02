@php
$availableLocales = ['en','fr','el','de','it','cs','nl','sl','sk', 'fi', 'sv', 'no', 'ru', 'lv', 'lt', 'et']; // Ajouter les langues disponibles ici
$currentPath = request()->path();

// Supprime la langue déjà dans l'URL
foreach ($availableLocales as $lang) {
    if (str_starts_with($currentPath, $lang . '/')) {
        $currentPath = substr($currentPath, strlen($lang) + 1); // enlève "fr/" par ex
        break;
    } elseif ($currentPath === $lang) {
        $currentPath = ''; // cas racine "/fr"
        break;
    }
}

// S'assurer que la racine est bien gérée
$currentPath = $currentPath === '/' ? '' : $currentPath;
@endphp

@foreach($availableLocales as $lang)
    <link rel="alternate" hreflang="{{ $lang }}" href="{{ url($lang . ($currentPath ? '/' . $currentPath : '')) }}">
@endforeach

<link rel="alternate" hreflang="x-default" href="{{ url('/') }}">
