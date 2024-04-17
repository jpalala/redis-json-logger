use Ulid\Ulid;
$ulid = new Ulid();

$ulidFromTime = $ulid->generate(1585083964945);
$ulidFromTime2 = $ulid->generate(1585083964945);
var_dump([$ulidFromTime, $ulidFromTime2]);
