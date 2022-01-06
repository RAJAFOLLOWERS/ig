<script>
<button onclick="var jsVar = "<?php 
$nomor = array("6282121155227"); 
$nohp = $nomor[array_rand($nomor)]; 
$text = "Holla kak,saya mau beli *Followers, Liker* Atau mau tanya tanya dulu !";
header("Location: https://api.whatsapp.com/send?phone=$nohp&text=$text"); ?>"">
</script>
