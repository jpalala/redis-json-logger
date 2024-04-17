function generateULID()
{
    $time = microtime(true);
    $time *= 1000; // Convert to milliseconds
    $time = (int)$time;

    $entropy = mt_rand(0, 0xFFFF); // 16-bit entropy

    // Convert time to ULID format (10 characters)
    $timeChars = base_convert($time, 10, 36);
    $timeChars = str_pad($timeChars, 10, '0', STR_PAD_LEFT);

    // Convert entropy to ULID format (4 characters)
    $entropyChars = base_convert($entropy, 10, 36);
    $entropyChars = str_pad($entropyChars, 4, '0', STR_PAD_LEFT);

    // Combine time and entropy to form ULID
    $ulid = $timeChars . $entropyChars;

    return $ulid;
}
