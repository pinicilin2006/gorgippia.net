<?php exit; ?>
1451548932
SELECT ban_ip, ban_userid, ban_email, ban_exclude, ban_give_reason, ban_end FROM forum_banlist WHERE ban_email = '' AND (ban_userid = 1 OR ban_ip <> '')
6
a:0:{}