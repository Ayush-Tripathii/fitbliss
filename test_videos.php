<?php
$videos = [
    0 => 'https://fitblissbysk.com/wp-content/uploads/2026/07/Journey-from-120-kgs-to-70-kgs-I-m-still-working-in-my-roar-because-my-best-version-is-yet-to.mp4',
    1 => 'https://fitblissbysk.com/wp-content/uploads/2026/07/1-Nothing-makes-us-happier-than-seeing-our-clients-transform-and-share-their-journey-with-us.mp4',
    2 => 'https://fitblissbysk.com/wp-content/uploads/2026/07/Real-stories.-Real-results.-%F0%9F%92%A5Hear-it-straight-from-Samved-%E2%80%94-how-Fitbliss-helped-him-push-limits-1.mp4',
    3 => 'https://fitblissbysk.com/wp-content/uploads/2026/07/Nothing-makes-us-happier-than-seeing-our-clients-transform-and-share-their-journey-with-us.mp4',
    4 => 'https://fitblissbysk.com/wp-content/uploads/2026/07/At-Fitbliss-its-never-just-about-workouts-or-machines-%E2%80%94-its-about-people.-%F0%9F%92%ABEvery-transformat.mp4',
    5 => 'https://fitblissbysk.com/wp-content/uploads/2026/07/Harleens-journey-with-FITBLISS-by-Shruti-Kapoor-is-all-about-finding-joy-in-the-process-%E2%9C%A8She-sh.mp4',
    6 => 'https://fitblissbysk.com/wp-content/uploads/2026/07/Kartikey-Singh-Chouhan-shares-his-journey-with-the-Fitbliss-by-Shruti-Kapoor%E2%9C%A8%E2%80%94-from-structured-w.mp4',
    7 => 'https://fitblissbysk.com/wp-content/uploads/2026/07/Real-people.-Real-struggles.-Real-transformation.Proud-to-be-part-of-your-journey.-%F0%9F%92%AB%E2%80%93-FitBliss.mp4',
    8 => 'https://fitblissbysk.com/wp-content/uploads/2026/07/Real-stories.-Real-results.-%F0%9F%92%AAHeres-what-our-Fitbliss-client-had-to-say-about-their-journey-%F0%9F%8C%9F.mp4',
    9 => 'https://fitblissbysk.com/wp-content/uploads/2026/07/Results-dont-come-from-shortcuts.They-come-from-consistency-care-and-the-right-guidance.Arti_.mp4',
    10 => 'https://fitblissbysk.com/wp-content/uploads/2026/07/Amanat-Singh-Chouhan-shares-her-experience-with-Fitbliss-by-Shruti-Kapoor-%E2%80%94-a-journey-guided-by.mp4',
    11 => 'https://fitblissbysk.com/wp-content/uploads/2026/07/1-Nothing-makes-us-happier-than-seeing-our-clients-transform-and-share-their-journey-with-us.mp4'
];

foreach ($videos as $i => $url) {
    $headers = @get_headers($url);
    $status = $headers ? $headers[0] : 'FAILED';
    echo "Video $i: $status\n  $url\n";
}
